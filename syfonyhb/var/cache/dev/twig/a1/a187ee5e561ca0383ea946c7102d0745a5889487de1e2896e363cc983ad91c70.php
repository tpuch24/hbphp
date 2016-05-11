<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a9ffaca91d1f05d09a548d696ab6f60b629062ded951be451ec982364dbfcb0e extends Twig_Template
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
        $__internal_7520384cb5bcde4c623bf51c299fd819b8a8d6c8c6b78ce592a3133db24abdf6 = $this->env->getExtension("native_profiler");
        $__internal_7520384cb5bcde4c623bf51c299fd819b8a8d6c8c6b78ce592a3133db24abdf6->enter($__internal_7520384cb5bcde4c623bf51c299fd819b8a8d6c8c6b78ce592a3133db24abdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7520384cb5bcde4c623bf51c299fd819b8a8d6c8c6b78ce592a3133db24abdf6->leave($__internal_7520384cb5bcde4c623bf51c299fd819b8a8d6c8c6b78ce592a3133db24abdf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
