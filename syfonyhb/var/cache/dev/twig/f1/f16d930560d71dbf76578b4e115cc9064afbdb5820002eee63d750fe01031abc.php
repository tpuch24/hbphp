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
        $__internal_dbbedb5d2ea119d0eafaa7428f225c6f91a0260d5c0dc7080ad273d5e340a16e = $this->env->getExtension("native_profiler");
        $__internal_dbbedb5d2ea119d0eafaa7428f225c6f91a0260d5c0dc7080ad273d5e340a16e->enter($__internal_dbbedb5d2ea119d0eafaa7428f225c6f91a0260d5c0dc7080ad273d5e340a16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/form.html.twig"));

        // line 3
        echo "
";
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
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_dbbedb5d2ea119d0eafaa7428f225c6f91a0260d5c0dc7080ad273d5e340a16e->leave($__internal_dbbedb5d2ea119d0eafaa7428f225c6f91a0260d5c0dc7080ad273d5e340a16e_prof);

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
        return array (  51 => 19,  48 => 18,  43 => 15,  40 => 14,  38 => 12,  35 => 11,  33 => 9,  30 => 8,  25 => 4,  22 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# Cree les balise de debut #}*/
/* */
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
/* {{ form_end(form) }}*/
/* */
/* {# {{ form(form) }} #}*/
/* */
