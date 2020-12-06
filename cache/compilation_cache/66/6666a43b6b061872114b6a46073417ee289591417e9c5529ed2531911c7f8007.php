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
    <link rel=\"stylesheet\" href=\"assets/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"vendor/twbs/bootstrap/dist/css/bootstrap.css\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
</head>

<body>
    <h1 class=\"h1\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "message", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
    <div class=\"main\">
        <p class=\"rotate\">hello php-sass</p>
        <p class=\"h1\">class=\"h1\"：サンプル</p>
    </div>
    <button type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">I register !</button>

    <div id=\"myModal\" class=\"modal hide fade\">
        <!-- register form here -->
        ddd
        dd
    </div>
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
            <a class=\"nav-link\">タブ1</a>
        </li>
    </ul>
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
        return array (  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/view/index.html.twig");
    }
}
