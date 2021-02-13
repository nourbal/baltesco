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

/* C:\laragon\www\baltesco/themes/baltesco/pages/page-daccueil.htm */
class __TwigTemplate_b2e0751b8c686a0648e8290077983dda80dd5b40b5225cee6550b0c73b36d868 extends \Twig\Template
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
        $tags = array("partial" => 47);
        $filters = array("theme" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
    <!-- header -->
    ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "    <!-- end header -->
    <section class=\"slider_section\">
        <div id=\"main_slider\" class=\"carousel slide banner-main\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"first-slide\" src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.png");
        echo "\" alt=\"First slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"third-slide\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.png");
        echo "\" alt=\"Third slide\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#main_slider\" role=\"button\" data-slide=\"prev\">
                <i class='fa fa-angle-right'></i>
            </a>
            <a class=\"carousel-control-next\" href=\"#main_slider\" role=\"button\" data-slide=\"next\">
                <i class='fa fa-angle-left'></i>
            </a>
        </div>
    </section>
    <!-- service -->
    <div class=\"service\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <div class=\"title\">
                        <h2>Pourquoi <strong class=\"black\">nous choisir</strong></h2>
                        <span>Service de réparation le plus rapide au meilleur prix!</span>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service1.png");
        echo "\" /></i>
                        <h3>Service rapide</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service2.png");
        echo "\" /></i>
                        <h3>Réparation partout</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service3.png");
        echo "\" /></i>
                        <h3>Équipe d'experts</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service4.png");
        echo "\" /></i>
                        <h3>Des services abordables</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service5.png");
        echo "\" /></i>
                        <h3>Garantie de 90 jours</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service6.png");
        echo "\" /></i>
                        <h3>Récompensé</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
            <section class=\"customer-logos slider\">
                <div class=\"slide\"><img src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/lexus.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/mazda.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/mercedes.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/mg.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/mini.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/nissan.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/opel.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/peugeot.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/porsche.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/renault.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/seat.png");
        echo "\"></div>
                <div class=\"slide\"><img src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mark/toyota.png");
        echo "\"></div>
            </section>
        </div>
    </div>
    <!-- end service -->
    <!-- our product -->
    <div class=\"product\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title\">
                        <h2>Nos <strong class=\"black\">produits</strong></h2>
                        <span>Nous emballons les produits avec les meilleurs services pour faire de vous un client satisfait.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"product-bg\">
        <div class=\"product-bg-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cat/motor.png");
        echo "\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end our product -->
    <!-- contact -->
    ";
        // line 211
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 212
        echo "    <!-- end contact -->
    <!--  footer -->
    ";
        // line 214
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 215
        echo "    <!-- end footer -->
    <!-- Javascript files-->
    <script src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 218
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 220
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.0.0.min.js");
        echo "\"></script>
    <script src=\"";
        // line 221
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugin.js");
        echo "\"></script>
    <!-- sidebar -->
    <script src=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mCustomScrollbar.concat.min.js");
        echo "\"></script>
    <script src=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
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

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\baltesco/themes/baltesco/pages/page-daccueil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 224,  418 => 223,  413 => 221,  409 => 220,  405 => 219,  401 => 218,  397 => 217,  393 => 215,  389 => 214,  385 => 212,  381 => 211,  367 => 200,  358 => 194,  349 => 188,  340 => 182,  331 => 176,  322 => 170,  313 => 164,  304 => 158,  277 => 134,  273 => 133,  269 => 132,  265 => 131,  261 => 130,  257 => 129,  253 => 128,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  233 => 123,  223 => 116,  213 => 109,  203 => 102,  193 => 95,  183 => 88,  173 => 81,  145 => 56,  139 => 53,  132 => 48,  128 => 47,  121 => 43,  100 => 25,  95 => 23,  90 => 21,  85 => 19,  80 => 17,  62 => 1,);
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
    <!-- header -->
    {% partial \"header\" %}
    <!-- end header -->
    <section class=\"slider_section\">
        <div id=\"main_slider\" class=\"carousel slide banner-main\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"first-slide\" src=\"{{ 'assets/images/banner2.png'|theme }}\" alt=\"First slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"third-slide\" src=\"{{ 'assets/images/banner2.png'|theme }}\" alt=\"Third slide\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#main_slider\" role=\"button\" data-slide=\"prev\">
                <i class='fa fa-angle-right'></i>
            </a>
            <a class=\"carousel-control-next\" href=\"#main_slider\" role=\"button\" data-slide=\"next\">
                <i class='fa fa-angle-left'></i>
            </a>
        </div>
    </section>
    <!-- service -->
    <div class=\"service\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <div class=\"title\">
                        <h2>Pourquoi <strong class=\"black\">nous choisir</strong></h2>
                        <span>Service de réparation le plus rapide au meilleur prix!</span>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service1.png'|theme }}\" /></i>
                        <h3>Service rapide</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service2.png'|theme }}\" /></i>
                        <h3>Réparation partout</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service3.png'|theme }}\" /></i>
                        <h3>Équipe d'experts</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service4.png'|theme }}\" /></i>
                        <h3>Des services abordables</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service5.png'|theme }}\" /></i>
                        <h3>Garantie de 90 jours</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service6.png'|theme }}\" /></i>
                        <h3>Récompensé</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
            <section class=\"customer-logos slider\">
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/lexus.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/mazda.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/mercedes.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/mg.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/mini.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/nissan.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/opel.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/peugeot.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/porsche.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/renault.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/seat.png'|theme }}\"></div>
                <div class=\"slide\"><img src=\"{{ 'assets/images/mark/toyota.png'|theme }}\"></div>
            </section>
        </div>
    </div>
    <!-- end service -->
    <!-- our product -->
    <div class=\"product\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title\">
                        <h2>Nos <strong class=\"black\">produits</strong></h2>
                        <span>Nous emballons les produits avec les meilleurs services pour faire de vous un client satisfait.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"product-bg\">
        <div class=\"product-bg-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/images/cat/motor.png'|theme }}\" /></i>
                            <h3>Pièces moteur</h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end our product -->
    <!-- contact -->
    {% partial \"contact\" %}
    <!-- end contact -->
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

</html>", "C:\\laragon\\www\\baltesco/themes/baltesco/pages/page-daccueil.htm", "");
    }
}
