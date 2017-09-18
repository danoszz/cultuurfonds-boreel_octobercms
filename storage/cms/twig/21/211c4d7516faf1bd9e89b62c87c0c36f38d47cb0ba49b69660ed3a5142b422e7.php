<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/header.htm */
class __TwigTemplate_3940890db45d0c2e36e5e1691ddf9dfdc1d30fb75a7a306cb70977974502500c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"logo-boreel\">
  <a href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
    <img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/build/assets/images/logo-boreel_wapen.svg");
        echo "\" alt=\"Logo Cultuurfonds Boreel\">
    <span>Cultuurfonds Boreel</span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"logo-boreel\">
  <a href=\"{{ 'home'|page }}\">
    <img src=\"{{ 'assets/build/assets/images/logo-boreel_wapen.svg'|theme }}\" alt=\"Logo Cultuurfonds Boreel\">
    <span>Cultuurfonds Boreel</span>
  </a>
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/header.htm", "");
    }
}
