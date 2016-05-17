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
        $__internal_4d37e02a31709445106b3b44581c905d359d06cee48827ffd6a9c3f0fea4b41c = $this->env->getExtension("native_profiler");
        $__internal_4d37e02a31709445106b3b44581c905d359d06cee48827ffd6a9c3f0fea4b41c->enter($__internal_4d37e02a31709445106b3b44581c905d359d06cee48827ffd6a9c3f0fea4b41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d37e02a31709445106b3b44581c905d359d06cee48827ffd6a9c3f0fea4b41c->leave($__internal_4d37e02a31709445106b3b44581c905d359d06cee48827ffd6a9c3f0fea4b41c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce64264cb82edac7b617bcec6528e1f45f6ec6bb2a6883d3c44ab9b5a961711f = $this->env->getExtension("native_profiler");
        $__internal_ce64264cb82edac7b617bcec6528e1f45f6ec6bb2a6883d3c44ab9b5a961711f->enter($__internal_ce64264cb82edac7b617bcec6528e1f45f6ec6bb2a6883d3c44ab9b5a961711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index ";
        
        $__internal_ce64264cb82edac7b617bcec6528e1f45f6ec6bb2a6883d3c44ab9b5a961711f->leave($__internal_ce64264cb82edac7b617bcec6528e1f45f6ec6bb2a6883d3c44ab9b5a961711f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a470eea5e71e96cc674d1c1e84671c5fc0352771eab55c7b0f459ed8cd32b9 = $this->env->getExtension("native_profiler");
        $__internal_49a470eea5e71e96cc674d1c1e84671c5fc0352771eab55c7b0f459ed8cd32b9->enter($__internal_49a470eea5e71e96cc674d1c1e84671c5fc0352771eab55c7b0f459ed8cd32b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>
    Page ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages")), "html", null, true);
        echo "
</h1>
 <div class=\"row\">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "        <div class=\"col-xs-6 col-sm-5 col-lg-3\">
        <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " - <em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</em>
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
                echo "\" width=\"10%\" height=\"10%\" ><br>
            ";
            }
            // line 18
            echo "            <br>  
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 20
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
            // line 21
            echo "      
            <br>
            <a class=\"btn btn-warning\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
        <p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
    </div>
    
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["ii"]) {
            // line 31
            echo "        
            <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("blog_index");
            echo "/";
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
        // line 36
        echo "
";
        
        $__internal_49a470eea5e71e96cc674d1c1e84671c5fc0352771eab55c7b0f459ed8cd32b9->leave($__internal_49a470eea5e71e96cc674d1c1e84671c5fc0352771eab55c7b0f459ed8cd32b9_prof);

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
        return array (  150 => 36,  136 => 32,  133 => 31,  129 => 30,  124 => 27,  114 => 23,  110 => 21,  99 => 20,  95 => 19,  92 => 18,  84 => 16,  80 => 15,  74 => 14,  71 => 13,  67 => 12,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Index {% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>*/
/*     Page {{page}} - {{nbpages}}*/
/* </h1>*/
/*  <div class="row">*/
/* */
/*     {% for article in articles %}*/
/*         <div class="col-xs-6 col-sm-5 col-lg-3">*/
/*         <p>{{article.id}} - <em>{{article.titre}}</em>*/
/*             {% if article.image %}  */
/*                 <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
/*             {% endif %}*/
/*             <br>  */
/*             {% for categorie in article.categories  %}*/
/*                 <a class="btn btn-link" href="{{path('blog_categorie', {id:categorie.id})}}">{{categorie.titre}}</a>*/
/*             {% endfor %}      */
/*             <br>*/
/*             <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*         <p>*/
/*         </div>*/
/*     {% endfor %}*/
/*     */
/*     </div>*/
/*     */
/*     {% for ii in 1..nbpages %}*/
/*         */
/*             <a href="{{path('blog_index')}}/{{ii}}">{{ii}}</a>*/
/*         ,*/
/*         */
/*     {% endfor%}*/
/* */
/* {% endblock %}*/
/* */
