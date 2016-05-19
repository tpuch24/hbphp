<?php

/* ThierryCatalogueBundle:cat:index.html.twig */
class __TwigTemplate_6cd36232ccdd9fbef6dad3c18b08aa379082adb57bf28f0bd146df17b4b31b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ThierryCatalogueBundle:cat:layout.html.twig", "ThierryCatalogueBundle:cat:index.html.twig", 2);
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
        $__internal_6718aa6d5b4102934dda008689c5aa4400707c0f5776d1cd7c28d9dd36e5a8c5 = $this->env->getExtension("native_profiler");
        $__internal_6718aa6d5b4102934dda008689c5aa4400707c0f5776d1cd7c28d9dd36e5a8c5->enter($__internal_6718aa6d5b4102934dda008689c5aa4400707c0f5776d1cd7c28d9dd36e5a8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ThierryCatalogueBundle:cat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6718aa6d5b4102934dda008689c5aa4400707c0f5776d1cd7c28d9dd36e5a8c5->leave($__internal_6718aa6d5b4102934dda008689c5aa4400707c0f5776d1cd7c28d9dd36e5a8c5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81f9f96bbf13e7e1f6e5360664cdc89c944b73e2a41100b987744f8be797bcc = $this->env->getExtension("native_profiler");
        $__internal_a81f9f96bbf13e7e1f6e5360664cdc89c944b73e2a41100b987744f8be797bcc->enter($__internal_a81f9f96bbf13e7e1f6e5360664cdc89c944b73e2a41100b987744f8be797bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index ";
        
        $__internal_a81f9f96bbf13e7e1f6e5360664cdc89c944b73e2a41100b987744f8be797bcc->leave($__internal_a81f9f96bbf13e7e1f6e5360664cdc89c944b73e2a41100b987744f8be797bcc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d9fed3f18ef25c886b6aa32ec351ffe45582563cd02b7b455b41343d233007 = $this->env->getExtension("native_profiler");
        $__internal_91d9fed3f18ef25c886b6aa32ec351ffe45582563cd02b7b455b41343d233007->enter($__internal_91d9fed3f18ef25c886b6aa32ec351ffe45582563cd02b7b455b41343d233007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h2>
    Page ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")), "html", null, true);
        echo "
</h2>
 <div class=\"row\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "        <div class=\"col-xs-6 col-sm-5 col-lg-3\">
            <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " - <em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</em><br>
            ";
            // line 14
            echo $this->env->getExtension('Extrait')->getExtrait($this->getAttribute($context["article"], "contenu", array()));
            echo "<br>
            ";
            // line 15
            if ($this->getAttribute($context["article"], "image", array())) {
                echo "  
                <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" ><br>
            ";
            }
            // line 18
            echo "            <br>  
            <em>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-yy"), "html", null, true);
            echo "</em><br>
            ";
            // line 20
            if ( !(null === $this->getAttribute($context["article"], "notes", array()))) {
                echo "  
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "notes", array()), "count", array(), "method"), "html", null, true);
                echo "
                ";
                // line 28
                echo "            ";
            }
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 30
                echo "                <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cat_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      
            <br>
            <a class=\"btn btn-warning\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cat_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
        <p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["ii"]) {
            // line 39
            echo "        
            <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("cat_index");
            echo twig_escape_filter($this->env, $context["ii"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["ii"], "html", null, true);
            echo "</a>
        ,
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ii'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_91d9fed3f18ef25c886b6aa32ec351ffe45582563cd02b7b455b41343d233007->leave($__internal_91d9fed3f18ef25c886b6aa32ec351ffe45582563cd02b7b455b41343d233007_prof);

    }

    public function getTemplateName()
    {
        return "ThierryCatalogueBundle:cat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 40,  150 => 39,  146 => 38,  143 => 37,  133 => 33,  129 => 31,  118 => 30,  113 => 29,  110 => 28,  106 => 21,  102 => 20,  98 => 19,  95 => 18,  87 => 16,  83 => 15,  79 => 14,  73 => 13,  70 => 12,  66 => 11,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "ThierryCatalogueBundle:cat:layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Index {% endblock %}*/
/* */
/* {% block body %}*/
/* <h2>*/
/*     Page {{page}} / {{nbpages}}*/
/* </h2>*/
/*  <div class="row">*/
/*     {% for article in articles %}*/
/*         <div class="col-xs-6 col-sm-5 col-lg-3">*/
/*             <p>{{article.id}} - <em>{{article.titre}}</em><br>*/
/*             {{extrait(article.contenu) | raw}}<br>*/
/*             {% if article.image %}  */
/*                 <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" ><br>*/
/*             {% endif %}*/
/*             <br>  */
/*             <em>{{article.date|date("d-m-yy")}}</em><br>*/
/*             {% if article.notes is not null %}  */
/*                 {{article.notes.count()}}*/
/*                 {#*/
/*                     {% for note in article.notes  %}*/
/*                         {{note.getNote()}} ecrit par {{note.getAuteur()}} le {{note.getDate()| date("d-m-Y")}}*/
/*                     <br>*/
/*                 {% endfor %}*/
/*                 #}*/
/*             {% endif %}*/
/*             {% for categorie in article.categories  %}*/
/*                 <a class="btn btn-link" href="{{path('cat_categorie', {id:categorie.id})}}">{{categorie.titre}}</a>*/
/*             {% endfor %}      */
/*             <br>*/
/*             <a class="btn btn-warning" href="{{path('cat_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*         <p>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/*     {% for ii in 1..nbpages %}*/
/*         */
/*             <a href="{{path('cat_index')}}{{ii}}">{{ii}}</a>*/
/*         ,*/
/*     {% endfor%}*/
/* {% endblock %}*/
/* */
