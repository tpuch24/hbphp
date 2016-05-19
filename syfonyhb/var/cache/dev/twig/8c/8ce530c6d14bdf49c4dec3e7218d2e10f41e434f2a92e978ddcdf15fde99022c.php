<?php

/* ThierryCatalogueBundle:cat:form.html.twig */
class __TwigTemplate_b683009726a2c70c153132c1d4c2734d60dd19c66f288d3913135a6830442023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75fc70c031bd2ca5249940faf5d798f330eeada3ddc1cb9e5d42e459960fa3a4 = $this->env->getExtension("native_profiler");
        $__internal_75fc70c031bd2ca5249940faf5d798f330eeada3ddc1cb9e5d42e459960fa3a4->enter($__internal_75fc70c031bd2ca5249940faf5d798f330eeada3ddc1cb9e5d42e459960fa3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:form.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig", 1 => "blog/textarea.ckeditor.html.twig"));
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "maClasse", "title" => "Le titre"), "label" => "Entrez le titre de l'article"));
        // line 11
        echo "<br>
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre")));
        // line 14
        echo "<br>
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "<br>

";
        // line 18
        echo "

";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_75fc70c031bd2ca5249940faf5d798f330eeada3ddc1cb9e5d42e459960fa3a4->leave($__internal_75fc70c031bd2ca5249940faf5d798f330eeada3ddc1cb9e5d42e459960fa3a4_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  47 => 18,  42 => 15,  39 => 14,  37 => 12,  34 => 11,  32 => 9,  29 => 8,  24 => 4,  22 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# Cree les balise de debut #}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' 'blog/textarea.ckeditor.html.twig' %}*/
/* {{ form_start(form) }}*/
/* */
/* {#{{ form_widget(form) }} #}*/
/* {# {{form_row(form.titre)}}<hr> #}*/
/* */
/* {{form_label(form.titre, "Entrez le titre de l'article",*/
/* {'label_attr':{'class':'maClasse', 'title':'Le titre'}})*/
/* }}<br>*/
/* {{form_widget(form.titre,{*/
/* 'attr':{'placeholder':'Titre'}*/
/* })}}<br>*/
/* {{form_errors(form.titre)}}<br>*/
/* */
/* {# Ajoute le jeton et la balise de fin de form </form> #}*/
/* */
/* */
/* {{ form_end(form) }}*/
/* */
/* {# {{ form(form) }} #}*/
/* */
