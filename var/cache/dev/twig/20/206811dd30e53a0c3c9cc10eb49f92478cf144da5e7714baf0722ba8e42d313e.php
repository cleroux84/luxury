<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_3ebdcb42771fbb271bcdaa634cd180dee1a2ec5b82e9e38bad2efc34847dbc71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"base\">

    <!-- Page -->
    <div class=\"page\">

        <!-- RS5.0 Core JS Files -->

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

        <!-- start revolution slider 5.0 -->
        <section class=\"rev_slider_wrapper\">
            <div class=\"rev_slider materialize-slider\">
                <ul>

                    <!-- slide 1 start -->
                    <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                        <!-- MAIN IMAGE -->
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg1.jpg"), "html", null, true);
        echo "\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption rev-heading tp-resizeme\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['-80','-80','-80','-80']\"
                             data-fontsize=\"['60','55','50','45']\"
                             data-lineheight=\"['60','60','55','50']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"800\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 5; white-space: nowrap;padding-bottom: 20px;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Luxury Services</h1>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption tp-resizeme rev-subheading\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['0','0','10','10']\"
                             data-fontsize=\"['20','20','17','15']\"
                             data-width=\"['1200', '800', '600', '400']\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1000\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 6; white-space: nowrap;\">
                            <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption tp-resizeme rev-btn\"
                             data-x=\"['center','center','center','center']\"
                             data-hoffset=\"['0','0','0','0']\"
                             data-y=\"['middle','middle','middle','middle']\"
                             data-voffset=\"['130','130','130','150']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-style_hover=\"cursor:default;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1200\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 7; white-space: nowrap;\">
                            <a href=\"#job-offers\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                        </div>
                    </li>
                    <!-- slide 1 end -->

                    <!-- slide 2 start -->
                    <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                        <!-- MAIN IMAGE -->
                        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg3.jpg"), "html", null, true);
        echo "\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption rev-heading tp-resizeme\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['-80','-80','-80','-80']\"
                             data-fontsize=\"['60','55','50','45']\"
                             data-lineheight=\"['60','60','55','50']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"800\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 5; white-space: nowrap;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Recruitment & services</h1>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption tp-resizeme rev-subheading\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['0','0','10','30']\"
                             data-fontsize=\"['20','20','17','15']\"
                             data-width=\"['1200', '800', '600', '400']\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1000\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 6; white-space: nowrap;\">
                            <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption tp-resizeme rev-btn\"
                             data-x=\"['center','center','center','center']\"
                             data-hoffset=\"['0','0','0','0']\"
                             data-y=\"['middle','middle','middle','middle']\"
                             data-voffset=\"['130','130','140','170']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-style_hover=\"cursor:default;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1200\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 7; white-space: nowrap;\">
                            <a href=\"#job-offers\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                        </div>

                    </li>
                    <!-- slide 2 end -->

                </ul>
            </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->

        <!-- Page Content-->
        <!--<section class=\"full-width promo-box brand-bg ptb-50\">-->
            <!--<div class=\"container\">-->
                <!---->
            <!--</div>-->
        <!--</section>-->
        <section class=\"ptb-50 brand-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 mb-40\">
                        <div class=\"promo-info\">
                            <span class=\"white-text\">Whether you're an employer or a candidate looking for jobs</span>
                            <h3 class=\"white-text text-bold text-uppercase no-margin\">WE HAVE THE SOLUTION FOR YOU</h3>
                        </div>
                        <div class=\"promo-btn\">
                            <a href=\"/templates/contact.html\" class=\"btn border secondary waves-effect waves-light\">Contact Us</a>
                        </div>
                    </div>
                </div>

                <hr class=\"mt-10 mb-50\">

                <div class=\"text-center\">
                    <h2 class=\"section-title primary-text\">Who We are</h2>
                    <p class=\"section-sub white-text\">Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
                </div>
                <br>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
                            </ol>

                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"item active\">
                                    <img class=\"img-responsive\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"img-responsive\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slide2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <a class=\"left carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <h3 class=\"primary-text\">Our philosophy</h3>
                        <p class=\"white-text\">Our role is to work with employers and job seekers to facilitate a successful match. This can range from advising a global company on a candidate sourcing strategy to helping a job seeker find their dream job.</p>
                    </div>

                    <div class=\"text-center\">
                        <a href=\"/templates/company.html\" class=\"btn gradient secondary waves-effect waves-light mt-40\">More about us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"cta-candidate bg-fixed bg-cover overlay dark-5 padding-top-70 padding-bottom-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"valign-wrapper text-center\">
                        <div class=\"hero-intro valign-cell\">
                            <h2 class=\"tt-headline clip is-full-width no-margin\">
                                <span>You are </span>
                                <span class=\"tt-words-wrapper\">
                                    <b class=\"is-visible\">Commercial</b>
                                    <b>Creative</b>
                                    <b>Marketing & PR</b>
                                    <b>Technology</b>
                                    <b>Fashion & luxury</b>
                                    <b>Retail sales</b>
                                </span>
                            </h2>
                            <h3 class=\"c-secondary mb-30 no-margin\">Sign-up and apply for jobs now</h3>
                            <p class=\"white-text section-sub\">Each one of your skills is seen as precious resource to us, each one of your personality traits are considered as an added on value. Joining us is allowing our recruitment expertise and personal guidance to bring the best out in you by choosing the most suited position.</p>

                            <a href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/templates/auth/register.html"), "html", null, true);
        echo "\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"job-offers\" class=\"section-padding gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-40\">
                    <h2 class=\"section-title\">Job offers</h2>
                    <p class=\"section-sub\">Just like our candidates, we offer quality, serious & reliable positions. Come discover them and we will put you in contact with the perfect team for you to form the perfect crew.</p>
                </div>
                <div class=\"portfolio-container\">

                    <ul class=\"portfolio-filter brand-filter text-center\">
                        <li class=\"active waves-effect waves-light\" data-group=\"all\">All</li>
                        <li class=\" waves-effect waves-light\" data-group=\"commercial\">Commercial</li>
                        <li class=\" waves-effect waves-light\" data-group=\"retail\">Retail sales</li>
                        <li class=\" waves-effect waves-light\" data-group=\"creative\">Creative</li>
                        <li class=\" waves-effect waves-light\" data-group=\"technology\">Technology</li>
                        <li class=\" waves-effect waves-light\" data-group=\"marketing\">Marketing & PR</li>
                        <li class=\" waves-effect waves-light\" data-group=\"fashion\">Fashion & luxury</li>
                        <li class=\" waves-effect waves-light\" data-group=\"management\">Management & HR</li>
                    </ul>
                    <div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">

                        <div class=\"portfolio-item\" data-groups='[\"all\", \"commercial\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"commercial\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"creative\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"commercial\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"no-item\"></div>

                    </div>

                    <div class=\"text-center\">
                        <a href=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/templates/jobs/index.html"), "html", null, true);
        echo "\" class=\"btn gradient secondary waves-effect waves-light mt-30\">View all job offers</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 405,  357 => 261,  309 => 216,  303 => 213,  186 => 99,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<div class=\"base\">

    <!-- Page -->
    <div class=\"page\">

        <!-- RS5.0 Core JS Files -->

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

        <!-- start revolution slider 5.0 -->
        <section class=\"rev_slider_wrapper\">
            <div class=\"rev_slider materialize-slider\">
                <ul>

                    <!-- slide 1 start -->
                    <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                        <!-- MAIN IMAGE -->
                        <img src=\"{{asset(\"assets/img/bg1.jpg\")}}\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption rev-heading tp-resizeme\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['-80','-80','-80','-80']\"
                             data-fontsize=\"['60','55','50','45']\"
                             data-lineheight=\"['60','60','55','50']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"800\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 5; white-space: nowrap;padding-bottom: 20px;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Luxury Services</h1>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption tp-resizeme rev-subheading\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['0','0','10','10']\"
                             data-fontsize=\"['20','20','17','15']\"
                             data-width=\"['1200', '800', '600', '400']\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1000\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 6; white-space: nowrap;\">
                            <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption tp-resizeme rev-btn\"
                             data-x=\"['center','center','center','center']\"
                             data-hoffset=\"['0','0','0','0']\"
                             data-y=\"['middle','middle','middle','middle']\"
                             data-voffset=\"['130','130','130','150']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-style_hover=\"cursor:default;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1200\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 7; white-space: nowrap;\">
                            <a href=\"#job-offers\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                        </div>
                    </li>
                    <!-- slide 1 end -->

                    <!-- slide 2 start -->
                    <li data-transition=\"parallaxtoleft\" data-slotamount=\"default\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\">

                        <!-- MAIN IMAGE -->
                        <img src=\"{{asset(\"assets/img/bg3.jpg\")}}\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption rev-heading tp-resizeme\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['-80','-80','-80','-80']\"
                             data-fontsize=\"['60','55','50','45']\"
                             data-lineheight=\"['60','60','55','50']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"800\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 5; white-space: nowrap;\"><h1 class=\"rev-heading text-extrabold white-text text-center\">Recruitment & services</h1>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption tp-resizeme rev-subheading\"
                             data-x=\"center\"
                             data-y=\"center\"
                             data-voffset=\"['0','0','10','30']\"
                             data-fontsize=\"['20','20','17','15']\"
                             data-width=\"['1200', '800', '600', '400']\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1000\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 6; white-space: nowrap;\">
                            <h4 class=\"white-text text-center\">Bringing job seekers and employers together for more that 40 years</h4>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption tp-resizeme rev-btn\"
                             data-x=\"['center','center','center','center']\"
                             data-hoffset=\"['0','0','0','0']\"
                             data-y=\"['middle','middle','middle','middle']\"
                             data-voffset=\"['130','130','140','170']\"
                             data-width=\"none\"
                             data-height=\"none\"
                             data-whitespace=\"nowrap\"
                             data-transform_idle=\"o:1;\"
                             data-style_hover=\"cursor:default;\"
                             data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;\"
                             data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                             data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\"
                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                             data-start=\"1200\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-responsive_offset=\"on\"
                             style=\"z-index: 7; white-space: nowrap;\">
                            <a href=\"#job-offers\" class=\"btn btn-lg gradient secondary waves-effect waves-light page-scroll\">View Jobs</a>
                        </div>

                    </li>
                    <!-- slide 2 end -->

                </ul>
            </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->

        <!-- Page Content-->
        <!--<section class=\"full-width promo-box brand-bg ptb-50\">-->
            <!--<div class=\"container\">-->
                <!---->
            <!--</div>-->
        <!--</section>-->
        <section class=\"ptb-50 brand-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 mb-40\">
                        <div class=\"promo-info\">
                            <span class=\"white-text\">Whether you're an employer or a candidate looking for jobs</span>
                            <h3 class=\"white-text text-bold text-uppercase no-margin\">WE HAVE THE SOLUTION FOR YOU</h3>
                        </div>
                        <div class=\"promo-btn\">
                            <a href=\"/templates/contact.html\" class=\"btn border secondary waves-effect waves-light\">Contact Us</a>
                        </div>
                    </div>
                </div>

                <hr class=\"mt-10 mb-50\">

                <div class=\"text-center\">
                    <h2 class=\"section-title primary-text\">Who We are</h2>
                    <p class=\"section-sub white-text\">Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
                </div>
                <br>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div id=\"project-slider\" class=\"carousel slide boot-slider\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#project-slider\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#project-slider\" data-slide-to=\"1\"></li>
                            </ol>

                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"item active\">
                                    <img class=\"img-responsive\" src=\"{{asset(\"assets/img/slide1.jpg\")}}\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"img-responsive\" src=\"{{asset(\"assets/img/slide2.jpg\")}}\" alt=\"\">
                                </div>
                            </div>

                            <a class=\"left carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#project-slider\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <h3 class=\"primary-text\">Our philosophy</h3>
                        <p class=\"white-text\">Our role is to work with employers and job seekers to facilitate a successful match. This can range from advising a global company on a candidate sourcing strategy to helping a job seeker find their dream job.</p>
                    </div>

                    <div class=\"text-center\">
                        <a href=\"/templates/company.html\" class=\"btn gradient secondary waves-effect waves-light mt-40\">More about us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"cta-candidate bg-fixed bg-cover overlay dark-5 padding-top-70 padding-bottom-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"valign-wrapper text-center\">
                        <div class=\"hero-intro valign-cell\">
                            <h2 class=\"tt-headline clip is-full-width no-margin\">
                                <span>You are </span>
                                <span class=\"tt-words-wrapper\">
                                    <b class=\"is-visible\">Commercial</b>
                                    <b>Creative</b>
                                    <b>Marketing & PR</b>
                                    <b>Technology</b>
                                    <b>Fashion & luxury</b>
                                    <b>Retail sales</b>
                                </span>
                            </h2>
                            <h3 class=\"c-secondary mb-30 no-margin\">Sign-up and apply for jobs now</h3>
                            <p class=\"white-text section-sub\">Each one of your skills is seen as precious resource to us, each one of your personality traits are considered as an added on value. Joining us is allowing our recruitment expertise and personal guidance to bring the best out in you by choosing the most suited position.</p>

                            <a href=\"{{asset(\"/templates/auth/register.html\")}}\" class=\"btn border secondary waves-effect waves-light mt-40\">Join us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"job-offers\" class=\"section-padding gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-40\">
                    <h2 class=\"section-title\">Job offers</h2>
                    <p class=\"section-sub\">Just like our candidates, we offer quality, serious & reliable positions. Come discover them and we will put you in contact with the perfect team for you to form the perfect crew.</p>
                </div>
                <div class=\"portfolio-container\">

                    <ul class=\"portfolio-filter brand-filter text-center\">
                        <li class=\"active waves-effect waves-light\" data-group=\"all\">All</li>
                        <li class=\" waves-effect waves-light\" data-group=\"commercial\">Commercial</li>
                        <li class=\" waves-effect waves-light\" data-group=\"retail\">Retail sales</li>
                        <li class=\" waves-effect waves-light\" data-group=\"creative\">Creative</li>
                        <li class=\" waves-effect waves-light\" data-group=\"technology\">Technology</li>
                        <li class=\" waves-effect waves-light\" data-group=\"marketing\">Marketing & PR</li>
                        <li class=\" waves-effect waves-light\" data-group=\"fashion\">Fashion & luxury</li>
                        <li class=\" waves-effect waves-light\" data-group=\"management\">Management & HR</li>
                    </ul>
                    <div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">

                        <div class=\"portfolio-item\" data-groups='[\"all\", \"commercial\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"commercial\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"creative\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portfolio-item\" data-groups='[\"all\", \"commercial\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">2nd assistant position</span>
                                            <span class=\"ref grey-text\">Ref. 1062</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>45k&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>2018-10-01
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>Paris
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">Nulla interdum, erat et mollis eleifend, urna turpis pellentesque dolor, sed rhoncus erat est sit amet diam. Aliquam dignissim ipsum nec lorem pulvinar.</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"/templates/jobs/show.html\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"no-item\"></div>

                    </div>

                    <div class=\"text-center\">
                        <a href=\"{{asset(\"/templates/jobs/index.html\")}}\" class=\"btn gradient secondary waves-effect waves-light mt-30\">View all job offers</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>
{% endblock %}
", "home/index.html.twig", "/shared/httpd/luxury_tp/templates/home/index.html.twig");
    }
}
