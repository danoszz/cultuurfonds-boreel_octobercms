<?php

/* /Applications/MAMP/htdocs/boreel/themes/castus-f5fresh/pages/f5fresh.htm */
class __TwigTemplate_489ea5d354558f2d25f319c708a9cd3d2f24a8fe8d372aff7e5ed160ae7589fb extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <style>
     .home {
         background-color: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo ";
     }
     .splash {
         width: 100%;
         text-align: center;
     }
     h1 img {
         vertical-align: middle;
     }
    </style>
</head>
<body class=\"home\">
<div class=\"splash\">
    <h1><img src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/f5icon.png");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo ", <small>refer to:
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("styleguide/foundation5");
        echo "\">Style guide</a></small></h1>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/boreel/themes/castus-f5fresh/pages/f5fresh.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  47 => 21,  31 => 8,  25 => 5,  19 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ this.page.title }}</title>
    <style>
     .home {
         background-color: {{ this.theme.brand_color }};
     }
     .splash {
         width: 100%;
         text-align: center;
     }
     h1 img {
         vertical-align: middle;
     }
    </style>
</head>
<body class=\"home\">
<div class=\"splash\">
    <h1><img src=\"{{ 'assets/images/f5icon.png'|theme }}\"> {{ this.page.title }}, <small>refer to:
    <a href=\"{{ 'styleguide/foundation5'|page }}\">Style guide</a></small></h1>
</div>
</body>
</html>", "/Applications/MAMP/htdocs/boreel/themes/castus-f5fresh/pages/f5fresh.htm", "");
    }
}
