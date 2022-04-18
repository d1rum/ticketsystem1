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

/* backend/layout/sidebar.html.twig */
class __TwigTemplate_9a4ea077d047b9b7184ef0b0d28e8287516a50e33eeebbfb9f953fbd6bbede65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/sidebar.html.twig"));

        // line 1
        echo "<!-- BEGIN: Main Menu-->
<div class=\"main-menu menu-fixed menu-light menu-accordion menu-shadow\" data-scroll-to-active=\"true\">
    <div class=\"navbar-header\">
        <ul class=\"nav navbar-nav flex-row\">
            <li class=\"nav-item me-auto\"><a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backend");
        echo "\"><span class=\"brand-logo\">
                <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                  <defs>
                    <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                      <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </lineargradient>
                    <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                      <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </lineargradient>
                  </defs>
                  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                      <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                        <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill:currentColor\"></path>
                        <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"url(#linearGradient-1)\" opacity=\"0.2\"></path>
                        <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                        <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                        <polygon id=\"Path-3\" fill=\"url(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                      </g>
                    </g>
                  </g>
                </svg></span>
                    <h2 class=\"brand-text\">Ticket System</h2></a></li>
            <li class=\"nav-item nav-toggle\"><a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\"><i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i><i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary\" data-feather=\"disc\" data-ticon=\"disc\"></i></a></li>
        </ul>
    </div>
    <div class=\"shadow-bottom\"></div>
        <div class=\"main-menu-content\">
            <ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
                <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">Dashboards</span></a>
                    <ul class=\"menu-content\">
                        <li class=\"active\"><a class=\"d-flex align-items-center\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backend");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Home</span></a>
                        </li>
                    </ul>
                </li>
                <li class=\" navigation-header\"><span data-i18n=\"Apps &amp; Pages\">Menu</span><i data-feather=\"more-horizontal\"></i>
                </li>

                <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i data-feather=\"grid\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Categories\">Menu</span></a>
                    <ul class=\"menu-content\">
                        <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_list");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Category\">Category</span></a>
                        </li>
                        <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_list");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Category\">Ticket</span></a>
                        </li>
                        <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Category\">Log Out</span></a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>

</div>
<!-- END: Main Menu-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend/layout/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 51,  102 => 49,  97 => 47,  85 => 38,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Main Menu-->
<div class=\"main-menu menu-fixed menu-light menu-accordion menu-shadow\" data-scroll-to-active=\"true\">
    <div class=\"navbar-header\">
        <ul class=\"nav navbar-nav flex-row\">
            <li class=\"nav-item me-auto\"><a class=\"navbar-brand\" href=\"{{ path('admin_backend') }}\"><span class=\"brand-logo\">
                <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                  <defs>
                    <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                      <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </lineargradient>
                    <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                      <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                      <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                    </lineargradient>
                  </defs>
                  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                      <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                        <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill:currentColor\"></path>
                        <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"url(#linearGradient-1)\" opacity=\"0.2\"></path>
                        <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                        <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                        <polygon id=\"Path-3\" fill=\"url(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                      </g>
                    </g>
                  </g>
                </svg></span>
                    <h2 class=\"brand-text\">Ticket System</h2></a></li>
            <li class=\"nav-item nav-toggle\"><a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\"><i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i><i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary\" data-feather=\"disc\" data-ticon=\"disc\"></i></a></li>
        </ul>
    </div>
    <div class=\"shadow-bottom\"></div>
        <div class=\"main-menu-content\">
            <ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
                <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">Dashboards</span></a>
                    <ul class=\"menu-content\">
                        <li class=\"active\"><a class=\"d-flex align-items-center\" href=\"{{ path('admin_backend') }}\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Home</span></a>
                        </li>
                    </ul>
                </li>
                <li class=\" navigation-header\"><span data-i18n=\"Apps &amp; Pages\">Menu</span><i data-feather=\"more-horizontal\"></i>
                </li>

                <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i data-feather=\"grid\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Categories\">Menu</span></a>
                    <ul class=\"menu-content\">
                        <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"{{ path('admin_category_list') }}\"><i data-feather=\"circle\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Category\">Category</span></a>
                        </li>
                        <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"{{ path('ticket_list') }}\"><i data-feather=\"circle\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Category\">Ticket</span></a>
                        </li>
                        <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"{{ path('admin_logout') }}\"><i data-feather=\"circle\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Category\">Log Out</span></a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>

</div>
<!-- END: Main Menu-->", "backend/layout/sidebar.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\layout\\sidebar.html.twig");
    }
}
