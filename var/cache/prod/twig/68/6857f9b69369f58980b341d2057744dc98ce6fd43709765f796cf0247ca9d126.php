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

/* success/index.html.twig */
class __TwigTemplate_d0a4e04fe9d4c2499011cc1391f70bf0bc4638374dc7851cfca0e5c2b67c414f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "success/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Message Envoyé - Mathéo Balens";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main class=\"page cv-page\">
        <section style=\"margin: 150px;\">
            <div class=\"text-center\">
                </p><i class=\"fas fa-clipboard-check\" style=\"text-align: center;font-size: 60px;color: forestgreen\"></i>
                <p class=\"text-center mt-2\" style=\"font-size: 24px;\">Message reçu ! Surveillez vos mails pour avoir votre réponse.
                <p><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Retour à l'acceuil</a></p>
            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "success/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "success/index.html.twig", "/home/Matheo_Balens/matheobalens.github.io/templates/success/index.html.twig");
    }
}
