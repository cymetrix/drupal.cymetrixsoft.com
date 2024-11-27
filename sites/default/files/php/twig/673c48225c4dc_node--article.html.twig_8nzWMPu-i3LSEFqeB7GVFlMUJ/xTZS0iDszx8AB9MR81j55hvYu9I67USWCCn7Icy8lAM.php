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

/* themes/contrib/dxpr_theme/templates/node--article.html.twig */
class __TwigTemplate_80df8ee20d530feb432e0004e60853b6 extends Template
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
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        yield "</title>
\t<link rel=\"stylesheet\" href=\"path/to/your/custom/styles.css\">
</head>
<body>
\t<style>
\t
\t\t\t.single-blog-content p:first-child {
    background-color: #f1f7fb;
    padding: 20px 20px;
    border: solid 2px #1b7ec1;
    border-radius: 10px;
    font-weight: 600;
    font-style: italic;
    font-size: 18px !important;
}

\t.single-blog-content p{font-size: 16px;}

.single-blog-content ol{ margin-left: 20px;}   \t
.single-blog-content ol li{margin-bottom: 20px; font-size: 16px!important;}
.single-blog-content ul{ margin-left: 20px;}   
.single-blog-content ul li::marker { color: #a9a8a8;font-size: 20px;}
.single-blog-content ul li{margin-bottom: 20px; font-size: 16px!important;}

.single-blog-content h2 {font-size:23px!important;  font-weight:600; line-height:28px!important;}
.single-blog-content h3 {font-size:18px!important;  font-weight:600;}


.single-blog-content h2 {
    font-size: 19px !important;
    font-weight: 600;
    line-height: 25px !important;
}

.blog-title h1 {
              
                font-size:30px!important;
        font-weight: 800;
        }

\t\t@media screen and (max-width: 991px){
\t\t    
\t\t    
\t\t    
\t\t.single_blog_content p{
            font-weight: 400;
            font-size: 16px !important;
            line-height: 23px !important;
\t\t}
\t\t

\t\t
\t\t.blog-title {
            position: absolute;

            width: 100% !important;
                left: 3% !important;
                    top: 25% !important;
        }
        .blog-title h1 {
              
                font-size: 20px!important;
        font-weight: 800;
        }
}

\t
\t\t.featured-blog-title h4 a {
            text-decoration: none;
            font-size: 18px;
            color: #161616;
            font-weight: 600;
            line-height: 21.11px;
\t\t}
.field--name-body.field--type-text-with-summary ul li{
    font-weight: 400;
    font-size: 18px ;
    line-height: 24px;
}

 .single_blog_content ul {
        padding-left: 2em !important;
}
\t\t.main-container section.col-sm-12 {
\t\t\tpadding: 0;
\t\t}
\t\t.region-content {
\t\t\tpadding: 0;
\t\t}
\t\t
\t\t.field.field--name-body.field--type-text-with-summary h6{
\t\t\tline-height: 32px;
\t\t\tbackground: #F1F7FB;
\t\t\tpadding: 20px;
\t\t\tborder: 1px solid #1B7EC1;
\t\t\tfont-size: 24px;
\t\t\tborder-radius: 15px;
\t\t}
\t\t#single_blog_banner{
\t\t\twidth:100%;
\t\t\theight:434px;
\t\t\tbackground-color:#e3f2fd;
\t\t\tposition:relative;
\t\t\tz-index: -1;
\t\t}
\t\t.blog-title{
\t\t\tposition:absolute;
\t\t\ttop: 25%;
\t\t\tbottom: 40%;
\t\t\twidth: 80%;
\t\t}
\t\t.blog-title{
\t\t\tfont-weight:700;
\t\t\tfont-size:54px;
\t\t\t/*border-left: 4px solid #1B7EC1;*/
\t\t\tpadding: 15px;
\t\t}
\t\t
\t\t.featured-blog-img img{
\t\t\twidth:212px;
\t\t\theight:140px;
\t\t\tobject-fit:contain;
\t\t}
\t\t.featured-blog-title h4{
\t\t\tfont-weight:500;
\t\t\tfont-size:18px;
\t\t}
\t\t.featured-blog-title{
\t\t\tmargin-left: 15px;
\t\t}
\t\t.featured-blog-post{
\t\t\tdisplay:flex;
\t\t\tmargin: 15px auto;
\t\t}
\t\t.single_content img{
\t\t\tmax-width: 100%;
\t\t\tobject-fit: contain;
\t\t\t    height: auto;
\t\t}
\t\t.blog_section_heading{
\t\t\tfont-weight: 600 !important;
\t\t\tfont-size: 26px !important;
\t\t\tline-height: 32px !important;
\t\t}
\t\t.field--name-body{
\t\t\tmargin-top: 5%;
\t\t}
\t\t.feature_blogs{
\t\t\tmargin: 10% auto;
\t\t}
\t\t
\t@media (max-width: 768px) {
\t
\t.blog-inner-heding{} 
\t    .blog-title { top: 7% !important; }
\t    #single_blog_banner {height:300px;}
\t    
\t}\t
\t\t
\t</style>
\t<div id=\"single_blog_banner\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"blog-title blog-inner-heding\">
\t\t\t    <h6><a class=\"cymetrix_button_icon reverse\" href=\"https://drupal.cymetrixsoft.com/\">Home</a> / Blogs</h6>
\t\t\t\t<h1>";
        // line 171
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
        yield "</h1>                
\t\t\t</div>

\t\t</div>
\t</div>
\t
\t<div class=\"container main-content\" style=\"margin-top: -3.7%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 single_content single-blog-content\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 182
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 182, $this->source), "html", null, true);
        yield "
\t\t\t\t</div>    
\t\t\t\t    <div class=\"col-xl-4\">
      <div class=\"featured\">
        <h4 class=\"blog_section_heading\">Featured</h4>
        <hr>
        ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["featured_articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured_article"]) {
            // line 189
            yield "          <div class=\"featured-blog-post\">
            <div class=\"featured-blog-img\">
              ";
            // line 191
            $context["file_uri"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "field_image", [], "any", false, false, true, 191), "entity", [], "any", false, false, true, 191), "fileuri", [], "any", false, false, true, 191);
            // line 192
            yield "              ";
            $context["file_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["file_uri"] ?? null), 192, $this->source));
            // line 193
            yield "              <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_url"] ?? null), 193, $this->source), "html", null, true);
            yield "\">
            </div>
            <div class=\"featured-blog-title\">
              <h4><a href=\"";
            // line 196
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "id", [], "any", false, false, true, 196)]), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "title", [], "any", false, false, true, 196), "value", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            yield "</a></h4>
              <p>";
            // line 197
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "field_short_description", [], "any", false, false, true, 197), "value", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            yield "</p>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured_article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "      </div>
    </div>
\t\t\t</div>

\t\t</div>
\t</div>


\t\t";
        // line 210
        yield "
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "content", "featured_articles"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/node--article.html.twig";
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
        return array (  284 => 210,  274 => 201,  264 => 197,  258 => 196,  251 => 193,  248 => 192,  246 => 191,  242 => 189,  238 => 188,  229 => 182,  215 => 171,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/node--article.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 188, "set" => 191);
        static $filters = array("escape" => 6);
        static $functions = array("file_url" => 192, "url" => 196);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                ['file_url', 'url'],
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
