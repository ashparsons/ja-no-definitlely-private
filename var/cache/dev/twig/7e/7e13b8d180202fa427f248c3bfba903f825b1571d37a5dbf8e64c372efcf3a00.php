<?php

/* home.html.twig */
class __TwigTemplate_1774a6ecace7fdbd151e6db430afb93d4b7259c610e6675bddc84fdefa4be562 extends Twig_Template
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

    <!--Questions-->
    <div id=\"content\" class=\"mui-container-fluid\">
    <br>
      <div class=\"mui-row\">
        <div class=\"mui-col-sm-10 mui-col-sm-offset-1\">
          <div class=\"mui-panel mui-col-sm-12\">
        
          <div class=\"mui-form\">
          ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 16, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
          <div class=\"mui-textfield\">
          ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 18, $this->source); })()), "question_text", array()), 'widget', array("attr" => array("placeholder" => "Ask a question...")));
        echo "
          </div>
          <div class=\"mui-select\" id=\"category-drop\">
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 21, $this->source); })()), "category", array()), 'widget', array("attr" => array("placeholder" => "Category")));
        echo "
          </div>
          ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
          </div>
          </div>
          <br>

          <h3>Top Posts</h3>
          
          <br>

          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 33
            echo "
          <div class=\"mui-panel mui-col-sm-12\">
          <div class=\"mui--text-black-54\"><div id=\"profile-image\"></div> <a href=\"/profile/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "author", array()), "id", array()), "html", null, true);
            echo "\" class=\"question-author\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_author", array()), "html", null, true);
            echo "</a></div>
          <a href=\"\" class=\"right\"><i class=\"fas fa-arrow-up\"></i> 0 </a><a href=\"\" class=\"right\"><i class=\"fas fa-arrow-down\"></i> 0 </a>
          <br>
          <div class=\"mui--text-title\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_text", array()), "html", null, true);
            echo "</div>
          <div class=\"mui--text-black-54 mui--text-body2\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "categoryName", array()), "html", null, true);
            echo "</div>
          
          ";
            // line 42
            echo "          <div class=\"mui-form\">
           ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 43, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
            echo "
           <div class=\"mui-textfield\">
           ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 45, $this->source); })()), "answer_text", array()), 'widget', array("attr" => array("placeholder" => "Answer the question...")));
            echo "
          </div>
          ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 47, $this->source); })()), 'form_end');
            echo "
          </div>
           ";
            // line 50
            echo "          
          ";
            // line 52
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new Twig_Error_Runtime('Variable "answers" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 53
                echo "          <div class=\"mui--text-black-54 mui--text-body2\"><a href=\"/profile/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "author", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_author", array()), "html", null, true);
                echo "</a></div>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-black-54\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_text", array()), "html", null, true);
                echo "</div>
          <br>
          
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "          </div>
          ";
            // line 62
            echo "          

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "          </div>     
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
        return array (  193 => 65,  185 => 62,  182 => 60,  172 => 56,  163 => 53,  158 => 52,  155 => 50,  150 => 47,  145 => 45,  140 => 43,  137 => 42,  132 => 39,  128 => 38,  120 => 35,  116 => 33,  112 => 32,  100 => 23,  95 => 21,  89 => 18,  84 => 16,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Home {% endblock %}

{% block body %}
<div>

    <!--Questions-->
    <div id=\"content\" class=\"mui-container-fluid\">
    <br>
      <div class=\"mui-row\">
        <div class=\"mui-col-sm-10 mui-col-sm-offset-1\">
          <div class=\"mui-panel mui-col-sm-12\">
        
          <div class=\"mui-form\">
          {{ form_start(questionForm, {'attr': {'novalidate': 'novalidate' }}) }}
          <div class=\"mui-textfield\">
          {{ form_widget(questionForm.question_text, {'attr': {'placeholder': 'Ask a question...'} }) }}
          </div>
          <div class=\"mui-select\" id=\"category-drop\">
          {{ form_widget(questionForm.category, {'attr': {'placeholder': 'Category' } }) }}
          </div>
          {{ form_end(questionForm) }}
          </div>
          </div>
          <br>

          <h3>Top Posts</h3>
          
          <br>

          {% for question in questions %}

          <div class=\"mui-panel mui-col-sm-12\">
          <div class=\"mui--text-black-54\"><div id=\"profile-image\"></div> <a href=\"/profile/{{question.author.id}}\" class=\"question-author\">{{ question.question_author }}</a></div>
          <a href=\"\" class=\"right\"><i class=\"fas fa-arrow-up\"></i> 0 </a><a href=\"\" class=\"right\"><i class=\"fas fa-arrow-down\"></i> 0 </a>
          <br>
          <div class=\"mui--text-title\">{{ question.question_text }}</div>
          <div class=\"mui--text-black-54 mui--text-body2\">{{ question.category.categoryName }}</div>
          
          {# Answer Question #}
          <div class=\"mui-form\">
           {{ form_start(answerForm, {'attr': {'novalidate': 'novalidate'}}) }}
           <div class=\"mui-textfield\">
           {{ form_widget(answerForm.answer_text, {'attr': {'placeholder': 'Answer the question...'} }) }}
          </div>
          {{ form_end(answerForm) }}
          </div>
           {# Answer Question #}
          
          {# Answers #}
          {% for answer in answers %}
          <div class=\"mui--text-black-54 mui--text-body2\"><a href=\"/profile/{{answer.author.id}}\">{{ answer.answer_author }}</a></div>
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"mui--text-black-54\">{{ answer.answer_text }}</div>
          <br>
          
          {% endfor %}
          </div>
          {# Answers #}
          

          {% endfor %}
          </div>     
      </div>


    </div>

   

</div>
{% endblock %}", "home.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/home.html.twig");
    }
}
