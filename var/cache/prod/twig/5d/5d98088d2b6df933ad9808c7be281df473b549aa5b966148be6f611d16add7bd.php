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

/* base.html.twig */
class __TwigTemplate_8e78eb688bf6daa3827afb488df16cb540ae75aabe0b9a262d28d2d7e2f6984a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/button.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Bebas+Neue&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/fontawesome5-overrides.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/Animated-Type-Heading.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
</head>

<body>

<nav class=\"navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient\" style=\"font-family: Lato, sans-serif;transform: perspective(0px);filter: hue-rotate(310deg) invert(0%);\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"filter: blur(0px) grayscale(100%) hue-rotate(360deg);\">Mathéo Balens</a><button data-bs-toggle=\"collapse\" class=\"navbar-toggler\" data-bs-target=\"#navbarNav\"><span class=\"visually-hidden\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\"></li>
                <li class=\"nav-item\"></li>
                <li class=\"nav-item\"></li>
                <li class=\"nav-item\"></li>
                <li class=\"nav-item\"></li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\"></li>
                <li class=\"nav-item\"></li>
                <li class=\"nav-item\"></li>
            </ul>
        </div><button class=\"btn-primary btn-sm\" type=\"button\" style=\"text-decoration:none; filter: hue-rotate(75deg);\"><a class=\"text-center\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" style=\"text-decoration:none;color: rgb(255,255,255);font-size: 16px;border-bottom-style: none;\">Contactez moi !</a></button>
    </div>
</nav>

";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
<footer>
    <div class=\"container\">
        <div class=\"social-icons-custom\">
            <p class=\"text-start\" style=\"color: rgb(106,106,106);\">Mathéo Balens © </p>
        </div>
    </div>
</footer>


<script src=\"https://platform.linkedin.com/badges/js/profile.js\" async defer type=\"text/javascript\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bs-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/Animated-Type-Heading.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bubbly-button.js"), "html", null, true);
        echo "\"></script>



</body>

</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil - Mathéo Balens";
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "
";
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
        return array (  180 => 48,  176 => 47,  169 => 8,  158 => 69,  152 => 66,  147 => 64,  142 => 62,  138 => 61,  125 => 50,  123 => 47,  116 => 43,  99 => 29,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/Matheo_Balens/matheobalens.github.io/templates/base.html.twig");
    }
}
