<?php

/* blog/add.html.twig */
class __TwigTemplate_cae336b85f2986791bb62150d7d744d4ba29e30284c9f5605953a96d66d33925 extends Twig_Template
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
        $__internal_73ee63af09ca9d469a13d7dc675964c4120a86f1a3af35a3cad5e807559c42fb = $this->env->getExtension("native_profiler");
        $__internal_73ee63af09ca9d469a13d7dc675964c4120a86f1a3af35a3cad5e807559c42fb->enter($__internal_73ee63af09ca9d469a13d7dc675964c4120a86f1a3af35a3cad5e807559c42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73ee63af09ca9d469a13d7dc675964c4120a86f1a3af35a3cad5e807559c42fb->leave($__internal_73ee63af09ca9d469a13d7dc675964c4120a86f1a3af35a3cad5e807559c42fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_438c0f86a17740e49c934b0585a7df65a13f5e1b9600d7dcb0e83c9dbaab5c54 = $this->env->getExtension("native_profiler");
        $__internal_438c0f86a17740e49c934b0585a7df65a13f5e1b9600d7dcb0e83c9dbaab5c54->enter($__internal_438c0f86a17740e49c934b0585a7df65a13f5e1b9600d7dcb0e83c9dbaab5c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout ";
        
        $__internal_438c0f86a17740e49c934b0585a7df65a13f5e1b9600d7dcb0e83c9dbaab5c54->leave($__internal_438c0f86a17740e49c934b0585a7df65a13f5e1b9600d7dcb0e83c9dbaab5c54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31c17a0fc23e7609812fec071de842c6d26b6b54796a41448b6f3aca78a76fa1 = $this->env->getExtension("native_profiler");
        $__internal_31c17a0fc23e7609812fec071de842c6d26b6b54796a41448b6f3aca78a76fa1->enter($__internal_31c17a0fc23e7609812fec071de842c6d26b6b54796a41448b6f3aca78a76fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31c17a0fc23e7609812fec071de842c6d26b6b54796a41448b6f3aca78a76fa1->leave($__internal_31c17a0fc23e7609812fec071de842c6d26b6b54796a41448b6f3aca78a76fa1_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6fc92e5274082854607e8ed3bcab16487ea346f212af79db878f966e803b7e6 = $this->env->getExtension("native_profiler");
        $__internal_d6fc92e5274082854607e8ed3bcab16487ea346f212af79db878f966e803b7e6->enter($__internal_d6fc92e5274082854607e8ed3bcab16487ea346f212af79db878f966e803b7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/standard/ckeditor.js\"></script>
";
        
        $__internal_d6fc92e5274082854607e8ed3bcab16487ea346f212af79db878f966e803b7e6->leave($__internal_d6fc92e5274082854607e8ed3bcab16487ea346f212af79db878f966e803b7e6_prof);

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
