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

/* maison/index.html.twig */
class __TwigTemplate_b19ed7fabfbc789a0f51af33bedc09cdaa99bfd4230887f7a0ac7c9f3e5cd9e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maison/index.html.twig", 1);
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
        echo "    <!-- ======= Intro Single ======= -->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Nos propriétés étonnantes</h1>
                        <span class=\"color-text-a\">Grid Properties</span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class=\"property-grid grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"grid-option\">
                        <form>
                            <select class=\"custom-select\">
                                <option selected>Selection</option>
                                <option value=\"1\">Du nouveau au vieux</option>
                                <option value=\"2\">a louer</option>
                                <option value=\"3\">a vendre</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-1.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-6.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-8.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <nav class=\"pagination-a\">
                        <ul class=\"pagination justify-content-end\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                    <span class=\"ion-ios-arrow-back\"></span>
                                </a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">1</a>
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">2</a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">3</a>
                            </li>
                            <li class=\"page-item next\">
                                <a class=\"page-link\" href=\"#\">
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Property Grid Single-->

    </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maison/index.html.twig";
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
    <!-- ======= Intro Single ======= -->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Nos propriétés étonnantes</h1>
                        <span class=\"color-text-a\">Grid Properties</span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class=\"property-grid grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"grid-option\">
                        <form>
                            <select class=\"custom-select\">
                                <option selected>Selection</option>
                                <option value=\"1\">Du nouveau au vieux</option>
                                <option value=\"2\">a louer</option>
                                <option value=\"3\">a vendre</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-1.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-6.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-8.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"#\">204 Mount
                                            <br /> Olive Road Two</a>
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
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <nav class=\"pagination-a\">
                        <ul class=\"pagination justify-content-end\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                    <span class=\"ion-ios-arrow-back\"></span>
                                </a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">1</a>
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">2</a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">3</a>
                            </li>
                            <li class=\"page-item next\">
                                <a class=\"page-link\" href=\"#\">
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Property Grid Single-->

    </main><!-- End #main -->
{% endblock %}
", "maison/index.html.twig", "C:\\xampp\\htdocs\\fast_immo\\templates\\maison\\index.html.twig");
    }
}
