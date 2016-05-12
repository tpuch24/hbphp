<?php

/* blog/form.html.twig */
class __TwigTemplate_af3f977a8d8dedd89118304cd31732c974b1627fd0d7bfce0a5dff7a54bd1a21 extends Twig_Template
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
        $__internal_0403afeb04d9c4b1ea6dfa46aacd87321abe2d79111df6a0bbde9230b593447e = $this->env->getExtension("native_profiler");
        $__internal_0403afeb04d9c4b1ea6dfa46aacd87321abe2d79111df6a0bbde9230b593447e->enter($__internal_0403afeb04d9c4b1ea6dfa46aacd87321abe2d79111df6a0bbde9230b593447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/form.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_0403afeb04d9c4b1ea6dfa46aacd87321abe2d79111df6a0bbde9230b593447e->leave($__internal_0403afeb04d9c4b1ea6dfa46aacd87321abe2d79111df6a0bbde9230b593447e_prof);

    }

    public function getTemplateName()
    {
        return "blog/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {{ form_start(form) }}*/
/* */
/* {{ form_widget(form) }}*/
/* */
/* {{ form_end(form) }}*/
/*     */
