<?php

/* blog/modify.html.twig */
class __TwigTemplate_c01425380ba1be095247ae90aa2811323d858b7c3d0e17607bced14fcebc4889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/modify.html.twig", 1);
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
        $__internal_3ece08f90fb0386f6cd12432fef8fa20ed1cd68d6ccb2a5b81fcbe587dcdb73e = $this->env->getExtension("native_profiler");
        $__internal_3ece08f90fb0386f6cd12432fef8fa20ed1cd68d6ccb2a5b81fcbe587dcdb73e->enter($__internal_3ece08f90fb0386f6cd12432fef8fa20ed1cd68d6ccb2a5b81fcbe587dcdb73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ece08f90fb0386f6cd12432fef8fa20ed1cd68d6ccb2a5b81fcbe587dcdb73e->leave($__internal_3ece08f90fb0386f6cd12432fef8fa20ed1cd68d6ccb2a5b81fcbe587dcdb73e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9ce34268b267e765ce055e82a35e3d60bb9070ddad14bcd68c335b4d8e93d66 = $this->env->getExtension("native_profiler");
        $__internal_f9ce34268b267e765ce055e82a35e3d60bb9070ddad14bcd68c335b4d8e93d66->enter($__internal_f9ce34268b267e765ce055e82a35e3d60bb9070ddad14bcd68c335b4d8e93d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modifier - ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
        
        $__internal_f9ce34268b267e765ce055e82a35e3d60bb9070ddad14bcd68c335b4d8e93d66->leave($__internal_f9ce34268b267e765ce055e82a35e3d60bb9070ddad14bcd68c335b4d8e93d66_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfda8737ecca53109e39e7ee65f12cc9ef72b3a54544be171624c44b17ced7ca = $this->env->getExtension("native_profiler");
        $__internal_bfda8737ecca53109e39e7ee65f12cc9ef72b3a54544be171624c44b17ced7ca->enter($__internal_bfda8737ecca53109e39e7ee65f12cc9ef72b3a54544be171624c44b17ced7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Modifier article Id= ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h2>
    ";
        // line 7
        $this->loadTemplate("blog/form.html.twig", "blog/modify.html.twig", 7)->display($context);
        
        $__internal_bfda8737ecca53109e39e7ee65f12cc9ef72b3a54544be171624c44b17ced7ca->leave($__internal_bfda8737ecca53109e39e7ee65f12cc9ef72b3a54544be171624c44b17ced7ca_prof);

    }

    public function getTemplateName()
    {
        return "blog/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  57 => 6,  51 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Modifier - {{id}} {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2>Modifier article Id= {{id}}</h2>*/
/*     {% include "blog/form.html.twig" %}*/
/* {% endblock %}*/
/* */
