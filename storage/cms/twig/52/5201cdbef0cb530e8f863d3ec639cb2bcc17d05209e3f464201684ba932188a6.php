<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/galleryPost/default.htm */
class __TwigTemplate_fbe50574d1db112a312a7cd1b425258c79eb3ea0bb6e87a72bdf9da96124c76e extends Twig_Template
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

  <div class=\"page-post--content__information page-post__gallery\">
    <div class=\"page-post__info\">
      <h1 class=\"page--title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
      <p class=\"page--date\">";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</p>

      <p class=\"info\">
        Posted
        ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "categories", array()), "count", array())) {
            // line 12
            echo "          in ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>
            ";
                // line 14
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",
            ";
                }
                // line 16
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
      </p>

      <div class=\"page--text\">";
        // line 21
        echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
        echo "</div>
      <div class=\"page--info__lists\">
        <ul class=\"list--description\">
          <li>Kunstenaar</li>
          <li>Objectnummer</li>
          <li>Techniek</li>
          <li>Afmeting</li>
          <li>IB nummer</li>
          <li>Datering</li>
          <li>RKD</li>
        </ul>
        <ul class=\"list--output\">
          <li><a href=\"#\">Perronneau, Jean Baptiste</a></li>
          <li>003</li>
          <li>Pastel</li>
          <li>61 x 49cm</li>
          <li>IB nummer</li>
          <li>o.b</li>
          <li><a href=\"#\">Bekijk</a></li>
        </ul>
      </div>
    </div>
    <div class=\"page-post__image\">
      ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 45
            echo "      <div class=\"featured-image\">
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 47
                echo "          <img data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\" src=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), array($this->getAttribute($context["image"], "path", array()), 1000, false, array("mode" => "auto", "quality" => "80")));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "      </div>
      ";
        }
        // line 51
        echo "    </div>
  </div>
  <div class=\"page-post--content__related-items\">
    <h2>Gerelateerde kunstwerken</h2>
    ";
        // line 55
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("galleryPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 56
        echo "  </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/galleryPost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  152 => 55,  146 => 51,  142 => 49,  129 => 47,  125 => 46,  122 => 45,  120 => 44,  94 => 21,  87 => 18,  84 => 17,  70 => 16,  65 => 14,  58 => 13,  40 => 12,  38 => 11,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
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


  <div class=\"page-post--content__information page-post__gallery\">
    <div class=\"page-post__info\">
      <h1 class=\"page--title\">{{ post.title }}</h1>
      <p class=\"page--date\">{{ post.published_at|date('M d, Y') }}</p>

      <p class=\"info\">
        Posted
        {% if post.categories.count %}
          in {% for category in post.categories %}
          <a href=\"{{ category.url }}\">{{ category.name }}</a>
            {% if not loop.last %},
            {% endif %}
          {% endfor %}
        {% endif %}
        on {{ post.published_at|date('M d, Y') }}
      </p>

      <div class=\"page--text\">{{ post.content_html|raw }}</div>
      <div class=\"page--info__lists\">
        <ul class=\"list--description\">
          <li>Kunstenaar</li>
          <li>Objectnummer</li>
          <li>Techniek</li>
          <li>Afmeting</li>
          <li>IB nummer</li>
          <li>Datering</li>
          <li>RKD</li>
        </ul>
        <ul class=\"list--output\">
          <li><a href=\"#\">Perronneau, Jean Baptiste</a></li>
          <li>003</li>
          <li>Pastel</li>
          <li>61 x 49cm</li>
          <li>IB nummer</li>
          <li>o.b</li>
          <li><a href=\"#\">Bekijk</a></li>
        </ul>
      </div>
    </div>
    <div class=\"page-post__image\">
      {% if post.featured_images.count %}
      <div class=\"featured-image\">
        {% for image in post.featured_images %}
          <img data-src=\"{{ image.filename }}\" src=\"{{ image.path | resize(1000, false, { mode: 'auto', quality: '80' }) }}\" alt=\"{{ image.description }}\" />
        {% endfor %}
      </div>
      {% endif %}
    </div>
  </div>
  <div class=\"page-post--content__related-items\">
    <h2>Gerelateerde kunstwerken</h2>
    {% component 'galleryPosts' %}
  </div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/galleryPost/default.htm", "");
    }
}
