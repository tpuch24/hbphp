<?php

/* blog/formcomment.html.twig */
class __TwigTemplate_f6feb9529f989b6c7554079582d0f9311481a1091c78fd049f3c8e4d375ce13a extends Twig_Template
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
        $__internal_9bb65177eb6f1b3174ced74c174045fe8f09f8379476cd55261f9c9e23568f25 = $this->env->getExtension("native_profiler");
        $__internal_9bb65177eb6f1b3174ced74c174045fe8f09f8379476cd55261f9c9e23568f25->enter($__internal_9bb65177eb6f1b3174ced74c174045fe8f09f8379476cd55261f9c9e23568f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formcomment.html.twig"));

        // line 2
        echo "<h4>
    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</h4>";
        
        $__internal_9bb65177eb6f1b3174ced74c174045fe8f09f8379476cd55261f9c9e23568f25->leave($__internal_9bb65177eb6f1b3174ced74c174045fe8f09f8379476cd55261f9c9e23568f25_prof);

    }

    public function getTemplateName()
    {
        return "blog/formcomment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h4>*/
/*     {{form(form)}}*/
/* </h4>*/
