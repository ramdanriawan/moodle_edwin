<?php

class __Mustache_a83fdb8d90399c37b43f2c20082b7753 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasblocks');
        $buffer .= $this->section795177f6d071eb494aaa0d8004f146c1($context, $indent, $value);

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section795177f6d071eb494aaa0d8004f146c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span id="sidepreopen-control"
        aria-expanded="{{#draweropenright}}true{{/draweropenright}}{{^draweropenright}}false{{/draweropenright}}"
        aria-controls="sidepre-blocks"
        data-action="toggle-drawer"
        data-side="right"
        data-preference="sidepre-open">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.25 4.75V19.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M4.75 12H15.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M8.25 8.75L4.75 12L8.25 15.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </span>

    <section id="sidepre-blocks" data-region="blocks-column" class="rui-blocks-column rui-blocks-area hidden-print">
        <div class="rui-sidebar-blocks-wrapper w-100">
            {{{ addblockbutton }}}
            {{{ sidepreblocks }}}
        </div>
    </section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span id="sidepreopen-control"
';
                $buffer .= $indent . '        aria-expanded="';
                $value = $context->find('draweropenright');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                $value = $context->find('draweropenright');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '"
';
                $buffer .= $indent . '        aria-controls="sidepre-blocks"
';
                $buffer .= $indent . '        data-action="toggle-drawer"
';
                $buffer .= $indent . '        data-side="right"
';
                $buffer .= $indent . '        data-preference="sidepre-open">
';
                $buffer .= $indent . '        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '            <path d="M19.25 4.75V19.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '            <path d="M4.75 12H15.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '            <path d="M8.25 8.75L4.75 12L8.25 15.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '        </svg>
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <section id="sidepre-blocks" data-region="blocks-column" class="rui-blocks-column rui-blocks-area hidden-print">
';
                $buffer .= $indent . '        <div class="rui-sidebar-blocks-wrapper w-100">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addblockbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
