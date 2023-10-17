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
class __TwigTemplate_ae21217a11d59c64667f91ab08a0d5eb6c2d3f3c11ad0f4020261658473ce107 extends Template
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <td><img style=\"max-width: 500px; max-height: 500px;\" src=\"../../img/";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo ".jpeg\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "\"></td>
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
                <th>Dons supplémentaires lvl 1</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 28, $this->source); })()), "donssupplvl1", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compétences supplémentaires lvl 1</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 32, $this->source); })()), "compsupplvl1", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compétences supplémentairs par lvl</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 36, $this->source); })()), "compsuppbylvl", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>                
                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["race"] ?? null), "classepredilection", [], "any", true, true, false, 39)) {
            // line 40
            echo "
                    <th>Classe de prédilection</th>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["race"]) || array_key_exists("race", $context) ? $context["race"] : (function () { throw new RuntimeError('Variable "race" does not exist.', 42, $this->source); })()), "classepredilection", [], "any", false, false, false, 42), "html", null, true);
            echo " </td>    

                ";
        }
        // line 45
        echo "            </tr>
            <tr>
                <th>Immunité sommeil</th>
                <td>";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 48, $this->source); })()), "immunitesommeil", [], "any", false, false, false, 48)) ? ("Oui") : ("Non"));
        echo "</td>
            </tr>
            <tr>
                <th>Vision nocturne</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 52, $this->source); })()), "visionnocturne", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>
                    <table>
                        <thead>
                            <tr>
                                <th colspan=\"6\">Modificateur de caractéristiques</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FOR</td>
                                <td>DEX</td>
                                <td>CON</td>
                                <td>INT</td>
                                <td>SAG</td>
                                <td>CHA</td>
                            </tr>
                            <tr>
                            <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 72, $this->source); })()), "modiffor", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                            <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 73, $this->source); })()), "modifdex", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                            <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 74, $this->source); })()), "modifcon", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                            <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 75, $this->source); })()), "modifint", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 76, $this->source); })()), "modifsag", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                            <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 77, $this->source); })()), "modifcha", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tr>
            <tr>
                <th>Nombre de langues supplémentaires</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 86, $this->source); })()), "nblanguessupplementaires", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre style=\"text-wrap:wrap\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90), "html", null, true);
        echo "</pre></td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races_index");
        echo "\"><button>Retour à la liste</button></a>

    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_races_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dnd35_race"]) || array_key_exists("dnd35_race", $context) ? $context["dnd35_race"] : (function () { throw new RuntimeError('Variable "dnd35_race" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\"><button>Modifier</button></a>

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
        return array (  247 => 97,  242 => 95,  234 => 90,  227 => 86,  215 => 77,  211 => 76,  207 => 75,  203 => 74,  199 => 73,  195 => 72,  172 => 52,  165 => 48,  160 => 45,  154 => 42,  150 => 40,  148 => 39,  142 => 36,  135 => 32,  128 => 28,  121 => 24,  114 => 20,  107 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dnd35Races{% endblock %}

{% block body %}
    <h1>{{dnd35_race.nom}}</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <td><img style=\"max-width: 500px; max-height: 500px;\" src=\"../../img/{{ dnd35_race.nom }}.jpeg\" alt=\"Image de {{ dnd35_race.nom }}\"></td>
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
                <th>Dons supplémentaires lvl 1</th>
                <td>{{ dnd35_race.donssupplvl1 }}</td>
            </tr>
            <tr>
                <th>Compétences supplémentaires lvl 1</th>
                <td>{{ dnd35_race.compsupplvl1 }}</td>
            </tr>
            <tr>
                <th>Compétences supplémentairs par lvl</th>
                <td>{{ dnd35_race.compsuppbylvl }}</td>
            </tr>
            <tr>                
                {% if race.classepredilection is defined %}

                    <th>Classe de prédilection</th>
                    <td>{{ race.classepredilection }} </td>    

                {% endif %}
            </tr>
            <tr>
                <th>Immunité sommeil</th>
                <td>{{ dnd35_race.immunitesommeil ? 'Oui' : 'Non' }}</td>
            </tr>
            <tr>
                <th>Vision nocturne</th>
                <td>{{ dnd35_race.visionnocturne }}</td>
            </tr>
            <tr>
                <td>
                    <table>
                        <thead>
                            <tr>
                                <th colspan=\"6\">Modificateur de caractéristiques</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FOR</td>
                                <td>DEX</td>
                                <td>CON</td>
                                <td>INT</td>
                                <td>SAG</td>
                                <td>CHA</td>
                            </tr>
                            <tr>
                            <td>{{ dnd35_race.modiffor }}</td>
                            <td>{{ dnd35_race.modifdex }}</td>
                            <td>{{ dnd35_race.modifcon }}</td>
                            <td>{{ dnd35_race.modifint }}</td>
                            <td>{{ dnd35_race.modifsag }}</td>
                            <td>{{ dnd35_race.modifcha }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tr>
            <tr>
                <th>Nombre de langues supplémentaires</th>
                <td>{{ dnd35_race.nblanguessupplementaires }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre style=\"text-wrap:wrap\">{{ dnd35_race.description }}</pre></td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_races_index') }}\"><button>Retour à la liste</button></a>

    <a href=\"{{ path('app_races_edit', {'id': dnd35_race.id}) }}\"><button>Modifier</button></a>

{% endblock %}

", "races/show.html.twig", "/Applications/MAMP/htdocs/dndProject/templates/races/show.html.twig");
    }
}
