<?php

/* /Applications/MAMP/htdocs/boreel/themes/cultuurfonds-boreel/layouts/default.htm */
class __TwigTemplate_b630245a6d08ba2f37c28ff53669f29028d30b82294e36ace2ac35d82cde7513 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>October CMS - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
  <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\"> ";
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "</head>

<body>

  <!-- Header -->
  <header id=\"layout-header\">
    ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "  </header>

  <!-- Content -->
  <section id=\"layout-content\">
    ";
        // line 26
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 27
        echo "  </section>

  <!-- Footer -->
  <footer id=\"layout-footer\">
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "  </footer>

  <!-- Scripts -->
  <script src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
  <script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
  <script src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
  ";
        // line 38
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        echo " ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 39
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/boreel/themes/cultuurfonds-boreel/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  84 => 32,  80 => 31,  74 => 27,  72 => 26,  66 => 22,  62 => 21,  54 => 15,  49 => 14,  45 => 13,  41 => 12,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>October CMS - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
  <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\"> {% styles %}
</head>

<body>

  <!-- Header -->
  <header id=\"layout-header\">
    {% partial 'site/header' %}
  </header>

  <!-- Content -->
  <section id=\"layout-content\">
    {% page %}
  </section>

  <!-- Footer -->
  <footer id=\"layout-footer\">
    {% partial 'site/footer' %}
  </footer>

  <!-- Scripts -->
  <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
  <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
  <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
  {% framework extras %} {% scripts %}

</body>

</html>", "/Applications/MAMP/htdocs/boreel/themes/cultuurfonds-boreel/layouts/default.htm", "");
    }
}
