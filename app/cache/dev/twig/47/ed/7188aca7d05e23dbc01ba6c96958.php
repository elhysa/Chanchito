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
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Registro de asistencia</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ChanchitoBundle_registro"), "html");
        echo "\" method='post'>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
        <input type=\"submit\" label=\"Registrar Asistencia\"/>
</form>

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
