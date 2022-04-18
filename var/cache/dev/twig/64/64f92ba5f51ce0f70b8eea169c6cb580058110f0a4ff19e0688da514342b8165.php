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

/* backend/menu/category/list.html.twig */
class __TwigTemplate_05cfbc59ef99330fc254e862f4f2b3b43320b7805f5487fa90363263a4e62bfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/menu/category/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/menu/category/list.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout/layout.html.twig", "backend/menu/category/list.html.twig", 1);
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
                            <h2 class=\"content-header-title float-start mb-0\">Category List</h2>
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
                        <a class=\"btn btn-primary\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_create");
        echo "\">Add New Category</a>
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
                                <h4 class=\"card-title\">Category List</h4>
                            </div>

                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 51
            echo "                                        <tr>
                                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "categoryName", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                            ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 53) == 1)) {
                // line 54
                echo "                                                <td><span class=\"badge rounded-pill badge-light-success me-1\">Active</span></td>
                                            ";
            } else {
                // line 56
                echo "                                                <td><span class=\"badge rounded-pill badge-light-warning me-1\">Passive</span></td>
                                            ";
            }
            // line 58
            echo "                                            <td>
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                                    <a class=\"btn btn-outline-primary waves-effect\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                                    </a>
                                                    <a class=\"btn btn-outline-primary waves-effect delete\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 63)]), "html", null, true);
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
        // line 71
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
        return "backend/menu/category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  153 => 63,  147 => 60,  143 => 58,  139 => 56,  135 => 54,  133 => 53,  129 => 52,  126 => 51,  122 => 50,  95 => 26,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
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
                            <h2 class=\"content-header-title float-start mb-0\">Category List</h2>
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
                        <a class=\"btn btn-primary\" href=\"{{ path('admin_category_create') }}\">Add New Category</a>
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
                                <h4 class=\"card-title\">Category List</h4>
                            </div>

                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for data in list %}
                                        <tr>
                                            <td>{{ data.categoryName }}</td>
                                            {% if  data.status  == 1 %}
                                                <td><span class=\"badge rounded-pill badge-light-success me-1\">Active</span></td>
                                            {% else %}
                                                <td><span class=\"badge rounded-pill badge-light-warning me-1\">Passive</span></td>
                                            {% endif %}
                                            <td>
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                                    <a class=\"btn btn-outline-primary waves-effect\" href=\"{{ path('admin_category_edit',{'id':data.id }) }}\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                                    </a>
                                                    <a class=\"btn btn-outline-primary waves-effect delete\" href=\"{{ path('admin_category_delete',{'id':data.id }) }}\">
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
{% endblock %}", "backend/menu/category/list.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\menu\\category\\list.html.twig");
    }
}
