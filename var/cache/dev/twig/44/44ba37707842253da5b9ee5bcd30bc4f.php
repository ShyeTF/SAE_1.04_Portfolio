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

/* portfolio_ponthieux/passions.html.twig */
class __TwigTemplate_6cfd688a2a43ed6ba6d96c16b1c42da4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio_ponthieux/passions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio_ponthieux/passions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio_ponthieux/passions.html.twig", 1);
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
        yield "<br>
<div class=\"card border-dark mb-3\">
  <h3 class=\"card-header\">Serveur DIY</h3>
  <div class=\"card-body\">
    <h5 class=\"card-title\">Serveur NAS - Machine Virtuelle</h5>
    <p class=\"card-text\">Mon premier serveur de stockage en réseau était un NAS Synology DS220J équipé de 2x4To IronWolf, idéal pour commencer à prendre en mains cet univers du stockage réseau et de la gestion de ses utilisateurs. Arrivant rapidement à bout de ces performances et à force de regarder des vidéos de personnes montant leur propre serveur NAS DIY, je me suis décidé à monter le miens. Je voulais en faire un mélange entre un serveur NAS ainsi qu'un serveur de machine virtuelle pour héberger des petits services comme Home Assistant, Nginx, etc...</p>
  </div>
  <img src=\"https://lh4.googleusercontent.com/35EMycmyiH5A-Noi1V0MnSRO7VWJPGT7wwnAuoQsTpdBVVsoZAjwNRt90Y563mkpXFNJdYwjRH2HwZQQrNBQ_YzDmtioeX_QQttZ71BpjVnvfOcYKcMb-5yAn4mCSgBtzA=w1280\" 
     class=\"d-block user-select-none\" 
     style=\"width: auto; height: 400px; object-fit: contain;\" 
     alt=\"Image cap\">
  <div class=\"card-body\">
    <p class=\"card-text text-center\">Plus d'informations disponible sur mon site web 
    <a href=\"https://www.allmyprojects.fr/\" target=\"_blank\" rel=\"noopener noreferrer\">www.allmyprojects.fr</a>
    </p>
    <p class=\"card-text text-center\">Pour plus de précisions sur ce projet, rendez-vous sur 
    <a href=\"https://www.allmyprojects.fr/projets/serveur-nas-vm\" target=\"_blank\" rel=\"noopener noreferrer\">la page en question</a>
    </p>
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
        return "portfolio_ponthieux/passions.html.twig";
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
<br>
<div class=\"card border-dark mb-3\">
  <h3 class=\"card-header\">Serveur DIY</h3>
  <div class=\"card-body\">
    <h5 class=\"card-title\">Serveur NAS - Machine Virtuelle</h5>
    <p class=\"card-text\">Mon premier serveur de stockage en réseau était un NAS Synology DS220J équipé de 2x4To IronWolf, idéal pour commencer à prendre en mains cet univers du stockage réseau et de la gestion de ses utilisateurs. Arrivant rapidement à bout de ces performances et à force de regarder des vidéos de personnes montant leur propre serveur NAS DIY, je me suis décidé à monter le miens. Je voulais en faire un mélange entre un serveur NAS ainsi qu'un serveur de machine virtuelle pour héberger des petits services comme Home Assistant, Nginx, etc...</p>
  </div>
  <img src=\"https://lh4.googleusercontent.com/35EMycmyiH5A-Noi1V0MnSRO7VWJPGT7wwnAuoQsTpdBVVsoZAjwNRt90Y563mkpXFNJdYwjRH2HwZQQrNBQ_YzDmtioeX_QQttZ71BpjVnvfOcYKcMb-5yAn4mCSgBtzA=w1280\" 
     class=\"d-block user-select-none\" 
     style=\"width: auto; height: 400px; object-fit: contain;\" 
     alt=\"Image cap\">
  <div class=\"card-body\">
    <p class=\"card-text text-center\">Plus d'informations disponible sur mon site web 
    <a href=\"https://www.allmyprojects.fr/\" target=\"_blank\" rel=\"noopener noreferrer\">www.allmyprojects.fr</a>
    </p>
    <p class=\"card-text text-center\">Pour plus de précisions sur ce projet, rendez-vous sur 
    <a href=\"https://www.allmyprojects.fr/projets/serveur-nas-vm\" target=\"_blank\" rel=\"noopener noreferrer\">la page en question</a>
    </p>
  </div>
</div>
{% endblock %}", "portfolio_ponthieux/passions.html.twig", "/Users/leoponthieux/Cours UJM/SAE 1.04/Dépôt Github/SAE_1.04/Symfony/portfolio_ponthieux/templates/portfolio_ponthieux/passions.html.twig");
    }
}
