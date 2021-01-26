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

/* inscription/index.html.twig */
class __TwigTemplate_e71204e8d2b0c62a333aed1524ef83b8899e9dc48d11f8978b1dc9c331413ed0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/index.html.twig", 1);
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

        echo "Hello InscriptionController!";
        
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
                            <label class=\"texteb\" for=\"nom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                        <div class=\"form-group col-md-6 required\">
                            <label class=\"texteb\" for=\"prenom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"email\">E-mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Nom@gmail.com\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[com,fr]{2,3}\$\">
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"tel\">Téléphone</label>
                        <input type=\"text\" class=\"form-control\" id=\"tel\"  pattern=\"(?:[\\s.-]*\\d{2}){5}\">
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"mdp\">Mot de Passe</label>
                        <input type=\"password\" class=\"form-control\" id=\"mdp\"
                               pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                               title=\"Doit contenir au moins une masjuscule, une minuscule et un chiffre et faire plus de 8 caractères\">
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"date\">Date de naissance</label>
                        <input type=\"text\" class=\"form-control\" id=\"date\" placeholder=\"jj/mm/aaaa\" pattern=\"((?:0[1-9])|(?:1[0-2]))\\/((?:0[0-9])|(?:[1-2][0-9])|(?:3[0-1]))\\/(\\d{4})\">
                    </div>
                    <div class=\"row justify-content-center\">
                        <button type=\"submit\" class=\"btn texteb\">Cliquez ici</button>
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
        return "inscription/index.html.twig";
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

{% block title %}Hello InscriptionController!{% endblock %}

{% block body %}
    <section class=\"formulaire\">
        <div class=\"container\">
            <h1 class=\"display-4 inscription text-center my-3\">Inscription</h1>

            <div class=\"jumbotron jumbotron-fluid col-md-7 mx-auto\">
                <form class=\"mx-5\">
                    <div class=\"row mx-auto\">
                        <div class=\"form-group col-md-6 required\">
                            <label class=\"texteb\" for=\"nom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                        <div class=\"form-group col-md-6 required\">
                            <label class=\"texteb\" for=\"prenom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" pattern=\"[a-zA-z]{2,30}\" title=\"Ne doit contenir que des lettres
                        et ne pas faire plus de 30 caractères\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"email\">E-mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Nom@gmail.com\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[com,fr]{2,3}\$\">
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"tel\">Téléphone</label>
                        <input type=\"text\" class=\"form-control\" id=\"tel\"  pattern=\"(?:[\\s.-]*\\d{2}){5}\">
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"mdp\">Mot de Passe</label>
                        <input type=\"password\" class=\"form-control\" id=\"mdp\"
                               pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\"
                               title=\"Doit contenir au moins une masjuscule, une minuscule et un chiffre et faire plus de 8 caractères\">
                    </div>
                    <div class=\"form-group col-md-12 required\">
                        <label class=\"texteb\" for=\"date\">Date de naissance</label>
                        <input type=\"text\" class=\"form-control\" id=\"date\" placeholder=\"jj/mm/aaaa\" pattern=\"((?:0[1-9])|(?:1[0-2]))\\/((?:0[0-9])|(?:[1-2][0-9])|(?:3[0-1]))\\/(\\d{4})\">
                    </div>
                    <div class=\"row justify-content-center\">
                        <button type=\"submit\" class=\"btn texteb\">Cliquez ici</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
{% endblock %}
", "inscription/index.html.twig", "C:\\xampp\\htdocs\\fast_immo\\templates\\inscription\\index.html.twig");
    }
}
