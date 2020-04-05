<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_84910564641f341476d283527aeaa133a64666aed6698b2c99b2f7942e3677bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('styles', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 124
        echo "
        ";
        // line 125
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "

        ";
        // line 129
        $this->displayBlock('footer', $context, $blocks);
        // line 228
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 258
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_styles($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("
            css/bootstrap.min.css"), "html", null, true);
        // line 8
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/vegas.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/slicknav.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/gijgo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 25
        echo "            <header id=\"header-area\" class=\"fixed-top\">
                <!--== Header Top Start ==-->
                <div id=\"header-top\" class=\"d-none d-xl-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!--== Single HeaderTop Start ==-->
                            <div class=\"col-lg-3 text-left\">
                                <i class=\"fa fa-map-marker\"></i> 802/2, Mirpur, Dhaka
                            </div>
                            <!--== Single HeaderTop End ==-->

                            <!--== Single HeaderTop Start ==-->
                            <div class=\"col-lg-3 text-center\">
                                <i class=\"fa fa-mobile\"></i> +1 800 345 678
                            </div>
                            <!--== Single HeaderTop End ==-->

                            <!--== Single HeaderTop Start ==-->
                            <div class=\"col-lg-3 text-center\">
                                <i class=\"fa fa-clock-o\"></i> Mon-Fri 09.00 - 17.00
                            </div>
                            <!--== Single HeaderTop End ==-->

                            <!--== Social Icons Start ==-->
                            <div class=\"col-lg-3 text-right\">
                                <div class=\"header-social-icons\">
                                    <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                </div>
                            </div>
                            <!--== Social Icons End ==-->
                        </div>
                    </div>
                </div>
                <!--== Header Top End ==-->

                <!--== Header Bottom Start ==-->
                <div id=\"header-bottom\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!--== Logo Start ==-->
                            <div class=\"col-lg-4\">
                                <a href=\"index2.html\" class=\"logo\">
                                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"JSOFT\">
                                </a>
                            </div>
                            <!--== Logo End ==-->

                            <!--== Main Menu Start ==-->
                            <div class=\"col-lg-8 d-none d-xl-block\">
                                <nav class=\"mainmenu alignright\">
                                    <ul>



                                        <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("taxi_homepage");
        echo "\">Taxi</a></li>
                                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_homepage");
        echo "\">Transporteur</a>

                                            <ul>
                                                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Reserver Transporteur</a></li>
                                            </ul>
                                        </li>

                                        <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("covoiturage_homepage");
        echo "\">Covoiturage</a></li>




                                        <li><a href=\"index.html\">Pages</a>
                                            <ul>
                                                <li><a href=\"package.html\">Pricing</a></li>
                                                <li><a href=\"driver.html\">Driver</a></li>
                                                <li><a href=\"faq.html\">FAQ</a></li>
                                                <li><a href=\"gallery.html\">Gallery</a></li>
                                                <li><a href=\"help-desk.html\">Help Desk</a></li>
                                                <li><a href=\"login.html\">Log In</a></li>
                                                <li><a href=\"register.html\">Register</a></li>
                                                <li><a href=\"404.html\">404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Blog</a>
                                            <ul>
                                                <li><a href=\"article.html\">Blog Page</a></li>
                                                <li><a href=\"article-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--== Main Menu End ==-->
                        </div>
                    </div>
                </div>
                <!--== Header Bottom End ==-->
            </header>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 126
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 130
        echo "            <section id=\"footer-area\">
                <!-- Footer Widget Start -->
                <div class=\"footer-widget-area\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Single Footer Widget Start -->
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">
                                    <h2>About Us</h2>
                                    <div class=\"widget-body\">
                                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"JSOFT\">
                                        <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                                        <div class=\"newsletter-area\">
                                            <form action=\"index.html\">
                                                <input type=\"email\" placeholder=\"Subscribe Our Newsletter\">
                                                <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fa fa-send\"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Widget End -->

                            <!-- Single Footer Widget Start -->
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">
                                    <h2>Recent Posts</h2>
                                    <div class=\"widget-body\">
                                        <ul class=\"recent-post\">
                                            <li>
                                                <a href=\"#\">
                                                    Hello Bangladesh!
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    Lorem ipsum dolor sit amet
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    Hello Bangladesh!
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    consectetur adipisicing elit?
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Widget End -->

                            <!-- Single Footer Widget Start -->
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">
                                    <h2>get touch</h2>
                                    <div class=\"widget-body\">
                                        <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                        <ul class=\"get-touch\">
                                            <li><i class=\"fa fa-map-marker\"></i> 800/8, Kazipara, Dhaka</li>
                                            <li><i class=\"fa fa-mobile\"></i> +880 01 86 25 72 43</li>
                                            <li><i class=\"fa fa-envelope\"></i> kazukamdu83@gmail.com</li>
                                        </ul>
                                        <a href=\"https://goo.gl/maps/b5mt45MCaPB2\" class=\"map-show\" target=\"_blank\">Show Location</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Widget End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Bottom Start -->
                <div class=\"footer-bottom-area\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 text-center\">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom End -->
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Jquery Migrate Min Js ===-->
            <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Popper Min Js ===-->
            <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Bootstrap Min Js ===-->
            <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Gijgo Min Js ===-->
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/gijgo.js"), "html", null, true);
        echo "\"></script>
            <!--=== Vegas Min Js ===-->
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/vegas.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Isotope Min Js ===-->
            <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/isotope.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Owl Caousel Min Js ===-->
            <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Waypoint Min Js ===-->
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== CounTotop Min Js ===-->
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/counterup.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== YtPlayer Min Js ===-->
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
            <!--=== Magnific Popup Min Js ===-->
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <!--=== Slicknav Min Js ===-->
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/slicknav.min.js"), "html", null, true);
        echo "\"></script>

            <!--=== Mian Js ===-->
            <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 256,  509 => 253,  504 => 251,  499 => 249,  494 => 247,  489 => 245,  484 => 243,  479 => 241,  474 => 239,  469 => 237,  464 => 235,  459 => 233,  454 => 231,  448 => 229,  439 => 228,  341 => 140,  329 => 130,  320 => 129,  310 => 126,  301 => 125,  257 => 90,  250 => 86,  244 => 83,  240 => 82,  225 => 70,  178 => 25,  169 => 24,  156 => 17,  152 => 16,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  124 => 9,  121 => 8,  117 => 7,  108 => 6,  90 => 5,  78 => 258,  75 => 228,  73 => 129,  69 => 127,  67 => 125,  64 => 124,  62 => 24,  54 => 20,  52 => 6,  48 => 5,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block styles %}
            <link href=\"{{ asset('
            css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/plugins/vegas.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/plugins/slicknav.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/plugins/magnific-popup.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/plugins/owl.carousel.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/plugins/gijgo.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/reset.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/responsive.css') }}\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        {% block header %}
            <header id=\"header-area\" class=\"fixed-top\">
                <!--== Header Top Start ==-->
                <div id=\"header-top\" class=\"d-none d-xl-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!--== Single HeaderTop Start ==-->
                            <div class=\"col-lg-3 text-left\">
                                <i class=\"fa fa-map-marker\"></i> 802/2, Mirpur, Dhaka
                            </div>
                            <!--== Single HeaderTop End ==-->

                            <!--== Single HeaderTop Start ==-->
                            <div class=\"col-lg-3 text-center\">
                                <i class=\"fa fa-mobile\"></i> +1 800 345 678
                            </div>
                            <!--== Single HeaderTop End ==-->

                            <!--== Single HeaderTop Start ==-->
                            <div class=\"col-lg-3 text-center\">
                                <i class=\"fa fa-clock-o\"></i> Mon-Fri 09.00 - 17.00
                            </div>
                            <!--== Single HeaderTop End ==-->

                            <!--== Social Icons Start ==-->
                            <div class=\"col-lg-3 text-right\">
                                <div class=\"header-social-icons\">
                                    <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                </div>
                            </div>
                            <!--== Social Icons End ==-->
                        </div>
                    </div>
                </div>
                <!--== Header Top End ==-->

                <!--== Header Bottom Start ==-->
                <div id=\"header-bottom\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!--== Logo Start ==-->
                            <div class=\"col-lg-4\">
                                <a href=\"index2.html\" class=\"logo\">
                                    <img src=\"{{ asset('img/logo.png') }}\" alt=\"JSOFT\">
                                </a>
                            </div>
                            <!--== Logo End ==-->

                            <!--== Main Menu Start ==-->
                            <div class=\"col-lg-8 d-none d-xl-block\">
                                <nav class=\"mainmenu alignright\">
                                    <ul>



                                        <li><a href=\"{{path('taxi_homepage')}}\">Taxi</a></li>
                                        <li><a href=\"{{path ('transport_homepage')}}\">Transporteur</a>

                                            <ul>
                                                <li><a href=\"{{path ('reservation_new')}}\">Reserver Transporteur</a></li>
                                            </ul>
                                        </li>

                                        <li><a href=\"{{path('covoiturage_homepage')}}\">Covoiturage</a></li>




                                        <li><a href=\"index.html\">Pages</a>
                                            <ul>
                                                <li><a href=\"package.html\">Pricing</a></li>
                                                <li><a href=\"driver.html\">Driver</a></li>
                                                <li><a href=\"faq.html\">FAQ</a></li>
                                                <li><a href=\"gallery.html\">Gallery</a></li>
                                                <li><a href=\"help-desk.html\">Help Desk</a></li>
                                                <li><a href=\"login.html\">Log In</a></li>
                                                <li><a href=\"register.html\">Register</a></li>
                                                <li><a href=\"404.html\">404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Blog</a>
                                            <ul>
                                                <li><a href=\"article.html\">Blog Page</a></li>
                                                <li><a href=\"article-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--== Main Menu End ==-->
                        </div>
                    </div>
                </div>
                <!--== Header Bottom End ==-->
            </header>
        {% endblock %}

        {% block body %}
        {% endblock %}


        {% block footer %}
            <section id=\"footer-area\">
                <!-- Footer Widget Start -->
                <div class=\"footer-widget-area\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Single Footer Widget Start -->
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">
                                    <h2>About Us</h2>
                                    <div class=\"widget-body\">
                                        <img src=\"{{ asset('img/logo.png') }}\" alt=\"JSOFT\">
                                        <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                                        <div class=\"newsletter-area\">
                                            <form action=\"index.html\">
                                                <input type=\"email\" placeholder=\"Subscribe Our Newsletter\">
                                                <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fa fa-send\"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Widget End -->

                            <!-- Single Footer Widget Start -->
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">
                                    <h2>Recent Posts</h2>
                                    <div class=\"widget-body\">
                                        <ul class=\"recent-post\">
                                            <li>
                                                <a href=\"#\">
                                                    Hello Bangladesh!
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    Lorem ipsum dolor sit amet
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    Hello Bangladesh!
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    consectetur adipisicing elit?
                                                    <i class=\"fa fa-long-arrow-right\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Widget End -->

                            <!-- Single Footer Widget Start -->
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">
                                    <h2>get touch</h2>
                                    <div class=\"widget-body\">
                                        <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                        <ul class=\"get-touch\">
                                            <li><i class=\"fa fa-map-marker\"></i> 800/8, Kazipara, Dhaka</li>
                                            <li><i class=\"fa fa-mobile\"></i> +880 01 86 25 72 43</li>
                                            <li><i class=\"fa fa-envelope\"></i> kazukamdu83@gmail.com</li>
                                        </ul>
                                        <a href=\"https://goo.gl/maps/b5mt45MCaPB2\" class=\"map-show\" target=\"_blank\">Show Location</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Widget End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Bottom Start -->
                <div class=\"footer-bottom-area\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 text-center\">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom End -->
            </section>
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
            <!--=== Jquery Migrate Min Js ===-->
            <script src=\"{{ asset('js/jquery-migrate.min.js') }}\"></script>
            <!--=== Popper Min Js ===-->
            <script src=\"{{ asset('js/popper.min.js') }}\"></script>
            <!--=== Bootstrap Min Js ===-->
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <!--=== Gijgo Min Js ===-->
            <script src=\"{{ asset('js/plugins/gijgo.js') }}\"></script>
            <!--=== Vegas Min Js ===-->
            <script src=\"{{ asset('js/plugins/vegas.min.js') }}\"></script>
            <!--=== Isotope Min Js ===-->
            <script src=\"{{ asset('js/plugins/isotope.min.js') }}\"></script>
            <!--=== Owl Caousel Min Js ===-->
            <script src=\"{{ asset('js/plugins/owl.carousel.min.js') }}\"></script>
            <!--=== Waypoint Min Js ===-->
            <script src=\"{{ asset('js/plugins/waypoints.min.js') }}\"></script>
            <!--=== CounTotop Min Js ===-->
            <script src=\"{{ asset('js/plugins/counterup.min.js') }}\"></script>
            <!--=== YtPlayer Min Js ===-->
            <script src=\"{{ asset('js/plugins/mb.YTPlayer.js') }}\"></script>
            <!--=== Magnific Popup Min Js ===-->
            <script src=\"{{ asset('js/plugins/magnific-popup.min.js') }}\"></script>
            <!--=== Slicknav Min Js ===-->
            <script src=\"{{ asset('js/plugins/slicknav.min.js') }}\"></script>

            <!--=== Mian Js ===-->
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\untitled2\\app\\Resources\\views\\base.html.twig");
    }
}
