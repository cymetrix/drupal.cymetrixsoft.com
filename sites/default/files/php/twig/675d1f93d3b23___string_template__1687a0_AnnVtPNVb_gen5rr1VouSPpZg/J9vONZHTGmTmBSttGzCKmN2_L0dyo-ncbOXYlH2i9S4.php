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

/* __string_template__1687a09e7c8866eb4a98b79c6214819c */
class __TwigTemplate_f0ea2d7c5a687664af015093a99e2852 extends Template
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
        yield "<html>
<body style=\"font-family: Arial, sans-serif; color: #333; padding: 20px; background-color: #f9f9f9;\">
    <div style=\"max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 5px; padding: 20px; background-color: #ffffff;\">
      <h2 style=\"color: #4CAF50; text-align: center;\">New Contact Form Submission</h2>

      <p style=\"font-size: 1.1em;\">Hello,</p>
      <p style=\"font-size: 1.1em;\">You have received a new message from the contact form on your website. Here are the details:</p>

      <table style=\"width: 100%; border-collapse: collapse; margin-top: 15px;\">
          <tr style=\"background-color: #f2f2f2;\">
              <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Field</th>
              <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Submitted Information</th>
          </tr>

          <tr>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">Name</td>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:name:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 17, $this->source)), "html", null, true);
        yield "</td>
          </tr>
          <tr>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">Email</td>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:email:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 21, $this->source)), "html", null, true);
        yield "</td>
          </tr>
          <tr>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">Subject</td>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:subject:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 25, $this->source)), "html", null, true);
        yield "</td>
          </tr>
          <tr>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">Message</td>
              <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:message:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 29, $this->source)), "html", null, true);
        yield "</td>
          </tr>

      </table>

      <p style=\"margin-top: 20px; font-size: 1.1em;\">Best regards,<br>Your Website Team</p>
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
        return "__string_template__1687a09e7c8866eb4a98b79c6214819c";
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
        return array (  79 => 29,  72 => 25,  65 => 21,  58 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1687a09e7c8866eb4a98b79c6214819c", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
        static $functions = array("webform_token" => 17);

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
