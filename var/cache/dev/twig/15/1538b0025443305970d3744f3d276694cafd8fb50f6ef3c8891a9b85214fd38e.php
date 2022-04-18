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

/* frontend/ticket/createticket.html.twig */
class __TwigTemplate_4a28d3b76200dd835731e3843457ee3ab83c0fec363e11269fa8b0eab45ccb81 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/ticket/createticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/ticket/createticket.html.twig"));

        $this->parent = $this->loadTemplate("frontend/layout/layout.html.twig", "frontend/ticket/createticket.html.twig", 1);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), 'label');
        echo "<br>
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), 'widget');
        echo "
                            </div>
                            <input type=\"hidden\" name=\"status\" value=\"0\">
                            <div class=\"mb-1\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "ticket_content", [], "any", false, false, false, 27), 'label');
        echo "<br>
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "ticket_content", [], "any", false, false, false, 28), 'widget');
        echo "
                            </div>
                            <div class=\"mb-1\">

                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "ticket_priority", [], "any", false, false, false, 32), 'label');
        echo "<br>
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "ticket_priority", [], "any", false, false, false, 33), 'widget');
        echo "
                            </div>

                            <input type=\"hidden\" name=\"user\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
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
        return "frontend/ticket/createticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  124 => 36,  118 => 33,  114 => 32,  107 => 28,  103 => 27,  96 => 23,  92 => 22,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/layout/layout.html.twig' %}
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
                                {{ form_label(form.category) }}<br>
                                {{ form_widget(form.category) }}
                            </div>
                            <input type=\"hidden\" name=\"status\" value=\"0\">
                            <div class=\"mb-1\">
                                {{ form_label(form.ticket_content) }}<br>
                                {{ form_widget(form.ticket_content) }}
                            </div>
                            <div class=\"mb-1\">

                                {{ form_label(form.ticket_priority) }}<br>
                                {{ form_widget(form.ticket_priority) }}
                            </div>

                            <input type=\"hidden\" name=\"user\" value=\"{{ user }}\">
                            <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            {{ form_end(form) }}
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "frontend/ticket/createticket.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\ticket\\createticket.html.twig");
    }
}
