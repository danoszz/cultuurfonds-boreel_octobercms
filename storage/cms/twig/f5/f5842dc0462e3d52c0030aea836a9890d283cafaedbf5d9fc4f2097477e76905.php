<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/galleryRelated/default.htm */
class __TwigTemplate_1eaf9cedf39917c6309ebdec47468b4c3ed9508e9688a0a19f511510b8d7996a extends Twig_Template
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
        echo "<div class=\"c-gallery--grid\">
      ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "posts", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Post"]) {
            // line 3
            echo "      <figure class=\"c-gallery--grid--object\">
        ";
            // line 4
            if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "featured_images", array()), "count", array())) {
                // line 5
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 6
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
                // line 8
                echo "        ";
            }
            // line 9
            echo "        <figcaption>
            <p class=\"excerpt\">";
            // line 10
            echo $this->getAttribute(($context["post"] ?? null), "summary", array());
            echo "</p>
            <h3>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</h3>
        </figcaption>
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\"></a>
      </figure>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "    <p class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/galleryRelated/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  73 => 16,  65 => 13,  60 => 11,  56 => 10,  53 => 9,  50 => 8,  37 => 6,  32 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"c-gallery--grid\">
      {% for Post in __SELF__.posts %}
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
    <p class=\"no-data\">{{ noPostsMessage }}</p>
    {% endfor %}
  </div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/galleryRelated/default.htm", "");
    }
}
