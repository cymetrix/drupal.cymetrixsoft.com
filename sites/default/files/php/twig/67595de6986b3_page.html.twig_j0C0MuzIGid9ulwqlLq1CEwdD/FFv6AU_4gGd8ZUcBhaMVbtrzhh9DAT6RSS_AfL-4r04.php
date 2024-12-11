<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/dxpr_theme/templates/page.html.twig */
class __TwigTemplate_cb9dbb1f64544b41d31f98b50943bdff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'primary_menu' => [$this, 'block_primary_menu'],
            'navbar' => [$this, 'block_navbar'],
            'highlighted' => [$this, 'block_highlighted'],
            'page_title' => [$this, 'block_page_title'],
            'content_top' => [$this, 'block_content_top'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "
<style>
    .feature_column_col:hover .feature_column_col{
        background: #3d3a3a !important;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu{
        border:none;
    }
</style>

<script
  src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
  integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\"
  crossorigin=\"anonymous\" async></script>
  

  
";
        // line 77
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 77), "getString", [], "method", false, false, true, 77) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 77), "boxed_layout", [], "any", false, false, true, 77)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 78), "getString", [], "method", false, false, true, 78) == "boxed"))) {
            // line 79
            yield "<div class=\"dxpr-theme-boxed-container\">
";
        }
        // line 81
        yield "
";
        // line 83
        yield "



";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 87)) {
            // line 88
            yield "  ";
            yield from $this->unwrap()->yieldBlock('primary_menu', $context, $blocks);
        }
        // line 103
        yield "


<header id=\"web_nav\" class=\"container cymetrix_container navbar navbar-expand-lg navbar-light\" >
        <a class=\"navbar-brand\" href=\"#\">
            ";
        // line 109
        yield "            <a href=\"https://drupal.cymetrixsoft.com/\"><img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\"></a>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
            ";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        yield "
        </div>
    </header>
    
    <header class=\"mobile_nav navbar navbar-expand-lg navbar-light\" >
        <div class=\"container cymetrix_container\">
            <div class=\"flexNav\">
                <a class=\"mob_logo\" href=\"https://drupal.cymetrixsoft.com/\"><img src=\"";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\"></a>
    
    
            <div class=\"nav_contact\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#contactUsModal\">Contact Us
                <img src=\"https://drupal.cymetrixsoft.com/sites/default/files/2024-02/Group%207.png\" alt=\"contact icon\">
                </a>
              </div>
        
            </div>
                
        </div>
        </header>
        
        <nav class=\"mobile_nav mobMenu navbar navbar-expand-lg navbar-light\" style=\"background-color:#E0E0E099;padding: 0px !important;\">
             <div class=\"flexNav container cymetrix_container\">
                    <p>Home</p>

                    <div class=\"menu-toggle\" aria-controls=\"navbarNav2\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    ";
        // line 145
        yield "                    ";
        // line 146
        yield "                      <div class=\"bar\"></div>
                      <div class=\"bar\"></div>
                      <div class=\"bar\"></div>
                    </div>

                    
                </div>
                
            
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav2\" aria-controls=\"navbarNav2\" 
    aria-expanded=\"false\" 
    aria-label=\"Toggle navigation\" 
    tabindex=\"0\">
                    ";
        // line 159
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        yield "
                </div>    


        </nav>
 
 
 
 
 
";
        // line 170
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 170) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 170))) {
            // line 171
            yield "  ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 228
        yield "
<div class=\"wrap-containers\">

";
        // line 232
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 232)) {
            // line 233
            yield "  ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
        }
        // line 237
        yield "
";
        // line 239
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 239) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 239), "page_title_home_hide", [], "any", false, false, true, 239) && ($context["is_front"] ?? null)))) {
            // line 240
            yield "
  ";
            // line 241
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        }
        // line 255
        yield "
";
        // line 257
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 257)) {
            // line 258
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_top', $context, $blocks);
        }
        // line 271
        yield "
";
        // line 273
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 350
        yield "
";
        // line 352
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 352)) {
            // line 353
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_bottom', $context, $blocks);
        }
        // line 366
        yield "</div>

";
        // line 369
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 369)) {
            // line 370
            yield "  ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        // line 385
        yield "
";
        // line 386
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 386), "getString", [], "method", false, false, true, 386) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 386), "boxed_layout", [], "any", false, false, true, 386)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 387
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 387), "getString", [], "method", false, false, true, 387) == "boxed"))) {
            // line 388
            yield "</div><!-- end dxpr-theme-boxed-container -->
";
        }
        // line 390
        yield "



";
        // line 394
        yield from         $this->loadTemplate("themes/contrib/dxpr_theme/templates/footer.html.twig", "themes/contrib/dxpr_theme/templates/page.html.twig", 394)->unwrap()->yield($context);
        // line 395
        yield "    

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "theme", "page", "is_front", "title_bg_image_path", "page_title_attributes", "content_attributes", "action_links"]);        return; yield '';
    }

    // line 88
    public function block_primary_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 89), "full_width_containers", [], "any", false, false, true, 89), "cnt_primary_menu", [], "any", false, false, true, 89)) ? ("dxpr-theme-fluid") : ("container"));
        // line 90
        yield "    <header id=\"secondary-header\" class=\"dxpr-theme-secondary-header clearfix ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "primary_menu_hide", [], "any", false, false, true, 90), 90, $this->source)), "html", null, true);
        yield "\" role=\"banner\" style=\"display:none\">
      <div class=\"";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 91, $this->source), "html", null, true);
        yield " secondary-header-container\">
        ";
        // line 92
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 92), "full_width_containers", [], "any", false, false, true, 92), "cnt_primary_menu", [], "any", false, false, true, 92)) {
            // line 93
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 95
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        yield "
        ";
        // line 96
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 96), "full_width_containers", [], "any", false, false, true, 96), "cnt_primary_menu", [], "any", false, false, true, 96)) {
            // line 97
            yield "          </div></div>
        ";
        }
        // line 99
        yield "      </div>
    </header>
  ";
        return; yield '';
    }

    // line 171
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 172), "header_position", [], "any", false, false, true, 172)) {
            // line 173
            yield "      ";
            // line 174
            $context["navbar_classes"] = ["navbar dxpr-theme-header dxpr-theme-header--top", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 176
($context["theme"] ?? null), "settings", [], "any", false, false, true, 176), "navbar_position", [], "any", false, false, true, 176)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 176), "navbar_position", [], "any", false, false, true, 176), 176, $this->source))) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 177
($context["theme"] ?? null), "settings", [], "any", false, false, true, 177), "header_side_align", [], "any", false, false, true, 177)];
            // line 180
            yield "    ";
        } else {
            // line 181
            yield "      ";
            // line 182
            $context["navbar_classes"] = ["navbar dxpr-theme-header clearfix", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 184
($context["theme"] ?? null), "settings", [], "any", false, false, true, 184), "header_position", [], "any", false, false, true, 184)) ? ("dxpr-theme-header--side") : ("dxpr-theme-header--top")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 185
($context["theme"] ?? null), "settings", [], "any", false, false, true, 185), "navbar_position", [], "any", false, false, true, 185)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 185), "navbar_position", [], "any", false, false, true, 185), 185, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 186
($context["theme"] ?? null), "settings", [], "any", false, false, true, 186), "header_top_layout", [], "any", false, false, true, 186)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 186), "header_top_layout", [], "any", false, false, true, 186), 186, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 187
($context["theme"] ?? null), "settings", [], "any", false, false, true, 187), "header_style", [], "any", false, false, true, 187)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 187), "header_style", [], "any", false, false, true, 187), 187, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 188
($context["theme"] ?? null), "settings", [], "any", false, false, true, 188), "menu_hover", [], "any", false, false, true, 188)) ? (("dxpr-theme-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 188), "menu_hover", [], "any", false, false, true, 188), 188, $this->source)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 189
($context["theme"] ?? null), "settings", [], "any", false, false, true, 189), "header_top_fixed", [], "any", false, false, true, 189) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 189), "header_top_sticky", [], "any", false, false, true, 189))) ? ("dxpr-theme-header--sticky") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 190
($context["theme"] ?? null), "settings", [], "any", false, false, true, 190), "header_top_fixed", [], "any", false, false, true, 190) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 190), "header_top_sticky", [], "any", false, false, true, 190))) ? ("dxpr-theme-header--fixed") : (""))];
            // line 193
            yield "    ";
        }
        // line 194
        yield "    ";
        $context["mark_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 194), "mark_menu_with_children", [], "any", false, false, true, 194)) ? ("dxpr-theme-menu--has-children") : (""));
        // line 195
        yield "    ";
        $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "removeClass", ["container"], "method", false, false, true, 195), "addClass", [($context["navbar_classes"] ?? null)], "method", false, false, true, 195);
        // line 196
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 196), "header_top_fixed", [], "any", false, false, true, 196) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 196), "header_top_sticky", [], "any", false, false, true, 196))) {
            // line 197
            yield "      ";
            $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "setAttribute", ["data-spy", "affix"], "method", false, false, true, 197), "setAttribute", ["data-offset-top", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 197), "header_top_height_sticky_offset", [], "any", false, false, true, 197)], "method", false, false, true, 197);
            // line 198
            yield "    ";
        }
        // line 199
        yield "    ";
        $context["hamburger_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 199), "hamburger_menu", [], "any", false, false, true, 199)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 199), "hamburger_menu", [], "any", false, false, true, 199)) : ("three-dash"));
        // line 200
        yield "
    <header";
        // line 201
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 201, $this->source), "html", null, true);
        yield " style=\"display:none;\">
      ";
        // line 202
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 202), "full_width_containers", [], "any", false, false, true, 202), "cnt_header_nav", [], "any", false, false, true, 202)) ? ("dxpr-theme-fluid") : ("container"));
        // line 203
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 203, $this->source), "html", null, true);
        yield " navbar-container\">
        ";
        // line 204
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 204), "full_width_containers", [], "any", false, false, true, 204), "cnt_header_nav", [], "any", false, false, true, 204)) {
            // line 205
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 207
        yield "        <div class=\"navbar-header\">
          ";
        // line 208
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
        yield "
          ";
        // line 210
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 210)) {
            // line 211
            yield "            <a id=\"dxpr-theme-menu-toggle\" href=\"#\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hamburger_menu"] ?? null), 211, $this->source), "html", null, true);
            yield "\"><span></span><div class=\"screenreader-text visually-hidden\">Toggle menu</div></a>
          ";
        }
        // line 213
        yield "        </div>

        ";
        // line 216
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 216)) {
            // line 217
            yield "            <nav role=\"navigation\" id=\"dxpr-theme-main-menu\" class=\"dxpr-theme-main-menu ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mark_menu"] ?? null), 217, $this->source), "html", null, true);
            yield "\">
            ";
            // line 218
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            yield "
            </nav>
        ";
        }
        // line 221
        yield "        ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 221), "full_width_containers", [], "any", false, false, true, 221), "cnt_header_nav", [], "any", false, false, true, 221)) {
            // line 222
            yield "          </div></div>
        ";
        }
        // line 224
        yield "      </div>
    </header>
  ";
        return; yield '';
    }

    // line 233
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 241
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        yield "  ";
        if (($context["title_bg_image_path"] ?? null)) {
            // line 243
            yield "    <style>
      #page-title-full-width-container::after{ background-image:url(";
            // line 244
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["title_bg_image_path"] ?? null), 244, $this->source)), "html", null, true);
            yield ");}
    </style>
  ";
        }
        // line 247
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null), 247, $this->source), "html", null, true);
        yield " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 248
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 248), "full_width_containers", [], "any", false, false, true, 248), "cnt_page_title", [], "any", false, false, true, 248)) ? ("dxpr-theme-fluid") : ("container"));
        // line 249
        yield "      <header role=\"banner\" id=\"page-title\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 249, $this->source), "html", null, true);
        yield " page-title-container\">
        ";
        // line 250
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
        yield "
      </header>
    </div>
  ";
        return; yield '';
    }

    // line 258
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 259), "full_width_containers", [], "any", false, false, true, 259), "cnt_content_top", [], "any", false, false, true, 259)) ? ("dxpr-theme-fluid") : ("container"));
        // line 260
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 260, $this->source), "html", null, true);
        yield " content-top-container\">
      ";
        // line 261
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 261), "full_width_containers", [], "any", false, false, true, 261), "cnt_content_top", [], "any", false, false, true, 261)) {
            // line 262
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 264
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 264), 264, $this->source), "html", null, true);
        yield "
      ";
        // line 265
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 265), "full_width_containers", [], "any", false, false, true, 265), "cnt_content_top", [], "any", false, false, true, 265)) {
            // line 266
            yield "      </div></div>
      ";
        }
        // line 268
        yield "    </div>
  ";
        return; yield '';
    }

    // line 273
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 274
        yield "  ";
        $context["container"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 274), "full_width_containers", [], "any", false, false, true, 274), "cnt_content", [], "any", false, false, true, 274) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 275
($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 275), "getString", [], "method", false, false, true, 275) == "dxpr-theme-util-full-width-content")) || (((        // line 276
($context["node"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 276), "full_width_content_types", [], "any", false, false, true, 276), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 276), [], "any", false, false, true, 276)) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 277
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 277), 277, $this->source))))) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 278
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 278), 278, $this->source))))))) ? ("") : ("container"));
        // line 279
        yield "  <div role=\"main\" class=\"main-container  js-quickedit-main-content clearfix\">
    ";
        // line 280
        if ((($context["container"] ?? null) != "")) {
            // line 281
            yield "    <div class=\"row\">
    ";
        }
        // line 283
        yield "      ";
        // line 284
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 284))))) {
            // line 285
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 290
            yield "      ";
        }
        // line 291
        yield "
      ";
        // line 293
        yield "      ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 293), "getString", [], "method", false, false, true, 293)) {
            // line 294
            yield "        ";
            // line 295
            $context["content_classes"] = [(((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 296
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 296), 296, $this->source)))) && Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 296), 296, $this->source)))))) ? ("col-sm-6") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 297
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 297), 297, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 297), 297, $this->source))))))) ? ("col-sm-9") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 298
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 298), 298, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 298), 298, $this->source))))))) ? ("col-sm-9") : ("")), (((((            // line 299
($context["container"] ?? null) != "") && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 299), 299, $this->source)))))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 299), 299, $this->source))))))) ? ("col-sm-12") : (""))];
            // line 302
            yield "      ";
        } else {
            // line 303
            yield "        ";
            $context["col"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 303), "getString", [], "method", false, false, true, 303);
            // line 304
            yield "        ";
            // line 305
            $context["content_classes"] = [(((            // line 306
($context["col"] ?? null) == "dxpr-theme-util-content-center-4-col")) ? ("col-md-4 col-md-offset-4") : ("")), (((            // line 307
($context["col"] ?? null) == "dxpr-theme-util-content-center-6-col")) ? ("col-md-6 col-md-offset-3") : ("")), (((            // line 308
($context["col"] ?? null) == "dxpr-theme-util-content-center-8-col")) ? ("col-md-8 col-md-offset-2") : ("")), (((            // line 309
($context["col"] ?? null) == "dxpr-theme-util-content-center-10-col")) ? ("col-md-10 col-md-offset-1") : (""))];
            // line 312
            yield "      ";
        }
        // line 313
        yield "
      <section";
        // line 314
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 314), 314, $this->source), "html", null, true);
        yield ">

        ";
        // line 317
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 318
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 321
            yield "        ";
        }
        // line 322
        yield "
        ";
        // line 324
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 324)) {
            // line 325
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 328
            yield "        ";
        }
        // line 329
        yield "
        ";
        // line 331
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 335
        yield "      </section>

      ";
        // line 338
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 338))))) {
            // line 339
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 344
            yield "      ";
        }
        // line 345
        yield "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 346
            yield "    </div><!-- end .ow -->
    ";
        }
        // line 348
        yield "  </div><!-- end main-container -->
";
        return; yield '';
    }

    // line 285
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 287
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        return; yield '';
    }

    // line 318
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 319
        yield "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 319, $this->source), "html", null, true);
        yield "</ul>
          ";
        return; yield '';
    }

    // line 325
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
        yield "
          ";
        return; yield '';
    }

    // line 331
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        yield "          <a id=\"main-content\"></a>
          ";
        // line 333
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    // line 339
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 340
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 341
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        return; yield '';
    }

    // line 353
    public function block_content_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 354
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 354), "full_width_containers", [], "any", false, false, true, 354), "cnt_content_bottom", [], "any", false, false, true, 354)) ? ("dxpr-theme-fluid") : ("container"));
        // line 355
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 355, $this->source), "html", null, true);
        yield " content-bottom-container\">
      ";
        // line 356
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 356), "full_width_containers", [], "any", false, false, true, 356), "cnt_content_bottom", [], "any", false, false, true, 356)) {
            // line 357
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 359
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
        yield "
      ";
        // line 360
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 360), "full_width_containers", [], "any", false, false, true, 360), "cnt_content_bottom", [], "any", false, false, true, 360)) {
            // line 361
            yield "      </div></div>
      ";
        }
        // line 363
        yield "    </div>
  ";
        return; yield '';
    }

    // line 370
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        yield "    <footer class=\"dxpr-theme-footer clearfix\" role=\"contentinfo\">
      ";
        // line 372
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 372), "full_width_containers", [], "any", false, false, true, 372), "cnt_footer", [], "any", false, false, true, 372)) ? ("dxpr-theme-fluid") : ("container"));
        // line 373
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 373, $this->source), "html", null, true);
        yield " footer-container\">
        ";
        // line 374
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 374), "full_width_containers", [], "any", false, false, true, 374), "cnt_footer", [], "any", false, false, true, 374)) {
            // line 375
            yield "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 377
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
        yield "
        ";
        // line 378
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 378), "full_width_containers", [], "any", false, false, true, 378), "cnt_footer", [], "any", false, false, true, 378)) {
            // line 379
            yield "        </div></div>
        ";
        }
        // line 381
        yield "      </div>
    </footer>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  760 => 381,  756 => 379,  754 => 378,  749 => 377,  745 => 375,  743 => 374,  738 => 373,  736 => 372,  733 => 371,  729 => 370,  723 => 363,  719 => 361,  717 => 360,  712 => 359,  708 => 357,  706 => 356,  701 => 355,  698 => 354,  694 => 353,  686 => 341,  683 => 340,  679 => 339,  672 => 333,  669 => 332,  665 => 331,  657 => 326,  653 => 325,  645 => 319,  641 => 318,  633 => 287,  630 => 286,  626 => 285,  620 => 348,  616 => 346,  613 => 345,  610 => 344,  607 => 339,  604 => 338,  600 => 335,  597 => 331,  594 => 329,  591 => 328,  588 => 325,  585 => 324,  582 => 322,  579 => 321,  576 => 318,  573 => 317,  568 => 314,  565 => 313,  562 => 312,  560 => 309,  559 => 308,  558 => 307,  557 => 306,  556 => 305,  554 => 304,  551 => 303,  548 => 302,  546 => 299,  545 => 298,  544 => 297,  543 => 296,  542 => 295,  540 => 294,  537 => 293,  534 => 291,  531 => 290,  528 => 285,  525 => 284,  523 => 283,  519 => 281,  517 => 280,  514 => 279,  512 => 278,  511 => 277,  510 => 276,  509 => 275,  507 => 274,  503 => 273,  497 => 268,  493 => 266,  491 => 265,  486 => 264,  482 => 262,  480 => 261,  475 => 260,  472 => 259,  468 => 258,  459 => 250,  454 => 249,  452 => 248,  447 => 247,  441 => 244,  438 => 243,  435 => 242,  431 => 241,  423 => 234,  419 => 233,  412 => 224,  408 => 222,  405 => 221,  399 => 218,  394 => 217,  391 => 216,  387 => 213,  381 => 211,  378 => 210,  374 => 208,  371 => 207,  367 => 205,  365 => 204,  360 => 203,  358 => 202,  354 => 201,  351 => 200,  348 => 199,  345 => 198,  342 => 197,  339 => 196,  336 => 195,  333 => 194,  330 => 193,  328 => 190,  327 => 189,  326 => 188,  325 => 187,  324 => 186,  323 => 185,  322 => 184,  321 => 182,  319 => 181,  316 => 180,  314 => 177,  313 => 176,  312 => 174,  310 => 173,  307 => 172,  303 => 171,  296 => 99,  292 => 97,  290 => 96,  285 => 95,  281 => 93,  279 => 92,  275 => 91,  270 => 90,  267 => 89,  263 => 88,  255 => 395,  253 => 394,  247 => 390,  243 => 388,  241 => 387,  240 => 386,  237 => 385,  233 => 370,  231 => 369,  227 => 366,  223 => 353,  221 => 352,  218 => 350,  216 => 273,  213 => 271,  209 => 258,  207 => 257,  204 => 255,  201 => 241,  198 => 240,  196 => 239,  193 => 237,  189 => 233,  187 => 232,  182 => 228,  178 => 171,  176 => 170,  163 => 159,  148 => 146,  146 => 145,  124 => 125,  114 => 118,  101 => 109,  94 => 103,  90 => 88,  88 => 87,  82 => 83,  79 => 81,  75 => 79,  73 => 78,  72 => 77,  53 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/page.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 77, "block" => 88, "include" => 394, "set" => 89);
        static $filters = array("escape" => 109, "clean_class" => 90, "trim" => 277, "striptags" => 277, "render" => 277);
        static $functions = array("file_url" => 109);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'include', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render'],
                ['file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
