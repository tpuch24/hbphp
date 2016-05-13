<?php

/* blog/textarea.ckeditor.html.twig */
class __TwigTemplate_ee4d959340f00581ccf6ae5603b4518058ed750bc4194642c3ca8cb425b9f702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b37c7e09e00a5c413190c70d2c619b4591d816cd7aa56721727019e5abd39a8 = $this->env->getExtension("native_profiler");
        $__internal_3b37c7e09e00a5c413190c70d2c619b4591d816cd7aa56721727019e5abd39a8->enter($__internal_3b37c7e09e00a5c413190c70d2c619b4591d816cd7aa56721727019e5abd39a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/textarea.ckeditor.html.twig"));

        // line 2
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_3b37c7e09e00a5c413190c70d2c619b4591d816cd7aa56721727019e5abd39a8->leave($__internal_3b37c7e09e00a5c413190c70d2c619b4591d816cd7aa56721727019e5abd39a8_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2b3552f151d4f8a789b8d8cf257976c2504eced1b495852ef03666230661d885 = $this->env->getExtension("native_profiler");
        $__internal_2b3552f151d4f8a789b8d8cf257976c2504eced1b495852ef03666230661d885->enter($__internal_2b3552f151d4f8a789b8d8cf257976c2504eced1b495852ef03666230661d885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 3
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control ckeditor\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_2b3552f151d4f8a789b8d8cf257976c2504eced1b495852ef03666230661d885->leave($__internal_2b3552f151d4f8a789b8d8cf257976c2504eced1b495852ef03666230661d885_prof);

    }

    public function getTemplateName()
    {
        return "blog/textarea.ckeditor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }} class="form-control ckeditor">{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
