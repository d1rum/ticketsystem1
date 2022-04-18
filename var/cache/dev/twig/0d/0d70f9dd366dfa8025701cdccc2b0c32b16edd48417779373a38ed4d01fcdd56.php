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

/* frontend/auth/login.html.twig */
class __TwigTemplate_1d9d21ffc9f2c28571459720dcf23665ce77eac13fe48b5d5f992e45ea455d1a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/auth/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/auth/login.html.twig"));

        $this->parent = $this->loadTemplate("frontend/layout/layout.html.twig", "frontend/auth/login.html.twig", 1);
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
        echo "
    <div class=\"modal-body px-9 pb-8\">
        <div class=\"tab-content\" id=\"nav-tabContent\">
            <div class=\"tab-pane fade active show\" id=\"nav-log-in\" role=\"tabpanel\" aria-labelledby=\"nav-log-in-tab\">
                <h4 class=\"fs-34 text-center mb-6\">Log in</h4>
                <p class=\"text-center fs-16 mb-7\">Don’t have an account yet? <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"text-secondary border-bottom text-decoration-none\">Register</a> for free</p>
                <form class=\"login-form-wrapper\" id=\"login-form\" method=\"post\">
                    ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 14
        echo "
                    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                        <div class=\"mb-3\">
                            You are logged in as ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        }
        // line 20
        echo "                    <label for=\"UserName\" class=\"form-label\">Email *</label>
                    <input type=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"UserName\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    <label for=\"password\" class=\"form-label mt-5\">Password *</label>
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control border-0\" autocomplete=\"current-password\" required>
                    <div class=\"d-flex align-items-center justify-content-between mt-5 mb-4\">
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"staySignedIn\">
                            <label class=\"custom-control-label text-body\" for=\"staySignedIn\"> Remember me</label>
                        </div>
                        <a class=\"text-secondary\" href=\"#\">Forgot your password?</a>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                    <button type=\"submit\" value=\"Login\" class=\"btn btn-secondary btn-block bg-hover-primary border-hover-primary\">Log In</button>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  107 => 21,  104 => 20,  96 => 17,  93 => 16,  91 => 15,  88 => 14,  82 => 12,  80 => 11,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/layout/layout.html.twig' %}

{% block body %}

    <div class=\"modal-body px-9 pb-8\">
        <div class=\"tab-content\" id=\"nav-tabContent\">
            <div class=\"tab-pane fade active show\" id=\"nav-log-in\" role=\"tabpanel\" aria-labelledby=\"nav-log-in-tab\">
                <h4 class=\"fs-34 text-center mb-6\">Log in</h4>
                <p class=\"text-center fs-16 mb-7\">Don’t have an account yet? <a href=\"{{ path('app_register') }}\" class=\"text-secondary border-bottom text-decoration-none\">Register</a> for free</p>
                <form class=\"login-form-wrapper\" id=\"login-form\" method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-3\">
                            You are logged in as {{ app.user.name }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% endif %}
                    <label for=\"UserName\" class=\"form-label\">Email *</label>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"UserName\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    <label for=\"password\" class=\"form-label mt-5\">Password *</label>
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control border-0\" autocomplete=\"current-password\" required>
                    <div class=\"d-flex align-items-center justify-content-between mt-5 mb-4\">
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"staySignedIn\">
                            <label class=\"custom-control-label text-body\" for=\"staySignedIn\"> Remember me</label>
                        </div>
                        <a class=\"text-secondary\" href=\"#\">Forgot your password?</a>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >
                    <button type=\"submit\" value=\"Login\" class=\"btn btn-secondary btn-block bg-hover-primary border-hover-primary\">Log In</button>
                </form>
            </div>
        </div>
    </div>

{% endblock %}", "frontend/auth/login.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\auth\\login.html.twig");
    }
}
