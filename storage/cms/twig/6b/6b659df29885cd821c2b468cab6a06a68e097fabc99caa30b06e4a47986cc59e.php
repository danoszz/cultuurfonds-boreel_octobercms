<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/sidebar.htm */
class __TwigTemplate_d9725129cadfc54a26cf9aaa76493a3936b06d598aef9b6a0ea9b29e925e765b extends Twig_Template
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
        echo "<nav>
  <ul>
    <li><a href=\"#\">Homepage</a></li>
    <li><a href=\"#\" class=\"active\">Collection</a></li>
    <li><a href=\"#\">News</a></li>
    <li><a href=\"#\">Information</a>
      <ul>
        <li><a href=\"#\">Contact</a></li>
      </ul>
    </li>
  </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
  <ul>
    <li><a href=\"#\">Homepage</a></li>
    <li><a href=\"#\" class=\"active\">Collection</a></li>
    <li><a href=\"#\">News</a></li>
    <li><a href=\"#\">Information</a>
      <ul>
        <li><a href=\"#\">Contact</a></li>
      </ul>
    </li>
  </ul>
</nav>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/site/sidebar.htm", "");
    }
}
