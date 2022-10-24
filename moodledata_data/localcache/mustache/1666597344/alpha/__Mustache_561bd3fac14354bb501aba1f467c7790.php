<?php

class __Mustache_561bd3fac14354bb501aba1f467c7790 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="sticky-header-settings-menu d-inline-flex">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.customeditblockbtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }
}
