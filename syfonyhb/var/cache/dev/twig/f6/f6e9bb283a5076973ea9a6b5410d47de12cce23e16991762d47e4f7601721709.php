<?php

/* categorie/index.html.twig */
class __TwigTemplate_7f5bba078afa18163d1cdb7479ffeb7cdb5f98db4f3515e2afbfd0bd435893d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5628f28cbf190f4fc392cfcd92054c14121780d038db23bc5d4e8353abba8015 = $this->env->getExtension("native_profiler");
        $__internal_5628f28cbf190f4fc392cfcd92054c14121780d038db23bc5d4e8353abba8015->enter($__internal_5628f28cbf190f4fc392cfcd92054c14121780d038db23bc5d4e8353abba8015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5628f28cbf190f4fc392cfcd92054c14121780d038db23bc5d4e8353abba8015->leave($__internal_5628f28cbf190f4fc392cfcd92054c14121780d038db23bc5d4e8353abba8015_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_741e8c444494c46041439c951c3ad79f65e43facc5ff147d4f4a8be63b452418 = $this->env->getExtension("native_profiler");
        $__internal_741e8c444494c46041439c951c3ad79f65e43facc5ff147d4f4a8be63b452418->enter($__internal_741e8c444494c46041439c951c3ad79f65e43facc5ff147d4f4a8be63b452418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Admin_Categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Admin_Categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Admin_Categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Admin_Categorie_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_741e8c444494c46041439c951c3ad79f65e43facc5ff147d4f4a8be63b452418->leave($__internal_741e8c444494c46041439c951c3ad79f65e43facc5ff147d4f4a8be63b452418_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categorie list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('Admin_Categorie_show', { 'id': categorie.id }) }}">{{ categorie.id }}</a></td>*/
/*                 <td>{{ categorie.titre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('Admin_Categorie_show', { 'id': categorie.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('Admin_Categorie_edit', { 'id': categorie.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('Admin_Categorie_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
