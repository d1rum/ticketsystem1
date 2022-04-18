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

/* backend/layout/script.html.twig */
class __TwigTemplate_c8b888aea69367ab05d0d7b999aa0fdb6e1640fdd88b4db622d8addb465b9d5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/script.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout/script.html.twig"));

        // line 1
        echo "<!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/charts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/charts/chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/toastr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/jszip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/forms/select/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/forms/cleave/cleave.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/polyfill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/swiper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/charts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/charts/chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/core/app-menu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/core/app.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/customizer.min.js"), "html", null, true);
        echo "\"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/tables/table-datatables-basic.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/tables/table-datatables-advanced.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/forms/form-validation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/forms/form-input-mask.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/extensions/ext-component-toastr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/pages/modal-edit-user.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/pages/app-user-view-account.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/pages/app-user-view.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/pages/app-ecommerce-details.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/forms/form-number-input.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/feather.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/jquery-3.6.0.js"), "html", null, true);
        echo "\"></script>
";
        // line 60
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/apexcharts-bundle/dist/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/charts/chart-apex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/charts/chart-chartjs.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/pages/app-ecommerce.min.js"), "html", null, true);
        echo "\"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/file-uploaders/dropzone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/wNumb.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/vendors/js/extensions/nouislider.min.js"), "html", null, true);
        echo "\"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/backend/app-assets/js/scripts/forms/form-file-uploader.min.js"), "html", null, true);
        echo "\"></script>
<!-- END: Page JS-->




<script>
    \$(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>

<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
    \$('.delete').on('click',function (e){
        e.preventDefault();
        var self = \$(this);
        console.log(self.data('title'));
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: \"You won't be able to revert this!\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Data has been deleted.',
                    'success'
                )
                location.href = self.attr('href');
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Data file is safe :)',
                    'error'
                )
            }
        })
    });
</script>
    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 130
            echo "        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '";
            // line 134
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
        // line 140
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "session", [], "any", false, false, false, 140), "flashBag", [], "any", false, false, false, 140), "get", [0 => "success"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 141
            echo "        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '";
            // line 145
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
        // line 151
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "session", [], "any", false, false, false, 151), "flashBag", [], "any", false, false, false, 151), "get", [0 => "warning"], "method", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 152
            echo "      <script>
          Swal.fire({
              position: 'center',
              icon: 'warning',
              title: '";
            // line 156
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
        return "backend/layout/script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 156,  388 => 152,  383 => 151,  371 => 145,  365 => 141,  360 => 140,  348 => 134,  342 => 130,  338 => 129,  278 => 72,  272 => 69,  268 => 68,  264 => 67,  257 => 63,  253 => 62,  249 => 61,  244 => 60,  240 => 58,  236 => 57,  232 => 56,  228 => 55,  224 => 54,  220 => 53,  216 => 52,  212 => 51,  208 => 50,  204 => 49,  200 => 48,  196 => 47,  192 => 46,  188 => 45,  181 => 41,  177 => 40,  173 => 39,  165 => 34,  161 => 33,  157 => 32,  153 => 31,  149 => 30,  145 => 29,  141 => 28,  137 => 27,  133 => 26,  129 => 25,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Vendor JS-->
<script src=\"{{ asset('/backend/app-assets/vendors/js/vendors.min.js') }}\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src=\"{{ asset('/backend/app-assets/vendors/js/charts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/charts/chart.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/toastr.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/jszip.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/forms/cleave/cleave.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/moment.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/polyfill.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/swiper.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/charts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/charts/chart.min.js') }}\"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"{{ asset('/backend/app-assets/js/core/app-menu.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/core/app.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/customizer.min.js') }}\"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src=\"{{ asset('/backend/app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/tables/table-datatables-basic.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/tables/table-datatables-advanced.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/forms/form-validation.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/forms/form-input-mask.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/extensions/ext-component-toastr.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/pages/modal-edit-user.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/pages/app-user-view-account.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/pages/app-user-view.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/pages/app-ecommerce-details.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/forms/form-number-input.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/feather.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/jquery.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/jquery-3.6.0.js') }}\"></script>
{#<script src=\"{{ asset('/backend/app-assets/apexcharts.min.js') }}\"></script>#}
<script src=\"{{ asset('/backend/apexcharts-bundle/dist/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/charts/chart-apex.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/charts/chart-chartjs.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/js/scripts/pages/app-ecommerce.min.js') }}\"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src=\"{{ asset('/backend/app-assets/vendors/js/file-uploaders/dropzone.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/wNumb.min.js') }}\"></script>
<script src=\"{{ asset('/backend/app-assets/vendors/js/extensions/nouislider.min.js') }}\"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src=\"{{ asset('/backend/app-assets/js/scripts/forms/form-file-uploader.min.js') }}\"></script>
<!-- END: Page JS-->




<script>
    \$(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>

<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
    \$('.delete').on('click',function (e){
        e.preventDefault();
        var self = \$(this);
        console.log(self.data('title'));
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: \"You won't be able to revert this!\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Data has been deleted.',
                    'success'
                )
                location.href = self.attr('href');
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Data file is safe :)',
                    'error'
                )
            }
        })
    });
</script>
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
  {% for message in app.session.flashBag.get('warning') %}
      <script>
          Swal.fire({
              position: 'center',
              icon: 'warning',
              title: '{{ message }}',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
  {% endfor %}
", "backend/layout/script.html.twig", "C:\\Users\\durmu\\Desktop\\Ticket\\ticket\\templates\\backend\\layout\\script.html.twig");
    }
}
