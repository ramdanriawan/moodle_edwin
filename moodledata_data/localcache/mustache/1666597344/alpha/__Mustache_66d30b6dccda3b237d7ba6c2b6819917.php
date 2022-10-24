<?php

class __Mustache_66d30b6dccda3b237d7ba6c2b6819917 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="popover-region collapsed" data-region="popover-region-messages">
';
        $buffer .= $indent . '    <a id="message-drawer-toggle-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="rui-topbar-special-btn" href="#" role="button">
';
        $buffer .= $indent . '            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '                <path d="M9.99151 14.5101C12.7865 14.5101 15.233 12.9956 15.233 9.63003C15.233 6.26449 12.7865 4.75 9.99151 4.75C7.19653 4.75 4.75 6.26449 4.75 9.63003C4.75 10.8662 5.08005 11.8526 5.6362 12.606C5.83794 12.8793 5.79543 13.5163 5.63421 13.8153C5.24836 14.5309 5.97738 15.315 6.76977 15.1333C7.3629 14.9974 7.98504 14.8134 8.5295 14.5666C8.72883 14.4762 8.94893 14.4398 9.16641 14.4644C9.43657 14.4949 9.7123 14.5101 9.99151 14.5101Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '                <path d="M18.8088 10.0264C18.5473 9.70522 18.0748 9.65688 17.7537 9.91844C17.4325 10.18 17.3841 10.6524 17.6457 10.9736L18.8088 10.0264ZM18.3467 16.606L18.9501 17.0514L18.3467 16.606ZM15.4534 18.5666L15.1438 19.2497L15.1438 19.2497L15.4534 18.5666ZM17.2132 19.1333L17.3807 18.4023L17.3807 18.4023L17.2132 19.1333ZM14.8165 18.4644L14.9008 19.2096L14.9008 19.2096L14.8165 18.4644ZM10.9803 16.8944C10.6458 16.6501 10.1766 16.7231 9.93226 17.0575C9.6879 17.392 9.76093 17.8612 10.0954 18.1056L10.9803 16.8944ZM18.3487 17.8153L17.6886 18.1713L17.6886 18.1713L18.3487 17.8153ZM19.9829 13.63C19.9829 12.1584 19.5596 10.9483 18.8088 10.0264L17.6457 10.9736C18.151 11.5941 18.4829 12.4572 18.4829 13.63H19.9829ZM18.9501 17.0514C19.6137 16.1525 19.9829 15.0047 19.9829 13.63H18.4829C18.4829 14.7277 18.192 15.5527 17.7433 16.1606L18.9501 17.0514ZM15.1438 19.2497C15.7505 19.5247 16.4253 19.7222 17.0456 19.8644L17.3807 18.4023C16.8147 18.2725 16.2453 18.1021 15.7631 17.8835L15.1438 19.2497ZM13.9914 19.2601C14.2976 19.2601 14.6015 19.2435 14.9008 19.2096L14.7322 17.7191C14.4912 17.7464 14.2436 17.7601 13.9914 17.7601V19.2601ZM10.0954 18.1056C11.1905 18.9057 12.5779 19.2601 13.9914 19.2601V17.7601C12.8134 17.7601 11.759 17.4634 10.9803 16.8944L10.0954 18.1056ZM15.7631 17.8835C15.4442 17.739 15.0882 17.6789 14.7322 17.7191L14.9008 19.2096C14.9797 19.2007 15.064 19.2135 15.1438 19.2497L15.7631 17.8835ZM17.6886 18.1713C17.7076 18.2065 17.7058 18.2245 17.7043 18.2341C17.7019 18.2495 17.6921 18.2788 17.6617 18.3131C17.5963 18.3868 17.4894 18.4272 17.3807 18.4023L17.0456 19.8644C17.7293 20.0211 18.3831 19.7603 18.7839 19.3084C19.1945 18.8455 19.3725 18.1337 19.0089 17.4593L17.6886 18.1713ZM17.7433 16.1606C17.4917 16.5015 17.455 16.9378 17.4618 17.2191C17.4691 17.522 17.5335 17.8837 17.6886 18.1713L19.0089 17.4593C19.0109 17.4632 18.9979 17.4377 18.9842 17.3763C18.9716 17.3192 18.963 17.2514 18.9614 17.1829C18.9597 17.1133 18.9655 17.0587 18.9729 17.0242C18.9815 16.9836 18.9848 17.0045 18.9501 17.0514L17.7433 16.1606Z" fill="currentColor"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            <span class="';
        $value = $context->find('unreadcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= ' rui-unreadcount" data-region="count-container">';
        $value = $this->resolveValue($context->find('unreadcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '    </a>
';
        if ($partial = $this->mustache->loadPartial('core_message/message_jumpto')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section9cfc2f7c40dd8d474c4175bc8276b8fb($context, $indent, $value);

        return $buffer;
    }

    private function section9cfc2f7c40dd8d474c4175bc8276b8fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'core_message/message_popover\'
],
function(
    $,
    Popover
) {
    var toggle = $(\'#message-drawer-toggle-{{uniqid}}, .message-drawer-toggle, .message-drawer-backdrop\');
    Popover.init(toggle);
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_message/message_popover\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Popover
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var toggle = $(\'#message-drawer-toggle-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', .message-drawer-toggle, .message-drawer-backdrop\');
';
                $buffer .= $indent . '    Popover.init(toggle);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
