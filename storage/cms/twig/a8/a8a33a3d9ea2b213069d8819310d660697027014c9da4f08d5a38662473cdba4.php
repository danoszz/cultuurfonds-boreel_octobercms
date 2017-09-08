<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/footer.htm */
class __TwigTemplate_de4bef950831bc335453dc58700b93fe0148d508e820d19babb100a1fe09f371 extends Twig_Template
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
        echo "<div id=\"footer\">
  <p class=\"muted credit\">&copy; 2017 - ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " made by <a href=\"#\">devign.it</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
  <p class=\"muted credit\">&copy; 2017 - {{ \"now\"|date(\"Y\") }} made by <a href=\"#\">devign.it</a></p>
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/footer.htm", "");
    }
}
