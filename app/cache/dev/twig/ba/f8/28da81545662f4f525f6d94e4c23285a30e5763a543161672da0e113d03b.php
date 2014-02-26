<?php

/* base.bookshop.navigation.html.twig */
class __TwigTemplate_baf828da81545662f4f525f6d94e4c23285a30e5763a543161672da0e113d03b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
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
        echo "<nav id=\"navigation\">
    ";
        // line 6
        $this->displayBlock('navigation', $context, $blocks);
        // line 12
        echo "</nav>
<div id=\"content\">
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "</div>
";
    }

    // line 6
    public function block_navigation($context, array $blocks = array())
    {
        // line 7
        echo "    <ul>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("bookshop_homepage");
        echo "\">Home</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("bookshop_booklist");
        echo "\">Books</a></li>
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
        return "base.bookshop.navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 14,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  44 => 16,  42 => 14,  38 => 12,  36 => 6,  33 => 5,  30 => 4,  31 => 4,  28 => 3,);
    }
}
