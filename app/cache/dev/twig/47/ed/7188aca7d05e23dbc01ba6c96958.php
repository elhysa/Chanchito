<?php

/* ChanchitoBundle:Asistencia:new.html.twig */
class __TwigTemplate_47ed7188aca7d05e23dbc01ba6c96958 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageid' => array($this, 'block_pageid'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "ChanchitoBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Registro de Asistencias";
    }

    // line 5
    public function block_pageid($context, array $blocks = array())
    {
        echo "user";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Registro de asistencia</h1>

<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ChanchitoBundle_registro"), "html");
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">

    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "

    <p>
        <input type=\"checkbox\" name=\"tieneMotivo\"  onclick=\"javascript:display()\" /> Tiene Motivo<br />
    </p>
    
    <div id=\"motivo\" style=\"display:none\">
        
    ";
        // line 20
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "registroUsuario", array(), "any", false));
        echo "
    <p>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "registroUsuario", array(), "any", false));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "registroUsuario", array(), "any", false));
        echo "
    </p>
    
    ";
        // line 26
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "motivo", array(), "any", false));
        echo "
    <p>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "motivo", array(), "any", false));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "motivo", array(), "any", false));
        echo "
    </p>
    
    </div>
  
    ";
        // line 34
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "_token", array(), "any", false));
        echo "
    ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "_token", array(), "any", false));
        echo "
        <input type=\"submit\" value=\"Registrar Asistencia\"/>
</form>

";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "<script type=\"text/javascript\">
function display()
{
    var elm = document.getElementById('motivo');
    
    if (elm.style.display == \"none\"){
        elm.style.display = \"\";}
    else{
        elm.style.display = \"none\";}
}
</script>
";
    }

    public function getTemplateName()
    {
        return "ChanchitoBundle:Asistencia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
