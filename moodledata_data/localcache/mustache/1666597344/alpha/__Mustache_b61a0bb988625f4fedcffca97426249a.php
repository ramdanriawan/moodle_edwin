<?php

class __Mustache_b61a0bb988625f4fedcffca97426249a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block16a1881121b0edc7a58387bcb746c5a4'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionDe96e74ef7b063facbc06a7d6ee68739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{html}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block16a1881121b0edc7a58387bcb746c5a4($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <span class="fdate_selector d-flex align-items-center">
';
        $value = $context->findDot('element.elements');
        $buffer .= $this->sectionDe96e74ef7b063facbc06a7d6ee68739($context, $indent, $value);
        $buffer .= $indent . '        </span>
';
    
        return $buffer;
    }
}
