<?php

/* comment.html.twig */
class __TwigTemplate_9c719067f7740c5260830604e4186876b8355c402b9c1c1f82104018b74a164c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment.html.twig"));

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

        echo "Ja no definitely - Message Board ";
        
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

    <div class=\"mui-panel mui-col-sm-12\">
        <br>
        <span class=\"mui--text-title\" id=\"category_title\">Message Board!</span>
        <br>
        <br>
        <div class=\"mui--text-title\">Please use this as a space to talk about :
            <ul>
                <li>Trips to South Africa</li>
                <li>Trips across/around South Africa</li>
                <li>Interesting Stories about South Africa</li>
                <li>Your favourite parts of our beautiful country</li>
            </ul>
        </div>
    </div>

    ";
        // line 24
        echo "    <div class=\"mui-panel mui-col-sm-12\">
        <br>
        <div class=\"commentForm mui-form\">
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 27, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            <div class=\"mui-textfield\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 29, $this->source); })()), "comment_text", array()), 'widget', array("attr" => array("placeholder" => "Make a comment...")));
        echo "
            </div>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
        </div>
        <br>
    </div>

    ";
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "    <div class=\"commentsmade mui-panel mui-col-sm-4\">
        <div class=\"mui--text-black-54 mui--text-body2\">
            ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment_author", array()), "html", null, true);
            echo "
            <br>
            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentText", array()), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  128 => 42,  123 => 40,  119 => 38,  114 => 37,  106 => 31,  101 => 29,  96 => 27,  91 => 24,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Ja no definitely - Message Board {% endblock %}

{% block body %}
<div>

    <div class=\"mui-panel mui-col-sm-12\">
        <br>
        <span class=\"mui--text-title\" id=\"category_title\">Message Board!</span>
        <br>
        <br>
        <div class=\"mui--text-title\">Please use this as a space to talk about :
            <ul>
                <li>Trips to South Africa</li>
                <li>Trips across/around South Africa</li>
                <li>Interesting Stories about South Africa</li>
                <li>Your favourite parts of our beautiful country</li>
            </ul>
        </div>
    </div>

    {# POST COMMENT #}
    <div class=\"mui-panel mui-col-sm-12\">
        <br>
        <div class=\"commentForm mui-form\">
            {{ form_start(commentForm, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"mui-textfield\">
            {{ form_widget(commentForm.comment_text, {'attr': {'placeholder': 'Make a comment...'} }) }}
            </div>
            {{ form_end(commentForm) }}
        </div>
        <br>
    </div>

    {# COMMENTS #}
    {% for comment in comments %}
    <div class=\"commentsmade mui-panel mui-col-sm-4\">
        <div class=\"mui--text-black-54 mui--text-body2\">
            {{ comment.comment_author }}
            <br>
            {{ comment.commentText }}
        </div>
    </div>
    {% endfor %}

</div>
{% endblock %}", "comment.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/comment.html.twig");
    }
}
