<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPost/news-post_header.htm */
class __TwigTemplate_228f0a5594f38c3ff2b941b4804c52f2befd3ec8bf59a0dfde544a5ba0e85081 extends Twig_Template
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
        echo "<div class=\"main-content--hero main-content--hero__post\">
  <a class=\"hero__post--button o-button o-button--medium o-button--medium__outline-light\" href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("nieuws");
        echo "\">
    Ga naar nieuwsoverzicht
    <span>
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
      <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
        <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
      </g>
    </svg>
   </span>
  </a>
  <div class=\"hero__post--navigation\">
    <a class=\"hero__post--navigation--button o-button o-button--icon o-button--icon__outline-light\" href=\"";
        // line 13
        $context["lastPost"] = $this->getAttribute(($context["newsPost"] ?? null), "previousPost", array());
        echo "\">
      <span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
        <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
        </g>
      </svg>
     </span>
    </a>
    <a class=\"hero__post--navigation--button o-button o-button--icon o-button--icon__outline-light\" href=\"";
        // line 22
        $context["nextPost"] = $this->getAttribute(($context["newsPost"] ?? null), "nextPost", array());
        echo "\">
      <span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
        <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
        </g>
      </svg>
     </span>
    </a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPost/news-post_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  36 => 13,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"main-content--hero main-content--hero__post\">
  <a class=\"hero__post--button o-button o-button--medium o-button--medium__outline-light\" href=\"{{ 'nieuws'|page }}\">
    Ga naar nieuwsoverzicht
    <span>
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
      <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
        <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
      </g>
    </svg>
   </span>
  </a>
  <div class=\"hero__post--navigation\">
    <a class=\"hero__post--navigation--button o-button o-button--icon o-button--icon__outline-light\" href=\"{% set lastPost = newsPost.previousPost %}\">
      <span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
        <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
        </g>
      </svg>
     </span>
    </a>
    <a class=\"hero__post--navigation--button o-button o-button--icon o-button--icon__outline-light\" href=\"{% set nextPost = newsPost.nextPost %}\">
      <span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 14\">
        <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <path d=\"M1.48 7h14.4042l-5.6375 5.8707M1.48 6.8707h14.4042L10.2467 1\"/>
        </g>
      </svg>
     </span>
    </a>
  </div>
</div>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/partials/newsPost/news-post_header.htm", "");
    }
}
