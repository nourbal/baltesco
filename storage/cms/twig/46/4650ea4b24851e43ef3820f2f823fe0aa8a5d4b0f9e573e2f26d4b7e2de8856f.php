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

/* C:\laragon\www\baltesco/plugins/laminsanneh/flexicontact/components/contactform/default.htm */
class __TwigTemplate_7765d85474bde7663f2c2396a004353d2bb2d6431c035a61229a0f4aaa9d3053 extends \Twig\Template
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
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>


<form class=\"main_form flexiContactForm\" role=\"form\"
      data-request=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 8, $this->source), "html", null, true);
        echo "::confirm': '.confirm-container'\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <input class=\"form-control\" placeholder=\"Nom complet\" type=\"text\" name=\"name\">
                </div>
                <div class=\"col-md-12 col-sm-12\">
                    <input class=\"form-control\" placeholder=\"Email\" type=\"text\" name=\"email\">
                </div>
                <div class=\"col-md-12 col-sm-12\">
                    <input class=\"form-control\" placeholder=\"Téléphone\" type=\"text\" name=\"phone\">
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <textarea class=\"textarea\" placeholder=\"Message\" name=\"body\" style=\"min-height: 170px\"></textarea>
        </div>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableCaptcha", [], "any", false, false, true, 26)) {
            // line 27
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "siteKey", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 31
        echo "        <div class=\" col-md-12\">
            <button class=\"btn btn-dark\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i> Envoyer</button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/plugins/laminsanneh/flexicontact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  77 => 28,  74 => 27,  72 => 26,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>


<form class=\"main_form flexiContactForm\" role=\"form\"
      data-request=\"{{ __SELF__ }}::onMailSent\"
      data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-container'\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <input class=\"form-control\" placeholder=\"Nom complet\" type=\"text\" name=\"name\">
                </div>
                <div class=\"col-md-12 col-sm-12\">
                    <input class=\"form-control\" placeholder=\"Email\" type=\"text\" name=\"email\">
                </div>
                <div class=\"col-md-12 col-sm-12\">
                    <input class=\"form-control\" placeholder=\"Téléphone\" type=\"text\" name=\"phone\">
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <textarea class=\"textarea\" placeholder=\"Message\" name=\"body\" style=\"min-height: 170px\"></textarea>
        </div>
        {% if __SELF__.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.siteKey }}\"></div>
            </div>
        {% endif %}
        <div class=\" col-md-12\">
            <button class=\"btn btn-dark\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i> Envoyer</button>
        </div>
    </div>
</form>", "C:\\laragon\\www\\baltesco/plugins/laminsanneh/flexicontact/components/contactform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
