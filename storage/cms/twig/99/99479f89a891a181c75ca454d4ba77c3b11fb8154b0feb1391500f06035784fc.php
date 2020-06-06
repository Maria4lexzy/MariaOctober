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

/* C:\xampp\htdocs\OctoberTest/themes/laratify-octobercms-octaskin/partials/_addons/js.htm */
class __TwigTemplate_c8604445ed34c580ae4b8342e8b9c63777b38b3afe3bbf1d2d4448672b5f7bd6 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "load_wow_js", [], "any", false, false, false, 1)) {
            // line 2
            echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
";
        }
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "load_owl_carousel", [], "any", false, false, false, 4)) {
            // line 5
            echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/_addons/js.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.theme.load_wow_js %}
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
{% endif %}
{% if this.theme.load_owl_carousel %}
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script>
{% endif %}", "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/_addons/js.htm", "");
    }
}
