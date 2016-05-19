<?php

/* base.html.twig */
class __TwigTemplate_48d360afa1c1253dfe7b424cdc27d97849421acff05ef85b2d0c4505eb32f05f extends Twig_Template
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
        $__internal_160e5f2a8c4254f79aa535e97944a2b8649fdcf8f2b6b8e196ed84db2f48392e = $this->env->getExtension("native_profiler");
        $__internal_160e5f2a8c4254f79aa535e97944a2b8649fdcf8f2b6b8e196ed84db2f48392e->enter($__internal_160e5f2a8c4254f79aa535e97944a2b8649fdcf8f2b6b8e196ed84db2f48392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li class=\"active\"><a href=\"index/1\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      
        
    <div class=\"container\">
      
      <div class=\"starter-template\">
      ";
        // line 57
        $this->displayBlock('layout', $context, $blocks);
        // line 64
        echo "         
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
        // line 79
        $this->displayBlock('javascript', $context, $blocks);
        // line 80
        echo "    
   
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "  </body>

</html>
";
        
        $__internal_160e5f2a8c4254f79aa535e97944a2b8649fdcf8f2b6b8e196ed84db2f48392e->leave($__internal_160e5f2a8c4254f79aa535e97944a2b8649fdcf8f2b6b8e196ed84db2f48392e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_9763e576169bd9bb09e20f4053effbc820e726de34032766277c7e351767fa15 = $this->env->getExtension("native_profiler");
        $__internal_9763e576169bd9bb09e20f4053effbc820e726de34032766277c7e351767fa15->enter($__internal_9763e576169bd9bb09e20f4053effbc820e726de34032766277c7e351767fa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP Symfony ";
        
        $__internal_9763e576169bd9bb09e20f4053effbc820e726de34032766277c7e351767fa15->leave($__internal_9763e576169bd9bb09e20f4053effbc820e726de34032766277c7e351767fa15_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0eceb4c3be7f6a371d526f3f5a6445e5935e12c2281006354828dd2c96284ff0 = $this->env->getExtension("native_profiler");
        $__internal_0eceb4c3be7f6a371d526f3f5a6445e5935e12c2281006354828dd2c96284ff0->enter($__internal_0eceb4c3be7f6a371d526f3f5a6445e5935e12c2281006354828dd2c96284ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0eceb4c3be7f6a371d526f3f5a6445e5935e12c2281006354828dd2c96284ff0->leave($__internal_0eceb4c3be7f6a371d526f3f5a6445e5935e12c2281006354828dd2c96284ff0_prof);

    }

    // line 57
    public function block_layout($context, array $blocks = array())
    {
        $__internal_591bd84f5210dfe293860124e69083ee8b99c179f1f962df8e17e2be6ae9a358 = $this->env->getExtension("native_profiler");
        $__internal_591bd84f5210dfe293860124e69083ee8b99c179f1f962df8e17e2be6ae9a358->enter($__internal_591bd84f5210dfe293860124e69083ee8b99c179f1f962df8e17e2be6ae9a358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 58
        echo "      
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br>
            All you get is this text and a mostly barebones HTML document.</p>
      
       ";
        
        $__internal_591bd84f5210dfe293860124e69083ee8b99c179f1f962df8e17e2be6ae9a358->leave($__internal_591bd84f5210dfe293860124e69083ee8b99c179f1f962df8e17e2be6ae9a358_prof);

    }

    // line 79
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9898cb1b8e294ef94071765b0901c9b369b73f23dd069c09c0276f4d7d010a4a = $this->env->getExtension("native_profiler");
        $__internal_9898cb1b8e294ef94071765b0901c9b369b73f23dd069c09c0276f4d7d010a4a->enter($__internal_9898cb1b8e294ef94071765b0901c9b369b73f23dd069c09c0276f4d7d010a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_9898cb1b8e294ef94071765b0901c9b369b73f23dd069c09c0276f4d7d010a4a->leave($__internal_9898cb1b8e294ef94071765b0901c9b369b73f23dd069c09c0276f4d7d010a4a_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_858b225ebec5aa9830f5648f3dfa505d265d31511ff48eaca9bb45436f9b15f8 = $this->env->getExtension("native_profiler");
        $__internal_858b225ebec5aa9830f5648f3dfa505d265d31511ff48eaca9bb45436f9b15f8->enter($__internal_858b225ebec5aa9830f5648f3dfa505d265d31511ff48eaca9bb45436f9b15f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_858b225ebec5aa9830f5648f3dfa505d265d31511ff48eaca9bb45436f9b15f8->leave($__internal_858b225ebec5aa9830f5648f3dfa505d265d31511ff48eaca9bb45436f9b15f8_prof);

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
        return array (  183 => 82,  172 => 79,  160 => 58,  154 => 57,  143 => 15,  131 => 13,  121 => 83,  119 => 82,  115 => 80,  113 => 79,  96 => 64,  94 => 57,  51 => 16,  49 => 15,  45 => 14,  41 => 13,  27 => 1,);
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
/*             <li class="active"><a href="index/1">Home</a></li>*/
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
/* */
/* </html>*/
/* */
