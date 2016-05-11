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
        $__internal_42a3831605f701d2bb55cefaf1688b1c09915543d596685035236ea4e8394b9a = $this->env->getExtension("native_profiler");
        $__internal_42a3831605f701d2bb55cefaf1688b1c09915543d596685035236ea4e8394b9a->enter($__internal_42a3831605f701d2bb55cefaf1688b1c09915543d596685035236ea4e8394b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a3831605f701d2bb55cefaf1688b1c09915543d596685035236ea4e8394b9a->leave($__internal_42a3831605f701d2bb55cefaf1688b1c09915543d596685035236ea4e8394b9a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_119a6403ff580184243a66b02897fc33a9ec73e2b2bc0f11aae6e34b5bb55cc0 = $this->env->getExtension("native_profiler");
        $__internal_119a6403ff580184243a66b02897fc33a9ec73e2b2bc0f11aae6e34b5bb55cc0->enter($__internal_119a6403ff580184243a66b02897fc33a9ec73e2b2bc0f11aae6e34b5bb55cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index ";
        
        $__internal_119a6403ff580184243a66b02897fc33a9ec73e2b2bc0f11aae6e34b5bb55cc0->leave($__internal_119a6403ff580184243a66b02897fc33a9ec73e2b2bc0f11aae6e34b5bb55cc0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d77bcad31a7253fc13bd09612a3e339e62195e354211395000cb2248abeb9538 = $this->env->getExtension("native_profiler");
        $__internal_d77bcad31a7253fc13bd09612a3e339e62195e354211395000cb2248abeb9538->enter($__internal_d77bcad31a7253fc13bd09612a3e339e62195e354211395000cb2248abeb9538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                // line 13
                echo "           <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" ><br>
        ";
            }
            // line 15
            echo "        <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
    <p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d77bcad31a7253fc13bd09612a3e339e62195e354211395000cb2248abeb9538->leave($__internal_d77bcad31a7253fc13bd09612a3e339e62195e354211395000cb2248abeb9538_prof);

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
        return array (  84 => 15,  76 => 13,  74 => 12,  67 => 11,  63 => 10,  58 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
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
/*         {% if article.image %}*/
/*            <img src="{{article.image.url}}" alt="{{article.image.alt}}" ><br>*/
/*         {% endif %}*/
/*         <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*     <p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
