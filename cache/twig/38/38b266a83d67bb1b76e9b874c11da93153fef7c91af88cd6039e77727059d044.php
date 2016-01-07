<?php

/* partials/messages.html.twig */
class __TwigTemplate_77a75614f4bd4494d62a9bebc987c10c92570d0078c2c7fcff69503a315d9b3a extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "messages", array()), "fetch", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", array()));
            echo " alert\">";
            echo $this->getAttribute($context["message"], "message", array());
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% for message in grav.messages.fetch %}*/
/* <div class="{{ message.scope|e }} alert">{{ message.message }}</div>*/
/* {% endfor %}*/
