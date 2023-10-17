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

/* dons/index.html.twig */
class __TwigTemplate_1c6fb093329ed3a88f0fa3171870fac1042a8ee8c66bb2173e0d69cabee86477 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dons/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dons/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dons/index.html.twig", 1);
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

        echo "Dnd35Dons index";
        
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
        echo "    <h1>Dnd35Dons index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>BBA requis</th>
                <th>Force requise</th>
                <th>Dextérité requise</th>
                <th>Constitution requise</th>
                <th>Intelligence requise</th>
                <th>Sagesse requise</th>
                <th>Charisme requis</th>
                <th>Don supp Guerrier</th>
                <th>Niveau lanceur de sort</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dnd35_dons"]) || array_key_exists("dnd35_dons", $context) ? $context["dnd35_dons"] : (function () { throw new RuntimeError('Variable "dnd35_dons" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dnd35_don"]) {
            // line 27
            echo "            <tr>
                <td style=\"border: black solid 1px\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\"><pre style=\"text-wrap:wrap\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</pre></td>
                <td style=\"border: black solid 1px\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "bbaprerequis", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "forprerequis", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "dexprerequis", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "conprerequis", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "intprerequis", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "sagprerequis", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "chaprerequis", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "donsuppguerrier", [], "any", false, false, false, 37)) ? ("Oui") : ("Non"));
            echo "</td>
                <td style=\"border: black solid 1px\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "niveaulanceursort", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td style=\"border: black solid 1px\">
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Voir</a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dnd35_don"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dnd35_don'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dons/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 52,  185 => 49,  176 => 45,  167 => 41,  163 => 40,  158 => 38,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dnd35Dons index{% endblock %}

{% block body %}
    <h1>Dnd35Dons index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>BBA requis</th>
                <th>Force requise</th>
                <th>Dextérité requise</th>
                <th>Constitution requise</th>
                <th>Intelligence requise</th>
                <th>Sagesse requise</th>
                <th>Charisme requis</th>
                <th>Don supp Guerrier</th>
                <th>Niveau lanceur de sort</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for dnd35_don in dnd35_dons %}
            <tr>
                <td style=\"border: black solid 1px\">{{ dnd35_don.nom }}</td>
                <td style=\"border: black solid 1px\"><pre style=\"text-wrap:wrap\">{{ dnd35_don.description }}</pre></td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.bbaprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.forprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.dexprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.conprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.intprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.sagprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.chaprerequis }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.donsuppguerrier ? 'Oui' : 'Non' }}</td>
                <td style=\"border: black solid 1px\">{{ dnd35_don.niveaulanceursort }}</td>
                <td style=\"border: black solid 1px\">
                    <a href=\"{{ path('app_dons_show', {'id': dnd35_don.id}) }}\">Voir</a>
                    <a href=\"{{ path('app_dons_edit', {'id': dnd35_don.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_dons_new') }}\">Create new</a>
{% endblock %}
", "dons/index.html.twig", "/Applications/MAMP/htdocs/dndProject/templates/dons/index.html.twig");
    }
}
