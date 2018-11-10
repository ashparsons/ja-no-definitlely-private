<?php

/* home.html.twig */
class __TwigTemplate_dc9d1ff981d456248c10aee1b22b638ed752102e9ffcab9635ab843580c9b12b extends Twig_Template
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

";
        // line 9
        echo "  <div> 
  <br>
    <div class=\"mui--text-black-54\"></div>
    <input type=\"text\" id=\"search\" placeholder=\"Search by Username\"/>
  <br>
  </div>
";
        // line 16
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
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 26, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"mui-textfield\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 28, $this->source); })()), "question_text", array()), 'widget', array("attr" => array("placeholder" => "Ask a question...")));
        echo "
        </div>
        <div class=\"mui-select\" id=\"category-drop\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 31, $this->source); })()), "category", array()), 'widget', array("attr" => array("placeholder" => "Category")));
        echo "
        </div>
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["questionForm"]) || array_key_exists("questionForm", $context) ? $context["questionForm"] : (function () { throw new Twig_Error_Runtime('Variable "questionForm" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
        </div>
        </div>
        <br>

        <h1 class=\"answer-text\">Would you like to answer a question?</h1>
        <div class=\"mui-panel mui-col-sm-12\">
          ";
        // line 41
        echo "          <br>
          <div class=\"answerForm mui-form\">
          ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 43, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
          <div class=\"mui-textfield\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 45, $this->source); })()), "answer_text", array()), 'widget', array("attr" => array("placeholder" => "Answer a question...")));
        echo "
          </div>
          ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["answerForm"]) || array_key_exists("answerForm", $context) ? $context["answerForm"] : (function () { throw new Twig_Error_Runtime('Variable "answerForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
          </div>
          <br>
          ";
        // line 51
        echo "          </div>


        <h3>Top Posts</h3>
        
        <br>

        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 59
            echo "
          <div class=\"questionAsked mui-panel mui-col-sm-12\">
          <div class=\"authorInfo mui--text-black-54\"><div id=\"profile-image\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"";
            // line 61
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 61, $this->source); })()), "image_path", array()), "html", null, true);
            echo "\"></div> <a href=\"/profile/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "author", array()), "id", array()), "html", null, true);
            echo "\" class=\"question-author\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_author", array()), "html", null, true);
            echo "</a></div>
          <br>
          
          <div class=\"vote-con\"> 
          <a href=\"\" class=\"vote ajaxUpQ\"  data-button-q=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
            echo "\"><i class=\"fas fa-arrow-up\"></i><p class=\"upvote-value\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
            echo "Q\"> ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["question"], "question_upvotes", array()) - twig_get_attribute($this->env, $this->source, $context["question"], "question_downvotes", array())), "html", null, true);
            echo "</p> </a><a href=\"\" class=\"vote ajaxDoQ\"  data-button-q=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
            echo "\"><i class=\"fas fa-arrow-down\"></i>  </a>
          ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 66, $this->source); })()), "type", array()) == "admin")) {
                // line 67
                echo "            <a href=\"\" class=\"delete ajaxDeleteQ\" data-button-deleteq=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
                echo "\">Delete</a>
          ";
            }
            // line 69
            echo "          </div>

          <div class=\"questionText mui--text-title\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question_text", array()), "html", null, true);
            echo "</div> 
          <div class=\"mui--text-black-54 mui--text-body2\" ><a id=\"category-text\" href=\"/category/";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "category", array()), "categoryName", array()), "html", null, true);
            echo "</a></div>
          
          ";
            // line 77
            echo "          
          ";
            // line 79
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new Twig_Error_Runtime('Variable "answers" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 80
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["question"], "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "question", array()), "id", array()))) {
                    // line 81
                    echo "          <div class=\"mui-divider\"></div>
          <br>
          <div class=\"answer-vote-con\">
          <div class=\"mui--text-black-54 answer-con\"> ";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_text", array()), "html", null, true);
                    echo " - <a class=\"author-comment\" href=\"/profile/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["answer"], "author", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer_author", array()), "html", null, true);
                    echo "</a> </div>

          <div class=\"vote-con\"> <a href=\"\" class=\"vote ajaxUpA\"  data-button-a=\"";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                    echo "\"><i class=\"fas fa-arrow-up\"></i><p class=\"upvote-value\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                    echo "A\"> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["answer"], "answer_upvotes", array()) - twig_get_attribute($this->env, $this->source, $context["answer"], "answer_downvotes", array())), "html", null, true);
                    echo "</p> </a><a href=\"\" class=\"vote ajaxDoA\"  data-button-a=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                    echo "\"><i class=\"fas fa-arrow-down\"></i>  </a>
          ";
                    // line 87
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 87, $this->source); })()), "type", array()) == "admin")) {
                        // line 88
                        echo "          <a href=\"\" class=\"delete ajaxDeleteA\" data-button-deletea=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", array()), "html", null, true);
                        echo "\">Delete</a>
          ";
                    }
                    // line 90
                    echo "
          ";
                    // line 92
                    echo "          ";
                    // line 93
                    echo "          ";
                    // line 94
                    echo "
          </div>

          </div>
          ";
                }
                // line 99
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "        
        ";
            // line 102
            echo "        ";
            // line 109
            echo "        ";
            // line 110
            echo "    </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
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
        // line 223
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
        return array (  393 => 223,  282 => 113,  274 => 110,  272 => 109,  270 => 102,  267 => 100,  261 => 99,  254 => 94,  252 => 93,  250 => 92,  247 => 90,  241 => 88,  239 => 87,  229 => 86,  220 => 84,  215 => 81,  212 => 80,  207 => 79,  204 => 77,  197 => 72,  193 => 71,  189 => 69,  183 => 67,  181 => 66,  171 => 65,  159 => 61,  155 => 59,  151 => 58,  142 => 51,  136 => 47,  131 => 45,  126 => 43,  122 => 41,  112 => 33,  107 => 31,  101 => 28,  96 => 26,  84 => 16,  76 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Home {% endblock %}

{% block body %}
<div>

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

   

</div>
{% endblock %}", "home.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/home.html.twig");
    }
}
