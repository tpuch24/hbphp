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
        $__internal_6b3c5acfb4b831d5284ea68215e5264b897048c50b8d98458900e09f22faeb1e = $this->env->getExtension("native_profiler");
        $__internal_6b3c5acfb4b831d5284ea68215e5264b897048c50b8d98458900e09f22faeb1e->enter($__internal_6b3c5acfb4b831d5284ea68215e5264b897048c50b8d98458900e09f22faeb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3c5acfb4b831d5284ea68215e5264b897048c50b8d98458900e09f22faeb1e->leave($__internal_6b3c5acfb4b831d5284ea68215e5264b897048c50b8d98458900e09f22faeb1e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f14a58fa9749a6dbcc830db1b48377253ebebf8a5cb5cebccb4734a1bb78785 = $this->env->getExtension("native_profiler");
        $__internal_2f14a58fa9749a6dbcc830db1b48377253ebebf8a5cb5cebccb4734a1bb78785->enter($__internal_2f14a58fa9749a6dbcc830db1b48377253ebebf8a5cb5cebccb4734a1bb78785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index Categorie";
        
        $__internal_2f14a58fa9749a6dbcc830db1b48377253ebebf8a5cb5cebccb4734a1bb78785->leave($__internal_2f14a58fa9749a6dbcc830db1b48377253ebebf8a5cb5cebccb4734a1bb78785_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_588499f09120be1bcf6cfa189a940187f87ab800c5e6e1c5b0ba598a08f5d88a = $this->env->getExtension("native_profiler");
        $__internal_588499f09120be1bcf6cfa189a940187f87ab800c5e6e1c5b0ba598a08f5d88a->enter($__internal_588499f09120be1bcf6cfa189a940187f87ab800c5e6e1c5b0ba598a08f5d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>
    Catégorie : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "
</h1>
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
                echo "           <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"10%\" height=\"10%\" ><br>
        ";
            }
            // line 14
            echo "     
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 16
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
            // line 17
            echo "      
        <br>
        <br>
        <a class=\"btn btn-warning\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
    <p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_588499f09120be1bcf6cfa189a940187f87ab800c5e6e1c5b0ba598a08f5d88a->leave($__internal_588499f09120be1bcf6cfa189a940187f87ab800c5e6e1c5b0ba598a08f5d88a_prof);

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
        return array (  107 => 20,  102 => 17,  91 => 16,  87 => 15,  84 => 14,  76 => 13,  74 => 12,  67 => 11,  63 => 10,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Index Categorie{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>*/
/*     Catégorie : {{titre}}*/
/* </h1>*/
/*     {% for article in articles %}*/
/*     <p>{{article.id}} - <em>{{article.titre}}</em>*/
/*         {% if article.image %}*/
/*            <img src="{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
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
