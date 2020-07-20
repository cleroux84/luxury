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

/* candidate/_form.html.twig */
class __TwigTemplate_adf69830c9b537ff2096c8ce46e98baf7bc98d0f2a7f56235fc64b5d3b35f8bb extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/_form.html.twig"));

        // line 1
        echo " <!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Your profile</h2>
                        <span class=\"white-text\">Personnal & Professionnal informations</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Page Content-->
        <section class=\"gray-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"score-container\">
                        <h4>
                            <img src=\"https://i.imgur.com/s9bPVaK.gif\" style=\"height: 80px; width: 201px;\"> &nbsp;
                            &nbsp; Hooray ! Your profile is complete.
                        </h4>
                        <div class=\"c100 p100 small complete \">
                            <span>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["pourcentage"]) || array_key_exists("pourcentage", $context) ? $context["pourcentage"] : (function () { throw new RuntimeError('Variable "pourcentage" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "%</span>
                            <div class=\"slice\">
                                <div class=\"bar\"></div>
                                <div class=\"fill\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </section>

            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["method" => "POST"]);
        echo "
            <section class=\"section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h3 class=\"text-extrabold\">Your personal informations</h3>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                          ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "gender", [], "any", false, false, false, 48), 'label', ["label" => "Your gender"]);
        echo "
                          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "gender", [], "any", false, false, false, 49), 'widget');
        echo "
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "first_name", [], "any", false, false, false, 52), 'label', ["label" => "First name"]);
        echo "
                          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "first_name", [], "any", false, false, false, 53), 'widget');
        echo "
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                          ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "last_name", [], "any", false, false, false, 56), 'label', ["label" => "Last name"]);
        echo "
                          ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "last_name", [], "any", false, false, false, 57), 'widget');
        echo "
                        </div>
                    </div>
                     <div class=\"row\">
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "current_location", [], "any", false, false, false, 62), 'label', ["label" => "Current location"]);
        echo "
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "current_location", [], "any", false, false, false, 63), 'widget');
        echo "
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-8\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "address", [], "any", false, false, false, 66), 'label', ["label" => "Address"]);
        echo "
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "address", [], "any", false, false, false, 67), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                         <div class=\"btn btn-lg primary waves-effect waves-light\">
                            <span><i class=\"material-icons\">&#xE24D;</i> your picture</span>
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "profil_picture", [], "any", false, false, false, 74), 'widget');
        echo "
                            </div>
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "country", [], "any", false, false, false, 78), 'label', ["label" => "Country"]);
        echo "
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "country", [], "any", false, false, false, 79), 'widget');
        echo "
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nationality", [], "any", false, false, false, 82), 'label', ["label" => "Nationality"]);
        echo "
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "nationality", [], "any", false, false, false, 83), 'widget');
        echo "
                        </div>
                    </div>
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                  
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "date_birth", [], "any", false, false, false, 91), 'label', ["label" => "Birthdate"]);
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "date_birth", [], "any", false, false, false, 92), 'widget');
        echo "
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            <label for=\"birthplace\">Birthplace</label>
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "place_birth", [], "any", false, false, false, 96), 'label', ["label" => "place_birth"]);
        echo "
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "place_birth", [], "any", false, false, false, 97), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-40\">
                        <h3 class=\"text-extrabold\">Your professional profile</h3>
                        <div class=\"col-xs-12 col-sm-6\">

                            <div class=\"card card-panel passport\">
                               
                                    <div class=\"btn btn-lg primary waves-effect waves-light\">
                                    <span><i class=\"material-icons\">&#xE24D;</i> Passport</span>

                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "passport_file", [], "any", false, false, false, 109), 'widget');
        echo "
                                        
                                    </div>
                                    <br><br>

                                    <div class=\"btn btn-lg primary waves-effect waves-light\">
                                    <span><i class=\"material-icons\">&#xE24D;</i> CV</span>
    
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "cv_file", [], "any", false, false, false, 117), 'widget');
        echo "
                                    </div>
                                   
                            </div>
                            

                            </div>
                        <div class=\"col-xs-12 col-sm-6\">
                            
                              ";
        // line 129
        echo "                                 <div class=\"input-field\" style=\"margin-top: 5px;\">
                                 ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "experience", [], "any", false, false, false, 130), 'widget');
        echo "
                                </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"input-field\">
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "short_description", [], "any", false, false, false, 135), 'widget');
        echo "                                
                                <label for=\"description\">Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests ). You can also paste any link you want.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                                ";
        // line 144
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 144, $this->source); })()), "UPDATE NOW")) : ("UPDATE NOW")), "html", null, true);
        echo "
                            </button>
                        </div>
";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "candidate/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 147,  262 => 144,  250 => 135,  242 => 130,  239 => 129,  227 => 117,  216 => 109,  201 => 97,  197 => 96,  190 => 92,  186 => 91,  175 => 83,  171 => 82,  165 => 79,  161 => 78,  154 => 74,  144 => 67,  140 => 66,  134 => 63,  130 => 62,  122 => 57,  118 => 56,  112 => 53,  108 => 52,  102 => 49,  98 => 48,  89 => 42,  74 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Page -->
    <div class=\"page\">

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Your profile</h2>
                        <span class=\"white-text\">Personnal & Professionnal informations</span>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"#!\">Home</a></li>
                            <li class=\"active\">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Page Content-->
        <section class=\"gray-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"score-container\">
                        <h4>
                            <img src=\"https://i.imgur.com/s9bPVaK.gif\" style=\"height: 80px; width: 201px;\"> &nbsp;
                            &nbsp; Hooray ! Your profile is complete.
                        </h4>
                        <div class=\"c100 p100 small complete \">
                            <span>{{ pourcentage }}%</span>
                            <div class=\"slice\">
                                <div class=\"bar\"></div>
                                <div class=\"fill\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </section>

            {{ form_start(form, {'method':'POST'}) }}
            <section class=\"section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h3 class=\"text-extrabold\">Your personal informations</h3>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                          {{form_label(form.gender, 'Your gender')}}
                          {{form_widget(form.gender)}}
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                          {{form_label(form.first_name, 'First name')}}
                          {{form_widget(form.first_name)}}
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                          {{form_label(form.last_name, 'Last name')}}
                          {{form_widget(form.last_name)}}
                        </div>
                    </div>
                     <div class=\"row\">
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            {{form_label(form.current_location, 'Current location')}}
                            {{form_widget(form.current_location)}}
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-8\">
                            {{form_label(form.address, 'Address')}}
                            {{form_widget(form.address)}}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                         <div class=\"btn btn-lg primary waves-effect waves-light\">
                            <span><i class=\"material-icons\">&#xE24D;</i> your picture</span>
                            {{ form_widget(form.profil_picture) }}
                            </div>
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            {{form_label(form.country, 'Country')}}
                            {{form_widget(form.country)}}
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            {{form_label(form.nationality, 'Nationality')}}
                            {{form_widget(form.nationality)}}
                        </div>
                    </div>
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                  
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            {{form_label(form.date_birth, 'Birthdate')}}
                            {{form_widget(form.date_birth)}}
                        </div>
                         <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            <label for=\"birthplace\">Birthplace</label>
                            {{form_label(form.place_birth, 'place_birth')}}
                            {{form_widget(form.place_birth)}}
                        </div>
                    </div>
                    <div class=\"row mt-40\">
                        <h3 class=\"text-extrabold\">Your professional profile</h3>
                        <div class=\"col-xs-12 col-sm-6\">

                            <div class=\"card card-panel passport\">
                               
                                    <div class=\"btn btn-lg primary waves-effect waves-light\">
                                    <span><i class=\"material-icons\">&#xE24D;</i> Passport</span>

                                        {{ form_widget(form.passport_file) }}
                                        
                                    </div>
                                    <br><br>

                                    <div class=\"btn btn-lg primary waves-effect waves-light\">
                                    <span><i class=\"material-icons\">&#xE24D;</i> CV</span>
    
                                        {{ form_widget(form.cv_file) }}
                                    </div>
                                   
                            </div>
                            

                            </div>
                        <div class=\"col-xs-12 col-sm-6\">
                            
                              {#   <div class=\"input-field\" style=\"margin-top: 5px;\">
                                {{form_widget(form.job_category)}}
                                </div> #}
                                 <div class=\"input-field\" style=\"margin-top: 5px;\">
                                 {{form_widget(form.experience)}}
                                </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"input-field\">
                                {{form_widget(form.short_description)}}                                
                                <label for=\"description\">Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests ). You can also paste any link you want.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                                {{ button_label|default('UPDATE NOW') }}
                            </button>
                        </div>
{{ form_end(form) }}
", "candidate/_form.html.twig", "/shared/httpd/luxury_tp/templates/candidate/_form.html.twig");
    }
}
