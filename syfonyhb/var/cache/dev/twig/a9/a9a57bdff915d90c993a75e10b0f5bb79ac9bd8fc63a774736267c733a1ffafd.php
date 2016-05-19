<?php

/* blog/layout.html.twig */
class __TwigTemplate_b2d043d9e47d5c1cfd439c538224db43b3639323df3b43a58d416bf5df1b745e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'layout' => array($this, 'block_layout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5763ae40593894eea3174df33cd2def46d27cedfbc93dec5156fc152c370a155 = $this->env->getExtension("native_profiler");
        $__internal_5763ae40593894eea3174df33cd2def46d27cedfbc93dec5156fc152c370a155->enter($__internal_5763ae40593894eea3174df33cd2def46d27cedfbc93dec5156fc152c370a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5763ae40593894eea3174df33cd2def46d27cedfbc93dec5156fc152c370a155->leave($__internal_5763ae40593894eea3174df33cd2def46d27cedfbc93dec5156fc152c370a155_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed43e82d5b4c1605a25b8ea5b06693e25d96a237e1d151dcfa288f558c00e210 = $this->env->getExtension("native_profiler");
        $__internal_ed43e82d5b4c1605a25b8ea5b06693e25d96a237e1d151dcfa288f558c00e210->enter($__internal_ed43e82d5b4c1605a25b8ea5b06693e25d96a237e1d151dcfa288f558c00e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Blog ";
        
        $__internal_ed43e82d5b4c1605a25b8ea5b06693e25d96a237e1d151dcfa288f558c00e210->leave($__internal_ed43e82d5b4c1605a25b8ea5b06693e25d96a237e1d151dcfa288f558c00e210_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_e5084ef91528d30c77ad6e91ba8d010d8d476af64694a535296509173fedd764 = $this->env->getExtension("native_profiler");
        $__internal_e5084ef91528d30c77ad6e91ba8d010d8d476af64694a535296509173fedd764->enter($__internal_e5084ef91528d30c77ad6e91ba8d010d8d476af64694a535296509173fedd764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "    <h1> Blog </h1>
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "    
      <footer class=\"footer\">
                 ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Blog:Footer"));
        echo "
      </footer>
";
        
        $__internal_e5084ef91528d30c77ad6e91ba8d010d8d476af64694a535296509173fedd764->leave($__internal_e5084ef91528d30c77ad6e91ba8d010d8d476af64694a535296509173fedd764_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ab345b44c4877a94bec72adf48d5c455d08ffcb2c158fc174c314705fdbe57a = $this->env->getExtension("native_profiler");
        $__internal_2ab345b44c4877a94bec72adf48d5c455d08ffcb2c158fc174c314705fdbe57a->enter($__internal_2ab345b44c4877a94bec72adf48d5c455d08ffcb2c158fc174c314705fdbe57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ab345b44c4877a94bec72adf48d5c455d08ffcb2c158fc174c314705fdbe57a->leave($__internal_2ab345b44c4877a94bec72adf48d5c455d08ffcb2c158fc174c314705fdbe57a_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 5,  65 => 8,  61 => 6,  59 => 5,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block title %} {{parent()}} - Blog {% endblock %}*/
/* {% block layout %}*/
/*     <h1> Blog </h1>*/
/*     {% block body %}{% endblock %}*/
/*     */
/*       <footer class="footer">*/
/*                  {{render(controller("AppBundle:Blog:Footer")) }}*/
/*       </footer>*/
/* {% endblock %}*/
/* */
