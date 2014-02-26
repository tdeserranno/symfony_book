<?php

/* AcmeStoreBundle:Default:show.html.twig */
class __TwigTemplate_89ab72407ce0c6d4ec9c3b68c5bfd12eb47afef59157358cc3fc685a93db2cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<ul>
    <li>name: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</li>
    <li>price: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
        echo "</li>
    <li>description: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
        echo "</li>
    <li>category: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
