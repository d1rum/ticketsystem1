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

/* frontend/layout/script.html.twig */
class __TwigTemplate_f935532305022abc9a151395f3a9a3ee70a33d40b512059552ea1e4d4dd6e578 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/script.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/layout/script.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/bootstrap/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/waypoints/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/counter/countUp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/hc-sticky/hc-sticky.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/jparallax/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/mapbox-gl/mapbox-gl.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/vendors/isotope/isotope.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/js/theme.js"), "html", null, true);
        echo "\"></script>

<!-- Sweetalert -->
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
";
        // line 30
        echo "
";
        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            echo "        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '";
            // line 65
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "session", [], "any", false, false, false, 71), "flashBag", [], "any", false, false, false, 71), "get", [0 => "success"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            echo "        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '";
            // line 76
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/layout/script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  131 => 72,  126 => 71,  114 => 65,  108 => 61,  103 => 60,  100 => 30,  93 => 14,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('frontend/vendors/jquery.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/jquery-ui/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/bootstrap/bootstrap.bundle.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/waypoints/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/counter/countUp.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/magnific-popup/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/hc-sticky/hc-sticky.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/jparallax/TweenMax.min.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/mapbox-gl/mapbox-gl.js') }}\"></script>
<script src=\"{{ asset('frontend/vendors/isotope/isotope.js') }}\"></script>

<script src=\"{{ asset('frontend/js/theme.js') }}\"></script>

<!-- Sweetalert -->
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
{#<script>#}
{#    \$('.delete').on('click',function (e){#}
{#        e.preventDefault();#}
{#        var self = \$(this);#}
{#        console.log(self.data('title'));#}
{#        const swalWithBootstrapButtons = Swal.mixin({#}
{#            customClass: {#}
{#                confirmButton: 'btn btn-success',#}
{#                cancelButton: 'btn btn-danger'#}
{#            },#}
{#            buttonsStyling: false#}
{#        })#}

{#        swalWithBootstrapButtons.fire({#}
{#            title: 'Are you sure?',#}
{#            text: \"You won't be able to revert this!\",#}
{#            icon: 'warning',#}
{#            showCancelButton: true,#}
{#            confirmButtonText: 'Yes, delete it!',#}
{#            cancelButtonText: 'No, cancel!',#}
{#            reverseButtons: true#}
{#        }).then((result) => {#}
{#            if (result.isConfirmed) {#}
{#                swalWithBootstrapButtons.fire(#}
{#                    'Deleted!',#}
{#                    'Your file has been deleted.',#}
{#                    'success'#}
{#                )#}
{#                location.href = self.attr('href');#}
{#            } else if (#}
{#                /* Read more about handling dismissals below */#}
{#                result.dismiss === Swal.DismissReason.cancel#}
{#            ) {#}
{#                swalWithBootstrapButtons.fire(#}
{#                    'Cancelled',#}
{#                    'Your imaginary file is safe :)',#}
{#                    'error'#}
{#                )#}
{#            }#}
{#        })#}
{#    });#}
{#</script>#}
    {% for message in app.flashes('error') %}
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ message }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    {% endfor %}
    {% for message in app.session.flashBag.get('success') %}
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ message }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    {% endfor %}
", "frontend/layout/script.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\frontend\\layout\\script.html.twig");
    }
}
