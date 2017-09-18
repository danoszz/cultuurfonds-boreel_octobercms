<?php

/* /Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/layouts/default.htm */
class __TwigTemplate_ad84972374b7ef52600192e39bd449dcb2b69b9321c5cdd268c7fbbb482882c1 extends Twig_Template
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
  <link href=\"https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Libre+Baskerville:700\" rel=\"stylesheet\">

  <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/build/styles/styles.css");
        echo "\" rel=\"stylesheet\"> ";
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
        echo "</head>

<body>
  <!-- <div class=\"grid grid__vertical\"></div> -->
  <div class=\"grid--container\">
    <header class=\"header\">
      ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "    </header>
    <main class=\"main-content\">
      ";
        // line 25
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 26
        echo "    </main>
    <aside class=\"sidebar\">
      ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </aside>
    <footer class=\"footer\">
      ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    </footer>
  </div>
  <div class=\"toggle--menu\">
    <p>menu</p>
  </div>

  <!-- Scripts -->
  <script src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/build/vendors/jquery.js");
        echo "\"></script>
  <script src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/build/scripts/app.js");
        echo "\"></script>
  ";
        // line 41
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        echo " ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 42
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  103 => 41,  99 => 40,  95 => 39,  86 => 32,  82 => 31,  78 => 29,  74 => 28,  70 => 26,  68 => 25,  64 => 23,  60 => 22,  52 => 16,  47 => 15,  41 => 12,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
  <link href=\"https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Libre+Baskerville:700\" rel=\"stylesheet\">

  <link href=\"{{ 'assets/build/styles/styles.css'|theme }}\" rel=\"stylesheet\"> {% styles %}
</head>

<body>
  <!-- <div class=\"grid grid__vertical\"></div> -->
  <div class=\"grid--container\">
    <header class=\"header\">
      {% partial 'site/header' %}
    </header>
    <main class=\"main-content\">
      {% page %}
    </main>
    <aside class=\"sidebar\">
      {% partial 'site/sidebar' %}
    </aside>
    <footer class=\"footer\">
      {% partial 'site/footer' %}
    </footer>
  </div>
  <div class=\"toggle--menu\">
    <p>menu</p>
  </div>

  <!-- Scripts -->
  <script src=\"{{ 'assets/build/vendors/jquery.js'|theme }}\"></script>
  <script src=\"{{ 'assets/build/scripts/app.js'|theme }}\"></script>
  {% framework extras %} {% scripts %}

</body>

</html>", "/Applications/MAMP/htdocs/cultuurfonds-boreel/themes/cultuurfonds-boreel/layouts/default.htm", "");
    }
}
