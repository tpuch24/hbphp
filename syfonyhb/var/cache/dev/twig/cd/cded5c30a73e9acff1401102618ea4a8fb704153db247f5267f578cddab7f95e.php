<?php

/* ThierryCatalogueBundle:cat:detail.html.twig */
class __TwigTemplate_d1b53e6a76c28a692b89849b0d875b66bca872acafde0875ff6e7bc03df52082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ThierryCatalogueBundle:cat:layout.html.twig", "ThierryCatalogueBundle:cat:detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThierryCatalogueBundle:cat:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64f18e1fd7b3e3be00f60134728afce20ac68623a793d731f4fe87f5fd6fd9d = $this->env->getExtension("native_profiler");
        $__internal_e64f18e1fd7b3e3be00f60134728afce20ac68623a793d731f4fe87f5fd6fd9d->enter($__internal_e64f18e1fd7b3e3be00f60134728afce20ac68623a793d731f4fe87f5fd6fd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64f18e1fd7b3e3be00f60134728afce20ac68623a793d731f4fe87f5fd6fd9d->leave($__internal_e64f18e1fd7b3e3be00f60134728afce20ac68623a793d731f4fe87f5fd6fd9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac79eece5defb4e4cfaabe974b0dddc650dd333df2ccd44a35ceb0daf8617f84 = $this->env->getExtension("native_profiler");
        $__internal_ac79eece5defb4e4cfaabe974b0dddc650dd333df2ccd44a35ceb0daf8617f84->enter($__internal_ac79eece5defb4e4cfaabe974b0dddc650dd333df2ccd44a35ceb0daf8617f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edit - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " ";
        
        $__internal_ac79eece5defb4e4cfaabe974b0dddc650dd333df2ccd44a35ceb0daf8617f84->leave($__internal_ac79eece5defb4e4cfaabe974b0dddc650dd333df2ccd44a35ceb0daf8617f84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9bd26ed975604cf48e988181afa426cb29269f9fbdace420e7c6173ea52e35 = $this->env->getExtension("native_profiler");
        $__internal_ab9bd26ed975604cf48e988181afa426cb29269f9fbdace420e7c6173ea52e35->enter($__internal_ab9bd26ed975604cf48e988181afa426cb29269f9fbdace420e7c6173ea52e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "<br>
    <p>";
        // line 11
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array());
        echo "<br>
        Auteur: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo "<br> 
    <p>";
        // line 13
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "<br>
        Prix: ";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "prix", array()), 2, ".", " "), "html", null, true);
        echo " €<br> 
        ";
        // line 15
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array())) {
            echo "  
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\" ><br>
        ";
        }
        // line 18
        echo "        <em>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-yy"), "html", null, true);
        echo "</em>
    <hr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 21
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getNote", array(), "method"), "html", null, true);
            echo " ecrit par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getAuteur", array(), "method"), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "getDate", array(), "method"), "d-m-Y"), "html", null, true);
            echo "
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        

        ";
        // line 26
        $this->loadTemplate("ThierryCatalogueBundle:cat:/formnote.html.twig", "ThierryCatalogueBundle:cat:detail.html.twig", 26)->display($context);
        // line 27
        echo "        <a class=\"btn btn-warning\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cat_modify", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier &rarr;</a>
        <a class=\"btn btn-warning\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cat_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer &rarr;</a>
    
    <p>
";
        
        $__internal_ab9bd26ed975604cf48e988181afa426cb29269f9fbdace420e7c6173ea52e35->leave($__internal_ab9bd26ed975604cf48e988181afa426cb29269f9fbdace420e7c6173ea52e35_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  122 => 27,  120 => 26,  116 => 24,  102 => 21,  98 => 20,  92 => 18,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  59 => 10,  57 => 6,  51 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "ThierryCatalogueBundle:cat:layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Edit - {{article.titre}} {% endblock %}*/
/* */
/* {% block body %}*/
/*     {#{% for message in app.session.flashbag.get('info') %}*/
/*         <p class="alert alert-success"> {{ message }}</p>*/
/*     {% endfor %}*/
/*     #}*/
/*     {{article.id}}<br>*/
/*     <p>{{article.titre | raw}}<br>*/
/*         Auteur: {{article.auteur}}<br> */
/*     <p>{{article.contenu | raw}}<br>*/
/*         Prix: {{article.prix | number_format(2,'.',' ')}} €<br> */
/*         {% if article.image %}  */
/*             <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" ><br>*/
/*         {% endif %}*/
/*         <em>{{article.date|date("d-m-yy")}}</em>*/
/*     <hr>*/
/*         {% for note in notes  %}*/
/*             {{note.getNote()}} ecrit par {{note.getAuteur()}} le {{note.getDate()| date("d-m-Y")}}*/
/*             <br>*/
/*         {% endfor %}*/
/*         */
/* */
/*         {% include "ThierryCatalogueBundle:cat:/formnote.html.twig" %}*/
/*         <a class="btn btn-warning" href="{{path('cat_modify', {id:article.id})}}">Modifier &rarr;</a>*/
/*         <a class="btn btn-warning" href="{{path('cat_delete', {id:article.id})}}">Supprimer &rarr;</a>*/
/*     */
/*     <p>*/
/* {% endblock body%}*/
/* */
/* */
