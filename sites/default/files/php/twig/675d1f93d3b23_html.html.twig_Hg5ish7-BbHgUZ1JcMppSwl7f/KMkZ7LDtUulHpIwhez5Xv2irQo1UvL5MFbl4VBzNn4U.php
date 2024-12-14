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

/* themes/contrib/dxpr_theme/templates/html.html.twig */
class __TwigTemplate_20fb271b09d686fe3ce11971bf20696d extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["html_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "sticky_footer", [], "any", false, false, true, 49) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "boxed_layout", [], "any", false, false, true, 49))) ? ("html--dxpr-theme-sticky-footer") : (""))];
        // line 53
        $context["body_classes"] = ["html", ((        // line 55
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 56
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 56, $this->source))))), ((        // line 57
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 57, $this->source)))) : ("")), ((        // line 58
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "navbar_position", [], "any", false, false, true, 59)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "navbar_position", [], "any", false, false, true, 59), 59, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 60)) ? ("has-glyphicons") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "header_position", [], "any", false, false, true, 61)) ? ("body--dxpr-theme-header-side") : ("body--dxpr-theme-header-top")), ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "header_position", [], "any", false, false, true, 62) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "header_style", [], "any", false, false, true, 62) != "overlay"))) ? ("body--dxpr-theme-header-not-overlay") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "header_position", [], "any", false, false, true, 63)) ? (("body--dxpr-theme-header-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "header_style", [], "any", false, false, true, 63), 63, $this->source)))) : ("")), (((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_position", [], "any", false, false, true, 64) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_top_sticky", [], "any", false, false, true, 64)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_top_fixed", [], "any", false, false, true, 64))) ? ("body--dxpr-theme-header-fixed") : ("")), ((CoreExtension::inFilter(        // line 65
($context["page_title"] ?? null), Twig\Extension\CoreExtension::keys($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_hide_regions", [], "any", false, false, true, 65), "getValue", [], "any", false, false, true, 65), 65, $this->source)))) ? ("body--primary-tabs-float") : (""))];
        // line 68
        if (($context["body_bg_image_path"] ?? null)) {
            // line 69
            yield "  ";
            $context["style"] = (("background-image:url(" . $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["body_bg_image_path"] ?? null), 69, $this->source))) . ");");
            // line 70
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["style", ($context["style"] ?? null)], "method", false, false, true, 70);
        }
        // line 72
        yield "<!DOCTYPE html>
<html ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [($context["html_classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 75, $this->source));
        yield "\">
    <title>";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 76, $this->source), " | "));
        yield "</title>
    <style>ul.dropdown-menu {display: none;}</style>
    <css-placeholder token=\"";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source));
        yield "\">
    <js-placeholder token=\"";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 79, $this->source));
        yield "\">
        <meta name=\"msvalidate.01\" content=\"348E26D0D7372258AF71AE3AFC1E3A6F\" />
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TDG4N2Z');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TDG4N2Z\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  </head>
  <body";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
        yield ">
  ";
        // line 95
        $context["breakpoint"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 95), "header_mobile_breakpoint", [], "any", false, false, true, 95) > 4099)) ? ("99999") : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 95), "header_mobile_breakpoint", [], "any", false, false, true, 95)));
        // line 96
        yield "  <script>
  var dxpr_themeNavBreakpoint = ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breakpoint"] ?? null), 97, $this->source), "html", null, true);
        yield ";
  var dxpr_themeWindowWidth = window.innerWidth;
  if (dxpr_themeWindowWidth > dxpr_themeNavBreakpoint) {
    document.body.className += ' body--dxpr-theme-nav-desktop';
  }
  else {
    document.body.className += ' body--dxpr-theme-nav-mobile';
  }
  </script>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 109, $this->source), "html", null, true);
        yield "
    ";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 110, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 111, $this->source));
        yield "\">
    ";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 112, $this->source), "html", null, true);
        yield "
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "logged_in", "root_path", "node_type", "db_offline", "page_title", "node", "body_bg_image_path", "html_attributes", "placeholder_token", "head_title", "page_top", "page", "page_bottom"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/html.html.twig";
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
        return array (  143 => 112,  139 => 111,  135 => 110,  131 => 109,  126 => 107,  113 => 97,  110 => 96,  108 => 95,  104 => 94,  86 => 79,  82 => 78,  77 => 76,  73 => 75,  68 => 73,  65 => 72,  61 => 70,  58 => 69,  56 => 68,  54 => 65,  53 => 64,  52 => 63,  51 => 62,  50 => 61,  49 => 60,  48 => 59,  47 => 58,  46 => 57,  45 => 56,  44 => 55,  43 => 53,  41 => 49,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/html.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 68);
        static $filters = array("clean_class" => 56, "keys" => 65, "escape" => 73, "raw" => 75, "safe_join" => 76, "t" => 107);
        static $functions = array("file_url" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'keys', 'escape', 'raw', 'safe_join', 't'],
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
