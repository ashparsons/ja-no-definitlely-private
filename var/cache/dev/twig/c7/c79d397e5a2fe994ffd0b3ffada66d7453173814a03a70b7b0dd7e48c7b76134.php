<?php

/* category.html.twig */
class __TwigTemplate_70791efd87b086a0307b03d50bf193304113220d84adebeab9934a293cda396f extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thisCategory"]) || array_key_exists("thisCategory", $context) ? $context["thisCategory"] : (function () { throw new Twig_Error_Runtime('Variable "thisCategory" does not exist.', 3, $this->source); })()), "category_name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thisCategory"]) || array_key_exists("thisCategory", $context) ? $context["thisCategory"] : (function () { throw new Twig_Error_Runtime('Variable "thisCategory" does not exist.', 8, $this->source); })()), "category_name", array()), "html", null, true);
        echo "</span>

    ";
        // line 11
        echo "  <div> 
  <br>
    <div class=\"mui--text-black-54\"></div>
    <input type=\"text\" id=\"search\" placeholder=\"Search by Username\"/>
  <br>
  </div>
";
        // line 18
        echo "
  <!--Questions-->
  <div id=\"content\" class=\"mui-container-fluid\">
  <br>
  <h1 class=\"question-text\">Would you like to ask a question?</h1>
    <div class=\"mui-row\">
      <div class=\"mui-col-sm-12 mui-col-sm-offset-1\">
        <div class=\"mui-panel mui-col-sm-12\">
      
        <div class=\"mui-form\">
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 28, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"mui-textfield\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 30, $this->source); })()), "question_text", array()), 'widget', array("attr" => array("placeholder" => "Ask a question...")));
        echo "
        </div>
        <div class=\"mui-select\" id=\"category-drop\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 33, $this->source); })()), "category", array()), 'widget', array("attr" => array("placeholder" => "Category")));
        echo "
        </div>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
        </div>
        </div>
        <br>

        <h1 class=\"answer-text\">Would you like to answer a question?</h1>
        <div class=\"mui-panel mui-col-sm-12\">
          ";
        // line 43
        echo "          <br>
          <div class=\"answerForm mui-form\">
          ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 45, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
          <div class=\"mui-textfield\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 47, $this->source); })()), "answer_text", array()), 'widget', array("attr" => array("placeholder" => "Answer a question...")));
        echo "
          </div>
          ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
          </div>
          <br>
          ";
        // line 53
        echo "          </div>


        <h3>Top Posts</h3>
        
        <br>

        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "id", array()) == twig_get_attribute($this->env, $this->source, (isset($context["thisCategory"]) || array_key_exists("thisCategory", $context) ? $context["thisCategory"] : (function () { throw new Twig_Error_Runtime('Variable "thisCategory" does not exist.', 61, $this->source); })()), "id", array()))) {
                // line 62
                echo "
          <div class=\"questionAsked mui-panel mui-col-sm-12\">
          <div class=\"authorInfo mui--text-black-54\"><div id=\"profile-image\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"";
                // line 64
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 64, $this->source); })()), "image_path", array()), "html", null, true);
                echo "\"></div> <a href=\"/profile/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "author", array()), "id", array()), "html", null, true);
                echo "\" class=\"question-author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_author", array()), "html", null, true);
                echo "</a></div>
          <br>
          
          <div class=\"vote-con\"> 
          <a href=\"\" class=\"vote ajaxUpQ\"  data-button-q=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
                echo "\"><i class=\"fas fa-arrow-up\"></i><p class=\"upvote-value\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
                echo "Q\"> ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["question"], "question_upvotes", array()) - twig_get_attribute($this->env, $this->source, $context["question"], "question_downvotes", array())), "html", null, true);
                echo "</p> </a><a href=\"\" class=\"vote ajaxDoQ\"  data-button-q=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
                echo "\"><i class=\"fas fa-arrow-down\"></i>  </a>
          ";
                // line 69
                if ((twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 69, $this->source); })()), "type", array()) == "admin")) {
                    // line 70
                    echo "            <a href=\"\" class=\"delete ajaxDeleteQ\" data-button-deleteq=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
          ";
                }
                // line 72
                echo "          </div>

          <div class=\"questionText mui--text-title\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_text", array()), "html", null, true);
                echo "</div> 
          <div class=\"mui--text-black-54 mui--text-body2\" ><a id=\"category-text\" href=\"/category/";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "categoryName", array()), "html", null, true);
                echo "</a></div>
          
          ";
                // line 80
                echo "          
          ";
                // line 82
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new Twig_Error_Runtime('Variable "answers" does not exist.', 82, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 83
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["question"], "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "question", array()), "id", array()))) {
                        // line 84
                        echo "          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"answer-vote-con\">
          <div class=\"mui--text-black-54 answer-con\"> ";
                        // line 87
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_text", array()), "html", null, true);
                        echo " - <a class=\"author-comment\" href=\"/profile/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "author", array()), "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_author", array()), "html", null, true);
                        echo "</a> </div>

          <div class=\"vote-con\"> <a href=\"\" class=\"vote ajaxUpA\"  data-button-a=\"";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                        echo "\"><i class=\"fas fa-arrow-up\"></i><p class=\"upvote-value\" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                        echo "A\"> ";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["answer"], "answer_upvotes", array()) - twig_get_attribute($this->env, $this->source, $context["answer"], "answer_downvotes", array())), "html", null, true);
                        echo "</p> </a><a href=\"\" class=\"vote ajaxDoA\"  data-button-a=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                        echo "\"><i class=\"fas fa-arrow-down\"></i>  </a>
          ";
                        // line 90
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 90, $this->source); })()), "type", array()) == "admin")) {
                            // line 91
                            echo "          <a href=\"\" class=\"delete ajaxDeleteA\" data-button-deletea=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                            echo "\">Delete</a>
          ";
                        }
                        // line 93
                        echo "
          ";
                        // line 95
                        echo "          ";
                        // line 96
                        echo "          ";
                        // line 97
                        echo "
          </div>

          </div>
          ";
                    }
                    // line 102
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "        
        ";
                // line 105
                echo "        ";
                // line 112
                echo "        ";
                // line 113
                echo "    </div>
          ";
            }
            // line 115
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "


        <script>

        \$(document).on('click', 'a.ajaxUpQ', function(){
            var id = this.getAttribute('data-button-q');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"voteupQ\":id
                },
                async: true,
                success: function (data)
                {
                    
                    id=\"#\"+id+\"Q\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);

                }
            });
            return false;

        });

        \$(document).on('click', 'a.ajaxDoQ', function(){
            var id = this.getAttribute('data-button-q');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"votedoQ\":id
                },
                async: true,
                success: function (data)
                {
                    id=\"#\"+id+\"Q\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);
                    

                }
            });
            return false;

        });

        \$(document).on('click', 'a.ajaxUpA', function(){
            var id = this.getAttribute('data-button-a');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"voteupA\":id
                },
                async: true,
                success: function (data)
                {
                    
                    id=\"#\"+id+\"A\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);

                }
            });
            return false;

        });

        \$(document).on('click', 'a.ajaxDoA', function(){
            var id = this.getAttribute('data-button-a');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"votedoA\":id
                },
                async: true,
                success: function (data)
                {
                    id=\"#\"+id+\"A\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);
                    

                }
            });
            return false;

        });

        ";
        // line 226
        echo "
        \$(document).on('click', 'a.ajaxDeleteQ', function(){
            var id = this.getAttribute('data-button-deleteq');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"deleteQ\":id
                },
                async: true,
                success: function (data)
                {
                    
                    console.log(data);
                    location.reload();
                    
                }
            });
            return false;
        });

        \$(document).on('click', 'a.ajaxDeleteA', function(){
            var id = this.getAttribute('data-button-deletea');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"deleteA\":id
                },
                async: true,
                success: function (data)
                {
                    
                    console.log(data);
                    location.reload();
                
                }
            });
            return false;

        });
    </script>
     

   

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
        return array (  405 => 226,  294 => 116,  288 => 115,  284 => 113,  282 => 112,  280 => 105,  277 => 103,  271 => 102,  264 => 97,  262 => 96,  260 => 95,  257 => 93,  251 => 91,  249 => 90,  239 => 89,  230 => 87,  225 => 84,  222 => 83,  217 => 82,  214 => 80,  207 => 75,  203 => 74,  199 => 72,  193 => 70,  191 => 69,  181 => 68,  169 => 64,  165 => 62,  162 => 61,  158 => 60,  149 => 53,  143 => 49,  138 => 47,  133 => 45,  129 => 43,  119 => 35,  114 => 33,  108 => 30,  103 => 28,  91 => 18,  83 => 11,  78 => 8,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - {{ thisCategory.category_name}} {% endblock %}

{% block body %}
<div>

<span class=\"mui--text-title\" id=\"category_title\">{{ thisCategory.category_name}}</span>

    {# SearchBar #}
  <div> 
  <br>
    <div class=\"mui--text-black-54\"></div>
    <input type=\"text\" id=\"search\" placeholder=\"Search by Username\"/>
  <br>
  </div>
{# SearchBar #}

  <!--Questions-->
  <div id=\"content\" class=\"mui-container-fluid\">
  <br>
  <h1 class=\"question-text\">Would you like to ask a question?</h1>
    <div class=\"mui-row\">
      <div class=\"mui-col-sm-12 mui-col-sm-offset-1\">
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

        <h1 class=\"answer-text\">Would you like to answer a question?</h1>
        <div class=\"mui-panel mui-col-sm-12\">
          {# Answer Question #}
          <br>
          <div class=\"answerForm mui-form\">
          {{ form_start(answerForm, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"mui-textfield\">
          {{ form_widget(answerForm.answer_text, {'attr': {'placeholder': 'Answer a question...'} }) }}
          </div>
          {{ form_end(answerForm) }}
          </div>
          <br>
          {# Answer Question #}
          </div>


        <h3>Top Posts</h3>
        
        <br>

        {% for question in questions %}
        {% if question.category.id == thisCategory.id %}

          <div class=\"questionAsked mui-panel mui-col-sm-12\">
          <div class=\"authorInfo mui--text-black-54\"><div id=\"profile-image\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"{{ ('/images/') }}{{ useraccount.image_path }}\"></div> <a href=\"/profile/{{question.author.id}}\" class=\"question-author\">{{ question.question_author }}</a></div>
          <br>
          
          <div class=\"vote-con\"> 
          <a href=\"\" class=\"vote ajaxUpQ\"  data-button-q=\"{{ question.id }}\"><i class=\"fas fa-arrow-up\"></i><p class=\"upvote-value\" id=\"{{ question.id }}Q\"> {{ question.question_upvotes - question.question_downvotes }}</p> </a><a href=\"\" class=\"vote ajaxDoQ\"  data-button-q=\"{{ question.id }}\"><i class=\"fas fa-arrow-down\"></i>  </a>
          {% if useraccount.type == \"admin\" %}
            <a href=\"\" class=\"delete ajaxDeleteQ\" data-button-deleteq=\"{{ question.id }}\">Delete</a>
          {% endif %}
          </div>

          <div class=\"questionText mui--text-title\">{{ question.question_text }}</div> 
          <div class=\"mui--text-black-54 mui--text-body2\" ><a id=\"category-text\" href=\"/category/{{ question.category.id }}\">{{ question.category.categoryName }}</a></div>
          
          {# <br>
          <button class=\"answer-btn\" onclick=\"answerQuestion()\">Answer!</button>
          <br> #}
          
          {# Answers #}
          {% for answer in answers %}
          {% if question.id == answer.question.id %}
          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"answer-vote-con\">
          <div class=\"mui--text-black-54 answer-con\"> {{ answer.answer_text }} - <a class=\"author-comment\" href=\"/profile/{{answer.author.id}}\">{{ answer.answer_author }}</a> </div>

          <div class=\"vote-con\"> <a href=\"\" class=\"vote ajaxUpA\"  data-button-a=\"{{ answer.id }}\"><i class=\"fas fa-arrow-up\"></i><p class=\"upvote-value\" id=\"{{ answer.id }}A\"> {{ answer.answer_upvotes - answer.answer_downvotes }}</p> </a><a href=\"\" class=\"vote ajaxDoA\"  data-button-a=\"{{ answer.id }}\"><i class=\"fas fa-arrow-down\"></i>  </a>
          {% if useraccount.type == \"admin\" %}
          <a href=\"\" class=\"delete ajaxDeleteA\" data-button-deletea=\"{{ answer.id }}\">Delete</a>
          {% endif %}

          {# {% if useraccount.type == \"admin\" %} #}
          {# <a href=\"/delete\" class=\"delete ajaxDeleteA\" data-button-deletea=\"{{ answer.id }}\">Delete</a> #}
          {# {% endif %} #}

          </div>

          </div>
          {% endif %}
          {% endfor %}
        
        {# Answer Question #}
        {# <div class=\"answerForm mui-form\">
        {{ form_start(answerForm, {'attr': {'novalidate': 'novalidate'}}) }}
        <div class=\"mui-textfield\">
        {{ form_widget(answerForm.answer_text, {'attr': {'placeholder': 'Answer the question...'} }) }}
        </div>
        {{ form_end(answerForm) }}
        </div> #}
        {# Answer Question #}
    </div>
          {% endif %}
          {% endfor %}



        <script>

        \$(document).on('click', 'a.ajaxUpQ', function(){
            var id = this.getAttribute('data-button-q');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"voteupQ\":id
                },
                async: true,
                success: function (data)
                {
                    
                    id=\"#\"+id+\"Q\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);

                }
            });
            return false;

        });

        \$(document).on('click', 'a.ajaxDoQ', function(){
            var id = this.getAttribute('data-button-q');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"votedoQ\":id
                },
                async: true,
                success: function (data)
                {
                    id=\"#\"+id+\"Q\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);
                    

                }
            });
            return false;

        });

        \$(document).on('click', 'a.ajaxUpA', function(){
            var id = this.getAttribute('data-button-a');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"voteupA\":id
                },
                async: true,
                success: function (data)
                {
                    
                    id=\"#\"+id+\"A\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);

                }
            });
            return false;

        });

        \$(document).on('click', 'a.ajaxDoA', function(){
            var id = this.getAttribute('data-button-a');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"votedoA\":id
                },
                async: true,
                success: function (data)
                {
                    id=\"#\"+id+\"A\";
                    console.log(id);
                    \$( id ).text(data);
                    console.log(data);
                    

                }
            });
            return false;

        });

        {# Deleting #}

        \$(document).on('click', 'a.ajaxDeleteQ', function(){
            var id = this.getAttribute('data-button-deleteq');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"deleteQ\":id
                },
                async: true,
                success: function (data)
                {
                    
                    console.log(data);
                    location.reload();
                    
                }
            });
            return false;
        });

        \$(document).on('click', 'a.ajaxDeleteA', function(){
            var id = this.getAttribute('data-button-deletea');
            console.log(id);
            that = \$(this);
            \$.ajax({
                url:'/ajax/vote',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"deleteA\":id
                },
                async: true,
                success: function (data)
                {
                    
                    console.log(data);
                    location.reload();
                
                }
            });
            return false;

        });
    </script>
     

   

</div>
{% endblock %}", "category.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/category.html.twig");
    }
}
