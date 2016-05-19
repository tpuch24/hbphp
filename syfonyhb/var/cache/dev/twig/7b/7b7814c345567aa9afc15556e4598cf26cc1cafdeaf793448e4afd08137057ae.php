<?php

/* ThierryCatalogueBundle:cat:modify.html.twig */
class __TwigTemplate_19f741abae01792e0009c3de514405f0e77a85c3af439e913b47dac43286edab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ThierryCatalogueBundle:cat:layout.html.twig", "ThierryCatalogueBundle:cat:modify.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThierryCatalogueBundle:cat:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc3e87bab77e905717611dcb39b843a4709991346187a9a24520d242c2e291b6 = $this->env->getExtension("native_profiler");
        $__internal_dc3e87bab77e905717611dcb39b843a4709991346187a9a24520d242c2e291b6->enter($__internal_dc3e87bab77e905717611dcb39b843a4709991346187a9a24520d242c2e291b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3e87bab77e905717611dcb39b843a4709991346187a9a24520d242c2e291b6->leave($__internal_dc3e87bab77e905717611dcb39b843a4709991346187a9a24520d242c2e291b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e64a84cc34171a95322b13dfb201dc06c4715fbffdb71db12b45de24c92c2b = $this->env->getExtension("native_profiler");
        $__internal_87e64a84cc34171a95322b13dfb201dc06c4715fbffdb71db12b45de24c92c2b->enter($__internal_87e64a84cc34171a95322b13dfb201dc06c4715fbffdb71db12b45de24c92c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modifier - ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
        
        $__internal_87e64a84cc34171a95322b13dfb201dc06c4715fbffdb71db12b45de24c92c2b->leave($__internal_87e64a84cc34171a95322b13dfb201dc06c4715fbffdb71db12b45de24c92c2b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65c35c1276c888e441cbfbc0fbf41a231f99654720d4051f3f2e53c05f73cdc0 = $this->env->getExtension("native_profiler");
        $__internal_65c35c1276c888e441cbfbc0fbf41a231f99654720d4051f3f2e53c05f73cdc0->enter($__internal_65c35c1276c888e441cbfbc0fbf41a231f99654720d4051f3f2e53c05f73cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Modifier article Id= ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h2>
    ";
        // line 7
        $this->loadTemplate("ThierryCatalogueBundle:cat:form.html.twig", "ThierryCatalogueBundle:cat:modify.html.twig", 7)->display($context);
        
        $__internal_65c35c1276c888e441cbfbc0fbf41a231f99654720d4051f3f2e53c05f73cdc0->leave($__internal_65c35c1276c888e441cbfbc0fbf41a231f99654720d4051f3f2e53c05f73cdc0_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15b315322d5398ecda2a3a8c40481f8ec981eacdc0d80edb6f273312c592630c = $this->env->getExtension("native_profiler");
        $__internal_15b315322d5398ecda2a3a8c40481f8ec981eacdc0d80edb6f273312c592630c->enter($__internal_15b315322d5398ecda2a3a8c40481f8ec981eacdc0d80edb6f273312c592630c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/standard/ckeditor.js\"></script>
";
        
        $__internal_15b315322d5398ecda2a3a8c40481f8ec981eacdc0d80edb6f273312c592630c->leave($__internal_15b315322d5398ecda2a3a8c40481f8ec981eacdc0d80edb6f273312c592630c_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  70 => 10,  63 => 7,  58 => 6,  52 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "ThierryCatalogueBundle:cat:layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Modifier - {{id}} {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2>Modifier article Id= {{id}}</h2>*/
/*     {% include "ThierryCatalogueBundle:cat:form.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>*/
/* {% endblock %}*/
