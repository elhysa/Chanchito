<?php

/* ChanchitoBundle:Asistencia:show.html.twig */
class __TwigTemplate_9575af80a334ad40173a8cf5983ff0ac extends Twig_Template
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
        echo "Listado de Registro de Asistencias";
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
        echo "    <table>
        <thead>
        <tr>
            <th>Fecha Asistencia</th>
            <th>Participante</th>
            <th>Hora Sistema</th>    
            <th>Hora Usuario</th>    
            <th>Motivo Diferencia Hora</th>
            <th>Monto a Pagar</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'listadoAsistencia'));
        foreach ($context['_seq'] as $context['_key'] => $context['asistencia']) {
            // line 21
            echo "        <tr>

            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'asistencia'), "fechaAsistencia", array(), "any", false), "d/m/Y"), "html");
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'asistencia'), "usuarios", array(), "any", false), "obtenerNombreCompleto", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'asistencia'), "registroReal", array(), "any", false), "h:i:s"), "html");
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'asistencia'), "registroUsuario", array(), "any", false), "h:i:s"), "html");
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'asistencia'), "motivo", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'asistencia'), "obtenerMontoAsistencia", array(), "method", false), "html");
            echo "</td>
        </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asistencia'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ChanchitoBundle:Asistencia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
