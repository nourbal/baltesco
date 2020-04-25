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
class __TwigTemplate_4cd47ea0d4d954ddfaa16af8655779d9e6156fa50351799e3a87c214ae12ab05 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Footer -->
<footer class=\"footer text-center\">
<div class=\"container\">
  <ul class=\"list-inline mb-5\">
    <li class=\"list-inline-item\">
      <a class=\"social-link rounded-circle text-white mr-3\" href=\"#\">
        <i class=\"icon-social-facebook\"></i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"social-link rounded-circle text-white mr-3\" href=\"#\">
        <i class=\"icon-social-twitter\"></i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"social-link rounded-circle text-white\" href=\"#\">
        <i class=\"icon-social-github\"></i>
      </a>
    </li>
  </ul>
  <p class=\"text-muted small mb-0\">Copyright &copy; baltesco 2020</p>
</div>
</footer>

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded js-scroll-trigger\" href=\"#page-top\">
<i class=\"fas fa-angle-up\"></i>
</a>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"footer text-center\">
<div class=\"container\">
  <ul class=\"list-inline mb-5\">
    <li class=\"list-inline-item\">
      <a class=\"social-link rounded-circle text-white mr-3\" href=\"#\">
        <i class=\"icon-social-facebook\"></i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"social-link rounded-circle text-white mr-3\" href=\"#\">
        <i class=\"icon-social-twitter\"></i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"social-link rounded-circle text-white\" href=\"#\">
        <i class=\"icon-social-github\"></i>
      </a>
    </li>
  </ul>
  <p class=\"text-muted small mb-0\">Copyright &copy; baltesco 2020</p>
</div>
</footer>

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded js-scroll-trigger\" href=\"#page-top\">
<i class=\"fas fa-angle-up\"></i>
</a>", "C:\\laragon\\www\\baltesco/themes/baltesco/partials/footer.htm", "");
    }
}
