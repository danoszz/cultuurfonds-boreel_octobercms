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
  <input class=\"c-gallery--search--form__searchbar\" type=\"text\" name=\"search\" class=\"form-control\">

  <button class=\"c-gallery--search--form__button\" type=\"submit\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Search"));
        echo "</button>
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
        ";
        // line 39
        if ($this->getAttribute(($context["__SELF__"] ?? null), "categoryFilter", array())) {
            // line 40
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "categories", array()));
            foreach ($context['_seq'] as $context["key"] => $context["cat"]) {
                // line 41
                echo "          <label class=\"control control--checkbox\">
            <input type=\"checkbox\" name=\"kunstenaar\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"/>
            <span>";
                // line 43
                echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
                echo "</span>
            <div class=\"control__indicator\"></div>
          </label>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        ";
        }
        // line 48
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

</form>
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
        return array (  91 => 48,  88 => 47,  78 => 43,  74 => 42,  71 => 41,  66 => 40,  64 => 39,  26 => 4,  19 => 1,);
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
  <input class=\"c-gallery--search--form__searchbar\" type=\"text\" name=\"search\" class=\"form-control\">

  <button class=\"c-gallery--search--form__button\" type=\"submit\">{{ 'Search'|_ }}</button>
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

</form>
", "/Applications/MAMP/htdocs/cultuurfonds-boreel/plugins/pkleindienst/blogsearch/components/searchform/default.htm", "");
    }
}
