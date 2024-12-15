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

/* __string_template__ec0ebba4d01968054d53c606ad32c35d */
class __TwigTemplate_4e25d77a1ee663fa44a631bf4b5fe0f3 extends Template
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
        <h2 style=\"color: #4CAF50; text-align: center;\">Thank You for Your Submission</h2>

        <p style=\"font-size: 1.1em;\">Dear ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:full_name]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 6, $this->source)), "html", null, true);
        yield ",</p>

        <p style=\"font-size: 1.1em;\">
            Thank you for applying through our Job Application Form. We have received your submission and our team will review it shortly. Here is a summary of your submission:
        </p>

        <table style=\"width: 100%; border-collapse: collapse; margin-top: 15px;\">
            <tr style=\"background-color: #f2f2f2;\">
                <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Field</th>
                <th style=\"border: 1px solid #ddd; padding: 8px; text-align: left;\">Your Input</th>
            </tr>

            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">Full Name</td>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:full_name]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 20, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">Email</td>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 24, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">Phone Number</td>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:phone_number]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 28, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">Current Year of Work Experience</td>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:current_year_of_work_experience]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 32, $this->source)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">Current Annual Salary</td>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webform\Twig\WebformTwigExtension']->webformToken("[webform_submission:values:current_annual_salary]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null), 36, $this->source)), "html", null, true);
        yield "</td>
            </tr>
        </table>

        <p style=\"margin-top: 20px; font-size: 1.1em;\">
            If you have any questions or need further assistance, please feel free to contact us at <a href=\"mailto:hr@yourdomain.com\" style=\"color: #4CAF50; text-decoration: none;\">hr@yourdomain.com</a>.
        </p>

        <p style=\"margin-top: 20px; font-size: 1.1em;\">Best regards,<br>Your Company HR Team</p>
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
        return "__string_template__ec0ebba4d01968054d53c606ad32c35d";
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
        return array (  92 => 36,  85 => 32,  78 => 28,  71 => 24,  64 => 20,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ec0ebba4d01968054d53c606ad32c35d", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array("webform_token" => 6);

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
