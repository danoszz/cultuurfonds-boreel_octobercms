<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/nieuws/bericht.htm */
class __TwigTemplate_149a01f8cf7964115533e97e6a9c1a02d45a3a76e03a9e9daf0b45813c8cd309 extends Twig_Template
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
        if (($context["post"] ?? null)) {
            // line 2
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</h2>

    ";
            // line 4
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("newsPost"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 6
            echo "    <h2>Post not found</h2>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/nieuws/bericht.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if post %}
    <h2>{{ post.title }}</h2>

    {% component 'newsPost' %}
{% else %}
    <h2>Post not found</h2>
{% endif %}", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/nieuws/bericht.htm", "");
    }
}
