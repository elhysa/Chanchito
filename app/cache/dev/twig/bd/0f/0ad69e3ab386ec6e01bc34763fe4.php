<?php

/* ChanchitoBundle::layout.html.twig */
class __TwigTemplate_bd0f0ad69e3ab386ec6e01bc34763fe4 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "::base.html.twig";
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
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Chanchito wii!!</h1>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "        ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function getTemplateName()
    {
        return "ChanchitoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
