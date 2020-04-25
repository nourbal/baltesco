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
class __TwigTemplate_982360ee51b8a5a8d8c73e4a7001f56c895cca6dac0db68faa59cc7f4f595278 extends \Twig\Template
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
        echo "<!-- Navigation -->
<a class=\"menu-toggle rounded\" href=\"#\">
<i class=\"fas fa-bars\"></i>
</a>
<nav id=\"sidebar-wrapper\">
<ul class=\"sidebar-nav\">
  <li class=\"sidebar-brand\">
    <a class=\"js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#page-top\">Home</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#about\">About</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#services\">Services</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#contact\">Contact</a>
  </li>
</ul>
</nav>

<!-- Header -->
<header class=\"masthead d-flex\">
<div class=\"container text-center my-auto\">
  <h1 class=\"mb-1\">Baltesco.com</h1>
  <h3 class=\"mb-5\">
    <em>coopérative baltesco</em>
  </h3>
  <a class=\"btn btn-primary btn-xl js-scroll-trigger\" href=\"#about\">Find Out More</a>
</div>
<div class=\"overlay\"></div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/partials/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->
<a class=\"menu-toggle rounded\" href=\"#\">
<i class=\"fas fa-bars\"></i>
</a>
<nav id=\"sidebar-wrapper\">
<ul class=\"sidebar-nav\">
  <li class=\"sidebar-brand\">
    <a class=\"js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#page-top\">Home</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#about\">About</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#services\">Services</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
  </li>
  <li class=\"sidebar-nav-item\">
    <a class=\"js-scroll-trigger\" href=\"#contact\">Contact</a>
  </li>
</ul>
</nav>

<!-- Header -->
<header class=\"masthead d-flex\">
<div class=\"container text-center my-auto\">
  <h1 class=\"mb-1\">Baltesco.com</h1>
  <h3 class=\"mb-5\">
    <em>coopérative baltesco</em>
  </h3>
  <a class=\"btn btn-primary btn-xl js-scroll-trigger\" href=\"#about\">Find Out More</a>
</div>
<div class=\"overlay\"></div>
</header>", "C:\\laragon\\www\\baltesco/themes/baltesco/partials/header.htm", "");
    }
}
