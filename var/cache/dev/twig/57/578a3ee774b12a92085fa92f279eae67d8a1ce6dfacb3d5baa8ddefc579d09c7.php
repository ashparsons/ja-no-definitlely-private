<?php

/* profile.html.twig */
class __TwigTemplate_f324f48a326f6d5a74397cbd440d514493ed2422c10cff08297204014811d2a9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ja no definitely - Profile ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>

     <!--Profile-->
    <div class=\"mui-container-fluid middle-con\">
      <div class=\"mui-row\">
        

         <ul class=\"mui-tabs__bar mui-tabs__bar--justified\">
          <li class=\"mui--is-active\"><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-1\">About</a></li>
          <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-2\">Posts</a></li>
          ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "id", array()) == twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 16, $this->source); })()), "id", array()))) {
            // line 17
            echo "            <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-3\">Settings</a></li>
          ";
        }
        // line 19
        echo "        </ul>
        <div class=\"mui-tabs__pane mui--is-active\" id=\"pane-justified-1\">
        <br>
        <br>

        <div class=\"mui-panel mui-col-sm-12\">
            <br>
            <br>
            <div id=\"profile-pic-user\" class=\"mui-col-sm-3\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"";
        // line 27
        echo "/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 27, $this->source); })()), "image_path", array()), "html", null, true);
        echo "\"></div>
            <div id=\"profile-about-info\" class=\"mui-col-sm-9\">
              <div id=\"username\" class=\"mui--text-headline\"> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 29, $this->source); })()), "username", array()), "html", null, true);
        echo "</div>
              <br>
              <div class=\"mui--text-black-54\">Full Name : ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 31, $this->source); })()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 31, $this->source); })()), "surname", array()), "html", null, true);
        echo "</div>
              <br>
              <div class=\"mui--text-black-54\">User Type : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 33, $this->source); })()), "type", array()), "html", null, true);
        echo " </div>
              ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "type", array()) == "admin")) {
            // line 35
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 35, $this->source); })()), "type", array()) == "user")) {
                // line 36
                echo "                  ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["banForm"]) || array_key_exists("banForm", $context) ? $context["banForm"] : (function () { throw new Twig_Error_Runtime('Variable "banForm" does not exist.', 36, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
                echo "
                  ";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["banForm"]) || array_key_exists("banForm", $context) ? $context["banForm"] : (function () { throw new Twig_Error_Runtime('Variable "banForm" does not exist.', 37, $this->source); })()), 'widget');
                echo "
                  ";
                // line 38
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["banForm"]) || array_key_exists("banForm", $context) ? $context["banForm"] : (function () { throw new Twig_Error_Runtime('Variable "banForm" does not exist.', 38, $this->source); })()), 'form_end');
                echo "
                ";
            }
            // line 40
            echo "              ";
        }
        // line 41
        echo "            <br>
            <br>
            </div>
          </div> 
        </div>

        <div class=\"mui-tabs__pane\" id=\"pane-justified-2\">
          <br>
          <br>

          <div class=\"mui-panel mui-col-sm-12\">
              <br>
              <br>
              <div id=\"asked\" class=\"mui--text-headline\">Questions Asked</div>
              <br>
              ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 57
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "author", array()), "id", array()) == twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 57, $this->source); })()), "id", array()))) {
                // line 58
                echo "              <div class=\"mui--text-black-54 mui--text-body2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "categoryName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_text", array()), "html", null, true);
                echo "</div>
              <br>
              ";
            }
            // line 61
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              <br>
          </div>

          <div class=\"mui-panel mui-col-sm-12\">
              <br>
              <br>
              <div id=\"answered\" class=\"mui--text-headline\">Answers Shared</div>
              <br>
              ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new Twig_Error_Runtime('Variable "answers" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 71
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "author", array()), "id", array()) == twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 71, $this->source); })()), "id", array()))) {
                // line 72
                echo "              <div class=\"mui--text-black-54\">Q : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "question", array()), "question_text", array()), "html", null, true);
                echo "</div>
              <div class=\"mui--text-black-54\">A : ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_text", array()), "html", null, true);
                echo "</div>
              <br>
              ";
            }
            // line 76
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "              <br>
          </div>
        </div>

        
        ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 82, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "id", array()) == twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 82, $this->source); })()), "id", array()))) {
            // line 83
            echo "        <div class=\"mui-tabs__pane\" id=\"pane-justified-3\">
           <div class=\"mui-panel mui-col-sm-12\">
          <div class=\"updateProfileForm\">
            ";
            // line 86
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 86, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
            echo "
            <p class=\"profile-text\">Name</p>
            ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 88, $this->source); })()), "name", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 88, $this->source); })()), "name", array()))));
            echo "
            <h5 class=\"errors\"> ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 89, $this->source); })()), "html", null, true);
            echo " </h5>
            <p class=\"profile-text\">Surname</p>
            ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 91, $this->source); })()), "surname", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 91, $this->source); })()), "surname", array()))));
            echo "
            <h5 class=\"errors\"> ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new Twig_Error_Runtime('Variable "surname" does not exist.', 92, $this->source); })()), "html", null, true);
            echo " </h5>
            <p class=\"profile-text\">Username</p>
            ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 94, $this->source); })()), "username", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 94, $this->source); })()), "username", array()))));
            echo "
            <h5 class=\"errors\"> ";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["usernameT"]) || array_key_exists("usernameT", $context) ? $context["usernameT"] : (function () { throw new Twig_Error_Runtime('Variable "usernameT" does not exist.', 95, $this->source); })()), "html", null, true);
            echo " </h5>
            <p class=\"profile-text\">Email</p>
            ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 97, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 97, $this->source); })()), "email", array()))));
            echo "
            <h5 class=\"errors\"> ";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["emailT"]) || array_key_exists("emailT", $context) ? $context["emailT"] : (function () { throw new Twig_Error_Runtime('Variable "emailT" does not exist.', 98, $this->source); })()), "html", null, true);
            echo " </h5>
            <p class=\"profile-text\">Password</p>
            ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 100, $this->source); })()), "password", array()), 'widget', array("attr" => array("placeholder" => "Password")));
            echo "
            <h5 class=\"errors\"> ";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 101, $this->source); })()), "html", null, true);
            echo " </h5>
            ";
            // line 102
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 102, $this->source); })()), 'form_end');
            echo "

            ";
            // line 109
            echo "          
        </div>
        </div>
        </div>
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 109,  280 => 102,  276 => 101,  272 => 100,  267 => 98,  263 => 97,  258 => 95,  254 => 94,  249 => 92,  245 => 91,  240 => 89,  236 => 88,  231 => 86,  226 => 83,  224 => 82,  217 => 77,  211 => 76,  205 => 73,  200 => 72,  197 => 71,  193 => 70,  183 => 62,  177 => 61,  168 => 58,  165 => 57,  161 => 56,  144 => 41,  141 => 40,  136 => 38,  132 => 37,  127 => 36,  124 => 35,  122 => 34,  118 => 33,  111 => 31,  106 => 29,  100 => 27,  90 => 19,  86 => 17,  84 => 16,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Profile {% endblock %}

{% block body %}
<div>

     <!--Profile-->
    <div class=\"mui-container-fluid middle-con\">
      <div class=\"mui-row\">
        

         <ul class=\"mui-tabs__bar mui-tabs__bar--justified\">
          <li class=\"mui--is-active\"><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-1\">About</a></li>
          <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-2\">Posts</a></li>
          {% if app.session.get('loggedInUser').id == useraccount.id %}
            <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-3\">Settings</a></li>
          {% endif %}
        </ul>
        <div class=\"mui-tabs__pane mui--is-active\" id=\"pane-justified-1\">
        <br>
        <br>

        <div class=\"mui-panel mui-col-sm-12\">
            <br>
            <br>
            <div id=\"profile-pic-user\" class=\"mui-col-sm-3\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"{{ ('/images/') }}{{ useraccount.image_path }}\"></div>
            <div id=\"profile-about-info\" class=\"mui-col-sm-9\">
              <div id=\"username\" class=\"mui--text-headline\"> {{ useraccount.username }}</div>
              <br>
              <div class=\"mui--text-black-54\">Full Name : {{ useraccount.name }} {{useraccount.surname}}</div>
              <br>
              <div class=\"mui--text-black-54\">User Type : {{ useraccount.type }} </div>
              {% if app.session.get('loggedInUser').type == \"admin\" %}
                {% if useraccount.type == \"user\" %}
                  {{ form_start(banForm, {'attr': {'novalidate': 'novalidate'}}) }}
                  {{ form_widget(banForm) }}
                  {{ form_end(banForm) }}
                {% endif %}
              {% endif %}
            <br>
            <br>
            </div>
          </div> 
        </div>

        <div class=\"mui-tabs__pane\" id=\"pane-justified-2\">
          <br>
          <br>

          <div class=\"mui-panel mui-col-sm-12\">
              <br>
              <br>
              <div id=\"asked\" class=\"mui--text-headline\">Questions Asked</div>
              <br>
              {% for question in questions %}
              {% if question.author.id == useraccount.id %}
              <div class=\"mui--text-black-54 mui--text-body2\">{{ question.category.categoryName }} - {{ question.question_text }}</div>
              <br>
              {% endif %}
              {% endfor %}
              <br>
          </div>

          <div class=\"mui-panel mui-col-sm-12\">
              <br>
              <br>
              <div id=\"answered\" class=\"mui--text-headline\">Answers Shared</div>
              <br>
              {% for answer in answers %}
              {% if answer.author.id == useraccount.id %}
              <div class=\"mui--text-black-54\">Q : {{ answer.question.question_text }}</div>
              <div class=\"mui--text-black-54\">A : {{ answer.answer_text }}</div>
              <br>
              {% endif %}
              {% endfor %}
              <br>
          </div>
        </div>

        
        {% if app.session.get('loggedInUser').id == useraccount.id %}
        <div class=\"mui-tabs__pane\" id=\"pane-justified-3\">
           <div class=\"mui-panel mui-col-sm-12\">
          <div class=\"updateProfileForm\">
            {{ form_start(profileForm, {'attr': {'novalidate': 'novalidate'}}) }}
            <p class=\"profile-text\">Name</p>
            {{ form_widget(profileForm.name, {'attr': {'placeholder':  useraccount.name  } }) }}
            <h5 class=\"errors\"> {{ name }} </h5>
            <p class=\"profile-text\">Surname</p>
            {{ form_widget(profileForm.surname, {'attr': {'placeholder': useraccount.surname} }) }}
            <h5 class=\"errors\"> {{ surname }} </h5>
            <p class=\"profile-text\">Username</p>
            {{ form_widget(profileForm.username, {'attr': {'placeholder': useraccount.username} }) }}
            <h5 class=\"errors\"> {{ usernameT }} </h5>
            <p class=\"profile-text\">Email</p>
            {{ form_widget(profileForm.email, {'attr': {'placeholder': useraccount.email} }) }}
            <h5 class=\"errors\"> {{ emailT }} </h5>
            <p class=\"profile-text\">Password</p>
            {{ form_widget(profileForm.password, {'attr': {'placeholder': 'Password'} }) }}
            <h5 class=\"errors\"> {{ errors }} </h5>
            {{ form_end(profileForm) }}

            {# {{ form_start(imageForm) }}
            <p class=\"profile-text\">Upload image</p>
            {{ form_widget(imageForm.name) }}
            {{ form_widget(imageForm.file) }}
            {{ form_end(imageForm) }} #}
          
        </div>
        </div>
        </div>
    </div>
    {% endif %}
{% endblock %} ", "profile.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/profile.html.twig");
    }
}
