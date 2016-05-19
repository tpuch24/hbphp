<?php

/* blog/textarea.ckeditor.html.twig */
class __TwigTemplate_990e64e0b0ee6895e5dc861ffab40763f7ce0fe06fb57041a1aca5a001608aec extends Twig_Template
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
        $__internal_0663f89b013b6ab89f71cffd7746fa6f7ddeaa3b1790898639611d2aa4f00c5f = $this->env->getExtension("native_profiler");
        $__internal_0663f89b013b6ab89f71cffd7746fa6f7ddeaa3b1790898639611d2aa4f00c5f->enter($__internal_0663f89b013b6ab89f71cffd7746fa6f7ddeaa3b1790898639611d2aa4f00c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/textarea.ckeditor.html.twig"));

        // line 2
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_0663f89b013b6ab89f71cffd7746fa6f7ddeaa3b1790898639611d2aa4f00c5f->leave($__internal_0663f89b013b6ab89f71cffd7746fa6f7ddeaa3b1790898639611d2aa4f00c5f_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2ab88d97ef56541248637b9d7dfa3b31d0e99b3acc8eb846666b5a40b12c86db = $this->env->getExtension("native_profiler");
        $__internal_2ab88d97ef56541248637b9d7dfa3b31d0e99b3acc8eb846666b5a40b12c86db->enter($__internal_2ab88d97ef56541248637b9d7dfa3b31d0e99b3acc8eb846666b5a40b12c86db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 3
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control ckeditor\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_2ab88d97ef56541248637b9d7dfa3b31d0e99b3acc8eb846666b5a40b12c86db->leave($__internal_2ab88d97ef56541248637b9d7dfa3b31d0e99b3acc8eb846666b5a40b12c86db_prof);

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
