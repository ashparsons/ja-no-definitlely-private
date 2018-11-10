<?php

/* base.html.twig */
class __TwigTemplate_595011d47ce33b03c590830b55ede10034dbef23e691e8416e214c6be96dd1eb extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo "/css/main.css";
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo "/css/header.css";
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Bangers\" rel=\"stylesheet\">  
        
        
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>

    <div id=\"sidedrawer\" class=\"mui--no-user-select\">
      <div id=\"sidedrawer-brand\" class=\"mui--appbar-line-height\">
       <div id=\"profile-header-image\">
       </div>
       <h3 id=\"profile-header-name\">name</h3>
       <h3 id=\"profile-header-surname\">surname</h3>

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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) || array_key_exists("categorys", $context) ? $context["categorys"] : (function () { throw new Twig_Error_Runtime('Variable "categorys" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
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
        // line 42
        echo "          </ul>
        </li>
        <li>
          <strong><a href=\"/profile\">View Profile</a></strong>
        </li>
      </ul>
      <button class=\"mui-btn mui-btn--small mui-btn--primary\" id=\"logout-button\"><i class=\"fa fa-power-off\"></i> Log out</button>
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
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        </main>
        </div>
    </div>
    <div id=\"ad\" class=\"mui-container-fluid\">
            <div class=\"mui-row\">
            <img id=\"ad-image\" src=\"https://dsp-media.eskimi.com/banner/7074_18b9e2a8e738b930e3882ec92ea90bdc.gif?_e=o2eTr6DXqGFu-BcxccbUnP62LuWw8XUNFyadwQ6_gRLKovRR770_vE9INXgjeTkn9cArG5004bGM45-o1F9LdLhSqh_q6yU8t01ID0FnPoXbjuRahM8RZ_NoiBU4fzY06FJex0eTMX-Cmm5Uai8iGLpDL6uNkbxQMjyzLnaRch4woZHNUSIMjwfWDqTFQH8ZK-Iww33hYjmpTzvTGwperoajnxciIQtKwGvyK7jQ-GQ\" width=\"250\" height=\"100%\" onload=\"tlt()\">

            </div>
    </div>
    <footer id=\"footer\">
      <div class=\"mui-divider\"></div>
      <div class=\"mui-container-fluid\">
        <br>
        Made with ♥ by Git Goin
      </div>
    </footer>
        

        
        ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "    </body>
    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
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

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "                
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
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
        return array (  220 => 86,  203 => 66,  192 => 17,  183 => 16,  165 => 15,  152 => 87,  150 => 86,  129 => 67,  127 => 66,  101 => 42,  90 => 40,  86 => 39,  64 => 19,  62 => 16,  58 => 15,  51 => 11,  47 => 10,  43 => 9,  33 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ ('/css/main.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ ('/css/header.css') }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Bangers\" rel=\"stylesheet\">  
        
        
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
                
        {% endblock %}
    </head>
    <body>

    <div id=\"sidedrawer\" class=\"mui--no-user-select\">
      <div id=\"sidedrawer-brand\" class=\"mui--appbar-line-height\">
       <div id=\"profile-header-image\">
       </div>
       <h3 id=\"profile-header-name\">name</h3>
       <h3 id=\"profile-header-surname\">surname</h3>

      </div>

      <div class=\"mui-divider\"></div>
      <ul>
        <li>
          <strong><a href=\"/home\">Home</a></strong>
        </li>
        <li>
          <strong>Categories</strong>
          <ul>
            {% for category in categorys %}
              <li><a href=\"/category/{{ category.id }}\">{{ category.category_name }}</a></li>
            {% endfor %}
          </ul>
        </li>
        <li>
          <strong><a href=\"/profile\">View Profile</a></strong>
        </li>
      </ul>
      <button class=\"mui-btn mui-btn--small mui-btn--primary\" id=\"logout-button\"><i class=\"fa fa-power-off\"></i> Log out</button>
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
    <div id=\"ad\" class=\"mui-container-fluid\">
            <div class=\"mui-row\">
            <img id=\"ad-image\" src=\"https://dsp-media.eskimi.com/banner/7074_18b9e2a8e738b930e3882ec92ea90bdc.gif?_e=o2eTr6DXqGFu-BcxccbUnP62LuWw8XUNFyadwQ6_gRLKovRR770_vE9INXgjeTkn9cArG5004bGM45-o1F9LdLhSqh_q6yU8t01ID0FnPoXbjuRahM8RZ_NoiBU4fzY06FJex0eTMX-Cmm5Uai8iGLpDL6uNkbxQMjyzLnaRch4woZHNUSIMjwfWDqTFQH8ZK-Iww33hYjmpTzvTGwperoajnxciIQtKwGvyK7jQ-GQ\" width=\"250\" height=\"100%\" onload=\"tlt()\">

            </div>
    </div>
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
