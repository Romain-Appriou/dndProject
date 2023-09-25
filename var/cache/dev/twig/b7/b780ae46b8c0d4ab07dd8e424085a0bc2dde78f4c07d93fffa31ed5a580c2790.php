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

/* races/show.html.twig */
class __TwigTemplate_fc7a1d2d7e5fb88893703befef1af7d64717b166edb226c696e1e24046500c20 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "races/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "races/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "races/show.html.twig", 1);
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

        echo "Dnd35Races";
        
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
        echo "    <h1>Dnd35Races</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taille</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 20, $this->source); })()), "taille", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vitesse</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 24, $this->source); })()), "vitesse", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Donssupplvl1</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 28, $this->source); })()), "donssupplvl1", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compsupplvl1</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 32, $this->source); })()), "compsupplvl1", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compsuppbylvl</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 36, $this->source); })()), "compsuppbylvl", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idclassepredilection</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 40, $this->source); })()), "idclassepredilection", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immunitesommeil</th>
                <td>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 44, $this->source); })()), "immunitesommeil", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Visionnocturne</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 48, $this->source); })()), "visionnocturne", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modiffor</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 52, $this->source); })()), "modiffor", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modifdex</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 56, $this->source); })()), "modifdex", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modifcon</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 60, $this->source); })()), "modifcon", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modifint</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 64, $this->source); })()), "modifint", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modifsag</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 68, $this->source); })()), "modifsag", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modifcha</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 72, $this->source); })()), "modifcha", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nblanguessupplementaires</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 76, $this->source); })()), "nblanguessupplementaires", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 89
        echo twig_include($this->env, $context, "races/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "races/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 89,  228 => 87,  223 => 85,  215 => 80,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dnd35Races{% endblock %}

{% block body %}
    <h1>Dnd35Races</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ dnd35_race.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ dnd35_race.nom }}</td>
            </tr>
            <tr>
                <th>Taille</th>
                <td>{{ dnd35_race.taille }}</td>
            </tr>
            <tr>
                <th>Vitesse</th>
                <td>{{ dnd35_race.vitesse }}</td>
            </tr>
            <tr>
                <th>Donssupplvl1</th>
                <td>{{ dnd35_race.donssupplvl1 }}</td>
            </tr>
            <tr>
                <th>Compsupplvl1</th>
                <td>{{ dnd35_race.compsupplvl1 }}</td>
            </tr>
            <tr>
                <th>Compsuppbylvl</th>
                <td>{{ dnd35_race.compsuppbylvl }}</td>
            </tr>
            <tr>
                <th>Idclassepredilection</th>
                <td>{{ dnd35_race.idclassepredilection }}</td>
            </tr>
            <tr>
                <th>Immunitesommeil</th>
                <td>{{ dnd35_race.immunitesommeil ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Visionnocturne</th>
                <td>{{ dnd35_race.visionnocturne }}</td>
            </tr>
            <tr>
                <th>Modiffor</th>
                <td>{{ dnd35_race.modiffor }}</td>
            </tr>
            <tr>
                <th>Modifdex</th>
                <td>{{ dnd35_race.modifdex }}</td>
            </tr>
            <tr>
                <th>Modifcon</th>
                <td>{{ dnd35_race.modifcon }}</td>
            </tr>
            <tr>
                <th>Modifint</th>
                <td>{{ dnd35_race.modifint }}</td>
            </tr>
            <tr>
                <th>Modifsag</th>
                <td>{{ dnd35_race.modifsag }}</td>
            </tr>
            <tr>
                <th>Modifcha</th>
                <td>{{ dnd35_race.modifcha }}</td>
            </tr>
            <tr>
                <th>Nblanguessupplementaires</th>
                <td>{{ dnd35_race.nblanguessupplementaires }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ dnd35_race.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_races_index') }}\">back to list</a>

    <a href=\"{{ path('app_races_edit', {'id': dnd35_race.id}) }}\">edit</a>

    {{ include('races/_delete_form.html.twig') }}
{% endblock %}
", "races/show.html.twig", "/Applications/MAMP/htdocs/dndProject/templates/races/show.html.twig");
    }
}
