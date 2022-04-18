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

/* frontend/layout/header.html.twig */
class __TwigTemplate_4d2183f57daa92260985d929082749e44819650b7346f9b826de279e686d046b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/header.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Glowing Shop Html Template\">
    <meta name=\"author\" content=\"\">
    <meta name=\"generator\" content=\"Jekyll\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        echo twig_include($this->env, $context, "frontend/layout/css.html.twig");
        echo "

    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@\">
    <meta name=\"twitter:creator\" content=\"@\">
    <meta name=\"twitter:title\" content=\"Home 02\">
    <meta name=\"twitter:description\" content=\"Glowing Shop Html Template\">
    <meta name=\"twitter:image\" content=\"images/logo_01.png\">

    <meta property=\"og:url\" content=\"home-02.html\">
    <meta property=\"og:title\" content=\"Home 02\">
    <meta property=\"og:description\" content=\"Glowing Shop Html Template\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"images/logo_01.png\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"630\">
</head>
<body>
<header class=\"main-header navbar-light header-sticky header-sticky-smart\">
    <div class=\"topbar d-none d-xl-block\" style=\"background-color:#EDF1F0;\">
    </div>
    <div class=\"sticky-area bg-white\">
        <div class=\"container container-xl\">
            <nav class=\"navbar navbar-expand-xl px-0 d-block\">
                <div class=\"d-none d-xl-block\">
                    <div class=\"d-flex align-items-center flex-nowrap\">
                        <div class=\"w-50 d-flex align-items-center\">
                        </div>
                        <div class=\"mx-auto flex-shrink-0 position-static\">
                            <div class=\"d-flex mt-3 mt-xl-0 align-items-center w-100 justify-content-center\">
                                <a class=\"navbar-brand mx-4 mx-xxl-10 d-none d-xl-inline-block\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend");
        echo "\">
                                    <h2>Ticket</h2>
                                </a>
                            </div>
                        </div>
                        <div class=\"w-50 d-flex align-items-center justify-content-between\">
                        </div>
                    </div>
                </div>
                <div class=\"d-flex align-items-center d-xl-none\">
                    <button class=\"navbar-toggler border-0 px-0 canvas-toggle\" type=\"button\" data-canvas=\"true\" data-canvas-options='{\"width\":\"250px\",\"container\":\".sidenav\"}'>
                        <span class=\"fs-24 toggle-icon\"></span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ticket";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 9,  92 => 41,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Glowing Shop Html Template\">
    <meta name=\"author\" content=\"\">
    <meta name=\"generator\" content=\"Jekyll\">
    <title>{% block title %}Ticket{% endblock %}</title>
    {{ include('frontend/layout/css.html.twig') }}

    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@\">
    <meta name=\"twitter:creator\" content=\"@\">
    <meta name=\"twitter:title\" content=\"Home 02\">
    <meta name=\"twitter:description\" content=\"Glowing Shop Html Template\">
    <meta name=\"twitter:image\" content=\"images/logo_01.png\">

    <meta property=\"og:url\" content=\"home-02.html\">
    <meta property=\"og:title\" content=\"Home 02\">
    <meta property=\"og:description\" content=\"Glowing Shop Html Template\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"images/logo_01.png\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"630\">
</head>
<body>
<header class=\"main-header navbar-light header-sticky header-sticky-smart\">
    <div class=\"topbar d-none d-xl-block\" style=\"background-color:#EDF1F0;\">
    </div>
    <div class=\"sticky-area bg-white\">
        <div class=\"container container-xl\">
            <nav class=\"navbar navbar-expand-xl px-0 d-block\">
                <div class=\"d-none d-xl-block\">
                    <div class=\"d-flex align-items-center flex-nowrap\">
                        <div class=\"w-50 d-flex align-items-center\">
                        </div>
                        <div class=\"mx-auto flex-shrink-0 position-static\">
                            <div class=\"d-flex mt-3 mt-xl-0 align-items-center w-100 justify-content-center\">
                                <a class=\"navbar-brand mx-4 mx-xxl-10 d-none d-xl-inline-block\" href=\"{{ path('app_frontend') }}\">
                                    <h2>Ticket</h2>
                                </a>
                            </div>
                        </div>
                        <div class=\"w-50 d-flex align-items-center justify-content-between\">
                        </div>
                    </div>
                </div>
                <div class=\"d-flex align-items-center d-xl-none\">
                    <button class=\"navbar-toggler border-0 px-0 canvas-toggle\" type=\"button\" data-canvas=\"true\" data-canvas-options='{\"width\":\"250px\",\"container\":\".sidenav\"}'>
                        <span class=\"fs-24 toggle-icon\"></span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>", "frontend/layout/header.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\layout\\header.html.twig");
    }
}
