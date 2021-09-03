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

/* C:\laragon\www\baltesco/themes/baltesco/layouts/default.htm */
class __TwigTemplate_0be94c4ce086ec1d7de1d18e760007ebffd5fc1d0a3a617b987a193da90ca72f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- mobile metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <!-- site metas -->
    <title>baltesco</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- bootstrap css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
    <!-- style css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <!-- Responsive-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
    <!-- fevicon -->
    <link rel=\"icon\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fevicon.png");
        echo "\" type=\"image/gif\" />
    <!-- Scrollbar Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.mCustomScrollbar.min.css");
        echo "\">
    <!-- Tweaks for older IEs-->
    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>
</head>
<!-- body -->

<body class=\"main-layout\">
    <!-- loader  -->
    <div class=\"loader_bg\">
        <div class=\"loader\"><img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/loading.gif");
        echo "\" alt=\"#\" /></div>
    </div>
    <!-- end loader -->
    
    ";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 48
        echo "    
    <!--  footer -->
    ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "    <!-- end footer -->
    <!-- Javascript files-->
    <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.0.0.min.js");
        echo "\"></script>
    <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugin.js");
        echo "\"></script>
    <!-- sidebar -->
    <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mCustomScrollbar.concat.min.js");
        echo "\"></script>
    <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
    ";
        // line 62
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 63
        echo "    <script>
    \$(document).ready(function() {
        \$(\".fancybox\").fancybox({
            openEffect: \"none\",
            closeEffect: \"none\"
        });

        \$(\".zoom\").hover(function() {

            \$(this).addClass('transition');
        }, function() {

            \$(this).removeClass('transition');
        });
    });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 63,  149 => 62,  144 => 60,  140 => 59,  135 => 57,  131 => 56,  127 => 55,  123 => 54,  119 => 53,  115 => 51,  111 => 50,  107 => 48,  105 => 47,  98 => 43,  77 => 25,  72 => 23,  67 => 21,  62 => 19,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- mobile metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <!-- site metas -->
    <title>baltesco</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- bootstrap css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">
    <!-- style css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
    <!-- Responsive-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css'|theme }}\">
    <!-- fevicon -->
    <link rel=\"icon\" href=\"{{ 'assets/images/fevicon.png'|theme }}\" type=\"image/gif\" />
    <!-- Scrollbar Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery.mCustomScrollbar.min.css'|theme }}\">
    <!-- Tweaks for older IEs-->
    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>
</head>
<!-- body -->

<body class=\"main-layout\">
    <!-- loader  -->
    <div class=\"loader_bg\">
        <div class=\"loader\"><img src=\"{{ 'assets/images/loading.gif'|theme }}\" alt=\"#\" /></div>
    </div>
    <!-- end loader -->
    
    {% page %}
    
    <!--  footer -->
    {% partial \"footer\" %}
    <!-- end footer -->
    <!-- Javascript files-->
    <script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/bootstrap.bundle.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery-3.0.0.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/plugin.js'|theme }}\"></script>
    <!-- sidebar -->
    <script src=\"{{ 'assets/js/jquery.mCustomScrollbar.concat.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script>
    <script src=\"https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
    {% framework extras %}
    <script>
    \$(document).ready(function() {
        \$(\".fancybox\").fancybox({
            openEffect: \"none\",
            closeEffect: \"none\"
        });

        \$(\".zoom\").hover(function() {

            \$(this).addClass('transition');
        }, function() {

            \$(this).removeClass('transition');
        });
    });
    </script>
</body>

</html>", "C:\\laragon\\www\\baltesco/themes/baltesco/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("page" => 47, "partial" => 50, "framework" => 62);
        static $filters = array("theme" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page', 'partial', 'framework'],
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
}
