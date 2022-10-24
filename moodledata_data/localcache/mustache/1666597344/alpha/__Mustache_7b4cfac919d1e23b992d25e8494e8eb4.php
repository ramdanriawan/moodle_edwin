<?php

class __Mustache_7b4cfac919d1e23b992d25e8494e8eb4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    id="';
        $blockFunction = $context->findInBlock('drawerid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= 'drawer-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '    class="';
        $blockFunction = $context->findInBlock('drawerclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= ' message-drawer drawer ';
        $value = $context->find('show');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '"
';
        $buffer .= $indent . '    aria-expanded="';
        $value = $context->find('show');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        $value = $context->find('show');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $value = $context->find('show');
        if (empty($value)) {
            
            $buffer .= 'aria-hidden="true"';
        }
        $buffer .= '
';
        $buffer .= $indent . '    data-region="right-hand-drawer"
';
        $buffer .= $indent . '    role="region"
';
        $buffer .= $indent . '    tabindex="0"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('drawercontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="message-drawer-backdrop ';
        $value = $context->find('show');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '" role="region" aria-expanded="';
        $value = $context->find('show');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        $value = $context->find('show');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '" aria-hidden="';
        $value = $context->find('show');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        $value = $context->find('show');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '" data-region="right-hand-drawer" tabindex="-1"></div>
';

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

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
