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

/* accueil/index.html.twig */
class __TwigTemplate_8144e524e7cf2213215c90ad467262f61db3b4e03f5117e3772b24b6ec8c791f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AccueilController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- ======= Intro Section ======= -->
    <div class=\"intro intro-carousel\">
        <div id=\"carousel\" class=\"owl-carousel owl-theme\">
            <div class=\"carousel-item-a intro-item bg-image\" style=\"background-image: url(/images/slide-1.jpg)\">
                <div class=\"overlay overlay-a\"></div>
                <div class=\"intro-content display-table\">
                    <div class=\"table-cell\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"intro-body\">
                                        <p class=\"intro-title-top\">Doral, Florida
                                            <br> 78345</p>
                                        <h1 class=\"intro-title mb-4\">
                                            <span class=\"color-b\">204 </span> Mount
                                            <br> Olive Road Two</h1>
                                        <p class=\"intro-subtitle intro-price\">
                                            <a href=\"#\"><span class=\"price-a\">rent | \$ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item-a intro-item bg-image\" style=\"background-image: url(/images/slide-2.jpg)\">
                <div class=\"overlay overlay-a\"></div>
                <div class=\"intro-content display-table\">
                    <div class=\"table-cell\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"intro-body\">
                                        <p class=\"intro-title-top\">Doral, Florida
                                            <br> 78345</p>
                                        <h1 class=\"intro-title mb-4\">
                                            <span class=\"color-b\">204 </span> Rino
                                            <br> Venda Road Five</h1>
                                        <p class=\"intro-subtitle intro-price\">
                                            <a href=\"#\"><span class=\"price-a\">rent | \$ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item-a intro-item bg-image\" style=\"background-image: url(/images/slide-3.jpg)\">
                <div class=\"overlay overlay-a\"></div>
                <div class=\"intro-content display-table\">
                    <div class=\"table-cell\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"intro-body\">
                                        <p class=\"intro-title-top\">Doral, Florida
                                            <br> 78345</p>
                                        <h1 class=\"intro-title mb-4\">
                                            <span class=\"color-b\">204 </span> Alira
                                            <br> Roan Road One</h1>
                                        <p class=\"intro-subtitle intro-price\">
                                            <a href=\"#\"><span class=\"price-a\">rent | \$ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id=\"main\">

        <!-- ======= Latest Properties Section ======= -->
        <section class=\"section-property section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Dernières propriétés</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"property-grid.html\">All Property
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"property-carousel\" class=\"owl-carousel owl-theme\">
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-6.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">206 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"#\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">157 West
                                                <br /> Central Park</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"property-single.html\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">245 Azabu
                                                <br /> Nishi Park let</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"property-single.html\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">204 Montal
                                                <br /> South Bela Two</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"property-single.html\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
        <section class=\"section-agents section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Agents</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"agents-grid.html\">All Agents
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"/images/agent-4.jpg\" alt=\"\" class=\"img-d img-fluid\">
                            </div>
                            <div class=\"card-overlay card-overlay-hover\">
                                <div class=\"card-header-d\">
                                    <div class=\"card-title-d align-self-center\">
                                        <h3 class=\"title-d\">
                                            <a href=\"agent-single.html\" class=\"link-two\">Margaret Sotillo
                                                <br> Escala</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"card-body-d\">
                                    <p class=\"content-d color-text-a\">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class=\"info-agents color-a\">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234</p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com</p>
                                    </div>
                                </div>
                                <div class=\"card-footer-d\">
                                    <div class=\"socials-footer d-flex justify-content-center\">
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"/images/agent-1.jpg\" alt=\"\" class=\"img-d img-fluid\">
                            </div>
                            <div class=\"card-overlay card-overlay-hover\">
                                <div class=\"card-header-d\">
                                    <div class=\"card-title-d align-self-center\">
                                        <h3 class=\"title-d\">
                                            <a href=\"agent-single.html\" class=\"link-two\">Stiven Spilver
                                                <br> Darw</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"card-body-d\">
                                    <p class=\"content-d color-text-a\">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class=\"info-agents color-a\">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234</p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com</p>
                                    </div>
                                </div>
                                <div class=\"card-footer-d\">
                                    <div class=\"socials-footer d-flex justify-content-center\">
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"/images/agent-5.jpg\" alt=\"\" class=\"img-d img-fluid\">
                            </div>
                            <div class=\"card-overlay card-overlay-hover\">
                                <div class=\"card-header-d\">
                                    <div class=\"card-title-d align-self-center\">
                                        <h3 class=\"title-d\">
                                            <a href=\"agent-single.html\" class=\"link-two\">Emma Toledo
                                                <br> Cascada</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"card-body-d\">
                                    <p class=\"content-d color-text-a\">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class=\"info-agents color-a\">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234</p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com</p>
                                    </div>
                                </div>
                                <div class=\"card-footer-d\">
                                    <div class=\"socials-footer d-flex justify-content-center\">
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Agents Section -->

        <!-- ======= Latest News Section ======= -->
        <section class=\"section-news section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">A la une</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"blog-grid.html\">All News
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"new-carousel\" class=\"owl-carousel owl-theme\">
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-2.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">House</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"blog-single.html\">House is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-5.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">Travel</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"blog-single.html\">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-7.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">Park</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"blog-single.html\">Park is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-3.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">Travel</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"#\">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
        <section class=\"section-testimonials section-t8 nav-arrow-a\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Avis</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"testimonial-carousel\" class=\"owl-carousel owl-arrow\">
                    <div class=\"carousel-item-a\">
                        <div class=\"testimonials-box\">
                            <div class=\"row\">
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-img\">
                                        <img src=\"/images/testimonial-1.jpg\" alt=\"\" class=\"img-fluid\">
                                    </div>
                                </div>
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-ico\">
                                        <span class=\"ion-ios-quote\"></span>
                                    </div>
                                    <div class=\"testimonials-content\">
                                        <p class=\"testimonial-text\">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                            debitis hic ber quibusdam
                                            voluptatibus officia expedita corpori.
                                        </p>
                                    </div>
                                    <div class=\"testimonial-author-box\">
                                        <img src=\"/images/mini-testimonial-1.jpg\" alt=\"\" class=\"testimonial-avatar\">
                                        <h5 class=\"testimonial-author\">Albert & Erika</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-a\">
                        <div class=\"testimonials-box\">
                            <div class=\"row\">
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-img\">
                                        <img src=\"/images/testimonial-2.jpg\" alt=\"\" class=\"img-fluid\">
                                    </div>
                                </div>
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-ico\">
                                        <span class=\"ion-ios-quote\"></span>
                                    </div>
                                    <div class=\"testimonials-content\">
                                        <p class=\"testimonial-text\">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                            debitis hic ber quibusdam
                                            voluptatibus officia expedita corpori.
                                        </p>
                                    </div>
                                    <div class=\"testimonial-author-box\">
                                        <img src=\"/images/mini-testimonial-2.jpg\" alt=\"\" class=\"testimonial-avatar\">
                                        <h5 class=\"testimonial-author\">Pablo & Emma</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}


{% block body %}
    <!-- ======= Intro Section ======= -->
    <div class=\"intro intro-carousel\">
        <div id=\"carousel\" class=\"owl-carousel owl-theme\">
            <div class=\"carousel-item-a intro-item bg-image\" style=\"background-image: url(/images/slide-1.jpg)\">
                <div class=\"overlay overlay-a\"></div>
                <div class=\"intro-content display-table\">
                    <div class=\"table-cell\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"intro-body\">
                                        <p class=\"intro-title-top\">Doral, Florida
                                            <br> 78345</p>
                                        <h1 class=\"intro-title mb-4\">
                                            <span class=\"color-b\">204 </span> Mount
                                            <br> Olive Road Two</h1>
                                        <p class=\"intro-subtitle intro-price\">
                                            <a href=\"#\"><span class=\"price-a\">rent | \$ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item-a intro-item bg-image\" style=\"background-image: url(/images/slide-2.jpg)\">
                <div class=\"overlay overlay-a\"></div>
                <div class=\"intro-content display-table\">
                    <div class=\"table-cell\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"intro-body\">
                                        <p class=\"intro-title-top\">Doral, Florida
                                            <br> 78345</p>
                                        <h1 class=\"intro-title mb-4\">
                                            <span class=\"color-b\">204 </span> Rino
                                            <br> Venda Road Five</h1>
                                        <p class=\"intro-subtitle intro-price\">
                                            <a href=\"#\"><span class=\"price-a\">rent | \$ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item-a intro-item bg-image\" style=\"background-image: url(/images/slide-3.jpg)\">
                <div class=\"overlay overlay-a\"></div>
                <div class=\"intro-content display-table\">
                    <div class=\"table-cell\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8\">
                                    <div class=\"intro-body\">
                                        <p class=\"intro-title-top\">Doral, Florida
                                            <br> 78345</p>
                                        <h1 class=\"intro-title mb-4\">
                                            <span class=\"color-b\">204 </span> Alira
                                            <br> Roan Road One</h1>
                                        <p class=\"intro-subtitle intro-price\">
                                            <a href=\"#\"><span class=\"price-a\">rent | \$ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id=\"main\">

        <!-- ======= Latest Properties Section ======= -->
        <section class=\"section-property section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Dernières propriétés</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"property-grid.html\">All Property
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"property-carousel\" class=\"owl-carousel owl-theme\">
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-6.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">206 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"#\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">157 West
                                                <br /> Central Park</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"property-single.html\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">245 Azabu
                                                <br /> Nishi Park let</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"property-single.html\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-b\">
                        <div class=\"card-box-a card-shadow\">
                            <div class=\"img-box-a\">
                                <img src=\"/images/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-overlay-a-content\">
                                    <div class=\"card-header-a\">
                                        <h2 class=\"card-title-a\">
                                            <a href=\"property-single.html\">204 Montal
                                                <br /> South Bela Two</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-body-a\">
                                        <div class=\"price-box d-flex\">
                                            <span class=\"price-a\">rent | \$ 12.000</span>
                                        </div>
                                        <a href=\"property-single.html\" class=\"link-a\">Click here to view
                                            <span class=\"ion-ios-arrow-forward\"></span>
                                        </a>
                                    </div>
                                    <div class=\"card-footer-a\">
                                        <ul class=\"card-info d-flex justify-content-around\">
                                            <li>
                                                <h4 class=\"card-info-title\">Area</h4>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class=\"card-info-title\">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
        <section class=\"section-agents section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Agents</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"agents-grid.html\">All Agents
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"/images/agent-4.jpg\" alt=\"\" class=\"img-d img-fluid\">
                            </div>
                            <div class=\"card-overlay card-overlay-hover\">
                                <div class=\"card-header-d\">
                                    <div class=\"card-title-d align-self-center\">
                                        <h3 class=\"title-d\">
                                            <a href=\"agent-single.html\" class=\"link-two\">Margaret Sotillo
                                                <br> Escala</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"card-body-d\">
                                    <p class=\"content-d color-text-a\">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class=\"info-agents color-a\">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234</p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com</p>
                                    </div>
                                </div>
                                <div class=\"card-footer-d\">
                                    <div class=\"socials-footer d-flex justify-content-center\">
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"/images/agent-1.jpg\" alt=\"\" class=\"img-d img-fluid\">
                            </div>
                            <div class=\"card-overlay card-overlay-hover\">
                                <div class=\"card-header-d\">
                                    <div class=\"card-title-d align-self-center\">
                                        <h3 class=\"title-d\">
                                            <a href=\"agent-single.html\" class=\"link-two\">Stiven Spilver
                                                <br> Darw</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"card-body-d\">
                                    <p class=\"content-d color-text-a\">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class=\"info-agents color-a\">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234</p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com</p>
                                    </div>
                                </div>
                                <div class=\"card-footer-d\">
                                    <div class=\"socials-footer d-flex justify-content-center\">
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"/images/agent-5.jpg\" alt=\"\" class=\"img-d img-fluid\">
                            </div>
                            <div class=\"card-overlay card-overlay-hover\">
                                <div class=\"card-header-d\">
                                    <div class=\"card-title-d align-self-center\">
                                        <h3 class=\"title-d\">
                                            <a href=\"agent-single.html\" class=\"link-two\">Emma Toledo
                                                <br> Cascada</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"card-body-d\">
                                    <p class=\"content-d color-text-a\">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class=\"info-agents color-a\">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234</p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com</p>
                                    </div>
                                </div>
                                <div class=\"card-footer-d\">
                                    <div class=\"socials-footer d-flex justify-content-center\">
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\" class=\"link-one\">
                                                    <i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Agents Section -->

        <!-- ======= Latest News Section ======= -->
        <section class=\"section-news section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">A la une</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"blog-grid.html\">All News
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"new-carousel\" class=\"owl-carousel owl-theme\">
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-2.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">House</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"blog-single.html\">House is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-5.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">Travel</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"blog-single.html\">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-7.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">Park</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"blog-single.html\">Park is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-c\">
                        <div class=\"card-box-b card-shadow news-box\">
                            <div class=\"img-box-b\">
                                <img src=\"/images/post-3.jpg\" alt=\"\" class=\"img-b img-fluid\">
                            </div>
                            <div class=\"card-overlay\">
                                <div class=\"card-header-b\">
                                    <div class=\"card-category-b\">
                                        <a href=\"#\" class=\"category-b\">Travel</a>
                                    </div>
                                    <div class=\"card-title-b\">
                                        <h2 class=\"title-2\">
                                            <a href=\"#\">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class=\"card-date\">
                                        <span class=\"date-b\">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
        <section class=\"section-testimonials section-t8 nav-arrow-a\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Avis</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"testimonial-carousel\" class=\"owl-carousel owl-arrow\">
                    <div class=\"carousel-item-a\">
                        <div class=\"testimonials-box\">
                            <div class=\"row\">
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-img\">
                                        <img src=\"/images/testimonial-1.jpg\" alt=\"\" class=\"img-fluid\">
                                    </div>
                                </div>
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-ico\">
                                        <span class=\"ion-ios-quote\"></span>
                                    </div>
                                    <div class=\"testimonials-content\">
                                        <p class=\"testimonial-text\">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                            debitis hic ber quibusdam
                                            voluptatibus officia expedita corpori.
                                        </p>
                                    </div>
                                    <div class=\"testimonial-author-box\">
                                        <img src=\"/images/mini-testimonial-1.jpg\" alt=\"\" class=\"testimonial-avatar\">
                                        <h5 class=\"testimonial-author\">Albert & Erika</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item-a\">
                        <div class=\"testimonials-box\">
                            <div class=\"row\">
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-img\">
                                        <img src=\"/images/testimonial-2.jpg\" alt=\"\" class=\"img-fluid\">
                                    </div>
                                </div>
                                <div class=\"col-sm-12 col-md-6\">
                                    <div class=\"testimonial-ico\">
                                        <span class=\"ion-ios-quote\"></span>
                                    </div>
                                    <div class=\"testimonials-content\">
                                        <p class=\"testimonial-text\">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                            debitis hic ber quibusdam
                                            voluptatibus officia expedita corpori.
                                        </p>
                                    </div>
                                    <div class=\"testimonial-author-box\">
                                        <img src=\"/images/mini-testimonial-2.jpg\" alt=\"\" class=\"testimonial-avatar\">
                                        <h5 class=\"testimonial-author\">Pablo & Emma</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
{% endblock %}

", "accueil/index.html.twig", "C:\\xampp\\htdocs\\fast_immo\\templates\\accueil\\index.html.twig");
    }
}
