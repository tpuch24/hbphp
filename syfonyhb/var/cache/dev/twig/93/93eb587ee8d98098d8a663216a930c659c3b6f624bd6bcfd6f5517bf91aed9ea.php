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
        $__internal_edacc666e47f331bf65dc5eb77100c19cd655afbb5032bd4b6cd41b1ca2ccde2 = $this->env->getExtension("native_profiler");
        $__internal_edacc666e47f331bf65dc5eb77100c19cd655afbb5032bd4b6cd41b1ca2ccde2->enter($__internal_edacc666e47f331bf65dc5eb77100c19cd655afbb5032bd4b6cd41b1ca2ccde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edacc666e47f331bf65dc5eb77100c19cd655afbb5032bd4b6cd41b1ca2ccde2->leave($__internal_edacc666e47f331bf65dc5eb77100c19cd655afbb5032bd4b6cd41b1ca2ccde2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_50b292500f7acafaae4d4b8928b63647dfe0e6da966cd04aa2c1c4be081c481e = $this->env->getExtension("native_profiler");
        $__internal_50b292500f7acafaae4d4b8928b63647dfe0e6da966cd04aa2c1c4be081c481e->enter($__internal_50b292500f7acafaae4d4b8928b63647dfe0e6da966cd04aa2c1c4be081c481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Blog ";
        
        $__internal_50b292500f7acafaae4d4b8928b63647dfe0e6da966cd04aa2c1c4be081c481e->leave($__internal_50b292500f7acafaae4d4b8928b63647dfe0e6da966cd04aa2c1c4be081c481e_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_d54219b53b21309fd74ef694aad62912d36e881fd7784c963b1484cf86125948 = $this->env->getExtension("native_profiler");
        $__internal_d54219b53b21309fd74ef694aad62912d36e881fd7784c963b1484cf86125948->enter($__internal_d54219b53b21309fd74ef694aad62912d36e881fd7784c963b1484cf86125948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "    <h1> Blog </h1>
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d54219b53b21309fd74ef694aad62912d36e881fd7784c963b1484cf86125948->leave($__internal_d54219b53b21309fd74ef694aad62912d36e881fd7784c963b1484cf86125948_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c506d90703c7a61614ca3a8ce889ff1940e2232abc7e95e5bad61ce86b4cd9fe = $this->env->getExtension("native_profiler");
        $__internal_c506d90703c7a61614ca3a8ce889ff1940e2232abc7e95e5bad61ce86b4cd9fe->enter($__internal_c506d90703c7a61614ca3a8ce889ff1940e2232abc7e95e5bad61ce86b4cd9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c506d90703c7a61614ca3a8ce889ff1940e2232abc7e95e5bad61ce86b4cd9fe->leave($__internal_c506d90703c7a61614ca3a8ce889ff1940e2232abc7e95e5bad61ce86b4cd9fe_prof);

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
        return array (  59 => 5,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block title %} {{parent()}} - Blog {% endblock %}*/
/* {% block layout %}*/
/*     <h1> Blog </h1>*/
/*     {% block body %}{% endblock %}*/
/* {% endblock %}*/
/* */
