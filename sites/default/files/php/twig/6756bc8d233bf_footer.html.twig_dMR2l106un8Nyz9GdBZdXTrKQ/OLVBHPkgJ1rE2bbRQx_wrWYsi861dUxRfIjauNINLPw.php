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

/* themes/contrib/dxpr_theme/templates/footer.html.twig */
class __TwigTemplate_c6ad7206fa9a76bd68d7e59c0782b381 extends Template
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
        // line 2
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" crossorigin=\"anonymous\"></script>

";
        // line 5
        yield "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" async></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


<div class=\"modal fade\" id=\"contactUsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Contact Our Experts</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" style=\"border: none;background: white;font-size: 30px;width: 30px;\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
            ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "contact"), ["#attributes" => ["class" => ["contactForm"]]]), "html", null, true);
        yield "
        </div>
     
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"jobApplicationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"jobApplicationModal_title\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"jobApplicationModal_title\">Job Application</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
            ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "job_application_form"), ["#attributes" => ["class" => ["JobForm"]]]), "html", null, true);
        yield "
        </div>
     
    </div>
  </div>
</div>


";
        // line 44
        yield "
";
        // line 45
        if (($context["footer_blue_latest"] ?? null)) {
            // line 46
            yield "
";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context, ...[$this->sandbox->ensureToStringAllowed(($context["footer_blue_latest"] ?? null), 47, $this->source)]), "html", null, true);
            yield "


    <div id=\"wave_container\" style=\"position: relative;\">
        <div class=\"container primary_footer\">
            <div class=\"footer_slogan\">
                <div class=\"web_primary_footer\">
                    <p>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_blue_latest"] ?? null), "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            yield "</p>
                    <br>
                </div>
            </div>
            <div class=\"footer_contact SAS\">
                <a href=\"";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_blue_latest"] ?? null), "cta_link", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_blue_latest"] ?? null), "cta_text", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "</a>
            </div>
            <div class=\"footer_slogan_secondry\">
                <p>";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_blue_latest"] ?? null), "background_big_text", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            yield "</p>
            </div>
        </div>
    </div>
";
        } else {
            // line 67
            yield "    <div id=\"wave_container\" style=\"position: relative;\">
        <div class=\"container primary_footer\">
            <div class=\"footer_slogan\">
                <div class=\"web_primary_footer\">
                    <p>
                        Transform your business
                    </p>
                    <br>
                </div>
            </div>
            <div class=\"footer_contact\">
                <a href=\"/contact-us\">Connect With Us</a>
            </div>
            <div class=\"footer_slogan_secondry\">
                <p>GROWTH</p>
                <p>Technology</p>
            </div>
        </div>
    </div>
";
        }
        // line 87
        yield "

\t

<footer class=\"bd-footer\">

\t<div class=\"container py-4 px-4 px-md-3 text-body-secondary ftr-black\">
\t\t<div class=\"row\" id=\"block-cymetrix-quicklinks\">
\t\t    
\t\t\t<div class=\"col-lg-3 mb-3 logo_social\">
\t\t\t\t<a class=\"d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none\" href=\"/\" aria-label=\"Bootstrap\">

\t\t\t\t\t<img src=\"";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://assets/white-logo.png"), "html", null, true);
        yield "\" alt=\"Logo\">
\t\t\t\t</a>
\t\t\t\t<ul class=\"social_links\" style=\"padding-left:0 !important\">
\t\t\t\t\t<li class=\"footer social_links_list\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com/cymetrix/\" target=\"_blank\">
    \t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewbox=\"0 0 40 40\" fill=\"none\">
    \t\t\t\t\t\t\t<circle cx=\"20\" cy=\"20\" r=\"19.5\" fill=\"#161616\" stroke=\"white\"/>
    \t\t\t\t\t\t\t<path d=\"M24.8678 17.3336H21.749V15.5558C21.749 14.6385 21.8234 14.0607 23.1319 14.0607H24.7847V11.234C23.9804 11.1505 23.1717 11.1096 22.3622 11.1114C19.9618 11.1114 18.21 12.5843 18.21 15.2883V17.3336H15.5557V20.8891L18.21 20.8882V28.8891H21.749V20.8865L24.4617 20.8856L24.8678 17.3336Z\" fill=\"white\"/>
    \t\t\t\t\t\t</svg>    
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"footer social_links_list\">
\t\t\t\t\t    
\t\t\t\t\t\t<a href=\"https://in.linkedin.com/company/cymetrixsoft\" target=\"_blank\">
    \t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewbox=\"0 0 40 40\" fill=\"none\">
    \t\t\t\t\t\t\t<circle cx=\"20\" cy=\"20\" r=\"19.5\" fill=\"#161616\" stroke=\"white\"/>
    \t\t\t\t\t\t\t<path d=\"M16.6158 26.6666H13.333V16.8181H16.6158V26.6666ZM14.9751 15.505C14.067 15.505 13.333 14.769 13.333 13.8629C13.333 12.9569 14.0684 12.2222 14.9751 12.2222C15.8798 12.2222 16.6158 12.9582 16.6158 13.8629C16.6158 14.769 15.8798 15.505 14.9751 15.505ZM28.434 26.6666H25.2779V21.8737C25.2779 20.7306 25.2562 19.2606 23.6372 19.2606C21.9938 19.2606 21.741 20.5054 21.741 21.791V26.6666H18.5855V16.8109H21.6149V18.1575H21.6576C22.0791 17.3828 23.1093 16.566 24.6456 16.566C27.8431 16.566 28.434 18.6073 28.434 21.2611V26.6666Z\" fill=\"white\"/>
    \t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"footer social_links_list\">
\t\t\t\t\t    <a href=\"https://twitter.com/cymetrix_soft\" target=\"_blank\">
    \t\t\t\t\t    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewbox=\"0 0 40 40\" fill=\"none\">
    \t\t\t\t\t\t\t<circle cx=\"20\" cy=\"20\" r=\"19.5\" fill=\"#161616\" stroke=\"white\"/>
    \t\t\t\t\t\t\t<path d=\"M13.5756 13.3335L18.564 20.606L13.333 26.6668H14.448L19.0581 21.3255L22.7217 26.6668H26.2353L21.0153 19.0572L25.9557 13.3335H24.8414L20.5219 18.3376L17.0892 13.3335H13.5756Z\" fill=\"white\"/>
    \t\t\t\t\t\t</svg>    
\t\t\t\t\t    </a>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t<!--\t<li class=\"social_links_list\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewbox=\"0 0 40 40\" fill=\"none\">
\t\t\t\t\t\t\t<circle cx=\"20\" cy=\"20\" r=\"19.5\" stroke=\"white\"/>
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M27.666 23.2494C27.666 25.6853 25.6843 27.667 23.2484 27.667H16.0836C13.6477 27.667 11.666 25.6853 11.666 23.2494V16.0846C11.666 13.6487 13.6477 11.667 16.0836 11.667H23.2484C25.6843 11.667 27.666 13.6487 27.666 16.0846V23.2494ZM19.666 16.9597C18.1732 16.9597 16.9587 18.1742 16.9587 19.667C16.9587 21.1598 18.1732 22.3743 19.666 22.3743C21.1588 22.3743 22.3733 21.1598 22.3733 19.667C22.3733 18.1742 21.1588 16.9597 19.666 16.9597ZM19.666 23.8733C17.3466 23.8733 15.4597 21.9864 15.4597 19.667C15.4597 17.3476 17.3466 15.4607 19.666 15.4607C21.9854 15.4607 23.8723 17.3476 23.8723 19.667C23.8723 21.9864 21.9854 23.8733 19.666 23.8733ZM15.6462 14.4678C15.6462 15.0776 15.1519 15.5719 14.5422 15.5719C13.9324 15.5719 13.4381 15.0776 13.4381 14.4678C13.4381 13.858 13.9324 13.3637 14.5422 13.3637C15.1519 13.3637 15.6462 13.858 15.6462 14.4678ZM14.9757 14.4628C14.9757 14.705 14.7794 14.9014 14.5372 14.9014C14.2949 14.9014 14.0986 14.705 14.0986 14.4628C14.0986 14.2205 14.2949 14.0242 14.5372 14.0242C14.7794 14.0242 14.9757 14.2205 14.9757 14.4628Z\" fill=\"white\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</li>-->
\t\t\t\t</ul>
\t\t\t</div>
            <div class=\"col-lg-9\">
                <div class=\"row\">
                    
\t\t\t<div class=\"col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 footer_column_menu\" id=\"\">
\t\t\t\t";
        // line 141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first_column", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        yield "
\t\t\t</div>
\t\t\t<div class=\"col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 footer_column_menu\">
\t\t\t\t";
        // line 144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second_column", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        yield "
\t\t\t</div>
\t\t\t<div class=\"col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 footer_column_menu\">
\t\t\t\t";
        // line 147
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third_column", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
        yield "
\t\t\t</div>
\t\t\t<div class=\"col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 footer_column_menu\">
\t\t\t\t";
        // line 150
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth_column", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        yield "
\t\t\t</div>
                </div>
            </div>

\t\t</div>
\t\t<hr class=\"white_hr\"/>




\t\t<div class=\"bottom_footer\">
\t\t\t<ul class=\"ulone\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://drupal.cymetrixsoft.com/privacypolicy/\">Privacy Policy</a>
\t\t\t\t</li>
\t\t\t\t<li style=\"margin: 0 3%;\">
\t\t\t\t\t<a href=\"https://drupal.cymetrixsoft.com/terms-of-use/\">Terms of use</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"ultwo\">
\t\t\t\t2024 © Cymetrix Software
\t\t\t</ul>
\t\t</div>


\t</div>
</footer>

<!--chat
<chat-bot platform_id=\"b67f0808-1677-425f-a554-7f180c0ee367\" user_id=\"68c5a036-43f6-4772-bec8-f37113315b04\" chatbot_id=\"7bfd8655-8da8-4422-aa7b-1d59b1e05eab\"><a href=\"https://www.chatsimple.ai/?utm_source=widget&utm_medium=referral\">chatsimple</a></chat-bot>
<script src=\"https://cdn.chatsimple.ai/chat-bot-loader.js\" async defer></script>-->


<style>

.wrap-messages{
    display:none;
}
        .views-element-container{
            width: 100%;
            margin: auto;
        }
            
.featured-blog-img img{width:225px;height:75px}
.thisBlogGrid  .views-field-field-tags{
    display:none;
}
.thisBlogGrid .views-field-field-category a {
    background-color: #dfdcdc;
    font-size: 16px;
    padding: 5px 20px;
    color: #000;
    opacity: 9;
    margin-top: -21px !important;
    position: absolute;
}


#career_div .views-field-view-node {
    display: inline-block;
    float: right;
    padding-top: 10px;
}

#career_div .views-field-view-node .field-content a{
    font-size: 20px;
    font-weight: 400;
}

#career_div .views-field.views-field-title{
    padding-top: 5px;
    padding-bottom: 5px;
}
.contact_page_sec_1{
    padding-left:15px;
    padding-right:15px;
}

.contact_section_padded_part.second a .fa-3x {
    font-size: 48px;
        color: #161616;
    margin: auto 10px;
}

.contact_section_padded_part.second a{
display: inline-block;    
}

.contact_section_padded_part{
    background: white;
    padding: 5%;
}

.contact_section_padded_part.second{
    margin:15px auto;
}

.contact-form{
    padding:4%;
}
.form-control{
    border-radius:0px;
}
.cymetrix_button_icon.custom_button{
    border-radius:0px;
}
.overlay_content h2{
    margin: 20px auto;
}


    
.special-p-14 p{
    line-height:20px !important;
}
.special-p-14 p span{
    font-size:14px !important;
}

@media screen and (max-width: 992px) {
    
    
#harnessing-box a{
    width: 235px;
    text-align:left;
    min-width:200px;
    
}
    
    
    #marketting_cloud_img img {
     width:100%;   
    }
    
    #casesudybadge .az-element.az-image{
        text-align:center;
        
    }
    
    #casesudybadge .az-element.az-image img{
        width: 150px !important;
    }
    
    .owl-controls .owl-pagination{
        display:none;
    }
    .footer_column_menu{
margin:10px auto  !important;
}
.footer_column_menu .block-title{
    margin:0px !important ; 
}



    .text-body-secondary.ftr-black{
            margin-top: 15%;
    }
    .power_growth {
        height:100vh;
    }
    .az-element.az-ctnr.az-column{
        margin:10px auto;
    }
    h3 span {
        font-size: 18px !important;
    }
    .homepage_banner_heading h1 span {
        opacity: 40% !important;
        color: #fff;
        font-size: 70px;
        font-weight: 700;
    }
    .owl-stage {
    transform: translate3d(-330px, 0px, 0px) !important;
}
}

.salesforce_harsening_grid .az-element.az-text {
    display: table-cell;
    vertical-align: middle;
        height: 520px;
}
    
  @media only screen and (min-width: 768px) {
    .desktop-img {
        display: block !important; /* Show desktop image on desktop */
    }

    .az-util-vertical-centering.mobile-img {
        display: none; /* Hide mobile image on desktop */
    }

    /* Show mobile image on desktop only for logged-in users */
    body.user-logged-in .mobile-img {
        display: block !important; /* Show mobile image in desktop for logged-in users */
    }

    body:not(.user-logged-in) .mobile-img {
        display: none !important; 
    }
}

@media only screen and (max-width: 768px) {
    
    
    .partners_grid2{
            max-height: fit-content !important;
    }
    .muted-heading {
        width: 91%;
        margin: 5% auto !important;
    }

    .text-power {
        left: 0 !important;
    }

    .desktop-img {
        display: none !important; /* Hide desktop image on mobile */
    }

    .mobile-img {
        display: block !important; /* Show mobile image on mobile */
    }
}
.az-layers>.az-ctnr>.az-element.banner-action{
    left:7% !important;
}

@media (min-width: 992px) and (max-width: 1200px) {
    .nav-level-0 > .menu-item {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
}

@media screen and (min-width: 991px) {
    
    
    .thisBlogGrid .views-field-field-image img{
            height: 200px;
            object-fit: contain;
    }
    
    .featured-blog-post .views-field.views-field-field-image{
        width:35%;
    }
    
    .featured-blog-post .views-field.views-field-title{
        width:65%;
    }
        .about-workus-img , .about-workus-img img{
        height:100%;
    }
    
    #marketting_cloud_img img {
     width:50%;   
    }
    
    
    #casesudybadge .az-element.az-image img{
        height:200px;
        object-fit:contain;
    }
    #casesudybadge{
        width: 60%;
    margin: auto;
    }
        
    /*.case_studybadges .az-element.az-image img{*/
    /*    min-height:200px;*/
    /*    object-fit:contain;*/
    /*}*/
    
    
    
    .mega-menu .nav-level-1{
        left:100%!important;
        transform:translateX(-54%);
        top:90%!important;
        right:4%;
        position:absolute;
        width:970px;
        background:#fff;
        box-shadow:0 4px 14px 6px rgba(0,0,0,.16);
        z-index:99999999;
        padding:0        
    }
    
    #contact_global_section{
        text-align:center;
    }
    .contact_last_border{
        border-right: 4px solid #f4f4f4;
    }
    
    .contact_section_padded_part.second:hover{
    border-top: 4px solid #28a4ff;
    }
    .contact_section_padded_part{
        padding-left:0px;
    }
    .contact_section_padded_part.second{
        border-top: 4px solid #F4F4F4;
}
    
    .extra-link.nav-call a span, .extra-link.nav-mail a span{
            margin: auto auto auto 15px;
    }
    .desktop-width-60{
        width:60%;
        text-align: center;
        margin: auto;
    }
    .footer_column_menu h2{
        margin: 0px auto 10px !important;
    }
    
    .text-body-secondary.ftr-black{
        margin-top:5% ;    
    }
    .bordered{
        border-left:2px solid rgba(244, 244, 244, 1);
        border-right:2px solid rgba(244, 244, 244, 1);
    }
    
    .bordered.transparent{
        border-left:2px solid white;
        border-right:2px solid white;
    }
    
    h3 span{
    font-size:26px !important;
}
    .cloud_section .col-md-4{
        /*        display: flex;*/
        /*justify-content: center;*/
        /*max-width: 100% !important;*/
        /*flex: 0 0 100% !important;*/
    }
     .nav-level-1>li {
        padding: 6px;
    }
    #only-dektop{
        display:block !important;
    }
    #only-dektop.flex{
        display:flex !important;
    }
    
     #only-dektop.flex figure{
        padding: 0 !important;
    }
    
    .toprowmr{
        margin:20px auto ;
    }
}


@media screen and (max-width: 991px) {
    
    
    .about-workus-img , .about-workus-img img{
        height:100%;
    }
    .special-p-14 .az-element.az-image {
        text-align:center;
    }
        .special-p-14 .az-element.az-image img {
                width: 80% !important;
        }
    
.career_img_sec img{
 width:100% !important;
 height:auto !important;
}

.views-field-view-node{
        float: none;
}
#career_div .views-field-view-node{
        float: none;
}

.job-title .views-field-field-experience, .job-title .views-field-field-location, .job-title .views-field-field-work-type
{
        margin: 10px 15px 0 0;
}

.contact_page_sec_1{
    padding-left:0px;
    padding-right:0px;
}

.contact_section_padded_part{
    background: #fafafa;
    padding: 5%;
}

.contact_section_padded_part.second{
margin:15px auto;
}

.webform-actions {
    margin: inherit;
    width: 100%;
    text-align: center;
}

.webform-actions::after {
    content: url(data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2220%22%20viewBox%3D%220%200%2040%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M6.5%2010.6891H36.5351L32.1986%2015.0256L33.173%2016L39.173%2010L33.173%204L32.1986%204.97439L36.5351%209.3109H6.5V10.6891Z%22%20fill%3D%22white%22/%3E%3Ccircle%20cx%3D%2210.5%22%20cy%3D%2210%22%20r%3D%229.5%22%20stroke%3D%22white%22/%3E%3C/svg%3E);
    position: absolute;
    top: 50%;
    transform: translateY(-35%);
     right: inherit; 
    display: inline-block;
    vertical-align: middle;
    left: 50%;
}
.contact-form-heading{
    text-align:center;
}
.contact_section_padded_part{
    text-align:center;
}


.contact_section_padded_part.second h2{
    margin:10px !important;
}
.contact_section_padded_part.second a .fa-3x {
    font-size: 36px;
        color: #161616;
    margin: auto 10px;
}

#certification-img img{
    width:100%;
}

.salesforce_harsening_grid .az-element.az-ctnr.az-column{
            margin: 0;
}
    .bordered{
        border-top:2px solid rgba(244, 244, 244, 1);
        border-bottom:2px solid rgba(244, 244, 244, 1);
    }
    .bordered.transparent{
        border-top:2px solid white;
        border-bottom:2px solid white;
    }
    

    .abt_parent{
        max-width:100%;
    }
    
.case-study-grid .container{
    padding:0 !important;
}
.feature_column_col{
    padding:0 !important;
    padding-left:0px !important;
    padding-right:0px !important;
}
    .nav-level-1>li {
        padding: 6px;
    }
    
    .nav-bottom-content{
        padding:10px !important
    }
    .ratio.ratio-16x9{
        width:100%;
    }
    .partners_grid .az-column{
        width: 50%;
    padding: 10px;
    margin: 3%;
    margin-bottom:3% !important;
    }
    
    .footer_contact a{
        position:relative;
        z-index:9999;
    }
    
    .mega-menu .dropdown-menu.nav-level-1.show {
    height: auto;
    width: 95vw;
    min-height: 275px;
}

.nav-bottom-content{
    position:relative !important;
}

.certification_card_text p{
    text-align:center;
}

.salesforce_harsening_grid{
    text-align:center;
}

#harnessing-box a{
    width: 235px;
}
    .data_analytics_card_layout {
        margin: 10px auto;
}
.toprowmr{
    margin-top:15px;
}

h3 span{
    font-size:18px !important;
}

.bothsideborder {
    border-top: 1px solid rgba(244, 244, 244, 1);
    border-bottom: 1px solid rgba(244, 244, 244, 1);
}

.custome_slider_scrollable .az-ctnr.container{
    padding:0;
}

    .home_transformation .owl-item{
        min-width:8%;
        /*width:330px !important;*/
    }


}
















.dropdown-item.active, .dropdown-item:active{
    color:#212529;
}


.salesforce_card_row .az-card.card{
    min-height: 300px;    
}

.bothsideborder {
    border-left: 1px solid rgba(244, 244, 244, 1);
    border-right: 1px solid rgba(244, 244, 244, 1);

}
    
@media (min-width:300px) and (max-width:425px){
    .footer_slogan_secondry p{
        font-size:40px!important;
        line-height:44px!important;
    }
}

@media (min-width:426px) and (max-width:991px){
    .footer_slogan_secondry p{
        font-size:52px!important;
        font-weight:700!important;
        line-height:40px!important
    }
    
    @media (min-width:768px) and (max-width:991px){
    .muted-heading {
        width: 80%;
    }
        #only-dektop{
            display:none !important;
        }
    }
    
    
    #block-cymetrix-quicklinks .region h2.block-title{
margin-bottom: 5px !important;
    }
    
    
    #block-cymetrix-quicklinks .col-12.col-sm-6.col-md-6.col-lg-6.col-xl-3{
        margin-top:10px;
        margin-bottom:10px;
    }
}


    
    .cardfont-16{
        font-size:16px !important;
    }
    
b,strong{
        font-weight: bolder;
    font-weight: 700;
}    

.specializations_grid {
    min-height: 270px;
}
.cloud_card{
    min-height:300px;
}
    
.certification_card_text p{
    text-align:center;
}
.data_analytics_overlay_section .data_analytics_card_layout figure.image {
    background-color: #3e3f3f;
}
.expertise-areas{
    text-align:center;
}


.views-field-field-case-study-category .field-content a{
        color: #1b7ec1;
    background: #1b7ec12e;
    padding: 10px;
    font-size: 18px;
    opacity: 68%;
    font-weight: 500;
    margin-right: 20px;
}

.caseGrid .view-content .views-row:hover {
    color: #fff;
    background-color: #3d3a3a !important
}

.caseGrid .view-content .views-row:hover .hr-hyper {
    border-top: 3px solid #fff;
    color: #fff;
    font-weight: 400
}


.caseGrid .view-content .views-row .views-field.views-field-title {
    position: absolute;
    top: 35%;
    left: 6%;
    right: 6%;
    z-index: 100
}

.caseGrid .view-content .views-row {
    position: relative;
    background: #fafafa;
    min-height: 420px !important;
    transition: background-color .3s, color .3s
}


.caseGrid .view-content .views-row,
.feature_column_col {
    max-height: 420px;
    padding-left: 5px;
    padding-right: 5px;
    color: #161616;
    height: 520px
}
.caseGrid .view-content .views-row .hr-hyper a,
.dropdown-menu>.menu-item>a,
.fw-400 {
    font-weight: 400
}

.caseGrid .view-content .views-row:hover .caseStudyTitle a,
.caseGrid .view-content .views-row:hover .hr-hyper a,
.case-study-box:hover .views-field-title a,
.feature_column_col:hover .featured_transformation,
.featuredGrid:hover .featuredContent,
.featuredGrid:hover a.featuredAction,
.nav a,
.navigation-level-2.active>span.dropdown-item {
    color: #fff
}

.caseGrid .view-content .views-row:hover .views-field-field-case-study-category .field-content a {
    background: #fffFFF33;
    opacity: 1;
    color: #fff;
}

.owl-prev{
    float:left;
}
.owl-next{
    float:right;
}
</style>


<script>
    
    document.addEventListener(\"DOMContentLoaded\", function () {
    const caseStudyElement = document.getElementById(\"caseStudy\");

    if (caseStudyElement) {
        if (caseStudyElement.classList.contains(\"caseSlider\")) {
            handleSliderLayout(caseStudyElement);
        } else if (caseStudyElement.classList.contains(\"caseGrid\")) {
            handleGridLayout(caseStudyElement);

        }
    }
});

function handleSliderLayout(caseStudyElement) {
    const columnClass = Array.from(caseStudyElement.classList).find(cls => cls.endsWith(\"column\"));
    if (columnClass) {
        const columnCount = parseInt(columnClass.replace(\"column\", \"\"), 10);
        caseStudyElement.style.setProperty(\"--column-count\", columnCount);
        const viewContent = caseStudyElement.querySelector(\".view-content\");
        const viewsRows = Array.from(viewContent.querySelectorAll(\".views-row\"));
        const viewWidth = caseStudyElement.offsetWidth;
        const rowWidth = viewWidth / columnCount; 
        
        viewsRows.forEach(row => {
            row.style.minWidth = `\${rowWidth}px`;
        });
        viewContent.style.display = 'grid';
        viewContent.style.gridAutoFlow = 'column';
        viewContent.style.gridTemplateColumns = `repeat(\${viewsRows.length}, \${rowWidth}px)`;
        viewContent.style.overflowX = 'hidden';
        viewContent.style.width = `\${viewsRows.length * rowWidth}px`;
        viewContent.style.transition = 'transform 0.5s ease'; // Smooth transition for sliding

        // Create navigation arrows
        createSliderNavArrows(caseStudyElement, viewContent, viewsRows.length, columnCount, rowWidth);
    }
    

    
}

function handleGridLayout(caseStudyElement) {
    // Get the nrow and ncolumn classes
    const rowClass = Array.from(caseStudyElement.classList).find(cls => cls.endsWith(\"row\"));
    const columnClass = Array.from(caseStudyElement.classList).find(cls => cls.endsWith(\"column\"));

    let rowCount = 2; // Default values
    let columnCount = 3; // Default values

    if (rowClass) {
        rowCount = parseInt(rowClass.replace(\"row\", \"\"), 10);
    }

    if (columnClass) {
        columnCount = parseInt(columnClass.replace(\"column\", \"\"), 10);
    }

    // Apply the --row-count and --column-count CSS variables dynamically
    caseStudyElement.style.setProperty(\"--row-count\", rowCount);
    caseStudyElement.style.setProperty(\"--column-count\", columnCount);

    const viewContent = caseStudyElement.querySelector(\".view-content\");
    const viewsRows = viewContent.querySelectorAll(\".views-row\");
    const viewWidth = caseStudyElement.offsetWidth;
    const rowHeight = viewWidth / rowCount; // Assuming square items, adjust if necessary

    // Set the width and height of each item
    viewsRows.forEach(row => {
        row.style.minWidth = `\${viewWidth / columnCount}px`;
        row.style.minHeight = `\${rowHeight}px`;
    });

    // Configure grid layout
    viewContent.style.display = 'grid';
    viewContent.style.gridTemplateRows = `repeat(\${rowCount}, 420px)`;
    viewContent.style.gridTemplateColumns = `repeat(\${columnCount}, 1fr)`;
    viewContent.style.gap = '10px'; // Adjust gap as needed
}

function createSliderNavArrows(caseStudyElement, viewContent, itemCount, columnCount, rowWidth) {
    // Create navigation arrows
    const prevArrow = document.createElement('button');
    prevArrow.textContent = '◀';  // You can use an icon or any symbol you prefer
    prevArrow.className = 'slider-nav slider-prev';
    prevArrow.style.position = 'absolute';
    prevArrow.style.left = '10px';
    prevArrow.style.top = '50%';
    prevArrow.style.transform = 'translateY(-50%)';
    prevArrow.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    prevArrow.style.color = '#fff';
    prevArrow.style.border = 'none';
    prevArrow.style.borderRadius = '50%';
    prevArrow.style.width = '30px';
    prevArrow.style.height = '30px';
    prevArrow.style.cursor = 'pointer';
    prevArrow.style.zIndex = '10';

    const nextArrow = document.createElement('button');
    nextArrow.textContent = '▶';  // You can use an icon or any symbol you prefer
    nextArrow.className = 'slider-nav slider-next';
    nextArrow.style.position = 'absolute';
    nextArrow.style.right = '10px';
    nextArrow.style.top = '50%';
    nextArrow.style.transform = 'translateY(-50%)';
    nextArrow.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    nextArrow.style.color = '#fff';
    nextArrow.style.border = 'none';
    nextArrow.style.borderRadius = '50%';
    nextArrow.style.width = '30px';
    nextArrow.style.height = '30px';
    nextArrow.style.cursor = 'pointer';
    nextArrow.style.zIndex = '10';

    // Append arrows to the container
    caseStudyElement.style.position = 'relative';  // Ensure container is positioned for absolute arrows
    caseStudyElement.appendChild(prevArrow);
    caseStudyElement.appendChild(nextArrow);

    let currentIndex = 0;
    const maxIndex = itemCount - columnCount;

    // Handle arrow clicks
    prevArrow.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            viewContent.style.transform = `translateX(-\${rowWidth * currentIndex}px)`;
        }
    });

    nextArrow.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            viewContent.style.transform = `translateX(-\${rowWidth * currentIndex}px)`;
        }
    });
}




document.addEventListener('DOMContentLoaded', function () {
  var activeItem = document.querySelector('.nav-link.active');

  if (activeItem) {
    var parentLi = activeItem.closest('li.menu-item');
    if (parentLi) {
      parentLi.classList.add('active');
    }
  }
});
 
\$(document).ready(function(){
    
        
    // \$(\".homepage_banner_heading\").append('<h1 style=\"margin-left:auto;text-align:center;\"><span class=\"fade-in active\">CYMETRIX</span></h1>');

        \$(\".homepage_banner_heading\").removeClass(\"nodisplay\");

    
    let bannerleft = `
    <div class=\"banner_explore\">
<div style=\"display: -webkit-inline-box;\">
<p class=\"vertical-line\"></p>
    <p> &nbsp;&nbsp;<a href=\"#our-services-section\" style=\"color: #000000;\">Explore More</a></p>

</div>
    
    </div>
    `;
    
    let bannerright = `
    <div class=\"banner_contact\" style=\"position: absolute;
    right: -1%;
    transform: rotate(-90deg);     position: fixed;
    z-index: 1000;    top: 45%;\">
        <div style=\"display: -webkit-inline-box;background: #dfebf3;color: white;padding: 10px;border-radius: 15px;\">
            <a href=\"#\" data-toggle=\"modal\" style=\"padding: 0;color:#616161;font-size: 14px;\" data-target=\"#contactUsModal\">Contact Us
            <img src=\"https://drupal.cymetrixsoft.com/sites/default/files/2024-02/Group%207.png\" alt=\"contact icon\" style=\"height: 22px;\" />
            </a>
        </div>
</div>
    `;
\$(\"#home_banner\").append(bannerleft);
\$('body').append(bannerright);
});





    window.addEventListener('resize', function() {
    var dropdownMenus = document.querySelectorAll('.mega-menu .nav-level-1');
    dropdownMenus.forEach(function(menu) {
        var rect = menu.getBoundingClientRect();
        var offsetRight = window.innerWidth - rect.right;
        var offsetLeft = rect.left;

        if (offsetRight < 0) {
            menu.style.left = 'auto';
            menu.style.right = '0';
        } else if (offsetLeft < 0) {
            menu.style.left = '0';
            menu.style.right = 'auto';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenus = document.querySelectorAll('.mega-menu .nav-level-1');
    dropdownMenus.forEach(function(menu) {
        menu.style.width = 'auto';
    });
});


document.addEventListener(\"DOMContentLoaded\", function() {
    // Select all h2 elements
    const headers = document.querySelectorAll('h2');
    
    // Loop through each h2 element
    headers.forEach(header => {
        // Check if the next sibling is a p element
        if (header.nextElementSibling && header.nextElementSibling.tagName.toLowerCase() === 'p') {
            // Apply margin to the p element
            header.nextElementSibling.style.margin = '0px auto 35px';
        } else {
            // Apply margin to the h2 element
            header.style.margin = '0px auto 35px';
        }
    });
});










(function (\$) {
  \$(document).ready(function () {

    \$('.iconmenuFound').each(function () {
      
      var imageUrl = \$(this).attr('id');
      
      var img = \$('<img>').attr('src', imageUrl);
      
      \$(this).prepend(img);
    });
  });
})(jQuery);


\$(document).ready(function() {

 \$('.navbar-nav.justify-content-end.flex-wrap.megamenu.nav-level-0 > li').each(function() {
        if (\$(this).find('span.nav-link.active').length > 0) {
            \$(this).addClass('active');
        }
    });

   const firstMenuItem = \$('.menu-item.dropdown.mega-menu .dropdown-menu.nav-level-1 .menu-item').first();
   firstMenuItem.addClass('active');

            const \$dropdownMenu = \$('.dropdown-menu.nav-level-1');
            if (\$dropdownMenu.length) {


                \$dropdownMenu.hover(
                    function() {
                        // \$(this).css('display', 'block');
                    },
                    function() {
                        \$(this).removeClass('show');
                        // \$(this).css('display', 'none');
                    }
                );


            } else {

            }
            let megaMenuFooter = `<div class=\"nav-bottom-content\" style=\"
                position: absolute;
                bottom: 0;
                width: 100%;
                text-align: center;
                color: #051f3e;
                font-size: 16px;
                padding: 10px 0;
                background-color: #f5f5f5;
            \">
                <p>Ready to Amplify Your Salesforce Possibilities? Explore our <a href=\"https://www.damcogroup.com/salesforce/industry-solutions\">Salesforce Industry Expertise</a></p>
            </div>`;

            \$('.menu-item.dropdown.mega-menu .dropdown-menu.nav-level-1').append(megaMenuFooter);
        
        
        });
        
        

\$(document).ready(function() {

    \$(document).on('click', '.menu-item.dropdown.mega-menu .dropdown-item', function(event) {
        event.stopPropagation();
        if (\$(window).width() <= 991) {
            var \$dropdownMenu = \$(this).next('.dropdown-menu.nav-level-2.show');
            \$('.dropdown-menu.nav-level-2.show').not(\$dropdownMenu).slideUp();
            \$dropdownMenu.slideToggle();
        }
    });


    \$(document).click(function() {
        if (\$(window).width() <= 991) {
            \$('.dropdown-menu.nav-level-2.show').slideUp();
        }
    });
});

\$(document).ready(function() {

\$('#navbarNav ul.dropdown-menu.nav-level-1 > li.menu-item.dropdown.mega-menu').addClass('navigation-level-2 mega-menu cymetrix_button_icon white');
\$('#navbarNav ul.dropdown-menu.nav-level-1 > li.menu-item.dropdown.mega-menu.navigation-level-2.cymetrix_button_icon.white').first().addClass('active');


\$(\".navigation-level-2\").on('mouseenter', function() {
        \$(\".navigation-level-2\").removeClass('active');
        \$(this).addClass('active');

        var totalChildren = \$(this).find('.dropdown-menu.nav-level-2.show > li').length;
        
        
        
         if(totalChildren==1){
        
        
        html = `
        
        <li class=\"specialContactSection\" style=\"padding: 10px 5px;flex: 0 0 calc(80% - 10px);\">
            <span class=\"dropdown-item\" aria-expanded=\"false\" style=\"padding:inherit !important; opacity: 0;\">Practices</span>
        <div class=\"extra-nav-link-wrapper\" style=\"padding-top: 8px;\">

                                            <div class=\"extra-link nav-call\">
                                              <a href=\"tel:+918655343081\" style=\"border: 3px solid #eeee;\">
                                                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                                                <span>+918655343081</span>
                                              </a>
                                            </div>

                                            <div class=\"extra-link nav-mail\">
                                              <a href=\"mailto:info@cymetrixsoft.com\" style=\"border: 3px solid #eeee;\">
                                                <i class=\"fa fa-envelope-o\" aria-hidden=\"true\" style=\"color:red;\"></i>
                                                <span>info@cymetrixsoft.com</span>
                                              </a>
                                            </div>

                                          </div>
                                          
        </li>
        
        
        ` ; 
        
        
        \$(this).find('> ul.dropdown-menu.show').append(html)
        
        
    }
    
    
    var childWidth = 120 * totalChildren; // Calculate width for each child li

        \$(this).find('.dropdown-menu.nav-level-2.show').css('width', childWidth + \"%\");

      
        var index = \$(this).index() + 1; // Adding 1 to convert from zero-based index to 1-based index
        var topPosition = -(index - 1) * 100 + \"%\"; 

        \$(this).find('.dropdown-menu.nav-level-2.show').css({
            'top': topPosition,
            'z-index': '99999999999'
        });

        // Set properties for not active elements
        \$(\".navigation-level-2:not(.active) .dropdown-menu.nav-level-2.show\").css({
            'top': '1000%',
            'z-index': '0'
        });
    });
    
\$(\".navigation-level-2.active\").on('mouseenter', function() {
    var columnCount = \$(this).find('> ul.dropdown-menu.show > li').length;
    
    if(columnCount==1){
        
        
        html = `
        
        <div class=\"specialContactSection\">
        <div class=\"row\">
        <div class=\"col-sm-12\">
            teleplhone
        </div>
        </div>
        
        <div class=\"row\">
        <div class=\"col-sm-12\">
            email
        </div>
        </div>
        
        
        </div>
        
        
        ` ; 
        
        
        \$(this).find('> ul.dropdown-menu.show').append(html)
        
        
    }

});
  function toggleShowClass(element) {
    element.addClass('show');
    element.next('ul.dropdown-menu.nav-level-1').addClass('show');
  }
  \$('.nav-link.dropdown-toggle').hover(function() {
    toggleShowClass(\$(this));
  }, function() {
    var \$this = \$(this);
    if (!\$this.next('.dropdown-menu.nav-level-1').is(':hover')) {
      \$this.removeClass('show');
      \$this.next('ul.dropdown-menu.nav-level-1').removeClass('show');
    }
  });
  \$('.dropdown-menu.nav-level-1').hover(function() {
    toggleShowClass(\$(this).prev('.nav-link.dropdown-toggle'));
  }, function() {
  });
});







\$(document).ready(function(){
    

    
    \$(\".video_thumbnails2 .az-image\").on('click',function(){
        var a = \$(this).attr('id')
        
        
        \$(\".youtube_embed_video .ratio\").html(a)
        
    })
    
});
document.querySelector('.menu-toggle').addEventListener('click', function () {
    var navbar = document.getElementById('navbarNav2');
    if (!this.classList.contains('open')) {
        this.classList.add('open');
        navbar.classList.add('show');
        this.setAttribute('aria-expanded', 'true');
        
    } else {
        this.classList.remove('open'); 
        navbar.classList.remove('show'); 
        this.setAttribute('aria-expanded', 'false'); 
        
        
    }
});


var images = document.querySelectorAll('img');
images.forEach(function(image) {
    image.classList.add('lazyload');
});

var videos = document.querySelectorAll('video');
videos.forEach(function(video) {
    video.classList.add('lazyload');
});


// Wait for the DOM content to be loaded
document.addEventListener(\"DOMContentLoaded\", function() {
    // Select all menu items with dropdowns
    var menuItems = document.querySelectorAll('.menu-item.dropdown');

    // Iterate through each menu item
    menuItems.forEach(function(menuItem) {
        // Check if the menu item has child menu items above nav-level-1
        var hasMegaMenu = menuItem.querySelector('.nav-level-2, .nav-level-3');

        // If child menu items above nav-level-1 exist, add the class mega-menu
        if (hasMegaMenu) {
            menuItem.classList.add('mega-menu');
            // cymetrix_button_icon white
            // menuItem.classList.add('mega-menu', 'cymetrix_button_icon', 'white');

        }
    });
});



window.addEventListener('DOMContentLoaded', () => {
      // Get all cards
      const cards = document.querySelectorAll('.salesforce_harnessing_section');

      
      // Function to toggle the shrink class for a card
      function toggleShrinkClass() {
        // Loop through each card
        cards.forEach(card => {
          const cardRect = card.getBoundingClientRect(); // Get the bounding rectangle of the card
          const cardTop = (cardRect.top + window.scrollY)-100; // Calculate the top position relative to the viewport
          const offset = cardRect.height * 0.15; // Use 15% of the card height as the offset

          if (cardTop <= window.scrollY + offset) {
            card.classList.add('shrink');
          } else {
            card.classList.remove('shrink');
          }
        });
      }

      // Add event listener to window scroll
      window.addEventListener('scroll', toggleShrinkClass);

      // Call toggleShrinkClass initially to handle initial scroll position
      toggleShrinkClass();
    });



const collapsibleItems = document.querySelectorAll('.accordion-item>.collapse.show');


collapsibleItems.forEach(item => {
    const parentElement = item.closest('.accordion-item');
    
    if (parentElement && item.classList.contains('collapse') && item.classList.contains('show')) {
        // Add the desired styles to the parent element
        parentElement.style.borderTop = '4px solid #1B7EC1';
        parentElement.style.borderBottom = '4px solid #1B7EC1';
    } else if (parentElement) {
        // Remove the styles if the child doesn't have both classes
        parentElement.style.borderTop = '';
        parentElement.style.borderBottom = '';
    }
});




const dropdownMenus = document.querySelectorAll('.dropdown-menu[class*=\"nav-level-\"]');
dropdownMenus.forEach(menu => {
    if (!menu.classList.contains('nav-level-1')) {
        menu.classList.add('show');
    }
});

document.addEventListener(\"DOMContentLoaded\", function() {
    var pElements = document.querySelectorAll(\"p\");
    pElements.forEach(function(element) {
        if (element.innerHTML === \"&nbsp;\") {
            element.remove();
        }
    });
});


\$(document).ready(function(){
    \$(\".dropdown-menu.show.nav-level-1\").removeClass(\"show\");
});

document.addEventListener(\"DOMContentLoaded\", function() {
    var dropdownMenus = document.querySelectorAll(\"ul.dropdown-menu:not(.nav-level-0)\");
    dropdownMenus.forEach(function(menu) {
        var menuItems = menu.querySelectorAll(\"li > a\");
        menuItems.forEach(function(item) {
            item.removeAttribute(\"data-bs-toggle\");
        });
    });
});


document.addEventListener(\"DOMContentLoaded\", function() {
    var form = document.querySelector('.contactForm');
    var inputs = form.querySelectorAll('input[type=\"text\"],input[type=\"email\"], textarea');
    inputs.forEach(function(input) {
        input.classList.add('form-control');
    });
    var submitButtons = form.querySelectorAll('input[type=\"submit\"], button[type=\"submit\"]');
    
    // Loop through each submit button and add the 'cymetrix_conatct_button' class
    submitButtons.forEach(function(button) {
        button.classList.add('cymetrix_button_icon');
        button.classList.add('custom_button');
    });
    
    
    
    
    var form2 = document.querySelector('.JobForm');
    var inputs = form2.querySelectorAll('input[type=\"text\"],input[type=\"email\"], textarea,input[type=\"tel\"],input[type=\"file\"]');
    inputs.forEach(function(input) {
        input.classList.add('form-control');
    });
    var submitButtons = form2.querySelectorAll('input[type=\"submit\"], button[type=\"submit\"]');

    submitButtons.forEach(function(button) {
        button.classList.add('cymetrix_button_icon');
        button.classList.add('custom_button');
    });
    
    
    
    
});


\$(document).ready(function() {
  var header = \$(\"#web_nav\");
  var sticky = header.offset().top;

  \$(window).scroll(function() {
    if (window.pageYOffset > sticky) {
      header.addClass(\"sticky\");
    } else {
      header.removeClass(\"sticky\");
    }
  });
});

function updatePrevButton() {
    var prevButton = document.querySelector(\".discover_more .owl-controls .owl-prev\");
    if (prevButton) {
        prevButton.innerHTML = ' &larr;';
        clearInterval(intervalId); // Stop checking once the element is found and updated
    }
}
var intervalId = setInterval(updatePrevButton, 100);

function updateNextButton() {
    var nextButton = document.querySelector(\".discover_more .owl-controls .owl-next\");    
    if (nextButton) {
            nextButton.innerHTML = ' &larr;';
            clearInterval(intervalId2); // Stop checking once the element is found and updated
        }
}
var intervalId2 = setInterval(updateNextButton, 100);

// Function to handle the removal of 'container' class
function adjustBannerContainer() {
    var divInsideBanner = document.querySelector('#home_banner > div');
    
    // Check if divInsideBanner exists
    if (divInsideBanner) {
        if (window.innerWidth < 767) {
            divInsideBanner.classList.remove('container');
        } else {
            divInsideBanner.classList.add('container');
        }
    }
}

function checkURLAndAdjustBanner() {
    // Get the current URL path
    var path = window.location.pathname;
    
    if (path === '/' || path === '/home') {
        adjustBannerContainer();
        
        // Attach event listeners to window resize and load events
        window.addEventListener('resize', adjustBannerContainer);
        window.addEventListener('load', adjustBannerContainer);
    }
}

checkURLAndAdjustBanner();



\t\t\tlet timer, activeLoop;
\t\t\tlet сurrentId = 3;
\t\t\tconst getKeyByValue = (obj, value) =>
\t\t\tObject.keys(obj).find(key => obj[key] === value);
\t\t\tlet model = {
\t\t\t\temea: \"EMEApopUP\",
\t\t\t\tamerika: \"amerikaPopUP\",
\t\t\t\tuk: \"UKpopUP\",
\t\t\t\tasia: \"ASIApopUP\"
\t\t\t};



\t\t\t\$(\".st2\").on(\"click\", e => {
\t\t\t //   \$(\"g\").css(\"display\", \"none\");
    
\t\t\t\tсurrentId = сurrentId +1;
\t\t\t\tlet popUpCountry = \$(e.target).attr(\"id\");
\t\t\t\tlet selector = \"#\" + model[popUpCountry];

\t\t\t\ttogglePopUp(\$(selector));
\t\t\t});


document.querySelectorAll('.st0.st2').forEach(function(image) {
    image.addEventListener('click', function() {
        // Hide all other popups first
        document.querySelectorAll('g').forEach(function(g) {
            g.style.display = 'none';
        });
        
        // Toggle the current popup
        var gElement = this.nextElementSibling;
        gElement.style.display = (gElement.style.display === 'none' || gElement.style.display === '') ? 'block' : 'none';
    });
});


// <script>
// \tdocument.querySelectorAll('.st0.st2').forEach(function(image) {
//     image.addEventListener('click', function() {
//         var gElement = this.nextElementSibling;
//         if (gElement.style.display === 'none' || gElement.style.display === '') {
//             gElement.style.display = 'block';
//         } else {
//             gElement.style.display = 'none';
//         }
//     });
// });

// 

\t\t\tfunction togglePopUp(selector, isClicked) {
\t\t\t\tclearInterval(timer);
\t\t\t\tclearInterval(activeLoop);
\t\t\t\t\$(\"#parentsvg\")
\t\t\t\t.find(\"g.active\")
\t\t\t\t.removeClass(\"active\")
\t\t\t\t.addClass(\"popupWrapper\");
\t\t\t\t\$(\"#parentsvg\")
\t\t\t\t.find(\".preActive\")
\t\t\t\t.removeClass(\"preActive\");
\t\t\t\t\$(\"#\" + getKeyByValue(model, selector.attr(\"id\"))).addClass(\"preActive\");
\t\t\t\ttimer = setTimeout(function() {
\t\t\t\t\tselector.removeClass(\"popupWrapper\").addClass(\"active\");
\t\t\t\t\t\$(\"#\" + getKeyByValue(model, selector.attr(\"id\"))).removeClass(\"preActive\");
\t\t\t\t}, 1000);
\t\t\t\tactiveLoop = setTimeout(function() {
\t\t\t\t\tselector.removeClass(\"active\").addClass(\"popupWrapper\");
\t\t\t\t\tloop();
\t\t\t\t}, 5000);
\t\t\t}







//  document.addEventListener('DOMContentLoaded', function () {
     



//     const animatedParagraphs = document.querySelectorAll('.animated-paragraph');

//     const observerOptions = {
//       root: null,
//       rootMargin: '0px',
//       threshold: 0.5,
//     };

//     const observer = new IntersectionObserver((entries, observer) => {
//       entries.forEach(entry => {
//         if (entry.isIntersecting) {
//           animateElements(entry.target);
//           observer.unobserve(entry.target);
//         }
//       });
//     }, observerOptions);

//     animatedParagraphs.forEach(animatedParagraph => {
//       observer.observe(animatedParagraph);
//     });

//     function iterateTextNodes(parentNode, callback) {
//       parentNode.childNodes.forEach(node => {
//         if (node.nodeType === 3) {
//           callback(node);
//         } else if (node.nodeType === 1 && node.nodeName !== 'SCRIPT') {
//           iterateTextNodes(node, callback);
//         }
//       });
//     }

//     function animateTextNodes(parentNode) {
//       iterateTextNodes(parentNode, textNode => {
//         const words = textNode.nodeValue.split(' ');
//         const newContent = words.map(word => `<span class=\"fade-in\">\${word}</span>`).join(' ');
//         const wrapper = document.createElement('span');
//         wrapper.innerHTML = newContent;
//         textNode.replaceWith(wrapper);
//       });
//     }

//     function animateElements(animatedParagraph) {
//       const elementsToAnimate = animatedParagraph.querySelectorAll('h1, h2, h3, h4, h5, h6');

//       elementsToAnimate.forEach(element => {
//         animateTextNodes(element);
//       });

//       const spans = animatedParagraph.querySelectorAll('.fade-in');

//       spans.forEach((span, index) => {
//         setTimeout(() => {
//           span.classList.add('active');
//         }, index * 10); // Adjust the delay as needed
//       });

//       const svgContainer = animatedParagraph.querySelector('.svg-container');

//       if (svgContainer) {
//         const svg = svgContainer.querySelector('svg');
//         svgContainer.innerHTML = '<span class=\"fade-in active\"></span>'; // Replace the SVG with span
//       }
//     }
//   });
   
   

document.addEventListener('DOMContentLoaded', function() {

const carousel = document.querySelector('.carousel');
if (carousel) {

const previousButton = document.createElement('button');
previousButton.className = 'carousel-button carousel-button-prev';
previousButton.innerHTML = '&#10094;'; // Previous arrow symbol

const thisnextButton = document.createElement('button');
thisnextButton.className = 'carousel-button carousel-button-next';
thisnextButton.innerHTML = '&#10095;'; // Next arrow symbol

carousel.appendChild(previousButton);
carousel.appendChild(thisnextButton);



        const track = document.querySelector('.carousel-track');

        let currentSlide = 0;
        const slidesToShow = 3;
        const totalSlides = document.querySelectorAll('.carousel-item').length;
        const slideWidth = 100 / slidesToShow;

        // Function to move the slider
        function moveToSlide(slideIndex) {
            const percentage = -slideIndex * slideWidth;
            track.style.transform = `translateX(\${percentage}%)`;
        }

        thisnextButton.addEventListener('click', () => {
            if (currentSlide < totalSlides - slidesToShow) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            moveToSlide(currentSlide);
        });

        previousButton.addEventListener('click', () => {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                currentSlide = totalSlides - slidesToShow;
            }
            moveToSlide(currentSlide);
        });
        
}

});

const iframe = document.querySelector('.az-video iframe');
if (!iframe) {
  
} else {
  const placeholderImage = document.createElement('img');
  placeholderImage.src = 'path/to/your/placeholder.jpg'; // Adjust the path
  iframe.parentNode.replaceChild(placeholderImage, iframe);
  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      loadIframe();
      observer.unobserve(placeholderImage);
    }
  });

  observer.observe(placeholderImage);

  function loadIframe() {
    // Replace the placeholder image with the iframe
    placeholderImage.parentNode.replaceChild(iframe, placeholderImage);

    // Trigger the YouTube API to load the player
    iframe.contentWindow.postMessage('{\"event\":\"command\",\"target\":\"player\",\"data\":{\"command\":\"playVideo\"}}', '*');
  }
}
// document.querySelectorAll('.menu-item').forEach(function (item) {
//     item.addEventListener('click', function () {

//         var link = item.querySelector('a');
//         if (link) {
//             
//             // window.location.href = link.href;
//         }
//     });
// });

document.querySelectorAll('.nav-level-3.show .menu-item').forEach(function(item) {
    item.addEventListener('click', function() {
        var link = item.querySelector('a'); // Get the <a> tag inside the <li>
        
        if (link) {
              window.location.href = link.href;
        }
    });
});

// document.querySelectorAll('.menu-item a').forEach(function (link) {
//     link.addEventListener('click', function (e) {
//         e.stopPropagation();     
//     });
// });

   
   
   
   
    


  document.addEventListener('DOMContentLoaded', function() {
    var video = document.querySelector('.az-video-content');
    var section = document.querySelector('#home_banner');

    if (!video || !section) {
      return;
    }

    function handleVideoCanPlay() {
      // Remove the background image
      section.style.backgroundImage = 'none';
    }

    
    video.addEventListener('canplay', handleVideoCanPlay);

    
    video.addEventListener('error', function() {
      console.error(\"Error: Video failed to load.\");
    });
    video.addEventListener('timeupdate', function() {
      if (video.currentTime > 0) {
        handleVideoCanPlay();
        
      }
    });
  });

document.querySelectorAll('.dropdown-toggle').forEach(function(toggle) {
    toggle.addEventListener('click', function(event) {
        event.preventDefault();  // Prevents default link behavior 
        toggle.classList.toggle('show');

        // Find the immediate next 'ul' sibling and toggle 'show' class
        let dropdownMenu = toggle.nextElementSibling;
        if (dropdownMenu && dropdownMenu.tagName === 'UL') {
            dropdownMenu.classList.toggle('show');
        }
    });
});


document.querySelectorAll('li.menu-item.dropdown.cymetrix_button_icon').forEach(function(menuItem) {
    // Find the immediate <span> child
    var span = menuItem.querySelector('span');
    if (span) {
        // Add the classes to the <span>
        span.classList.add('nav-link', 'dropdown-toggle');
    }
});


document.addEventListener('DOMContentLoaded', function() {
    function addClassesForMobile() {
        // Check if the viewport width is 991 pixels or less
        if (window.innerWidth <= 991) {
            document.querySelectorAll('ul.dropdown-menu.nav-level-1 li.menu-item.dropdown.mega-menu').forEach(function(menuItem) {
                // Find the immediate <span> child
                var span = menuItem.querySelector('span');
                
                if (span) {
                    // Add the classes to the <span>
                    span.classList.add('nav-link', 'dropdown-toggle');
                }
            });
        } else {
            // Remove the classes if the viewport is greater than 991px
            document.querySelectorAll('ul.dropdown-menu.nav-level-1 li.menu-item.dropdown.mega-menu .nav-link.dropdown-toggle').forEach(function(span) {
                span.classList.remove('nav-link', 'dropdown-toggle');
            });
        }
    }

    // Run the function on page load
    addClassesForMobile();

    // Add an event listener to handle screen resizing
    window.addEventListener('resize', function() {
        // Run the function again whenever the window is resized
        addClassesForMobile();
    });
    
    
    
});

// document.addEventListener(\"DOMContentLoaded\", function() {
//     // Variables for the slide index and the width of each item
//     let currentIndex = 0;
//     const itemWidth = 242; // width of each .owl-item in pixels
//     const slideInterval = 4000; // 4 seconds

//     // Function to move the slide to the next item
//     function slideCarousel() {
//         const wrapper = document.querySelector('.owl-wrapper');
        
//         // Check if wrapper exists to avoid errors
//         if (!wrapper) return;
        
//         const totalItems = wrapper.querySelectorAll('.owl-item').length;

//         // Update the index and loop back to start if at the end
//         currentIndex = (currentIndex + 1) % totalItems;

//         // Calculate the translation distance
//         const translateX = -currentIndex * itemWidth;

//         // Apply the transformation
//         wrapper.style.transition = 'transform 0.5s ease';
//         wrapper.style.transform = `translate3d(\${translateX}px, 0, 0)`;
//     }

//     // Start the automatic sliding
//     setInterval(slideCarousel, slideInterval);
// });



</script>



<script>

// if (window.innerWidth < 768) {
//     const observer = new MutationObserver((mutationsList, observer) => {
//         document.querySelectorAll('.owl-carousel').forEach((carousel) => {
//             const wrapper = carousel.querySelector('.owl-wrapper');
//             if (!wrapper || wrapper.querySelectorAll('.owl-item').length === 0) {
//                 return;
//             }

//             observer.disconnect();

//             const items = Array.from(wrapper.querySelectorAll('.owl-item'));
//             if (items.length === 0) return;

//             // Clone first and last slides
//             const firstClone = items[0].cloneNode(true);
//             const lastClone = items[items.length - 1].cloneNode(true);
//             wrapper.insertBefore(lastClone, items[0]);
//             wrapper.appendChild(firstClone);

//             // Updated item list to include clones
//             const updatedItems = wrapper.querySelectorAll('.owl-item');
//             const numOfItems = updatedItems.length;
//             const itemWidth = 330;
//             let index = 1;
//             let autoSlideInterval;

//             function updateSliderPosition(skipTransition = false) {
//                 const translateValue = -(index * itemWidth);
//                 wrapper.style.transform = `translate3d(\${translateValue}px, 0, 0)`;
//                 wrapper.style.transition = skipTransition ? 'none' : 'transform 0.5s ease-in-out';
//             }
//             updateSliderPosition(true);

//             function slideCarousel() {
//                 if (index < numOfItems - 2) {
//                     index++;
//                     updateSliderPosition();
//                 } else {
//                     clearInterval(autoSlideInterval);
//                     setTimeout(() => {
//                         index = 1;
//                         updateSliderPosition(true); // Instant reset
//                         startAutoSlide();
//                     }, 3000); // Wait before resetting to the start
//                 }
//             }

//             function startAutoSlide() {
//                 autoSlideInterval = setInterval(slideCarousel, 3000);
//             }

//             function stopAutoSlide() {
//                 clearInterval(autoSlideInterval);
//             }

//             // Add range slider after the owl-wrapper
//             const scrollerDiv = document.createElement('div');
//             scrollerDiv.className = 'horizontal-scroller';
//             const rangeSlider = document.createElement('input');
//             rangeSlider.type = 'range';
//             rangeSlider.min = '0';
//             rangeSlider.max = '100';
//             rangeSlider.value = '0';
//             rangeSlider.className = 'slider-pic';
//             scrollerDiv.appendChild(rangeSlider);
//             wrapper.insertAdjacentElement('afterend', scrollerDiv);

//             startAutoSlide();

//             rangeSlider.addEventListener('input', (e) => {
//                 stopAutoSlide();
//                 index = Math.floor((e.target.value / 100) * (numOfItems - 2)) + 1;
//                 updateSliderPosition();
//             });

//             let startX;
//             let startTranslate;

//             wrapper.addEventListener('touchstart', (e) => {
//                 startX = e.touches[0].clientX;
//                 startTranslate = -(index * itemWidth);
//                 stopAutoSlide();
//                 wrapper.style.transition = \"none\";
//             });

//             wrapper.addEventListener('touchmove', (e) => {
//                 const deltaX = e.touches[0].clientX - startX;
//                 let translateValue = startTranslate + deltaX;
//                 translateValue = Math.max(-(numOfItems - 2) * itemWidth, Math.min(0, translateValue));
//                 wrapper.style.transform = `translate3d(\${translateValue}px, 0, 0)`;
//             });

//             wrapper.addEventListener('touchend', (e) => {
//                 const deltaX = e.changedTouches[0].clientX - startX;
//                 wrapper.style.transition = \"transform 0.5s ease-in-out\";
//                 if (Math.abs(deltaX) > 50) {
//                     index = deltaX > 0 ? Math.max(1, index - 1) : Math.min(numOfItems - 2, index + 1);
//                 }
//                 updateSliderPosition();

//                 setTimeout(startAutoSlide, 3000);
//             });
//         });
//     });

//     observer.observe(document.body, { childList: true, subtree: true });
// }

// \$(document).ready(function() {
//     // Check if there are any anchor tags inside #harnessing-box
//     \$('#harnessing-box a').each(function() {
//         // Calculate the width and add 40px
//         var buttonWidth = \$(this).outerWidth();
        
//         \$(this).css('width', buttonWidth + 40 + 'px');
        
//         console.log('this is width :' +buttonWidth );
//     });
// });

\$(document).ready(function() {
    \$('#harnessing-box a').each(function() {
        // Get the device width
        var deviceWidth = \$(window).width();
        
        // Calculate text width
        var buttonTextWidth = \$(this).text().length * 8; // Approx. 8px per character as a base
        
        console.log(buttonTextWidth);
        
        // Adjust width based on device size
        if (deviceWidth > 991) {
            \$(this).css('width', (buttonTextWidth + 80) + 'px'); // Add 80px for devices above 991px
        } else {
            \$(this).css('width', (buttonTextWidth + 85) + 'px'); // Add 110px for devices below 991px
        }
    });
});


</script>


<style>

.owl-carousel .owl-wrapper {
    display: block;
    width: auto;
    transition: transform 0.5s ease-in-out !important;  /* Smoother transition */
    opacity: 1;
    visibility: visible;
}

.horizontal-scroller {
    margin-top: 10px;
    width: 50%;
}

.slider-pic {
    width: 100%;
}

.vertical-align {
    display: flex;
    align-items: center;
    height: 100%;
    margin: auto;
}

.nodisplay {
    display: none;
}
figure.nobackground {
    background-color: transparent;
}
/*.services-hedingbox span{font-size:18px!important}*/
/*#data_analytics_bg h2,h2{line-height:30px!important}*/
h2,h2>span{font-size:32px!important;
/*line-height:42px!important;*/
    
}
.image{padding:15px!important}



.social_links_list a svg {
    transition: filter 0.3s ease;
}

.social_links_list a:hover svg {
    filter: invert(1);
}


</style>


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_blue_latest", "page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/footer.html.twig";
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
        return array (  231 => 150,  225 => 147,  219 => 144,  213 => 141,  168 => 99,  154 => 87,  132 => 67,  124 => 62,  116 => 59,  108 => 54,  98 => 47,  95 => 46,  93 => 45,  90 => 44,  79 => 35,  60 => 19,  44 => 5,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/footer.html.twig", "/home3/cymetrix/drupal.cymetrixsoft.com/themes/contrib/dxpr_theme/templates/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45);
        static $filters = array("escape" => 19, "merge" => 19);
        static $functions = array("drupal_entity" => 19, "dump" => 47, "file_url" => 99);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'merge'],
                ['drupal_entity', 'dump', 'file_url'],
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
