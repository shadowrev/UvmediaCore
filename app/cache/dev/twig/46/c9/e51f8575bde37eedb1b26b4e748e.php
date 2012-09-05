<?php

/* UvmediaCoreBundle:Default:core.html.twig */
class __TwigTemplate_46c9e51f8575bde37eedb1b26b4e748e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_tags' => array($this, 'block_meta_tags'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 5
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "92a468f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_92a468f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/92a468f_part_1_jquery-ui-1.8.23.custom_1.css");
            // line 7
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        } else {
            // asset "92a468f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_92a468f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/92a468f.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d3afdf6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d3afdf6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d3afdf6_part_1_jquery-1.8.1.min_1.js");
            // line 10
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
            // asset "d3afdf6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d3afdf6_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d3afdf6_part_1_jquery-ui-1.8.23.custom.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "d3afdf6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d3afdf6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d3afdf6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "</head>
<body>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 18
        echo "</body>
</html>

";
    }

    // line 4
    public function block_meta_tags($context, array $blocks = array())
    {
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Universidad del Valle";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UvmediaCoreBundle:Default:core.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 17,  112 => 15,  101 => 5,  45 => 12,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 13,  60 => 16,  52 => 9,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 6,  92 => 20,  86 => 17,  79 => 40,  19 => 2,  42 => 11,  40 => 10,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  24 => 3,  22 => 1,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 16,  107 => 12,  99 => 34,  96 => 4,  91 => 33,  82 => 27,  77 => 12,  75 => 24,  57 => 10,  50 => 13,  46 => 10,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 18,  87 => 32,  84 => 15,  81 => 26,  73 => 21,  70 => 26,  67 => 11,  62 => 10,  59 => 23,  55 => 14,  51 => 5,  48 => 10,  41 => 9,  38 => 7,  35 => 7,  31 => 6,  28 => 3,);
    }
}
