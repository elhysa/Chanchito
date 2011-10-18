<?php

/* ChanchitoBundle:Asistencia:show.html.twig */
class __TwigTemplate_9575af80a334ad40173a8cf5983ff0ac extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "
<table border=1 >
    <tr>
        <th>Fecha Asistencia</th>
        <th>Participante</th>
        <th>Hora Sistema</th>    
        <th>Hora Usuario</th>    
        <th>Motivo Diferencia Hora</th>
        <th>Monto a Pagar</th>
    </tr>
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'listadoAsistencia'));
        foreach ($context['_seq'] as $context['_key'] => $context['asistencia']) {
            // line 12
            echo "    <tr>
        
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'asistencia'), "fechaAsistencia", array(), "any", false), "d/m/Y"), "html");
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'asistencia'), "usuario", array(), "any", false), "obtenerNombreCompleto", array(), "any", false), "html");
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'asistencia'), "registroReal", array(), "any", false), "h:i:s"), "html");
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'asistencia'), "registroUsuario", array(), "any", false), "h:i:s"), "html");
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'asistencia'), "motivo", array(), "any", false), "html");
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'asistencia'), "obtenerMontoAsistencia", array(), "method", false), "html");
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asistencia'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "</table>

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
