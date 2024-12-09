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

/* __string_template__6d10fd32072423381802dfe5706142d0 */
class __TwigTemplate_11c0b59f1ea9918bb6b543e14eb3d13f extends Template
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
        yield "<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 20px;
        }
        h2 {
            color: #4CAF50;
            text-align: center;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .details-table th, .details-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .details-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class=\"email-container\">
        <h2>Thank You for Contacting Cymetrix Software!</h2>
        
        <p>Hello ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:name:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 42, $this->source)), "html", null, true);
        yield ",</p>
        <p>We have received your message and will get back to you as soon as possible. Below are the details you provided:</p>

        <table class=\"details-table\">
            <tr>
                <th>Submission Date</th>
                <td>";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:created]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 48, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Submitted By</th>
                <td>";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:user]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 52, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:name:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 56, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:email:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 60, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:subject:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 64, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:message:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 68, $this->source)), "html", null, true);
        yield "</td>
            </tr>
        </table>

        <p style=\"margin-top: 20px;\">We appreciate you reaching out to us. If you have any additional questions, feel free to reply to this email.</p>

        <p>Best regards,<br>Cymetrix Solutions Team</p>
    </div>
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["webform_submission"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__6d10fd32072423381802dfe5706142d0";
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
        return array (  127 => 68,  120 => 64,  113 => 60,  106 => 56,  99 => 52,  92 => 48,  83 => 42,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6d10fd32072423381802dfe5706142d0", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 42);
        static $functions = array("webform_token" => 42);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['webform_token'],
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
