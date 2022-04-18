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

/* frontend/profile/index.html.twig */
class __TwigTemplate_8e12539d798889f40025f2d86040ece5d6db70a744a75b66e4e862b26a1e22b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("frontend/layout/layout.html.twig", "frontend/profile/index.html.twig", 1);
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
        echo "    <div class=\"row mt-5\">
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-2\">
            <div style=\"max-width: 340px;\">
                <div class=\"card border-0 hover-change-image\">
                    <div class=\"position-relative overflow-hidden\">
                        <img class=\"card-img\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/our-team-01.jpg"), "html", null, true);
        echo "\" alt=\"our-team-01\">
                        <ul class=\"list-inline text-center card-img-overlay top-auto mb-0 py-2 bg-border-color hover-image hover-bottom-to-top\">
                            <li class=\"list-inline-item mr-6\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li class=\"list-inline-item mr-6\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-facebook\"></i></a></li>
                            <li class=\"list-inline-item mr-6\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-instagram\"></i></a></li>
                            <li class=\"list-inline-item\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-youtube\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"card-body px-0 text-center\">
                        <div class=\"spinner-grow text-success\" role=\"status\">
                            <span class=\"sr-only\">Active</span>
                        </div>
                        <h4 class=\"fs-20\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "surname", [], "any", false, false, false, 22), "html", null, true);
        echo "</h4>
                        ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "status", [], "any", false, false, false, 23) == 0)) {
            // line 24
            echo "                            <p class=\"card-text\">
                                <span class=\"badge badge-danger\">Passive</span>
                            </p>
                        ";
        } else {
            // line 28
            echo "                            <p class=\"card-text\">
                                <span class=\"badge badge-success\">Active</span>
                            </p>
                        ";
        }
        // line 32
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_ticket");
        echo "\" class=\"btn btn-success btn-sm card-link\">Create Ticket</a>
                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_ticket_list");
        echo "\" class=\"btn btn-secondary btn-sm card-link mt-2\">My Ticket List</a>
                        <a data-toggle=\"modal\" data-target=\"#logoutModal\" class=\"btn btn-danger btn-sm card-link\">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <nav>
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">

                </div>


            </nav>
            <div class=\"tab-content\" id=\"nav-tabContent\">
                <!-- Home Page -->
                <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">Home Page</div>
                <!-- Profile Info -->
                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    <div class=\"table-responsive mb-md-7\">

                    </div>
                </div>
                <!-- Order Page -->
                <div class=\"tab-pane fade\" id=\"nav-order\" role=\"tabpanel\" aria-labelledby=\"nav-order-tab\">Order Page</div>
                <!-- Order Track -->
                <div class=\"tab-pane fade\" id=\"nav-order-track\" role=\"tabpanel\" aria-labelledby=\"nav-order-track-tab\">Order Track</div>
            </div>
        </div>
        <div class=\"col-md-1\"></div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"logoutModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Logout</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to sign out?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Yes, Logout</button></a>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 82,  116 => 33,  111 => 32,  105 => 28,  99 => 24,  97 => 23,  91 => 22,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/layout/layout.html.twig' %}

{% block body %}
    <div class=\"row mt-5\">
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-2\">
            <div style=\"max-width: 340px;\">
                <div class=\"card border-0 hover-change-image\">
                    <div class=\"position-relative overflow-hidden\">
                        <img class=\"card-img\" src=\"{{ asset('frontend/images/our-team-01.jpg') }}\" alt=\"our-team-01\">
                        <ul class=\"list-inline text-center card-img-overlay top-auto mb-0 py-2 bg-border-color hover-image hover-bottom-to-top\">
                            <li class=\"list-inline-item mr-6\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li class=\"list-inline-item mr-6\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-facebook\"></i></a></li>
                            <li class=\"list-inline-item mr-6\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-instagram\"></i></a></li>
                            <li class=\"list-inline-item\"><a href=\"#\" class=\"fs-18\"><i class=\"fab fa-youtube\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"card-body px-0 text-center\">
                        <div class=\"spinner-grow text-success\" role=\"status\">
                            <span class=\"sr-only\">Active</span>
                        </div>
                        <h4 class=\"fs-20\">{{ app.user.name }} {{ app.user.surname }}</h4>
                        {% if app.user.status == 0 %}
                            <p class=\"card-text\">
                                <span class=\"badge badge-danger\">Passive</span>
                            </p>
                        {% else %}
                            <p class=\"card-text\">
                                <span class=\"badge badge-success\">Active</span>
                            </p>
                        {% endif %}
                        <a href=\"{{ path('create_ticket') }}\" class=\"btn btn-success btn-sm card-link\">Create Ticket</a>
                        <a href=\"{{ path('user_ticket_list') }}\" class=\"btn btn-secondary btn-sm card-link mt-2\">My Ticket List</a>
                        <a data-toggle=\"modal\" data-target=\"#logoutModal\" class=\"btn btn-danger btn-sm card-link\">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <nav>
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">

                </div>


            </nav>
            <div class=\"tab-content\" id=\"nav-tabContent\">
                <!-- Home Page -->
                <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">Home Page</div>
                <!-- Profile Info -->
                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    <div class=\"table-responsive mb-md-7\">

                    </div>
                </div>
                <!-- Order Page -->
                <div class=\"tab-pane fade\" id=\"nav-order\" role=\"tabpanel\" aria-labelledby=\"nav-order-tab\">Order Page</div>
                <!-- Order Track -->
                <div class=\"tab-pane fade\" id=\"nav-order-track\" role=\"tabpanel\" aria-labelledby=\"nav-order-track-tab\">Order Track</div>
            </div>
        </div>
        <div class=\"col-md-1\"></div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"logoutModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Logout</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to sign out?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <a href=\"{{ path('app_logout') }}\"><button type=\"button\" class=\"btn btn-primary\">Yes, Logout</button></a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "frontend/profile/index.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\profile\\index.html.twig");
    }
}
