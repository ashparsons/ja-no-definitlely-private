<?php

/* register.html.twig */
class __TwigTemplate_ed88ad5437b6ca7a7751b902dbc908cc60c8d642d52d0e126c091ebd1179b50a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       <meta charset=\"UTF-8\">
        <link href=\"//cdn.muicss.com/mui-latest/css/mui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"//cdn.muicss.com/mui-latest/js/mui.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"";
        // line 8
        echo "js/main.js";
        echo "\"></script>
        <link rel=\"icon\" href=\"";
        // line 9
        echo "/images/favicon.ico";
        echo "\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo "css/main.css";
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo "css/header.css";
        echo "\">
        
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
      ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "    </body>  
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ja no definitely - Register ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "                
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "        <div class=\"login-background\">
        <div class=\"mui-container-fluid\" id=\"reg-con\">
        <h1 class=\"heading\">Register</h1>
        <div class=\"regForm\">
          ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
          ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 25, $this->source); })()), "name", array()), 'widget', array("attr" => array("placeholder" => "Name")));
        echo "
          <h5 class=\"errors\"> ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " </h5>
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 27, $this->source); })()), "surname", array()), 'widget', array("attr" => array("placeholder" => "Surname")));
        echo "
          <h5 class=\"errors\"> ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new Twig_Error_Runtime('Variable "surname" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " </h5>
          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 29, $this->source); })()), "username", array()), 'widget', array("attr" => array("placeholder" => "Username")));
        echo "
          <h5 class=\"errors\"> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["usernameT"]) || array_key_exists("usernameT", $context) ? $context["usernameT"] : (function () { throw new Twig_Error_Runtime('Variable "usernameT" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " </h5>
          ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 31, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
          <h5 class=\"errors\"> ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["emailT"]) || array_key_exists("emailT", $context) ? $context["emailT"] : (function () { throw new Twig_Error_Runtime('Variable "emailT" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " </h5>
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 33, $this->source); })()), "password", array()), 'widget', array("attr" => array("placeholder" => "Password")));
        echo "
          <h5 class=\"errors\"> ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->source); })()), "html", null, true);
        echo " </h5>
          ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new Twig_Error_Runtime('Variable "registerForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
        </div>
        
        </div>

      </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 35,  174 => 34,  170 => 33,  166 => 32,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  128 => 20,  119 => 19,  108 => 15,  99 => 14,  81 => 13,  70 => 42,  68 => 19,  64 => 17,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
       <meta charset=\"UTF-8\">
        <link href=\"//cdn.muicss.com/mui-latest/css/mui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"//cdn.muicss.com/mui-latest/js/mui.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"{{ ('js/main.js') }}\"></script>
        <link rel=\"icon\" href=\"{{ ('/images/favicon.ico') }}\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" href=\"{{ ('css/main.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ ('css/header.css') }}\">
        
        <title>{% block title %}Ja no definitely - Register {% endblock %}</title>
        {% block stylesheets %}
                
        {% endblock %}
    </head>
    <body>
      {% block body %}
        <div class=\"login-background\">
        <div class=\"mui-container-fluid\" id=\"reg-con\">
        <h1 class=\"heading\">Register</h1>
        <div class=\"regForm\">
          {{ form_start(registerForm) }}
          {{ form_widget(registerForm.name, {'attr': {'placeholder': 'Name'} }) }}
          <h5 class=\"errors\"> {{ name }} </h5>
          {{ form_widget(registerForm.surname, {'attr': {'placeholder': 'Surname'} }) }}
          <h5 class=\"errors\"> {{ surname }} </h5>
          {{ form_widget(registerForm.username, {'attr': {'placeholder': 'Username'} }) }}
          <h5 class=\"errors\"> {{ usernameT }} </h5>
          {{ form_widget(registerForm.email, {'attr': {'placeholder': 'Email'} }) }}
          <h5 class=\"errors\"> {{ emailT }} </h5>
          {{ form_widget(registerForm.password, {'attr': {'placeholder': 'Password'} }) }}
          <h5 class=\"errors\"> {{ errors }} </h5>
          {{ form_end(registerForm) }}
        </div>
        
        </div>

      </div>
      {% endblock %}
    </body>  
</html>", "register.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/register.html.twig");
    }
}
