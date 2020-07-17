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

/* base.html.twig */
class __TwigTemplate_540f19a2959f5dc78fcff9b97195e37105600b5d53a2dca6248a4699920a7578 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\">
        
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"idmkr.io\">
    <meta name=\"base_url\" content=\"http://kys.idmkr.io\">
    <meta name=\"csrf-token\" content=\"utSEZUUxgneXBCQY5My9Djz8rVhqLiG7PLq3ThDA\">
    <!--  favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/luxury-services-logo.png"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.a1042cadda540464eafd9350bb40433a_1547807689.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457005dcd8ab887d5f47791eaa1e3a26_1547807834.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.style.117d2669c8fdd6628dab9a45764bc512_1549289703.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.custom.6b4d49f73674949c14f1216c6eddcb85_1547807836.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-settings.77c694ef3fb511bf87c5b705b555fc2a_1547807825.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-layers.4f1e49eeb6f7351bbdc1fb6e35adb6ed_1547807826.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-navigation.2f4deeb1fe1d3f7c9ab31d29a1133835_1547807825.css\" rel=\"stylesheet\">

        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
         <script>
        window.isMobile = (function() {
            var check = false;
            (function(a){if(/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        })();
    </script>
    <script>
        function onAppReady(handler) {
            \$(handler);
        }
    </script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.modernizr.1c9d48a1e28b608c156f4de214d48a4f_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery.5b69aaaa5f04c52e66580a2dc32d1d69_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.animated-headline.88cb936096e0f8ab70515bc801d8342e_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap-tabcollapse.34017c51086f0e87aa46196565972d00_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.coundown-timer.c8cf6063f2de9fb102572c2c5cbb35d9_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.equalheight.317d8490808d596c8a0f1758d495856c_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.menuzord.1b3c610e36a938dda7612403eff6e3cf_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.smooth-menu.561efb1e63c25f6459bb7d6b910fd0e0_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.imagesloaded.cd624dbd9f9cedc0517e2a007e5a9e99_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.owl-carousel.9a2fb1bcafcaeab824262566db2bddef_1547807835.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.wow.8dcaf0f70a4ccabe591dd6faf3c07bdc_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.scripts.b4ebfafba9aad4e481cd55b4053b8783_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457bf879eca11f66e2de154003ed0f50_1547807833.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.bfaa8e3bbc89c450471bc8cc1b9a0959_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-easing.502fedff28c30ca28b69b469d4f49248_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-countTo.2216a6bac856d869218448a54e6bbc8c_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-sticky.980853b199a69acce57cf93d5a9a3767_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-stellar.55e412525b98bd15386ee154989c3e48_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-inview.0fee8e871d8e8332b973955f71c14a0b_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-shuffle.59f156c2072439edc7423e30643fed01_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-magnific-popup.5830d3754f9847bc3affd25657b7464e_1547807667.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-flexslider.6fd2216059a696cd152f2e674c4e2866_1547807684.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-tools.13f52e879d891fbc0072882de2388d55_1547807823.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-scripts.1d7d66239bf5d82bb032d5316a4e65f8_1547807823.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-video.411acb0dd4c25380bc5cc802d38f611f_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-slideanims.b7012bec777aae6bf942e6b3de7eb74d_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-actions.e3fe630f2ef135883640f4b9287af8cd_1547807821.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-layeranimation.9be5c338de7d5dd501d7abbcda0fbf3b_1547807821.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-kenburn.ff163220ac1c94be65aa01cd40ae3062_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-navigation.2ed69f3ed2a71a822ae8cb9db68f948b_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-migration.f05042883f3b2c4d6fdc843e9d033d3a_1547807821.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-parallax.402830701f2cb1475353aa7335920e6b_1547807822.js\"></script>

        
   
</head>

<body id=\"top\">

<!-- Navigation -->
<header id=\"header\" class=\"tt-nav transparent-header \">
    <div class=\"header-sticky semi-transparent\">
        <div class=\"container\">

            <div id=\"materialize-menu\" class=\"menuzord\">

                <a class=\"brand logo-brand\" href=\"/\"></a>
                <div id=\"mobile-menu\">
                    <div class=\"nav-wrapper\" id=\"toggle\">
                        <span class=\"top\"></span>
                        <span class=\"middle\"></span>
                        <span class=\"bottom\"></span>
                    </div>
                    <div class=\"icon-wrapper\">
                        <span class=\"account\">
\t\t\t\t\t\t\t<a href=\"/templates/auth/profile.html\">
                                <i class=\"material-icons\">&#xE7FD;</i>
                            </a>
\t\t\t\t\t\t</span>
                    </div>
                    <div class=\"nav-overlay\" id=\"overlay\">
                        <nav class=\"overlay-menu\">
                            <ul>
                                <li><a href=\"/\">Home</a></li>
                                <li><a href=\"/templates/jobs/index.html\">Jobs Offers</a></li>
                                <li><a href=\"/templates/compagny.html\">About Us</a></li>
                                <li><a href=\"/templates/contact.html\">Contact</a></li>
                                <li>-</li>
                                <li><a href=\"/templates/auth/profile.html\">Profile</a></li>
                                <li><a href=\"/logout.html\">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                                <span>Login</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn bn-lg gradient secondary btn-block waves-effect waves-light btn-register\">
                                <span>Sign Up</span>
                            </a>

                        </li>
                    </ul>
                    <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                        <li class=\"active dropdown\">
                            <a target=\"_self\" href=\"/\">
                                <i class=\"\"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"/templates/jobs/index.html\">
                                <i class=\"\"></i>
                                <span>Jobs offers</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"/templates/compagny.html\">
                                <i class=\"\"></i>
                                <span>About us</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"/templates/contact.html\">
                                <i class=\"\"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "<!-- Footer -->
<footer class=\"footer footer-four\">
    <div class=\"primary-footer brand-bg text-center\">
        <div class=\"container\">

            <a href=\"#top\" class=\"page-scroll btn-floating btn-large gradient secondary back-top waves-effect waves-light\" data-section=\"#top\">
                <i class=\"material-icons\">&#xE316;</i>
            </a>

            <ul class=\"social-link tt-animate ltr mt-20\">
                <li><a href=\"#!\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"#!\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
            </ul>

            <hr class=\"mt-10\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"brand footer-brand\"></div>

                    <span class=\"copy-text\">© 2019 All right reserved - by <a href=\"https://idmkr.io/\" target=\"_blank\">IDMKR</a> - <a href=\"#!\">Terms of use</a>

                    </span>
                    <div class=\"footer-intro\">
                        <p>Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class=\"secondary-footer brand-bg darken-2 text-center\">
        <div class=\"container\">
            <ul class=\"\" role=\"navigation\">
                <li class=\"active dropdown\">
                    <a target=\"_self\" href=\"/\">
                        <span>Home</span>
                    </a>
                </li>
                <li class=\" dropdown\">
                    <a target=\"_self\" href=\"/template/jobs/jobs.html\">
                        <span>Jobs offers</span>
                    </a>
                </li>
                <li class=\" dropdown\">
                    <a target=\"_self\" href=\"/templates/compagny.html\">
                        <span>About us</span>
                    </a>
                </li>
                <li class=\" dropdown\">
                    <a target=\"_self\" href=\"/templates/contact.html\">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>

";
        // line 227
        $this->displayBlock('javascripts', $context, $blocks);
        echo "  
<!-- RS5.0 Init  -->
<script type=\"text/javascript\">
    document.querySelector(\".rev_slider_wrapper\").setAttribute(\"style\",
        \"background:url('assets/img\"+(
            isMobile ?
                \"/bg1.jpg\":
                \"/bg3.jpg\"
        ) + \"');\" +
        \"background-size:cover;\"+
        \"background-position: center center;\"+
        \"height:\"+window.innerHeight+\"px\"
    );

    onAppReady(function() {
        \$('.preload').remove();
        \$(\".materialize-slider\").revolution({
            sliderType:\"standard\",
            sliderLayout:\"fullscreen\",
            delay:20000,
            navigation: {
                keyboardNavigation: \"on\",
                keyboard_direction: \"horizontal\",
                mouseScrollNavigation: \"off\",
                onHoverStop: \"off\",
                touch: {
                    touchenabled: \"on\",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: \"horizontal\",
                    drag_block_vertical: false
                },
                arrows: {
                    style: \"gyges\",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: \"left\",
                        v_align: \"center\",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: \"right\",
                        v_align: \"center\",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[700,600,500,500],
            disableProgressBar:\"on\",
            parallax: {
                type:\"mouse\",
                origo:\"slidercenter\",
                speed:2000,
                levels:[2,3,4,5,6,7,12,16,10,50],
            }

        });
    });
</script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Luxury Services recruitment & services";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 227,  412 => 167,  394 => 33,  375 => 14,  296 => 227,  235 => 168,  233 => 167,  192 => 129,  184 => 124,  92 => 34,  90 => 33,  78 => 24,  74 => 23,  62 => 14,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\">
        
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>{% block title %}Luxury Services recruitment & services{% endblock %}</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"idmkr.io\">
    <meta name=\"base_url\" content=\"http://kys.idmkr.io\">
    <meta name=\"csrf-token\" content=\"utSEZUUxgneXBCQY5My9Djz8rVhqLiG7PLq3ThDA\">
    <!--  favicon -->
    <link rel=\"shortcut icon\" href=\"{{asset(\"assets/img/luxury-services-logo.png\")}}\">
    <link href=\"{{asset(\"/assets/css/main.css\")}}\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.a1042cadda540464eafd9350bb40433a_1547807689.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457005dcd8ab887d5f47791eaa1e3a26_1547807834.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.style.117d2669c8fdd6628dab9a45764bc512_1549289703.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.custom.6b4d49f73674949c14f1216c6eddcb85_1547807836.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-settings.77c694ef3fb511bf87c5b705b555fc2a_1547807825.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-layers.4f1e49eeb6f7351bbdc1fb6e35adb6ed_1547807826.css\" rel=\"stylesheet\">
    <link href=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-navigation.2f4deeb1fe1d3f7c9ab31d29a1133835_1547807825.css\" rel=\"stylesheet\">

        {% block stylesheets %}{% endblock %}

         <script>
        window.isMobile = (function() {
            var check = false;
            (function(a){if(/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        })();
    </script>
    <script>
        function onAppReady(handler) {
            \$(handler);
        }
    </script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.modernizr.1c9d48a1e28b608c156f4de214d48a4f_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery.5b69aaaa5f04c52e66580a2dc32d1d69_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.animated-headline.88cb936096e0f8ab70515bc801d8342e_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap-tabcollapse.34017c51086f0e87aa46196565972d00_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.coundown-timer.c8cf6063f2de9fb102572c2c5cbb35d9_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.equalheight.317d8490808d596c8a0f1758d495856c_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.menuzord.1b3c610e36a938dda7612403eff6e3cf_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.smooth-menu.561efb1e63c25f6459bb7d6b910fd0e0_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.imagesloaded.cd624dbd9f9cedc0517e2a007e5a9e99_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.owl-carousel.9a2fb1bcafcaeab824262566db2bddef_1547807835.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.wow.8dcaf0f70a4ccabe591dd6faf3c07bdc_1547807687.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.scripts.b4ebfafba9aad4e481cd55b4053b8783_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.bootstrap.457bf879eca11f66e2de154003ed0f50_1547807833.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.materialize.bfaa8e3bbc89c450471bc8cc1b9a0959_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-easing.502fedff28c30ca28b69b469d4f49248_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-countTo.2216a6bac856d869218448a54e6bbc8c_1547807688.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-sticky.980853b199a69acce57cf93d5a9a3767_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-stellar.55e412525b98bd15386ee154989c3e48_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-inview.0fee8e871d8e8332b973955f71c14a0b_1547807685.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-shuffle.59f156c2072439edc7423e30643fed01_1547807686.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-magnific-popup.5830d3754f9847bc3affd25657b7464e_1547807667.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.jquery-flexslider.6fd2216059a696cd152f2e674c4e2866_1547807684.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-tools.13f52e879d891fbc0072882de2388d55_1547807823.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-scripts.1d7d66239bf5d82bb032d5316a4e65f8_1547807823.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-video.411acb0dd4c25380bc5cc802d38f611f_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-slideanims.b7012bec777aae6bf942e6b3de7eb74d_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-actions.e3fe630f2ef135883640f4b9287af8cd_1547807821.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-layeranimation.9be5c338de7d5dd501d7abbcda0fbf3b_1547807821.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-kenburn.ff163220ac1c94be65aa01cd40ae3062_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-navigation.2ed69f3ed2a71a822ae8cb9db68f948b_1547807822.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-migration.f05042883f3b2c4d6fdc843e9d033d3a_1547807821.js\"></script>
    <script src=\"http://kys.idmkr.io/cache/assets/frontend.kys.revolution-ext-parallax.402830701f2cb1475353aa7335920e6b_1547807822.js\"></script>

        
   
</head>

<body id=\"top\">

<!-- Navigation -->
<header id=\"header\" class=\"tt-nav transparent-header \">
    <div class=\"header-sticky semi-transparent\">
        <div class=\"container\">

            <div id=\"materialize-menu\" class=\"menuzord\">

                <a class=\"brand logo-brand\" href=\"/\"></a>
                <div id=\"mobile-menu\">
                    <div class=\"nav-wrapper\" id=\"toggle\">
                        <span class=\"top\"></span>
                        <span class=\"middle\"></span>
                        <span class=\"bottom\"></span>
                    </div>
                    <div class=\"icon-wrapper\">
                        <span class=\"account\">
\t\t\t\t\t\t\t<a href=\"/templates/auth/profile.html\">
                                <i class=\"material-icons\">&#xE7FD;</i>
                            </a>
\t\t\t\t\t\t</span>
                    </div>
                    <div class=\"nav-overlay\" id=\"overlay\">
                        <nav class=\"overlay-menu\">
                            <ul>
                                <li><a href=\"/\">Home</a></li>
                                <li><a href=\"/templates/jobs/index.html\">Jobs Offers</a></li>
                                <li><a href=\"/templates/compagny.html\">About Us</a></li>
                                <li><a href=\"/templates/contact.html\">Contact</a></li>
                                <li>-</li>
                                <li><a href=\"/templates/auth/profile.html\">Profile</a></li>
                                <li><a href=\"/logout.html\">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"{{path('app_login')}}\">
                                <span>Login</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"{{path('app_register')}}\" class=\"btn bn-lg gradient secondary btn-block waves-effect waves-light btn-register\">
                                <span>Sign Up</span>
                            </a>

                        </li>
                    </ul>
                    <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                        <li class=\"active dropdown\">
                            <a target=\"_self\" href=\"/\">
                                <i class=\"\"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"/templates/jobs/index.html\">
                                <i class=\"\"></i>
                                <span>Jobs offers</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"/templates/compagny.html\">
                                <i class=\"\"></i>
                                <span>About us</span>
                            </a>
                        </li>
                        <li class=\" dropdown\">
                            <a target=\"_self\" href=\"/templates/contact.html\">
                                <i class=\"\"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

{% block body %}{% endblock %}
<!-- Footer -->
<footer class=\"footer footer-four\">
    <div class=\"primary-footer brand-bg text-center\">
        <div class=\"container\">

            <a href=\"#top\" class=\"page-scroll btn-floating btn-large gradient secondary back-top waves-effect waves-light\" data-section=\"#top\">
                <i class=\"material-icons\">&#xE316;</i>
            </a>

            <ul class=\"social-link tt-animate ltr mt-20\">
                <li><a href=\"#!\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"#!\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
            </ul>

            <hr class=\"mt-10\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"brand footer-brand\"></div>

                    <span class=\"copy-text\">© 2019 All right reserved - by <a href=\"https://idmkr.io/\" target=\"_blank\">IDMKR</a> - <a href=\"#!\">Terms of use</a>

                    </span>
                    <div class=\"footer-intro\">
                        <p>Luxury Services is a leading professional recruitment consultancy specialising in the recruitment of permanent, contract and temporary positions on behalf of the world’s top employers.</p>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class=\"secondary-footer brand-bg darken-2 text-center\">
        <div class=\"container\">
            <ul class=\"\" role=\"navigation\">
                <li class=\"active dropdown\">
                    <a target=\"_self\" href=\"/\">
                        <span>Home</span>
                    </a>
                </li>
                <li class=\" dropdown\">
                    <a target=\"_self\" href=\"/template/jobs/jobs.html\">
                        <span>Jobs offers</span>
                    </a>
                </li>
                <li class=\" dropdown\">
                    <a target=\"_self\" href=\"/templates/compagny.html\">
                        <span>About us</span>
                    </a>
                </li>
                <li class=\" dropdown\">
                    <a target=\"_self\" href=\"/templates/contact.html\">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>

{% block javascripts %}{% endblock %}  
<!-- RS5.0 Init  -->
<script type=\"text/javascript\">
    document.querySelector(\".rev_slider_wrapper\").setAttribute(\"style\",
        \"background:url('assets/img\"+(
            isMobile ?
                \"/bg1.jpg\":
                \"/bg3.jpg\"
        ) + \"');\" +
        \"background-size:cover;\"+
        \"background-position: center center;\"+
        \"height:\"+window.innerHeight+\"px\"
    );

    onAppReady(function() {
        \$('.preload').remove();
        \$(\".materialize-slider\").revolution({
            sliderType:\"standard\",
            sliderLayout:\"fullscreen\",
            delay:20000,
            navigation: {
                keyboardNavigation: \"on\",
                keyboard_direction: \"horizontal\",
                mouseScrollNavigation: \"off\",
                onHoverStop: \"off\",
                touch: {
                    touchenabled: \"on\",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: \"horizontal\",
                    drag_block_vertical: false
                },
                arrows: {
                    style: \"gyges\",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: \"left\",
                        v_align: \"center\",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: \"right\",
                        v_align: \"center\",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[700,600,500,500],
            disableProgressBar:\"on\",
            parallax: {
                type:\"mouse\",
                origo:\"slidercenter\",
                speed:2000,
                levels:[2,3,4,5,6,7,12,16,10,50],
            }

        });
    });
</script>

</body>
</html>", "base.html.twig", "/shared/httpd/luxury_tp/templates/base.html.twig");
    }
}
