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

/* themes/contrib/dxpr_theme/templates/page--blog.html.twig */
class __TwigTemplate_351708b8e3b753909cb78fa433afc1b3 extends Template
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
    <title>Blogs</title>
    
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" crossorigin=\"anonymous\" ></script>
</head>


<body>

 <header id=\"web_nav\" class=\"container cymetrix_container navbar navbar-expand-lg navbar-light\" >
        <a class=\"navbar-brand\" href=\"#\">
            ";
        // line 19
        yield "            <a href=\"https://drupal.cymetrixsoft.com/\"><img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\"></a>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
            aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
            ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        yield "
        </div>
    </header>
    
    <header class=\"mobile_nav navbar navbar-expand-lg navbar-light\" >
        <div class=\"container cymetrix_container\">
            <div class=\"flexNav\">
                <a class=\"mob_logo\" href=\"https://drupal.cymetrixsoft.com/\"><img src=\"";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\"></a>
    
    
            <div class=\"nav_contact\">
            \t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#contactUsModal\">Contact Us
            \t\t<img src=\"https://drupal.cymetrixsoft.com/sites/default/files/2024-02/Group%207.png\" alt=\"contact icon\">
            \t\t</a>
        \t    </div>
        
            </div>
                
        </div>
        </header>
        
        <nav class=\"mobile_nav mobMenu navbar navbar-expand-lg navbar-light\" style=\"background-color:#E0E0E099;padding: 0px !important;\">
             <div class=\"flexNav container cymetrix_container\">
                    <p>Home</p>

                    
                    <div class=\"menu-toggle\" onclick=\"this.classList.toggle('open')\" data-toggle=\"collapse\" data-target=\"#navbarNav2\"
                    aria-controls=\"navbarNav2\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <div class=\"bar\"></div>
                      <div class=\"bar\"></div>
                      <div class=\"bar\"></div>
                    </div>

                    
                </div>
                
            
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav2\">
                    ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        yield "
                </div>    


        </nav>
   


    <div id=\"page-wrapper\" class=\"page-wrapper\">
        <div id=\"page\">
            
            
             <style>
       .all_categories {
                display:flex;
                justify-content:center;
            }
            .all_categories li {
                list-style-type: none;
                margin: auto 10px;
            }
       
       .dropdown-menu.nav-level-3.show{
           top:35px;
       }
        .blog-posts {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }
        .blog-post {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            position:relative;
            margin: 10px auto;
            margin-left:0;
        }
        .blog-post:hover{
            border-bottom: 4px solid #1B7EC1;
        }
        .blog-post img {
            max-width: 100%;
            height: auto;
            object-fit:contain;
        }
        .latest-articles {
            margin-bottom: 30px;
        }
        
        .blog-post img{
            width:444px;
            height:320px;    
        }
        .blog-heading{
            font-size:20px;
            font-weight:600;
                margin: 15px auto;
        }
        .blog-heading a{
            color:#161616;
        }
        .blog_section_heading{
            font-size: 26px;
            font-weight: 500;
            margin: 15px auto;
        }
        .featured-blog-img img{
           width: 225px;
           height: 75px;
        }
        .featured-blog-title h4{
            font-weight:500;
            font-size:18px;
        }
        .featured-blog-title{
            margin-left:0px;
        }
         
        
        .featured-blog-post{
            display:flex;
                margin: 15px auto;
        }
        #blog-banner{
         width:1512px;
         height:620px;
         background-color:#e3f2fd;
         position: relative;
        }
        .right_info img{
            width:100%;
        }
        .right_info{
            height: 512px;
    width: 682px;
    position: absolute;
    right: 5%;
    bottom: -10%;
        }
        .banner-title{
            position: absolute;
            top: 20%;
        }
        .banner-title h1{
            font-size: 54px;
            font-weight: 700;
            border-left: 4px solid #1B7EC1;
            padding: 15px;
        }
        .cymetrix_button_icon.custom_button {
    padding: 5% !important;
    background: #1B7EC1;
    color: white;
    padding-right: 15% !important;
}
.section_heading {
    font-weight:600;
    font-size:32px;
}
.blogNav{
        position: absolute;
    bottom: 1%;
}


    </style>
    
    
    
<div class=\"az-element az-section salesforce_banner container-fluid-wrapper az-util-vertical-centering\" style=\"background-color:#e3f2fd;background-image: url(/sites/default/files/2024-04/blogImg.jpg);background-repeat: no-repeat;background-position:right bottom;    background-size: contain;\" data-az-id=\"gb9y90774i\" data-azat-pid=\"gb9y90774i\" id=\"gb9y90774i\" data-azb=\"az_section\" data-azat-parallax_speed=\"0\" data-azat-parallax_mode=\"fixed\" data-azat-parallax_mobile_disable=\"no\" data-azat-an_infinite=\"no\">
    <div class=\"az-ctnr container-fluid\" data-azcnt=\"true\"><div class=\"az-element az-layers\" data-az-id=\"gbiaovnstv\" data-azat-pid=\"gbiaovnstv\" id=\"gbiaovnstv\" data-azb=\"az_layers\" data-azat-height=\"620\" data-azat-responsive=\"no\">
        <div id=\"gbiaovnstv\" class=\"az-ctnr blog-banner\" data-azcnt=\"true\">
            <div class=\"az-element az-text container positional_banner_left_text az-moveable-element\" style=\"z-index: 1; left: 3.13162%; top: 19.2%; width: 40.0983%; position:absolute;\" id=\"gboe6z9gcs\">
                <h6><a class=\"cymetrix_button_icon reverse\" href=\"https://drupal.cymetrixsoft.com\">Home</a> / Blogs</h6>
                <h1>
                    <span style=\"font-size:48px;\">
                        <strong>Blogs, News and</strong>
                    </span><br>
                    <span style=\"color:hsl(204,75%,43%);font-size:48px;\">
                        <strong>Podcast&nbsp;</strong>
                    </span>
                </h1>
            </div>
            ";
        // line 211
        yield "            ";
        // line 212
        yield "        </div>
    </div>
    <div class=\"az-element az-image\" id=\"gbzkxa3f5g\">
        <img class=\"az-image-content lazyload\" style=\"width: 100%;\" alt=\"\" title=\"\" />
    </div>
    </div>
</div>
    
   <br><br>
<main class=\"container animated-paragraph\">
  <h2 class=\"section_heading text-center\">Discover</h2>
  <ul class=\"all_categories\">
      <li class=\"singleCategory\"><a href=\"https://drupal.cymetrixsoft.com/blog\">All</a></li>
      ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 226
            yield "      <li class=\"singleCategory\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            yield "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        yield "    </ul>
    
  <br>
  <div class=\"row\">
    <div class=\"col-xl-8\">
      <div class=\"latest-articles\">
        <h4 class=\"blog_section_heading\">Latest</h4>
        <hr>
        <div class=\"row\">
          ";
        // line 237
        if (($context["articles"] ?? null)) {
            // line 238
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 239
                yield "              <article class=\"col-md-6 col-sm-12 blog-post\">
                ";
                // line 240
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "field_image", [], "any", false, false, true, 240)) {
                    // line 241
                    yield "                  <img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "field_image", [], "any", false, false, true, 241), "entity", [], "any", false, false, true, 241), "fileuri", [], "any", false, false, true, 241), 241, $this->source)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "field_image", [], "any", false, false, true, 241), "alt", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
                    yield "\">
                ";
                }
                // line 243
                yield "                
                <h3 class=\"blog-heading\">
                <a href=\"";
                // line 245
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, true, 245)]), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 245), "value", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                yield "</a>
                  </h3>
                  
                <div class=\"blogNav\">
                  <a class=\"cymetrix_button_icon\" href=\"";
                // line 249
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, true, 249)]), "html", null, true);
                yield "\">
                    <span>Read More</span>
                  </a>    
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            yield "          ";
        } else {
            // line 256
            yield "            <p>No articles found.</p>
          ";
        }
        // line 258
        yield "        </div>
      </div>
    </div>
    <div class=\"col-xl-4 col-md-4 col-sm-12\">
      <div class=\"featured\">
        <h4 class=\"blog_section_heading\">Featured</h4>
        <hr>
        ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["featured_articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured_article"]) {
            // line 266
            yield "          <div class=\"featured-blog-post\">
            <div class=\"featured-blog-img\">
              ";
            // line 268
            $context["file_uri"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "field_image", [], "any", false, false, true, 268), "entity", [], "any", false, false, true, 268), "fileuri", [], "any", false, false, true, 268);
            // line 269
            yield "              ";
            $context["file_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["file_uri"] ?? null), 269, $this->source));
            // line 270
            yield "              <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_url"] ?? null), 270, $this->source), "html", null, true);
            yield "\">
            </div>
            <div class=\"featured-blog-title\">
              <h4><a href=\"";
            // line 273
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "id", [], "any", false, false, true, 273)]), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "title", [], "any", false, false, true, 273), "value", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            yield "</a></h4>
              <p>";
            // line 274
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_article"], "field_short_description", [], "any", false, false, true, 274), "value", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
            yield "</p>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured_article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "      </div>
    </div>
  </div>

</main>
        </div>
    </div>
    
    
\t\t
";
        // line 288
        yield from         $this->loadTemplate("themes/contrib/dxpr_theme/templates/footer.html.twig", "themes/contrib/dxpr_theme/templates/page--blog.html.twig", 288)->unwrap()->yield($context);
        // line 289
        yield "

    <!-- Include Bootstrap JS and Popper.js -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

<script>

document.addEventListener(\"DOMContentLoaded\", function() {
  // Execute the removal after 3 seconds
  setTimeout(function() {
    // Select all <span> elements with the classes \"fade-in\" and \"active\"
    var spans = document.querySelectorAll(\"span.fade-in.active\");

    // Loop through each selected <span> element
    spans.forEach(function(span) {
      // Check if the <span> element has no text content
      if (!span.textContent.trim()) {
        // Remove the empty <span> element
        span.parentNode.removeChild(span);
      }
    });
  }, 5000); // 3000 milliseconds = 3 seconds
});


setTimeout(function() {
    // Select all <span> elements with the classes \"fade-in\" and \"active\"
    var spans = document.querySelectorAll(\"span.fade-in.active\");

    // Loop through each selected <span> element
    spans.forEach(function(span) {
      // Check if the <span> element has no text content
      if (!span.textContent.trim()) {
        // Remove the empty <span> element
        span.parentNode.removeChild(span);
      }
    });
  }, 5000); // 3000 milliseconds = 3 seconds
  
</script>

\t\t
</body>

</html>



";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "categories", "articles", "featured_articles"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/page--blog.html.twig";
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
        return array (  417 => 289,  415 => 288,  403 => 278,  393 => 274,  387 => 273,  380 => 270,  377 => 269,  375 => 268,  371 => 266,  367 => 265,  358 => 258,  354 => 256,  351 => 255,  339 => 249,  330 => 245,  326 => 243,  318 => 241,  316 => 240,  313 => 239,  308 => 238,  306 => 237,  295 => 228,  284 => 226,  280 => 225,  265 => 212,  263 => 211,  116 => 66,  82 => 35,  72 => 28,  59 => 19,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/page--blog.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/page--blog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 225, "if" => 237, "set" => 268, "include" => 288);
        static $filters = array("escape" => 19);
        static $functions = array("file_url" => 19, "path" => 245, "url" => 273);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
                ['escape'],
                ['file_url', 'path', 'url'],
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
