/**
 * A module to manage ajax requests.
 *
 * @module moodle-report_loglive-fetchlogs
 */

/**
 * A module to manage ajax requests.
 *
 * @class moodle-report_loglive.fetchlogs
 * @extends Base
 * @constructor
 */
function FetchLogs() {
    FetchLogs.superclass.constructor.apply(this, arguments);
}


var CSS = {
        NEWROW: 'newrow',
        SPINNER: 'spinner',
        ICONSMALL: 'iconsmall'
    },
    SELECTORS = {
        NEWROW: '.' + CSS.NEWROW,
        TBODY: '.flexible tbody',
        ACTIONLINK: '[data-action="action-popup"]',
        PAUSEBUTTON: '#livelogs-pause-button',
        SPINNER: '.' + CSS.SPINNER
    };

Y.extend(FetchLogs, Y.Base, {
    /**
     * Reference to the callBack object generated by Y.later
     *
     * @property callBack
     * @type Object
     * @default {}
     * @protected
     */
    callBack: {},

    /**
     * Reference to the spinner node.
     *
     * @property callBack
     * @type Object
     * @default {}
     * @protected
     */
    spinner: {},

    /**
     * Reference to the toggleButton node.
     *
     * @property pauseButton
     * @type Object
     * @default {}
     * @protected
     */
    pauseButton: {},

    /**
     * Initializer.
     * Basic setup and event listeners.
     *
     * @method initializer
     */
    initializer: function() {
        // We don't want the pages to be updated when viewing a specific page in the chain.
        if (this.get('page') === 0) {
            this.callBack = Y.later(this.get('interval') * 1000, this, this.fetchRecentLogs, null, true);
        }

        this.spinner = Y.one(SELECTORS.SPINNER);
        this.pauseButton = Y.one(SELECTORS.PAUSEBUTTON);
        this.spinner.hide();
        Y.one(SELECTORS.TBODY).delegate('click', this.openActionLink, SELECTORS.ACTIONLINK, this);
        Y.one(SELECTORS.PAUSEBUTTON).on('click', this.toggleUpdate, this);
    },

    /**
     * Method to fetch recent logs.
     *
     * @method fetchRecentLogs
     */
    fetchRecentLogs: function() {
        this.spinner.show(); // Show a loading icon.
        var data = {
            logreader: this.get('logreader'),
            since: this.get('since'),
            page: this.get('page'),
            id: this.get('courseid')
        };
        var cfg = {
            method: 'get',
            context: this,
            on: {
                complete: this.updateLogTable
            },
            data: data
        };
        var url = M.cfg.wwwroot + '/report/loglive/loglive_ajax.php';
        Y.io(url, cfg);
    },

    /**
     * Method to update the log table, populate the table with new entries and remove old entries if needed.
     *
     * @method updateLogTable
     */
    updateLogTable: function(tid, response) {
        // Hide loading icon, give sometime to people to actually see it. We should do it, event in case of an error.
        Y.later(600, this, 'hideLoadingIcon');
        var responseobject;
        // Attempt to parse the response into an object.
        try {
            responseobject = Y.JSON.parse(response.responseText);
            if (responseobject.error) {
                Y.use('moodle-core-notification-ajaxexception', function() {
                    return new M.core.ajaxException(responseobject);
                });
                return this;
            }
        } catch (error) {
            Y.use('moodle-core-notification-exception', function() {
                return new M.core.exception(error);
            });
            return this;
        }
        this.set('since', responseobject.until);
        var logs = responseobject.logs;
        var tbody = Y.one(SELECTORS.TBODY);
        var firstTr = null;
        if (tbody && logs) {
            firstTr = tbody.get('firstChild');
            if (firstTr) {
                tbody.insertBefore(logs, firstTr);
            }
            // @Todo, when no data is present our library should generate an empty table. so data can be added
            // dynamically (MDL-44525).

            // Let us chop off some data from end of table to prevent really long pages.
            var oldChildren = tbody.get('children').slice(this.get('perpage'));
            oldChildren.remove();
            Y.later(5000, this, 'removeHighlight'); // Remove highlighting from new rows.
        }
    },

    /**
     * Remove background highlight from the newly added rows.
     *
     * @method removeHighlight
     */
    removeHighlight: function() {
        Y.all(SELECTORS.NEWROW).removeClass(CSS.NEWROW);
    },

    /**
     * Hide the spinning icon.
     *
     * @method hideLoadingIcon
     */
    hideLoadingIcon: function() {
        this.spinner.hide();
    },

    /**
     * Open a report action link
     *
     * @param {Event} event
     * @method openActionLink
     */
    openActionLink: function(event) {
        var popupAction = JSON.parse(event.target.get('dataset').popupAction);
        window.openpopup(event, popupAction.jsfunctionargs);
    },

    /**
     * Toggle live update.
     *
     * @method toggleUpdate
     */
    toggleUpdate: function() {
        if (this.callBack) {
            this.callBack.cancel();
            this.callBack = '';
            this.pauseButton.setContent(M.util.get_string('resume', 'report_loglive'));
        } else {
            this.callBack = Y.later(this.get('interval') * 1000, this, this.fetchRecentLogs, null, true);
            this.pauseButton.setContent(M.util.get_string('pause', 'report_loglive'));
        }
    }
}, {
    NAME: 'fetchLogs',
    ATTRS: {
        /**
         * time stamp from where the new logs needs to be fetched.
         *
         * @attribute since
         * @default null
         * @type String
         */
        since: null,

        /**
         * courseid for which the logs are shown.
         *
         * @attribute courseid
         * @default 0
         * @type int
         */
        courseid: 0,

        /**
         * Page number shown to user.
         *
         * @attribute page
         * @default 0
         * @type int
         */
        page: 0,

        /**
         * Items to show per page.
         *
         * @attribute perpage
         * @default 100
         * @type int
         */
        perpage: 100,

        /**
         * Refresh interval.
         *
         * @attribute interval
         * @default 60
         * @type int
         */
        interval: 60,

        /**
         * Which logstore is being used.
         *
         * @attribute logreader
         * @default logstore_standard
         * @type String
         */
        logreader: 'logstore_standard'
    }
});

Y.namespace('M.report_loglive.FetchLogs').init = function(config) {
    return new FetchLogs(config);
};