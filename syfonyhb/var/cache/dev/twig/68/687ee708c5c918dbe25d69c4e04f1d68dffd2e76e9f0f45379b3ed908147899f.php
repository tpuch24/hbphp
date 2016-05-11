<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6cb0d0daaa1ef15d534d37a34a21e8d92b3eac1be9d34a834db0d74962f30c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ba4a6e2f024efa115f22a21665d627cc6fcab809884ba21c1c4a9e9c6edb4a = $this->env->getExtension("native_profiler");
        $__internal_a4ba4a6e2f024efa115f22a21665d627cc6fcab809884ba21c1c4a9e9c6edb4a->enter($__internal_a4ba4a6e2f024efa115f22a21665d627cc6fcab809884ba21c1c4a9e9c6edb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ba4a6e2f024efa115f22a21665d627cc6fcab809884ba21c1c4a9e9c6edb4a->leave($__internal_a4ba4a6e2f024efa115f22a21665d627cc6fcab809884ba21c1c4a9e9c6edb4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a67def6bc32b9cdfb0978bf7648bfaa8c79c2ffe1a2bd4cd32e41be8a57743d4 = $this->env->getExtension("native_profiler");
        $__internal_a67def6bc32b9cdfb0978bf7648bfaa8c79c2ffe1a2bd4cd32e41be8a57743d4->enter($__internal_a67def6bc32b9cdfb0978bf7648bfaa8c79c2ffe1a2bd4cd32e41be8a57743d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a67def6bc32b9cdfb0978bf7648bfaa8c79c2ffe1a2bd4cd32e41be8a57743d4->leave($__internal_a67def6bc32b9cdfb0978bf7648bfaa8c79c2ffe1a2bd4cd32e41be8a57743d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0638e9dfdca4cf80cb3df13b03da470139b959ff02439752f543075ff492a0 = $this->env->getExtension("native_profiler");
        $__internal_1d0638e9dfdca4cf80cb3df13b03da470139b959ff02439752f543075ff492a0->enter($__internal_1d0638e9dfdca4cf80cb3df13b03da470139b959ff02439752f543075ff492a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d0638e9dfdca4cf80cb3df13b03da470139b959ff02439752f543075ff492a0->leave($__internal_1d0638e9dfdca4cf80cb3df13b03da470139b959ff02439752f543075ff492a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d47799630b7cabb687ba4fc919a067a34d48eb19360227bb0fc4d7c3022cd71 = $this->env->getExtension("native_profiler");
        $__internal_3d47799630b7cabb687ba4fc919a067a34d48eb19360227bb0fc4d7c3022cd71->enter($__internal_3d47799630b7cabb687ba4fc919a067a34d48eb19360227bb0fc4d7c3022cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3d47799630b7cabb687ba4fc919a067a34d48eb19360227bb0fc4d7c3022cd71->leave($__internal_3d47799630b7cabb687ba4fc919a067a34d48eb19360227bb0fc4d7c3022cd71_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
