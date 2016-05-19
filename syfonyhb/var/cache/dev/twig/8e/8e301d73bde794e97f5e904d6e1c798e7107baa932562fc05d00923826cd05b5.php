<?php

/* blog/categorie.html.twig */
class __TwigTemplate_bb43ecf9299d6988b3385f55b8fe0befdbdac296643b62c46f3864047ae9da3f extends Twig_Template
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
        $__internal_ab8b9723a2dd8b83cdc7083f3abfa653f7835eab42abeb6397354a20f31360fb = $this->env->getExtension("native_profiler");
        $__internal_ab8b9723a2dd8b83cdc7083f3abfa653f7835eab42abeb6397354a20f31360fb->enter($__internal_ab8b9723a2dd8b83cdc7083f3abfa653f7835eab42abeb6397354a20f31360fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab8b9723a2dd8b83cdc7083f3abfa653f7835eab42abeb6397354a20f31360fb->leave($__internal_ab8b9723a2dd8b83cdc7083f3abfa653f7835eab42abeb6397354a20f31360fb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6320bf7eb9977a68ab534b211c263302ed321b4ddcb02de2a26c7e7f784d920b = $this->env->getExtension("native_profiler");
        $__internal_6320bf7eb9977a68ab534b211c263302ed321b4ddcb02de2a26c7e7f784d920b->enter($__internal_6320bf7eb9977a68ab534b211c263302ed321b4ddcb02de2a26c7e7f784d920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index Categorie";
        
        $__internal_6320bf7eb9977a68ab534b211c263302ed321b4ddcb02de2a26c7e7f784d920b->leave($__internal_6320bf7eb9977a68ab534b211c263302ed321b4ddcb02de2a26c7e7f784d920b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0194fbda425ab01bb24d931f49d5ab36d17840cf763ac5904298a9454b1eaf3 = $this->env->getExtension("native_profiler");
        $__internal_b0194fbda425ab01bb24d931f49d5ab36d17840cf763ac5904298a9454b1eaf3->enter($__internal_b0194fbda425ab01bb24d931f49d5ab36d17840cf763ac5904298a9454b1eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "        <div class=\"col-xs-6 col-sm-5 col-lg-3\">
        <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " - <em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</em></p>
        <p>
         ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Extrait')->getExtrait($this->getAttribute($context["article"], "contenu", array())), "html", null, true);
            echo "
        </p>
            ";
            // line 16
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 17
                echo "               ";
                // line 18
                echo "               <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"10%\" height=\"10%\" ><br>
            ";
            }
            // line 19
            echo "     
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 21
                echo "                <a class=\"btn btn-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      
            <br>
            <br>
            <a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
        </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b0194fbda425ab01bb24d931f49d5ab36d17840cf763ac5904298a9454b1eaf3->leave($__internal_b0194fbda425ab01bb24d931f49d5ab36d17840cf763ac5904298a9454b1eaf3_prof);

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
        return array (  121 => 25,  116 => 22,  105 => 21,  101 => 20,  98 => 19,  89 => 18,  87 => 17,  85 => 16,  80 => 14,  73 => 12,  70 => 11,  66 => 10,  63 => 9,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
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
/*         <div class="col-xs-6 col-sm-5 col-lg-3">*/
/*         <p>{{article.id}} - <em>{{article.titre}}</em></p>*/
/*         <p>*/
/*          {{extrait(article.contenu) }}*/
/*         </p>*/
/*             {% if article.image %}*/
/*                {#<img src="{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>#}*/
/*                <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
/*             {% endif %}     */
/*             {% for categorie in article.categories  %}*/
/*                 <a class="btn btn-link" href="{{path('blog_categorie', {id:categorie.id})}}">{{categorie.titre}}</a>*/
/*             {% endfor %}      */
/*             <br>*/
/*             <br>*/
/*             <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*         </p>*/
/*     </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
