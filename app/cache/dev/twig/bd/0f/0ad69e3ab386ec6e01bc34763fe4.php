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
        echo "\">Chanchito</a></h1>
  <nav class=\"grid_10\">
      <ul>
          <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ranking_puntual"), "html");
        echo "\">El puntual</a></li>        
          <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ranking_tarde"), "html");
        echo "\">El tardón</a></li>
          <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ranking_monto"), "html");
        echo "\">El aportador</a></li>
          
        ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_homepage"), "html");
            echo "\">Mantenimientos</a></li>
        ";
        } else {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) ? ($this->env->getExtension('routing')->getPath("perfil")) : ($this->env->getExtension('routing')->getPath("login"))), "html");
            echo "\">";
            echo (($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) ? ("Mi perfil") : ("Ingresar"));
            echo "</a></li>            
        ";
        }
        // line 21
        echo "

        ";
        // line 23
        if ($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) {
            // line 24
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "html");
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html");
            echo "\">Salir</a></li>
        ";
        }
        // line 25
        echo "          
      </ul>          
  </nav>  
</header>
  <nav class=\"grid_10\">
      <ul></ul>        
  </nav>
  
";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
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
