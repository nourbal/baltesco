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
class __TwigTemplate_db464b11affffcd46dc6fb9559661b64d1dd74c1381f184fafe677260d85acd2 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Baltesco - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Baltesco\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Baltesco\">

       

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/fontawesome-free/css/all.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/simple-line-icons/css/simple-line-icons.css");
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/stylish-portfolio.min.css");
        echo "\" rel=\"stylesheet\">

        ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 26
        echo "    </head>

    <body>

      ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
      <!-- About -->
      <section class=\"content-section bg-light\" id=\"about\">
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
              <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
              <p class=\"lead mb-5\">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
                <a href=\"https://unsplash.com/\">Unsplash</a>!</p>
              <a class=\"btn btn-dark btn-xl js-scroll-trigger\" href=\"#services\">What We Offer</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section class=\"content-section bg-primary text-white text-center\" id=\"services\">
        <div class=\"container\">
          <div class=\"content-section-heading\">
            <h3 class=\"text-secondary mb-0\">Services</h3>
            <h2 class=\"mb-5\">What We Offer</h2>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-screen-smartphone\"></i>
              </span>
              <h4>
                <strong>Responsive</strong>
              </h4>
              <p class=\"text-faded mb-0\">Looks great on any screen size!</p>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-pencil\"></i>
              </span>
              <h4>
                <strong>Redesigned</strong>
              </h4>
              <p class=\"text-faded mb-0\">Freshly redesigned for Bootstrap 4.</p>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-md-0\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-like\"></i>
              </span>
              <h4>
                <strong>Favorited</strong>
              </h4>
              <p class=\"text-faded mb-0\">Millions of users
                <i class=\"fas fa-heart\"></i>
                Start Bootstrap!</p>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-mustache\"></i>
              </span>
              <h4>
                <strong>Question</strong>
              </h4>
              <p class=\"text-faded mb-0\">I mustache you a question...</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Callout -->
      <section class=\"callout\">
        <div class=\"container text-center\">
          <h2 class=\"mx-auto mb-5\">Welcome to
            <em>your</em>
            next website!</h2>
          <a class=\"btn btn-primary btn-xl\" href=\"https://startbootstrap.com/template-overviews/stylish-portfolio/\">Download Now!</a>
        </div>
      </section>

      <!-- Portfolio -->
      <section class=\"content-section\" id=\"portfolio\">
        <div class=\"container\">
          <div class=\"content-section-heading text-center\">
            <h3 class=\"text-secondary mb-0\">Portfolio</h3>
            <h2 class=\"mb-5\">Recent Projects</h2>
          </div>
          <div class=\"row no-gutters\">
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Stationary</h2>
                    <p class=\"mb-0\">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-1.jpg");
        echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Ice Cream</h2>
                    <p class=\"mb-0\">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-2.jpg");
        echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Strawberries</h2>
                    <p class=\"mb-0\">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-3.jpg");
        echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Workspace</h2>
                    <p class=\"mb-0\">A yellow workspace with some scissors, pencils, and other objects.</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-4.jpg");
        echo "\" alt=\"\">
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class=\"content-section bg-primary text-white\">
        <div class=\"container text-center\">
          <h2 class=\"mb-4\">The buttons below are impossible to resist...</h2>
          <a href=\"#\" class=\"btn btn-xl btn-light mr-4\">Click Me!</a>
          <a href=\"#\" class=\"btn btn-xl btn-dark\">Look at Me!</a>
        </div>
      </section>

      <!-- Map -->
      <section id=\"contact\" class=\"map\">
        <iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed\"></iframe>
        <br />
        <small>
          <a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A\"></a>
        </small>
      </section>

      ";
        // line 180
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 181
        echo "      
        
        

        <!-- Scripts -->
        <script src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
        <script src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>

        <!-- Plugin JavaScript -->
        <script src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-easing/jquery.easing.min.js");
        echo "\"></script>

        <!-- Custom scripts for this template -->
        <script src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/stylish-portfolio.min.js");
        echo "\"></script>
        ";
        // line 194
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
        // line 195
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 196
        echo "
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
        return array (  306 => 196,  302 => 195,  291 => 194,  287 => 193,  281 => 190,  275 => 187,  271 => 186,  264 => 181,  260 => 180,  232 => 155,  218 => 144,  204 => 133,  190 => 122,  97 => 31,  93 => 30,  87 => 26,  84 => 25,  79 => 23,  73 => 20,  68 => 18,  62 => 15,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Baltesco - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Baltesco\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Baltesco\">

       

        <!-- Bootstrap Core CSS -->
        <link href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"{{ 'assets/vendor/fontawesome-free/css/all.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ 'assets/vendor/simple-line-icons/css/simple-line-icons.css'|theme }}\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"{{ 'assets/css/stylish-portfolio.min.css'|theme }}\" rel=\"stylesheet\">

        {% styles %}
    </head>

    <body>

      {% partial \"header\" %}

      <!-- About -->
      <section class=\"content-section bg-light\" id=\"about\">
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
              <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
              <p class=\"lead mb-5\">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
                <a href=\"https://unsplash.com/\">Unsplash</a>!</p>
              <a class=\"btn btn-dark btn-xl js-scroll-trigger\" href=\"#services\">What We Offer</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section class=\"content-section bg-primary text-white text-center\" id=\"services\">
        <div class=\"container\">
          <div class=\"content-section-heading\">
            <h3 class=\"text-secondary mb-0\">Services</h3>
            <h2 class=\"mb-5\">What We Offer</h2>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-screen-smartphone\"></i>
              </span>
              <h4>
                <strong>Responsive</strong>
              </h4>
              <p class=\"text-faded mb-0\">Looks great on any screen size!</p>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-pencil\"></i>
              </span>
              <h4>
                <strong>Redesigned</strong>
              </h4>
              <p class=\"text-faded mb-0\">Freshly redesigned for Bootstrap 4.</p>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5 mb-md-0\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-like\"></i>
              </span>
              <h4>
                <strong>Favorited</strong>
              </h4>
              <p class=\"text-faded mb-0\">Millions of users
                <i class=\"fas fa-heart\"></i>
                Start Bootstrap!</p>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <span class=\"service-icon rounded-circle mx-auto mb-3\">
                <i class=\"icon-mustache\"></i>
              </span>
              <h4>
                <strong>Question</strong>
              </h4>
              <p class=\"text-faded mb-0\">I mustache you a question...</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Callout -->
      <section class=\"callout\">
        <div class=\"container text-center\">
          <h2 class=\"mx-auto mb-5\">Welcome to
            <em>your</em>
            next website!</h2>
          <a class=\"btn btn-primary btn-xl\" href=\"https://startbootstrap.com/template-overviews/stylish-portfolio/\">Download Now!</a>
        </div>
      </section>

      <!-- Portfolio -->
      <section class=\"content-section\" id=\"portfolio\">
        <div class=\"container\">
          <div class=\"content-section-heading text-center\">
            <h3 class=\"text-secondary mb-0\">Portfolio</h3>
            <h2 class=\"mb-5\">Recent Projects</h2>
          </div>
          <div class=\"row no-gutters\">
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Stationary</h2>
                    <p class=\"mb-0\">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio-1.jpg'|theme }}\" alt=\"\">
              </a>
            </div>
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Ice Cream</h2>
                    <p class=\"mb-0\">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio-2.jpg'|theme }}\" alt=\"\">
              </a>
            </div>
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Strawberries</h2>
                    <p class=\"mb-0\">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio-3.jpg'|theme }}\" alt=\"\">
              </a>
            </div>
            <div class=\"col-lg-6\">
              <a class=\"portfolio-item\" href=\"#\">
                <span class=\"caption\">
                  <span class=\"caption-content\">
                    <h2>Workspace</h2>
                    <p class=\"mb-0\">A yellow workspace with some scissors, pencils, and other objects.</p>
                  </span>
                </span>
                <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio-4.jpg'|theme }}\" alt=\"\">
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class=\"content-section bg-primary text-white\">
        <div class=\"container text-center\">
          <h2 class=\"mb-4\">The buttons below are impossible to resist...</h2>
          <a href=\"#\" class=\"btn btn-xl btn-light mr-4\">Click Me!</a>
          <a href=\"#\" class=\"btn btn-xl btn-dark\">Look at Me!</a>
        </div>
      </section>

      <!-- Map -->
      <section id=\"contact\" class=\"map\">
        <iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed\"></iframe>
        <br />
        <small>
          <a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A\"></a>
        </small>
      </section>

      {% partial \"footer\" %}
      
        
        

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery/jquery.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }}\"></script>

        <!-- Plugin JavaScript -->
        <script src=\"{{ 'assets/vendor/jquery-easing/jquery.easing.min.js'|theme }}\"></script>

        <!-- Custom scripts for this template -->
        <script src=\"{{ 'assets/js/stylish-portfolio.min.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\laragon\\www\\baltesco/themes/baltesco/layouts/default.htm", "");
    }
}
