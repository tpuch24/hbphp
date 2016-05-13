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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df1ab39c9d7164ff584ee17c9a9e8bef7813908aa8306193ec87434122e0d566 = $this->env->getExtension("native_profiler");
        $__internal_df1ab39c9d7164ff584ee17c9a9e8bef7813908aa8306193ec87434122e0d566->enter($__internal_df1ab39c9d7164ff584ee17c9a9e8bef7813908aa8306193ec87434122e0d566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df1ab39c9d7164ff584ee17c9a9e8bef7813908aa8306193ec87434122e0d566->leave($__internal_df1ab39c9d7164ff584ee17c9a9e8bef7813908aa8306193ec87434122e0d566_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fddfa11053900f77dadd39989f54949951e11ec42a49619d4e74e18bb6639b8 = $this->env->getExtension("native_profiler");
        $__internal_9fddfa11053900f77dadd39989f54949951e11ec42a49619d4e74e18bb6639b8->enter($__internal_9fddfa11053900f77dadd39989f54949951e11ec42a49619d4e74e18bb6639b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modifier - ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
        
        $__internal_9fddfa11053900f77dadd39989f54949951e11ec42a49619d4e74e18bb6639b8->leave($__internal_9fddfa11053900f77dadd39989f54949951e11ec42a49619d4e74e18bb6639b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_412f9176cb43791d3e7e9bd7c7e33645ccc419b3ce54f9ccaf57f8435c8cbb75 = $this->env->getExtension("native_profiler");
        $__internal_412f9176cb43791d3e7e9bd7c7e33645ccc419b3ce54f9ccaf57f8435c8cbb75->enter($__internal_412f9176cb43791d3e7e9bd7c7e33645ccc419b3ce54f9ccaf57f8435c8cbb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Modifier article Id= ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h2>
    ";
        // line 7
        $this->loadTemplate("blog/form.html.twig", "blog/modify.html.twig", 7)->display($context);
        
        $__internal_412f9176cb43791d3e7e9bd7c7e33645ccc419b3ce54f9ccaf57f8435c8cbb75->leave($__internal_412f9176cb43791d3e7e9bd7c7e33645ccc419b3ce54f9ccaf57f8435c8cbb75_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39b89c419cc72fb8b8e7906224270e1aeccf244f467597a193b617d0eba94b1e = $this->env->getExtension("native_profiler");
        $__internal_39b89c419cc72fb8b8e7906224270e1aeccf244f467597a193b617d0eba94b1e->enter($__internal_39b89c419cc72fb8b8e7906224270e1aeccf244f467597a193b617d0eba94b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/standard/ckeditor.js\"></script>
";
        
        $__internal_39b89c419cc72fb8b8e7906224270e1aeccf244f467597a193b617d0eba94b1e->leave($__internal_39b89c419cc72fb8b8e7906224270e1aeccf244f467597a193b617d0eba94b1e_prof);

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
        return array (  76 => 11,  70 => 10,  63 => 7,  58 => 6,  52 => 5,  36 => 3,  11 => 1,);
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
/* {% block javascripts %}*/
/* <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>*/
/* {% endblock %}*/
