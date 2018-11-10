<?php

/* profile.html.twig */
class __TwigTemplate_50a1f2d2eee46e5f56204c3a08854dea07868d6988e222f89622a7e067e7b79a extends Twig_Template
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
          <li class=\"mui--is-active\"><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-1\">About me!</a></li>
          <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-2\">Posts</a></li>
          <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-3\">Settings</a></li>
        </ul>
        <div class=\"mui-tabs__pane mui--is-active\" id=\"pane-justified-1\">About me

        ";
        // line 21
        echo "          <br>
          <br>
          <div class=\"mui--text-headline\">Username : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 23, $this->source); })()), "username", array()), "html", null, true);
        echo "</div>
          <br>
          <div class=\"mui--text-black-54\">Full Name : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 25, $this->source); })()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 25, $this->source); })()), "surname", array()), "html", null, true);
        echo "</div>
          <br>
          <div class=\"mui--text-black-54\">User Type : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 27, $this->source); })()), "type", array()), "html", null, true);
        echo " </div>
          <br>
          <br>
        ";
        // line 31
        echo "        </div> 

        <div class=\"mui-tabs__pane\" id=\"pane-justified-2\">Posts</div>

        <div class=\"mui-tabs__pane\" id=\"pane-justified-3\">Settings</div>
    </div>
";
        
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
        return array (  110 => 31,  104 => 27,  97 => 25,  92 => 23,  88 => 21,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
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
          <li class=\"mui--is-active\"><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-1\">About me!</a></li>
          <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-2\">Posts</a></li>
          <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-3\">Settings</a></li>
        </ul>
        <div class=\"mui-tabs__pane mui--is-active\" id=\"pane-justified-1\">About me

        {# {% for useraccount in useraccount %} #}
          <br>
          <br>
          <div class=\"mui--text-headline\">Username : {{ useraccount.username }}</div>
          <br>
          <div class=\"mui--text-black-54\">Full Name : {{ useraccount.name }} {{useraccount.surname}}</div>
          <br>
          <div class=\"mui--text-black-54\">User Type : {{ useraccount.type }} </div>
          <br>
          <br>
        {# {% endfor %} #}
        </div> 

        <div class=\"mui-tabs__pane\" id=\"pane-justified-2\">Posts</div>

        <div class=\"mui-tabs__pane\" id=\"pane-justified-3\">Settings</div>
    </div>
{% endblock %}", "profile.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/profile.html.twig");
    }
}
