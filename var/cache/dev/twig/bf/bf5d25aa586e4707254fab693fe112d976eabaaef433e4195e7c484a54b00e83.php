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

/* backend/menu/ticket/editticket.html.twig */
class __TwigTemplate_7548abd1751e24122f86d2ce66ee8e6bc67e9350dd1a68ab140bd848cef9303f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/menu/ticket/editticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/menu/ticket/editticket.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout/layout.html.twig", "backend/menu/ticket/editticket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper container-xxl p-0\">
            <div class=\"content-body\">
                <!-- Bootstrap Validation -->
                <div class=\"col-md-12 col-12\">
                    <div class=\"card\">
                        <div class=\"user-avatar-section\">
                            <div class=\"d-flex align-items-center flex-column\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title\">Create Ticket</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                            <div class=\"mb-1\">
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "ticket_content", [], "any", false, false, false, 22), 'label');
        echo "<br>
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "ticket_content", [], "any", false, false, false, 23), 'widget');
        echo "
                            </div>

                            <div class=\"mb-1\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "ticket_priority", [], "any", false, false, false, 27), 'label');
        echo "<br>
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "ticket_priority", [], "any", false, false, false, 28), 'widget');
        echo "
                            </div>

                            <div class=\"mb-1\">

                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), 'label');
        echo "<br>
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), 'widget');
        echo "
                            </div>

                            <div class=\"mb-1\">

                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "ticketResponse", [], "any", false, false, false, 39), 'label');
        echo "<br>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "ticketResponse", [], "any", false, false, false, 40), 'widget');
        echo "
                            </div>




                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
                            <!--</form>-->
                        </div>
                    </div>
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
        return "backend/menu/ticket/editticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  131 => 40,  127 => 39,  119 => 34,  115 => 33,  107 => 28,  103 => 27,  96 => 23,  92 => 22,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout/layout.html.twig' %}
{% block body %}

    <div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper container-xxl p-0\">
            <div class=\"content-body\">
                <!-- Bootstrap Validation -->
                <div class=\"col-md-12 col-12\">
                    <div class=\"card\">
                        <div class=\"user-avatar-section\">
                            <div class=\"d-flex align-items-center flex-column\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title\">Create Ticket</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            {{ form_start(form) }}
                            <div class=\"mb-1\">
                                {{ form_label(form.ticket_content) }}<br>
                                {{ form_widget(form.ticket_content) }}
                            </div>

                            <div class=\"mb-1\">
                                {{ form_label(form.ticket_priority) }}<br>
                                {{ form_widget(form.ticket_priority) }}
                            </div>

                            <div class=\"mb-1\">

                                {{ form_label(form.status) }}<br>
                                {{ form_widget(form.status) }}
                            </div>

                            <div class=\"mb-1\">

                                {{ form_label(form.ticketResponse) }}<br>
                                {{ form_widget(form.ticketResponse) }}
                            </div>




                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                            {{ form_end(form) }}
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "backend/menu/ticket/editticket.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\menu\\ticket\\editticket.html.twig");
    }
}
