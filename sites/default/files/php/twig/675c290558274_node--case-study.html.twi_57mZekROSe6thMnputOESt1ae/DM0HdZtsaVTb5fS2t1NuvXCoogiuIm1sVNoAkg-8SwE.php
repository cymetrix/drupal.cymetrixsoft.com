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
      .menu-item.dropdown.mega-menu {
    border: 0;
    height: 50px;
}
    </style>
      ";
        // line 150
        $context["title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 150), "value", [], "any", false, false, true, 150);
        // line 151
        yield "      ";
        $context["body"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 151), "value", [], "any", false, false, true, 151);
        // line 152
        yield "      ";
        $context["field_experience"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_experience", [], "any", false, false, true, 152), "value", [], "any", false, false, true, 152);
        // line 153
        yield "      ";
        $context["field_location"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153);
        // line 154
        yield "      ";
        $context["field_work_type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_work_type", [], "any", false, false, true, 154), "value", [], "any", false, false, true, 154);
        // line 155
        yield "      ";
        $context["description"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_description", [], "any", false, false, true, 155), "value", [], "any", false, false, true, 155);
        // line 156
        yield "      ";
        $context["field_must_have"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_must_have", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156);
        // line 157
        yield "      ";
        $context["nice_to_have"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_nice_to_have", [], "any", false, false, true, 157), "value", [], "any", false, false, true, 157);
        // line 158
        yield "      
      ";
        // line 159
        $context["field_casestudy_background"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_casestudy_background", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159);
        // line 160
        yield "      
      ";
        // line 161
        $context["field_platform_used"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_platform_used", [], "any", false, false, true, 161), "value", [], "any", false, false, true, 161);
        // line 162
        yield "      
      ";
        // line 163
        $context["field_challenge"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_challenge", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163);
        // line 164
        yield "      
      ";
        // line 165
        $context["field_solution"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_solution", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165);
        // line 166
        yield "      ";
        $context["field_result"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_result", [], "any", false, false, true, 166), "value", [], "any", false, false, true, 166);
        // line 167
        yield "      ";
        $context["field_case_study_category"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_category", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167);
        // line 168
        yield "      ";
        $context["field_highlight_text"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_highlight_text", [], "any", false, false, true, 168), "value", [], "any", false, false, true, 168);
        // line 169
        yield "      ";
        $context["field_case_study_about"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_about", [], "any", false, false, true, 169), "value", [], "any", false, false, true, 169);
        // line 170
        yield "            
      ";
        // line 171
        $context["banner_media"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_banner", [], "any", false, false, true, 171), "entity", [], "any", false, false, true, 171);
        // line 172
        yield "

      
      ";
        // line 175
        $context["field_casestudy_about_image"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_casestudy_about_image", [], "any", false, false, true, 175), "value", [], "any", false, false, true, 175);
        // line 176
        yield "      
      
      
      
      ";
        // line 181
        $context["banner_media"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_case_study_banner", [], "any", false, false, true, 181), "entity", [], "any", false, false, true, 181);
        // line 182
        yield "
<div class=\"job_desc_banner\">
    
    ";
        // line 186
        yield "    ";
        if ((($context["banner_media"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["banner_media"] ?? null), "field_media_image", [], "any", false, false, true, 186)))) {
            // line 187
            yield "        <div class=\"case-study-banner\">
            <img src=\"";
            // line 188
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["banner_media"] ?? null), "field_media_image", [], "any", false, false, true, 188), "entity", [], "any", false, false, true, 188), "uri", [], "any", false, false, true, 188), "value", [], "any", false, false, true, 188), 188, $this->source)), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 188, $this->source), "html", null, true);
            yield "\" />
        </div>
    ";
        }
        // line 191
        yield "    
    <div class=\"banner_fields\">
        <div class=\"banner-left-border\">
            <h6>
                <a class=\"cymetrix_button_icon reverse\" href=\"";
        // line 195
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\">Home</a> /
                <a href=\"./customer-stories\">Case Studies</a>
            </h6>
            <h1>";
        // line 198
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 198, $this->source), "html", null, true);
        yield "</h1>
        </div>
    </div>
</div>

      
";
        // line 212
        yield "      
      
      

";
        // line 221
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_case_study_banner"] ?? null), 221, $this->source));
        yield "
      ";
        // line 222
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_case_study_banner"] ?? null), 222, $this->source), "html", null, true);
        yield "
";
        // line 224
        yield "


      
      <div class=\"container\" style=\"padding-top: 60px;padding-bottom: 60px;\">
         <h2 class=\"text-center\" >Customer Story</h2>
           <div class=\"field_highlight_text\">
             ";
        // line 231
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_highlight_text"] ?? null), 231, $this->source));
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
        // line 244
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_casestudy_background"] ?? null), 244, $this->source));
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
        // line 255
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_platform_used"] ?? null), 255, $this->source));
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
        // line 270
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_challenge"] ?? null), 270, $this->source));
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
        // line 282
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_solution"] ?? null), 282, $this->source));
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
        // line 294
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_result"] ?? null), 294, $this->source));
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
        // line 311
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
        // line 398
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_testimonials", [], "any", false, false, true, 398))) {
            // line 399
            yield "
  <div class=\"case_study_testimonial\" style=\"background:#F4F4F4;padding-top: 60px;padding-bottom: 60px;\">
    <h2 class=\"text-center\">Clients Speak</h2>



  <div id=\"testimonial-slider\" class=\"testimonials-wrapper\">
    <div class=\"view-content\">
    ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_testimonials", [], "any", false, false, true, 407));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 408
                yield "      ";
                $context["testimonial_node"] = CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "entity", [], "any", false, false, true, 408);
                // line 409
                yield "      <div class=\"views-row\">
        
        

        <div class=\"testimonial-body\">
          ";
                // line 414
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial_node"] ?? null), "body", [], "any", false, false, true, 414), "value", [], "any", false, false, true, 414), 414, $this->source));
                yield "
        </div>
        
        <div class=\"testimonial-footer\">v
        <h3 class=\"testimonial_author\">";
                // line 418
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial_node"] ?? null), "label", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                yield "</h3>
          <p class=\"testimonial_position\">";
                // line 419
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial_node"] ?? null), "field_author_position", [], "any", false, false, true, 419), "value", [], "any", false, false, true, 419), 419, $this->source));
                yield "</p>    
        </div>
        
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 424
            yield "    </div>
  </div>
  </div>

";
        }
        // line 429
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
        // line 500
        if (($context["other_case_studies"] ?? null)) {
            // line 501
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["other_case_studies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["case_study_data"]) {
                // line 502
                yield "                ";
                $context["case_study"] = CoreExtension::getAttribute($this->env, $this->source, $context["case_study_data"], "node", [], "any", false, false, true, 502);
                // line 503
                yield "
                ";
                // line 504
                $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, $context["case_study_data"], "categories", [], "any", false, false, true, 504);
                // line 505
                yield "
                
                <div class=\"col-md-6 col-sm-12 case-study-box views-row\">
                    <span class=\"views-field views-field-field-case-study-category\">
                        <span class=\"field-content caseStudyGridCategory\">
                              ";
                // line 510
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 511
                    yield "                            <span class=\"field-content caseStudyGridCategory\">
                                <a href=\"/customer-stories/category/";
                    // line 512
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "method", false, false, true, 512), 512, $this->source), "html", null, true);
                    yield "\" hreflang=\"en\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "method", false, false, true, 512), 512, $this->source), "html", null, true);
                    yield "</a>
                            </span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 515
                yield "                        </span>
                    </span>

<div class=\"views-field views-field-title\"><span class=\"field-content\">

<a href=\"";
                // line 520
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, ($context["case_study"] ?? null), "id", [], "method", false, false, true, 520)]), "html", null, true);
                yield "\" hreflang=\"en\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["case_study"] ?? null), "label", [], "any", false, false, true, 520), 520, $this->source), "html", null, true);
                yield "</a>

</span></div>

<div class=\"views-field views-field-view-node hr-hyper\"><span class=\"field-content\">
<a style=\"color:#1b7ec1;\" class=\"cymetrix_button_icon\" href=\"";
                // line 525
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, ($context["case_study"] ?? null), "id", [], "method", false, false, true, 525)]), "html", null, true);
                yield "\" hreflang=\"en\">Read more</a>

</span></div>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case_study_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            yield "        ";
        } else {
            // line 532
            yield "            <p>No other case studies available at the moment.</p>
        ";
        }
        // line 534
        yield "    </div>
</div>      







      <div class=\"container case_study_about\">
           
           <div class=\"row\">
               <div class=\"col-md-8 col-sm-12\">
                   <h2>About Cymetrix Software</h2>
                   <p>";
        // line 548
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_case_study_about"] ?? null), 548, $this->source));
        yield "</p>
               </div>
               <div class=\"col-md-4 col-sm-12\">
                    ";
        // line 551
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["field_casestudy_about_image"] ?? null), 551, $this->source));
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
        return array (  742 => 551,  736 => 548,  720 => 534,  716 => 532,  713 => 531,  701 => 525,  691 => 520,  684 => 515,  673 => 512,  670 => 511,  666 => 510,  659 => 505,  657 => 504,  654 => 503,  651 => 502,  646 => 501,  644 => 500,  571 => 429,  564 => 424,  553 => 419,  549 => 418,  542 => 414,  535 => 409,  532 => 408,  528 => 407,  518 => 399,  516 => 398,  427 => 311,  408 => 294,  393 => 282,  378 => 270,  360 => 255,  346 => 244,  330 => 231,  321 => 224,  317 => 222,  312 => 221,  306 => 212,  297 => 198,  291 => 195,  285 => 191,  277 => 188,  274 => 187,  271 => 186,  266 => 182,  264 => 181,  258 => 176,  256 => 175,  251 => 172,  249 => 171,  246 => 170,  243 => 169,  240 => 168,  237 => 167,  234 => 166,  232 => 165,  229 => 164,  227 => 163,  224 => 162,  222 => 161,  219 => 160,  217 => 159,  214 => 158,  211 => 157,  208 => 156,  205 => 155,  202 => 154,  199 => 153,  196 => 152,  193 => 151,  191 => 150,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/node--case-study.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/node--case-study.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 150, "if" => 186, "for" => 407);
        static $filters = array("escape" => 188, "raw" => 221);
        static $functions = array("file_url" => 188, "url" => 195, "path" => 520);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw'],
                ['file_url', 'url', 'path'],
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
