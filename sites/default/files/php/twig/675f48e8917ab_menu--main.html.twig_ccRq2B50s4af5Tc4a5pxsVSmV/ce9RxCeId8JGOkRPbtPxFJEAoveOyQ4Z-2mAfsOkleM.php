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

/* themes/contrib/dxpr_theme/templates/menu--main.html.twig */
class __TwigTemplate_958242d0495819c0b954ccef29030caa extends Template
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
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "
";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_build_menu", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 3, $context, $this->getSourceContext()));
        yield "

";
        // line 21
        yield "
";
        // line 56
        yield "




";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 5
    public function macro_build_menu($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 7
                yield "    ";
                // line 8
                $context["ul_classes"] = [(((                // line 9
($context["menu_level"] ?? null) == 0)) ? ("navbar-nav justify-content-end flex-wrap megamenu") : ("")), (((                // line 10
($context["menu_level"] ?? null) > 0)) ? ("dropdown-menu") : ("")), ("nav-level-" . $this->sandbox->ensureToStringAllowed(                // line 11
($context["menu_level"] ?? null), 11, $this->source))];
                // line 14
                yield "    <ul";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["ul_classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                yield ">
      ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 16
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_add_link", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["ul_classes"] ?? null)], "method", false, false, true, 16), ($context["menu_level"] ?? null)], 16, $context, $this->getSourceContext()));
                    yield "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                yield "    </ul>
  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function macro_add_link($__item__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "  ";
            // line 24
            $context["list_item_classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,             // line 26
($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 26)) ? ("dropdown") : (""))];
            // line 29
            yield "  ";
            // line 30
            $context["link_class"] = [(((            // line 31
($context["menu_level"] ?? null) == 0)) ? ("nav-link") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,             // line 32
($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 32)) ? ("active") : ("")), ((((            // line 33
($context["menu_level"] ?? null) == 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 33) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "is_collapsed", [], "any", false, false, true, 33)))) ? ("dropdown-toggle") : ("")), (((            // line 34
($context["menu_level"] ?? null) > 0)) ? ("dropdown-item mycustomemenuclass") : (""))];
            // line 37
            yield "  ";
            // line 38
            $context["toggle_class"] = [];
            // line 41
            yield "  <li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 41), "addClass", [($context["list_item_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            yield ">
      
    ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 43)) {
                // line 44
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 44), 44, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 44), 44, $this->source), ["class" => ($context["link_class"] ?? null), "aria-haspopup" => "false", "aria-expanded" => "false"]), "html", null, true);
                yield "
      ";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_build_menu", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 45), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 45, $context, $this->getSourceContext()));
                yield "
      <span class=\"menu-item-description\">";
                // line 46
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 46), "pluginDefinition", [], "any", false, false, true, 46), "description", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                yield "</span>
    ";
            } else {
                // line 48
                yield "      <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["link_class"] ?? null), 48, $this->source), " "), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "</a>
      ";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 49), "pluginDefinition", [], "any", false, false, true, 49), "description", [], "any", false, false, true, 49)) {
                    // line 50
                    yield "        <span class=\"menu-item-description some\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 50), "pluginDefinition", [], "any", false, false, true, 50), "description", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    yield "</span>
      ";
                }
                // line 52
                yield "      
    ";
            }
            // line 54
            yield "  </li>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/menu--main.html.twig";
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
        return array (  188 => 54,  184 => 52,  178 => 50,  176 => 49,  167 => 48,  162 => 46,  158 => 45,  153 => 44,  151 => 43,  145 => 41,  143 => 38,  141 => 37,  139 => 34,  138 => 33,  137 => 32,  136 => 31,  135 => 30,  133 => 29,  131 => 26,  130 => 24,  128 => 23,  114 => 22,  106 => 18,  97 => 16,  93 => 15,  88 => 14,  86 => 11,  85 => 10,  84 => 9,  83 => 8,  81 => 7,  78 => 6,  64 => 5,  53 => 56,  50 => 21,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/menu--main.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 5, "if" => 6, "set" => 8, "for" => 15);
        static $filters = array("escape" => 14, "join" => 48);
        static $functions = array("link" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape', 'join'],
                ['link'],
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
