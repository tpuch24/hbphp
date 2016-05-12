<?php

/* blog/add.html.twig */
class __TwigTemplate_782615a531c952dc3f88da340482c7ce230a46aebd389d5f2b6ad3656c7fb8d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c422f1d87a2193f429dd037aeb7d1c51e4eaf4740126d7f0a4390caa3000abe = $this->env->getExtension("native_profiler");
        $__internal_5c422f1d87a2193f429dd037aeb7d1c51e4eaf4740126d7f0a4390caa3000abe->enter($__internal_5c422f1d87a2193f429dd037aeb7d1c51e4eaf4740126d7f0a4390caa3000abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c422f1d87a2193f429dd037aeb7d1c51e4eaf4740126d7f0a4390caa3000abe->leave($__internal_5c422f1d87a2193f429dd037aeb7d1c51e4eaf4740126d7f0a4390caa3000abe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53a1d2f9fe5e8c530602cd79fe42880fbfaae7b1c41ba9c6bc08de8bffdea46a = $this->env->getExtension("native_profiler");
        $__internal_53a1d2f9fe5e8c530602cd79fe42880fbfaae7b1c41ba9c6bc08de8bffdea46a->enter($__internal_53a1d2f9fe5e8c530602cd79fe42880fbfaae7b1c41ba9c6bc08de8bffdea46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout ";
        
        $__internal_53a1d2f9fe5e8c530602cd79fe42880fbfaae7b1c41ba9c6bc08de8bffdea46a->leave($__internal_53a1d2f9fe5e8c530602cd79fe42880fbfaae7b1c41ba9c6bc08de8bffdea46a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aefac9287590e45c938d203ea8d8b6440ea85d7c20eda4da684b4ce53b5653c6 = $this->env->getExtension("native_profiler");
        $__internal_aefac9287590e45c938d203ea8d8b6440ea85d7c20eda4da684b4ce53b5653c6->enter($__internal_aefac9287590e45c938d203ea8d8b6440ea85d7c20eda4da684b4ce53b5653c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Ajout d'article</h2>
    ";
        // line 7
        $this->loadTemplate("blog/form.html.twig", "blog/add.html.twig", 7)->display($context);
        
        $__internal_aefac9287590e45c938d203ea8d8b6440ea85d7c20eda4da684b4ce53b5653c6->leave($__internal_aefac9287590e45c938d203ea8d8b6440ea85d7c20eda4da684b4ce53b5653c6_prof);

    }

    public function getTemplateName()
    {
        return "blog/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Ajout {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2>Ajout d'article</h2>*/
/*     {% include "blog/form.html.twig" %}*/
/* {% endblock %}*/
