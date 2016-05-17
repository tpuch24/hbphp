<?php

/* blog/form.html.twig */
class __TwigTemplate_af3f977a8d8dedd89118304cd31732c974b1627fd0d7bfce0a5dff7a54bd1a21 extends Twig_Template
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
        $__internal_84b8ab121b4443903fd83682abc9fee0e0475562912e556178256675d30af7f1 = $this->env->getExtension("native_profiler");
        $__internal_84b8ab121b4443903fd83682abc9fee0e0475562912e556178256675d30af7f1->enter($__internal_84b8ab121b4443903fd83682abc9fee0e0475562912e556178256675d30af7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/form.html.twig"));

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
        
        $__internal_84b8ab121b4443903fd83682abc9fee0e0475562912e556178256675d30af7f1->leave($__internal_84b8ab121b4443903fd83682abc9fee0e0475562912e556178256675d30af7f1_prof);

    }

    public function getTemplateName()
    {
        return "blog/form.html.twig";
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
