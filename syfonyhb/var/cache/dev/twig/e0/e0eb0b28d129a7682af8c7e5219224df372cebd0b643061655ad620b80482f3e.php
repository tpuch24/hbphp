<?php

/* blog/index.html.twig */
class __TwigTemplate_ed32265669c13a6c495efa25b1f68fa65115a6a76e62cc3c3d7b55df8a5c6803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/index.html.twig", 2);
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
        $__internal_6eef750955752f2c1fe508b0686f0a03dcd8b9d1c0d3904308dd3f1419df03ce = $this->env->getExtension("native_profiler");
        $__internal_6eef750955752f2c1fe508b0686f0a03dcd8b9d1c0d3904308dd3f1419df03ce->enter($__internal_6eef750955752f2c1fe508b0686f0a03dcd8b9d1c0d3904308dd3f1419df03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eef750955752f2c1fe508b0686f0a03dcd8b9d1c0d3904308dd3f1419df03ce->leave($__internal_6eef750955752f2c1fe508b0686f0a03dcd8b9d1c0d3904308dd3f1419df03ce_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a18283a7cbf6cef02777797a11cd2df17093ad8bb36de997d944a3f798dec31f = $this->env->getExtension("native_profiler");
        $__internal_a18283a7cbf6cef02777797a11cd2df17093ad8bb36de997d944a3f798dec31f->enter($__internal_a18283a7cbf6cef02777797a11cd2df17093ad8bb36de997d944a3f798dec31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index ";
        
        $__internal_a18283a7cbf6cef02777797a11cd2df17093ad8bb36de997d944a3f798dec31f->leave($__internal_a18283a7cbf6cef02777797a11cd2df17093ad8bb36de997d944a3f798dec31f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_76646e4a0259bca741f2fbe9d10e2ebd8ebf01a093c79aa04331c5dd45dc51df = $this->env->getExtension("native_profiler");
        $__internal_76646e4a0259bca741f2fbe9d10e2ebd8ebf01a093c79aa04331c5dd45dc51df->enter($__internal_76646e4a0259bca741f2fbe9d10e2ebd8ebf01a093c79aa04331c5dd45dc51df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>
    Page ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
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
                echo "  
            <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"10%\" height=\"10%\" ><br>
        ";
            }
            // line 15
            echo "        <br>  
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
        
        $__internal_76646e4a0259bca741f2fbe9d10e2ebd8ebf01a093c79aa04331c5dd45dc51df->leave($__internal_76646e4a0259bca741f2fbe9d10e2ebd8ebf01a093c79aa04331c5dd45dc51df_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  104 => 18,  93 => 17,  89 => 16,  86 => 15,  78 => 13,  74 => 12,  67 => 11,  63 => 10,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Index {% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>*/
/*     Page {{page}}*/
/* </h1>*/
/*     {% for article in articles %}*/
/*     <p>{{article.id}} - <em>{{article.titre}}</em>*/
/*         {% if article.image %}  */
/*             <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
/*         {% endif %}*/
/*         <br>  */
/*         {% for categorie in article.categories  %}*/
/*             <a class="btn btn-link" href="{{path('blog_categorie', {id:categorie.id})}}">{{categorie.titre}}</a>*/
/*         {% endfor %}      */
/*         <br>*/
/*         <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*     <p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
