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
        $__internal_ad33814c2321494c10c6ed9865dbe5dd87f2e76c18641b9d73ac43aa270d68a0 = $this->env->getExtension("native_profiler");
        $__internal_ad33814c2321494c10c6ed9865dbe5dd87f2e76c18641b9d73ac43aa270d68a0->enter($__internal_ad33814c2321494c10c6ed9865dbe5dd87f2e76c18641b9d73ac43aa270d68a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <footer>
                 ";
        // line 66
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
        // line 82
        $this->displayBlock('javascript', $context, $blocks);
        // line 83
        echo "    
   
        ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "  </body>
  
</html>
";
        
        $__internal_ad33814c2321494c10c6ed9865dbe5dd87f2e76c18641b9d73ac43aa270d68a0->leave($__internal_ad33814c2321494c10c6ed9865dbe5dd87f2e76c18641b9d73ac43aa270d68a0_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_872f0257bc7253ac8e0fa86b257c03e253b15421c998c60fa6830195e268863b = $this->env->getExtension("native_profiler");
        $__internal_872f0257bc7253ac8e0fa86b257c03e253b15421c998c60fa6830195e268863b->enter($__internal_872f0257bc7253ac8e0fa86b257c03e253b15421c998c60fa6830195e268863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP Symfony ";
        
        $__internal_872f0257bc7253ac8e0fa86b257c03e253b15421c998c60fa6830195e268863b->leave($__internal_872f0257bc7253ac8e0fa86b257c03e253b15421c998c60fa6830195e268863b_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e545b56d0349979368b3892445195c280c98915a2a529924e8477524373b7fd0 = $this->env->getExtension("native_profiler");
        $__internal_e545b56d0349979368b3892445195c280c98915a2a529924e8477524373b7fd0->enter($__internal_e545b56d0349979368b3892445195c280c98915a2a529924e8477524373b7fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e545b56d0349979368b3892445195c280c98915a2a529924e8477524373b7fd0->leave($__internal_e545b56d0349979368b3892445195c280c98915a2a529924e8477524373b7fd0_prof);

    }

    // line 57
    public function block_layout($context, array $blocks = array())
    {
        $__internal_cfe8150a74e58365d7a1ed7ec7e38fc99420e140c92571b107a53cce3b8dd803 = $this->env->getExtension("native_profiler");
        $__internal_cfe8150a74e58365d7a1ed7ec7e38fc99420e140c92571b107a53cce3b8dd803->enter($__internal_cfe8150a74e58365d7a1ed7ec7e38fc99420e140c92571b107a53cce3b8dd803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 58
        echo "      
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br>
            All you get is this text and a mostly barebones HTML document.</p>
      
       ";
        
        $__internal_cfe8150a74e58365d7a1ed7ec7e38fc99420e140c92571b107a53cce3b8dd803->leave($__internal_cfe8150a74e58365d7a1ed7ec7e38fc99420e140c92571b107a53cce3b8dd803_prof);

    }

    // line 82
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1e361da91adf3b28ec7ddba1e538bed99c199899019a80dcc96864a32fe50b8c = $this->env->getExtension("native_profiler");
        $__internal_1e361da91adf3b28ec7ddba1e538bed99c199899019a80dcc96864a32fe50b8c->enter($__internal_1e361da91adf3b28ec7ddba1e538bed99c199899019a80dcc96864a32fe50b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_1e361da91adf3b28ec7ddba1e538bed99c199899019a80dcc96864a32fe50b8c->leave($__internal_1e361da91adf3b28ec7ddba1e538bed99c199899019a80dcc96864a32fe50b8c_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59ad9880f525224f2ff27dea1be80c4d73ee0434f1837316bd986f23473cceda = $this->env->getExtension("native_profiler");
        $__internal_59ad9880f525224f2ff27dea1be80c4d73ee0434f1837316bd986f23473cceda->enter($__internal_59ad9880f525224f2ff27dea1be80c4d73ee0434f1837316bd986f23473cceda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_59ad9880f525224f2ff27dea1be80c4d73ee0434f1837316bd986f23473cceda->leave($__internal_59ad9880f525224f2ff27dea1be80c4d73ee0434f1837316bd986f23473cceda_prof);

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
        return array (  189 => 85,  178 => 82,  166 => 58,  160 => 57,  149 => 15,  137 => 13,  127 => 86,  125 => 85,  121 => 83,  119 => 82,  100 => 66,  96 => 64,  94 => 57,  51 => 16,  49 => 15,  45 => 14,  41 => 13,  27 => 1,);
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
