<?php

/* ThierryCatalogueBundle:cat:/formnote.html.twig */
class __TwigTemplate_f90535beb77cff04e6d14698b511b9cc7d285c22c9602735218a45902a3df73e extends Twig_Template
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
        $__internal_e6d18c07344cb3aee358cb652d991ffa71d3c67bf769fb9c0827a5093324c4cb = $this->env->getExtension("native_profiler");
        $__internal_e6d18c07344cb3aee358cb652d991ffa71d3c67bf769fb9c0827a5093324c4cb->enter($__internal_e6d18c07344cb3aee358cb652d991ffa71d3c67bf769fb9c0827a5093324c4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:/formnote.html.twig"));

        // line 2
        echo "<h4>
    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</h4>";
        
        $__internal_e6d18c07344cb3aee358cb652d991ffa71d3c67bf769fb9c0827a5093324c4cb->leave($__internal_e6d18c07344cb3aee358cb652d991ffa71d3c67bf769fb9c0827a5093324c4cb_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:/formnote.html.twig";
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
