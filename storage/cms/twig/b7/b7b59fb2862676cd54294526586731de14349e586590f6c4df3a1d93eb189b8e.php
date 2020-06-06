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

/* C:\xampp\htdocs\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-all/footer.htm */
class __TwigTemplate_b460ee915a8d19ada4cc5086091d64e7e9e9530c49206e6f39c8e9156c0088cc extends \Twig\Template
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
  <div class=\"lt-col col m5 s12\">
    <div class=\"flow-text\">Subscribe to get themes updates and exclusive offers.</div>
  </div>
  <div class=\"lt-col col m7 s12\">
    <!-- Begin MailChimp Signup Form -->
    <div id=\"mc_embed_signup\">
      <form action=\"//laratify.us14.list-manage.com/subscribe/post?u=9e48b47c28a1b93742ba12e5a&amp;id=e0a5daa468\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
        <div id=\"mc_embed_signup_scroll\">
          <div class=\"input-field col m7 s12 mc-field-group\">
          \t<input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
            <label for=\"mce-EMAIL\">Your Email Address</label>
            <div id=\"mce-responses\" class=\"clear\">
            \t<div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
            \t<div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_9e48b47c28a1b93742ba12e5a_e0a5daa468\" tabindex=\"-1\" value=\"\"></div>
          </div>
          <div class=\"input-field col m5 s12\">
            <button class=\"waves-effect waves-light btn-large z-depth-0\" type=\"submit\" name=\"subscribe\" id=\"mc-embedded-subscribe\">Subscribe <i class=\"material-icons right\">email</i></button>
          </div>
        </div>
      </form>
    </div>
    <!--End mc_embed_signup-->
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-all/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col m5 s12\">
    <div class=\"flow-text\">Subscribe to get themes updates and exclusive offers.</div>
  </div>
  <div class=\"lt-col col m7 s12\">
    <!-- Begin MailChimp Signup Form -->
    <div id=\"mc_embed_signup\">
      <form action=\"//laratify.us14.list-manage.com/subscribe/post?u=9e48b47c28a1b93742ba12e5a&amp;id=e0a5daa468\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
        <div id=\"mc_embed_signup_scroll\">
          <div class=\"input-field col m7 s12 mc-field-group\">
          \t<input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
            <label for=\"mce-EMAIL\">Your Email Address</label>
            <div id=\"mce-responses\" class=\"clear\">
            \t<div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
            \t<div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_9e48b47c28a1b93742ba12e5a_e0a5daa468\" tabindex=\"-1\" value=\"\"></div>
          </div>
          <div class=\"input-field col m5 s12\">
            <button class=\"waves-effect waves-light btn-large z-depth-0\" type=\"submit\" name=\"subscribe\" id=\"mc-embedded-subscribe\">Subscribe <i class=\"material-icons right\">email</i></button>
          </div>
        </div>
      </form>
    </div>
    <!--End mc_embed_signup-->
  </div>
</div>", "C:\\xampp\\htdocs\\OctoberTest/themes/laratify-octobercms-octaskin/partials/pages-all/footer.htm", "");
    }
}
