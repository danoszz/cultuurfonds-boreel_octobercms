<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/pkleindienst/blogsearch/components/searchform/default.htm */
class __TwigTemplate_4830a76640f083f694b3fc25a97415760c2fb1c76bf194db82647b13fe03945c extends Twig_Template
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
        echo "<form class=\"c-gallery--search__form\" method=\"GET\" action=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute(($context["__SELF__"] ?? null), "resultPage", array()));
        echo "\">
  <div class=\"c-gallery--search__form--wrapper__search\">
    <input class=\"c-gallery--search--form__searchbar\" type=\"text\" name=\"search\" class=\"form-control\">
    <button class=\"c-gallery--search--form__button\" type=\"submit\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Zoek"));
        echo "</button>
  </div>
  ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "url", array()) == "/verzameling/:slug")) {
            // line 7
            echo "  <div class=\"c-gallery--search--form__filter toggle--filtersort\">
    <h3 class=\"toggle--filtersort__title\">Verfijnen</h3>
    <div class=\"toggle--filtersort__inner\">

      <fieldset class=\"filtersort--inner__column control-group\">
        <legend>
          <h4>Datering</h4>
        </legend>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
      </fieldset>

      <fieldset class=\"filtersort--inner__column control-group\">
        <legend>
          <h4>Kunstenaar</h4>
        </legend>
        ";
            // line 41
            if ($this->getAttribute(($context["__SELF__"] ?? null), "categoryFilter", array())) {
                // line 42
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "categories", array()));
                foreach ($context['_seq'] as $context["key"] => $context["cat"]) {
                    // line 43
                    echo "          <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"kunstenaar\" value=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"/>
            <span>";
                    // line 45
                    echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
                    echo "</span>
            <div class=\"control__indicator\"></div>
          </label>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        ";
            }
            // line 50
            echo "

      </fieldset>

    </div>
  </div>
  <div class=\"c-gallery--search--form__sort toggle--filtersort\">
    <h3 class=\"toggle--filtersort__title\">Sorteren</h3>
    <div class=\"toggle--filtersort__inner\">
      <fieldset>
        <label class=\"control control--radio\">
          <input type=\"radio\" name=\"sort\" value=\"relevantie\"/>
          <span>Relevantie</span>
          <div class=\"control__indicator\"></div>
        </label>

        <label class=\"control control--radio\">
          <input type=\"radio\" name=\"sort\" value=\"chronologisch\"/>
          <span>Chronologisch</span>
          <div class=\"control__indicator\"></div>
        </label>

        <label class=\"control control--radio\">
          <input type=\"radio\" name=\"sort\" value=\"recent\"/>
          <span>Meest recent</span>
          <div class=\"control__indicator\"></div>
        </label>
      </fieldset>
    </div>
  </div>
    ";
        }
        // line 81
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/pkleindienst/blogsearch/components/searchform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 81,  96 => 50,  93 => 49,  83 => 45,  79 => 44,  76 => 43,  71 => 42,  69 => 41,  33 => 7,  31 => 6,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"c-gallery--search__form\" method=\"GET\" action=\"{{ __SELF__.resultPage|page }}\">
  <div class=\"c-gallery--search__form--wrapper__search\">
    <input class=\"c-gallery--search--form__searchbar\" type=\"text\" name=\"search\" class=\"form-control\">
    <button class=\"c-gallery--search--form__button\" type=\"submit\">{{ 'Zoek'|_ }}</button>
  </div>
  {% if this.page.url == '/verzameling/:slug' %}
  <div class=\"c-gallery--search--form__filter toggle--filtersort\">
    <h3 class=\"toggle--filtersort__title\">Verfijnen</h3>
    <div class=\"toggle--filtersort__inner\">

      <fieldset class=\"filtersort--inner__column control-group\">
        <legend>
          <h4>Datering</h4>
        </legend>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
        <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"datering\" value=\"19eeuw\"/>
            <span>First checkbox</span>
            <div class=\"control__indicator\"></div>
          </label>
      </fieldset>

      <fieldset class=\"filtersort--inner__column control-group\">
        <legend>
          <h4>Kunstenaar</h4>
        </legend>
        {% if __SELF__.categoryFilter %}
          {% for key,cat in __SELF__.categories %}
          <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"kunstenaar\" value=\"{{ key }}\"/>
            <span>{{ cat }}</span>
            <div class=\"control__indicator\"></div>
          </label>
          {% endfor %}
        {% endif %}


      </fieldset>

    </div>
  </div>
  <div class=\"c-gallery--search--form__sort toggle--filtersort\">
    <h3 class=\"toggle--filtersort__title\">Sorteren</h3>
    <div class=\"toggle--filtersort__inner\">
      <fieldset>
        <label class=\"control control--radio\">
          <input type=\"radio\" name=\"sort\" value=\"relevantie\"/>
          <span>Relevantie</span>
          <div class=\"control__indicator\"></div>
        </label>

        <label class=\"control control--radio\">
          <input type=\"radio\" name=\"sort\" value=\"chronologisch\"/>
          <span>Chronologisch</span>
          <div class=\"control__indicator\"></div>
        </label>

        <label class=\"control control--radio\">
          <input type=\"radio\" name=\"sort\" value=\"recent\"/>
          <span>Meest recent</span>
          <div class=\"control__indicator\"></div>
        </label>
      </fieldset>
    </div>
  </div>
    {% endif %}
</form>
", "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/pkleindienst/blogsearch/components/searchform/default.htm", "");
    }
}
