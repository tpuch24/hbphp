<?php

/* blog/index.html.twig */
class __TwigTemplate_a9746e0de7d18bb07bc91a2a6a6d6c3391d45d5d642ca9e1b1e54e073eaaa19d extends Twig_Template
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
        $__internal_16d962caf94d05d82dbadd6bc607c9e94006b382bd1c0cdc6e0d5b5067dc0fc7 = $this->env->getExtension("native_profiler");
        $__internal_16d962caf94d05d82dbadd6bc607c9e94006b382bd1c0cdc6e0d5b5067dc0fc7->enter($__internal_16d962caf94d05d82dbadd6bc607c9e94006b382bd1c0cdc6e0d5b5067dc0fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d962caf94d05d82dbadd6bc607c9e94006b382bd1c0cdc6e0d5b5067dc0fc7->leave($__internal_16d962caf94d05d82dbadd6bc607c9e94006b382bd1c0cdc6e0d5b5067dc0fc7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a117aaa042829dd8a8c564a80e2c41a351dcdcd9d40fa29206f79cf411b88f1 = $this->env->getExtension("native_profiler");
        $__internal_2a117aaa042829dd8a8c564a80e2c41a351dcdcd9d40fa29206f79cf411b88f1->enter($__internal_2a117aaa042829dd8a8c564a80e2c41a351dcdcd9d40fa29206f79cf411b88f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index ";
        
        $__internal_2a117aaa042829dd8a8c564a80e2c41a351dcdcd9d40fa29206f79cf411b88f1->leave($__internal_2a117aaa042829dd8a8c564a80e2c41a351dcdcd9d40fa29206f79cf411b88f1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dc837f0e8cd5d92f2e51cf83d9c9ca18024401282cda3cbedbdfa1a1e0bb02f = $this->env->getExtension("native_profiler");
        $__internal_3dc837f0e8cd5d92f2e51cf83d9c9ca18024401282cda3cbedbdfa1a1e0bb02f->enter($__internal_3dc837f0e8cd5d92f2e51cf83d9c9ca18024401282cda3cbedbdfa1a1e0bb02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "</em><br>
            ";
            // line 15
            echo $this->env->getExtension('Extrait')->getExtrait($this->getAttribute($context["article"], "contenu", array()));
            echo "<br>
            ";
            // line 16
            if ($this->getAttribute($context["article"], "image", array())) {
                echo "  
                <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"10%\" height=\"10%\" ><br>
            ";
            }
            // line 19
            echo "            <br>  
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
            <a class=\"btn btn-warning\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
        <p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    
    </div>
    
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbpages"]) ? $context["nbpages"] : $this->getContext($context, "nbpages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["ii"]) {
            // line 32
            echo "        
            <a href=\"";
            // line 33
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
        // line 37
        echo "
";
        
        $__internal_3dc837f0e8cd5d92f2e51cf83d9c9ca18024401282cda3cbedbdfa1a1e0bb02f->leave($__internal_3dc837f0e8cd5d92f2e51cf83d9c9ca18024401282cda3cbedbdfa1a1e0bb02f_prof);

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
        return array (  154 => 37,  140 => 33,  137 => 32,  133 => 31,  128 => 28,  118 => 24,  114 => 22,  103 => 21,  99 => 20,  96 => 19,  88 => 17,  84 => 16,  80 => 15,  74 => 14,  71 => 13,  67 => 12,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
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
/*             <p>{{article.id}} - <em>{{article.titre}}</em><br>*/
/*             {{extrait(article.contenu) | raw}}<br>*/
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
