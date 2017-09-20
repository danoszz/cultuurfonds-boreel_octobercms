<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/nieuws.htm */
class __TwigTemplate_10341a6c4f93dce5062700e0865d6f5dad61cfa607fbab73d321a856c04a380b extends Twig_Template
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
  <h1 class=\"page--title\">Nieuws</h1>
  <p class=\"page--introduction\">Et rerum suscipit doloremque omnis velit veniam. Sit soluta cupiditate voluptate quis vitae facilis et. Doloribus autem architecto pariatur. Perspiciatis quis tempore ut maiores. Occaecati est repudiandae saepe.</p>
</div>
";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/nieuws.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
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
  <h1 class=\"page--title\">Nieuws</h1>
  <p class=\"page--introduction\">Et rerum suscipit doloremque omnis velit veniam. Sit soluta cupiditate voluptate quis vitae facilis et. Doloribus autem architecto pariatur. Perspiciatis quis tempore ut maiores. Occaecati est repudiandae saepe.</p>
</div>
{% component 'newsPosts' %}
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/nieuws.htm", "");
    }
}
