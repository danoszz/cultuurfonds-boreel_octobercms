<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPost/default.htm */
class __TwigTemplate_faa06e52b498b72b067e9d9a3fb8eba419f1a2a0760ca78c586c3b785c99bb34 extends Twig_Template
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
        $context["post"] = $this->getAttribute(($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "

";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("newsPost/news-post_header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
<div class=\"main-content--container\">
  <div class=\"page-post--content__information\">
    <p class=\"page--date\">";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</p>
    <h1 class=\"page--title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"page--text\">";
        // line 10
        echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
        echo "</p>
    ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 12
            echo "        <div class=\"featured-images text-center\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "                <p>
                    <img
                        data-src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
                        src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
                        alt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
                        style=\"max-width: 100%\" />
                </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    ";
        }
        // line 24
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  77 => 22,  67 => 18,  63 => 17,  59 => 16,  55 => 14,  51 => 13,  48 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}


{% partial 'newsPost/news-post_header' %}

<div class=\"main-content--container\">
  <div class=\"page-post--content__information\">
    <p class=\"page--date\">{{ post.published_at|date('M d, Y') }}</p>
    <h1 class=\"page--title\">{{ post.title }}</h1>
    <div class=\"page--text\">{{ post.content_html|raw }}</p>
    {% if post.featured_images.count %}
        <div class=\"featured-images text-center\">
            {% for image in post.featured_images %}
                <p>
                    <img
                        data-src=\"{{ image.filename }}\"
                        src=\"{{ image.path }}\"
                        alt=\"{{ image.description }}\"
                        style=\"max-width: 100%\" />
                </p>
            {% endfor %}
        </div>
    {% endif %}
  </div>
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPost/default.htm", "");
    }
}
