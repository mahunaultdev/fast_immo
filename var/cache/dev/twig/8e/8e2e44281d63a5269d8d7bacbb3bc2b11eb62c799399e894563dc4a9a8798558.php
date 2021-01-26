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

/* formulairecontact/index.html.twig */
class __TwigTemplate_4ec739f38fb4484539ac20fd00a68c2733b2de732089a442b06d12f5c6a47416 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulairecontact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulairecontact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulairecontact/index.html.twig", 1);
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

        echo "Hello FormulairecontactController!";
        
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
        echo "    <section class=\"formulaire\">
        <div class=\"container\">
            <h1 class=\"display-4 inscription text-center my-3\">Inscription</h1>

            <div class=\"jumbotron jumbotron-fluid col-md-7 mx-auto\">
                <form class=\"mx-5\">
                    <div class=\"row mx-auto\">
                        <div class=\"form-group col-md-6 required\">
                            <label for=\"nom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                        <div class=\"form-group col-md-6 required\">
                            <label for=\"prenom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlTextarea1\">Message</label>
                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"row justify-content-center\">
                        <button type=\"submit\" class=\"btn\">Cliquez ici</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulairecontact/index.html.twig";
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

{% block title %}Hello FormulairecontactController!{% endblock %}

{% block body %}
    <section class=\"formulaire\">
        <div class=\"container\">
            <h1 class=\"display-4 inscription text-center my-3\">Inscription</h1>

            <div class=\"jumbotron jumbotron-fluid col-md-7 mx-auto\">
                <form class=\"mx-5\">
                    <div class=\"row mx-auto\">
                        <div class=\"form-group col-md-6 required\">
                            <label for=\"nom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                        <div class=\"form-group col-md-6 required\">
                            <label for=\"prenom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlTextarea1\">Message</label>
                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"row justify-content-center\">
                        <button type=\"submit\" class=\"btn\">Cliquez ici</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
{% endblock %}
", "formulairecontact/index.html.twig", "C:\\xampp\\htdocs\\fast_immo\\templates\\formulairecontact\\index.html.twig");
    }
}
