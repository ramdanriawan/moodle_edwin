<?php

class __Mustache_8778e33350ce89cec664e6c0bc790f37 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-textarea mr-2 w-100">
';
        $buffer .= $indent . '    <textarea rows="';
        $value = $this->resolveValue($context->find('rows'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" cols="';
        $value = $this->resolveValue($context->find('cols'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" spellcheck="true" class="form-control ';
        $value = $context->find('forceltr');
        $buffer .= $this->sectionE883efc355488afa28c6a1efa34031dd($context, $indent, $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</textarea>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE883efc355488afa28c6a1efa34031dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-ltr';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-ltr';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
