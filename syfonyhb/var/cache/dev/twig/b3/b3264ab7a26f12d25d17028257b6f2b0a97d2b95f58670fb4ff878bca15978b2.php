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
        $__internal_3bde926472817be20f71d45db58358f7e2c13b64aa9a5d741d605d26d911a3b9 = $this->env->getExtension("native_profiler");
        $__internal_3bde926472817be20f71d45db58358f7e2c13b64aa9a5d741d605d26d911a3b9->enter($__internal_3bde926472817be20f71d45db58358f7e2c13b64aa9a5d741d605d26d911a3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bde926472817be20f71d45db58358f7e2c13b64aa9a5d741d605d26d911a3b9->leave($__internal_3bde926472817be20f71d45db58358f7e2c13b64aa9a5d741d605d26d911a3b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a473575d3ea78d823591f84a3d7cb3f67c961b9e36cf953df5e8ea2f2926eee = $this->env->getExtension("native_profiler");
        $__internal_7a473575d3ea78d823591f84a3d7cb3f67c961b9e36cf953df5e8ea2f2926eee->enter($__internal_7a473575d3ea78d823591f84a3d7cb3f67c961b9e36cf953df5e8ea2f2926eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index Categorie";
        
        $__internal_7a473575d3ea78d823591f84a3d7cb3f67c961b9e36cf953df5e8ea2f2926eee->leave($__internal_7a473575d3ea78d823591f84a3d7cb3f67c961b9e36cf953df5e8ea2f2926eee_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_24bdeb110ddc7ad97283c8d79c0d29c20870c81d240300e3799a98734188b772 = $this->env->getExtension("native_profiler");
        $__internal_24bdeb110ddc7ad97283c8d79c0d29c20870c81d240300e3799a98734188b772->enter($__internal_24bdeb110ddc7ad97283c8d79c0d29c20870c81d240300e3799a98734188b772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>
    Catégorie : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo " -";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
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
        
        $__internal_24bdeb110ddc7ad97283c8d79c0d29c20870c81d240300e3799a98734188b772->leave($__internal_24bdeb110ddc7ad97283c8d79c0d29c20870c81d240300e3799a98734188b772_prof);

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
        return array (  109 => 20,  104 => 17,  93 => 16,  89 => 15,  86 => 14,  78 => 13,  76 => 12,  69 => 11,  65 => 10,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Index Categorie{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>*/
/*     Catégorie : {{titre}} -{{count}}*/
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
