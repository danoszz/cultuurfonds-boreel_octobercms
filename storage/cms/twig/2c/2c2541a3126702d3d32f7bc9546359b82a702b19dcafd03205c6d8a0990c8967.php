<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/verzameling.htm */
class __TwigTemplate_91ff97378a3ec6e4bee3e341cc4c290356682543a1ed65662009e323569019ef extends Twig_Template
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
        echo "<div class=\"main-content--container\">
<div class=\"page-default--content__information\">
  <h1 class=\"page--title\">Verzameling</h1>
  <p class=\"page--introduction\">Et rerum suscipit doloremque omnis velit veniam. Sit soluta cupiditate voluptate quis vitae facilis et. Doloribus autem architecto pariatur. Perspiciatis quis tempore ut maiores. Occaecati est repudiandae saepe.</p>
</div>
<div class=\"c-gallery--search\">
  ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</div>

<h2>Een greep uit de collectie</h2>
";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/verzameling.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  36 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-content--container\">
<div class=\"page-default--content__information\">
  <h1 class=\"page--title\">Verzameling</h1>
  <p class=\"page--introduction\">Et rerum suscipit doloremque omnis velit veniam. Sit soluta cupiditate voluptate quis vitae facilis et. Doloribus autem architecto pariatur. Perspiciatis quis tempore ut maiores. Occaecati est repudiandae saepe.</p>
</div>
<div class=\"c-gallery--search\">
  {% component 'searchForm' %}
</div>

<h2>Een greep uit de collectie</h2>
{% component 'blogPosts' %}
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/verzameling.htm", "");
    }
}
