<?php

class __Mustache_29c521220942ca9b2d74f83d23fb84f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="course-settings-menu">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="settingsMenu" class="settings-menu">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionEebd927434de1072d3ae818d7d47bafc($context, $indent, $value);
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('settingsmenu');
        $buffer .= $this->section6f77ecaac95faf813883f410d70b5505($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      </div>
';

        return $buffer;
    }

    private function sectionEebd927434de1072d3ae818d7d47bafc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="header-actions-container ml-1" data-region="header-actions-container">
            <div class="header-action">{{{.}}}</div>
          </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div class="header-actions-container ml-1" data-region="header-actions-container">
';
                $buffer .= $indent . '            <div class="header-action">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f77ecaac95faf813883f410d70b5505(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div id="headerBtn" class="header-settings-menu-box">
              {{{settingsmenu}}}
          </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div id="headerBtn" class="header-settings-menu-box">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
