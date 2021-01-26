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

/* maison/maison.html.twig */
class __TwigTemplate_0d6985a0526d95368c927ac07755faac537d1e772f82d16475ea6eb428410e2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/maison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/maison.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maison/maison.html.twig", 1);
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

        echo "Hello MaisonController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <main id=\"main\">

        <!-- ======= Intro Single ======= -->
        <section class=\"intro-single\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8\">
                        <div class=\"title-single-box\">
                            <h1 class=\"title-single\">304 Blaster Up</h1>
                            <span class=\"color-text-a\">Chicago, IL 606543</span>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-4\">
                        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item\">
                                    <a href=\"property-grid.html\">Properties</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    304 Blaster Up
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Property Single ======= -->
        <section class=\"property-single nav-arrow-b\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div id=\"property-single-carousel\" class=\"owl-carousel owl-arrow gallery-property\">
                            <div class=\"carousel-item-b\">
                                <img src=\"/images/slide-2.jpg\" alt=\"\">
                            </div>
                            <div class=\"carousel-item-b\">
                                <img src=\"/images/slide-3.jpg\" alt=\"\">
                            </div>
                            <div class=\"carousel-item-b\">
                                <img src=\"/images/slide-1.jpg\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"property-price d-flex justify-content-center foo\">
                                    <div class=\"card-header-c d-flex\">
                                        <div class=\"card-box-ico\">
                                            <span class=\"ion-money\">\$</span>
                                        </div>
                                        <div class=\"card-title-c align-self-center\">
                                            <h5 class=\"title-c\">15000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"property-summary\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"title-box-d section-t4\">
                                                <h3 class=\"title-d\">Quick Summary</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"summary-list\">
                                        <ul class=\"list\">
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Property ID:</strong>
                                                <span>1134</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Location:</strong>
                                                <span>Chicago, IL 606543</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Property Type:</strong>
                                                <span>House</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Status:</strong>
                                                <span>Sale</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Area:</strong>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Beds:</strong>
                                                <span>4</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Baths:</strong>
                                                <span>2</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Garage:</strong>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-7 col-lg-7 section-md-t3\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d\">
                                            <h3 class=\"title-d\">Property Description</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"property-description\">
                                    <p class=\"description color-text-a\">
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                        neque, auctor sit amet
                                        aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                                        Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                                        nibh pulvinar quam id dui posuere blandit.
                                    </p>
                                    <p class=\"description color-text-a no-margin\">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                                        malesuada. Quisque velit nisi,
                                        pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                    </p>
                                </div>
                                <div class=\"row section-t3\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d\">
                                            <h3 class=\"title-d\">Amenities</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"amenities-list color-text-a\">
                                    <ul class=\"list-a no-margin\">
                                        <li>Balcony</li>
                                        <li>Outdoor Kitchen</li>
                                        <li>Cable Tv</li>
                                        <li>Deck</li>
                                        <li>Tennis Courts</li>
                                        <li>Internet</li>
                                        <li>Parking</li>
                                        <li>Sun Room</li>
                                        <li>Concrete Flooring</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Property Single-->

    </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maison/maison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MaisonController!{% endblock %}

{% block body %}
    <main id=\"main\">

        <!-- ======= Intro Single ======= -->
        <section class=\"intro-single\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8\">
                        <div class=\"title-single-box\">
                            <h1 class=\"title-single\">304 Blaster Up</h1>
                            <span class=\"color-text-a\">Chicago, IL 606543</span>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-4\">
                        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item\">
                                    <a href=\"property-grid.html\">Properties</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    304 Blaster Up
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Property Single ======= -->
        <section class=\"property-single nav-arrow-b\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div id=\"property-single-carousel\" class=\"owl-carousel owl-arrow gallery-property\">
                            <div class=\"carousel-item-b\">
                                <img src=\"/images/slide-2.jpg\" alt=\"\">
                            </div>
                            <div class=\"carousel-item-b\">
                                <img src=\"/images/slide-3.jpg\" alt=\"\">
                            </div>
                            <div class=\"carousel-item-b\">
                                <img src=\"/images/slide-1.jpg\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-md-5 col-lg-4\">
                                <div class=\"property-price d-flex justify-content-center foo\">
                                    <div class=\"card-header-c d-flex\">
                                        <div class=\"card-box-ico\">
                                            <span class=\"ion-money\">\$</span>
                                        </div>
                                        <div class=\"card-title-c align-self-center\">
                                            <h5 class=\"title-c\">15000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"property-summary\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"title-box-d section-t4\">
                                                <h3 class=\"title-d\">Quick Summary</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"summary-list\">
                                        <ul class=\"list\">
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Property ID:</strong>
                                                <span>1134</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Location:</strong>
                                                <span>Chicago, IL 606543</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Property Type:</strong>
                                                <span>House</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Status:</strong>
                                                <span>Sale</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Area:</strong>
                                                <span>340m
                          <sup>2</sup>
                        </span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Beds:</strong>
                                                <span>4</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Baths:</strong>
                                                <span>2</span>
                                            </li>
                                            <li class=\"d-flex justify-content-between\">
                                                <strong>Garage:</strong>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-7 col-lg-7 section-md-t3\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d\">
                                            <h3 class=\"title-d\">Property Description</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"property-description\">
                                    <p class=\"description color-text-a\">
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                        neque, auctor sit amet
                                        aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                                        Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                                        nibh pulvinar quam id dui posuere blandit.
                                    </p>
                                    <p class=\"description color-text-a no-margin\">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                                        malesuada. Quisque velit nisi,
                                        pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                    </p>
                                </div>
                                <div class=\"row section-t3\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d\">
                                            <h3 class=\"title-d\">Amenities</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"amenities-list color-text-a\">
                                    <ul class=\"list-a no-margin\">
                                        <li>Balcony</li>
                                        <li>Outdoor Kitchen</li>
                                        <li>Cable Tv</li>
                                        <li>Deck</li>
                                        <li>Tennis Courts</li>
                                        <li>Internet</li>
                                        <li>Parking</li>
                                        <li>Sun Room</li>
                                        <li>Concrete Flooring</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Property Single-->

    </main><!-- End #main -->
{% endblock %}", "maison/maison.html.twig", "C:\\xampp\\htdocs\\fast_immo\\templates\\maison\\maison.html.twig");
    }
}
