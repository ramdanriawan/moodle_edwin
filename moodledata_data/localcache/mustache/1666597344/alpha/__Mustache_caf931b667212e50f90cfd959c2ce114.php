<?php

class __Mustache_caf931b667212e50f90cfd959c2ce114 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_alpha/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block ';
        $value = $context->findDot('output.courseheadermenu');
        $buffer .= $this->section074790dc1144afd4e123c57768aa2ba7($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->findDot('output.courseheadermenu');
        if (empty($value)) {
            
            $buffer .= 'rui--course-witout-nav';
        }
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="container-fluid drawers ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section2f9abbbc7cfc8a578df65e02c2f006ff($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div id="topofscroll" class="main-inner">
';
        $buffer .= $indent . '            <div id="page-content" class="page-content wrapper-page">
';
        $buffer .= $indent . '  
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/navbar-secondary')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.breadcrumbs'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('coursepageinformationbanners'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="wrapper-header">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionD28c04efb07428a305cf30b9de36f850($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div id="region-main-box" class="region-main-wrapper--fp">
';
        $buffer .= $indent . '                    <section id="region-main" class="region-main-content ';
        $value = $context->find('hasblocks');
        $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <div ';
        $value = $context->find('hasblocks');
        $buffer .= $this->section60be17912465fe6a072f0e6d332c7271($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                            <div class="';
        $value = $context->find('hasblocks');
        $buffer .= $this->section373cf0466f8349b6b0945a79b0183721($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionBf0818eee6c3fb77fa31c60b8439b559($context, $indent, $value);
        $buffer .= $indent . '           
';
        $value = $context->find('headercontent');
        $buffer .= $this->section6401545d16238f1238f2d687771de281($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->section7b1c6a51b69c4ea6e3253b16aeacde6e($context, $indent, $value);
        $buffer .= $indent . '                                
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->find('ruiscb'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '            
';
        $value = $context->find('hiddensidebar');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_alpha/nav-drawer')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/hasblocks-tmpl')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section428c43aa9fbd99ee7f8c69add836fcb6($context, $indent, $value);

        return $buffer;
    }

    private function section074790dc1144afd4e123c57768aa2ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui--course-with-nav';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui--course-with-nav';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f9abbbc7cfc8a578df65e02c2f006ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-hidden-drawer';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-hidden-drawer';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD28c04efb07428a305cf30b9de36f850(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                    <div class="header-actions-container ml-1" data-region="header-actions-container">
';
                $buffer .= $indent . '                        <div class="header-action">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60be17912465fe6a072f0e6d332c7271(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="blocks-wrapper d-inline-flex justify-content-between w-100"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="blocks-wrapper d-inline-flex justify-content-between w-100"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section373cf0466f8349b6b0945a79b0183721(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'wrapper-blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'wrapper-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf0818eee6c3fb77fa31c60b8439b559(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="region_main_settings_menu_proxy"></div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6401545d16238f1238f2d687771de281(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{> core/activity_header }}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b1c6a51b69c4ea6e3253b16aeacde6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="container-fluid tertiary-navigation">
                                        <div class="navitem">
                                            {{> core/url_select}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section428c43aa9fbd99ee7f8c69add836fcb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_alpha/loader\');
require([\'theme_alpha/loader\', \'theme_alpha/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_alpha/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_alpha/loader\');
';
                $buffer .= $indent . 'require([\'theme_alpha/loader\', \'theme_alpha/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_alpha/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
