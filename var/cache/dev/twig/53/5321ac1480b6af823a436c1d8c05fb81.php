<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* portfolio_ponthieux/home.html.twig */
class __TwigTemplate_bc6305df3c80666bdfb6d140783b3250 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio_ponthieux/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio_ponthieux/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio_ponthieux/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "
<style>
    body {
        text-align: center;
    }
</style>

<br>
<h1>Ponthieux Léo - Group B2</h1>
<br>
<h4>Some additional information:</h4>
<p>
    I am currently in my first year of a University Bachelor of Technology (BUT) in Networks and Telecommunications, and on this blog coded in HTML with the Symfony framework, you will find a summary of my skills as well as my passions and hobbies.
</p>
<br>
<br>
<br>
<div style=\"display: flex; align-items: baseline; justify-content: center; gap: 10px;\">
    <h5 style=\"margin: 0;\">Age :</h5>
    <p style=\"margin: 0;\">18 years old</p>
</div>
<br>
<div style=\"display: flex; align-items: baseline; justify-content: center; gap: 10px;\">
    <h5 style=\"margin: 0;\">Address :</h5>
    <p style=\"margin: 0;\">5 Avenue de Paris, Roanne 42300</p>
</div>
<br>
<div style=\"display: flex; align-items: baseline; justify-content: center; gap: 10px;\">
    <h5 style=\"margin: 0;\">Phone :</h5>
    <p style=\"margin: 0;\">07 69 05 14 41</p>
</div>
<br>
<br>
<div class=\"container mt-5 p-4 bg-dark text-light shadow-lg border rounded\" style=\"width: 50%; margin: auto;\">
    <h3 class=\"text-center text-warning\">For more information</h3>
    <p class=\"text-center\">Discover my hobbies, passions, and projects.</p>
    <div class=\"text-center mt-3\">
        <a href=\"/passions\" class=\"btn btn-outline-light\">Learn More</a>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "portfolio_ponthieux/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

<style>
    body {
        text-align: center;
    }
</style>

<br>
<h1>Ponthieux Léo - Group B2</h1>
<br>
<h4>Some additional information:</h4>
<p>
    I am currently in my first year of a University Bachelor of Technology (BUT) in Networks and Telecommunications, and on this blog coded in HTML with the Symfony framework, you will find a summary of my skills as well as my passions and hobbies.
</p>
<br>
<br>
<br>
<div style=\"display: flex; align-items: baseline; justify-content: center; gap: 10px;\">
    <h5 style=\"margin: 0;\">Age :</h5>
    <p style=\"margin: 0;\">18 years old</p>
</div>
<br>
<div style=\"display: flex; align-items: baseline; justify-content: center; gap: 10px;\">
    <h5 style=\"margin: 0;\">Address :</h5>
    <p style=\"margin: 0;\">5 Avenue de Paris, Roanne 42300</p>
</div>
<br>
<div style=\"display: flex; align-items: baseline; justify-content: center; gap: 10px;\">
    <h5 style=\"margin: 0;\">Phone :</h5>
    <p style=\"margin: 0;\">07 69 05 14 41</p>
</div>
<br>
<br>
<div class=\"container mt-5 p-4 bg-dark text-light shadow-lg border rounded\" style=\"width: 50%; margin: auto;\">
    <h3 class=\"text-center text-warning\">For more information</h3>
    <p class=\"text-center\">Discover my hobbies, passions, and projects.</p>
    <div class=\"text-center mt-3\">
        <a href=\"/passions\" class=\"btn btn-outline-light\">Learn More</a>
    </div>
</div>

{% endblock %}", "portfolio_ponthieux/home.html.twig", "/Users/leoponthieux/Cours UJM/SAE 1.04/Dépôt Github/SAE_1.04/Symfony/portfolio_ponthieux/templates/portfolio_ponthieux/home.html.twig");
    }
}
