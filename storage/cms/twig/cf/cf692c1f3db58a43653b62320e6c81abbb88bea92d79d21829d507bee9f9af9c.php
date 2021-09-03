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
class __TwigTemplate_edeafb81fda6da8624900e10d62dfe139c7faaccab644f85a1f08dcb0e9ef680 extends \Twig\Template
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
        echo "<footer>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 offset-md-3\">
                    <ul class=\"sociel\">
                        <li> <a href=\"https://web.facebook.com/C.Baltesco\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>nous contacter</h3>
                        <ul class=\"lik\">
                            <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> baltescoop@gmail.com</li>
                            <li><i class=\"fa fa-phone\"></i> (+212)670028569</li>
                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Maroc, ouarzazate</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Liens</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\">Accueil</a></li>
                            <li> <a href=\"#\">Qui somme-nous?</a></li>
                            <li> <a href=\"#\">Produits</a></li>
                            <li> <a href=\"#\">Blog</a></li>
                            <li> <a href=\"#\">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Nos services</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\">Mécatronique automobile</a></li>
                            <li> <a href=\"#\">Formations</a></li>
                            <li> <a href=\"#\">Installation GPS, Radars et caméra ...</a></li>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Baltesco</h3>
                        <span>
                            La coopérative BALTESCO a pour objectif de satisfaire vos besoins de Mécatronique automobile; Formations de qualités;Installation des composantes technologiques des véhicules\" GPS,Radars et Camera de recule,...\" . Autres services.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <p>Copyright ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Tous droits réservés par <u>baltesco</u></p>
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
        return array (  96 => 56,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 offset-md-3\">
                    <ul class=\"sociel\">
                        <li> <a href=\"https://web.facebook.com/C.Baltesco\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li> <a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>nous contacter</h3>
                        <ul class=\"lik\">
                            <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> baltescoop@gmail.com</li>
                            <li><i class=\"fa fa-phone\"></i> (+212)670028569</li>
                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Maroc, ouarzazate</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Liens</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\">Accueil</a></li>
                            <li> <a href=\"#\">Qui somme-nous?</a></li>
                            <li> <a href=\"#\">Produits</a></li>
                            <li> <a href=\"#\">Blog</a></li>
                            <li> <a href=\"#\">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Nos services</h3>
                        <ul class=\"lik\">
                            <li> <a href=\"#\">Mécatronique automobile</a></li>
                            <li> <a href=\"#\">Formations</a></li>
                            <li> <a href=\"#\">Installation GPS, Radars et caméra ...</a></li>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"contact\">
                        <h3>Baltesco</h3>
                        <span>
                            La coopérative BALTESCO a pour objectif de satisfaire vos besoins de Mécatronique automobile; Formations de qualités;Installation des composantes technologiques des véhicules\" GPS,Radars et Camera de recule,...\" . Autres services.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <p>Copyright {{ 'now' | date('Y') }} Tous droits réservés par <u>baltesco</u></p>
        </div>
    </div>
</footer>", "C:\\laragon\\www\\baltesco/themes/baltesco/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 56, "date" => 56);
        static $functions = array();

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
}
