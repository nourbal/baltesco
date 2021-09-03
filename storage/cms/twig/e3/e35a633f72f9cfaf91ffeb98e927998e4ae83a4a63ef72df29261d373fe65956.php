<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\laragon\www\baltesco/themes/baltesco/pages/contact.htm */
class __TwigTemplate_3204f8bda29cdfe8d2b6a2510c854a6717847b7ed5c8bc2bef0cd357b5208589 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- header -->
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <!-- end header -->
    
<div class=\"contact\" style=\"padding: 30px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"title\">
                    <h2>Contactez-<strong class=\"black\">nous</strong></h2>
                    <div class=\"row\" style=\"font-size: 22px\">
                        <div class=\"col-md-4\">
                            <i class=\"fa fa-phone\"></i>
                            <h6>
                                Tél : (+212)670028569<br>
                                Fax : (+212)612345678
                            </h6>
                        </div>
                        <div class=\"col-md-4\">
                            <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</h6>
                        </div>
                        <div class=\"col-md-4\">
                            <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                            <h6>baltescoop@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                ";
        // line 32
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 33
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  77 => 32,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- header -->
    {% partial \"header\" %}
    <!-- end header -->
    
<div class=\"contact\" style=\"padding: 30px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"title\">
                    <h2>Contactez-<strong class=\"black\">nous</strong></h2>
                    <div class=\"row\" style=\"font-size: 22px\">
                        <div class=\"col-md-4\">
                            <i class=\"fa fa-phone\"></i>
                            <h6>
                                Tél : (+212)670028569<br>
                                Fax : (+212)612345678
                            </h6>
                        </div>
                        <div class=\"col-md-4\">
                            <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</h6>
                        </div>
                        <div class=\"col-md-4\">
                            <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                            <h6>baltescoop@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                {% component 'contactForm' %}
            </div>
        </div>
    </div>
</div>", "C:\\laragon\\www\\baltesco/themes/baltesco/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 2, "component" => 32);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
