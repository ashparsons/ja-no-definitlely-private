<?php

/* base.html.twig */
class __TwigTemplate_68ac9d6ae64c94e65669e9ce4330f621ae7e8febe9ead2489d0137a0f7201262 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       <meta charset=\"UTF-8\">
       <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\" integrity=\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\" crossorigin=\"anonymous\">
        <link href=\"//cdn.muicss.com/mui-latest/css/mui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"//cdn.muicss.com/mui-latest/js/mui.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"";
        // line 9
        echo "/js/main.js";
        echo "\"></script>
        <link rel=\"icon\" href=\"";
        // line 10
        echo "/images/favicon.ico";
        echo "\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo "/css/main.css";
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo "/css/header.css";
        echo "\">

        
        
        <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>

    <div id=\"sidedrawer\" class=\"mui--no-user-select\">
      <div id=\"sidedrawer-brand\" class=\"mui--appbar-line-height\">
       <div id=\"profile-header-image\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"";
        // line 25
        echo "/images/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["useraccount"]) || array_key_exists("useraccount", $context) ? $context["useraccount"] : (function () { throw new Twig_Error_Runtime('Variable "useraccount" does not exist.', 25, $this->source); })()), "image_path", array()), "html", null, true);
        echo "\">
       </div>
       <h3 id=\"profile-header-name\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "name", array()), "html", null, true);
        echo "</h3>
       <h3 id=\"profile-header-surname\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "surname", array()), "html", null, true);
        echo "</h3>
       <h3 id=\"profile-header-username\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "username", array()), "html", null, true);
        echo "</h3>

      </div>

      <div class=\"mui-divider\"></div>
      <ul>
        <li>
          <strong><a href=\"/home\">Home</a></strong>
        </li>
        <li>
          <strong>Categories</strong>
          <ul>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "              <li><a href=\"/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_name", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "          </ul>
        </li>
        <li>
          <strong><a href=\"/comment\">Message Board</a></strong>
        </li>
        <li>
          <strong><a href=\"/profile/";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "session", array()), "get", array(0 => "loggedInUser"), "method"), "id", array()), "html", null, true);
        echo "\">View Profile</a></strong>
        </li>
      </ul>
      <a class=\"mui-btn mui-btn--small mui-btn--primary\" href=\"/logout\" id=\"logout-button\"><i class=\"fa fa-power-off\"></i> Log out</a>
    </div>

    <header id=\"header\">
      <div class=\"mui-appbar mui--appbar-line-height\">
        <div id=\"header-color\" class=\"mui-container-fluid\">
          <a class=\"sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer\">☰</a>
          <a class=\"sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer\" id=\"burger-menu\">☰</a>
          <span class=\"mui--text-title\"><a href=\"/home\" id=\"name\">Ja No Definitely</a></span>
        </div>
      </div>
      <div class=\"mui-divider\"></div>
    </header>

    <div id=\"content-wrapper\">
      <div class=\"mui--appbar-height\"></div>
      <div class=\"mui-container-fluid\">
        <main class=\"container\" id=\"body-content\">
             ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        </main>
        </div>
    </div>
    ";
        // line 81
        echo "    <footer id=\"footer\">
      <div class=\"mui-divider\"></div>
      <div class=\"mui-container-fluid\">
        <br>
        Made with ♥ by Git Goin
      </div>
    </footer>
        

        
        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "    </body>
    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "                
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 91,  223 => 71,  212 => 18,  203 => 17,  185 => 16,  172 => 92,  170 => 91,  158 => 81,  153 => 72,  151 => 71,  127 => 50,  119 => 44,  108 => 42,  104 => 41,  89 => 29,  85 => 28,  81 => 27,  75 => 25,  68 => 20,  66 => 17,  62 => 16,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
       <meta charset=\"UTF-8\">
       <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\" integrity=\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\" crossorigin=\"anonymous\">
        <link href=\"//cdn.muicss.com/mui-latest/css/mui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"//cdn.muicss.com/mui-latest/js/mui.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"{{ ('/js/main.js') }}\"></script>
        <link rel=\"icon\" href=\"{{ ('/images/favicon.ico') }}\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" href=\"{{ ('/css/main.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ ('/css/header.css') }}\">

        
        
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
                
        {% endblock %}
    </head>
    <body>

    <div id=\"sidedrawer\" class=\"mui--no-user-select\">
      <div id=\"sidedrawer-brand\" class=\"mui--appbar-line-height\">
       <div id=\"profile-header-image\"><img style=\"border-radius:50%\" class=\"profile-img\" src=\"{{ ('/images/') }}{{ useraccount.image_path }}\">
       </div>
       <h3 id=\"profile-header-name\">{{ app.session.get('loggedInUser').name }}</h3>
       <h3 id=\"profile-header-surname\">{{ app.session.get('loggedInUser').surname }}</h3>
       <h3 id=\"profile-header-username\">{{ app.session.get('loggedInUser').username }}</h3>

      </div>

      <div class=\"mui-divider\"></div>
      <ul>
        <li>
          <strong><a href=\"/home\">Home</a></strong>
        </li>
        <li>
          <strong>Categories</strong>
          <ul>
            {% for category in categories %}
              <li><a href=\"/category/{{ category.id }}\">{{ category.category_name }}</a></li>
            {% endfor %}
          </ul>
        </li>
        <li>
          <strong><a href=\"/comment\">Message Board</a></strong>
        </li>
        <li>
          <strong><a href=\"/profile/{{ app.session.get('loggedInUser').id }}\">View Profile</a></strong>
        </li>
      </ul>
      <a class=\"mui-btn mui-btn--small mui-btn--primary\" href=\"/logout\" id=\"logout-button\"><i class=\"fa fa-power-off\"></i> Log out</a>
    </div>

    <header id=\"header\">
      <div class=\"mui-appbar mui--appbar-line-height\">
        <div id=\"header-color\" class=\"mui-container-fluid\">
          <a class=\"sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer\">☰</a>
          <a class=\"sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer\" id=\"burger-menu\">☰</a>
          <span class=\"mui--text-title\"><a href=\"/home\" id=\"name\">Ja No Definitely</a></span>
        </div>
      </div>
      <div class=\"mui-divider\"></div>
    </header>

    <div id=\"content-wrapper\">
      <div class=\"mui--appbar-height\"></div>
      <div class=\"mui-container-fluid\">
        <main class=\"container\" id=\"body-content\">
             {% block body %}{% endblock %}
        </main>
        </div>
    </div>
    {# <div id=\"ad\" class=\"mui-container-fluid\">
            <div class=\"mui-row\">
            <img id=\"ad-image\" src=\"https://dsp-media.eskimi.com/banner/7074_18b9e2a8e738b930e3882ec92ea90bdc.gif?_e=o2eTr6DXqGFu-BcxccbUnP62LuWw8XUNFyadwQ6_gRLKovRR770_vE9INXgjeTkn9cArG5004bGM45-o1F9LdLhSqh_q6yU8t01ID0FnPoXbjuRahM8RZ_NoiBU4fzY06FJex0eTMX-Cmm5Uai8iGLpDL6uNkbxQMjyzLnaRch4woZHNUSIMjwfWDqTFQH8ZK-Iww33hYjmpTzvTGwperoajnxciIQtKwGvyK7jQ-GQ\" width=\"250\" height=\"100%\" onload=\"tlt()\">

            </div>
    </div> #}
    <footer id=\"footer\">
      <div class=\"mui-divider\"></div>
      <div class=\"mui-container-fluid\">
        <br>
        Made with ♥ by Git Goin
      </div>
    </footer>
        

        
        {% block javascripts %}{% endblock %}
    </body>
    
</html>
", "base.html.twig", "/home/ashleighparsons/Desktop/ja-no-definitely/templates/base.html.twig");
    }
}
