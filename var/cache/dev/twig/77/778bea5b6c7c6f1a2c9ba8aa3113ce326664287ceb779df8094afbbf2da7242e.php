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

/* backend/auth/login.html.twig */
class __TwigTemplate_eec2be254e81193b2a2e17e53d404cb4983c49b10808df0f154cf84812bb675c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'login' => [$this, 'block_login'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/auth/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/auth/login.html.twig"));

        // line 1
        $this->displayBlock('login', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 2
        echo "    <!DOCTYPE html>
    <!--
    Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PixInvent
    Website: http://www.pixinvent.com/
    Contact: hello@pixinvent.com
    Follow: www.twitter.com/pixinvents
    Like: www.facebook.com/pixinvents
    Purchase: https://1.envato.market/vuexy_admin
    Renew Support: https://1.envato.market/vuexy_admin
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

    -->
    <html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
        <meta name=\"description\" content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
        <meta name=\"keywords\" content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
        <meta name=\"author\" content=\"PIXINVENT\">
        <title>";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 25
        echo twig_include($this->env, $context, "backend/layout/css.html.twig");
        echo "

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class=\"vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"blank-page\">
    <!-- BEGIN: Content-->
    <div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper\">
            <div class=\"content-header row\">
            </div>
            <div class=\"content-body\">
                <div class=\"auth-wrapper auth-cover\">
                    <div class=\"auth-inner row m-0\">
                        <!-- Brand logo--><a class=\"brand-logo\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backend");
        echo "\">
                            <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"28\">
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
                                            <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill: currentColor\"></path>
                                            <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"url(#linearGradient-1)\" opacity=\"0.2\"></path>
                                            <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                                            <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                                            <polygon id=\"Path-3\" fill=\"url(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class=\"brand-text text-primary ms-1\">Ticket Management System</h2></a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class=\"d-none d-lg-flex col-lg-8 align-items-center p-5\">
                            <div class=\"w-100 d-lg-flex align-items-center justify-content-center px-5\"><img class=\"img-fluid\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/pages/login-v2.svg"), "html", null, true);
        echo "\" alt=\"Login V2\"></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class=\"d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5\">
                            <div class=\"col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto\">
                                <h2 class=\"card-title fw-bold mb-1\">Welcome to TMS! 👋</h2>
                                <p class=\"card-text mb-2\">Please sign-in to your account and start the adventure</p>
                                <form class=\"auth-login-form mt-2\" method=\"POST\">
                                    ";
        // line 79
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 79, $this->source); })())) {
            // line 80
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 80, $this->source); })()), "messageKey", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 80, $this->source); })()), "messageData", [], "any", false, false, false, 80), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 82
        echo "                                    <div class=\"mb-1\">
                                        <label class=\"form-label\" for=\"inputEmail\">Email</label>
                                        <!--<label class=\"form-label\" for=\"login-email\">Email</label>-->
                                        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"john@example.com\" aria-describedby=\"login-email\" autofocus=\"\" tabindex=\"1\"
                                               required>
                                        <!--<input class=\"form-control\" id=\"login-email\" type=\"email\" name=\"login-email\" placeholder=\"john@example.com\" aria-describedby=\"login-email\" autofocus=\"\" tabindex=\"1\">-->
                                    </div>
                                    <div class=\"mb-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <label class=\"form-label\" for=\"inputPassword\">Password</label>
                                            <!--<label class=\"form-label\" for=\"login-password\">Password</label>--><a href=\"#\"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class=\"input-group input-group-merge form-password-toggle\">
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-merge\" autocomplete=\"current-password\" required placeholder=\"············\" aria-describedby=\"login-password\" tabindex=\"2\">
                                            <!--<input class=\"form-control form-control-merge\" id=\"login-password\" type=\"password\" name=\"login-password\" placeholder=\"············\" aria-describedby=\"login-password\" tabindex=\"2\">--><span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"mb-1\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" id=\"remember-me\" type=\"checkbox\" tabindex=\"3\">
                                            <label class=\"form-check-label\" for=\"remember-me\"> Remember Me</label>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                    <button class=\"btn btn-primary w-100\" tabindex=\"4\">Sign in</button>
                                </form>
                                <p class=\"text-center mt-2\"><span>New on our platform?</span><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><span>&nbsp;Create an account</span></a></p>

                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    ";
        // line 120
        echo twig_include($this->env, $context, "backend/layout/script.html.twig");
        echo "
    </body>
    <!-- END: Body-->
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ticket - Management System";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/auth/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  224 => 24,  209 => 120,  194 => 108,  188 => 105,  163 => 82,  157 => 80,  155 => 79,  143 => 70,  112 => 42,  92 => 25,  88 => 24,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block login %}
    <!DOCTYPE html>
    <!--
    Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PixInvent
    Website: http://www.pixinvent.com/
    Contact: hello@pixinvent.com
    Follow: www.twitter.com/pixinvents
    Like: www.facebook.com/pixinvents
    Purchase: https://1.envato.market/vuexy_admin
    Renew Support: https://1.envato.market/vuexy_admin
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

    -->
    <html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
        <meta name=\"description\" content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
        <meta name=\"keywords\" content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
        <meta name=\"author\" content=\"PIXINVENT\">
        <title>{% block title %}Ticket - Management System{% endblock %}</title>
        {{ include('backend/layout/css.html.twig') }}

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class=\"vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"blank-page\">
    <!-- BEGIN: Content-->
    <div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper\">
            <div class=\"content-header row\">
            </div>
            <div class=\"content-body\">
                <div class=\"auth-wrapper auth-cover\">
                    <div class=\"auth-inner row m-0\">
                        <!-- Brand logo--><a class=\"brand-logo\" href=\"{{ path('admin_backend') }}\">
                            <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"28\">
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
                                            <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill: currentColor\"></path>
                                            <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"url(#linearGradient-1)\" opacity=\"0.2\"></path>
                                            <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                                            <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                                            <polygon id=\"Path-3\" fill=\"url(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class=\"brand-text text-primary ms-1\">Ticket Management System</h2></a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class=\"d-none d-lg-flex col-lg-8 align-items-center p-5\">
                            <div class=\"w-100 d-lg-flex align-items-center justify-content-center px-5\"><img class=\"img-fluid\" src=\"{{ asset('/backend/app-assets/images/pages/login-v2.svg') }}\" alt=\"Login V2\"></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class=\"d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5\">
                            <div class=\"col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto\">
                                <h2 class=\"card-title fw-bold mb-1\">Welcome to TMS! 👋</h2>
                                <p class=\"card-text mb-2\">Please sign-in to your account and start the adventure</p>
                                <form class=\"auth-login-form mt-2\" method=\"POST\">
                                    {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData,'security') }}</div>
                                    {% endif %}
                                    <div class=\"mb-1\">
                                        <label class=\"form-label\" for=\"inputEmail\">Email</label>
                                        <!--<label class=\"form-label\" for=\"login-email\">Email</label>-->
                                        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"john@example.com\" aria-describedby=\"login-email\" autofocus=\"\" tabindex=\"1\"
                                               required>
                                        <!--<input class=\"form-control\" id=\"login-email\" type=\"email\" name=\"login-email\" placeholder=\"john@example.com\" aria-describedby=\"login-email\" autofocus=\"\" tabindex=\"1\">-->
                                    </div>
                                    <div class=\"mb-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <label class=\"form-label\" for=\"inputPassword\">Password</label>
                                            <!--<label class=\"form-label\" for=\"login-password\">Password</label>--><a href=\"#\"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class=\"input-group input-group-merge form-password-toggle\">
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-merge\" autocomplete=\"current-password\" required placeholder=\"············\" aria-describedby=\"login-password\" tabindex=\"2\">
                                            <!--<input class=\"form-control form-control-merge\" id=\"login-password\" type=\"password\" name=\"login-password\" placeholder=\"············\" aria-describedby=\"login-password\" tabindex=\"2\">--><span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"mb-1\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" id=\"remember-me\" type=\"checkbox\" tabindex=\"3\">
                                            <label class=\"form-check-label\" for=\"remember-me\"> Remember Me</label>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                    <button class=\"btn btn-primary w-100\" tabindex=\"4\">Sign in</button>
                                </form>
                                <p class=\"text-center mt-2\"><span>New on our platform?</span><a href=\"{{ path('app_register') }}\"><span>&nbsp;Create an account</span></a></p>

                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    {{ include('backend/layout/script.html.twig') }}
    </body>
    <!-- END: Body-->
    </html>
{% endblock %}", "backend/auth/login.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\auth\\login.html.twig");
    }
}
