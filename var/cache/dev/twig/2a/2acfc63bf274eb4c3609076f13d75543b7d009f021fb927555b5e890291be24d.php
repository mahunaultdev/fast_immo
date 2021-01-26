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

/* equipe/index.html.twig */
class __TwigTemplate_eb82d3cfb76591dd80d4486b41e0d58acee1ffe0c3714769600865ab913ce45c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipe/index.html.twig", 1);
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

        echo "Hello EquipeController!";
        
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
                            <h1 class=\"title-single\">We Do Great Design For Creative Folks</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= About Section ======= -->
        <section class=\"section-about\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"about-img-box\">
                            <img src=\"assets/img/slide-about-1.jpg\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"sinse-box\">
                            <h3 class=\"sinse-title\">Fast Immo
                                <span></span>
                                <br> Depuis 2017</h3>
                            <p>Art & Creation</p>
                        </div>
                    </div>
                    <div class=\"col-md-12 section-t8\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-lg-5\">
                                <img src=\"assets/img/about-2.jpg\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-lg-2  d-none d-lg-block\">
                                <div class=\"title-vertical d-flex justify-content-start\">
                                    <span>Fast Immo</span>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-lg-5 section-md-t3\">
                                <div class=\"title-box-d\">
                                    <h3 class=\"title-d\">Une
                                        <span class=\"color-d\">équipe</span> toujours à
                                        <br> la page.</h3>
                                </div>
                                <p class=\"color-text-a\">
                                    Notre équipe se démène pour vous, que ce soit pour proposer en exclusivité des maisons liées à vos demandes, ou être à l'écoute de vos besoins.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =======Team Section ======= -->
        <section class=\"section-agents section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Rencontrez notre équipe</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"assets/img/agent-7.jpg\" alt=\"\" class=\"img-d img-fluid\">
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
                                <img src=\"assets/img/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
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
                                <img src=\"assets/img/agent-5.jpg\" alt=\"\" class=\"img-d img-fluid\">
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
        </section><!-- End About Section-->

    </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipe/index.html.twig";
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

{% block title %}Hello EquipeController!{% endblock %}

{% block body %}
    <main id=\"main\">

        <!-- ======= Intro Single ======= -->
        <section class=\"intro-single\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8\">
                        <div class=\"title-single-box\">
                            <h1 class=\"title-single\">We Do Great Design For Creative Folks</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= About Section ======= -->
        <section class=\"section-about\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"about-img-box\">
                            <img src=\"assets/img/slide-about-1.jpg\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"sinse-box\">
                            <h3 class=\"sinse-title\">Fast Immo
                                <span></span>
                                <br> Depuis 2017</h3>
                            <p>Art & Creation</p>
                        </div>
                    </div>
                    <div class=\"col-md-12 section-t8\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-lg-5\">
                                <img src=\"assets/img/about-2.jpg\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-lg-2  d-none d-lg-block\">
                                <div class=\"title-vertical d-flex justify-content-start\">
                                    <span>Fast Immo</span>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-lg-5 section-md-t3\">
                                <div class=\"title-box-d\">
                                    <h3 class=\"title-d\">Une
                                        <span class=\"color-d\">équipe</span> toujours à
                                        <br> la page.</h3>
                                </div>
                                <p class=\"color-text-a\">
                                    Notre équipe se démène pour vous, que ce soit pour proposer en exclusivité des maisons liées à vos demandes, ou être à l'écoute de vos besoins.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =======Team Section ======= -->
        <section class=\"section-agents section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Rencontrez notre équipe</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card-box-d\">
                            <div class=\"card-img-d\">
                                <img src=\"assets/img/agent-7.jpg\" alt=\"\" class=\"img-d img-fluid\">
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
                                <img src=\"assets/img/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
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
                                <img src=\"assets/img/agent-5.jpg\" alt=\"\" class=\"img-d img-fluid\">
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
        </section><!-- End About Section-->

    </main><!-- End #main -->
{% endblock %}
", "equipe/index.html.twig", "C:\\xampp\\htdocs\\fast_immo\\templates\\equipe\\index.html.twig");
    }
}
