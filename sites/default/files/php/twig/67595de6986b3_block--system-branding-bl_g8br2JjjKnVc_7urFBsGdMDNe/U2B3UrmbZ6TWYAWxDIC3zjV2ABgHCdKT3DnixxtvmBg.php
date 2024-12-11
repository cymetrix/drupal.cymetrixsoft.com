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

/* themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig */
class __TwigTemplate_11dae99e11a3a6a606d3b891a424d0c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name"]);        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "  ";
        if ((($context["site_logo"] ?? null) || ($context["site_name"] ?? null))) {
            // line 19
            yield "  <div class=\"wrap-branding\">
  ";
        }
        // line 21
        yield "  ";
        if (($context["site_logo"] ?? null)) {
            // line 22
            yield "    <a class=\"logo navbar-btn\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\">
      <img id=\"logo\" src=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 23, $this->source), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" />
    </a>
  ";
        }
        // line 26
        yield "  ";
        if (($context["site_name"] ?? null)) {
            // line 27
            yield "    <a class=\"name navbar-brand\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 27, $this->source), "html", null, true);
            yield "</a>
  ";
        }
        // line 29
        yield "  ";
        if ((($context["site_logo"] ?? null) || ($context["site_name"] ?? null))) {
            // line 30
            yield "  </div>
  ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  91 => 30,  88 => 29,  78 => 27,  75 => 26,  67 => 23,  60 => 22,  57 => 21,  53 => 19,  50 => 18,  41 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 17, "if" => 18);
        static $filters = array("t" => 22, "escape" => 23);
        static $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                ['path'],
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
