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

/* C:\xampp\htdocs\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/bottom.htm */
class __TwigTemplate_ba767642325795a122ac76698dd4eeda3e7df538606275acbc6040fb1d0d09d7 extends \Twig\Template
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
    <h2 class=\"lt-title center\">Who We Are</h2>
    <p class=\"center\">OctoberCMS is a productivity platform, it saves your most valuable resource with helpful tools and a vast collection of plugins. Working with OctoberCMS compliments your usual workflow, easily manage changes and deploy updates with Git or SVN. Easily manage any aspect of your site using bespoke tools that require little or no explanation.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-01.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Tom Doe</span>
        <p class=\"lt-card-subtitle\">Founder &amp; CEO</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Tom Doe<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-02.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Jane Tim</span>
        <p class=\"lt-card-subtitle\">Designer</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Jane Tim<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-03.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">John Boe</span>
        <p class=\"lt-card-subtitle\">Developer</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">John Boe<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-04.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Cath Qui</span>
        <p class=\"lt-card-subtitle\">QA Lead</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Cath Qui<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 74,  98 => 54,  75 => 34,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <h2 class=\"lt-title center\">Who We Are</h2>
    <p class=\"center\">OctoberCMS is a productivity platform, it saves your most valuable resource with helpful tools and a vast collection of plugins. Working with OctoberCMS compliments your usual workflow, easily manage changes and deploy updates with Git or SVN. Easily manage any aspect of your site using bespoke tools that require little or no explanation.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-01.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Tom Doe</span>
        <p class=\"lt-card-subtitle\">Founder &amp; CEO</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Tom Doe<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-02.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Jane Tim</span>
        <p class=\"lt-card-subtitle\">Designer</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Jane Tim<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-03.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">John Boe</span>
        <p class=\"lt-card-subtitle\">Developer</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">John Boe<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-04.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Cath Qui</span>
        <p class=\"lt-card-subtitle\">QA Lead</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Cath Qui<i class=\"material-icons right\">close</i></span>
        <p>Here is some more info about this person that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-home/bottom.htm", "");
    }
}
