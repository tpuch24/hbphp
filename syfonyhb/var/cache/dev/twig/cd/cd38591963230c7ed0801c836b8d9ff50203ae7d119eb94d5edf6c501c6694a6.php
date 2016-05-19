<?php

/* blog/detail.html.twig */
class __TwigTemplate_d1df911470dd8ff5be193a8fdd21e422d2098a8684317b4d7018bcf042e2400e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/detail.html.twig", 1);
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
        $__internal_e4dcd446a704e2615aa4ea46a7661f2aa82e23eb8f985ec864666fb376cdb3e5 = $this->env->getExtension("native_profiler");
        $__internal_e4dcd446a704e2615aa4ea46a7661f2aa82e23eb8f985ec864666fb376cdb3e5->enter($__internal_e4dcd446a704e2615aa4ea46a7661f2aa82e23eb8f985ec864666fb376cdb3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4dcd446a704e2615aa4ea46a7661f2aa82e23eb8f985ec864666fb376cdb3e5->leave($__internal_e4dcd446a704e2615aa4ea46a7661f2aa82e23eb8f985ec864666fb376cdb3e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2290a17d4c65c314f4485f687be7c76c548e2f2eeab27a9a58e8cea12e910c1b = $this->env->getExtension("native_profiler");
        $__internal_2290a17d4c65c314f4485f687be7c76c548e2f2eeab27a9a58e8cea12e910c1b->enter($__internal_2290a17d4c65c314f4485f687be7c76c548e2f2eeab27a9a58e8cea12e910c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edit - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " ";
        
        $__internal_2290a17d4c65c314f4485f687be7c76c548e2f2eeab27a9a58e8cea12e910c1b->leave($__internal_2290a17d4c65c314f4485f687be7c76c548e2f2eeab27a9a58e8cea12e910c1b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_733c8878f1a5ce60f8c2d60751073cd1b1a3a1bd6fd318a4e0138819aaf6da87 = $this->env->getExtension("native_profiler");
        $__internal_733c8878f1a5ce60f8c2d60751073cd1b1a3a1bd6fd318a4e0138819aaf6da87->enter($__internal_733c8878f1a5ce60f8c2d60751073cd1b1a3a1bd6fd318a4e0138819aaf6da87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <p class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "<br>
    <p>";
        // line 11
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "resume", array());
        echo "<br>
        ";
        // line 12
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array())) {
            echo "  
            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"10%\" height=\"10%\" ><br>
        ";
        }
        // line 15
        echo "    <hr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getContenu", array(), "method"), "html", null, true);
            echo " ecrit par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getAuteur", array(), "method"), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getDate", array(), "method"), "format", array(0 => "d-m-yy"), "method"), "html", null, true);
            echo ";
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <em>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-yy"), "html", null, true);
        echo "</em>

        ";
        // line 22
        $this->loadTemplate("blog/formcomment.html.twig", "blog/detail.html.twig", 22)->display($context);
        // line 23
        echo "        <a class=\"btn btn-warning\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modify", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier &rarr;</a>
        <a class=\"btn btn-warning\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer &rarr;</a>
    
    <p>
";
        
        $__internal_733c8878f1a5ce60f8c2d60751073cd1b1a3a1bd6fd318a4e0138819aaf6da87->leave($__internal_733c8878f1a5ce60f8c2d60751073cd1b1a3a1bd6fd318a4e0138819aaf6da87_prof);

    }

    public function getTemplateName()
    {
        return "blog/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  123 => 23,  121 => 22,  115 => 20,  101 => 17,  97 => 16,  94 => 15,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  71 => 9,  62 => 7,  57 => 6,  51 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Edit - {{article.titre}} {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <p class="alert alert-success"> {{ message }}</p>*/
/*     {% endfor %}*/
/* */
/*     {{article.id}}<br>*/
/*     <p>{{article.resume | raw}}<br>*/
/*         {% if article.image %}  */
/*             <img src="{{asset ('images/')}}{{article.image.url}}" alt="{{article.image.alt}}" width="10%" height="10%" ><br>*/
/*         {% endif %}*/
/*     <hr>*/
/*         {% for comment in comments  %}*/
/*             {{comment.getContenu()}} ecrit par {{comment.getAuteur()}} le {{comment.getDate().format("d-m-yy")}};*/
/*             <br>*/
/*         {% endfor %}*/
/*         <em>{{article.date|date("d-m-yy")}}</em>*/
/* */
/*         {% include "blog/formcomment.html.twig" %}*/
/*         <a class="btn btn-warning" href="{{path('blog_modify', {id:article.id})}}">Modifier &rarr;</a>*/
/*         <a class="btn btn-warning" href="{{path('blog_delete', {id:article.id})}}">Supprimer &rarr;</a>*/
/*     */
/*     <p>*/
/* {% endblock body%}*/
/* */
/* */
