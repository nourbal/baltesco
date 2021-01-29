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
        $tags = array();
        $filters = array("theme" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
      <title>lighten</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
      <!-- style css -->
      <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
      <!-- fevicon -->
      <link rel=\"icon\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fevicon.png");
        echo "\" type=\"image/gif\" />
      <!-- Scrollbar Custom CSS -->
      <link rel=\"stylesheet\" href=\"";
        // line 24
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
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/loading.gif");
        echo "\" alt=\"#\" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class=\"header\">
            <div class=\"head_top\">
               <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                       <div class=\"top-box\">
                        <ul class=\"sociel_link\">
                         <li> <a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                         <li> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                         <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                         <li> <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                       <div class=\"top-box\">
                        <p>long established fact that a reader will be </p>
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
                        <div class=\"logo\"> <a href=\"index.html\"><img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.jpg");
        echo "\" alt=\"logo\"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class=\"col-xl-7 col-lg-7 col-md-9 col-sm-9\">
                  <div class=\"menu-area\">
                     <div class=\"limit-box\">
                        <nav class=\"main-menu\">
                           <ul class=\"menu-area-main\">
                              <li class=\"active\"> <a href=\"index.html\">Home</a> </li>
                              <li> <a href=\"about.html\">About</a> </li>
                              <li> <a href=\"product.html\">product</a> </li>
                              <li> <a href=\"blog.html\"> Blog</a> </li>
                              <li> <a href=\"contact.html\">Contact</a> </li>
                              <li class=\"mean-last\"> <a href=\"#contact\">signup</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class=\"col-xl-2 col-lg-2 col-md-2 col-sm-2\">
                  <li><a class=\"buy\" href=\"#\">Login</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <section class=\"slider_section\">
         <div id=\"main_slider\" class=\"carousel slide banner-main\" data-ride=\"carousel\">

            <div class=\"carousel-inner\">
               <div class=\"carousel-item active\">
                  <img class=\"first-slide\" src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.jpg");
        echo "\" alt=\"First slide\">
                  <div class=\"container\">
                     <div class=\"carousel-caption relative\">
                        <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                           <strong class=\"yellow_bold\">Product </strong></h1>
                        <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p>
                        <a  href=\"#\">see more Products</a>
                     </div>
                  </div>
               </div>
               <div class=\"carousel-item\">
                  <img class=\"second-slide\" src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.jpg");
        echo "\" alt=\"Second slide\">
                  <div class=\"container\">
                     <div class=\"carousel-caption relative\">
                        <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                           <strong class=\"yellow_bold\">Product </strong></h1>
                        <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p>
                        <a  href=\"#\">see more Products</a>
                     </div>
                  </div>
               </div>
               <div class=\"carousel-item\">
                  <img class=\"third-slide\" src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner2.jpg");
        echo "\" alt=\"Third slide\">
                  <div class=\"container\">
                     <div class=\"carousel-caption relative\">
                        <h1>Our <br> <strong class=\"black_bold\">Latest </strong><br>
                           <strong class=\"yellow_bold\">Product </strong></h1>
                        <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p>
                        <a  href=\"#\">see more Products</a>
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
                     <h2>Why <strong class=\"black\">choose us</strong></h2>
                     <span>Fastest repair service with best price!</span>
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
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/1.png");
        echo "\"/></i>
                     <h3>Data recovery</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"for_box\">
                     <i><img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/2.png");
        echo "\"/></i>
                     <h3>Computer repair</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"for_box\">
                     <i><img src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/3.png");
        echo "\"/></i>
                     <h3>Mobile service</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"for_box\">
                     <i><img src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/4.png");
        echo "\"/></i>
                     <h3>Network solutions</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <div class=\"col-md-12\">
                  <a class=\"read-more\">Read More</a>
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
                     <h2>Service <strong class=\"black\">Process</strong></h2>
                     <span>Easy and effective way to get your device repair</span>
                  </div>
               </div>
            </div>
            <div class=\"row\">
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"";
        // line 222
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service1.png");
        echo "\"/></i>
                     <h3>Fast service</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service2.png");
        echo "\"/></i>
                     <h3>Secure payments</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service3.png");
        echo "\"/></i>
                     <h3>Expert team</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service4.png");
        echo "\"/></i>
                     <h3>Affordable services</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service5.png");
        echo "\"/></i>
                     <h3>90 Days warranty</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/service6.png");
        echo "\"/></i>
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
                     <h2>our <strong class=\"black\">products</strong></h2>
                     <span>We package the products with best services to make you a happy customer.</span>
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
        // line 286
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p1.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 293
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p2.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 300
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p3.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 307
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p4.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 314
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p5.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 321
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p2.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 328
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p6.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"";
        // line 335
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/p7.png");
        echo "\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
              
              
              
               
               </div>
            </div>
         </div>
         <div class=\"Clients_bg_white\">
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-12\">
                     <div class=\"title\">
                        <h3>What Clients Say?</h3>
                     </div>
                  </div>
               </div>
               <div id=\"client_slider\" class=\"carousel slide banner_Client\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#client_slider\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#client_slider\" data-slide-to=\"1\"></li>
          <li data-target=\"#client_slider\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container\">
              <div class=\"carousel-caption text-bg\">
               <div class=\"img_bg\">
                  <i><img src=\"";
        // line 367
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lllll.png");
        echo "\"/><span>Jone Due<br><strong class=\"date\">12/02/2019</strong></span></i>
                  
               </div>
                
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption text-bg\">
                <div class=\"img_bg\">
                  <i><img src=\"";
        // line 381
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lllll.png");
        echo "\"/><span>Jone Due<br><strong class=\"date\">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption text-bg\">
                 <div class=\"img_bg\">
                  <i><img src=\"";
        // line 394
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lllll.png");
        echo "\"/><span>Jone Due<br><strong class=\"date\">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
               
              </div>
            </div>
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
                     <h3>REQUEST A FREE QUOTE<i><img src=\"";
        // line 415
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icon/calll.png");
        echo "\"/></i></h3>
                     
                     <p>Get answers and advice from people you want it from.</p>
                  </div>
               </div>
                <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-12\">
                  <div class=\"yellow-box\">
                     <a href=\"#\">Get  Quote</a>
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
        // line 434
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mapimg.jpg");
        echo "\" alt=\"img\"/>
         </div>
      </div>
      <!-- end map --> 
      <!--  footer --> 




      <footer>
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
                     <h3>conatct us</h3>
                     <span>123 Second Street Fifth Avenue,<br>
                       Manhattan, New York<br>
                        +987 654 3210</span>
                  </div>
               </div>
                 <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"contact\">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class=\"lik\">
                         <li> <a href=\"#\">About us</a></li>
                         <li> <a href=\"#\">Terms and conditions</a></li>
                         <li> <a href=\"#\">Privacy policy</a></li>
                         <li> <a href=\"#\">News</a></li>
                          <li> <a href=\"#\">Contact us</a></li>
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
                     <h3>About lighten</h3>
                     <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                  </div>
               </div>
            </div>
         </div>
            <div class=\"copyright\">
               <p>Copyright 2019 All Right Reserved By <a href=\"https://html.design/\">Free html Templates</a></p>
            </div>
         
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src=\"";
        // line 504
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script> 
      <script src=\"";
        // line 505
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script> 
      <script src=\"";
        // line 506
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\"></script> 
      <script src=\"";
        // line 507
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.0.0.min.js");
        echo "\"></script> 
      <script src=\"";
        // line 508
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugin.js");
        echo "\"></script> 
      <!-- sidebar --> 
      <script src=\"";
        // line 510
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mCustomScrollbar.concat.min.js");
        echo "\"></script> 
      <script src=\"";
        // line 511
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
      <script src=\"https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js\"></script>
      <script>
         \$(document).ready(function(){
         \$(\".fancybox\").fancybox({
         openEffect: \"none\",
         closeEffect: \"none\"
         });
         
         \$(\".zoom\").hover(function(){
         
         \$(this).addClass('transition');
         }, function(){
         
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
        return array (  691 => 511,  687 => 510,  682 => 508,  678 => 507,  674 => 506,  670 => 505,  666 => 504,  593 => 434,  571 => 415,  547 => 394,  531 => 381,  514 => 367,  479 => 335,  469 => 328,  459 => 321,  449 => 314,  439 => 307,  429 => 300,  419 => 293,  409 => 286,  377 => 257,  367 => 250,  357 => 243,  347 => 236,  337 => 229,  327 => 222,  296 => 194,  286 => 187,  276 => 180,  266 => 173,  217 => 127,  202 => 115,  187 => 103,  150 => 69,  114 => 36,  99 => 24,  94 => 22,  89 => 20,  84 => 18,  79 => 16,  62 => 1,);
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
      <title>lighten</title>
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
      <header>
         <!-- header inner -->
         <div class=\"header\">
            <div class=\"head_top\">
               <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                       <div class=\"top-box\">
                        <ul class=\"sociel_link\">
                         <li> <a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                         <li> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                         <li> <a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                         <li> <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12\">
                       <div class=\"top-box\">
                        <p>long established fact that a reader will be </p>
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
                        <div class=\"logo\"> <a href=\"index.html\"><img src=\"{{ 'assets/images/logo.jpg'|theme }}\" alt=\"logo\"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class=\"col-xl-7 col-lg-7 col-md-9 col-sm-9\">
                  <div class=\"menu-area\">
                     <div class=\"limit-box\">
                        <nav class=\"main-menu\">
                           <ul class=\"menu-area-main\">
                              <li class=\"active\"> <a href=\"index.html\">Home</a> </li>
                              <li> <a href=\"about.html\">About</a> </li>
                              <li> <a href=\"product.html\">product</a> </li>
                              <li> <a href=\"blog.html\"> Blog</a> </li>
                              <li> <a href=\"contact.html\">Contact</a> </li>
                              <li class=\"mean-last\"> <a href=\"#contact\">signup</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class=\"col-xl-2 col-lg-2 col-md-2 col-sm-2\">
                  <li><a class=\"buy\" href=\"#\">Login</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
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
                        <a  href=\"#\">see more Products</a>
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
                        <a  href=\"#\">see more Products</a>
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
                        <a  href=\"#\">see more Products</a>
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
                     <h2>Why <strong class=\"black\">choose us</strong></h2>
                     <span>Fastest repair service with best price!</span>
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
                     <i><img src=\"{{ 'assets/icon/1.png'|theme }}\"/></i>
                     <h3>Data recovery</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"for_box\">
                     <i><img src=\"{{ 'assets/icon/2.png'|theme }}\"/></i>
                     <h3>Computer repair</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"for_box\">
                     <i><img src=\"{{ 'assets/icon/3.png'|theme }}\"/></i>
                     <h3>Mobile service</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"for_box\">
                     <i><img src=\"{{ 'assets/icon/4.png'|theme }}\"/></i>
                     <h3>Network solutions</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <div class=\"col-md-12\">
                  <a class=\"read-more\">Read More</a>
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
                     <h2>Service <strong class=\"black\">Process</strong></h2>
                     <span>Easy and effective way to get your device repair</span>
                  </div>
               </div>
            </div>
            <div class=\"row\">
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"{{ 'assets/icon/service1.png'|theme }}\"/></i>
                     <h3>Fast service</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"{{ 'assets/icon/service2.png'|theme }}\"/></i>
                     <h3>Secure payments</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"{{ 'assets/icon/service3.png'|theme }}\"/></i>
                     <h3>Expert team</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"{{ 'assets/icon/service4.png'|theme }}\"/></i>
                     <h3>Affordable services</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"{{ 'assets/icon/service5.png'|theme }}\"/></i>
                     <h3>90 Days warranty</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12\">
                  <div class=\"service-box\">
                     <i><img src=\"{{ 'assets/icon/service6.png'|theme }}\"/></i>
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
                     <h2>our <strong class=\"black\">products</strong></h2>
                     <span>We package the products with best services to make you a happy customer.</span>
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
                     <i><img src=\"{{ 'assets/icon/p1.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p2.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p3.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p4.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p5.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p2.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p6.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
               <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"product-box\">
                     <i><img src=\"{{ 'assets/icon/p7.png'|theme }}\"/></i>
                     <h3>Norton Internet Security</h3>
                     <span>\$25.00</span>
                  </div>
               </div>
              
              
              
               
               </div>
            </div>
         </div>
         <div class=\"Clients_bg_white\">
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-12\">
                     <div class=\"title\">
                        <h3>What Clients Say?</h3>
                     </div>
                  </div>
               </div>
               <div id=\"client_slider\" class=\"carousel slide banner_Client\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#client_slider\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#client_slider\" data-slide-to=\"1\"></li>
          <li data-target=\"#client_slider\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container\">
              <div class=\"carousel-caption text-bg\">
               <div class=\"img_bg\">
                  <i><img src=\"{{ 'assets/images/lllll.png'|theme }}\"/><span>Jone Due<br><strong class=\"date\">12/02/2019</strong></span></i>
                  
               </div>
                
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption text-bg\">
                <div class=\"img_bg\">
                  <i><img src=\"{{ 'assets/images/lllll.png'|theme }}\"/><span>Jone Due<br><strong class=\"date\">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption text-bg\">
                 <div class=\"img_bg\">
                  <i><img src=\"{{ 'assets/images/lllll.png'|theme }}\"/><span>Jone Due<br><strong class=\"date\">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
               
              </div>
            </div>
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
                     <h3>REQUEST A FREE QUOTE<i><img src=\"{{ 'assets/icon/calll.png'|theme }}\"/></i></h3>
                     
                     <p>Get answers and advice from people you want it from.</p>
                  </div>
               </div>
                <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-12\">
                  <div class=\"yellow-box\">
                     <a href=\"#\">Get  Quote</a>
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
            <img src=\"{{ 'assets/images/mapimg.jpg'|theme }}\" alt=\"img\"/>
         </div>
      </div>
      <!-- end map --> 
      <!--  footer --> 




      <footer>
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
                     <h3>conatct us</h3>
                     <span>123 Second Street Fifth Avenue,<br>
                       Manhattan, New York<br>
                        +987 654 3210</span>
                  </div>
               </div>
                 <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12\">
                  <div class=\"contact\">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class=\"lik\">
                         <li> <a href=\"#\">About us</a></li>
                         <li> <a href=\"#\">Terms and conditions</a></li>
                         <li> <a href=\"#\">Privacy policy</a></li>
                         <li> <a href=\"#\">News</a></li>
                          <li> <a href=\"#\">Contact us</a></li>
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
                     <h3>About lighten</h3>
                     <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                  </div>
               </div>
            </div>
         </div>
            <div class=\"copyright\">
               <p>Copyright 2019 All Right Reserved By <a href=\"https://html.design/\">Free html Templates</a></p>
            </div>
         
      </div>
      </footer>
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
         \$(document).ready(function(){
         \$(\".fancybox\").fancybox({
         openEffect: \"none\",
         closeEffect: \"none\"
         });
         
         \$(\".zoom\").hover(function(){
         
         \$(this).addClass('transition');
         }, function(){
         
         \$(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>", "C:\\laragon\\www\\baltesco/themes/baltesco/pages/page-daccueil.htm", "");
    }
}
