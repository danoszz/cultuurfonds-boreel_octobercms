<?php

/* /Applications/MAMP/htdocs/boreel/themes/castus-f5fresh/layouts/styleguide/default.htm */
class __TwigTemplate_6401b6ccecdb10a6901e9a01aebb87ae35c73670e70afac9c2aeb232763d9ff4 extends Twig_Template
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
        echo "<!doctype html>
<!--[if lt IE 9]> <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,minimum-scale=1,user-scalable=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>

    <!-- Theming / tile colors -->
    <meta name=\"theme-color\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo "\">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <link rel=\"icon\" sizes=\"128x128\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/f5icon.png");
        echo "\">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo "\">
    <meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/f5icon.png");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/f5icon.png");
        echo "\">
    <link rel=\"canonical\" href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\">

    <script src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/detect.js");
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/foundation553.css");
        echo "?v=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/styleguide.css");
        echo "?v=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\">
    ";
        // line 32
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 33
        echo "</head>
<body>
    <main role=\"main\" class=\"scroll-container\">
        <div class=\"row\">
        ";
        // line 37
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 38
        echo "        </div>
    </main>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/foundation553.js");
        echo "?v=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/styleguide.js");
        echo "?v=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\"></script>
    ";
        // line 44
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 45
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/boreel/themes/castus-f5fresh/layouts/styleguide/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  123 => 44,  117 => 43,  111 => 42,  105 => 38,  103 => 37,  97 => 33,  94 => 32,  88 => 31,  81 => 29,  77 => 28,  72 => 26,  68 => 25,  63 => 23,  59 => 22,  55 => 21,  48 => 17,  41 => 13,  37 => 12,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 9]> <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,minimum-scale=1,user-scalable=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>{{ this.page.meta_title|default(this.page.title) }} | {{ this.theme.site_name }}</title>

    <!-- Theming / tile colors -->
    <meta name=\"theme-color\" content=\"{{ this.theme.brand_color }}\">
    <meta name=\"msapplication-TileColor\" content=\"{{ this.theme.brand_color }}\">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <link rel=\"icon\" sizes=\"128x128\" href=\"{{ 'assets/images/f5icon.png'|theme }}\">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"{{ this.theme.brand_color }}\">
    <meta name=\"apple-mobile-web-app-title\" content=\"{{ this.theme.site_name }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'assets/images/f5icon.png'|theme }}\">

    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/f5icon.png'|theme }}\">
    <link rel=\"canonical\" href=\"{{ ''|page }}\">

    <script src=\"{{ 'assets/js/detect.js'|theme }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/foundation553.css'|theme }}?v={{ this.theme.version }}\">
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/styleguide.css'|theme }}?v={{ this.theme.version }}\">
    {% styles %}
</head>
<body>
    <main role=\"main\" class=\"scroll-container\">
        <div class=\"row\">
        {% page %}
        </div>
    </main>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"{{ 'assets/js/foundation553.js'|theme }}?v={{ this.theme.version }}\"></script>
    <script src=\"{{ 'assets/js/styleguide.js'|theme }}?v={{ this.theme.version }}\"></script>
    {% scripts %}
</body>
</html>", "/Applications/MAMP/htdocs/boreel/themes/castus-f5fresh/layouts/styleguide/default.htm", "");
    }
}
