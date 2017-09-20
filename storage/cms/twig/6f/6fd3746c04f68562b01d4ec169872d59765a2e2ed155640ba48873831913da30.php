<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/verzameling/kunstwerk.htm */
class __TwigTemplate_a553c2a038c0b7b421ad51b00058ad78461abef14c570ce06e4dccd5457fe2ec extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("galleryPost/gallery-post_header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"main-content--container\">
";
        // line 4
        if (($context["post"] ?? null)) {
            // line 5
            echo "  ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("galleryPost"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 7
            echo "    <h2>Post not found</h2>
";
        }
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("galleryRelated"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/verzameling/kunstwerk.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  39 => 9,  35 => 7,  29 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'galleryPost/gallery-post_header' %}

<div class=\"main-content--container\">
{% if post %}
  {% component 'galleryPost'%}
{% else %}
    <h2>Post not found</h2>
{% endif %}
{% component 'galleryRelated'%}
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/pages/verzameling/kunstwerk.htm", "");
    }
}
