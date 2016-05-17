<?php

/* blog/categorie.html.twig */
class __TwigTemplate_b5c0a17cde6dd7959cd4ee01dccc52f9c2c1eed752b2b903458b548bed469082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/categorie.html.twig", 2);
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
        $__internal_295121f3edd0066aa2f15263a6fefdaeb681822cd5640a1e944f0ef7cfa36421 = $this->env->getExtension("native_profiler");
        $__internal_295121f3edd0066aa2f15263a6fefdaeb681822cd5640a1e944f0ef7cfa36421->enter($__internal_295121f3edd0066aa2f15263a6fefdaeb681822cd5640a1e944f0ef7cfa36421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_295121f3edd0066aa2f15263a6fefdaeb681822cd5640a1e944f0ef7cfa36421->leave($__internal_295121f3edd0066aa2f15263a6fefdaeb681822cd5640a1e944f0ef7cfa36421_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f987d02f616f7a77f3a4a5f2aadaa7b3f423b42d6ea1f221eed833f60478869 = $this->env->getExtension("native_profiler");
        $__internal_2f987d02f616f7a77f3a4a5f2aadaa7b3f423b42d6ea1f221eed833f60478869->enter($__internal_2f987d02f616f7a77f3a4a5f2aadaa7b3f423b42d6ea1f221eed833f60478869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index Categorie";
        
        $__internal_2f987d02f616f7a77f3a4a5f2aadaa7b3f423b42d6ea1f221eed833f60478869->leave($__internal_2f987d02f616f7a77f3a4a5f2aadaa7b3f423b42d6ea1f221eed833f60478869_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_59c4511fc0724d08d7edff784505ac91675ed4743a3c50ab4f29c7585f8e62c2 = $this->env->getExtension("native_profiler");
        $__internal_59c4511fc0724d08d7edff784505ac91675ed4743a3c50ab4f29c7585f8e62c2->enter($__internal_59c4511fc0724d08d7edff784505ac91675ed4743a3c50ab4f29c7585f8e62c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>
    Catégorie : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " Article(s)";
        // line 9
        echo "</h1>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " - <em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</em>
        ";
            // line 12
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 13
                echo "           ";
                // line 14
                echo "           <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"10%\" height=\"10%\" ><br>
        ";
            }
            // line 15
            echo "     
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 17
                echo "            <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      
        <br>
        <br>
        <a class=\"btn btn-warning\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
    <p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_59c4511fc0724d08d7edff784505ac91675ed4743a3c50ab4f29c7585f8e62c2->leave($__internal_59c4511fc0724d08d7edff784505ac91675ed4743a3c50ab4f29c7585f8e62c2_prof);

    }

    public function getTemplateName()
    {
        return "blog/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 21,  108 => 18,  97 => 17,  93 => 16,  90 => 15,  81 => 14,  79 => 13,  77 => 12,  70 => 11,  66 => 10,  63 => 9,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Index Categorie{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>*/
/*     Catégorie : {{titre}}-{{count}} Article(s) {#- Page {{page}}#}*/
/* </h1>*/
/*     {% for article in articles %}*/
/*     <p>{{article.id}} - <em>{{article.titre}}</em>*/
/*         {% if article.image %}*/
/*            {#<img src="{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>#}*/
/*            <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
/*         {% endif %}     */
/*         {% for categorie in article.categories  %}*/
/*             <a class="btn btn-link" href="{{path('blog_categorie', {id:categorie.id})}}">{{categorie.titre}}</a>*/
/*         {% endfor %}      */
/*         <br>*/
/*         <br>*/
/*         <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*     <p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
