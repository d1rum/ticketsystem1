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

/* backend/menu/ticket/ticketlist.html.twig */
class __TwigTemplate_35c5cb9c27c8f5053cc0a0f76bbcb98147cb7241255de3f9c50d09961c116c21 extends Template
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
        return "backend/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/menu/ticket/ticketlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/menu/ticket/ticketlist.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout/layout.html.twig", "backend/menu/ticket/ticketlist.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backend");
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
                                        <th>User Email </th>
                                        <th>Ticket Category</th>
                                        <th>Ticket Content</th>
                                        <th>Ticket Priority</th>
                                        <th>Ticket Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 53
            echo "                                        <tr>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                            <td>    ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "category", [], "any", false, false, false, 55), "count", [], "any", false, false, false, 55) == 2)) {
                // line 56
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "category", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                    // line 57
                    echo "                                                        ";
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
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "category", [], "any", false, false, false, 60), "current", [], "any", false, false, false, 60), "categoryName", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                                ";
            }
            // line 61
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "ticketContent", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                                            ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "ticketPriority", [], "any", false, false, false, 64) == 0)) {
                // line 65
                echo "                                                <td><span class=\"badge rounded-pill badge-light-warning me-1\">Urgent</span></td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 66
$context["data"], "ticketPriority", [], "any", false, false, false, 66) == 1)) {
                // line 67
                echo "                                                <td><span class=\"badge rounded-pill badge-light-secondary me-1\">Important</span></td>
                                            ";
            } else {
                // line 69
                echo "                                                <td><span class=\"badge rounded-pill badge-light-success me-1\">Standart</span></td>

                                            ";
            }
            // line 72
            echo "
                                            ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 73) == 0)) {
                // line 74
                echo "                                                <td><span class=\"badge rounded-pill badge-light-success me-1\">Active</span></td>
                                            ";
            } else {
                // line 76
                echo "                                                <td><span class=\"badge rounded-pill badge-light-warning me-1\">Closed</span></td>
                                            ";
            }
            // line 78
            echo "

                                            <td>
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                                    <a class=\"btn btn-outline-primary waves-effect\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_admin_ticket", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                                    </a>
                                                    <a class=\"btn btn-outline-primary waves-effect delete\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_admin_ticket", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline>
                                                            <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return "backend/menu/ticket/ticketlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 93,  206 => 85,  200 => 82,  194 => 78,  190 => 76,  186 => 74,  184 => 73,  181 => 72,  176 => 69,  172 => 67,  170 => 66,  167 => 65,  165 => 64,  160 => 62,  157 => 61,  151 => 60,  148 => 59,  139 => 57,  134 => 56,  132 => 55,  128 => 54,  125 => 53,  121 => 52,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout/layout.html.twig' %}

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
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('admin_backend') }}\">Home</a>
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
                                        <th>User Email </th>
                                        <th>Ticket Category</th>
                                        <th>Ticket Content</th>
                                        <th>Ticket Priority</th>
                                        <th>Ticket Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for data in ticket %}
                                        <tr>
                                            <td>{{ data.user.email }}</td>
                                            <td>    {% if data.category.count == 2 %}
                                                    {% for category1 in data.category %}
                                                        {{ category1.categoryName }}
                                                    {% endfor %}
                                                {% else %}
                                                    {{ data.category.current.categoryName}}
                                                {% endif %}</td>
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


                                            <td>
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                                    <a class=\"btn btn-outline-primary waves-effect\" href=\"{{ path('edit_admin_ticket',{'id':data.id }) }}\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                                    </a>
                                                    <a class=\"btn btn-outline-primary waves-effect delete\" href=\"{{ path('delete_admin_ticket',{'id':data.id }) }}\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline>
                                                            <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                                    </a>
                                                </div>
                                            </td>
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
{% endblock %}", "backend/menu/ticket/ticketlist.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\menu\\ticket\\ticketlist.html.twig");
    }
}
