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

/* job_offer/index.html.twig */
class __TwigTemplate_37816c15324bec214bf1d9df518daa57293ca91c88934757c4b39b31a103800b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job_offer/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "JobOffer index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>JobOffer index</h1>

 <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Our job offers</h2>
                        <span class=\"white-text\">Search and filter by job category</span>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Page Content-->
        <section id=\"job-offers\" class=\"section-padding gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-40\">
                    <h2 class=\"section-title\">We have the perfect job for you</h2>
                    <p class=\"section-sub\">just like our candidates, we offer quality, serious & reliable job offers.</p>
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
                </div>
                 <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["job_offers"]) || array_key_exists("job_offers", $context) ? $context["job_offers"] : (function () { throw new RuntimeError('Variable "job_offers" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job_offer"]) {
            // line 46
            echo "                <div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">
                  <div class=\"portfolio-item\" data-groups='[\"all\", \"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "categoryJob", [], "any", false, false, false, 47), "html", null, true);
            echo "\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "titleJob", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                                            <span class=\"ref grey-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "reference", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "salary", [], "any", false, false, false, 57), "html", null, true);
            echo "&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>";
            // line 60
            ((twig_get_attribute($this->env, $this->source, $context["job_offer"], "createdAt", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "createdAt", [], "any", false, false, false, 60), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "locationJob", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job_offer"], "description", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_offer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job_offer"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                        ";
            // line 73
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                    
    
       
      
      ";
            // line 103
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job_offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_offer_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job_offer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 111,  210 => 108,  201 => 104,  196 => 103,  183 => 73,  178 => 69,  172 => 66,  166 => 63,  160 => 60,  154 => 57,  147 => 53,  143 => 52,  135 => 47,  132 => 46,  127 => 45,  88 => 8,  78 => 7,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block title %}JobOffer index{% endblock %}

{% block body %}
    <h1>JobOffer index</h1>

 <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">Our job offers</h2>
                        <span class=\"white-text\">Search and filter by job category</span>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Page Content-->
        <section id=\"job-offers\" class=\"section-padding gray-bg\">
            <div class=\"container\">
                <div class=\"text-center mb-40\">
                    <h2 class=\"section-title\">We have the perfect job for you</h2>
                    <p class=\"section-sub\">just like our candidates, we offer quality, serious & reliable job offers.</p>
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
                </div>
                 <tbody>
                    {% for job_offer in job_offers %}
                <div class=\"portfolio portfolio-with-title col-2 gutter mt-30\">
                  <div class=\"portfolio-item\" data-groups='[\"all\", \"{{ job_offer.categoryJob }}\"]'>
                            <div class=\"portfolio-wrapper\">
                                <div class=\"card job-card\">
                                    <div class=\"card-content\">
                                        <span class=\"title\">
                                            <span class=\"card-title\">{{ job_offer.titleJob }}</span>
                                            <span class=\"ref grey-text\">{{ job_offer.reference }}</span>
                                        </span>
                                        <div class=\"metas mb-20\">
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE53E;</i>{{ job_offer.salary }}&euro;
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE916;</i>{{ job_offer.createdAt ? job_offer.createdAt|date('Y-m-d H:i:s') : '' }}
                                            </div>
                                            <div class=\"meta\">
                                                <i class=\"material-icons\">&#xE55F;</i>{{ job_offer.locationJob }}
                                            </div>
                                        </div>
                                        <p class=\"truncate-text\">{{ job_offer.description }}</p>
                                    </div>
                                    <div class=\"card-action\">
                                        <a class=\"btn btn-md primary border waves-effect waves-dark\" href=\"{{ path('job_offer_show', {'id': job_offer.id}) }}\">Details</a>
                                        <a class=\"btn btn-md primary waves-effect waves-light\" href=\"#!\">Apply</a>
                                        {# <a href=\"{{ path('job_offer_show', {'id': job_offer.id}) }}\">show</a>
                                        <a href=\"{{ path('job_offer_edit', {'id': job_offer.id}) }}\">edit</a> #}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                    
    
       
      
      {#       <tr>
                <td>{{ job_offer.id }}</td>
                <td>{{ job_offer.reference }}</td>
                <td>{{ job_offer.client }}</td>
                <td>{{ job_offer.description }}</td>
                <td>{{ job_offer.isActivated ? 'Yes' : 'No' }}</td>
                <td>{{ job_offer.notesJob }}</td>
                <td>{{ job_offer.titleJob }}</td>
                <td>{{ job_offer.jobType }}</td>
                <td>{{ job_offer.locationJob }}</td>
                <td>{{ job_offer.categoryJob }}</td>
                <td>{{ job_offer.closingAt ? job_offer.closingAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ job_offer.salary }}</td>
                <td>{{ job_offer.createdAt ? job_offer.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('job_offer_show', {'id': job_offer.id}) }}\">show</a>
                    <a href=\"{{ path('job_offer_edit', {'id': job_offer.id}) }}\">edit</a>
                </td>
            </tr> #}
        {% else %}
            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('job_offer_new') }}\">Create new</a>
{% endblock %}
", "job_offer/index.html.twig", "/shared/httpd/luxury_tp/templates/job_offer/index.html.twig");
    }
}
