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

/* frontend/layout/index.html.twig */
class __TwigTemplate_214c59a43b324c16998651fc3c2b8311734a9153e4acde58af9596bc9cb113f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/index.html.twig"));

        $this->parent = $this->loadTemplate("frontend/layout/layout.html.twig", "frontend/layout/index.html.twig", 1);
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
    <main id=\"content\">
        <section class=\"mx-0 slick-slider dots-inner-center custom-slider-02 slider\" data-slick-options='{\"slidesToShow\": 1,\"infinite\":true,\"autoplay\":true,\"dots\":true,\"arrows\":false,\"fade\":true,\"cssEase\":\"ease-in-out\",\"speed\":600}'>
            <div class=\"box px-0\">
                <div class=\"bg-img-cover-center py-12 py-lg-17\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/bg-slider-04.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"container container-xl pt-7 pb-9\">
                        <div data-animate=\"fadeInDown\">
                            <p class=\"text-white mb-5 font-weight-600 fs-24 lh-15\">Find Inspration</p>
                            <h1 class=\"text-white font-weight-500 mb-10 fs-48 fs-md-68 lh-128\">Body Daily <br>
                                Oil Wash</h1>
                        </div>
                        <a href=\"shop-page-04.html\" class=\"btn btn-link btn-light bg-transparent text-white border-bottom border-0 rounded-0 p-0 fs-16 font-weight-600 border-2x\" data-animate=\"fadeInUp\">
                            Discover Now
                            <svg class=\"icon icon-arrow-right\">
                                <use xlink:href=\"#icon-arrow-right\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"box px-0\">
                <div class=\"bg-img-cover-center py-12 py-lg-17\" style=\"background-image: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/bg-slider-05.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"container container-xl pt-7 pb-9\">
                        <div data-animate=\"fadeInDown\">
                            <p class=\"text-white mb-5 font-weight-600 fs-24 lh-15\">Shop Our Set</p>
                            <h1 class=\"text-white font-weight-500 mb-10 fs-48 fs-md-68 lh-128\">The 3-Step <br>
                                Skincare Routine
                            </h1>
                        </div>
                        <a href=\"shop-page-04.html\" class=\"btn btn-link btn-light bg-transparent text-white border-bottom border-0 rounded-0 p-0 fs-16 font-weight-600 border-2x\" data-animate=\"fadeInUp\">
                            Discover Now
                            <svg class=\"icon icon-arrow-right\">
                                <use xlink:href=\"#icon-arrow-right\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"box px-0\">
                <div class=\"bg-img-cover-center py-12 py-lg-17\" style=\"background-image: url(";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/bg-slider-06.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"container container-xl pt-7 pb-9\">
                        <div data-animate=\"fadeInDown\">
                            <p class=\"text-white mb-5 font-weight-600 fs-24 lh-15\">New Arrivals</p>
                            <h1 class=\"text-white font-weight-500 mb-10 fs-48 fs-md-68 lh-128\">Cleanser<br>
                                Concentrate</h1>
                        </div>
                        <a href=\"shop-page-04.html\" class=\"btn btn-link btn-light bg-transparent text-white border-bottom border-0 rounded-0 p-0 fs-16 font-weight-600 border-2x\" data-animate=\"fadeInUp\">
                            Discover Now
                            <svg class=\"icon icon-arrow-right\">
                                <use xlink:href=\"#icon-arrow-right\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"my-lg-13 my-10\">
            <div class=\"container container-xl\">
                <h2 data-animate=\"fadeInUp\">Our Bestsellers</h2>
                <p class=\"fs-18 mb-8\" style=\"max-width:490px\" data-animate=\"fadeInUp\">Looking for something specific? Shop by category to find your perfect piece of jewellery!</p>
            </div>
            <div class=\"container container-lg-full\">
                <div class=\"slick-slider custom-slider-03\" data-slick-options='{\"slidesToShow\": 4,\"dots\":true,\"arrows\":true,\"infinite\":true,\"centerMode\":true,\"centerPadding\":\"calc((100% - 1440px) / 2)\",\"responsive\":[{\"breakpoint\": 1200,\"settings\": {\"slidesToShow\":3,\"centerMode\":false,\"arrows\":false,\"dots\":false}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"arrows\":false,\"dots\":false}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"arrows\":false,\"dots\":false}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"arrows\":false,\"dots\":false}}]}'>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/product-07.jpg"), "html", null, true);
        echo "\" alt=\"Facial cleanser\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-primary\">-20%</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Facial cleanser</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/product-02.jpg"), "html", null, true);
        echo "\" alt=\"Bio-shroom Rejuvenating Serum\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/product-03.jpg"), "html", null, true);
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-warning\">New</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
 </span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/product-05.jpg"), "html", null, true);
        echo "\" alt=\"Facial cleanser\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-primary\">-20%</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Facial cleanser</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/product-04.jpg"), "html", null, true);
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-primary\">-20%</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/product-01.jpg"), "html", null, true);
        echo "\" alt=\"Facial cleanser\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Facial cleanser</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style=\"background-color: #eee\">
            <div class=\"container container-xl\">
                <div class=\"row align-items-end\">
                    <div class=\"col-lg-4 order-2 order-lg-1 pb-11 pt-8 py-lg-13 py-xl-17\">
                        <p class=\"fs-15 letter-spacing-01 text-secondary mb-3 text-uppercase font-weight-600\" data-animate=\"fadeInUp\">new collection</p>
                        <h2 class=\"mb-2 fs-40 lh-13\" style=\"max-width: 367px\" data-animate=\"fadeInUp\">Discover Our Autumn Skincare</h2>
                        <p class=\"fs-18 mb-6\" data-animate=\"fadeInUp\">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                        <a href=\"shop-page-04.html\" class=\"btn btn-white rounded text-secondary border-0 shadow-1 bg-hover-secondary hover-white\">Explore
                            More</a>
                    </div>
                    <div class=\"col-lg-8 order-1 order-lg-2\">
                        <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/bg-other-02.png"), "html", null, true);
        echo "\" alt=\"Countdown-01\" data-animate=\"fadeIn\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"py-lg-13 py-11\">
            <div class=\"container container-xl text-center\">
                <div class=\"fs-15 font-weight-600 text-uppercase letter-spacing-01 text-secondary mb-4\" data-animate=\"fadeInUp\">shop by categories</div>
                <h2 class=\"mw-675 mx-auto mb-9\" data-animate=\"fadeInUp\">Because You Need Time for Yourself. Blend Beauty in You</h2>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/categories-01.jpg"), "html", null, true);
        echo "\" alt=\"Bodycare\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Bodycare</a></h4>
                                <p class=\"card-text\">23 items</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/categories-02.jpg"), "html", null, true);
        echo "\" alt=\"Skincare\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Skincare</a></h4>
                                <p class=\"card-text\">16 items</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/categories-03.jpg"), "html", null, true);
        echo "\" alt=\"Accessories\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Accessories</a></h4>
                                <p class=\"card-text\">13 items</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/categories-04.jpg"), "html", null, true);
        echo "\" alt=\"Haircare\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Haircare</a></h4>
                                <p class=\"card-text\">56 items</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"shop-page-04.html\" class=\"btn btn-outline-secondary border-2x border mt-lg-6\">Shop All Products</a>
            </div>
        </section>
        <section style=\"background-color: #F1F1F1\">
            <div class=\"container container-xl\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-7\" data-animate=\"fadeIn\">
                        <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/Countdown-01.png"), "html", null, true);
        echo "\" alt=\"Countdown-01\">
                        <div class=\"lable-sale-countdown d-none fs-20 font-weight-500 w-122 h-122 bg-primary rounded-circle d-xl-flex align-items-center justify-content-center flex-column text-white\">
                            Save<span class=\"fs-24 font-weight-600\">\$19.00</span></div>
                    </div>
                    <div class=\"col-lg-5 py-lg-0 py-9\" data-animate=\"fadeInUp\">
                        <div class=\"d-flex align-items-center fs-15 text-secondary text-uppercase font-weight-600 letter-spacing-01 mb-4\">Special offer<span class=\"badge badge-primary fs-15 font-weight-500 py-1 px-2 ml-2\">-20%</span></div>
                        <h2>Mountain Pine Bath Oil</h2>
                        <p class=\"fs-18 mw-460 mb-4\">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                        <div class=\"countdown d-flex mb-7 mx-n2 mx-sm-n4\" data-countdown=\"true\" data-countdown-end=\"Jan 27, 2023 18:24:25\">
                            <div class=\"countdown-item center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 day\">02</span>
                            </div>
                            <div class=\"separate fs-30\">:</div>
                            <div class=\"countdown-item text-center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 hour\">24</span>
                            </div>
                            <div class=\"separate fs-30\">:</div>
                            <div class=\"countdown-item text-center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 minute\">15</span>
                            </div>
                            <div class=\"separate fs-30\">:</div>
                            <div class=\"countdown-item text-center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 second\">41</span>
                            </div>
                        </div>
                        <a href=\"#\" class=\"btn btn-white shadow-xs\">Get Only \$39,00</a>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"py-lg-13 pb-11 pt-10\">
            <div class=\"container container-xl text-center\">
                <h2 class=\"mb-4\" data-animate=\"fadeInUp\">From Our Blog</h2>
                <p class=\"fs-18 mx-auto mb-8\" style=\"max-width: 600px;\" data-animate=\"fadeInUp\">Our bundles were designed to conveniently package your tanning essentials while saving you money.s</p>
                <div class=\"slick-slider\" data-slick-options='{\"slidesToShow\": 3,\"arrows\":false,\"dots\":false,\"responsive\":[{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 1,\"dots\":true}}]}'>
                    <div class=\"box\">
                        <div class=\"card border-0\" data-animate=\"fadeInUp\">
                            <a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
                                <img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/post-01.jpg"), "html", null, true);
        echo "\" alt=\"Which foundation formula is right for your skin?\">
                            </a>
                            <div class=\"card-body p-0 text-left\">
                                <ul class=\"list-inline mt-6 fs-13 text-uppercase letter-spacing-01 lh-1 font-weight-600\">
                                    <li class=\"list-inline-item pr-3 border-right border-2x\"> lifestyle</li>
                                    <li class=\"list-inline-item pr-3\">Jan 19, 2021</li>
                                </ul>
                                <h3 class=\"card-title mb-0 fs-24 lh-15\">
                                    <a class=\"text-decoration-none\" href=\"blog-detail-01.html\">Which foundation formula is right for your skin?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0\" data-animate=\"fadeInUp\">
                            <a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
                                <img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/post-05.jpg"), "html", null, true);
        echo "\" alt=\"How to Plop Hair for Bouncy, Beautiful Curls\">
                            </a>
                            <div class=\"card-body p-0 text-left\">
                                <ul class=\"list-inline mt-6 fs-13 text-uppercase letter-spacing-01 lh-1 font-weight-600\">
                                    <li class=\"list-inline-item pr-3 border-right border-2x\"> lifestyle</li>
                                    <li class=\"list-inline-item pr-3\">Jan 19, 2021</li>
                                </ul>
                                <h3 class=\"card-title mb-0 fs-24 lh-15\">
                                    <a class=\"text-decoration-none\" href=\"blog-detail-01.html\">How to Plop Hair for Bouncy, Beautiful Curls</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0\" data-animate=\"fadeInUp\">
                            <a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
                                <img src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/post-06.jpg"), "html", null, true);
        echo "\" alt=\"Which foundation formula is right for your skin?\">
                            </a>
                            <div class=\"card-body p-0 text-left\">
                                <ul class=\"list-inline mt-6 fs-13 text-uppercase letter-spacing-01 lh-1 font-weight-600\">
                                    <li class=\"list-inline-item pr-3 border-right border-2x\"> lifestyle</li>
                                    <li class=\"list-inline-item pr-3\">Jan 19, 2021</li>
                                </ul>
                                <h3 class=\"card-title mb-0 fs-24 lh-15\">
                                    <a class=\"text-decoration-none\" href=\"blog-detail-01.html\">Which foundation formula is right for your skin?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"blog-grid.html\" class=\"btn btn-outline-secondary border-2x border mt-8\" data-animate=\"fadeInUp\">View All Posts</a>
            </div>
        </section>
        <section class=\"pt-lg-12 pb-lg-11 pt-10 pb-9\" style=\"background-color: #EDF1F0\">
            <div class=\"container text-center\">
                <h3 class=\"mb-2 mx-auto lh-129 mb-7\" style=\"max-width: 500px\" data-animate=\"fadeInUp\">Stay Up to Date with All News and Exclusive Offers</h3>
                <form class=\"mx-auto\" style=\"max-width: 546px\">
                    <div class=\"input-group position-relative mb-6\" data-animate=\"fadeInUp\">
                        <input type=\"email\" class=\"border-0 form-control bg-white\" placeholder=\"Enter your email address\">
                        <button type=\"submit\" class=\"btn btn-secondary bg-hover-primary border-hover-primary\">
                            Subscribe
                        </button>
                    </div>
                    <div class=\"form-group form-check\" data-animate=\"fadeInUp\">
                        <input type=\"checkbox\" class=\"form-check-input bg-transparent\" id=\"exampleCheck1\">
                        <label class=\"form-check-label fs-14\" for=\"exampleCheck1\">I accept the <a href=\"#\" class=\"border-bottom text-decoration-none border-gray-2\">terms & conditions</a> and <a href=\"#\" class=\"border-bottom text-decoration-none border-gray-2\">the data protection</a></label>
                    </div>
                </form>
            </div>
        </section>
        <section class=\"pt-lg-12 pt-10\">
            <div class=\"container container-xl\">
                <div class=\"row align-items-end\">
                    <div class=\"col-md-6 mb-md-6\">
                        <h2 class=\"fs-34 mb-0\" data-animate=\"fadeInUp\">On the Gram</h2>
                    </div>
                    <div class=\"col-md-6 mb-7 mb-md-6\">
                        <p class=\"fs-18 font-weight-600 text-primary text-md-right mb-0\" data-animate=\"fadeInUp\">@Glowing_cosmetics</p>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"slick-slider mx-n2\" data-slick-options='{\"slidesToShow\": 5,\"infinite\":false,\"autoplay\":true,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 1366,\"settings\": {\"slidesToShow\":5}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":4}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 3}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 2}}]}'>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/instagram-01.jpg"), "html", null, true);
        echo "\" alt=\"Instagram 01\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/instagram-02.jpg"), "html", null, true);
        echo "\" alt=\"Instagram 02\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/instagram-03.jpg"), "html", null, true);
        echo "\" alt=\"Instagram 03\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/instagram-04.jpg"), "html", null, true);
        echo "\" alt=\"Instagram 04\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/instagram-05.jpg"), "html", null, true);
        echo "\" alt=\"Instagram 05\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"pt-11 pb-xl-9 pb-5\">
            <div class=\"container container-xl\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-01 fs-70 text-primary\"><use xlink:href=\"#icon-box-01\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Free Shipping</h3>
                                <p class=\"cart-text fs-18 mb-0\">Free Shipping for orders over \$130</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-02 fs-70 text-primary\"><use xlink:href=\"#icon-box-02\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Returns</h3>
                                <p class=\"cart-text fs-18 mb-0\">Within 30 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-03 fs-70 text-primary\"><use xlink:href=\"#icon-box-03\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Online Support</h3>
                                <p class=\"cart-text fs-18 mb-0\">24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-04 fs-70 text-primary\"><use xlink:href=\"#icon-box-04\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Flexible Payment</h3>
                                <p class=\"cart-text fs-18 mb-0\">Pay with Multiple Credit Cards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 614,  738 => 609,  730 => 604,  722 => 599,  714 => 594,  664 => 547,  645 => 531,  626 => 515,  585 => 477,  567 => 462,  555 => 453,  543 => 444,  531 => 435,  516 => 423,  445 => 355,  384 => 297,  324 => 240,  264 => 183,  205 => 127,  145 => 70,  115 => 43,  94 => 25,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/layout/layout.html.twig' %}

{% block body %}

    <main id=\"content\">
        <section class=\"mx-0 slick-slider dots-inner-center custom-slider-02 slider\" data-slick-options='{\"slidesToShow\": 1,\"infinite\":true,\"autoplay\":true,\"dots\":true,\"arrows\":false,\"fade\":true,\"cssEase\":\"ease-in-out\",\"speed\":600}'>
            <div class=\"box px-0\">
                <div class=\"bg-img-cover-center py-12 py-lg-17\" style=\"background-image: url({{ asset('frontend/images/bg-slider-04.jpg') }});\">
                    <div class=\"container container-xl pt-7 pb-9\">
                        <div data-animate=\"fadeInDown\">
                            <p class=\"text-white mb-5 font-weight-600 fs-24 lh-15\">Find Inspration</p>
                            <h1 class=\"text-white font-weight-500 mb-10 fs-48 fs-md-68 lh-128\">Body Daily <br>
                                Oil Wash</h1>
                        </div>
                        <a href=\"shop-page-04.html\" class=\"btn btn-link btn-light bg-transparent text-white border-bottom border-0 rounded-0 p-0 fs-16 font-weight-600 border-2x\" data-animate=\"fadeInUp\">
                            Discover Now
                            <svg class=\"icon icon-arrow-right\">
                                <use xlink:href=\"#icon-arrow-right\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"box px-0\">
                <div class=\"bg-img-cover-center py-12 py-lg-17\" style=\"background-image: url({{ asset('frontend/images/bg-slider-05.jpg') }});\">
                    <div class=\"container container-xl pt-7 pb-9\">
                        <div data-animate=\"fadeInDown\">
                            <p class=\"text-white mb-5 font-weight-600 fs-24 lh-15\">Shop Our Set</p>
                            <h1 class=\"text-white font-weight-500 mb-10 fs-48 fs-md-68 lh-128\">The 3-Step <br>
                                Skincare Routine
                            </h1>
                        </div>
                        <a href=\"shop-page-04.html\" class=\"btn btn-link btn-light bg-transparent text-white border-bottom border-0 rounded-0 p-0 fs-16 font-weight-600 border-2x\" data-animate=\"fadeInUp\">
                            Discover Now
                            <svg class=\"icon icon-arrow-right\">
                                <use xlink:href=\"#icon-arrow-right\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"box px-0\">
                <div class=\"bg-img-cover-center py-12 py-lg-17\" style=\"background-image: url({{ asset('frontend/images/bg-slider-06.jpg') }});\">
                    <div class=\"container container-xl pt-7 pb-9\">
                        <div data-animate=\"fadeInDown\">
                            <p class=\"text-white mb-5 font-weight-600 fs-24 lh-15\">New Arrivals</p>
                            <h1 class=\"text-white font-weight-500 mb-10 fs-48 fs-md-68 lh-128\">Cleanser<br>
                                Concentrate</h1>
                        </div>
                        <a href=\"shop-page-04.html\" class=\"btn btn-link btn-light bg-transparent text-white border-bottom border-0 rounded-0 p-0 fs-16 font-weight-600 border-2x\" data-animate=\"fadeInUp\">
                            Discover Now
                            <svg class=\"icon icon-arrow-right\">
                                <use xlink:href=\"#icon-arrow-right\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"my-lg-13 my-10\">
            <div class=\"container container-xl\">
                <h2 data-animate=\"fadeInUp\">Our Bestsellers</h2>
                <p class=\"fs-18 mb-8\" style=\"max-width:490px\" data-animate=\"fadeInUp\">Looking for something specific? Shop by category to find your perfect piece of jewellery!</p>
            </div>
            <div class=\"container container-lg-full\">
                <div class=\"slick-slider custom-slider-03\" data-slick-options='{\"slidesToShow\": 4,\"dots\":true,\"arrows\":true,\"infinite\":true,\"centerMode\":true,\"centerPadding\":\"calc((100% - 1440px) / 2)\",\"responsive\":[{\"breakpoint\": 1200,\"settings\": {\"slidesToShow\":3,\"centerMode\":false,\"arrows\":false,\"dots\":false}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"arrows\":false,\"dots\":false}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"arrows\":false,\"dots\":false}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"arrows\":false,\"dots\":false}}]}'>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('frontend/images/product-07.jpg') }}\" alt=\"Facial cleanser\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-primary\">-20%</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Facial cleanser</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('frontend/images/product-02.jpg') }}\" alt=\"Bio-shroom Rejuvenating Serum\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('frontend/images/product-03.jpg') }}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-warning\">New</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
 </span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('frontend/images/product-05.jpg') }}\" alt=\"Facial cleanser\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-primary\">-20%</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Facial cleanser</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('frontend/images/product-04.jpg') }}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                        <span class=\"badge badge-primary\">-20%</span>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('frontend/images/product-01.jpg') }}\" alt=\"Facial cleanser\">
                                <div class=\"card-img-overlay d-flex p-3\">
                                    <div>
                                    </div>
                                    <div class=\"my-auto w-100 content-change-vertical\">
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                                <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                            <svg class=\"icon icon-star-light fs-24\">
                                                <use xlink:href=\"#icon-star-light\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                            <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                                <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body pt-4 text-center\">
                                <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                    <span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                                    <span>\$29.00</span>
                                </p>
                                <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-detail-01.html\">Facial cleanser</a></h2>
                                <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                    <ul class=\"list-inline mb-0 lh-1\">
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                        <li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
                                        </li>
                                    </ul>
                                    <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style=\"background-color: #eee\">
            <div class=\"container container-xl\">
                <div class=\"row align-items-end\">
                    <div class=\"col-lg-4 order-2 order-lg-1 pb-11 pt-8 py-lg-13 py-xl-17\">
                        <p class=\"fs-15 letter-spacing-01 text-secondary mb-3 text-uppercase font-weight-600\" data-animate=\"fadeInUp\">new collection</p>
                        <h2 class=\"mb-2 fs-40 lh-13\" style=\"max-width: 367px\" data-animate=\"fadeInUp\">Discover Our Autumn Skincare</h2>
                        <p class=\"fs-18 mb-6\" data-animate=\"fadeInUp\">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                        <a href=\"shop-page-04.html\" class=\"btn btn-white rounded text-secondary border-0 shadow-1 bg-hover-secondary hover-white\">Explore
                            More</a>
                    </div>
                    <div class=\"col-lg-8 order-1 order-lg-2\">
                        <img src=\"{{ asset('frontend/images/bg-other-02.png') }}\" alt=\"Countdown-01\" data-animate=\"fadeIn\">
                    </div>
                </div>
            </div>
        </section>
        <section class=\"py-lg-13 py-11\">
            <div class=\"container container-xl text-center\">
                <div class=\"fs-15 font-weight-600 text-uppercase letter-spacing-01 text-secondary mb-4\" data-animate=\"fadeInUp\">shop by categories</div>
                <h2 class=\"mw-675 mx-auto mb-9\" data-animate=\"fadeInUp\">Because You Need Time for Yourself. Blend Beauty in You</h2>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"{{ asset('frontend/images/categories-01.jpg') }}\" alt=\"Bodycare\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Bodycare</a></h4>
                                <p class=\"card-text\">23 items</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"{{ asset('frontend/images/categories-02.jpg') }}\" alt=\"Skincare\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Skincare</a></h4>
                                <p class=\"card-text\">16 items</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"{{ asset('frontend/images/categories-03.jpg') }}\" alt=\"Accessories\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Accessories</a></h4>
                                <p class=\"card-text\">13 items</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card border-0 mb-lg-0 mb-6\" data-animate=\"fadeInUp\">
                            <a href=\"#\" class=\"hover-zoom-in hover-shine\"><img src=\"{{ asset('frontend/images/categories-04.jpg') }}\" alt=\"Haircare\"></a>
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title mb-1\"><a href=\"#\">Haircare</a></h4>
                                <p class=\"card-text\">56 items</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"shop-page-04.html\" class=\"btn btn-outline-secondary border-2x border mt-lg-6\">Shop All Products</a>
            </div>
        </section>
        <section style=\"background-color: #F1F1F1\">
            <div class=\"container container-xl\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-7\" data-animate=\"fadeIn\">
                        <img src=\"{{ asset('frontend/images/Countdown-01.png') }}\" alt=\"Countdown-01\">
                        <div class=\"lable-sale-countdown d-none fs-20 font-weight-500 w-122 h-122 bg-primary rounded-circle d-xl-flex align-items-center justify-content-center flex-column text-white\">
                            Save<span class=\"fs-24 font-weight-600\">\$19.00</span></div>
                    </div>
                    <div class=\"col-lg-5 py-lg-0 py-9\" data-animate=\"fadeInUp\">
                        <div class=\"d-flex align-items-center fs-15 text-secondary text-uppercase font-weight-600 letter-spacing-01 mb-4\">Special offer<span class=\"badge badge-primary fs-15 font-weight-500 py-1 px-2 ml-2\">-20%</span></div>
                        <h2>Mountain Pine Bath Oil</h2>
                        <p class=\"fs-18 mw-460 mb-4\">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                        <div class=\"countdown d-flex mb-7 mx-n2 mx-sm-n4\" data-countdown=\"true\" data-countdown-end=\"Jan 27, 2023 18:24:25\">
                            <div class=\"countdown-item center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 day\">02</span>
                            </div>
                            <div class=\"separate fs-30\">:</div>
                            <div class=\"countdown-item text-center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 hour\">24</span>
                            </div>
                            <div class=\"separate fs-30\">:</div>
                            <div class=\"countdown-item text-center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 minute\">15</span>
                            </div>
                            <div class=\"separate fs-30\">:</div>
                            <div class=\"countdown-item text-center px-2 px-sm-4\">
                                <span class=\"fs-40 fs-sm-48 lh-1 text-primary font-weight-600 second\">41</span>
                            </div>
                        </div>
                        <a href=\"#\" class=\"btn btn-white shadow-xs\">Get Only \$39,00</a>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"py-lg-13 pb-11 pt-10\">
            <div class=\"container container-xl text-center\">
                <h2 class=\"mb-4\" data-animate=\"fadeInUp\">From Our Blog</h2>
                <p class=\"fs-18 mx-auto mb-8\" style=\"max-width: 600px;\" data-animate=\"fadeInUp\">Our bundles were designed to conveniently package your tanning essentials while saving you money.s</p>
                <div class=\"slick-slider\" data-slick-options='{\"slidesToShow\": 3,\"arrows\":false,\"dots\":false,\"responsive\":[{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 1,\"dots\":true}}]}'>
                    <div class=\"box\">
                        <div class=\"card border-0\" data-animate=\"fadeInUp\">
                            <a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
                                <img src=\"{{ asset('frontend/images/post-01.jpg') }}\" alt=\"Which foundation formula is right for your skin?\">
                            </a>
                            <div class=\"card-body p-0 text-left\">
                                <ul class=\"list-inline mt-6 fs-13 text-uppercase letter-spacing-01 lh-1 font-weight-600\">
                                    <li class=\"list-inline-item pr-3 border-right border-2x\"> lifestyle</li>
                                    <li class=\"list-inline-item pr-3\">Jan 19, 2021</li>
                                </ul>
                                <h3 class=\"card-title mb-0 fs-24 lh-15\">
                                    <a class=\"text-decoration-none\" href=\"blog-detail-01.html\">Which foundation formula is right for your skin?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0\" data-animate=\"fadeInUp\">
                            <a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
                                <img src=\"{{ asset('frontend/images/post-05.jpg') }}\" alt=\"How to Plop Hair for Bouncy, Beautiful Curls\">
                            </a>
                            <div class=\"card-body p-0 text-left\">
                                <ul class=\"list-inline mt-6 fs-13 text-uppercase letter-spacing-01 lh-1 font-weight-600\">
                                    <li class=\"list-inline-item pr-3 border-right border-2x\"> lifestyle</li>
                                    <li class=\"list-inline-item pr-3\">Jan 19, 2021</li>
                                </ul>
                                <h3 class=\"card-title mb-0 fs-24 lh-15\">
                                    <a class=\"text-decoration-none\" href=\"blog-detail-01.html\">How to Plop Hair for Bouncy, Beautiful Curls</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"box\">
                        <div class=\"card border-0\" data-animate=\"fadeInUp\">
                            <a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
                                <img src=\"{{ asset('frontend/images/post-06.jpg') }}\" alt=\"Which foundation formula is right for your skin?\">
                            </a>
                            <div class=\"card-body p-0 text-left\">
                                <ul class=\"list-inline mt-6 fs-13 text-uppercase letter-spacing-01 lh-1 font-weight-600\">
                                    <li class=\"list-inline-item pr-3 border-right border-2x\"> lifestyle</li>
                                    <li class=\"list-inline-item pr-3\">Jan 19, 2021</li>
                                </ul>
                                <h3 class=\"card-title mb-0 fs-24 lh-15\">
                                    <a class=\"text-decoration-none\" href=\"blog-detail-01.html\">Which foundation formula is right for your skin?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"blog-grid.html\" class=\"btn btn-outline-secondary border-2x border mt-8\" data-animate=\"fadeInUp\">View All Posts</a>
            </div>
        </section>
        <section class=\"pt-lg-12 pb-lg-11 pt-10 pb-9\" style=\"background-color: #EDF1F0\">
            <div class=\"container text-center\">
                <h3 class=\"mb-2 mx-auto lh-129 mb-7\" style=\"max-width: 500px\" data-animate=\"fadeInUp\">Stay Up to Date with All News and Exclusive Offers</h3>
                <form class=\"mx-auto\" style=\"max-width: 546px\">
                    <div class=\"input-group position-relative mb-6\" data-animate=\"fadeInUp\">
                        <input type=\"email\" class=\"border-0 form-control bg-white\" placeholder=\"Enter your email address\">
                        <button type=\"submit\" class=\"btn btn-secondary bg-hover-primary border-hover-primary\">
                            Subscribe
                        </button>
                    </div>
                    <div class=\"form-group form-check\" data-animate=\"fadeInUp\">
                        <input type=\"checkbox\" class=\"form-check-input bg-transparent\" id=\"exampleCheck1\">
                        <label class=\"form-check-label fs-14\" for=\"exampleCheck1\">I accept the <a href=\"#\" class=\"border-bottom text-decoration-none border-gray-2\">terms & conditions</a> and <a href=\"#\" class=\"border-bottom text-decoration-none border-gray-2\">the data protection</a></label>
                    </div>
                </form>
            </div>
        </section>
        <section class=\"pt-lg-12 pt-10\">
            <div class=\"container container-xl\">
                <div class=\"row align-items-end\">
                    <div class=\"col-md-6 mb-md-6\">
                        <h2 class=\"fs-34 mb-0\" data-animate=\"fadeInUp\">On the Gram</h2>
                    </div>
                    <div class=\"col-md-6 mb-7 mb-md-6\">
                        <p class=\"fs-18 font-weight-600 text-primary text-md-right mb-0\" data-animate=\"fadeInUp\">@Glowing_cosmetics</p>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"slick-slider mx-n2\" data-slick-options='{\"slidesToShow\": 5,\"infinite\":false,\"autoplay\":true,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 1366,\"settings\": {\"slidesToShow\":5}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":4}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 3}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 2}}]}'>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"{{ asset('frontend/images/instagram-01.jpg') }}\" alt=\"Instagram 01\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"{{ asset('frontend/images/instagram-02.jpg') }}\" alt=\"Instagram 02\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"{{ asset('frontend/images/instagram-03.jpg') }}\" alt=\"Instagram 03\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"{{ asset('frontend/images/instagram-04.jpg') }}\" alt=\"Instagram 04\">
                                </a>
                            </div>
                            <div class=\"box px-2\">
                                <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                                    <img src=\"{{ asset('frontend/images/instagram-05.jpg') }}\" alt=\"Instagram 05\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"pt-11 pb-xl-9 pb-5\">
            <div class=\"container container-xl\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-01 fs-70 text-primary\"><use xlink:href=\"#icon-box-01\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Free Shipping</h3>
                                <p class=\"cart-text fs-18 mb-0\">Free Shipping for orders over \$130</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-02 fs-70 text-primary\"><use xlink:href=\"#icon-box-02\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Returns</h3>
                                <p class=\"cart-text fs-18 mb-0\">Within 30 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-03 fs-70 text-primary\"><use xlink:href=\"#icon-box-03\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Online Support</h3>
                                <p class=\"cart-text fs-18 mb-0\">24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\" data-animate=\"fadeInUp\">
                            <div class=\"card-img\">
                                <svg class=\"icon icon-box-04 fs-70 text-primary\"><use xlink:href=\"#icon-box-04\"></use></svg>
                            </div>
                            <div class=\"card-body text-center\">
                                <h3 class=\"card-title fs-20 mb-2\">Flexible Payment</h3>
                                <p class=\"cart-text fs-18 mb-0\">Pay with Multiple Credit Cards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "frontend/layout/index.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\layout\\index.html.twig");
    }
}
