<?php

/* ::base.blog.html.twig */
class __TwigTemplate_477e8347a63d7174472c20ff795f5a6ed5e626bdb361473a972e08f69ba3a241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"sidebar\">
    ";
        // line 6
        $this->displayBlock('sidebar', $context, $blocks);
        // line 12
        echo "</div>
<div id=\"content\">
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "</div>
";
    }

    // line 6
    public function block_sidebar($context, array $blocks = array())
    {
        // line 7
        echo "    <ul>
        <li><a href=\"/symfony/web/app_dev.php\">Home</a></li>
        <li><a href=\"/symfony/web/app_dev.php/blog\">Blog</a></li>
    </ul>
    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::base.blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  60 => 14,  52 => 7,  49 => 6,  44 => 16,  42 => 14,  38 => 12,  36 => 6,  33 => 5,  30 => 4,);
    }
}
