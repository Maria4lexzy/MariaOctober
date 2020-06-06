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

/* C:\xampp\htdocs\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm */
class __TwigTemplate_9b2d46b41110e07cc6c7f8564cf3b2f9aeed7f3c282c8e0acad869254a3ad8d9 extends \Twig\Template
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
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/slideshow/img-01.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Build a Professional Website</h2>
            <h5 class=\"lt-slider-subtitle\">with OctoberCMS &amp; Materialize</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/slideshow/img-02.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Modern Responsive Design</h2>
            <h5 class=\"lt-slider-subtitle\">Mobile Friendly Out of the Box</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/slideshow/img-03.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Free &amp; Open Source</h2>
            <h5 class=\"lt-slider-subtitle\">Sky is the Limit</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  60 => 19,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-01.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Build a Professional Website</h2>
            <h5 class=\"lt-slider-subtitle\">with OctoberCMS &amp; Materialize</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-02.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Modern Responsive Design</h2>
            <h5 class=\"lt-slider-subtitle\">Mobile Friendly Out of the Box</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/img-03.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Free &amp; Open Source</h2>
            <h5 class=\"lt-slider-subtitle\">Sky is the Limit</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Download<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">View Server</a> or <a href=\"https://www.laratify.com/\" target=\"_blank\">Contact Us</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm", "");
    }
}
