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

/* job_offer/show.html.twig */
class __TwigTemplate_6d90b76b1e7f367e1750070479bd6486a0bd1a05526218cdd8b656a89f83ead0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job_offer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job_offer/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 9, $this->source); })()), "titleJob", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
                        <span class=\"white-text\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 10, $this->source); })()), "reference", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
                        <ol class=\"breadcrumb\">
                            <li>
                                <div class=\"portfolio-nav\">
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> Prev</a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\">Next <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

         <section class=\"single-project-section section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"project-overview\">
                    <div class=\"row mb-80\">
                        <div class=\"col-xs-12 col-md-8\">
                            <p class=\"ref grey-text no-margin\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 30, $this->source); })()), "reference", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                            <h2>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 31, $this->source); })()), "titleJob", [], "any", false, false, false, 31), "html", null, true);
        echo "</h2>
                            <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-xs-12 col-md-4 quick-overview\">
                            <ul class=\"portfolio-meta\">
                                <li><span> Pulished at </span>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</li>
                                <li><span> Position </span>2nd Engineer</li>
                                <li><span> Contract Type </span>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 39, $this->source); })()), "jobType", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                                <li><span> Salary </span>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 40, $this->source); })()), "salary", [], "any", false, false, false, 40), "html", null, true);
        echo " &euro;</li>
                                <li><span> Location </span>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 41, $this->source); })()), "locationJob", [], "any", false, false, false, 41), "html", null, true);
        echo "</li>
                                <li><span> Starting date </span>";
        // line 42
        ((twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 42, $this->source); })()), "closingAt", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 42, $this->source); })()), "closingAt", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</li>
                            </ul>
                            <a class=\"btn btn-block gradient primary mt-30 waves-effect waves-light\" href=\"#!\">Apply for this job</a>
                            <div class=\"btn btn-block btn-success mt-30 waves-effect waves-light disabled\">You have applied for this job</div>
                        </div>
                    </div>
                </div>

                <nav class=\"single-post-navigation no-margin\" role=\"navigation\">
                    <div class=\"row\">

                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"previous-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    <i class=\"fa fa-long-arrow-left\"></i>Previous
                                </a>
                            </div>
                        </div>
                        <div class=\"hidden-xs hidden-sm col-md-4\"></div>


                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"next-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    Next <i class=\"fa fa-long-arrow-right\"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </section>


   ";
        // line 133
        echo "
    <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_offer_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_offer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["job_offer"]) || array_key_exists("job_offer", $context) ? $context["job_offer"] : (function () { throw new RuntimeError('Variable "job_offer" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 138
        echo twig_include($this->env, $context, "job_offer/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job_offer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 138,  180 => 136,  175 => 134,  172 => 133,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  117 => 37,  109 => 32,  105 => 31,  101 => 30,  78 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
   <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text\">{{ job_offer.titleJob }}</h2>
                        <span class=\"white-text\">{{ job_offer.reference }}</span>
                        <ol class=\"breadcrumb\">
                            <li>
                                <div class=\"portfolio-nav\">
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> Prev</a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\"><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                                    <a href=\"#!\" class=\"waves-effect waves-dark\">Next <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

         <section class=\"single-project-section section-padding light-gray-bg\">
            <div class=\"container\">
                <div class=\"project-overview\">
                    <div class=\"row mb-80\">
                        <div class=\"col-xs-12 col-md-8\">
                            <p class=\"ref grey-text no-margin\">{{ job_offer.reference }}</p>
                            <h2>{{ job_offer.titleJob }}</h2>
                            <p>{{ job_offer.description }}</p>
                        </div>

                        <div class=\"col-xs-12 col-md-4 quick-overview\">
                            <ul class=\"portfolio-meta\">
                                <li><span> Pulished at </span>{{ job_offer.createdAt ? job_offer.createdAt|date('Y-m-d H:i:s') : '' }}</li>
                                <li><span> Position </span>2nd Engineer</li>
                                <li><span> Contract Type </span>{{ job_offer.jobType }}</li>
                                <li><span> Salary </span>{{ job_offer.salary }} &euro;</li>
                                <li><span> Location </span>{{ job_offer.locationJob }}</li>
                                <li><span> Starting date </span>{{ job_offer.closingAt ? job_offer.closingAt|date('Y-m-d H:i:s') : '' }}</li>
                            </ul>
                            <a class=\"btn btn-block gradient primary mt-30 waves-effect waves-light\" href=\"#!\">Apply for this job</a>
                            <div class=\"btn btn-block btn-success mt-30 waves-effect waves-light disabled\">You have applied for this job</div>
                        </div>
                    </div>
                </div>

                <nav class=\"single-post-navigation no-margin\" role=\"navigation\">
                    <div class=\"row\">

                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"previous-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    <i class=\"fa fa-long-arrow-left\"></i>Previous
                                </a>
                            </div>
                        </div>
                        <div class=\"hidden-xs hidden-sm col-md-4\"></div>


                        <div class=\"col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"next-post-link\">
                                <a class=\"btn border primary waves-effect waves-dark\" href=\"#!\">
                                    Next <i class=\"fa fa-long-arrow-right\"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </section>


   {#  <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ job_offer.id }}</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>{{ job_offer.reference }}</td>
            </tr>
            <tr>
                <th>Client</th>
                <td>{{ job_offer.client }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ job_offer.description }}</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>{{ job_offer.isActivated ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Notes_job</th>
                <td>{{ job_offer.notesJob }}</td>
            </tr>
            <tr>
                <th>Title_job</th>
                <td>{{ job_offer.titleJob }}</td>
            </tr>
            <tr>
                <th>Job_type</th>
                <td>{{ job_offer.jobType }}</td>
            </tr>
            <tr>
                <th>Location_job</th>
                <td>{{ job_offer.locationJob }}</td>
            </tr>
            <tr>
                <th>Category_job</th>
                <td>{{ job_offer.categoryJob }}</td>
            </tr>
            <tr>
                <th>Closing_at</th>
                <td>{{ job_offer.closingAt ? job_offer.closingAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>{{ job_offer.salary }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ job_offer.createdAt ? job_offer.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table> #}

    <a href=\"{{ path('job_offer_index') }}\">back to list</a>

    <a href=\"{{ path('job_offer_edit', {'id': job_offer.id}) }}\">edit</a>

    {{ include('job_offer/_delete_form.html.twig') }}
{% endblock %}
", "job_offer/show.html.twig", "/shared/httpd/luxury_tp/templates/job_offer/show.html.twig");
    }
}
