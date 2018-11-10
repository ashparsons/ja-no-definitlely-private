<?php

/* category.html.twig */
class __TwigTemplate_5c960425c92365ec31bb03b7bed55fae7a1feb2f59c1a0fd4174efbb5f92801c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category.html.twig"));

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

        echo "Ja no definitely - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 3, $this->source); })()), "category_name", array()), "html", null, true);
        echo " ";
        
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

<span class=\"mui--text-title\" id=\"category_title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 8, $this->source); })()), "category_name", array()), "html", null, true);
        echo "</span>

    <!--Questions-->
    <div id=\"content\" class=\"mui-container-fluid\">
    <br>
      <div class=\"mui-row\">
        <div class=\"mui-col-sm-10 mui-col-sm-offset-1\">

          ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 16, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
          ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 17, $this->source); })()), "question_text", array()), 'widget', array("attr" => array("placeholder" => "Ask a question...")));
        echo "
          ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 18, $this->source); })()), "category", array()), 'widget', array("attr" => array("placeholder" => "Category")));
        echo "
          ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
          <br>

          ";
        // line 31
        echo "
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 33
            echo "          ";
            // line 34
            echo "          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_text", array()), "html", null, true);
            echo "</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"/profile\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_author", array()), "html", null, true);
            echo "</a></div>
          <br>
          <br>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  124 => 37,  120 => 36,  116 => 34,  114 => 33,  110 => 32,  107 => 31,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  78 => 8,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - {{ category.category_name}} {% endblock %}

{% block body %}
<div>

<span class=\"mui--text-title\" id=\"category_title\">{{ category.category_name}}</span>

    <!--Questions-->
    <div id=\"content\" class=\"mui-container-fluid\">
    <br>
      <div class=\"mui-row\">
        <div class=\"mui-col-sm-10 mui-col-sm-offset-1\">

          {{ form_start(questionForm, {'attr': {'novalidate': 'novalidate'}}) }}
          {{ form_widget(questionForm.question_text, {'attr': {'placeholder': 'Ask a question...'} }) }}
          {{ form_widget(questionForm.category, {'attr': {'placeholder': 'Category'} }) }}
          {{ form_end(questionForm) }}
          <br>

          {# <br>
          <br>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline test\">{{ question.question_text }}</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"#\">{{ question.question_author }}</a> on {{ question.question_date }}</div>
          <br>
          <div> <a>See answers</a> </div>
          <br> #}

          {% for question in questions %}
          {# <div class=\"mui--text-black-54 mui--text-body2\">{{ question.category_id }}</div> #}
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-headline\">{{ question.question_text }}</div>
          <div class=\"mui--text-black-54\">Asked By <a href=\"/profile\">{{ question.question_author }}</a></div>
          <br>
          <br>

          {% endfor %}
          
      </div>
    </div>

   

</div>
{% endblock %}", "category.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/category.html.twig");
    }
}
