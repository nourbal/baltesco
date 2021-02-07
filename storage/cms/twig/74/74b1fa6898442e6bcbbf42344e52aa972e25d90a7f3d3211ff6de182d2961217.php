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

/* C:\laragon\www\baltesco/themes/baltesco/partials/header.htm */
class __TwigTemplate_c5e01766b6e0db475c9a527561f06a564ac780f49336bd110f6c1de6b89f58cf extends \Twig\Template
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
        $tags = array("component" => 10);
        $filters = array("theme" => 27);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['theme'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header>
    <!-- header inner -->
    <div class=\"header\">
        <div class=\"head_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            <ul class=\"sociel_link\">
                                ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("link"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("link2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section\">
                    <div class=\"full\">
                        <div class=\"center-desk\">
                            <div class=\"logo\"> <a href=\"/\"><img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\" /></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7 col-lg-7 col-md-9 col-sm-9\">
                    <div class=\"menu-area\">
                        <div class=\"limit-box\">
                            <nav class=\"main-menu\">
                                <ul class=\"menu-area-main\">
                                    <li> <a href=\"about.html\">Qui somme-nous?</a> </li>
                                    <li> <a href=\"product.html\">Produits</a> </li>
                                    <li> <a href=\"blog.html\">Blog</a> </li>
                                    <li> <a href=\"contact.html\">Nous contacter</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  88 => 17,  84 => 16,  77 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <!-- header inner -->
    <div class=\"header\">
        <div class=\"head_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            <ul class=\"sociel_link\">
                                {% component 'link' %}
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            {% component 'link2' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section\">
                    <div class=\"full\">
                        <div class=\"center-desk\">
                            <div class=\"logo\"> <a href=\"/\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\" /></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7 col-lg-7 col-md-9 col-sm-9\">
                    <div class=\"menu-area\">
                        <div class=\"limit-box\">
                            <nav class=\"main-menu\">
                                <ul class=\"menu-area-main\">
                                    <li> <a href=\"about.html\">Qui somme-nous?</a> </li>
                                    <li> <a href=\"product.html\">Produits</a> </li>
                                    <li> <a href=\"blog.html\">Blog</a> </li>
                                    <li> <a href=\"contact.html\">Nous contacter</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
</header>", "C:\\laragon\\www\\baltesco/themes/baltesco/partials/header.htm", "");
    }
}
