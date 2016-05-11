<?php

/* base.html.twig */
class __TwigTemplate_f42bf389dc531fa36e2772a949a067272e2191705b4c8444cbd7123913a29a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'javascript' => array($this, 'block_javascript'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60e5250d46de0e21415502b37397c02b6833852ec90a40110e7713c3e4c7a9be = $this->env->getExtension("native_profiler");
        $__internal_60e5250d46de0e21415502b37397c02b6833852ec90a40110e7713c3e4c7a9be->enter($__internal_60e5250d46de0e21415502b37397c02b6833852ec90a40110e7713c3e4c7a9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/starter-template.css"), "html", null, true);
        echo "\">
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    
   
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

</head>

  <body>

      
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      
        
    <div class=\"container\">
      
      <div class=\"starter-template\">
      ";
        // line 58
        $this->displayBlock('layout', $context, $blocks);
        // line 65
        echo "         
        <footer>
                 ";
        // line 67
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Blog:Footer"));
        echo "
        </footer>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    
    <!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    ";
        // line 83
        $this->displayBlock('javascript', $context, $blocks);
        // line 84
        echo "    
   
        ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "  </body>
  
</html>
";
        
        $__internal_60e5250d46de0e21415502b37397c02b6833852ec90a40110e7713c3e4c7a9be->leave($__internal_60e5250d46de0e21415502b37397c02b6833852ec90a40110e7713c3e4c7a9be_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_085983e5c98bcc0c942858a9f3ac8c04977c7874131f5973936a0fae4f99e98f = $this->env->getExtension("native_profiler");
        $__internal_085983e5c98bcc0c942858a9f3ac8c04977c7874131f5973936a0fae4f99e98f->enter($__internal_085983e5c98bcc0c942858a9f3ac8c04977c7874131f5973936a0fae4f99e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP Symfony ";
        
        $__internal_085983e5c98bcc0c942858a9f3ac8c04977c7874131f5973936a0fae4f99e98f->leave($__internal_085983e5c98bcc0c942858a9f3ac8c04977c7874131f5973936a0fae4f99e98f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7f57276bec78adbe841d59ec45c9fe65cf9f42597fac10c3ae214301b6e6dd3 = $this->env->getExtension("native_profiler");
        $__internal_c7f57276bec78adbe841d59ec45c9fe65cf9f42597fac10c3ae214301b6e6dd3->enter($__internal_c7f57276bec78adbe841d59ec45c9fe65cf9f42597fac10c3ae214301b6e6dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7f57276bec78adbe841d59ec45c9fe65cf9f42597fac10c3ae214301b6e6dd3->leave($__internal_c7f57276bec78adbe841d59ec45c9fe65cf9f42597fac10c3ae214301b6e6dd3_prof);

    }

    // line 58
    public function block_layout($context, array $blocks = array())
    {
        $__internal_b9e516515cb5fdf67026b4ffee04aacd394e9316f986a3e78cfa922e447f3b57 = $this->env->getExtension("native_profiler");
        $__internal_b9e516515cb5fdf67026b4ffee04aacd394e9316f986a3e78cfa922e447f3b57->enter($__internal_b9e516515cb5fdf67026b4ffee04aacd394e9316f986a3e78cfa922e447f3b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 59
        echo "      
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br>
            All you get is this text and a mostly barebones HTML document.</p>
      
       ";
        
        $__internal_b9e516515cb5fdf67026b4ffee04aacd394e9316f986a3e78cfa922e447f3b57->leave($__internal_b9e516515cb5fdf67026b4ffee04aacd394e9316f986a3e78cfa922e447f3b57_prof);

    }

    // line 83
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8b887b3a13177c529896b042d796205d83f50b62db8e1be0a3b2f49fd9bcd662 = $this->env->getExtension("native_profiler");
        $__internal_8b887b3a13177c529896b042d796205d83f50b62db8e1be0a3b2f49fd9bcd662->enter($__internal_8b887b3a13177c529896b042d796205d83f50b62db8e1be0a3b2f49fd9bcd662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_8b887b3a13177c529896b042d796205d83f50b62db8e1be0a3b2f49fd9bcd662->leave($__internal_8b887b3a13177c529896b042d796205d83f50b62db8e1be0a3b2f49fd9bcd662_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16b018d39027956e2d52278c2e56cb5cd6f7d41ae481ffed089c431d02902798 = $this->env->getExtension("native_profiler");
        $__internal_16b018d39027956e2d52278c2e56cb5cd6f7d41ae481ffed089c431d02902798->enter($__internal_16b018d39027956e2d52278c2e56cb5cd6f7d41ae481ffed089c431d02902798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16b018d39027956e2d52278c2e56cb5cd6f7d41ae481ffed089c431d02902798->leave($__internal_16b018d39027956e2d52278c2e56cb5cd6f7d41ae481ffed089c431d02902798_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 86,  179 => 83,  167 => 59,  161 => 58,  150 => 15,  138 => 13,  128 => 87,  126 => 86,  122 => 84,  120 => 83,  101 => 67,  97 => 65,  95 => 58,  51 => 16,  49 => 15,  45 => 14,  41 => 13,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     */
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}TP Symfony {% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{asset("css/starter-template.css")}}">*/
/*     {% block stylesheets %}{% endblock %}*/
/*     */
/*    */
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* */
/* </head>*/
/* */
/*   <body>*/
/* */
/*       */
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">Project name</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="#">Home</a></li>*/
/*             <li><a href="#about">About</a></li>*/
/*             <li><a href="#contact">Contact</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*       */
/*         */
/*     <div class="container">*/
/*       */
/*       <div class="starter-template">*/
/*       {% block layout %}*/
/*       */
/*         <h1>Bootstrap starter template</h1>*/
/*         <p class="lead">Use this document as a way to quickly start any new project.<br>*/
/*             All you get is this text and a mostly barebones HTML document.</p>*/
/*       */
/*        {% endblock %}*/
/*          */
/*         <footer>*/
/*                  {{render(controller("AppBundle:Blog:Footer")) }}*/
/*         </footer>*/
/*       </div>*/
/* */
/*     </div><!-- /.container -->*/
/* */
/* */
/*     <!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/*     <script src="../../dist/js/bootstrap.min.js"></script>*/
/*     */
/*     <!-- Latest compiled and minified JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     {% block javascript %}{% endblock %}*/
/*     */
/*    */
/*         {% block javascripts %}{% endblock %}*/
/*   </body>*/
/*   */
/* </html>*/
/* */
