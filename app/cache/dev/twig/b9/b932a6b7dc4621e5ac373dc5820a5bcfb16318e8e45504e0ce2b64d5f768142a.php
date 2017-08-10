<?php

/* index.html.twig */
class __TwigTemplate_44a3b8a264f17e990181d608d3f325d441d7bdcb0564c95c893ae70e84ca5617 extends Twig_Template
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
        $__internal_e152f41021da530db7623fb34fad86b2d684a571b90db4be24e66bcfb85b5cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e152f41021da530db7623fb34fad86b2d684a571b90db4be24e66bcfb85b5cb0->enter($__internal_e152f41021da530db7623fb34fad86b2d684a571b90db4be24e66bcfb85b5cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
</head>
<body>
<h1>Hello Microkernel ";
        // line 8
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
</body>
</html>";
        
        $__internal_e152f41021da530db7623fb34fad86b2d684a571b90db4be24e66bcfb85b5cb0->leave($__internal_e152f41021da530db7623fb34fad86b2d684a571b90db4be24e66bcfb85b5cb0_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
</head>
<body>
<h1>Hello Microkernel {{ name }}</h1>
</body>
</html>", "index.html.twig", "/home/junior/Documentos/projetos/microkernel/app/Resources/views/index.html.twig");
    }
}
