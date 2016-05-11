<?php

/* blog/delete.html.twig */
class __TwigTemplate_ab27f696e8947b6ec81144a50d24b8fa4dc5a0100e7be1d483786b2cbdafd3fa extends Twig_Template
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
        $__internal_5cc0688bb42e7d09a08ea60dcd1ef7a44f3e3728c93217df41f8ab9461f39b98 = $this->env->getExtension("native_profiler");
        $__internal_5cc0688bb42e7d09a08ea60dcd1ef7a44f3e3728c93217df41f8ab9461f39b98->enter($__internal_5cc0688bb42e7d09a08ea60dcd1ef7a44f3e3728c93217df41f8ab9461f39b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/delete.html.twig"));

        // line 2
        echo "<h1>
    Supprimer article Id= ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
</h1>
</body>";
        
        $__internal_5cc0688bb42e7d09a08ea60dcd1ef7a44f3e3728c93217df41f8ab9461f39b98->leave($__internal_5cc0688bb42e7d09a08ea60dcd1ef7a44f3e3728c93217df41f8ab9461f39b98_prof);

    }

    public function getTemplateName()
    {
        return "blog/delete.html.twig";
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
