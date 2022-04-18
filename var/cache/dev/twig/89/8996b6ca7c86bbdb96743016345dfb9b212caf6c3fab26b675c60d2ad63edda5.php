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

/* backend/layout/css.html.twig */
class __TwigTemplate_157110848f0d9be629ec156783cdf660a8391fa9ef98752d196f15f23e3e98fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/css.html.twig"));

        // line 1
        echo "<link rel=\"apple-touch-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/ico/apple-icon-120.png"), "html", null, true);
        echo "\">
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/ico/favicon.ico"), "html", null, true);
        echo "\">
";
        // line 4
        echo "
<!-- BEGIN: Vendor CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/vendors.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/charts/apexcharts.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/extensions/toastr.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/forms/select/select2.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/animate/animate.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/extensions/sweetalert2.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/extensions/swiper.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/charts/apexcharts.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/file-uploaders/dropzone.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/css/extensions/nouislider.min.css"), "html", null, true);
        echo "\">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/bootstrap-extended.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/colors.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/components.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/themes/dark-layout.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/themes/bordered-layout.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/themes/semi-dark-layout.min.css"), "html", null, true);
        echo "\">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/pages/dashboard-ecommerce.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/charts/chart-apex.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/extensions/ext-component-toastr.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/forms/form-validation.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/pages/authentication.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/pages/app-ecommerce-details.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/forms/form-number-input.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/charts/chart-apex.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/forms/form-file-uploader.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/plugins/extensions/ext-component-sliders.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/css/pages/app-ecommerce.min.css"), "html", null, true);
        echo "\">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/assets/css/style.css"), "html", null, true);
        echo "\">
<!-- END: Custom CSS-->



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend/layout/css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 52,  206 => 48,  202 => 47,  198 => 46,  194 => 45,  190 => 44,  186 => 43,  182 => 42,  178 => 41,  174 => 40,  170 => 39,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  147 => 31,  143 => 30,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"apple-touch-icon\" href=\"{{ asset('/backend/app-assets/images/ico/apple-icon-120.png') }}\">
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('/backend/app-assets/images/ico/favicon.ico') }}\">
{#<link href=\"../../../../../css2.css?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\" rel=\"stylesheet\">#}

<!-- BEGIN: Vendor CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/vendors.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/charts/apexcharts.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/extensions/toastr.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/forms/select/select2.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/animate/animate.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/extensions/sweetalert2.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/extensions/swiper.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/charts/apexcharts.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/file-uploaders/dropzone.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/vendors/css/extensions/nouislider.min.css') }}\">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/bootstrap.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/bootstrap-extended.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/colors.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/components.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/themes/dark-layout.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/themes/bordered-layout.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/themes/semi-dark-layout.min.css') }}\">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/pages/dashboard-ecommerce.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/charts/chart-apex.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/extensions/ext-component-toastr.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/forms/form-validation.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/pages/authentication.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/pages/app-ecommerce-details.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/forms/form-number-input.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/charts/chart-apex.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/forms/form-file-uploader.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/plugins/extensions/ext-component-sliders.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/app-assets/css/pages/app-ecommerce.min.css') }}\">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/backend/assets/css/style.css') }}\">
<!-- END: Custom CSS-->



", "backend/layout/css.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\layout\\css.html.twig");
    }
}
