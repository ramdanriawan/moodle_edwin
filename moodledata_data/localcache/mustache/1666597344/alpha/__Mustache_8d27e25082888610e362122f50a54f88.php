<?php

class __Mustache_8d27e25082888610e362122f50a54f88 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-filterregion="filter">
';
        $buffer .= $indent . '    <fieldset>
';
        $buffer .= $indent . '        <legend class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section7d08096fbec331a547127473e7cda89e($context, $indent, $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '        <div class="filter-item d-flex flex-column flex-md-row align-items-center">
';
        $buffer .= $indent . '            <div class="d-sm-block d-md-flex flex-column flex-md-row align-items-md-center">
';
        $buffer .= $indent . '                <label for="core_user-local-participantsfilter-filterrow-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="badge my-0 mx-3">';
        $value = $context->find('str');
        $buffer .= $this->sectionD726d422e05b9ff019af1cc6e7917cae($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <select class="custom-select mx-1" data-filterfield="join" id="core_user-local-participantsfilter-filterrow-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    <option value="0">';
        $value = $context->find('str');
        $buffer .= $this->section3c3ca954d361e33d388cf608d356b919($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    <option selected=selected value="1">';
        $value = $context->find('str');
        $buffer .= $this->section38c54db526fff004e0d5a32f5c4dc410($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    <option value="2">';
        $value = $context->find('str');
        $buffer .= $this->section80d34145344e498ce4a9c8a1badc3408($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <label class="sr-only pt-2" for="core_user-local-participantsfilter-filterrow-filtertype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section26cfe5610f9c0a050672a6366c3bbc3e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <select class="custom-select mx-1" data-filterfield="type" id="core_user-local-participantsfilter-filterrow-filtertype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <option value="">';
        $value = $context->find('str');
        $buffer .= $this->sectionB35c829631908d0e4566cff258649931($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('filtertypes');
        $buffer .= $this->section0533dc21b1554df3447fa17be93b8481($context, $indent, $value);
        $buffer .= $indent . '            </select>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div data-filterregion="value" class="d-md-flex flex-column align-items-center flex-lg-row mb-1 mb-md-0 ml-sm-0 mr-sm-0 mr-md-2 w-100"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button data-filteraction="remove" class="ml-auto btn btn-icon btn-danger" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC69bd2021fcb71e2089d5db3b71e15ab($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"/>
';
        $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"/>
';
        $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"/>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div data-filterregion="joinadverb" class="my-2 pl-1">
';
        $buffer .= $indent . '            <div data-filterverbfor="0" class="badge badge-light text-left">';
        $value = $context->find('str');
        $buffer .= $this->section46e4c4cb9e7c85f673362ed022afa893($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div data-filterverbfor="1" class="badge badge-light text-left">';
        $value = $context->find('str');
        $buffer .= $this->section2feb8d4d1e839fd2d8504235bff7522e($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div data-filterverbfor="2" class="badge badge-light text-left">';
        $value = $context->find('str');
        $buffer .= $this->sectionB66971e2f8e58443f0df6685c60ae819($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </fieldset>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7d08096fbec331a547127473e7cda89e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filterrowlegend, core_user, {{rownumber}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filterrowlegend, core_user, ';
                $value = $this->resolveValue($context->find('rownumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
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

    private function section26cfe5610f9c0a050672a6366c3bbc3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtertype, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filtertype, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB35c829631908d0e4566cff258649931(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectfiltertype, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selectfiltertype, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0533dc21b1554df3447fa17be93b8481(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{name}}">{{title}}</option>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC69bd2021fcb71e2089d5db3b71e15ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearfilterrow, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearfilterrow, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46e4c4cb9e7c85f673362ed022afa893(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adverbfor_andnot, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'adverbfor_andnot, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2feb8d4d1e839fd2d8504235bff7522e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adverbfor_or, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'adverbfor_or, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB66971e2f8e58443f0df6685c60ae819(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adverbfor_and, core_user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'adverbfor_and, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
