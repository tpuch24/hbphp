<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82c6f816ec76c72e1380467fc354e6feabea0257e1cf4842c4145ada9f66ef3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e8636a9db301e2011561c4244ea28848eb1941da3bd69081eeb7e718a903ef66 = $this->env->getExtension("native_profiler");
        $__internal_e8636a9db301e2011561c4244ea28848eb1941da3bd69081eeb7e718a903ef66->enter($__internal_e8636a9db301e2011561c4244ea28848eb1941da3bd69081eeb7e718a903ef66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8636a9db301e2011561c4244ea28848eb1941da3bd69081eeb7e718a903ef66->leave($__internal_e8636a9db301e2011561c4244ea28848eb1941da3bd69081eeb7e718a903ef66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8cb4b298bc7c52a528b70399cb56d1cd8f3a2659120d3dad02b7fecc7670bb66 = $this->env->getExtension("native_profiler");
        $__internal_8cb4b298bc7c52a528b70399cb56d1cd8f3a2659120d3dad02b7fecc7670bb66->enter($__internal_8cb4b298bc7c52a528b70399cb56d1cd8f3a2659120d3dad02b7fecc7670bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8cb4b298bc7c52a528b70399cb56d1cd8f3a2659120d3dad02b7fecc7670bb66->leave($__internal_8cb4b298bc7c52a528b70399cb56d1cd8f3a2659120d3dad02b7fecc7670bb66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf726fa00d8e7faa8f8187144475a5245956d25dd3216ca173b2e5c976349695 = $this->env->getExtension("native_profiler");
        $__internal_cf726fa00d8e7faa8f8187144475a5245956d25dd3216ca173b2e5c976349695->enter($__internal_cf726fa00d8e7faa8f8187144475a5245956d25dd3216ca173b2e5c976349695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf726fa00d8e7faa8f8187144475a5245956d25dd3216ca173b2e5c976349695->leave($__internal_cf726fa00d8e7faa8f8187144475a5245956d25dd3216ca173b2e5c976349695_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acda93e2e136d49e6d2fcfa4b9e3c6f7a298a9e63e403218106657475f0221d7 = $this->env->getExtension("native_profiler");
        $__internal_acda93e2e136d49e6d2fcfa4b9e3c6f7a298a9e63e403218106657475f0221d7->enter($__internal_acda93e2e136d49e6d2fcfa4b9e3c6f7a298a9e63e403218106657475f0221d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_acda93e2e136d49e6d2fcfa4b9e3c6f7a298a9e63e403218106657475f0221d7->leave($__internal_acda93e2e136d49e6d2fcfa4b9e3c6f7a298a9e63e403218106657475f0221d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
