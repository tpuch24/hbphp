<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9859f75330da33992a47d760f16e230c46f17d87dd0fd725a009339341653efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_121d1a71566dacb51a9233194790673c3ee72b0579d30f75006e124aec9d8cc4 = $this->env->getExtension("native_profiler");
        $__internal_121d1a71566dacb51a9233194790673c3ee72b0579d30f75006e124aec9d8cc4->enter($__internal_121d1a71566dacb51a9233194790673c3ee72b0579d30f75006e124aec9d8cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121d1a71566dacb51a9233194790673c3ee72b0579d30f75006e124aec9d8cc4->leave($__internal_121d1a71566dacb51a9233194790673c3ee72b0579d30f75006e124aec9d8cc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3850b0921ee1b324566d130fc90a9d5a2f6a67fa25ff7b32acbe9d5cb57592de = $this->env->getExtension("native_profiler");
        $__internal_3850b0921ee1b324566d130fc90a9d5a2f6a67fa25ff7b32acbe9d5cb57592de->enter($__internal_3850b0921ee1b324566d130fc90a9d5a2f6a67fa25ff7b32acbe9d5cb57592de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3850b0921ee1b324566d130fc90a9d5a2f6a67fa25ff7b32acbe9d5cb57592de->leave($__internal_3850b0921ee1b324566d130fc90a9d5a2f6a67fa25ff7b32acbe9d5cb57592de_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c813eb457ecbfb2e361a3fb8037ca8d3310b5a97e08cc785f19e7e14123aca19 = $this->env->getExtension("native_profiler");
        $__internal_c813eb457ecbfb2e361a3fb8037ca8d3310b5a97e08cc785f19e7e14123aca19->enter($__internal_c813eb457ecbfb2e361a3fb8037ca8d3310b5a97e08cc785f19e7e14123aca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c813eb457ecbfb2e361a3fb8037ca8d3310b5a97e08cc785f19e7e14123aca19->leave($__internal_c813eb457ecbfb2e361a3fb8037ca8d3310b5a97e08cc785f19e7e14123aca19_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61fa6443a98d24901ceaa7c94db482bb1a6e414eb3391e662cca3e5e031d6a7b = $this->env->getExtension("native_profiler");
        $__internal_61fa6443a98d24901ceaa7c94db482bb1a6e414eb3391e662cca3e5e031d6a7b->enter($__internal_61fa6443a98d24901ceaa7c94db482bb1a6e414eb3391e662cca3e5e031d6a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_61fa6443a98d24901ceaa7c94db482bb1a6e414eb3391e662cca3e5e031d6a7b->leave($__internal_61fa6443a98d24901ceaa7c94db482bb1a6e414eb3391e662cca3e5e031d6a7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
