<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/home.htm */
class __TwigTemplate_42b6b0f50aef4ef85d87d4cb9ef2d5c365505f6ad81cf6e81dcce2895f4792ef extends Twig_Template
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
        echo "<div class=\"main-content--hero main-content--hero__home\">
  <h1>Cultuurfonds Boreel</h1>
</div>
<div class=\"main-content--container\">
  <div class=\"page-home--content__information\">
    <h2 class=\"page--title\">Over de online verzameling</h2>
    <p class=\"page--introduction\">Et rerum suscipit doloremque omnis velit veniam. Sit soluta cupiditate voluptate quis vitae facilis et. Doloribus autem architecto pariatur. Perspiciatis quis tempore ut maiores. Occaecati est repudiandae saepe. Incidunt recusandae natus beatae blanditiis.</p>
  </div>
  <div class=\"c-gallery--search\">
    ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "  </div>
  <h2>Een greep uit de collectie</h2>
  ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-content--hero main-content--hero__home\">
  <h1>Cultuurfonds Boreel</h1>
</div>
<div class=\"main-content--container\">
  <div class=\"page-home--content__information\">
    <h2 class=\"page--title\">Over de online verzameling</h2>
    <p class=\"page--introduction\">Et rerum suscipit doloremque omnis velit veniam. Sit soluta cupiditate voluptate quis vitae facilis et. Doloribus autem architecto pariatur. Perspiciatis quis tempore ut maiores. Occaecati est repudiandae saepe. Incidunt recusandae natus beatae blanditiis.</p>
  </div>
  <div class=\"c-gallery--search\">
    {% component 'searchForm' %}
  </div>
  <h2>Een greep uit de collectie</h2>
  {% component 'blogPosts' %}
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/home.htm", "");
    }
}
