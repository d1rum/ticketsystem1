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

/* frontend/layout/css.html.twig */
class __TwigTemplate_ef1268ad57eb97cf3c93d104383e63bf243a3775a3292fa5c8a8dc28999d727b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/css.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css2.css?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/fontawesome-pro-5/css/all.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/slick/slick.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/magnific-popup/magnific-popup.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/mapbox-gl/mapbox-gl.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/fonts/font-phosphor/css/phosphor.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/fonts/tuesday-night/stylesheet.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/css/themes.css"), "html", null, true);
        echo "\">

<link rel=\"icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/favicon.jpg"), "html", null, true);
        echo "\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/layout/css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  90 => 14,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('frontend/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js') }}\"></script>
<link href=\"{{ asset('frontend/css2.css?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/fontawesome-pro-5/css/all.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/bootstrap-select/css/bootstrap-select.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/slick/slick.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/magnific-popup/magnific-popup.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/jquery-ui/jquery-ui.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/animate.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/mapbox-gl/mapbox-gl.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/fonts/font-phosphor/css/phosphor.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('frontend/vendors/fonts/tuesday-night/stylesheet.min.css') }}\">

<link rel=\"stylesheet\" href=\"{{ asset('frontend/css/themes.css') }}\">

<link rel=\"icon\" href=\"{{ asset('frontend/images/favicon.jpg') }}\">", "frontend/layout/css.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\layout\\css.html.twig");
    }
}
