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
        yield "            <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\"><img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\"></a>
        </a>
        

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
            ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        yield "
        </div>
    </header>
    
    <header class=\"mobile_nav navbar navbar-expand-lg navbar-light\" >
        <div class=\"container cymetrix_container\">
            <div class=\"flexNav\">
                <a class=\"mob_logo\" href=\"";
        // line 126
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\"><img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\"></a>
    
    
            <div class=\"nav_contact\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#contactUsModal\">Contact Us
                <img src=\"";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "sites/default/files/2024-02/Group%207.png\" alt=\"contact icon\">
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
        // line 146
        yield "                    ";
        // line 147
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
        // line 160
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        yield "
                </div>    


        </nav>
 
 
 
 
 
";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 171) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 171))) {
            // line 172
            yield "  ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 229
        yield "
<div class=\"wrap-containers\">

";
        // line 233
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 233)) {
            // line 234
            yield "  ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
        }
        // line 238
        yield "
";
        // line 240
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 240) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 240), "page_title_home_hide", [], "any", false, false, true, 240) && ($context["is_front"] ?? null)))) {
            // line 241
            yield "
  ";
            // line 242
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        }
        // line 256
        yield "
";
        // line 258
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 258)) {
            // line 259
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_top', $context, $blocks);
        }
        // line 272
        yield "
";
        // line 274
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 351
        yield "
";
        // line 353
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 353)) {
            // line 354
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_bottom', $context, $blocks);
        }
        // line 367
        yield "</div>

";
        // line 370
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 370)) {
            // line 371
            yield "  ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        // line 386
        yield "
";
        // line 387
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 387), "getString", [], "method", false, false, true, 387) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 387), "boxed_layout", [], "any", false, false, true, 387)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 388
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 388), "getString", [], "method", false, false, true, 388) == "boxed"))) {
            // line 389
            yield "</div><!-- end dxpr-theme-boxed-container -->
";
        }
        // line 391
        yield "



";
        // line 395
        yield from         $this->loadTemplate("themes/contrib/dxpr_theme/templates/footer.html.twig", "themes/contrib/dxpr_theme/templates/page.html.twig", 395)->unwrap()->yield($context);
        // line 396
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

    // line 172
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 173), "header_position", [], "any", false, false, true, 173)) {
            // line 174
            yield "      ";
            // line 175
            $context["navbar_classes"] = ["navbar dxpr-theme-header dxpr-theme-header--top", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 177
($context["theme"] ?? null), "settings", [], "any", false, false, true, 177), "navbar_position", [], "any", false, false, true, 177)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 177), "navbar_position", [], "any", false, false, true, 177), 177, $this->source))) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 178
($context["theme"] ?? null), "settings", [], "any", false, false, true, 178), "header_side_align", [], "any", false, false, true, 178)];
            // line 181
            yield "    ";
        } else {
            // line 182
            yield "      ";
            // line 183
            $context["navbar_classes"] = ["navbar dxpr-theme-header clearfix", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 185
($context["theme"] ?? null), "settings", [], "any", false, false, true, 185), "header_position", [], "any", false, false, true, 185)) ? ("dxpr-theme-header--side") : ("dxpr-theme-header--top")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 186
($context["theme"] ?? null), "settings", [], "any", false, false, true, 186), "navbar_position", [], "any", false, false, true, 186)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 186), "navbar_position", [], "any", false, false, true, 186), 186, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 187
($context["theme"] ?? null), "settings", [], "any", false, false, true, 187), "header_top_layout", [], "any", false, false, true, 187)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 187), "header_top_layout", [], "any", false, false, true, 187), 187, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 188
($context["theme"] ?? null), "settings", [], "any", false, false, true, 188), "header_style", [], "any", false, false, true, 188)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 188), "header_style", [], "any", false, false, true, 188), 188, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 189
($context["theme"] ?? null), "settings", [], "any", false, false, true, 189), "menu_hover", [], "any", false, false, true, 189)) ? (("dxpr-theme-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 189), "menu_hover", [], "any", false, false, true, 189), 189, $this->source)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 190
($context["theme"] ?? null), "settings", [], "any", false, false, true, 190), "header_top_fixed", [], "any", false, false, true, 190) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 190), "header_top_sticky", [], "any", false, false, true, 190))) ? ("dxpr-theme-header--sticky") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 191
($context["theme"] ?? null), "settings", [], "any", false, false, true, 191), "header_top_fixed", [], "any", false, false, true, 191) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 191), "header_top_sticky", [], "any", false, false, true, 191))) ? ("dxpr-theme-header--fixed") : (""))];
            // line 194
            yield "    ";
        }
        // line 195
        yield "    ";
        $context["mark_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 195), "mark_menu_with_children", [], "any", false, false, true, 195)) ? ("dxpr-theme-menu--has-children") : (""));
        // line 196
        yield "    ";
        $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "removeClass", ["container"], "method", false, false, true, 196), "addClass", [($context["navbar_classes"] ?? null)], "method", false, false, true, 196);
        // line 197
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 197), "header_top_fixed", [], "any", false, false, true, 197) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 197), "header_top_sticky", [], "any", false, false, true, 197))) {
            // line 198
            yield "      ";
            $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "setAttribute", ["data-spy", "affix"], "method", false, false, true, 198), "setAttribute", ["data-offset-top", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 198), "header_top_height_sticky_offset", [], "any", false, false, true, 198)], "method", false, false, true, 198);
            // line 199
            yield "    ";
        }
        // line 200
        yield "    ";
        $context["hamburger_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 200), "hamburger_menu", [], "any", false, false, true, 200)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 200), "hamburger_menu", [], "any", false, false, true, 200)) : ("three-dash"));
        // line 201
        yield "
    <header";
        // line 202
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 202, $this->source), "html", null, true);
        yield " style=\"display:none;\">
      ";
        // line 203
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 203), "full_width_containers", [], "any", false, false, true, 203), "cnt_header_nav", [], "any", false, false, true, 203)) ? ("dxpr-theme-fluid") : ("container"));
        // line 204
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 204, $this->source), "html", null, true);
        yield " navbar-container\">
        ";
        // line 205
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 205), "full_width_containers", [], "any", false, false, true, 205), "cnt_header_nav", [], "any", false, false, true, 205)) {
            // line 206
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 208
        yield "        <div class=\"navbar-header\">
          ";
        // line 209
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
        yield "
          ";
        // line 211
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 211)) {
            // line 212
            yield "            <a id=\"dxpr-theme-menu-toggle\" href=\"#\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hamburger_menu"] ?? null), 212, $this->source), "html", null, true);
            yield "\"><span></span><div class=\"screenreader-text visually-hidden\">Toggle menu</div></a>
          ";
        }
        // line 214
        yield "        </div>

        ";
        // line 217
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 217)) {
            // line 218
            yield "            <nav role=\"navigation\" id=\"dxpr-theme-main-menu\" class=\"dxpr-theme-main-menu ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mark_menu"] ?? null), 218, $this->source), "html", null, true);
            yield "\">
            ";
            // line 219
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            yield "
            </nav>
        ";
        }
        // line 222
        yield "        ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 222), "full_width_containers", [], "any", false, false, true, 222), "cnt_header_nav", [], "any", false, false, true, 222)) {
            // line 223
            yield "          </div></div>
        ";
        }
        // line 225
        yield "      </div>
    </header>
  ";
        return; yield '';
    }

    // line 234
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 242
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 243
        yield "  ";
        if (($context["title_bg_image_path"] ?? null)) {
            // line 244
            yield "    <style>
      #page-title-full-width-container::after{ background-image:url(";
            // line 245
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["title_bg_image_path"] ?? null), 245, $this->source)), "html", null, true);
            yield ");}
    </style>
  ";
        }
        // line 248
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null), 248, $this->source), "html", null, true);
        yield " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 249
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 249), "full_width_containers", [], "any", false, false, true, 249), "cnt_page_title", [], "any", false, false, true, 249)) ? ("dxpr-theme-fluid") : ("container"));
        // line 250
        yield "      <header role=\"banner\" id=\"page-title\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 250, $this->source), "html", null, true);
        yield " page-title-container\">
        ";
        // line 251
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
        yield "
      </header>
    </div>
  ";
        return; yield '';
    }

    // line 259
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 260
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 260), "full_width_containers", [], "any", false, false, true, 260), "cnt_content_top", [], "any", false, false, true, 260)) ? ("dxpr-theme-fluid") : ("container"));
        // line 261
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 261, $this->source), "html", null, true);
        yield " content-top-container\">
      ";
        // line 262
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 262), "full_width_containers", [], "any", false, false, true, 262), "cnt_content_top", [], "any", false, false, true, 262)) {
            // line 263
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 265
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
        yield "
      ";
        // line 266
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 266), "full_width_containers", [], "any", false, false, true, 266), "cnt_content_top", [], "any", false, false, true, 266)) {
            // line 267
            yield "      </div></div>
      ";
        }
        // line 269
        yield "    </div>
  ";
        return; yield '';
    }

    // line 274
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 275
        yield "  ";
        $context["container"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 275), "full_width_containers", [], "any", false, false, true, 275), "cnt_content", [], "any", false, false, true, 275) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 276
($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 276), "getString", [], "method", false, false, true, 276) == "dxpr-theme-util-full-width-content")) || (((        // line 277
($context["node"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 277), "full_width_content_types", [], "any", false, false, true, 277), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 277), [], "any", false, false, true, 277)) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 278
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 278), 278, $this->source))))) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 279
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 279), 279, $this->source))))))) ? ("") : ("container"));
        // line 280
        yield "  <div role=\"main\" class=\"main-container  js-quickedit-main-content clearfix\">
    ";
        // line 281
        if ((($context["container"] ?? null) != "")) {
            // line 282
            yield "    <div class=\"row\">
    ";
        }
        // line 284
        yield "      ";
        // line 285
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 285))))) {
            // line 286
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 291
            yield "      ";
        }
        // line 292
        yield "
      ";
        // line 294
        yield "      ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 294), "getString", [], "method", false, false, true, 294)) {
            // line 295
            yield "        ";
            // line 296
            $context["content_classes"] = [(((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 297
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 297), 297, $this->source)))) && Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 297), 297, $this->source)))))) ? ("col-sm-6") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 298
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 298), 298, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 298), 298, $this->source))))))) ? ("col-sm-9") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 299
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 299), 299, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 299), 299, $this->source))))))) ? ("col-sm-9") : ("")), (((((            // line 300
($context["container"] ?? null) != "") && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 300), 300, $this->source)))))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 300), 300, $this->source))))))) ? ("col-sm-12") : (""))];
            // line 303
            yield "      ";
        } else {
            // line 304
            yield "        ";
            $context["col"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 304), "getString", [], "method", false, false, true, 304);
            // line 305
            yield "        ";
            // line 306
            $context["content_classes"] = [(((            // line 307
($context["col"] ?? null) == "dxpr-theme-util-content-center-4-col")) ? ("col-md-4 col-md-offset-4") : ("")), (((            // line 308
($context["col"] ?? null) == "dxpr-theme-util-content-center-6-col")) ? ("col-md-6 col-md-offset-3") : ("")), (((            // line 309
($context["col"] ?? null) == "dxpr-theme-util-content-center-8-col")) ? ("col-md-8 col-md-offset-2") : ("")), (((            // line 310
($context["col"] ?? null) == "dxpr-theme-util-content-center-10-col")) ? ("col-md-10 col-md-offset-1") : (""))];
            // line 313
            yield "      ";
        }
        // line 314
        yield "
      <section";
        // line 315
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 315), 315, $this->source), "html", null, true);
        yield ">

        ";
        // line 318
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 319
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 322
            yield "        ";
        }
        // line 323
        yield "
        ";
        // line 325
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 325)) {
            // line 326
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 329
            yield "        ";
        }
        // line 330
        yield "
        ";
        // line 332
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 336
        yield "      </section>

      ";
        // line 339
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 339))))) {
            // line 340
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 345
            yield "      ";
        }
        // line 346
        yield "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 347
            yield "    </div><!-- end .ow -->
    ";
        }
        // line 349
        yield "  </div><!-- end main-container -->
";
        return; yield '';
    }

    // line 286
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 288
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        return; yield '';
    }

    // line 319
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 320
        yield "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 320, $this->source), "html", null, true);
        yield "</ul>
          ";
        return; yield '';
    }

    // line 326
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 327
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
        yield "
          ";
        return; yield '';
    }

    // line 332
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 333
        yield "          <a id=\"main-content\"></a>
          ";
        // line 334
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    // line 340
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 341
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 342
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        return; yield '';
    }

    // line 354
    public function block_content_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 355
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 355), "full_width_containers", [], "any", false, false, true, 355), "cnt_content_bottom", [], "any", false, false, true, 355)) ? ("dxpr-theme-fluid") : ("container"));
        // line 356
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 356, $this->source), "html", null, true);
        yield " content-bottom-container\">
      ";
        // line 357
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 357), "full_width_containers", [], "any", false, false, true, 357), "cnt_content_bottom", [], "any", false, false, true, 357)) {
            // line 358
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 360
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
        yield "
      ";
        // line 361
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 361), "full_width_containers", [], "any", false, false, true, 361), "cnt_content_bottom", [], "any", false, false, true, 361)) {
            // line 362
            yield "      </div></div>
      ";
        }
        // line 364
        yield "    </div>
  ";
        return; yield '';
    }

    // line 371
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 372
        yield "    <footer class=\"dxpr-theme-footer clearfix\" role=\"contentinfo\">
      ";
        // line 373
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 373), "full_width_containers", [], "any", false, false, true, 373), "cnt_footer", [], "any", false, false, true, 373)) ? ("dxpr-theme-fluid") : ("container"));
        // line 374
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 374, $this->source), "html", null, true);
        yield " footer-container\">
        ";
        // line 375
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 375), "full_width_containers", [], "any", false, false, true, 375), "cnt_footer", [], "any", false, false, true, 375)) {
            // line 376
            yield "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 378
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 378), 378, $this->source), "html", null, true);
        yield "
        ";
        // line 379
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 379), "full_width_containers", [], "any", false, false, true, 379), "cnt_footer", [], "any", false, false, true, 379)) {
            // line 380
            yield "        </div></div>
        ";
        }
        // line 382
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
        return array (  768 => 382,  764 => 380,  762 => 379,  757 => 378,  753 => 376,  751 => 375,  746 => 374,  744 => 373,  741 => 372,  737 => 371,  731 => 364,  727 => 362,  725 => 361,  720 => 360,  716 => 358,  714 => 357,  709 => 356,  706 => 355,  702 => 354,  694 => 342,  691 => 341,  687 => 340,  680 => 334,  677 => 333,  673 => 332,  665 => 327,  661 => 326,  653 => 320,  649 => 319,  641 => 288,  638 => 287,  634 => 286,  628 => 349,  624 => 347,  621 => 346,  618 => 345,  615 => 340,  612 => 339,  608 => 336,  605 => 332,  602 => 330,  599 => 329,  596 => 326,  593 => 325,  590 => 323,  587 => 322,  584 => 319,  581 => 318,  576 => 315,  573 => 314,  570 => 313,  568 => 310,  567 => 309,  566 => 308,  565 => 307,  564 => 306,  562 => 305,  559 => 304,  556 => 303,  554 => 300,  553 => 299,  552 => 298,  551 => 297,  550 => 296,  548 => 295,  545 => 294,  542 => 292,  539 => 291,  536 => 286,  533 => 285,  531 => 284,  527 => 282,  525 => 281,  522 => 280,  520 => 279,  519 => 278,  518 => 277,  517 => 276,  515 => 275,  511 => 274,  505 => 269,  501 => 267,  499 => 266,  494 => 265,  490 => 263,  488 => 262,  483 => 261,  480 => 260,  476 => 259,  467 => 251,  462 => 250,  460 => 249,  455 => 248,  449 => 245,  446 => 244,  443 => 243,  439 => 242,  431 => 235,  427 => 234,  420 => 225,  416 => 223,  413 => 222,  407 => 219,  402 => 218,  399 => 217,  395 => 214,  389 => 212,  386 => 211,  382 => 209,  379 => 208,  375 => 206,  373 => 205,  368 => 204,  366 => 203,  362 => 202,  359 => 201,  356 => 200,  353 => 199,  350 => 198,  347 => 197,  344 => 196,  341 => 195,  338 => 194,  336 => 191,  335 => 190,  334 => 189,  333 => 188,  332 => 187,  331 => 186,  330 => 185,  329 => 183,  327 => 182,  324 => 181,  322 => 178,  321 => 177,  320 => 175,  318 => 174,  315 => 173,  311 => 172,  304 => 99,  300 => 97,  298 => 96,  293 => 95,  289 => 93,  287 => 92,  283 => 91,  278 => 90,  275 => 89,  271 => 88,  263 => 396,  261 => 395,  255 => 391,  251 => 389,  249 => 388,  248 => 387,  245 => 386,  241 => 371,  239 => 370,  235 => 367,  231 => 354,  229 => 353,  226 => 351,  224 => 274,  221 => 272,  217 => 259,  215 => 258,  212 => 256,  209 => 242,  206 => 241,  204 => 240,  201 => 238,  197 => 234,  195 => 233,  190 => 229,  186 => 172,  184 => 171,  171 => 160,  156 => 147,  154 => 146,  137 => 131,  127 => 126,  117 => 119,  101 => 109,  94 => 103,  90 => 88,  88 => 87,  82 => 83,  79 => 81,  75 => 79,  73 => 78,  72 => 77,  53 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/page.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 77, "block" => 88, "include" => 395, "set" => 89);
        static $filters = array("escape" => 109, "clean_class" => 90, "trim" => 278, "striptags" => 278, "render" => 278);
        static $functions = array("url" => 109, "file_url" => 109);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'include', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render'],
                ['url', 'file_url'],
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
