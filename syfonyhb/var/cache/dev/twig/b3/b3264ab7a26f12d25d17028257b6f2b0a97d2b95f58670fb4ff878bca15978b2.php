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
        $__internal_219dd12b11ca54f082bae1b213fe29cb238e62745a9b7d81082b2d4d78d01c56 = $this->env->getExtension("native_profiler");
        $__internal_219dd12b11ca54f082bae1b213fe29cb238e62745a9b7d81082b2d4d78d01c56->enter($__internal_219dd12b11ca54f082bae1b213fe29cb238e62745a9b7d81082b2d4d78d01c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219dd12b11ca54f082bae1b213fe29cb238e62745a9b7d81082b2d4d78d01c56->leave($__internal_219dd12b11ca54f082bae1b213fe29cb238e62745a9b7d81082b2d4d78d01c56_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b26ef98c1bd30057d642a5b1a2198b75ad73b45ef145add861289332e141b73 = $this->env->getExtension("native_profiler");
        $__internal_4b26ef98c1bd30057d642a5b1a2198b75ad73b45ef145add861289332e141b73->enter($__internal_4b26ef98c1bd30057d642a5b1a2198b75ad73b45ef145add861289332e141b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index Categorie";
        
        $__internal_4b26ef98c1bd30057d642a5b1a2198b75ad73b45ef145add861289332e141b73->leave($__internal_4b26ef98c1bd30057d642a5b1a2198b75ad73b45ef145add861289332e141b73_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ac8ec8bd21e4bd59896e35e4994db84f3345e41c9596b66ad96daf7f44f146 = $this->env->getExtension("native_profiler");
        $__internal_42ac8ec8bd21e4bd59896e35e4994db84f3345e41c9596b66ad96daf7f44f146->enter($__internal_42ac8ec8bd21e4bd59896e35e4994db84f3345e41c9596b66ad96daf7f44f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <br>
        <a class=\"btn btn-warning\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
    <p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_42ac8ec8bd21e4bd59896e35e4994db84f3345e41c9596b66ad96daf7f44f146->leave($__internal_42ac8ec8bd21e4bd59896e35e4994db84f3345e41c9596b66ad96daf7f44f146_prof);

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
        return array (  88 => 16,  84 => 14,  76 => 13,  74 => 12,  67 => 11,  63 => 10,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
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
/*         <br>*/
/*         <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*     <p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
