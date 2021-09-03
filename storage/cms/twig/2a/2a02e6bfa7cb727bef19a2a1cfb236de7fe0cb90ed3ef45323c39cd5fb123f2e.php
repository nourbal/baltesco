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
class __TwigTemplate_84c43ec938dc564e390dab6d18a5e8707a147c21c3385f63b5934ceee8f492d6 extends \Twig\Template
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
        echo "<header>
    <!-- header inner -->
    <div class=\"header\">
        <div class=\"head_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            <ul class=\"sociel_link\">
                                
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            
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
                                    <li> <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Nous contacter</a> </li>
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
        return array (  82 => 39,  67 => 27,  39 => 1,);
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
                                
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"top-box\">
                            
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
                                    <li> <a href=\"{{ 'contact'|page }}\">Nous contacter</a> </li>
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
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 27, "page" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
