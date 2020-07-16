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

/* candidate/index.html.twig */
class __TwigTemplate_0438796dffe50f9abe5387ec6e10d6e1ce1ab700e62e090b867639531194d52b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate/index.html.twig", 1);
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

        echo "Candidate index";
        
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
        echo "    <h1>Candidate index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>IsVerified</th>
                <th>Gender</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>Address</th>
                <th>Country</th>
                <th>Nationality</th>
                <th>Passport</th>
                <th>Passport_file</th>
                <th>Cv_file</th>
                <th>Profil_picture</th>
                <th>Current_location</th>
                <th>Date_birth</th>
                <th>Place_birth</th>
                <th>Availability</th>
                <th>Job_category</th>
                <th>Experience</th>
                <th>Short_description</th>
                <th>Notes_candidate</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Deleted_at</th>
                <th>Files</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "email", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "roles", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["candidate"], "roles", [], "any", false, false, false, 46)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "password", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo ((twig_get_attribute($this->env, $this->source, $context["candidate"], "isVerified", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "gender", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "firstName", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "lastName", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "address", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "nationality", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo ((twig_get_attribute($this->env, $this->source, $context["candidate"], "passport", [], "any", false, false, false, 55)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "passportFile", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "cvFile", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "profilPicture", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "currentLocation", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "dateBirth", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "dateBirth", [], "any", false, false, false, 60), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "placeBirth", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo ((twig_get_attribute($this->env, $this->source, $context["candidate"], "availability", [], "any", false, false, false, 62)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "jobCategory", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "experience", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "shortDescription", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "notesCandidate", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "createdAt", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "createdAt", [], "any", false, false, false, 67), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 68
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "updatedAt", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "updatedAt", [], "any", false, false, false, 68), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 69
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "deletedAt", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "deletedAt", [], "any", false, false, false, 69), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "files", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_show", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "            <tr>
                <td colspan=\"28\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 84,  265 => 81,  256 => 77,  247 => 73,  243 => 72,  238 => 70,  234 => 69,  230 => 68,  226 => 67,  222 => 66,  218 => 65,  214 => 64,  210 => 63,  206 => 62,  202 => 61,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  126 => 42,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidate index{% endblock %}

{% block body %}
    <h1>Candidate index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>IsVerified</th>
                <th>Gender</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>Address</th>
                <th>Country</th>
                <th>Nationality</th>
                <th>Passport</th>
                <th>Passport_file</th>
                <th>Cv_file</th>
                <th>Profil_picture</th>
                <th>Current_location</th>
                <th>Date_birth</th>
                <th>Place_birth</th>
                <th>Availability</th>
                <th>Job_category</th>
                <th>Experience</th>
                <th>Short_description</th>
                <th>Notes_candidate</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Deleted_at</th>
                <th>Files</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for candidate in candidates %}
            <tr>
                <td>{{ candidate.id }}</td>
                <td>{{ candidate.email }}</td>
                <td>{{ candidate.roles ? candidate.roles|json_encode : '' }}</td>
                <td>{{ candidate.password }}</td>
                <td>{{ candidate.isVerified ? 'Yes' : 'No' }}</td>
                <td>{{ candidate.gender }}</td>
                <td>{{ candidate.firstName }}</td>
                <td>{{ candidate.lastName }}</td>
                <td>{{ candidate.address }}</td>
                <td>{{ candidate.country }}</td>
                <td>{{ candidate.nationality }}</td>
                <td>{{ candidate.passport ? 'Yes' : 'No' }}</td>
                <td>{{ candidate.passportFile }}</td>
                <td>{{ candidate.cvFile }}</td>
                <td>{{ candidate.profilPicture }}</td>
                <td>{{ candidate.currentLocation }}</td>
                <td>{{ candidate.dateBirth ? candidate.dateBirth|date('Y-m-d') : '' }}</td>
                <td>{{ candidate.placeBirth }}</td>
                <td>{{ candidate.availability ? 'Yes' : 'No' }}</td>
                <td>{{ candidate.jobCategory }}</td>
                <td>{{ candidate.experience }}</td>
                <td>{{ candidate.shortDescription }}</td>
                <td>{{ candidate.notesCandidate }}</td>
                <td>{{ candidate.createdAt ? candidate.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ candidate.updatedAt ? candidate.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ candidate.deletedAt ? candidate.deletedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ candidate.files }}</td>
                <td>
                    <a href=\"{{ path('candidate_show', {'id': candidate.id}) }}\">show</a>
                    <a href=\"{{ path('candidate_edit', {'id': candidate.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"28\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('candidate_new') }}\">Create new</a>
{% endblock %}
", "candidate/index.html.twig", "/shared/httpd/luxury_tp/templates/candidate/index.html.twig");
    }
}
