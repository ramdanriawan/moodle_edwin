<?php

class __Mustache_16cd4d81157b89409cdf0e5d91320aa6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionD29229e07a83cca1d96bbf5ab5cedbe4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <ol class="breadcrumb">';
        $value = $context->find('get_items');
        $buffer .= $this->sectionC0d230353fa720f81ecd49e54acdb219($context, $indent, $value);
        $buffer .= '</ol>
';
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function sectionD29229e07a83cca1d96bbf5ab5cedbe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'breadcrumb, access';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'breadcrumb, access';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b0060da9667da720e6932d1b9543c15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' dimmed_text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dabfc6e3de0f7ff4baa136bb16e58d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="page"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="page"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD354c672815be9693153e2ed645cc2eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{get_title}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb8c80bdc16b1696887936354271b940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}" {{#is_last}}aria-current="page"{{/is_last}} {{#get_title}}title="{{get_title}}"{{/get_title}}><span class="text-truncate">{{{get_content}}}</span></a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="breadcrumb-item';
                $value = $context->find('is_hidden');
                $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('is_last');
                $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('get_title');
                $buffer .= $this->sectionD354c672815be9693153e2ed645cc2eb($context, $indent, $value);
                $buffer .= '><span class="text-truncate">';
                $value = $this->resolveValue($context->find('get_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span></a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0d230353fa720f81ecd49e54acdb219(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}" {{#is_last}}aria-current="page"{{/is_last}} {{#get_title}}title="{{get_title}}"{{/get_title}}><span class="text-truncate">{{{get_content}}}</span></a>
                </li>
            {{/has_action}}
            {{^has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}"><span class="breadcrumbs-textonly"><span class="text-truncate">{{{text}}}</span></span></li>
            {{/has_action}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $value = $context->find('has_action');
                $buffer .= $this->sectionDb8c80bdc16b1696887936354271b940($context, $indent, $value);
                $value = $context->find('has_action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="breadcrumb-item';
                    $value = $context->find('is_hidden');
                    $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                    $buffer .= '"><span class="breadcrumbs-textonly"><span class="text-truncate">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span></span></li>
';
                }
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
