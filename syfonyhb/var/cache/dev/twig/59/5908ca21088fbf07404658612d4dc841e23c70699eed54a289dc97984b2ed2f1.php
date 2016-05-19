<?php

/* ThierryCatalogueBundle:cat:layout.html.twig */
class __TwigTemplate_37062e50235e4096d04ccb1a27bbcae6fa064539fb8f5b2ebb214f5ec3fc6f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ThierryCatalogueBundle:cat:layout.html.twig", 1);
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
        $__internal_516e095eb36e2c62e2303aa5edf261cfff5835edcbcb3912edb6d055fad5f0c4 = $this->env->getExtension("native_profiler");
        $__internal_516e095eb36e2c62e2303aa5edf261cfff5835edcbcb3912edb6d055fad5f0c4->enter($__internal_516e095eb36e2c62e2303aa5edf261cfff5835edcbcb3912edb6d055fad5f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516e095eb36e2c62e2303aa5edf261cfff5835edcbcb3912edb6d055fad5f0c4->leave($__internal_516e095eb36e2c62e2303aa5edf261cfff5835edcbcb3912edb6d055fad5f0c4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b089d379696eca93e302d9df0f3056e919d053a2f5b8bd3a60fa8e417031ef49 = $this->env->getExtension("native_profiler");
        $__internal_b089d379696eca93e302d9df0f3056e919d053a2f5b8bd3a60fa8e417031ef49->enter($__internal_b089d379696eca93e302d9df0f3056e919d053a2f5b8bd3a60fa8e417031ef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_b089d379696eca93e302d9df0f3056e919d053a2f5b8bd3a60fa8e417031ef49->leave($__internal_b089d379696eca93e302d9df0f3056e919d053a2f5b8bd3a60fa8e417031ef49_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_5677ffa0ac3ce9b9606ca844160e39b8f5f699a3ed2724ac8ac5477814d80fa7 = $this->env->getExtension("native_profiler");
        $__internal_5677ffa0ac3ce9b9606ca844160e39b8f5f699a3ed2724ac8ac5477814d80fa7->enter($__internal_5677ffa0ac3ce9b9606ca844160e39b8f5f699a3ed2724ac8ac5477814d80fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "    <h1> Catalogue </h1>
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "    
";
        
        $__internal_5677ffa0ac3ce9b9606ca844160e39b8f5f699a3ed2724ac8ac5477814d80fa7->leave($__internal_5677ffa0ac3ce9b9606ca844160e39b8f5f699a3ed2724ac8ac5477814d80fa7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b631d51bd1dc80d7b4121fa9313aaa4716b2690aa2b539e72752f66e80fd42c = $this->env->getExtension("native_profiler");
        $__internal_5b631d51bd1dc80d7b4121fa9313aaa4716b2690aa2b539e72752f66e80fd42c->enter($__internal_5b631d51bd1dc80d7b4121fa9313aaa4716b2690aa2b539e72752f66e80fd42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b631d51bd1dc80d7b4121fa9313aaa4716b2690aa2b539e72752f66e80fd42c->leave($__internal_5b631d51bd1dc80d7b4121fa9313aaa4716b2690aa2b539e72752f66e80fd42c_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 5,  61 => 6,  59 => 5,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block title %} {{parent()}} - Catalogue {% endblock %}*/
/* {% block layout %}*/
/*     <h1> Catalogue </h1>*/
/*     {% block body %}{% endblock %}*/
/*     */
/* {% endblock %}*/
