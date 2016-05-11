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
        $__internal_094b4a32542ad3e7390086816bb425e8d8bb2411f0df64f08d1f68ab74aec94a = $this->env->getExtension("native_profiler");
        $__internal_094b4a32542ad3e7390086816bb425e8d8bb2411f0df64f08d1f68ab74aec94a->enter($__internal_094b4a32542ad3e7390086816bb425e8d8bb2411f0df64f08d1f68ab74aec94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094b4a32542ad3e7390086816bb425e8d8bb2411f0df64f08d1f68ab74aec94a->leave($__internal_094b4a32542ad3e7390086816bb425e8d8bb2411f0df64f08d1f68ab74aec94a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aca0e79c43df5b29798ab2ade583d692ecf10872db041a9537745ef43542e3c = $this->env->getExtension("native_profiler");
        $__internal_8aca0e79c43df5b29798ab2ade583d692ecf10872db041a9537745ef43542e3c->enter($__internal_8aca0e79c43df5b29798ab2ade583d692ecf10872db041a9537745ef43542e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout ";
        
        $__internal_8aca0e79c43df5b29798ab2ade583d692ecf10872db041a9537745ef43542e3c->leave($__internal_8aca0e79c43df5b29798ab2ade583d692ecf10872db041a9537745ef43542e3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49b6d72221546a1f4dd5c2cefd9060c0a98bc9aaf4aa1048aeec34f4573d2401 = $this->env->getExtension("native_profiler");
        $__internal_49b6d72221546a1f4dd5c2cefd9060c0a98bc9aaf4aa1048aeec34f4573d2401->enter($__internal_49b6d72221546a1f4dd5c2cefd9060c0a98bc9aaf4aa1048aeec34f4573d2401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Ajout d'article</h2>
    ";
        // line 7
        $this->loadTemplate("blog/form.html.twig", "blog/add.html.twig", 7)->display($context);
        if ($this->env->isDebug()) {
            // line 8
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        }
        
        $__internal_49b6d72221546a1f4dd5c2cefd9060c0a98bc9aaf4aa1048aeec34f4573d2401->leave($__internal_49b6d72221546a1f4dd5c2cefd9060c0a98bc9aaf4aa1048aeec34f4573d2401_prof);

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
        return array (  61 => 8,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Ajout {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2>Ajout d'article</h2>*/
/*     {% include "blog/form.html.twig" %}*/
/* {% dump(article) %}*/
/* {% endblock %}*/
