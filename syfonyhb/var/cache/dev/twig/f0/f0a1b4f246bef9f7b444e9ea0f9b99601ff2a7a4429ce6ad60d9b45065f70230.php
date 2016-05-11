<?php

/* blog/detail.html.twig */
class __TwigTemplate_58a3c195059cf23c1b2feab76d0e1d7fb650cdbad904d297e41c2bd4a8bf9d54 extends Twig_Template
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
        $__internal_174449c564742b8153423d44a09c271bf76bdfc4b2c15592e30cc60a4cb8bba7 = $this->env->getExtension("native_profiler");
        $__internal_174449c564742b8153423d44a09c271bf76bdfc4b2c15592e30cc60a4cb8bba7->enter($__internal_174449c564742b8153423d44a09c271bf76bdfc4b2c15592e30cc60a4cb8bba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_174449c564742b8153423d44a09c271bf76bdfc4b2c15592e30cc60a4cb8bba7->leave($__internal_174449c564742b8153423d44a09c271bf76bdfc4b2c15592e30cc60a4cb8bba7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1ded16b9736b8f70ffd3b5360330825ad47b26baf18b19a3caf6a2da70fa2d9 = $this->env->getExtension("native_profiler");
        $__internal_a1ded16b9736b8f70ffd3b5360330825ad47b26baf18b19a3caf6a2da70fa2d9->enter($__internal_a1ded16b9736b8f70ffd3b5360330825ad47b26baf18b19a3caf6a2da70fa2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edit - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo " ";
        
        $__internal_a1ded16b9736b8f70ffd3b5360330825ad47b26baf18b19a3caf6a2da70fa2d9->leave($__internal_a1ded16b9736b8f70ffd3b5360330825ad47b26baf18b19a3caf6a2da70fa2d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c227e9c0b0951ba4d87e6d7dda614bd7662d1a4094337a19a6f3db3aae013338 = $this->env->getExtension("native_profiler");
        $__internal_c227e9c0b0951ba4d87e6d7dda614bd7662d1a4094337a19a6f3db3aae013338->enter($__internal_c227e9c0b0951ba4d87e6d7dda614bd7662d1a4094337a19a6f3db3aae013338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "<br>
    <p>";
        // line 7
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "<br>
        ";
        // line 8
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array())) {
            // line 9
            echo "           <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\" ><br>
        ";
        }
        // line 11
        echo "    <hr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 13
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
        // line 16
        echo "        <em>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-yy"), "html", null, true);
        echo "</em>
        <a class=\"btn btn-warning\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modify", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier &rarr;</a>
        <a class=\"btn btn-warning\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer &rarr;</a>
    
    <p>
";
        
        $__internal_c227e9c0b0951ba4d87e6d7dda614bd7662d1a4094337a19a6f3db3aae013338->leave($__internal_c227e9c0b0951ba4d87e6d7dda614bd7662d1a4094337a19a6f3db3aae013338_prof);

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
        return array (  106 => 18,  102 => 17,  97 => 16,  83 => 13,  79 => 12,  76 => 11,  68 => 9,  66 => 8,  62 => 7,  57 => 6,  51 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "blog/layout.html.twig" %}*/
/* */
/* {% block title %} {{parent()}} - Edit - {{article.titre}} {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{article.id}}<br>*/
/*     <p>{{article.contenu | raw}}<br>*/
/*         {% if article.image %}*/
/*            <img src="{{article.image.url}}" alt="{{article.image.alt}}" ><br>*/
/*         {% endif %}*/
/*     <hr>*/
/*         {% for comment in comments  %}*/
/*             {{comment.getContenu()}} ecrit par {{comment.getAuteur()}} le {{comment.getDate().format("d-m-yy")}};*/
/*             <br>*/
/*         {% endfor %}*/
/*         <em>{{article.date|date("d-m-yy")}}</em>*/
/*         <a class="btn btn-warning" href="{{path('blog_modify', {id:article.id})}}">Modifier &rarr;</a>*/
/*         <a class="btn btn-warning" href="{{path('blog_delete', {id:article.id})}}">Supprimer &rarr;</a>*/
/*     */
/*     <p>*/
/* {% endblock %}*/
/* */
