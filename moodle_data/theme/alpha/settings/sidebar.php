<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_alpha
 * @copyright 2022 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 *
 */


defined('MOODLE_INTERNAL') || die();


$page = new admin_settingpage('theme_alpha_settingssidebar', get_string( 'settingssidebar', 'theme_alpha'));
    $name = 'theme_alpha/customsidebarlogo';
    $title = get_string('customsidebarlogo', 'theme_alpha');
    $description = get_string('customsidebarlogo_desc', 'theme_alpha');
    $opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'customsidebarlogo', 0, $opts);
    $page->add($setting);

    // $name = 'theme_alpha/customsidebardmlogo';
    // $title = get_string('customsidebardmlogo', 'theme_alpha');
    // $description = get_string('customsidebardmlogo_desc', 'theme_alpha');
    // $opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'customsidebardmlogo', 0, $opts);
    // $page->add($setting);

    $name = 'theme_alpha/customnavitems';
    $title = get_string('customnavitems', 'theme_alpha');
    $description = get_string('customnavitems_desc', 'theme_alpha');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/customstcontent';
    $title = get_string('customstcontent', 'theme_alpha');
    $description = get_string('customstcontent_desc', 'theme_alpha');
    $default = '';
    $setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/customsmcontent';
    $title = get_string('customsmcontent', 'theme_alpha');
    $description = get_string('customsmcontent_desc', 'theme_alpha');
    $default = '';
    $setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/customsfcontent';
    $title = get_string('customsfcontent', 'theme_alpha');
    $description = get_string('customsfcontent_desc', 'theme_alpha');
    $default = '';
    $setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/hturnoffsidebar';
    $heading = get_string('hturnoffsidebar', 'theme_alpha');
    $setting = new admin_setting_heading($name, $heading, format_text(get_string('hturnoffsidebar_desc', 'theme_alpha'), FORMAT_MARKDOWN));
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebarfp';
    $title = get_string('turnoffsidebarfp', 'theme_alpha');
    $description = get_string('turnoffsidebarfp_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebardashboard';
    $title = get_string('turnoffsidebardashboard', 'theme_alpha');
    $description = get_string('turnoffsidebardashboard_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebarcourse';
    $title = get_string('turnoffsidebarcourse', 'theme_alpha');
    $description = get_string('turnoffsidebarcourse_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebarincourse';
    $title = get_string('turnoffsidebarincourse', 'theme_alpha');
    $description = get_string('turnoffsidebarincourse_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebarreport';
    $title = get_string('turnoffsidebarreport', 'theme_alpha');
    $description = get_string('turnoffsidebarreport_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebarstandard';
    $title = get_string('turnoffsidebarstandard', 'theme_alpha');
    $description = get_string('turnoffsidebarstandard_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/turnoffsidebaradmin';
    $title = get_string('turnoffsidebaradmin', 'theme_alpha');
    $description = get_string('turnoffsidebaradmin_desc', 'theme_alpha');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/hmycoursesbtn';
    $heading = get_string('hmycoursesbtn', 'theme_alpha');
    $setting = new admin_setting_heading($name, $heading, format_text(get_string('hmycoursesbtn_desc', 'theme_alpha'), FORMAT_MARKDOWN));
    $page->add($setting);

    $name = 'theme_alpha/stringmycourses';
    $title = get_string('stringmycourses', 'theme_alpha');
    $description = get_string('stringmycourses_desc', 'theme_alpha');
    $default = 'My Courses';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/stringdetails';
    $title = get_string('stringdetails', 'theme_alpha');
    $description = get_string('stringdetails_desc', 'theme_alpha');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/stringallcourses';
    $title = get_string('stringallcourses', 'theme_alpha');
    $description = get_string('stringallcourses_desc', 'theme_alpha');
    $default = '<span>List of all available courses</span><svg width="18" height="18" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path></svg>';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/stringnocourses';
    $title = get_string('stringnocourses', 'theme_alpha');
    $description = get_string('stringnocourses_desc', 'theme_alpha');
    $default = 'You are not enrolled in any courses.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/hsidebarcolors';
    $heading = get_string('hsidebarcolors', 'theme_alpha');
    $setting = new admin_setting_heading($name, $heading, format_text(get_string('hsidebarcolors_desc', 'theme_alpha'), FORMAT_MARKDOWN));
    $page->add($setting);

    $name = 'theme_alpha/colordrawerbg';
    $title = get_string('colordrawerbg', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
  
    $name = 'theme_alpha/colordrawernavboxbg';
    $title = get_string('colordrawernavboxbg', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_alpha/colordrawertext';
    $title = get_string('colordrawertext', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
  
    $name = 'theme_alpha/colordrawernavbtnicon';
    $title = get_string('colordrawernavbtnicon', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_alpha/colordrawernavcontainer';
    $title = get_string('colordrawernavcontainer', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_alpha/colordrawernavbtntext';
    $title = get_string('colordrawernavbtntext', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_alpha/colordrawernavbtntexth';
    $title = get_string('colordrawernavbtntexth', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_alpha/colordrawernavbtnbgh';
    $title = get_string('colordrawernavbtnbgh', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_alpha/colordrawernavbtntextlight';
    $title = get_string('colordrawernavbtntextlight', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
      
    $name = 'theme_alpha/colordrawerscrollbar';
    $title = get_string('colordrawerscrollbar', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);  

    $name = 'theme_alpha/colordrawerlink';
    $title = get_string('colordrawerlink', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);  

    $name = 'theme_alpha/colordrawerlinkh';
    $title = get_string('colordrawerlinkh', 'theme_alpha');
    $description = get_string('color_desc', 'theme_alpha');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);  
    

    $name = 'theme_alpha/hmainnav';
	$heading = get_string('hmainnav', 'theme_alpha');
	$setting = new admin_setting_heading($name, $heading, format_text(get_string('hmainnav_desc', 'theme_alpha'), FORMAT_MARKDOWN));
	$page->add($setting);

    $name = 'theme_alpha/isitemonsitehome';
    $title = get_string('isitemonsitehome', 'theme_alpha');
    $description = get_string('isitemonsitehome_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/isitemondashboard';
    $title = get_string('isitemondashboard', 'theme_alpha');
    $description = get_string('isitemondashboard_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    // $name = 'theme_alpha/isitemonmycourses';
    // $title = get_string('isitemonmycourses', 'theme_alpha');
    // $description = get_string('isitemonmycourses_desc', 'theme_alpha');
    // $default = 0;
    // $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    // $page->add($setting);

    $name = 'theme_alpha/isitemoncalendar';
    $title = get_string('isitemoncalendar', 'theme_alpha');
    $description = get_string('isitemoncalendar_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/isitemonprivatefiles';
    $title = get_string('isitemonprivatefiles', 'theme_alpha');
    $description = get_string('isitemonprivatefiles_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/isitemoncontentbank';
    $title = get_string('isitemoncontentbank', 'theme_alpha');
    $description = get_string('isitemoncontentbank_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);


    // Start - Course Navigation
    $name = 'theme_alpha/hcoursenavitems';
	$heading = get_string('hcoursenavitems', 'theme_alpha');
	$setting = new admin_setting_heading($name, $heading, format_text(get_string('hcoursenavitems_desc', 'theme_alpha'), FORMAT_MARKDOWN));
	$page->add($setting);

    $name = 'theme_alpha/isitemonparticipants';
    $title = get_string('isitemonparticipants', 'theme_alpha');
    $description = get_string('isitemonparticipants_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/isitemonbadges';
    $title = get_string('isitemonbadges', 'theme_alpha');
    $description = get_string('isitemonbadges_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/isitemoncompetencies';
    $title = get_string('isitemoncompetencies', 'theme_alpha');
    $description = get_string('isitemoncompetencies_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);

    $name = 'theme_alpha/isitemongrades';
    $title = get_string('isitemongrades', 'theme_alpha');
    $description = get_string('isitemongrades_desc', 'theme_alpha');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $page->add($setting);
    // End - Course Navigation

// Must add the page after definiting all the settings!
$settings->add($page);
