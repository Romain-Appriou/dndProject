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

/* sorts/show.html.twig */
class __TwigTemplate_a817d02595d96a73efe38986650f6fdf3bba20dcd8b04b4925a60f90cb34e87b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sorts/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sorts/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sorts/show.html.twig", 1);
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

        echo "Dnd35Sorts";
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Ecole</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 12, $this->source); })()), "ecole", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Complement école</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 16, $this->source); })()), "complementecole", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre style=\"text-wrap:wrap\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Jet de sauvegarde</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 24, $this->source); })()), "sauvegarde", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Composantes</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 28, $this->source); })()), "composantes", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Temps d'incantation</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 32, $this->source); })()), "tempsincantation", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Portée</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 36, $this->source); })()), "portee", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Effet</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 40, $this->source); })()), "effet", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 44, $this->source); })()), "duree", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resistancemagie</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 48, $this->source); })()), "resistancemagie", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cibles</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 52, $this->source); })()), "cibles", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_index");
        echo "\"><button>Retour à la liste</button></a>

    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dnd35_sort"]) || array_key_exists("dnd35_sort", $context) ? $context["dnd35_sort"] : (function () { throw new RuntimeError('Variable "dnd35_sort" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\"><button>Modifier</button></a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sorts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  176 => 57,  168 => 52,  161 => 48,  154 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dnd35Sorts{% endblock %}

{% block body %}
    <h1>{{ dnd35_sort.nom }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Ecole</th>
                <td>{{ dnd35_sort.ecole }}</td>
            </tr>
            <tr>
                <th>Complement école</th>
                <td>{{ dnd35_sort.complementecole }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre style=\"text-wrap:wrap\">{{ dnd35_sort.description }}</pre></td>
            </tr>
            <tr>
                <th>Jet de sauvegarde</th>
                <td>{{ dnd35_sort.sauvegarde }}</td>
            </tr>
            <tr>
                <th>Composantes</th>
                <td>{{ dnd35_sort.composantes }}</td>
            </tr>
            <tr>
                <th>Temps d'incantation</th>
                <td>{{ dnd35_sort.tempsincantation }}</td>
            </tr>
            <tr>
                <th>Portée</th>
                <td>{{ dnd35_sort.portee }}</td>
            </tr>
            <tr>
                <th>Effet</th>
                <td>{{ dnd35_sort.effet }}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ dnd35_sort.duree }}</td>
            </tr>
            <tr>
                <th>Resistancemagie</th>
                <td>{{ dnd35_sort.resistancemagie }}</td>
            </tr>
            <tr>
                <th>Cibles</th>
                <td>{{ dnd35_sort.cibles }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_sorts_index') }}\"><button>Retour à la liste</button></a>

    <a href=\"{{ path('app_sorts_edit', {'id': dnd35_sort.id}) }}\"><button>Modifier</button></a>

{% endblock %}
", "sorts/show.html.twig", "/Applications/MAMP/htdocs/dndProject/templates/sorts/show.html.twig");
    }
}
