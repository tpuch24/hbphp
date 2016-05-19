<?php

/* blog/footer.html.twig */
class __TwigTemplate_499d9879cb3632f4237fd6ba5563353a5a65985290e42047059b497731ba4f0c extends Twig_Template
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
        $__internal_7a5354d5bb28a236e96cdae487d201ab785cfb2cbfa9ac2e8fba6d1c552cab3c = $this->env->getExtension("native_profiler");
        $__internal_7a5354d5bb28a236e96cdae487d201ab785cfb2cbfa9ac2e8fba6d1c552cab3c->enter($__internal_7a5354d5bb28a236e96cdae487d201ab785cfb2cbfa9ac2e8fba6d1c552cab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/footer.html.twig"));

        // line 1
        echo " <hr>   
    <div class=\"container\">
       
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "           <p><em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-yy"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</em>
           <a class=\"btn btn-warning\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
           <p>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
";
        
        $__internal_7a5354d5bb28a236e96cdae487d201ab785cfb2cbfa9ac2e8fba6d1c552cab3c->leave($__internal_7a5354d5bb28a236e96cdae487d201ab785cfb2cbfa9ac2e8fba6d1c552cab3c_prof);

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
        return array (  47 => 9,  38 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*  <hr>   */
/*     <div class="container">*/
/*        */
/*         {% for article in articles %}*/
/*            <p><em>{{article.date|date("d-m-yy")}} - {{article.titre}}</em>*/
/*            <a class="btn btn-warning" href="{{path('blog_detail', {id:article.id})}}">Voir &rarr;</a>*/
/*            <p>*/
/*        {% endfor %}*/
/*     </div>*/
/* */
