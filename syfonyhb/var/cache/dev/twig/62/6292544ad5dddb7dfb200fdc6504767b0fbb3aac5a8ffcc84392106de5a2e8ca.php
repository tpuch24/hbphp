<?php

/* blog/modifier.html.twig */
class __TwigTemplate_29f39aa553af75ec9258202b9bbedfeea5d5a88299b86b07e0137a0ee4623fd0 extends Twig_Template
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
        $__internal_db6b152271d1fa570bd34128c5c92d09bcb3638490130f6118669a7e74959436 = $this->env->getExtension("native_profiler");
        $__internal_db6b152271d1fa570bd34128c5c92d09bcb3638490130f6118669a7e74959436->enter($__internal_db6b152271d1fa570bd34128c5c92d09bcb3638490130f6118669a7e74959436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        // line 2
        echo "<h1>
    Modifier article Id= ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
</h1>
</body>";
        
        $__internal_db6b152271d1fa570bd34128c5c92d09bcb3638490130f6118669a7e74959436->leave($__internal_db6b152271d1fa570bd34128c5c92d09bcb3638490130f6118669a7e74959436_prof);

    }

    public function getTemplateName()
    {
        return "blog/modifier.html.twig";
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
/*     Modifier article Id= {{id}}*/
/* </h1>*/
/* </body>*/
