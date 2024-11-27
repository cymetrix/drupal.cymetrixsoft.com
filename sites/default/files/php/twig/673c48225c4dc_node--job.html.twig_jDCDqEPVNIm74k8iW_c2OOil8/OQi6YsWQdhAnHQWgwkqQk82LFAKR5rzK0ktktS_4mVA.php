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

/* themes/contrib/dxpr_theme/templates/node--job.html.twig */
class __TwigTemplate_fff39d69cfbf1907a134e7151baf4a86 extends Template
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
<html lang=\"en\">
   <head>
      <meta charset=\"UTF-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
      <title>Your Website</title>
      <meta name=\"robots\" content=\"noindex, nofollow\">
   </head>
   <body>
      <style>
         .job_desc_banner{
         height:434px;
         width:100%;
         background:#E3F2FD;
         position: relative;
         }
         .job_attributes{
         display:flex;
         }
         .job_attributes span{
         background: #1b7ec114;
         margin: 0 15px 0 0;
         padding: 8px;
         font-size: 18px;
         font-weight:600;
         }
         .banner_fields{
         position: absolute;
         top: 30%;
         left: 5%;
         width:80%;
         }
         .cymetrix_button_icon.custom_button::after {
         content: url(data:image/svg+xml;utf8,
         <svg width=\"40\" height=\"20\" viewBox=\"0 0 40 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M6.5 10.6891H36.5351L32.1986 15.0256L33.173 16L39.173 10L33.173 4L32.1986 4.97439L36.5351 9.3109H6.5V10.6891Z\" fill=\"white\"/>
            <circle cx=\"10.5\" cy=\"10\" r=\"9.5\" stroke=\"white\"/>
         </svg>
         );
         position: absolute;
         top: 50%;
         transform: translate(50%, -50%);
         width: 39px;
         height: 20px;
         transition: transform 0.3s ease;
         right: 25%;
         }
         .cymetrix_button_icon.custom_button{
         padding-right: 8%;
         }
         .redirectNavs{
         display: flex;
         justify-content: space-between;
         }
         .redirectNavs a:nth-child(1) svg{
         transform: rotate(180deg);
         }
         .job_sttr_heading{
         font-size:26px;
         font-weight:500;
         }
         h1{
         font-size: 54px;
         font-weight: 700;
         }
      </style>
      ";
        // line 68
        $context["title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68);
        // line 69
        yield "      ";
        $context["body"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69);
        // line 70
        yield "      ";
        $context["field_experience"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_experience", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70);
        // line 71
        yield "      ";
        $context["field_location"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71);
        // line 72
        yield "      ";
        $context["field_work_type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_work_type", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72);
        // line 73
        yield "      ";
        $context["description"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_description", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73);
        // line 74
        yield "      ";
        $context["field_must_have"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_must_have", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74);
        // line 75
        yield "      ";
        $context["nice_to_have"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_nice_to_have", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75);
        // line 76
        yield "      <div class=\"job_desc_banner\" >
         <div class=\"banner_fields\">
            <div class=\"banner-left-border\">
                
\t\t\t    <h6><a class=\"cymetrix_button_icon reverse\" href=\"https://drupal.cymetrixsoft.com/\">Home</a> / <a class=\"\" href=\"https://drupal.cymetrixsoft.com/about-us\">About Us</a> / <a class=\"\" href=\"https://drupal.cymetrixsoft.com/career\">Career </a> / </h6>
               <h1>";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 81, $this->source), "html", null, true);
        yield "</h1>
               <div class=\"job_attributes\">
                  <div class=\"job_attributes_fields\">
                     <span>";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_location"] ?? null), 84, $this->source), "html", null, true);
        yield "</span>
                     <span>";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_experience"] ?? null), 85, $this->source), "html", null, true);
        yield "</span>
                     <span>";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_work_type"] ?? null), 86, $this->source), "html", null, true);
        yield "</span>        
                  </div>
                  <div class=\"job_action\"></div>
               </div>
            </div>
            <br />
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#jobApplicationModal\" class=\"cymetrix_button_icon custom_button\" href=\"#\">Apply Now</a>
         </div>
      </div>
      <div class=\"container\" style=\"padding-top: 60px;padding-bottom: 60px;\">
         <h2 class=\"text-center\" >Job Responsibilities</h2>
         <br>
         <div>
            <div class=\"row\">
               <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Description</span>
               </div>
               <div class=\"col-sm-9\">

                  ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 105, $this->source));
        yield "
               </div>
               <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Must Have</span>
               </div>
               <div class=\"col-sm-9\">
                  ";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_must_have"] ?? null), 111, $this->source));
        yield "
               </div>
               <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Nice To Have</span>
               </div>
               <div class=\"col-sm-9\">
                  ";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["nice_to_have"] ?? null), 117, $this->source));
        yield "
               </div>
               <div class=\"col-sm-3\"></div>
               <div class=\"col-sm-9\">
                  <a href=\"#\" data-toggle=\"modal\" data-target=\"#jobApplicationModal\" class=\"cymetrix_button_icon custom_button\" href=\"#\">Apply Now</a>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"redirectNavs\">
            <a class=\"\" href=\"/job\">
               <svg width=\"39\" height=\"20\" viewBox=\"0 0 39 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M6 10.6891H36.0351L31.6986 15.0256L32.673 16L38.673 10L32.673 4L31.6986 4.97439L36.0351 9.3109H6V10.6891Z\" fill=\"#1B7EC1\"></path>
                  <circle cx=\"10\" cy=\"10\" r=\"9.5\" stroke=\"#1B7EC1\"></circle>
               </svg>
               <span>Go Back To Career</span>
            </a>
            <a class=\"\" href=\"/\">
               <span>Go To Home</span>
               <svg width=\"39\" height=\"20\" viewBox=\"0 0 39 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M6 10.6891H36.0351L31.6986 15.0256L32.673 16L38.673 10L32.673 4L31.6986 4.97439L36.0351 9.3109H6V10.6891Z\" fill=\"#1B7EC1\"></path>
                  <circle cx=\"10\" cy=\"10\" r=\"9.5\" stroke=\"#1B7EC1\"></circle>
               </svg>
            </a>
         </div>
      </div>
   </body>
</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/node--job.html.twig";
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
        return array (  193 => 117,  184 => 111,  175 => 105,  153 => 86,  149 => 85,  145 => 84,  139 => 81,  132 => 76,  129 => 75,  126 => 74,  123 => 73,  120 => 72,  117 => 71,  114 => 70,  111 => 69,  109 => 68,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/node--job.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/node--job.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68);
        static $filters = array("escape" => 81, "raw" => 105);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
