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
<form action=\"\" method=\"post\">
    <select name=\"sortsFilterClass\" id=\"sortsFilterClass\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 10
            echo "            <option name=\"classe\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 10), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </select> 
    <select name=\"sortsFilterLvl\" id=\"sortsFilterLvl\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
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
        // line 17
        echo "    </select>    
    <input type=\"submit\" value=\"Rechercher\">
</form>

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
        // line 38
        $context["counter"] = 1;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dnd35_sorts"]) || array_key_exists("dnd35_sorts", $context) ? $context["dnd35_sorts"] : (function () { throw new RuntimeError('Variable "dnd35_sorts" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dnd35_sort"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "sauvegarde", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "tempsincantation", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "portee", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "effet", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "duree", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "resistancemagie", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "cibles", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sorts_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_sort"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>

            ";
            // line 57
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 57, $this->source); })()) + 1);
            // line 58
            echo "            
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dnd35_sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 67
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
        return array (  235 => 67,  230 => 64,  221 => 60,  215 => 58,  213 => 57,  206 => 53,  202 => 52,  197 => 50,  193 => 49,  189 => 48,  185 => 47,  181 => 46,  177 => 45,  173 => 44,  169 => 43,  165 => 42,  162 => 41,  157 => 40,  154 => 39,  152 => 38,  129 => 17,  118 => 15,  114 => 14,  110 => 12,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block nav %} {% include \"header.html.twig\" %} {% endblock %}

{% block body %}
    <h1>Liste des sorts</h1>
<form action=\"\" method=\"post\">
    <select name=\"sortsFilterClass\" id=\"sortsFilterClass\">
        {% for classe in classes %}
            <option name=\"classe\" value=\"{{ classe.id }}\">{{ classe.nom }}</option>
        {% endfor %}
    </select> 
    <select name=\"sortsFilterLvl\" id=\"sortsFilterLvl\">
        {% for i in 1..9 %}
             <option name=\"lvl\" value=\"{{ i }}\">Niveau {{ i }}</option>
        {% endfor %}
    </select>    
    <input type=\"submit\" value=\"Rechercher\">
</form>

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
                <td>{{ dnd35_sort.nom }}</td>
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
