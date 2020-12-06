<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_bb313cfea9d4466c839451667d8be4fb3cbddaaf2661775df6b0e96c532dbedc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>

<head>
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link rel=\"stylesheet\" href=\"vendor/twbs/bootstrap/dist/css/bootstrap.css\">
    <script src=\"vendor/twbs/bootstrap/site/docs/4.5/assets/js/vendor/jquery.slim.min.js\"></script>
    <script src=\"vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js\"></script>
    <script src=\"vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
    <title>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["top"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</title>
</head>

<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"navbar-brand\">cbt-nine</a>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\" data-target=\"#navbarDropdown\"
                        aria-label=\"Toggle navigation\">
                        Dropdown
                    </a>
                    <div class=\"dropdown-menu\" id=\"navbarDropdown\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Register</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Login</a>
                </li>

        </nav>
    </header>
    <h1 class=\"h1\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["top"] ?? null), "contentsname", [], "any", false, false, false, 43), "html", null, true);
        echo "</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm\">
                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["top"] ?? null), "test_question", [], "any", false, false, false, 47), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm\">
                ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["top"] ?? null), "test_timelimit", [], "any", false, false, false, 50), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm\">
                ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["top"] ?? null), "test_number", [], "any", false, false, false, 53), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm\">
                ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["top"] ?? null), "test_type", [], "any", false, false, false, 56), "html", null, true);
        echo "
            </div>
        </div>
    </div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 56,  103 => 53,  97 => 50,  91 => 47,  84 => 43,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/view/index.html.twig");
    }
}
