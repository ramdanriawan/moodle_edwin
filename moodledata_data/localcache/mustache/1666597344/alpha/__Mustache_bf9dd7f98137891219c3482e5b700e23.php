<?php

class __Mustache_bf9dd7f98137891219c3482e5b700e23 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="core_user-participantsfilter-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="filter-group wrapper-fw" data-table-region="';
        $value = $this->resolveValue($context->find('tableregionid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-table-course-id="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-filterverb="1">
';
        $buffer .= $indent . '    <div data-filterregion="filtermatch" class="hidden participantsfilter-filtermatch mt-0 mb-2">
';
        $buffer .= $indent . '        <label for="core_user-local-participantsfilter-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="badge my-0" aria-hidden="true">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->sectionD726d422e05b9ff019af1cc6e7917cae($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <select class="custom-select custom-select-sm" data-filterfield="join" id="core_user-local-participantsfilter-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section3fcbd86d9e2b384d8ce82b4f5cc07707($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <option value="0">';
        $value = $context->find('str');
        $buffer .= $this->section3c3ca954d361e33d388cf608d356b919($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '            <option selected=selected value="1">';
        $value = $context->find('str');
        $buffer .= $this->section38c54db526fff004e0d5a32f5c4dc410($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '            <option value="2">';
        $value = $context->find('str');
        $buffer .= $this->section80d34145344e498ce4a9c8a1badc3408($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        <span class="badge" aria-hidden="true">';
        $value = $context->find('str');
        $buffer .= $this->sectionE82cb915ce4929c89886aa7e7f40ca93($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-filterregion="filters">
';
        if ($partial = $this->mustache->loadPartial('core_user/local/participantsfilter/filterrow')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="d-sm-block d-md-flex mt-2" data-filterregion="actions">
';
        $buffer .= $indent . '        <button type="button" class="btn btn-sm btn-primary" data-filteraction="add">
';
        $buffer .= $indent . '            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75V4.75C16.0041 4.75 19.25 7.99594 19.25 12V12C19.25 16.0041 16.0041 19.25 12 19.25V19.25C7.99594 19.25 4.75 16.0041 4.75 12V12Z"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8.75003V15.25"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.25 12L8.75 12"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            <span class="ml-2">';
        $value = $context->find('str');
        $buffer .= $this->section135e05079eff780fdefafb6322529077($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button data-filteraction="reset" type="button" class="btn btn-sm btn-secondary ml-auto mr-2 my-sm-2 my-md-0">
';
        $buffer .= $indent . '            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75V4.75C16.0041 4.75 19.25 7.99594 19.25 12V12C19.25 16.0041 16.0041 19.25 12 19.25V19.25C7.99594 19.25 4.75 16.0041 4.75 12V12Z"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 9.75L14.25 14.25"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.25 9.75L9.75 14.25"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            <span class="ml-2">';
        $value = $context->find('str');
        $buffer .= $this->sectionBd320814b1fd5e3ea7ddb2d11add48f7($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button data-filteraction="apply" type="button" class="btn btn-sm btn-success">
';
        $buffer .= $indent . '            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            <span class="ml-2">';
        $value = $context->find('str');
        $buffer .= $this->section804d77bea705d171d3d4bc26a005882b($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core_user/local/participantsfilter/filtertypes')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionC203174791c97c07f1b563cd24f867f7($context, $indent, $value);

        return $buffer;
    }

    private function sectionD726d422e05b9ff019af1cc6e7917cae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'match, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'match, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fcbd86d9e2b384d8ce82b4f5cc07707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtersetmatchdescription, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filtersetmatchdescription, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c3ca954d361e33d388cf608d356b919(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'none';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38c54db526fff004e0d5a32f5c4dc410(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'any';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'any';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80d34145344e498ce4a9c8a1badc3408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'all';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE82cb915ce4929c89886aa7e7f40ca93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'matchofthefollowing, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'matchofthefollowing, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section135e05079eff780fdefafb6322529077(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcondition, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcondition, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd320814b1fd5e3ea7ddb2d11add48f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearfilters, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearfilters, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section804d77bea705d171d3d4bc26a005882b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'applyfilters, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'applyfilters, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC203174791c97c07f1b563cd24f867f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_user/participantsfilter\'], function(ParticipantsFilter) {
    ParticipantsFilter.init(\'core_user-participantsfilter-{{uniqid}}\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_user/participantsfilter\'], function(ParticipantsFilter) {
';
                $buffer .= $indent . '    ParticipantsFilter.init(\'core_user-participantsfilter-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
