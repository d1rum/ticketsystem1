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

/* frontend/ticket/ticketlist.html.twig */
class __TwigTemplate_e589006665a135bce8ee8d91b18e7e05c8d074ea402fa9086dd6f9a6bf46a788 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/ticket/ticketlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/ticket/ticketlist.html.twig"));

        $this->parent = $this->loadTemplate("frontend/layout/layout.html.twig", "frontend/ticket/ticketlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- BEGIN: Content-->
    <div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper container-xxl p-0\">
            <div class=\"content-header row\">
                <div class=\"content-header-left col-md-9 col-12 mb-2\">
                    <div class=\"row breadcrumbs-top\">
                        <div class=\"col-12\">
                            <h2 class=\"content-header-title float-start mb-0\">Ticket List</h2>
                            <div class=\"breadcrumb-wrapper\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend");
        echo "\">Home</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"content-header-right text-md-end col-md-3 col-12 d-md-block d-none\">
                    <div class=\"mb-1 breadcrumb-right\">
                        <!-- <a href=\"/create-job\"><button type=\"button\" class=\"btn btn-primary\">Add New Job</button></a>-->
                    </div>
                </div>
            </div>
            <div class=\"content-body\">
                <!-- Ajax Sourced Server-side -->
                <div class=\"row\" id=\"basic-table\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Ticket List</h4>
                            </div>

                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Ticket Category</th>
                                        <th>Ticket Content</th>
                                        <th>Ticket Priority</th>
                                        <th>Ticket Status</th>
                                        <th>Ticket Response</th>
";
        // line 49
        echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 53
            echo "                                        <tr>
                                            <td>
                                            ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "category", [], "any", false, false, false, 55), "count", [], "any", false, false, false, 55) == 2)) {
                // line 56
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "category", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                    // line 57
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category1"], "categoryName", [], "any", false, false, false, 57), "html", null, true);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                                                ";
            } else {
                // line 60
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "category", [], "any", false, false, false, 60), "current", [], "any", false, false, false, 60), "categoryName", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                                    ";
            }
            // line 62
            echo "                                                    </td>


                                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "ticketContent", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>

                                            ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "ticketPriority", [], "any", false, false, false, 67) == 0)) {
                // line 68
                echo "                                                <td><span class=\"badge rounded-pill badge-light-warning me-1\">Urgent</span></td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
$context["data"], "ticketPriority", [], "any", false, false, false, 69) == 1)) {
                // line 70
                echo "                                                <td><span class=\"badge rounded-pill badge-light-secondary me-1\">Important</span></td>
                                            ";
            } else {
                // line 72
                echo "                                                <td><span class=\"badge rounded-pill badge-light-success me-1\">Standart</span></td>

                                            ";
            }
            // line 75
            echo "
                                            ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 76) == 0)) {
                // line 77
                echo "                                            <td><span class=\"badge rounded-pill badge-light-success me-1\">Active</span></td>
                                    ";
            } else {
                // line 79
                echo "                                        <td><span class=\"badge rounded-pill badge-light-warning me-1\">Closed</span></td>
                                        ";
            }
            // line 81
            echo "                                            <td>";
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 81) == 1)) {
                // line 82
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "ticketResponse", [], "any", false, false, false, 82), "html", null, true);
                echo "
                                                ";
            } else {
                // line 84
                echo "                                                    ticket processing in progress
                                                    ";
            }
            // line 86
            echo "                                            </td>



                                            ";
            // line 101
            echo "                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!--/ Ajax Sourced Server-side -->





            </div>
        </div>
    </div>
    <!-- END: Content-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/ticket/ticketlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 103,  213 => 101,  207 => 86,  203 => 84,  197 => 82,  194 => 81,  190 => 79,  186 => 77,  184 => 76,  181 => 75,  176 => 72,  172 => 70,  170 => 69,  167 => 68,  165 => 67,  160 => 65,  155 => 62,  149 => 60,  146 => 59,  137 => 57,  132 => 56,  130 => 55,  126 => 53,  122 => 52,  117 => 49,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/layout/layout.html.twig' %}

{% block body %}
    <!-- BEGIN: Content-->
    <div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper container-xxl p-0\">
            <div class=\"content-header row\">
                <div class=\"content-header-left col-md-9 col-12 mb-2\">
                    <div class=\"row breadcrumbs-top\">
                        <div class=\"col-12\">
                            <h2 class=\"content-header-title float-start mb-0\">Ticket List</h2>
                            <div class=\"breadcrumb-wrapper\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_frontend') }}\">Home</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"content-header-right text-md-end col-md-3 col-12 d-md-block d-none\">
                    <div class=\"mb-1 breadcrumb-right\">
                        <!-- <a href=\"/create-job\"><button type=\"button\" class=\"btn btn-primary\">Add New Job</button></a>-->
                    </div>
                </div>
            </div>
            <div class=\"content-body\">
                <!-- Ajax Sourced Server-side -->
                <div class=\"row\" id=\"basic-table\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Ticket List</h4>
                            </div>

                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Ticket Category</th>
                                        <th>Ticket Content</th>
                                        <th>Ticket Priority</th>
                                        <th>Ticket Status</th>
                                        <th>Ticket Response</th>
{#                                        <th>Actions</th>#}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for data in ticket %}
                                        <tr>
                                            <td>
                                            {% if data.category.count == 2 %}
                                                {% for category1 in data.category %}
                                                    {{ category1.categoryName }}
                                                {% endfor %}
                                                {% else %}
                                                {{ data.category.current.categoryName}}
                                                    {% endif %}
                                                    </td>


                                            <td>{{ data.ticketContent }}</td>

                                            {% if  data.ticketPriority  == 0 %}
                                                <td><span class=\"badge rounded-pill badge-light-warning me-1\">Urgent</span></td>
                                            {% elseif data.ticketPriority == 1 %}
                                                <td><span class=\"badge rounded-pill badge-light-secondary me-1\">Important</span></td>
                                            {% else %}
                                                <td><span class=\"badge rounded-pill badge-light-success me-1\">Standart</span></td>

                                            {% endif %}

                                            {% if  data.status  == 0 %}
                                            <td><span class=\"badge rounded-pill badge-light-success me-1\">Active</span></td>
                                    {% else %}
                                        <td><span class=\"badge rounded-pill badge-light-warning me-1\">Closed</span></td>
                                        {% endif %}
                                            <td>{% if data.status == 1%}
                                                {{ data.ticketResponse }}
                                                {% else %}
                                                    ticket processing in progress
                                                    {% endif %}
                                            </td>



                                            {#                                            <td>#}
{#                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">#}
{#                                                    <a class=\"btn btn-outline-primary waves-effect\" href=\"{{ path('admin_category_edit',{'id':data.id }) }}\">#}
{#                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>#}
{#                                                    </a>#}
{#                                                    <a class=\"btn btn-outline-primary waves-effect delete\" href=\"{{ path('admin_category_delete',{'id':data.id }) }}\">#}
{#                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline>#}
{#                                                            <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>#}
{#                                                    </a>#}
{#                                                </div>#}
{#                                            </td>#}
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!--/ Ajax Sourced Server-side -->





            </div>
        </div>
    </div>
    <!-- END: Content-->
{% endblock %}", "frontend/ticket/ticketlist.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\ticket\\ticketlist.html.twig");
    }
}
