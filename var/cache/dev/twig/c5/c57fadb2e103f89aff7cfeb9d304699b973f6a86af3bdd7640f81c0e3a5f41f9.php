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

/* candidate/_delete_form.html.twig */
class __TwigTemplate_d7c0db74ba0db51869311428bc183e4a59d74be31680b14fc900507875927e2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/_delete_form.html.twig"));

        // line 1
        echo "  <section class=\"section-padding gray-bg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h3 class=\"text-extrabold\">Your K-Yachting account</h3>
                        <div class=\"col-xs-12 col-sm-4\">
                            <div class=\"input-field\">
                                <input required=\"required\" id=\"email\" name=\"email\" type=\"email\" value=\"\">
                                <label for=\"email\">Email</label>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-4\">
                            <div class=\"input-field\">
                                <input id=\"password\" name=\"password\" type=\"password\" value=\"\">
                                <label for=\"password\">Change your password here</label>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-4\">
                            <div class=\"input-field\">
                                <input id=\"password_repeat\" name=\"password_repeat\" type=\"password\" value=\"\">
                                <label for=\"password_repeat\">Confirm your new password</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 mt-40 mb-80 delete-account\">
                         <form method=\"post\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <a href=\"#!\" onclick=\"return prompt('Please Type \\'Delete my account\\' to delete your K-Yachting Services account:') == 'Delete my account'\" class=\"btn btn-block btn-lg waves-effect waves-light\"><i class=\"material-icons\">&#xE872;</i>
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29))), "html", null, true);
        echo "\">
                            <button class=\"btn\">Delete my account</button></a>
                        </form>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                                ";
        // line 40
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 40, $this->source); })()), "UPDATE NOW")) : ("UPDATE NOW")), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>

                </div>
            </section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "candidate/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  86 => 36,  76 => 29,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"section-padding gray-bg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h3 class=\"text-extrabold\">Your K-Yachting account</h3>
                        <div class=\"col-xs-12 col-sm-4\">
                            <div class=\"input-field\">
                                <input required=\"required\" id=\"email\" name=\"email\" type=\"email\" value=\"\">
                                <label for=\"email\">Email</label>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-4\">
                            <div class=\"input-field\">
                                <input id=\"password\" name=\"password\" type=\"password\" value=\"\">
                                <label for=\"password\">Change your password here</label>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-4\">
                            <div class=\"input-field\">
                                <input id=\"password_repeat\" name=\"password_repeat\" type=\"password\" value=\"\">
                                <label for=\"password_repeat\">Confirm your new password</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 mt-40 mb-80 delete-account\">
                         <form method=\"post\" action=\"{{ path('candidate_delete', {'id': candidate.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <a href=\"#!\" onclick=\"return prompt('Please Type \\'Delete my account\\' to delete your K-Yachting Services account:') == 'Delete my account'\" class=\"btn btn-block btn-lg waves-effect waves-light\"><i class=\"material-icons\">&#xE872;</i>
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ candidate.id) }}\">
                            <button class=\"btn\">Delete my account</button></a>
                        </form>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            <a href=\"{{ path('home')}}\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                                {{ button_label|default('UPDATE NOW') }}
                            </button>
                        </div>
                    </div>

                </div>
            </section>", "candidate/_delete_form.html.twig", "/shared/httpd/luxury_tp/templates/candidate/_delete_form.html.twig");
    }
}
