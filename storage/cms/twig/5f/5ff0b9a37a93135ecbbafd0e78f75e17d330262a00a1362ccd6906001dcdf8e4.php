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

/* C:\xampp\htdocs\OctoberTest/themes/laratify-octobercms-octaskin/partials/_addons/css.htm */
class __TwigTemplate_b81303bd43d82406a2d3cbcd31ef0758849eaacb7c7da38c5512224d7ab7ac18 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "load_animate_css", [], "any", false, false, false, 1)) {
            // line 2
            echo "  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\">
";
        }
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "load_owl_carousel", [], "any", false, false, false, 5)) {
            // line 6
            echo "  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css\" rel=\"stylesheet\">
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/_addons/css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.theme.load_animate_css %}
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\">
{% endif %}

{% if this.theme.load_owl_carousel %}
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css\" rel=\"stylesheet\">
{% endif %}", "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/_addons/css.htm", "");
    }
}
