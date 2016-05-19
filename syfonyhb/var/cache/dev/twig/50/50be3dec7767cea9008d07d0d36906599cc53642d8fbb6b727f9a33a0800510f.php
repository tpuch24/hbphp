<?php

/* ThierryCatalogueBundle:cat:add.html.twig */
class __TwigTemplate_0d952f7ebcc5ad3d8d80ad92331e3bd6e3fac56d44af6a5e2df263706eb9a58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ThierryCatalogueBundle:cat:layout.html.twig", "ThierryCatalogueBundle:cat:add.html.twig", 1);
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
        $__internal_6ab33e2e24bc73d83837e7d005889a00dd0eb1cc8a173704db7e5fadca098283 = $this->env->getExtension("native_profiler");
        $__internal_6ab33e2e24bc73d83837e7d005889a00dd0eb1cc8a173704db7e5fadca098283->enter($__internal_6ab33e2e24bc73d83837e7d005889a00dd0eb1cc8a173704db7e5fadca098283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab33e2e24bc73d83837e7d005889a00dd0eb1cc8a173704db7e5fadca098283->leave($__internal_6ab33e2e24bc73d83837e7d005889a00dd0eb1cc8a173704db7e5fadca098283_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1a8cb3887b74eecb33864e9fabe3d4941715f859c463b0738a1a7d9757520e3 = $this->env->getExtension("native_profiler");
        $__internal_c1a8cb3887b74eecb33864e9fabe3d4941715f859c463b0738a1a7d9757520e3->enter($__internal_c1a8cb3887b74eecb33864e9fabe3d4941715f859c463b0738a1a7d9757520e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout ";
        
        $__internal_c1a8cb3887b74eecb33864e9fabe3d4941715f859c463b0738a1a7d9757520e3->leave($__internal_c1a8cb3887b74eecb33864e9fabe3d4941715f859c463b0738a1a7d9757520e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec3567808c4fb7318e624f07815c0590ce59ce5ac54e1f36a0ee9fe3a4f1edd1 = $this->env->getExtension("native_profiler");
        $__internal_ec3567808c4fb7318e624f07815c0590ce59ce5ac54e1f36a0ee9fe3a4f1edd1->enter($__internal_ec3567808c4fb7318e624f07815c0590ce59ce5ac54e1f36a0ee9fe3a4f1edd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("ThierryCatalogueBundle:cat:form.html.twig", "ThierryCatalogueBundle:cat:add.html.twig", 10)->display($context);
        
        $__internal_ec3567808c4fb7318e624f07815c0590ce59ce5ac54e1f36a0ee9fe3a4f1edd1->leave($__internal_ec3567808c4fb7318e624f07815c0590ce59ce5ac54e1f36a0ee9fe3a4f1edd1_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84164dbb26a242b60336a4168f3a3a956f870dd409c20bf1a2069f0d20a4d37a = $this->env->getExtension("native_profiler");
        $__internal_84164dbb26a242b60336a4168f3a3a956f870dd409c20bf1a2069f0d20a4d37a->enter($__internal_84164dbb26a242b60336a4168f3a3a956f870dd409c20bf1a2069f0d20a4d37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/standard/ckeditor.js\"></script>
";
        
        $__internal_84164dbb26a242b60336a4168f3a3a956f870dd409c20bf1a2069f0d20a4d37a->leave($__internal_84164dbb26a242b60336a4168f3a3a956f870dd409c20bf1a2069f0d20a4d37a_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:add.html.twig";
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
/* {% extends "ThierryCatalogueBundle:cat:layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Ajout {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for message in app.session.flashbag.get('erreur') %}*/
/*         <p class="alert alert-danger"> {{ message }}</p>*/
/*     {% endfor %}*/
/*     <h2>Ajout d'article</h2>*/
/*     {% include "ThierryCatalogueBundle:cat:form.html.twig" %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>*/
/* {% endblock %}*/
/* */
