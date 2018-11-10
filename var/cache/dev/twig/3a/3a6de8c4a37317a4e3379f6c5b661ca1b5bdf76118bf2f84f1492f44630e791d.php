<?php

/* login.html.twig */
class __TwigTemplate_bea21fae50685f63b7781b7cc1068f74382cc4ca652782822f6f1383f35c61fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

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

        echo "Ja no definitely - Login ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div>
  <div class=\"login-con\">
  <ul class=\"mui-tabs__bar mui-tabs__bar--justified\">
    <li class=\"mui--is-active\"><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-1\">Login</a></li>
    <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-2\">Sign Up</a></li>
  </ul>

  <div class=\"mui-tabs__pane mui--is-active\" id=\"pane-justified-1\">
    <form class=\"mui-form\">
      <div class=\"mui-textfield\">
        <input id=\"email\" type=\"email\" placeholder=\"Email\">
      </div>
      <div class=\"mui-textfield\">
        <input type=\"password\" placeholder=\"Password\">
      </div>
      <button type=\"submit\" class=\"mui-btn mui-btn--raised\">Login</button>
    </form>
  </div>

  <div class=\"mui-tabs__pane\" id=\"pane-justified-2\">
    <form class=\"mui-form\">
      <div class=\"mui-textfield\">
        <input id=\"name\" type=\"text\" placeholder=\"Name\">
      </div>
      <div class=\"mui-textfield\">
        <input id=\"surname\" type=\"text\" placeholder=\"Surname\">
      </div>
      <div class=\"mui-textfield\">
        <input id=\"email\" type=\"email\" placeholder=\"Email\">
      </div>
      <div class=\"mui-textfield\">
        <input type=\"password\" placeholder=\"Password\">
      </div>
      <button type=\"submit\" class=\"mui-btn mui-btn--raised\">Sign Up</button>
      <button type=\"submit\" class=\"mui-btn mui-btn--raised\">Sign Up using Facebook</button>
  </form>
  </div>
  </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  63 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Login {% endblock %}


{% block body %}
<div>
  <div class=\"login-con\">
  <ul class=\"mui-tabs__bar mui-tabs__bar--justified\">
    <li class=\"mui--is-active\"><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-1\">Login</a></li>
    <li><a data-mui-toggle=\"tab\" data-mui-controls=\"pane-justified-2\">Sign Up</a></li>
  </ul>

  <div class=\"mui-tabs__pane mui--is-active\" id=\"pane-justified-1\">
    <form class=\"mui-form\">
      <div class=\"mui-textfield\">
        <input id=\"email\" type=\"email\" placeholder=\"Email\">
      </div>
      <div class=\"mui-textfield\">
        <input type=\"password\" placeholder=\"Password\">
      </div>
      <button type=\"submit\" class=\"mui-btn mui-btn--raised\">Login</button>
    </form>
  </div>

  <div class=\"mui-tabs__pane\" id=\"pane-justified-2\">
    <form class=\"mui-form\">
      <div class=\"mui-textfield\">
        <input id=\"name\" type=\"text\" placeholder=\"Name\">
      </div>
      <div class=\"mui-textfield\">
        <input id=\"surname\" type=\"text\" placeholder=\"Surname\">
      </div>
      <div class=\"mui-textfield\">
        <input id=\"email\" type=\"email\" placeholder=\"Email\">
      </div>
      <div class=\"mui-textfield\">
        <input type=\"password\" placeholder=\"Password\">
      </div>
      <button type=\"submit\" class=\"mui-btn mui-btn--raised\">Sign Up</button>
      <button type=\"submit\" class=\"mui-btn mui-btn--raised\">Sign Up using Facebook</button>
  </form>
  </div>
  </div>

</div>
{% endblock %}", "login.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/login.html.twig");
    }
}
