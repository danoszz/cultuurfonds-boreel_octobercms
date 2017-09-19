<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPosts/default.htm */
class __TwigTemplate_9b40208c2f5dda7abab9911d7b482780bd67760f70bf661594818594a18a41eb extends Twig_Template
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
        echo "<div class=\"c-news--grid\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "  <div class=\"c-news--grid--object\">
    <p class=\"object--date\">";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</p>
    <h3 class=\"object--title\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
    <a class=\"object--button o-button o-button--medium o-button--medium__outline-color\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">
      Lees meer
      <span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
        <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
        </g>
      </svg>
     </span>
    </a>
  </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "  <p class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>



";
        // line 24
        if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 25
            echo "<ul class=\"pagination\">
  ";
            // line 26
            if (($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 27
                echo "  <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
  ";
            }
            // line 28
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "  <li class=\"";
                echo ((($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
    <a href=\"";
                // line 30
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
            // line 32
            echo " ";
            if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array()))) {
                // line 33
                echo "  <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
  ";
            }
            // line 35
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPosts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  107 => 33,  104 => 32,  93 => 30,  88 => 29,  83 => 28,  77 => 27,  75 => 26,  72 => 25,  70 => 24,  64 => 20,  55 => 18,  38 => 6,  34 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"c-news--grid\">
  {% for post in posts %}
  <div class=\"c-news--grid--object\">
    <p class=\"object--date\">{{ post.published_at|date('M d, Y') }}</p>
    <h3 class=\"object--title\">{{ post.title }}</h3>
    <a class=\"object--button o-button o-button--medium o-button--medium__outline-color\" href=\"{{ post.url }}\">
      Lees meer
      <span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
        <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
        </g>
      </svg>
     </span>
    </a>
  </div>
  {% else %}
  <p class=\"no-data\">{{ noPostsMessage }}</p>
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
{% endif %}", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPosts/default.htm", "");
    }
}
