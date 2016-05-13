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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0da0fb1d2b140431ee0011bbc028f7501b04899019fe1ff9573b401cd88296b4 = $this->env->getExtension("native_profiler");
        $__internal_0da0fb1d2b140431ee0011bbc028f7501b04899019fe1ff9573b401cd88296b4->enter($__internal_0da0fb1d2b140431ee0011bbc028f7501b04899019fe1ff9573b401cd88296b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da0fb1d2b140431ee0011bbc028f7501b04899019fe1ff9573b401cd88296b4->leave($__internal_0da0fb1d2b140431ee0011bbc028f7501b04899019fe1ff9573b401cd88296b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ba92331a1ca9cbdac9cf8bae4d46a58c8f393363891d935da492d85e54dc4a = $this->env->getExtension("native_profiler");
        $__internal_a7ba92331a1ca9cbdac9cf8bae4d46a58c8f393363891d935da492d85e54dc4a->enter($__internal_a7ba92331a1ca9cbdac9cf8bae4d46a58c8f393363891d935da492d85e54dc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout ";
        
        $__internal_a7ba92331a1ca9cbdac9cf8bae4d46a58c8f393363891d935da492d85e54dc4a->leave($__internal_a7ba92331a1ca9cbdac9cf8bae4d46a58c8f393363891d935da492d85e54dc4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1bebb2f817b438bc711fd7485ffcddbbd95a8b9faeaaa630577641c309f6a63 = $this->env->getExtension("native_profiler");
        $__internal_c1bebb2f817b438bc711fd7485ffcddbbd95a8b9faeaaa630577641c309f6a63->enter($__internal_c1bebb2f817b438bc711fd7485ffcddbbd95a8b9faeaaa630577641c309f6a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <p class=\"alert alert-danger\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <h2>Ajout d'article</h2>
    ";
        // line 10
        $this->loadTemplate("blog/form.html.twig", "blog/add.html.twig", 10)->display($context);
        
        $__internal_c1bebb2f817b438bc711fd7485ffcddbbd95a8b9faeaaa630577641c309f6a63->leave($__internal_c1bebb2f817b438bc711fd7485ffcddbbd95a8b9faeaaa630577641c309f6a63_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6511b6dced324939caa845fe0cb70322cecb229618062ac0b281a789813e69a5 = $this->env->getExtension("native_profiler");
        $__internal_6511b6dced324939caa845fe0cb70322cecb229618062ac0b281a789813e69a5->enter($__internal_6511b6dced324939caa845fe0cb70322cecb229618062ac0b281a789813e69a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/standard/ckeditor.js\"></script>
";
        
        $__internal_6511b6dced324939caa845fe0cb70322cecb229618062ac0b281a789813e69a5->leave($__internal_6511b6dced324939caa845fe0cb70322cecb229618062ac0b281a789813e69a5_prof);

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
        return array (  86 => 13,  80 => 12,  73 => 10,  70 => 9,  61 => 7,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Ajout {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for message in app.session.flashbag.get('erreur') %}*/
/*         <p class="alert alert-danger"> {{ message }}</p>*/
/*     {% endfor %}*/
/*     <h2>Ajout d'article</h2>*/
/*     {% include "blog/form.html.twig" %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>*/
/* {% endblock %}*/
/* */
