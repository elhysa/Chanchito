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
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/chanchito/css/user.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<header>
  <h1 class=\"grid_6\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ChanchitoBundle_homepage"), "html");
        echo "\">Chanchito wii!!</a></h1>
</header>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
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
