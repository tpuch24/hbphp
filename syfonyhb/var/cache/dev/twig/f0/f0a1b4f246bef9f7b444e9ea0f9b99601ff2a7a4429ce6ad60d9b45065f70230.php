<?php

/* blog/detail.html.twig */
class __TwigTemplate_58a3c195059cf23c1b2feab76d0e1d7fb650cdbad904d297e41c2bd4a8bf9d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23026b370a0b1e6249226c1f226c21b1aab3ab288d257e97a0b391eb591f061e = $this->env->getExtension("native_profiler");
        $__internal_23026b370a0b1e6249226c1f226c21b1aab3ab288d257e97a0b391eb591f061e->enter($__internal_23026b370a0b1e6249226c1f226c21b1aab3ab288d257e97a0b391eb591f061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23026b370a0b1e6249226c1f226c21b1aab3ab288d257e97a0b391eb591f061e->leave($__internal_23026b370a0b1e6249226c1f226c21b1aab3ab288d257e97a0b391eb591f061e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a955033bb732d9e3965bd184f821598dac425dd274d8b5d84b643a4d3d7b78c0 = $this->env->getExtension("native_profiler");
        $__internal_a955033bb732d9e3965bd184f821598dac425dd274d8b5d84b643a4d3d7b78c0->enter($__internal_a955033bb732d9e3965bd184f821598dac425dd274d8b5d84b643a4d3d7b78c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edit - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " ";
        
        $__internal_a955033bb732d9e3965bd184f821598dac425dd274d8b5d84b643a4d3d7b78c0->leave($__internal_a955033bb732d9e3965bd184f821598dac425dd274d8b5d84b643a4d3d7b78c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6318bbf902d92cb293aa1fa87412a104d6964022d69b3524b875ba53fad93f76 = $this->env->getExtension("native_profiler");
        $__internal_6318bbf902d92cb293aa1fa87412a104d6964022d69b3524b875ba53fad93f76->enter($__internal_6318bbf902d92cb293aa1fa87412a104d6964022d69b3524b875ba53fad93f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <p class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "<br>
    <p>";
        // line 11
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "resume", array());
        echo "<br>
        ";
        // line 12
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array())) {
            echo "  
            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"10%\" height=\"10%\" ><br>
        ";
        }
        // line 15
        echo "    <hr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getContenu", array(), "method"), "html", null, true);
            echo " ecrit par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getAuteur", array(), "method"), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getDate", array(), "method"), "format", array(0 => "d-m-yy"), "method"), "html", null, true);
            echo ";
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <em>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-yy"), "html", null, true);
        echo "</em>

        ";
        // line 22
        $this->loadTemplate("blog/formcomment.html.twig", "blog/detail.html.twig", 22)->display($context);
        // line 23
        echo "        <a class=\"btn btn-warning\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modify", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier &rarr;</a>
        <a class=\"btn btn-warning\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer &rarr;</a>
    
    <p>
";
        
        $__internal_6318bbf902d92cb293aa1fa87412a104d6964022d69b3524b875ba53fad93f76->leave($__internal_6318bbf902d92cb293aa1fa87412a104d6964022d69b3524b875ba53fad93f76_prof);

    }

    public function getTemplateName()
    {
        return "blog/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  123 => 23,  121 => 22,  115 => 20,  101 => 17,  97 => 16,  94 => 15,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  71 => 9,  62 => 7,  57 => 6,  51 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Edit - {{article.titre}} {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <p class="alert alert-success"> {{ message }}</p>*/
/*     {% endfor %}*/
/* */
/*     {{article.id}}<br>*/
/*     <p>{{article.resume | raw}}<br>*/
/*         {% if article.image %}  */
/*             <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
/*         {% endif %}*/
/*     <hr>*/
/*         {% for comment in comments  %}*/
/*             {{comment.getContenu()}} ecrit par {{comment.getAuteur()}} le {{comment.getDate().format("d-m-yy")}};*/
/*             <br>*/
/*         {% endfor %}*/
/*         <em>{{article.date|date("d-m-yy")}}</em>*/
/* */
/*         {% include "blog/formcomment.html.twig" %}*/
/*         <a class="btn btn-warning" href="{{path('blog_modify', {id:article.id})}}">Modifier &rarr;</a>*/
/*         <a class="btn btn-warning" href="{{path('blog_delete', {id:article.id})}}">Supprimer &rarr;</a>*/
/*     */
/*     <p>*/
/* {% endblock body%}*/
/* */
/* */
