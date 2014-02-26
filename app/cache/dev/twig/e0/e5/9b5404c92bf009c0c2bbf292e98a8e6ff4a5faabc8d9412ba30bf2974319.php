<?php

/* AcmeTodoBundle:Form:fields.html.twig */
class __TwigTemplate_e0e59b5404c92bf009c0c2bbf292e98a8e6ff4a5faabc8d9412ba30bf2974319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "<div class=\"form_row\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AcmeTodoBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  26 => 3,  20 => 2,  103 => 52,  101 => 51,  98 => 50,  95 => 49,  90 => 46,  85 => 44,  78 => 40,  70 => 35,  66 => 34,  62 => 33,  57 => 30,  54 => 29,  49 => 27,  46 => 26,  40 => 22,  36 => 21,  33 => 20,  31 => 5,  28 => 4,  25 => 13,  22 => 5,  19 => 3,);
    }
}
