<?php

/* blog/supprimer.html.twig */
class __TwigTemplate_78f1ec3eefcfe7fa561bc48b35bf04fc33e98b5a8a5f18bede8f495f90588bd1 extends Twig_Template
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
        $__internal_d5619a0380bcef7268fe9c39de3217162bb54c67e5a902daceee2bdf5fce2e99 = $this->env->getExtension("native_profiler");
        $__internal_d5619a0380bcef7268fe9c39de3217162bb54c67e5a902daceee2bdf5fce2e99->enter($__internal_d5619a0380bcef7268fe9c39de3217162bb54c67e5a902daceee2bdf5fce2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/supprimer.html.twig"));

        // line 2
        echo "<h1>
    Supprimer article Id= ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
</h1>
</body>";
        
        $__internal_d5619a0380bcef7268fe9c39de3217162bb54c67e5a902daceee2bdf5fce2e99->leave($__internal_d5619a0380bcef7268fe9c39de3217162bb54c67e5a902daceee2bdf5fce2e99_prof);

    }

    public function getTemplateName()
    {
        return "blog/supprimer.html.twig";
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
/* <h1>*/
/*     Supprimer article Id= {{id}}*/
/* </h1>*/
/* </body>*/
