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

/* C:\xampp\htdocs\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm */
class __TwigTemplate_666cc691b1bbb70ee129b1a7d0451ab1ad70dffe8ff6103d6b37165918422ba4 extends \Twig\Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"center\">
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://laravel.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-01.png");
        echo "\" alt=\"Laravel\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://octobercms.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-02.png");
        echo "\" alt=\"OctoberCMS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"http://materializecss.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-03.png");
        echo "\" alt=\"Materialize CSS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
    <a href=\"https://github.com/\" target=\"_blank\">  <img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-04.png");
        echo "\" alt=\"Github\"></a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 10,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"center\">
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://laravel.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-01.png'|theme }}\" alt=\"Laravel\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://octobercms.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-02.png'|theme }}\" alt=\"OctoberCMS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"http://materializecss.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-03.png'|theme }}\" alt=\"Materialize CSS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
    <a href=\"https://github.com/\" target=\"_blank\">  <img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-04.png'|theme }}\" alt=\"Github\"></a>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm", "");
    }
}
