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

/* modules/contrib/phpmailer_smtp/templates/phpmailer-smtp.html.twig */
class __TwigTemplate_ff8106a3adc3d04509e09760b40347ac extends Template
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
        // line 24
        $context["classes"] = ((($context["module"] ?? null)) ? (((($context["key"] ?? null)) ? ((($this->sandbox->ensureToStringAllowed(($context["module"] ?? null), 24, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(($context["key"] ?? null), 24, $this->source))) : (""))) : (""));
        // line 25
        yield "<!DOCTYPE html\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>PHPMailer SMTP template</title>
";
        // line 30
        if (($context["css"] ?? null)) {
            // line 31
            yield "    <style type=\"text/css\">
      <!-- ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 32, $this->source), "html", null, true);
            yield " -->
    </style>
";
        }
        // line 35
        yield "  </head>
  <body id=\"phpmailer-smtp-body\"";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        yield ">
    <div id=\"center\">
      <div id=\"main\">
        ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 39, $this->source));
        yield "
      </div>
    </div>
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["module", "key", "css", "attributes", "body"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/phpmailer_smtp/templates/phpmailer-smtp.html.twig";
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
        return array (  69 => 39,  63 => 36,  60 => 35,  54 => 32,  51 => 31,  49 => 30,  42 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/phpmailer_smtp/templates/phpmailer-smtp.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/modules/contrib/phpmailer_smtp/templates/phpmailer-smtp.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 30);
        static $filters = array("escape" => 32, "raw" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
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
