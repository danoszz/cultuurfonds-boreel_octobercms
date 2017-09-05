<?php

/* /Applications/MAMP/htdocs/boreel/themes/cultuurfonds-boreel/partials/calcresult.htm */
class __TwigTemplate_95818be058dd33115dbfda56badd2d9812831ded472830f7b8f019e37c2c7e1e extends Twig_Template
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
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/boreel/themes/cultuurfonds-boreel/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if result %}
    <span class=\"lead\">
        The result is <span class=\"label label-success\">{{ result }}</span>
    </span>
{% else %}
    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
{% endif %}", "/Applications/MAMP/htdocs/boreel/themes/cultuurfonds-boreel/partials/calcresult.htm", "");
    }
}
