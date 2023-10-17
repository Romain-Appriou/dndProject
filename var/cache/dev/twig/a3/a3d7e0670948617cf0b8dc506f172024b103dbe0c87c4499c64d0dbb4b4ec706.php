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

/* dons/show.html.twig */
class __TwigTemplate_d3fa6112710cc0567f2afc5d9e466837790affb6b6be9c49676bafd8bb91328e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dons/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dons/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dons/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre style=\"text-wrap:wrap\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Spécial</th>
                <td><pre style=\"text-wrap:wrap\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 20, $this->source); })()), "special", [], "any", false, false, false, 20), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>BBA requis</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 24, $this->source); })()), "bbaprerequis", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Force Min</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 28, $this->source); })()), "forprerequis", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dextérité Min</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 32, $this->source); })()), "dexprerequis", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constitution Min</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 36, $this->source); })()), "conprerequis", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intelligence Min</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 40, $this->source); })()), "intprerequis", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sagesse Min</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 44, $this->source); })()), "sagprerequis", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Charisme Min</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 48, $this->source); })()), "chaprerequis", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Don supplémentaire guerrier</th>
                <td>";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 52, $this->source); })()), "donsuppguerrier", [], "any", false, false, false, 52)) ? ("Oui") : ("Non"));
        echo "</td>
            </tr>
            <tr>
                <th>Niveau lanceur sort</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 56, $this->source); })()), "niveaulanceursort", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons_index");
        echo "\">Retour à la liste</a>

    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dnd35_don"]) || array_key_exists("dnd35_don", $context) ? $context["dnd35_don"] : (function () { throw new RuntimeError('Variable "dnd35_don" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">Modifier</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dons/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 63,  183 => 61,  175 => 56,  168 => 52,  161 => 48,  154 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ dnd35_don.nom }}{% endblock %}

{% block body %}
    <h1>{{ dnd35_don.nom }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ dnd35_don.nom }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre style=\"text-wrap:wrap\">{{ dnd35_don.description }}</pre></td>
            </tr>
            <tr>
                <th>Spécial</th>
                <td><pre style=\"text-wrap:wrap\">{{ dnd35_don.special }}</pre></td>
            </tr>
            <tr>
                <th>BBA requis</th>
                <td>{{ dnd35_don.bbaprerequis }}</td>
            </tr>
            <tr>
                <th>Force Min</th>
                <td>{{ dnd35_don.forprerequis }}</td>
            </tr>
            <tr>
                <th>Dextérité Min</th>
                <td>{{ dnd35_don.dexprerequis }}</td>
            </tr>
            <tr>
                <th>Constitution Min</th>
                <td>{{ dnd35_don.conprerequis }}</td>
            </tr>
            <tr>
                <th>Intelligence Min</th>
                <td>{{ dnd35_don.intprerequis }}</td>
            </tr>
            <tr>
                <th>Sagesse Min</th>
                <td>{{ dnd35_don.sagprerequis }}</td>
            </tr>
            <tr>
                <th>Charisme Min</th>
                <td>{{ dnd35_don.chaprerequis }}</td>
            </tr>
            <tr>
                <th>Don supplémentaire guerrier</th>
                <td>{{ dnd35_don.donsuppguerrier ? 'Oui' : 'Non' }}</td>
            </tr>
            <tr>
                <th>Niveau lanceur sort</th>
                <td>{{ dnd35_don.niveaulanceursort }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_dons_index') }}\">Retour à la liste</a>

    <a href=\"{{ path('app_dons_edit', {'id': dnd35_don.id}) }}\">Modifier</a>

{% endblock %}
", "dons/show.html.twig", "/Applications/MAMP/htdocs/dndProject/templates/dons/show.html.twig");
    }
}
