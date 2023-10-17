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

/* sorts/index.html.twig */
class __TwigTemplate_b96b0dfd697dbeab083ce99b38ecda080f801605f4e120cac0fd7586dd7b3f01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sorts/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sorts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sorts/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        echo " ";
        $this->loadTemplate("header.html.twig", "sorts/index.html.twig", 3)->display($context);
        echo " ";
        
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
        echo "    <h1>Liste des sorts</h1>

    <!-- form de tri des sorts par level ou par classe -->
<form action=\"\" method=\"post\">
    <select name=\"sortsFilterClass\" id=\"sortsFilterClass\">
            <option value=\"0\">Choisissez une classe</option>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 13
            echo "            <option name=\"classe\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </select> 
    <select name=\"sortsFilterLvl\" id=\"sortsFilterLvl\">
            <option value=\"0\">Choisissez un niveau</option>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "             <option name=\"lvl\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">Niveau ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </select> 
    <input type=\"text\" placeholder=\"Nom du sort\" name=\"sortsFilterName\">   
    <input type=\"submit\" value=\"Rechercher\">
    
</form>

<!-- Liste des sorts -->

    <table class=\"table\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Nom</th>
                <th>Sauvegarde</th>
                <th>Temps d'incantation</th>
                <th>Portée</th>
                <th>Effet</th>
                <th>Durée</th>
                <th>Resistance magie</th>
                <th>Cibles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

";
        // line 46
        $context["counter"] = 1;
        // line 47
        echo "
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dnd35_sorts"]) || array_key_exists("dnd35_sorts", $context) ? $context["dnd35_sorts"] : (function () { throw new RuntimeError('Variable "dnd35_sorts" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dnd35_sort"]) {
            // line 49
            echo "            <tr>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"><button>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</button></a></td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "sauvegarde", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "tempsincantation", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "portee", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "effet", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "duree", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "resistancemagie", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "cibles", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>

            ";
            // line 65
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 65, $this->source); })()) + 1);
            // line 66
            echo "            
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dnd35_sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sorts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 75,  240 => 72,  231 => 68,  225 => 66,  223 => 65,  216 => 61,  212 => 60,  207 => 58,  203 => 57,  199 => 56,  195 => 55,  191 => 54,  187 => 53,  183 => 52,  177 => 51,  173 => 50,  170 => 49,  165 => 48,  162 => 47,  160 => 46,  133 => 21,  122 => 19,  118 => 18,  113 => 15,  102 => 13,  98 => 12,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block nav %} {% include \"header.html.twig\" %} {% endblock %}

{% block body %}
    <h1>Liste des sorts</h1>

    <!-- form de tri des sorts par level ou par classe -->
<form action=\"\" method=\"post\">
    <select name=\"sortsFilterClass\" id=\"sortsFilterClass\">
            <option value=\"0\">Choisissez une classe</option>
        {% for classe in classes %}
            <option name=\"classe\" value=\"{{ classe.id }}\">{{ classe.nom }}</option>
        {% endfor %}
    </select> 
    <select name=\"sortsFilterLvl\" id=\"sortsFilterLvl\">
            <option value=\"0\">Choisissez un niveau</option>
        {% for i in 1..9 %}
             <option name=\"lvl\" value=\"{{ i }}\">Niveau {{ i }}</option>
        {% endfor %}
    </select> 
    <input type=\"text\" placeholder=\"Nom du sort\" name=\"sortsFilterName\">   
    <input type=\"submit\" value=\"Rechercher\">
    
</form>

<!-- Liste des sorts -->

    <table class=\"table\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Nom</th>
                <th>Sauvegarde</th>
                <th>Temps d'incantation</th>
                <th>Portée</th>
                <th>Effet</th>
                <th>Durée</th>
                <th>Resistance magie</th>
                <th>Cibles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

{% set counter = 1 %}

        {% for dnd35_sort in dnd35_sorts %}
            <tr>
                <td>{{ counter }}</td>
                <td><a href=\"{{ path('app_sorts_show', {'id': dnd35_sort.id}) }}\"><button>{{ dnd35_sort.nom }}</button></a></td>
                <td>{{ dnd35_sort.sauvegarde }}</td>
                <td>{{ dnd35_sort.tempsincantation }}</td>
                <td>{{ dnd35_sort.portee }}</td>
                <td>{{ dnd35_sort.effet }}</td>
                <td>{{ dnd35_sort.duree }}</td>
                <td>{{ dnd35_sort.resistancemagie }}</td>
                <td>{{ dnd35_sort.cibles }}</td>
                <td>
                    <a href=\"{{ path('app_sorts_show', {'id': dnd35_sort.id}) }}\">show</a>
                    <a href=\"{{ path('app_sorts_edit', {'id': dnd35_sort.id}) }}\">edit</a>
                </td>
            </tr>

            {% set counter = counter + 1 %}
            
        {% else %}
            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_sorts_new') }}\">Create new</a>
{% endblock %}
", "sorts/index.html.twig", "/Applications/MAMP/htdocs/dndProject/templates/sorts/index.html.twig");
    }
}
