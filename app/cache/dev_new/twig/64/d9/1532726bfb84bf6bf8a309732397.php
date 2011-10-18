<?php

/* ChanchitoBundle:Default:index.html.twig */
class __TwigTemplate_64d91532726bfb84bf6bf8a309732397 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ChanchitoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
