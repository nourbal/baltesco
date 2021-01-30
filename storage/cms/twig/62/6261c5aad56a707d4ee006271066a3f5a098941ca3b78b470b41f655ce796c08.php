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

/* C:\laragon\www\baltesco/themes/baltesco/partials/footer.htm */
class __TwigTemplate_082506dae6645ce69f23d3bca43563a600c15e44b8ca90f5c9299cc8c6b4414c extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 52, "date" => 52);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
        echo "<footer>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 offset-md-3\">
                    <ul class=\"sociel\">
                        <li> <a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>nous contacter</h3>
                        <span>123 Second Street Fifth Avenue,<br>
                            Manhattan, New York<br>
                            +987 654 3210</span>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Liens</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\">A propos de nous</a></li>
                            <li> <a href=\"#\">nous contacter</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>service</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\"> Data recovery</a></li>
                            <li> <a href=\"#\">Computer repair</a></li>
                            <li> <a href=\"#\">Mobile service</a></li>
                            <li> <a href=\"#\">Network solutions</a></li>
                            <li> <a href=\"#\">Technical support</a></li>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Coopérative Baltesco</h3>
                        <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <p>Copyright ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Tous droits réservés par <a href=\"#\">baltesco</a></p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 offset-md-3\">
                    <ul class=\"sociel\">
                        <li> <a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>nous contacter</h3>
                        <span>123 Second Street Fifth Avenue,<br>
                            Manhattan, New York<br>
                            +987 654 3210</span>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Liens</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\">A propos de nous</a></li>
                            <li> <a href=\"#\">nous contacter</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>service</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\"> Data recovery</a></li>
                            <li> <a href=\"#\">Computer repair</a></li>
                            <li> <a href=\"#\">Mobile service</a></li>
                            <li> <a href=\"#\">Network solutions</a></li>
                            <li> <a href=\"#\">Technical support</a></li>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Coopérative Baltesco</h3>
                        <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <p>Copyright {{ 'now' | date('Y') }} Tous droits réservés par <a href=\"#\">baltesco</a></p>
        </div>
    </div>
</footer>", "C:\\laragon\\www\\baltesco/themes/baltesco/partials/footer.htm", "");
    }
}
