<?php

/* blog/footer.html.twig */
class __TwigTemplate_5b7a933d2d7e081bdc620fd7a56e09a24706ca9efa992b1ee3bf52c472209499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8810486b9f29ae33d29fddc06da7e49b62f05622a216071de5f82d3ec55cc206 = $this->env->getExtension("native_profiler");
        $__internal_8810486b9f29ae33d29fddc06da7e49b62f05622a216071de5f82d3ec55cc206->enter($__internal_8810486b9f29ae33d29fddc06da7e49b62f05622a216071de5f82d3ec55cc206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/footer.html.twig"));

        // line 1
        echo " <hr>   
 ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "    <p><em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-yy"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</em>
    <a class=\"btn btn-warning\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
    <p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8810486b9f29ae33d29fddc06da7e49b62f05622a216071de5f82d3ec55cc206->leave($__internal_8810486b9f29ae33d29fddc06da7e49b62f05622a216071de5f82d3ec55cc206_prof);

    }

    public function getTemplateName()
    {
        return "blog/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*  <hr>   */
/*  {% for article in articles %}*/
/*     <p><em>{{article.date|date("d-m-yy")}} - {{article.titre}}</em>*/
/*     <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*     <p>*/
/*     {% endfor %}*/
/* */
