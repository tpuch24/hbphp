<?php

/* blog/layout.html.twig */
class __TwigTemplate_6c4a0c7f0aa94e4a61b0381ef9839e68a9ab8bc9c74fbc6782fb8b7635827996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'layout' => array($this, 'block_layout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b582ee6f6fc3413c7693d23208d6991531e0d97712c58857ee75812c233f2cdd = $this->env->getExtension("native_profiler");
        $__internal_b582ee6f6fc3413c7693d23208d6991531e0d97712c58857ee75812c233f2cdd->enter($__internal_b582ee6f6fc3413c7693d23208d6991531e0d97712c58857ee75812c233f2cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b582ee6f6fc3413c7693d23208d6991531e0d97712c58857ee75812c233f2cdd->leave($__internal_b582ee6f6fc3413c7693d23208d6991531e0d97712c58857ee75812c233f2cdd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56d8083ac8dbac44432e8a7e70edd189a9d7a0b3190e3935160228154072ecd9 = $this->env->getExtension("native_profiler");
        $__internal_56d8083ac8dbac44432e8a7e70edd189a9d7a0b3190e3935160228154072ecd9->enter($__internal_56d8083ac8dbac44432e8a7e70edd189a9d7a0b3190e3935160228154072ecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Blog ";
        
        $__internal_56d8083ac8dbac44432e8a7e70edd189a9d7a0b3190e3935160228154072ecd9->leave($__internal_56d8083ac8dbac44432e8a7e70edd189a9d7a0b3190e3935160228154072ecd9_prof);

    }

    // line 4
    public function block_layout($context, array $blocks = array())
    {
        $__internal_f0974e306097631c2e692fb186f6b681632b47a406d08dad552a68128cda1447 = $this->env->getExtension("native_profiler");
        $__internal_f0974e306097631c2e692fb186f6b681632b47a406d08dad552a68128cda1447->enter($__internal_f0974e306097631c2e692fb186f6b681632b47a406d08dad552a68128cda1447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 5
        echo "    <h1> Blog </h1>
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f0974e306097631c2e692fb186f6b681632b47a406d08dad552a68128cda1447->leave($__internal_f0974e306097631c2e692fb186f6b681632b47a406d08dad552a68128cda1447_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_41b2a4d587a99c57a673b49c6ddec229410452c842069445ee655a09ad3ed5ea = $this->env->getExtension("native_profiler");
        $__internal_41b2a4d587a99c57a673b49c6ddec229410452c842069445ee655a09ad3ed5ea->enter($__internal_41b2a4d587a99c57a673b49c6ddec229410452c842069445ee655a09ad3ed5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41b2a4d587a99c57a673b49c6ddec229410452c842069445ee655a09ad3ed5ea->leave($__internal_41b2a4d587a99c57a673b49c6ddec229410452c842069445ee655a09ad3ed5ea_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  56 => 5,  50 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Blog {% endblock %}*/
/* {% block layout %}*/
/*     <h1> Blog </h1>*/
/*     {% block body %}{% endblock %}*/
/* {% endblock %}*/
/* */
