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
        $tags = array("partial" => 42);
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
</head>
<!-- body -->

<body class=\"main-layout\">
    <!-- loader  -->
    <div class=\"loader_bg\">
        <div class=\"loader\"><img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/loading.gif");
        echo "\" alt=\"#\" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
     ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "    <!-- end header -->
    <section class=\"slider_section\">
        <div id=\"main_slider\" class=\"carousel slide banner-main\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"first-slide\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.jpg");
        echo "\" alt=\"First slide\">
                    <div class=\"container\">
                        <div class=\"carousel-caption relative\">
                            <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                                <strong class=\"yellow_bold\">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href=\"#\">see more Products</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"second-slide\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.jpg");
        echo "\" alt=\"Second slide\">
                    <div class=\"container\">
                        <div class=\"carousel-caption relative\">
                            <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                                <strong class=\"yellow_bold\">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href=\"#\">see more Products</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"third-slide\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.jpg");
        echo "\" alt=\"Third slide\">
                    <div class=\"container\">
                        <div class=\"carousel-caption relative\">
                            <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                                <strong class=\"yellow_bold\">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href=\"#\">see more Products</a>
                        </div>
                    </div>
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
    <!-- CHOOSE  -->
    <div class=\"whyschose\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 offset-md-3\">
                    <div class=\"title\">
                        <h2>Pourquoi <strong class=\"black\">nous choisir</strong></h2>
                        <span>Service de réparation le plus rapide au meilleur prix!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"choose_bg\">
        <div class=\"container\">
            <div class=\"white_bg\">
                <div class=\"row\">
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/1.png");
        echo "\" /></i>
                            <h3>Data recovery</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/2.png");
        echo "\" /></i>
                            <h3>Computer repair</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/3.png");
        echo "\" /></i>
                            <h3>Mobile service</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/4.png");
        echo "\" /></i>
                            <h3>Network solutions</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <div class=\"col-md-12\">
                        <a class=\"read-more\">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end CHOOSE -->
    <!-- service -->
    <div class=\"service\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <div class=\"title\">
                        <h2>Processus <strong class=\"black\">de service</strong></h2>
                        <span>Un moyen simple et efficace de faire réparer votre appareil</span>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service1.png");
        echo "\" /></i>
                        <h3>Fast service</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service2.png");
        echo "\" /></i>
                        <h3>Secure payments</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service3.png");
        echo "\" /></i>
                        <h3>Expert team</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service4.png");
        echo "\" /></i>
                        <h3>Affordable services</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service5.png");
        echo "\" /></i>
                        <h3>90 Days warranty</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service6.png");
        echo "\" /></i>
                        <h3>Award winning</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
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
        // line 222
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p1.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p2.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p3.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p4.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p5.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p2.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 264
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p6.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"";
        // line 271
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p7.png");
        echo "\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"yellow_bg\">
                <div class=\"row\">
                    <div class=\"col-xl-7 col-lg-7 col-md-7 col-sm-12\">
                        <div class=\"yellow-box\">
                            <h3>DEMANDEZ UN DEVIS GRATUIT<i><img src=\"";
        // line 284
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/calll.png");
        echo "\" /></i></h3>
                            <p>Obtenez des réponses et des conseils de la part des personnes de votre choix.</p>
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-12\">
                        <div class=\"yellow-box\">
                            <a href=\"#\">obtenir un devis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our product -->
    <!-- map -->
    <div class=\"container-fluid padi\">
        <div class=\"map\">
            <img src=\"";
        // line 301
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mapimg.jpg");
        echo "\" alt=\"img\" />
        </div>
    </div>
    <!-- end map -->
    <!--  footer -->
    ";
        // line 306
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 307
        echo "    <!-- end footer -->
    <!-- Javascript files-->
    <script src=\"";
        // line 309
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 310
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 311
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.0.0.min.js");
        echo "\"></script>
    <script src=\"";
        // line 313
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugin.js");
        echo "\"></script>
    <!-- sidebar -->
    <script src=\"";
        // line 315
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mCustomScrollbar.concat.min.js");
        echo "\"></script>
    <script src=\"";
        // line 316
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
        return array (  494 => 316,  490 => 315,  485 => 313,  481 => 312,  477 => 311,  473 => 310,  469 => 309,  465 => 307,  461 => 306,  453 => 301,  433 => 284,  417 => 271,  407 => 264,  397 => 257,  387 => 250,  377 => 243,  367 => 236,  357 => 229,  347 => 222,  316 => 194,  306 => 187,  296 => 180,  286 => 173,  276 => 166,  266 => 159,  236 => 132,  226 => 125,  216 => 118,  206 => 111,  164 => 72,  149 => 60,  134 => 48,  127 => 43,  123 => 42,  116 => 38,  100 => 25,  95 => 23,  90 => 21,  85 => 19,  80 => 17,  62 => 1,);
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
                    <img class=\"first-slide\" src=\"{{ 'assets/images/banner2.jpg'|theme }}\" alt=\"First slide\">
                    <div class=\"container\">
                        <div class=\"carousel-caption relative\">
                            <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                                <strong class=\"yellow_bold\">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href=\"#\">see more Products</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"second-slide\" src=\"{{ 'assets/images/banner2.jpg'|theme }}\" alt=\"Second slide\">
                    <div class=\"container\">
                        <div class=\"carousel-caption relative\">
                            <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                                <strong class=\"yellow_bold\">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href=\"#\">see more Products</a>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"third-slide\" src=\"{{ 'assets/images/banner2.jpg'|theme }}\" alt=\"Third slide\">
                    <div class=\"container\">
                        <div class=\"carousel-caption relative\">
                            <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                                <strong class=\"yellow_bold\">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href=\"#\">see more Products</a>
                        </div>
                    </div>
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
    <!-- CHOOSE  -->
    <div class=\"whyschose\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 offset-md-3\">
                    <div class=\"title\">
                        <h2>Pourquoi <strong class=\"black\">nous choisir</strong></h2>
                        <span>Service de réparation le plus rapide au meilleur prix!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"choose_bg\">
        <div class=\"container\">
            <div class=\"white_bg\">
                <div class=\"row\">
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"{{ 'assets/icon/1.png'|theme }}\" /></i>
                            <h3>Data recovery</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"{{ 'assets/icon/2.png'|theme }}\" /></i>
                            <h3>Computer repair</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"{{ 'assets/icon/3.png'|theme }}\" /></i>
                            <h3>Mobile service</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"for_box\">
                            <i><img src=\"{{ 'assets/icon/4.png'|theme }}\" /></i>
                            <h3>Network solutions</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <div class=\"col-md-12\">
                        <a class=\"read-more\">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end CHOOSE -->
    <!-- service -->
    <div class=\"service\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <div class=\"title\">
                        <h2>Processus <strong class=\"black\">de service</strong></h2>
                        <span>Un moyen simple et efficace de faire réparer votre appareil</span>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service1.png'|theme }}\" /></i>
                        <h3>Fast service</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service2.png'|theme }}\" /></i>
                        <h3>Secure payments</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service3.png'|theme }}\" /></i>
                        <h3>Expert team</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service4.png'|theme }}\" /></i>
                        <h3>Affordable services</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service5.png'|theme }}\" /></i>
                        <h3>90 Days warranty</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                    <div class=\"service-box\">
                        <i><img src=\"{{ 'assets/icon/service6.png'|theme }}\" /></i>
                        <h3>Award winning</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
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
                            <i><img src=\"{{ 'assets/icon/p1.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p2.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p3.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p4.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p5.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p2.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p6.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"product-box\">
                            <i><img src=\"{{ 'assets/icon/p7.png'|theme }}\" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>\$25.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"yellow_bg\">
                <div class=\"row\">
                    <div class=\"col-xl-7 col-lg-7 col-md-7 col-sm-12\">
                        <div class=\"yellow-box\">
                            <h3>DEMANDEZ UN DEVIS GRATUIT<i><img src=\"{{ 'assets/icon/calll.png'|theme }}\" /></i></h3>
                            <p>Obtenez des réponses et des conseils de la part des personnes de votre choix.</p>
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-12\">
                        <div class=\"yellow-box\">
                            <a href=\"#\">obtenir un devis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our product -->
    <!-- map -->
    <div class=\"container-fluid padi\">
        <div class=\"map\">
            <img src=\"{{ 'assets/images/mapimg.jpg'|theme }}\" alt=\"img\" />
        </div>
    </div>
    <!-- end map -->
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
