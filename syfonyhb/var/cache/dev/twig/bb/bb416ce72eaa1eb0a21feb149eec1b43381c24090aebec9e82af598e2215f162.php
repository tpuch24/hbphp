<?php

/* blog/formcomment.html.twig */
class __TwigTemplate_7752a54f32d2753be27aeca024cfc3e03bf02c2137cbb05fa8859d4a92d98012 extends Twig_Template
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
        $__internal_e27ebfe4ad5d080b85e23e6e6d0d3ebf04c466c42ccf62f1a2395f565975a532 = $this->env->getExtension("native_profiler");
        $__internal_e27ebfe4ad5d080b85e23e6e6d0d3ebf04c466c42ccf62f1a2395f565975a532->enter($__internal_e27ebfe4ad5d080b85e23e6e6d0d3ebf04c466c42ccf62f1a2395f565975a532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formcomment.html.twig"));

        // line 2
        echo "<h4>
    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</h4>";
        
        $__internal_e27ebfe4ad5d080b85e23e6e6d0d3ebf04c466c42ccf62f1a2395f565975a532->leave($__internal_e27ebfe4ad5d080b85e23e6e6d0d3ebf04c466c42ccf62f1a2395f565975a532_prof);

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
