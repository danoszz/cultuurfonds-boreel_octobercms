<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_27de8c431d417cc4be9befc7924f58005371456b11e163fea75874d63852ca12 extends Twig_Template
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
        $context["posts"] = $this->getAttribute(($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "
<div class=\"c-gallery--grid\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "
    <figure class=\"c-gallery--grid--object\">
      ";
            // line 7
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 8
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 9
                    echo "      <img data-src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                    echo "\" />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "      ";
            }
            // line 12
            echo "      <figcaption>
          <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
          <p class=\"excerpt\">";
            // line 14
            echo $this->getAttribute($context["post"], "summary", array());
            echo "</p>

      </figcaption>
      <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\"></a>
    </figure>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "  <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>



";
        // line 27
        if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 28
            echo "<ul class=\"pagination\">
  ";
            // line 29
            if (($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 30
                echo "  <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
  ";
            }
            // line 31
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "  <li class=\"";
                echo ((($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
    <a href=\"";
                // line 33
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " ";
            if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array()))) {
                // line 36
                echo "  <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
  ";
            }
            // line 38
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  131 => 36,  128 => 35,  117 => 33,  112 => 32,  107 => 31,  101 => 30,  99 => 29,  96 => 28,  94 => 27,  88 => 23,  79 => 21,  70 => 17,  64 => 14,  60 => 13,  57 => 12,  54 => 11,  41 => 9,  36 => 8,  34 => 7,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<div class=\"c-gallery--grid\">
  {% for post in posts %}

    <figure class=\"c-gallery--grid--object\">
      {% if post.featured_images.count %}
        {% for image in post.featured_images %}
      <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\" />
        {% endfor %}
      {% endif %}
      <figcaption>
          <h3>{{ post.title }}</h3>
          <p class=\"excerpt\">{{ post.summary|raw }}</p>

      </figcaption>
      <a href=\"{{ post.url }}\"></a>
    </figure>

  {% else %}
  <li class=\"no-data\">{{ noPostsMessage }}</li>
  {% endfor %}
</div>



{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
  {% if posts.currentPage > 1 %}
  <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
  {% endif %} {% for page in 1..posts.lastPage %}
  <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
  </li>
  {% endfor %} {% if posts.lastPage > posts.currentPage %}
  <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
  {% endif %}
</ul>
{% endif %}
", "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
