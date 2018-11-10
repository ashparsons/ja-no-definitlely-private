<?php

/* questions.html.twig */
class __TwigTemplate_bede4fd2674bd9b72a3943ceb830b91722510f1d162947dd92c3bb3a2c20b52b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "questions.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questions.html.twig"));

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

        echo "Ja no definitely - Questions ";
        
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
 
          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question_text"]) {
            // line 36
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 36, $this->source); })()), "question_text", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 37, $this->source); })()), "question_author", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 38, $this->source); })()), "question_date", array()), "html", null, true);
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question_text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
      </div>
    </div>

    ";
        // line 45
        echo "  <div id=\"ad\" class=\"mui-container-fluid\">
      <div class=\"mui-row\">
        AD!
    </div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  124 => 40,  116 => 38,  112 => 37,  107 => 36,  103 => 35,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Questions {% endblock %}

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
 
          {% for question_text in question %}
                <li>{{ question.question_text }}</li>
                <li>{{ question.question_author }}</li>
                <li>{{ question.question_date }}</li>
          {% endfor %}

      </div>
    </div>

    {# ads #}
  <div id=\"ad\" class=\"mui-container-fluid\">
      <div class=\"mui-row\">
        AD!
    </div>
</div>

</div>
{% endblock %}", "questions.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/questions.html.twig");
    }
}
