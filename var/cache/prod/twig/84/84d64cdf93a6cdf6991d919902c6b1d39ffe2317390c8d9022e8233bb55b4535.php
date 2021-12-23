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

/* workinprogress/index.html.twig */
class __TwigTemplate_240de2c7de0121e8865dcb88889c4656e702db1c1e53f4ff60d961d490a6a985 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "workinprogress/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Travaux en cours - Mathéo Balens";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<main class=\"page cv-page\">
    <section style=\"margin: 150px;\">
        <div class=\"text-center\">
            <p class=\"text-center\" style=\"font-size: 30px;\">En cours de construction</p><i class=\"fas fa-warning\" style=\"text-align: center;font-size: 60px;\"></i>
        </div>
    </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "workinprogress/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workinprogress/index.html.twig", "/home/Matheo_Balens/matheobalens.github.io/templates/workinprogress/index.html.twig");
    }
}
