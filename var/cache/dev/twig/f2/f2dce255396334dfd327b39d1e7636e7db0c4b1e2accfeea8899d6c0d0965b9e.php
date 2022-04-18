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

/* backend/layout/header.html.twig */
class __TwigTemplate_4e03e4f55376bd6a60bf13e5d8f696cad112491eacda1f2860592747525664b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    <meta name=\"description\" content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <meta name=\"csrf-token\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" id=\"csrf-token\">
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        echo twig_include($this->env, $context, "backend/layout/css.html.twig");
        echo "


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"\">

<!-- BEGIN: Header-->
<nav class=\"header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl\">
    <div class=\"navbar-container d-flex content\">
        <div class=\"bookmark-wrapper d-flex align-items-center\">
            <ul class=\"nav navbar-nav d-xl-none\">
                <li class=\"nav-item\"><a class=\"nav-link menu-toggle\" href=\"#\"><i class=\"ficon\" data-feather=\"menu\"></i></a></li>
            </ul>
            <ul class=\"nav navbar-nav bookmark-icons\">
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-email.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Email\"><i class=\"ficon\" data-feather=\"mail\"></i></a></li>
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-chat.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Chat\"><i class=\"ficon\" data-feather=\"message-square\"></i></a></li>
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-calendar.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Calendar\"><i class=\"ficon\" data-feather=\"calendar\"></i></a></li>
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-todo.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Todo\"><i class=\"ficon\" data-feather=\"check-square\"></i></a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link bookmark-star\"><i class=\"ficon text-warning\" data-feather=\"star\"></i></a>
                    <div class=\"bookmark-input search-input\">
                        <div class=\"bookmark-input-icon\"><i data-feather=\"search\"></i></div>
                        <input class=\"form-control input\" type=\"text\" placeholder=\"Bookmark\" tabindex=\"0\" data-search=\"search\">
                        <ul class=\"search-list search-list-bookmark\"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav align-items-center ms-auto\">
            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link nav-link-style\"><i class=\"ficon\" data-feather=\"moon\"></i></a></li>
            <li class=\"nav-item nav-search\"><a class=\"nav-link nav-link-search\"><i class=\"ficon\" data-feather=\"search\"></i></a>
                <div class=\"search-input\">
                    <div class=\"search-input-icon\"><i data-feather=\"search\"></i></div>
                    <input class=\"form-control input\" type=\"text\" placeholder=\"Explore Vuexy...\" tabindex=\"-1\" data-search=\"search\">
                    <div class=\"search-input-close\"><i data-feather=\"x\"></i></div>
                    <ul class=\"search-list search-list-main\"></ul>
                </div>
            </li>
            <li class=\"nav-item dropdown dropdown-cart me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"shopping-cart\"></i><span class=\"badge rounded-pill bg-primary badge-up cart-item-count\">6</span></a>
                <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
                    <li class=\"dropdown-menu-header\">
                        <div class=\"dropdown-header d-flex\">
                            <h4 class=\"notification-title mb-0 me-auto\">My Cart</h4>
                            <div class=\"badge rounded-pill badge-light-primary\">4 Items</div>
                        </div>
                    </li>
                    <li class=\"scrollable-container media-list\">
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/pages/eCommerce/1.png"), "html", null, true);
        echo "\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> Apple watch 5</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$374.90</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/pages/eCommerce/7.png"), "html", null, true);
        echo "\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> Google Home Mini</a></h6><small class=\"cart-item-by\">By Google</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"3\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$129.40</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/pages/eCommerce/2.png"), "html", null, true);
        echo "\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> iPhone 11 Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"2\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$699.00</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/pages/eCommerce/3.png"), "html", null, true);
        echo "\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> iMac Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$4,999.00</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/pages/eCommerce/5.png"), "html", null, true);
        echo "\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> MacBook Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$2,999.00</h5>
                            </div>
                        </div>
                    </li>
                    <li class=\"dropdown-menu-footer\">
                        <div class=\"d-flex justify-content-between mb-1\">
                            <h6 class=\"fw-bolder mb-0\">Total:</h6>
                            <h6 class=\"text-primary fw-bolder mb-0\">\$10,999.00</h6>
                        </div><a class=\"btn btn-primary w-100\" href=\"app-ecommerce-checkout.html\">Checkout</a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"bell\"></i><span class=\"badge rounded-pill bg-danger badge-up\">5</span></a>
                <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
                    <li class=\"dropdown-menu-header\">
                        <div class=\"dropdown-header d-flex\">
                            <h4 class=\"notification-title mb-0 me-auto\">Notifications</h4>
                            <div class=\"badge rounded-pill badge-light-primary\">6 New</div>
                        </div>
                    </li>
                    <li class=\"scrollable-container media-list\"><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/portrait/small/avatar-s-15.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"32\" height=\"32\"></div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Congratulation Sam 🎉</span>winner!</p><small class=\"notification-text\"> Won the monthly best seller badge.</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/portrait/small/avatar-s-3.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" width=\"32\" height=\"32\"></div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">New message</span>&nbsp;received</p><small class=\"notification-text\"> You have 10 unread messages</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-danger\">
                                        <div class=\"avatar-content\">MD</div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Revised Order 👋</span>&nbsp;checkout</p><small class=\"notification-text\"> MD Inc. order updated</small>
                                </div>
                            </div></a>
                        <div class=\"list-item d-flex align-items-center\">
                            <h6 class=\"fw-bolder me-auto mb-0\">System Notifications</h6>
                            <div class=\"form-check form-check-primary form-switch\">
                                <input class=\"form-check-input\" id=\"systemNotification\" type=\"checkbox\" checked=\"\">
                                <label class=\"form-check-label\" for=\"systemNotification\"></label>
                            </div>
                        </div><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-danger\">
                                        <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"x\"></i></div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Server down</span>&nbsp;registered</p><small class=\"notification-text\"> USA Server is down due to high CPU usage</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-success\">
                                        <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"check\"></i></div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Sales report</span>&nbsp;generated</p><small class=\"notification-text\"> Last month sales report generated</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-warning\">
                                        <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"alert-triangle\"></i></div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">High memory</span>&nbsp;usage</p><small class=\"notification-text\"> BLR Server using high memory</small>
                                </div>
                            </div></a>
                    </li>
                    <li class=\"dropdown-menu-footer\"><a class=\"btn btn-primary w-100\" href=\"#\">Read all notifications</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown dropdown-user\">
";
        // line 237
        echo "                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-user\">
                    <a class=\"dropdown-item\" href=\"page-profile.html\"><i class=\"me-50\" data-feather=\"user\"></i> Profile</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"page-account-settings-account.html\"><i class=\"me-50\" data-feather=\"settings\"></i> Settings<a>
                            <a class=\"dropdown-item\" href=\"page-faq.html\"><i class=\"me-50\" data-feather=\"help-circle\"></i> FAQ</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"me-50\" data-feather=\"power\"></i> Logout</a>
                </div>

            </li>
        </ul>
    </div>
</nav>

<ul class=\"main-search-list-defaultlist d-none\">
    <li class=\"d-flex align-items-center\"><a href=\"#\">
            <h6 class=\"section-label mt-75 mb-0\">Files</h6></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/icons/xls.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Two new item submitted</p><small class=\"text-muted\">Marketing Manager</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;17kb</small></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/icons/jpg.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">52 JPG file Generated</p><small class=\"text-muted\">FontEnd Developer</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;11kb</small></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/icons/pdf.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">25 PDF File Uploaded</p><small class=\"text-muted\">Digital Marketing Manager</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;150kb</small></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/icons/doc.png"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Anna_Strong.doc</p><small class=\"text-muted\">Web Designer</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;256kb</small></a></li>
    <li class=\"d-flex align-items-center\"><a href=\"#\">
            <h6 class=\"section-label mt-75 mb-0\">Members</h6></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/portrait/small/avatar-s-8.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">John Doe</p><small class=\"text-muted\">UI designer</small>
                </div>
            </div></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/portrait/small/avatar-s-1.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Michal Clark</p><small class=\"text-muted\">FontEnd Developer</small>
                </div>
            </div></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/portrait/small/avatar-s-14.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Milena Gibson</p><small class=\"text-muted\">Digital Marketing Manager</small>
                </div>
            </div></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/images/portrait/small/avatar-s-6.jpg"), "html", null, true);
        echo "\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Anna Strong</p><small class=\"text-muted\">Web Designer</small>
                </div>
            </div></a></li>
</ul>
<ul class=\"main-search-list-defaultlist-other-list d-none\">
    <li class=\"auto-suggestion justify-content-between\"><a class=\"d-flex align-items-center justify-content-between w-100 py-50\">
            <div class=\"d-flex justify-content-start\"><span class=\"me-75\" data-feather=\"alert-circle\"></span><span>No results found.</span></div></a></li>
</ul>
<!-- END: Header-->

";
        // line 318
        echo twig_include($this->env, $context, "backend/layout/sidebar.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ticket Management System";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 12,  397 => 318,  382 => 306,  372 => 299,  362 => 292,  352 => 285,  340 => 276,  330 => 269,  320 => 262,  310 => 255,  290 => 237,  229 => 157,  218 => 149,  182 => 116,  166 => 103,  150 => 90,  134 => 77,  118 => 64,  64 => 13,  60 => 12,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">
    <meta name=\"description\" content=\"Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <meta name=\"csrf-token\" content=\"{{ csrf_token('authenticate') }}\" id=\"csrf-token\">
    <title>{% block title %}Ticket Management System{% endblock %}</title>
    {{ include('backend/layout/css.html.twig') }}


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"\">

<!-- BEGIN: Header-->
<nav class=\"header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl\">
    <div class=\"navbar-container d-flex content\">
        <div class=\"bookmark-wrapper d-flex align-items-center\">
            <ul class=\"nav navbar-nav d-xl-none\">
                <li class=\"nav-item\"><a class=\"nav-link menu-toggle\" href=\"#\"><i class=\"ficon\" data-feather=\"menu\"></i></a></li>
            </ul>
            <ul class=\"nav navbar-nav bookmark-icons\">
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-email.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Email\"><i class=\"ficon\" data-feather=\"mail\"></i></a></li>
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-chat.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Chat\"><i class=\"ficon\" data-feather=\"message-square\"></i></a></li>
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-calendar.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Calendar\"><i class=\"ficon\" data-feather=\"calendar\"></i></a></li>
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-todo.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Todo\"><i class=\"ficon\" data-feather=\"check-square\"></i></a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link bookmark-star\"><i class=\"ficon text-warning\" data-feather=\"star\"></i></a>
                    <div class=\"bookmark-input search-input\">
                        <div class=\"bookmark-input-icon\"><i data-feather=\"search\"></i></div>
                        <input class=\"form-control input\" type=\"text\" placeholder=\"Bookmark\" tabindex=\"0\" data-search=\"search\">
                        <ul class=\"search-list search-list-bookmark\"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav align-items-center ms-auto\">
            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link nav-link-style\"><i class=\"ficon\" data-feather=\"moon\"></i></a></li>
            <li class=\"nav-item nav-search\"><a class=\"nav-link nav-link-search\"><i class=\"ficon\" data-feather=\"search\"></i></a>
                <div class=\"search-input\">
                    <div class=\"search-input-icon\"><i data-feather=\"search\"></i></div>
                    <input class=\"form-control input\" type=\"text\" placeholder=\"Explore Vuexy...\" tabindex=\"-1\" data-search=\"search\">
                    <div class=\"search-input-close\"><i data-feather=\"x\"></i></div>
                    <ul class=\"search-list search-list-main\"></ul>
                </div>
            </li>
            <li class=\"nav-item dropdown dropdown-cart me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"shopping-cart\"></i><span class=\"badge rounded-pill bg-primary badge-up cart-item-count\">6</span></a>
                <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
                    <li class=\"dropdown-menu-header\">
                        <div class=\"dropdown-header d-flex\">
                            <h4 class=\"notification-title mb-0 me-auto\">My Cart</h4>
                            <div class=\"badge rounded-pill badge-light-primary\">4 Items</div>
                        </div>
                    </li>
                    <li class=\"scrollable-container media-list\">
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"{{ asset('/backend/app-assets/images/pages/eCommerce/1.png') }}\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> Apple watch 5</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$374.90</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"{{ asset('/backend/app-assets/images/pages/eCommerce/7.png') }}\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> Google Home Mini</a></h6><small class=\"cart-item-by\">By Google</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"3\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$129.40</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"{{ asset('/backend/app-assets/images/pages/eCommerce/2.png') }}\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> iPhone 11 Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"2\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$699.00</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"{{ asset('/backend/app-assets/images/pages/eCommerce/3.png') }}\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> iMac Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$4,999.00</h5>
                            </div>
                        </div>
                        <div class=\"list-item align-items-center\"><img class=\"d-block rounded me-1\" src=\"{{ asset('/backend/app-assets/images/pages/eCommerce/5.png') }}\" alt=\"donuts\" width=\"62\">
                            <div class=\"list-item-body flex-grow-1\"><i class=\"ficon cart-item-remove\" data-feather=\"x\"></i>
                                <div class=\"media-heading\">
                                    <h6 class=\"cart-item-title\"><a class=\"text-body\" href=\"app-ecommerce-details.html\"> MacBook Pro</a></h6><small class=\"cart-item-by\">By Apple</small>
                                </div>
                                <div class=\"cart-item-qty\">
                                    <div class=\"input-group\">
                                        <input class=\"touchspin-cart\" type=\"number\" value=\"1\">
                                    </div>
                                </div>
                                <h5 class=\"cart-item-price\">\$2,999.00</h5>
                            </div>
                        </div>
                    </li>
                    <li class=\"dropdown-menu-footer\">
                        <div class=\"d-flex justify-content-between mb-1\">
                            <h6 class=\"fw-bolder mb-0\">Total:</h6>
                            <h6 class=\"text-primary fw-bolder mb-0\">\$10,999.00</h6>
                        </div><a class=\"btn btn-primary w-100\" href=\"app-ecommerce-checkout.html\">Checkout</a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"bell\"></i><span class=\"badge rounded-pill bg-danger badge-up\">5</span></a>
                <ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">
                    <li class=\"dropdown-menu-header\">
                        <div class=\"dropdown-header d-flex\">
                            <h4 class=\"notification-title mb-0 me-auto\">Notifications</h4>
                            <div class=\"badge rounded-pill badge-light-primary\">6 New</div>
                        </div>
                    </li>
                    <li class=\"scrollable-container media-list\"><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar\"><img src=\"{{ asset('/backend/app-assets/images/portrait/small/avatar-s-15.jpg') }}\" alt=\"avatar\" width=\"32\" height=\"32\"></div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Congratulation Sam 🎉</span>winner!</p><small class=\"notification-text\"> Won the monthly best seller badge.</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar\"><img src=\"{{ asset('/backend/app-assets/images/portrait/small/avatar-s-3.jpg') }}\" alt=\"avatar\" width=\"32\" height=\"32\"></div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">New message</span>&nbsp;received</p><small class=\"notification-text\"> You have 10 unread messages</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-danger\">
                                        <div class=\"avatar-content\">MD</div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Revised Order 👋</span>&nbsp;checkout</p><small class=\"notification-text\"> MD Inc. order updated</small>
                                </div>
                            </div></a>
                        <div class=\"list-item d-flex align-items-center\">
                            <h6 class=\"fw-bolder me-auto mb-0\">System Notifications</h6>
                            <div class=\"form-check form-check-primary form-switch\">
                                <input class=\"form-check-input\" id=\"systemNotification\" type=\"checkbox\" checked=\"\">
                                <label class=\"form-check-label\" for=\"systemNotification\"></label>
                            </div>
                        </div><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-danger\">
                                        <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"x\"></i></div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Server down</span>&nbsp;registered</p><small class=\"notification-text\"> USA Server is down due to high CPU usage</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-success\">
                                        <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"check\"></i></div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">Sales report</span>&nbsp;generated</p><small class=\"notification-text\"> Last month sales report generated</small>
                                </div>
                            </div></a><a class=\"d-flex\" href=\"#\">
                            <div class=\"list-item d-flex align-items-start\">
                                <div class=\"me-1\">
                                    <div class=\"avatar bg-light-warning\">
                                        <div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"alert-triangle\"></i></div>
                                    </div>
                                </div>
                                <div class=\"list-item-body flex-grow-1\">
                                    <p class=\"media-heading\"><span class=\"fw-bolder\">High memory</span>&nbsp;usage</p><small class=\"notification-text\"> BLR Server using high memory</small>
                                </div>
                            </div></a>
                    </li>
                    <li class=\"dropdown-menu-footer\"><a class=\"btn btn-primary w-100\" href=\"#\">Read all notifications</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown dropdown-user\">
{#                <a class=\"nav-link dropdown-toggle dropdown-user-link\" id=\"dropdown-user\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                    <div class=\"user-nav d-sm-flex d-none\">#}
{#                        <span class=\"user-name fw-bolder\">#}
{#                            {% if app.user %}#}
{#                                {{ app.user.fullname }}#}
{#                            {% endif %}#}
{#                        </span><span class=\"user-status\">#}
{#                            {% if app.user %}#}
{#                                {{ app.user.role.role }}#}
{#                            {% endif %}#}
{#                        </span></div><span class=\"avatar\">#}
{#                        {% if app.user %}#}
{#                            {% if app.user.avatar %}#}
{#                            <img class=\"round\" src=\"{{ app.user.avatar }}\" alt=\"avatar\" height=\"40\" width=\"40\">#}
{#                                {% else %}#}
{#                                <img class=\"round\" src=\"{{ asset('/backend/images/avatar/logo.png') }}\" alt=\"avatar\" height=\"40\" width=\"40\">#}
{#                                    {% endif %}#}
{#                        {% endif %}#}
{#                        <!-- Online or Offline -->#}
{#                        <span class=\"avatar-status-online\"></span>#}
{#                    </span>#}
{#                </a>#}
                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-user\">
                    <a class=\"dropdown-item\" href=\"page-profile.html\"><i class=\"me-50\" data-feather=\"user\"></i> Profile</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"page-account-settings-account.html\"><i class=\"me-50\" data-feather=\"settings\"></i> Settings<a>
                            <a class=\"dropdown-item\" href=\"page-faq.html\"><i class=\"me-50\" data-feather=\"help-circle\"></i> FAQ</a>
                            <a class=\"dropdown-item\" href=\"#\"><i class=\"me-50\" data-feather=\"power\"></i> Logout</a>
                </div>

            </li>
        </ul>
    </div>
</nav>

<ul class=\"main-search-list-defaultlist d-none\">
    <li class=\"d-flex align-items-center\"><a href=\"#\">
            <h6 class=\"section-label mt-75 mb-0\">Files</h6></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"{{ asset('/backend/app-assets/images/icons/xls.png') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Two new item submitted</p><small class=\"text-muted\">Marketing Manager</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;17kb</small></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"{{ asset('/backend/app-assets/images/icons/jpg.png') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">52 JPG file Generated</p><small class=\"text-muted\">FontEnd Developer</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;11kb</small></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"{{ asset('/backend/app-assets/images/icons/pdf.png') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">25 PDF File Uploaded</p><small class=\"text-muted\">Digital Marketing Manager</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;150kb</small></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between w-100\" href=\"app-file-manager.html\">
            <div class=\"d-flex\">
                <div class=\"me-75\"><img src=\"{{ asset('/backend/app-assets/images/icons/doc.png') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Anna_Strong.doc</p><small class=\"text-muted\">Web Designer</small>
                </div>
            </div><small class=\"search-data-size me-50 text-muted\">&apos;256kb</small></a></li>
    <li class=\"d-flex align-items-center\"><a href=\"#\">
            <h6 class=\"section-label mt-75 mb-0\">Members</h6></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"{{ asset('/backend/app-assets/images/portrait/small/avatar-s-8.jpg') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">John Doe</p><small class=\"text-muted\">UI designer</small>
                </div>
            </div></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"{{ asset('/backend/app-assets/images/portrait/small/avatar-s-1.jpg') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Michal Clark</p><small class=\"text-muted\">FontEnd Developer</small>
                </div>
            </div></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"{{ asset('/backend/app-assets/images/portrait/small/avatar-s-14.jpg') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Milena Gibson</p><small class=\"text-muted\">Digital Marketing Manager</small>
                </div>
            </div></a></li>
    <li class=\"auto-suggestion\"><a class=\"d-flex align-items-center justify-content-between py-50 w-100\" href=\"app-user-view-account.html\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar me-75\"><img src=\"{{ asset('/backend/app-assets/images/portrait/small/avatar-s-6.jpg') }}\" alt=\"png\" height=\"32\"></div>
                <div class=\"search-data\">
                    <p class=\"search-data-title mb-0\">Anna Strong</p><small class=\"text-muted\">Web Designer</small>
                </div>
            </div></a></li>
</ul>
<ul class=\"main-search-list-defaultlist-other-list d-none\">
    <li class=\"auto-suggestion justify-content-between\"><a class=\"d-flex align-items-center justify-content-between w-100 py-50\">
            <div class=\"d-flex justify-content-start\"><span class=\"me-75\" data-feather=\"alert-circle\"></span><span>No results found.</span></div></a></li>
</ul>
<!-- END: Header-->

{{ include('backend/layout/sidebar.html.twig') }}
", "backend/layout/header.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\layout\\header.html.twig");
    }
}
