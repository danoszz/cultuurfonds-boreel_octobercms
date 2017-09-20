<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/bedard/blogtags/components/blogrelated/default.htm */
class __TwigTemplate_e79f208e968732dbf37e74fa3400d46268678a75f0f8ff5ef546335457b88d07 extends Twig_Template
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
        echo "<h1>Related posts</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Post"]) {
            // line 4
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "url", array()), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "title", array()), "html", null, true);
            echo "</li></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/bedard/blogtags/components/blogrelated/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Related posts</h1>
<ul>
    {% for Post in __SELF__.posts %}
        <a href=\"{{Post.url}}\"><li>{{ Post.title }}</li></a>
    {% endfor %}
</ul>
", "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/bedard/blogtags/components/blogrelated/default.htm", "");
    }
}
