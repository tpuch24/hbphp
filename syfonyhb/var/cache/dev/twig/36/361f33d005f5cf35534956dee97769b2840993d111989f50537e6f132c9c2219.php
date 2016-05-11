<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cca0742756404f4803180ea1e8d8ce7915c7ecbe3bf33d8d56f825d08f837996 extends Twig_Template
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
        $__internal_865f98760b84ecfe77d34d38a5f7e30ef8046fa6d19384e6da8b90b7117b819d = $this->env->getExtension("native_profiler");
        $__internal_865f98760b84ecfe77d34d38a5f7e30ef8046fa6d19384e6da8b90b7117b819d->enter($__internal_865f98760b84ecfe77d34d38a5f7e30ef8046fa6d19384e6da8b90b7117b819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865f98760b84ecfe77d34d38a5f7e30ef8046fa6d19384e6da8b90b7117b819d->leave($__internal_865f98760b84ecfe77d34d38a5f7e30ef8046fa6d19384e6da8b90b7117b819d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f4277c22cd70159b487775c2ac5c5a16957386466081ffa7fbf305099b03ee6 = $this->env->getExtension("native_profiler");
        $__internal_6f4277c22cd70159b487775c2ac5c5a16957386466081ffa7fbf305099b03ee6->enter($__internal_6f4277c22cd70159b487775c2ac5c5a16957386466081ffa7fbf305099b03ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f4277c22cd70159b487775c2ac5c5a16957386466081ffa7fbf305099b03ee6->leave($__internal_6f4277c22cd70159b487775c2ac5c5a16957386466081ffa7fbf305099b03ee6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_992f6dadcc6c7c1c3cc1619cfb17c13df8bebd5e86e2fdfdebbcaaeca6718363 = $this->env->getExtension("native_profiler");
        $__internal_992f6dadcc6c7c1c3cc1619cfb17c13df8bebd5e86e2fdfdebbcaaeca6718363->enter($__internal_992f6dadcc6c7c1c3cc1619cfb17c13df8bebd5e86e2fdfdebbcaaeca6718363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_992f6dadcc6c7c1c3cc1619cfb17c13df8bebd5e86e2fdfdebbcaaeca6718363->leave($__internal_992f6dadcc6c7c1c3cc1619cfb17c13df8bebd5e86e2fdfdebbcaaeca6718363_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4b39ab7844d6a812af75bc92a806a6f99d7c1400c46499a35122574ee72e211 = $this->env->getExtension("native_profiler");
        $__internal_c4b39ab7844d6a812af75bc92a806a6f99d7c1400c46499a35122574ee72e211->enter($__internal_c4b39ab7844d6a812af75bc92a806a6f99d7c1400c46499a35122574ee72e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4b39ab7844d6a812af75bc92a806a6f99d7c1400c46499a35122574ee72e211->leave($__internal_c4b39ab7844d6a812af75bc92a806a6f99d7c1400c46499a35122574ee72e211_prof);

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
