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

/* modules/contrib/captcha/templates/captcha.html.twig */
class __TwigTemplate_df5bd24861b7e385d91f89e00a12ae42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'captcha' => [$this, 'block_captcha'],
            'captcha_display' => [$this, 'block_captcha_display'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "
";
        // line 21
        $context["classes"] = ["captcha", \Drupal\Component\Utility\Html::getClass(("captcha-type-challenge--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =         // line 23
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#captcha_type_challenge"] ?? null) : null), 23, $this->source)))];
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('captcha', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["element", "is_visible", "title", "attributes", "description"]);        return; yield '';
    }

    public function block_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "  ";
        if (($context["is_visible"] ?? null)) {
            // line 29
            yield "    ";
            yield from $this->unwrap()->yieldBlock('captcha_display', $context, $blocks);
            // line 50
            yield "  ";
        } else {
            // line 51
            yield "    ";
            // line 53
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 53, $this->source), "html", null, true);
            yield "
  ";
        }
        return; yield '';
    }

    // line 29
    public function block_captcha_display($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "      ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
            // line 31
            yield "        <fieldset ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            yield ">
          <legend class=\"captcha__title js-form-required form-required\">
            ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "html", null, true);
            yield "
          </legend>
        ";
        } else {
            // line 36
            yield "          <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            yield ">
        ";
        }
        // line 38
        yield "          <div class=\"captcha__element\">
            ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 39, $this->source), "html", null, true);
        yield "
          </div>
          ";
        // line 41
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
            // line 42
            yield "            <div class=\"captcha__description description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 42, $this->source), "html", null, true);
            yield "</div>
          ";
        }
        // line 44
        yield "      ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
            // line 45
            yield "          </fieldset>
      ";
        } else {
            // line 47
            yield "        </div>
      ";
        }
        // line 49
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/captcha/templates/captcha.html.twig";
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
        return array (  132 => 49,  128 => 47,  124 => 45,  121 => 44,  115 => 42,  113 => 41,  108 => 39,  105 => 38,  99 => 36,  93 => 33,  87 => 31,  84 => 30,  80 => 29,  71 => 53,  69 => 51,  66 => 50,  63 => 29,  60 => 28,  51 => 27,  48 => 26,  46 => 23,  45 => 21,  42 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/captcha/templates/captcha.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/modules/contrib/captcha/templates/captcha.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "block" => 27, "if" => 28);
        static $filters = array("clean_class" => 23, "escape" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
                [],
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
