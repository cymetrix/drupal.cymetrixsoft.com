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

/* themes/contrib/dxpr_theme/templates/node--case-study.html.twig */
class __TwigTemplate_5976978266daafe7d6e325734c9a2c73 extends Template
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
      <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" crossorigin=\"anonymous\"></script>
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
      <title>Your Website</title>
      <meta name=\"robots\" content=\"noindex, nofollow\">
   </head>
   <body>
      <style>
      
      @media (min-width: 1400px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: 1320px;
    }
}
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
         top: 15%;
         left: 10%;
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
         font-size:22px;
         font-weight:600;
         }
         h1{
        font-size: 30px;
    font-weight: 800;
    padding-right: 320px;
         }
         .case_study_about img{
             width:100%;
             height:100%;
             object-fit:cover;
         }
         
         .field_highlight_text{
      text-align: center;
    background-color: #f1f7fb;
    padding: 20px 198px;
    border: solid 2px #1b7ec1;
    border-radius: 10px;
    font-weight: 600;  
         }
         
    .banner-left-border, .salesforce_banner .az-moveable-element h2 {
     margin-top: 50px;
}     
         
         
      .casestudies-intext ul li::marker {color: #a9a8a8; font-size: 20px;}   
      
      hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgb(0 0 0 / 50%);
      margin-bottom: 40px;
    margin-top: 30px !important;
}

.left-brober-box ul li{
    
border-left: solid 3px #1b7ec1;
    list-style: none;
    margin-bottom: 20px;
    padding-left: 20px;    
}
         
         
      @media (max-width:768px) {
          
       .banner_fields {
    position: absolute;
    top: 0%;
    left: 5%;
    width: 90%;
}   

h1 { font-size: 20px; font-weight: 800; padding-right: 0px;}
.job_desc_banner {height: 220px;}
.field_highlight_text { padding: 20px 20px;}   
     
  hr { margin-bottom: 20px; margin-top: 10px !important;} 
  
    .testimonials-wrapper {
    position: relative;
   width: 85% !important;
    max-width: none;      
    }
    
 .views-field-body {
    padding: 20px 20px;
}   

.views-field-field-author { font-size: 16px;}
.views-field-field-author-position { font-size: 14px;}    
          
          
      }   
    </style>
      ";
        // line 146
        $context["title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 146), "value", [], "any", false, false, true, 146);
        // line 147
        yield "      ";
        $context["body"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 147), "value", [], "any", false, false, true, 147);
        // line 148
        yield "      ";
        $context["field_experience"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_experience", [], "any", false, false, true, 148), "value", [], "any", false, false, true, 148);
        // line 149
        yield "      ";
        $context["field_location"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location", [], "any", false, false, true, 149), "value", [], "any", false, false, true, 149);
        // line 150
        yield "      ";
        $context["field_work_type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_work_type", [], "any", false, false, true, 150), "value", [], "any", false, false, true, 150);
        // line 151
        yield "      ";
        $context["description"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_description", [], "any", false, false, true, 151), "value", [], "any", false, false, true, 151);
        // line 152
        yield "      ";
        $context["field_must_have"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_must_have", [], "any", false, false, true, 152), "value", [], "any", false, false, true, 152);
        // line 153
        yield "      ";
        $context["nice_to_have"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_nice_to_have", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153);
        // line 154
        yield "      
      ";
        // line 155
        $context["field_casestudy_background"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_casestudy_background", [], "any", false, false, true, 155), "value", [], "any", false, false, true, 155);
        // line 156
        yield "      
      ";
        // line 157
        $context["field_platform_used"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_platform_used", [], "any", false, false, true, 157), "value", [], "any", false, false, true, 157);
        // line 158
        yield "      
      ";
        // line 159
        $context["field_challenge"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_challenge", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159);
        // line 160
        yield "      
      ";
        // line 161
        $context["field_solution"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_solution", [], "any", false, false, true, 161), "value", [], "any", false, false, true, 161);
        // line 162
        yield "      ";
        $context["field_result"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_result", [], "any", false, false, true, 162), "value", [], "any", false, false, true, 162);
        // line 163
        yield "      ";
        $context["field_case_study_category"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_category", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163);
        // line 164
        yield "      ";
        $context["field_highlight_text"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_highlight_text", [], "any", false, false, true, 164), "value", [], "any", false, false, true, 164);
        // line 165
        yield "      ";
        $context["field_case_study_about"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_about", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165);
        // line 166
        yield "            
      ";
        // line 167
        $context["banner_media"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_banner", [], "any", false, false, true, 167), "entity", [], "any", false, false, true, 167);
        // line 168
        yield "

      
      ";
        // line 171
        $context["field_casestudy_about_image"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_casestudy_about_image", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171);
        // line 172
        yield "      
      
      
      
      ";
        // line 177
        $context["banner_media"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_banner", [], "any", false, false, true, 177), "entity", [], "any", false, false, true, 177);
        // line 178
        yield "
<div class=\"job_desc_banner\">
    
    ";
        // line 182
        yield "    ";
        if ((($context["banner_media"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["banner_media"] ?? null), "field_media_image", [], "any", false, false, true, 182)))) {
            // line 183
            yield "        <div class=\"case-study-banner\">
            <img src=\"";
            // line 184
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["banner_media"] ?? null), "field_media_image", [], "any", false, false, true, 184), "entity", [], "any", false, false, true, 184), "uri", [], "any", false, false, true, 184), "value", [], "any", false, false, true, 184), 184, $this->source)), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 184, $this->source), "html", null, true);
            yield "\" />
        </div>
    ";
        }
        // line 187
        yield "    
    <div class=\"banner_fields\">
        <div class=\"banner-left-border\">
            <h6>
                <a class=\"cymetrix_button_icon reverse\" href=\"https://drupal.cymetrixsoft.com\">Home</a> /
                <a href=\"./customer-stories\">Case Studies</a>
            </h6>
            <h1>";
        // line 194
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 194, $this->source), "html", null, true);
        yield "</h1>
        </div>
    </div>
</div>

      
";
        // line 208
        yield "      
      
      

";
        // line 217
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_case_study_banner"] ?? null), 217, $this->source));
        yield "
      ";
        // line 218
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_case_study_banner"] ?? null), 218, $this->source), "html", null, true);
        yield "
";
        // line 220
        yield "


      
      <div class=\"container\" style=\"padding-top: 60px;padding-bottom: 60px;\">
         <h2 class=\"text-center\" >Customer Story</h2>
           <div class=\"field_highlight_text\">
             ";
        // line 227
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_highlight_text"] ?? null), 227, $this->source));
        yield "

         </div>
        <br>
               <hr>
                <br>
         <div class=\"casestudies-intext\">
            <div class=\"row\">
               <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Background</span>
               </div>
               <div class=\"col-sm-9\">

                  ";
        // line 240
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_casestudy_background"] ?? null), 240, $this->source));
        yield "
               </div>
               
                <br>
               <hr>
                <br>
               
               <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Platform Used</span>
               </div>
               <div class=\"col-sm-9\">
                  ";
        // line 251
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_platform_used"] ?? null), 251, $this->source));
        yield "
               </div>
               
                <br>
               <hr>
                <br>
               
                            
                            
               <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Challenge</span>
               </div>
               
               
               <div class=\"col-sm-9\">
                  ";
        // line 266
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_challenge"] ?? null), 266, $this->source));
        yield "
               </div>
               
                <br>
               <hr>
                <br>
               
                <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Solution</span>
               </div>
               <div class=\"col-sm-9\">

                  ";
        // line 278
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_solution"] ?? null), 278, $this->source));
        yield "
               </div>
               
               <br>
               <hr>
                <br>
               
                <div class=\"col-sm-3\">
                  <span class=\"job_sttr_heading\">Result</span>
               </div>
               <div class=\"col-sm-9\">
                <div class=\"left-brober-box\">
                  ";
        // line 290
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_result"] ?? null), 290, $this->source));
        yield "
                  </div>
               </div>
               
               
               
               
               <div class=\"col-sm-3\"></div>
               <div class=\"col-sm-9\">
                  <a href=\"#\" data-toggle=\"modal\" data-target=\"#jobApplicationModal\" class=\"cymetrix_button_icon custom_button\" href=\"#\">Contact Expert</a>
               </div>
            </div>
         </div>
      </div>
      
      
      ";
        // line 307
        yield "      
      
      <style>
.testimonials-wrapper {
    position: relative;
    width: 100%;
    max-width:838px;
    overflow: hidden; /* This hides the overflow when sliding */
    margin: 0 auto;
    background-color: #ffffff;
    box-shadow: 0px 0px 8px #00000033;
    /*padding: 30px 0px;*/
    text-align: center;

}
.testimonial-body{
    padding:3%;
        display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    min-height: 279px;
    
}
.testimonial-footer{
    background:rgba(241, 247, 251, 1);
    padding:2%;
}

.views-field-body{padding: 20px 50px;}
.views-field-field-author{ font-size:22px; font-weight: 600;  }
.views-field-field-author-position{ font-size:18px; font-weight: 600; }

.view-content {
    display: flex;
    transition: transform 0.8s ease-in-out; /* Smooth transition for sliding effect */
    will-change: transform; /* Optimize performance for transitions */
}

.views-row {
    min-width: 100%; /* Each testimonial takes up full width of the wrapper */
    box-sizing: border-box;
    flex: 0 0 100%; /* Ensure the slides don't shrink or grow */
    opacity: 1;
    transition: opacity 0.5s ease-in-out;
}

.slider-controls {
    text-align: center;
    margin-top: 10px;
}

#prev-slide, #next-slide {
    background-color: #ddd;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    margin: 0 5px;
}

#prev-slide:hover, #next-slide:hover {
    background-color: #ccc;
}

.case_study_about p{margin: 0px auto 0px;}

.testimonial_author{
    font-size:24px;
    font-weight:600;
    
}
.testimonial_position{
    font-size:18px;
    font-weight:700;
}
   @media (max-width:768px) {
          
      }  

      </style>
      
      
      



";
        // line 394
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_testimonials", [], "any", false, false, true, 394))) {
            // line 395
            yield "
  <div class=\"case_study_testimonial\" style=\"background:#F4F4F4;padding-top: 60px;padding-bottom: 60px;\">
    <h2 class=\"text-center\">Clients Speak</h2>



  <div id=\"testimonial-slider\" class=\"testimonials-wrapper\">
    <div class=\"view-content\">
    ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_testimonials", [], "any", false, false, true, 403));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 404
                yield "      ";
                $context["testimonial_node"] = CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "entity", [], "any", false, false, true, 404);
                // line 405
                yield "      <div class=\"views-row\">
        
        

        <div class=\"testimonial-body\">
          ";
                // line 410
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial_node"] ?? null), "body", [], "any", false, false, true, 410), "value", [], "any", false, false, true, 410), 410, $this->source));
                yield "
        </div>
        
        <div class=\"testimonial-footer\">v
        <h3 class=\"testimonial_author\">";
                // line 414
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial_node"] ?? null), "label", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
                yield "</h3>
          <p class=\"testimonial_position\">";
                // line 415
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial_node"] ?? null), "field_author_position", [], "any", false, false, true, 415), "value", [], "any", false, false, true, 415), 415, $this->source));
                yield "</p>    
        </div>
        
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            yield "    </div>
  </div>
  </div>

";
        }
        // line 425
        yield "









<script>
(function (Drupal) {
  Drupal.behaviors.testimonialSlider = {
    attach: function (context, settings) {
      const slides = document.querySelectorAll('#testimonial-slider .views-row');
      const slideContainer = document.querySelector('#testimonial-slider .view-content');
      const totalSlides = slides.length;

console.log(totalSlides)
      if (totalSlides <= 1) {
        // If there’s only one slide, don't auto-slide
        return;
      }

      let currentSlide = 0;
      const slideInterval = 5000; // 5 seconds

      function showSlide(index) {
        const offset = -index * 100;
        slideContainer.style.transform = `translateX(\${offset}%)`;
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
      }

      function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
      }

      showSlide(currentSlide);
      let slideTimer = setInterval(nextSlide, slideInterval);

      document.getElementById('next-slide').addEventListener('click', function () {
        clearInterval(slideTimer);
        nextSlide();
        slideTimer = setInterval(nextSlide, slideInterval);
      });

      document.getElementById('prev-slide').addEventListener('click', function () {
        clearInterval(slideTimer);
        prevSlide();
        slideTimer = setInterval(nextSlide, slideInterval);
      });
    }
  };
})(Drupal);

</script>






<div class=\"container caseGrid 1row 2column \" id=\"caseStudy\" style=\"padding-top: 60px;padding-bottom: 60px;\">
    <h2 class=\"text-center\">Other Transformations Executed</h2>
    <div class=\"view-content\">

        ";
        // line 496
        if (($context["other_case_studies"] ?? null)) {
            // line 497
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["other_case_studies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["case_study_data"]) {
                // line 498
                yield "                ";
                $context["case_study"] = CoreExtension::getAttribute($this->env, $this->source, $context["case_study_data"], "node", [], "any", false, false, true, 498);
                // line 499
                yield "
                ";
                // line 500
                $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, $context["case_study_data"], "categories", [], "any", false, false, true, 500);
                // line 501
                yield "
                
                <div class=\"col-md-6 col-sm-12 case-study-box views-row\">
                    <span class=\"views-field views-field-field-case-study-category\">
                        <span class=\"field-content caseStudyGridCategory\">
                              ";
                // line 506
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 507
                    yield "                            <span class=\"field-content caseStudyGridCategory\">
                                <a href=\"/customer-stories/category/";
                    // line 508
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "method", false, false, true, 508), 508, $this->source), "html", null, true);
                    yield "\" hreflang=\"en\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "method", false, false, true, 508), 508, $this->source), "html", null, true);
                    yield "</a>
                            </span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 511
                yield "                        </span>
                    </span>

<div class=\"views-field views-field-title\"><span class=\"field-content\">

<a href=\"";
                // line 516
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, ($context["case_study"] ?? null), "id", [], "method", false, false, true, 516)]), "html", null, true);
                yield "\" hreflang=\"en\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["case_study"] ?? null), "label", [], "any", false, false, true, 516), 516, $this->source), "html", null, true);
                yield "</a>

</span></div>

<div class=\"views-field views-field-view-node hr-hyper\"><span class=\"field-content\">
<a style=\"color:#1b7ec1;\" class=\"cymetrix_button_icon\" href=\"";
                // line 521
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, ($context["case_study"] ?? null), "id", [], "method", false, false, true, 521)]), "html", null, true);
                yield "\" hreflang=\"en\">Read more</a>

</span></div>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case_study_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            yield "        ";
        } else {
            // line 528
            yield "            <p>No other case studies available at the moment.</p>
        ";
        }
        // line 530
        yield "    </div>
</div>      







      <div class=\"container case_study_about\">
           
           <div class=\"row\">
               <div class=\"col-md-8 col-sm-12\">
                   <h2>About Cymetrix Software</h2>
                   <p>";
        // line 544
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_case_study_about"] ?? null), 544, $this->source));
        yield "</p>
               </div>
               <div class=\"col-md-4 col-sm-12\">
                    ";
        // line 547
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_casestudy_about_image"] ?? null), 547, $this->source));
        yield "
               </div>
           </div>
      </div>
      
      
      
   </body>
</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "field_case_study_banner", "other_case_studies"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/node--case-study.html.twig";
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
        return array (  735 => 547,  729 => 544,  713 => 530,  709 => 528,  706 => 527,  694 => 521,  684 => 516,  677 => 511,  666 => 508,  663 => 507,  659 => 506,  652 => 501,  650 => 500,  647 => 499,  644 => 498,  639 => 497,  637 => 496,  564 => 425,  557 => 420,  546 => 415,  542 => 414,  535 => 410,  528 => 405,  525 => 404,  521 => 403,  511 => 395,  509 => 394,  420 => 307,  401 => 290,  386 => 278,  371 => 266,  353 => 251,  339 => 240,  323 => 227,  314 => 220,  310 => 218,  305 => 217,  299 => 208,  290 => 194,  281 => 187,  273 => 184,  270 => 183,  267 => 182,  262 => 178,  260 => 177,  254 => 172,  252 => 171,  247 => 168,  245 => 167,  242 => 166,  239 => 165,  236 => 164,  233 => 163,  230 => 162,  228 => 161,  225 => 160,  223 => 159,  220 => 158,  218 => 157,  215 => 156,  213 => 155,  210 => 154,  207 => 153,  204 => 152,  201 => 151,  198 => 150,  195 => 149,  192 => 148,  189 => 147,  187 => 146,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/node--case-study.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/node--case-study.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 146, "if" => 182, "for" => 403);
        static $filters = array("escape" => 184, "raw" => 217);
        static $functions = array("file_url" => 184, "path" => 516);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw'],
                ['file_url', 'path'],
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
