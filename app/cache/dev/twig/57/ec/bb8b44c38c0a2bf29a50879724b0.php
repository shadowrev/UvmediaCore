<?php

/* UvmediaCoreBundle::core.html.twig */
class __TwigTemplate_57ecbb8b44c38c0a2bf29a50879724b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_tags' => array($this, 'block_meta_tags'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 7
        echo "    <link href=\"";
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d3afdf6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d3afdf6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d3afdf6_part_1_jquery-1.8.1.min_1.js");
            // line 13
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
        // line 15
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "</head>
<body>
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 21
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

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("@UvmediaCoreBundle::css/jquery-ui-1.8.23.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    // line 20
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UvmediaCoreBundle::core.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  115 => 19,  112 => 18,  107 => 15,  100 => 10,  97 => 9,  91 => 5,  86 => 4,  79 => 21,  76 => 20,  74 => 18,  70 => 16,  67 => 15,  47 => 13,  42 => 12,  39 => 9,  35 => 7,  30 => 5,  28 => 4,  23 => 1,);
    }
}
