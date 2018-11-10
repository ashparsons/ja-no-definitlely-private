<?php

/* home.html.twig */
class __TwigTemplate_42af0dc2159a78e37458ec17c6ba27ed0f8c8362a847c2ad85d67558185a23ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

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

        echo "Ja no definitely - Home ";
        
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

    <!--Side Bar-->
   <div id=\"sidebar\">
      <div id=\"pic\"></div>
      <div id=\"name\" class=\"mui--text-white mui--text-display1 mui--align-vertical\">User Name</div>
      <div class=\"nav\">
        <div class=\"mui-divider\"></div>
        <ul>
          <li>
            <strong>Categories</strong>
            <ul>
              <li><a href=\"#\">Item 1</a></li>
              <li><a href=\"#\">Item 2</a></li>
              <li><a href=\"#\">Item 3</a></li>
            </ul>
          </li>
          <li>
            <strong>Edit Profile</strong>
          </li>
        </ul>
      </div>
    </div>

    <!--Questions-->
    <div id=\"content\" class=\"mui-container-fluid\">
      <div class=\"mui-row\">
        <div class=\"mui-col-sm-10 mui-col-sm-offset-1\">
        
          <div class=\"mui--text-black-54 mui--text-body2\">Category</div>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline test\">Question</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">User Name</a> x days ago</div>
          <div> Question Text </div>
          <div> <a>See answers</a> </div>
          <br>

          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline\">Question</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">User Name</a> x days ago</div>
          <div> Question Text </div>
          <div> <a>See answers</a> </div>
          <br>

          <div class=\"mui--text-black-54 mui--text-body2\">Category</div>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline\">Question</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">User Name</a> x days ago</div>
          <div> Question Text </div>
          <div> <a>See answers</a> </div>
          <br>
          
      </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Home {% endblock %}

{% block body %}
<div>

    <!--Side Bar-->
   <div id=\"sidebar\">
      <div id=\"pic\"></div>
      <div id=\"name\" class=\"mui--text-white mui--text-display1 mui--align-vertical\">User Name</div>
      <div class=\"nav\">
        <div class=\"mui-divider\"></div>
        <ul>
          <li>
            <strong>Categories</strong>
            <ul>
              <li><a href=\"#\">Item 1</a></li>
              <li><a href=\"#\">Item 2</a></li>
              <li><a href=\"#\">Item 3</a></li>
            </ul>
          </li>
          <li>
            <strong>Edit Profile</strong>
          </li>
        </ul>
      </div>
    </div>

    <!--Questions-->
    <div id=\"content\" class=\"mui-container-fluid\">
      <div class=\"mui-row\">
        <div class=\"mui-col-sm-10 mui-col-sm-offset-1\">
        
          <div class=\"mui--text-black-54 mui--text-body2\">Category</div>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline test\">Question</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">User Name</a> x days ago</div>
          <div> Question Text </div>
          <div> <a>See answers</a> </div>
          <br>

          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline\">Question</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">User Name</a> x days ago</div>
          <div> Question Text </div>
          <div> <a>See answers</a> </div>
          <br>

          <div class=\"mui--text-black-54 mui--text-body2\">Category</div>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline\">Question</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">User Name</a> x days ago</div>
          <div> Question Text </div>
          <div> <a>See answers</a> </div>
          <br>
          
      </div>
    </div>

</div>
{% endblock %}", "home.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/home.html.twig");
    }
}
