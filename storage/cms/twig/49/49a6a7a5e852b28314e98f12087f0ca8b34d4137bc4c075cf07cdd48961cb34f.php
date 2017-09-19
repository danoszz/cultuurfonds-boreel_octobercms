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
";
        // line 3
        if ((($context["currentCategoryFilter"] ?? null) == ($context["kunstwerk"] ?? null))) {
            // line 4
            echo "  <div class=\"c-gallery--grid\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 6
                echo "      <figure class=\"c-gallery--grid--object\">
        ";
                // line 7
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 8
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 9
                        echo "        <img data-src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "\" src=\"";
                        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), array($this->getAttribute($context["image"], "path", array()), 500, false, array("mode" => "auto", "quality" => "80")));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                        echo "\" />
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        <figcaption>
            <p class=\"excerpt\">";
                // line 13
                echo $this->getAttribute($context["post"], "summary", array());
                echo "</p>
            <h3>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h3>
        </figcaption>
        <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></a>
      </figure>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 19
                echo "    <li class=\"no-data\">";
                echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  </div>

  ";
        } elseif ((        // line 23
($context["currentCategoryFilter"] ?? null) == ($context["nieuws"] ?? null))) {
            // line 24
            echo "
<div class=\"c-news--grid\">
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 27
                echo "    <div class=\"c-news--grid--object\">
      <h3>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h3>
      <p class=\"excerpt\">";
                // line 29
                echo $this->getAttribute($context["post"], "summary", array());
                echo "</p>
    </div>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 32
                echo "    <p class=\"no-data\">";
                echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</div>

";
        } else {
            // line 37
            echo "<p class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
";
        }
        // line 39
        echo "

";
        // line 41
        if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 42
            echo "    <ul class=\"pagination\">
        ";
            // line 43
            if (($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 44
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 46
            echo "
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 48
                echo "            <li class=\"";
                echo ((($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 49
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
            // line 52
            echo "
        ";
            // line 53
            if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array()))) {
                // line 54
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 56
            echo "    </ul>
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
        return array (  190 => 56,  184 => 54,  182 => 53,  179 => 52,  168 => 49,  163 => 48,  159 => 47,  156 => 46,  150 => 44,  148 => 43,  145 => 42,  143 => 41,  139 => 39,  133 => 37,  128 => 34,  119 => 32,  111 => 29,  107 => 28,  104 => 27,  99 => 26,  95 => 24,  93 => 23,  89 => 21,  80 => 19,  72 => 16,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  44 => 9,  39 => 8,  37 => 7,  34 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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

{% if currentCategoryFilter == kunstwerk %}
  <div class=\"c-gallery--grid\">
    {% for post in posts %}
      <figure class=\"c-gallery--grid--object\">
        {% if post.featured_images.count %}
          {% for image in post.featured_images %}
        <img data-src=\"{{ image.filename }}\" src=\"{{ image.path | resize(500, false, { mode: 'auto', quality: '80' }) }}\" alt=\"{{ image.description }}\" />
          {% endfor %}
        {% endif %}
        <figcaption>
            <p class=\"excerpt\">{{ post.summary|raw }}</p>
            <h3>{{ post.title }}</h3>
        </figcaption>
        <a href=\"{{ post.url }}\"></a>
      </figure>
    {% else %}
    <li class=\"no-data\">{{ noPostsMessage }}</li>
    {% endfor %}
  </div>

  {% elseif currentCategoryFilter == nieuws %}

<div class=\"c-news--grid\">
    {% for post in posts %}
    <div class=\"c-news--grid--object\">
      <h3>{{ post.title }}</h3>
      <p class=\"excerpt\">{{ post.summary|raw }}</p>
    </div>
    {% else %}
    <p class=\"no-data\">{{ noPostsMessage }}</p>
    {% endfor %}
</div>

{% else %}
<p class=\"no-data\">{{ noPostsMessage }}</p>
{% endif %}


{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
", "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
