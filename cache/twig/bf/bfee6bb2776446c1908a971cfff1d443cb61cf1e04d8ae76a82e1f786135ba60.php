<?php

/* login-private.html.twig */
class __TwigTemplate_0f574cf4e4459ad38048e653c268f658eda7ea1977b35459efc1d2481b534fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "login-private.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"login\">

    <h1>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "texts", array()), "h1", array());
        echo "</h1>
    <h2>";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "texts", array()), "h2", array());
        echo "</h2>

    ";
        // line 10
        if ((isset($context["login_error"]) ? $context["login_error"] : null)) {
            // line 11
            echo "    <div class=\"alert\">
        ";
            // line 12
            if (((isset($context["login_error"]) ? $context["login_error"] : null) == "fail")) {
                // line 13
                echo "        <blockquote>
            <p>";
                // line 14
                echo $this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "messages", array()), "fail", array());
                echo "</p>
        </blockquote>
        ";
            } elseif ((            // line 16
(isset($context["login_error"]) ? $context["login_error"] : null) == "error")) {
                // line 17
                echo "        <blockquote>
            <p>";
                // line 18
                echo $this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "messages", array()), "error", array());
                echo "</p>
        </blockquote>
        ";
            }
            // line 21
            echo "    </div>
    ";
        }
        // line 23
        echo "
    <form action=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slug", array());
        echo "\" method=\"post\" id=\"private\">
        <fieldset>

            <!-- Username input-->
            ";
        // line 28
        if (($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "enable_username", array()) == false)) {
            // line 29
            echo "            <input id=\"username\" name=\"username\" type=\"hidden\" placeholder=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "username", array()), "placeholder", array());
            echo "\" value=\"no_user\" />
            ";
        } else {
            // line 31
            echo "            <div>
                <label for=\"username\">";
            // line 32
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "username", array()), "label", array());
            echo "</label>
                <input id=\"username\" name=\"username\" type=\"text\" placeholder=\"";
            // line 33
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "username", array()), "placeholder", array());
            echo "\" />
            </div>
            ";
        }
        // line 36
        echo "
            <!-- Password input-->
            <div>
                <label for=\"password\">";
        // line 39
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "password", array()), "label", array());
        echo "</label>
                <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "password", array()), "placeholder", array());
        echo "\" />
            </div>

            <!-- Antispam input-->
            <div class=\"antispam-div\">
                <input id=\"antispam\" name=\"antispam\" type=\"text\" placeholder=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "antispam", array()), "placeholder", array());
        echo "\" />
            </div>

            <!-- Form actions -->
            <div class=\"buttons\">
                <button class=\"button\" type=\"submit\"> ";
        // line 50
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["privateconf"]) ? $context["privateconf"] : null), "fields", array()), "login", array()), "label", array());
        echo "</button>
            </div>

        </fieldset>

    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "login-private.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  123 => 45,  115 => 40,  111 => 39,  106 => 36,  100 => 33,  96 => 32,  93 => 31,  87 => 29,  85 => 28,  78 => 24,  75 => 23,  71 => 21,  65 => 18,  62 => 17,  60 => 16,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="login">*/
/* */
/*     <h1>{{ privateconf.texts.h1 }}</h1>*/
/*     <h2>{{ privateconf.texts.h2 }}</h2>*/
/* */
/*     {% if login_error %}*/
/*     <div class="alert">*/
/*         {% if login_error == 'fail'  %}*/
/*         <blockquote>*/
/*             <p>{{ privateconf.messages.fail }}</p>*/
/*         </blockquote>*/
/*         {% elseif login_error == 'error' %}*/
/*         <blockquote>*/
/*             <p>{{ privateconf.messages.error }}</p>*/
/*         </blockquote>*/
/*         {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ page.header.slug }}" method="post" id="private">*/
/*         <fieldset>*/
/* */
/*             <!-- Username input-->*/
/*             {% if privateconf.enable_username == false %}*/
/*             <input id="username" name="username" type="hidden" placeholder="{{ privateconf.fields.username.placeholder }}" value="no_user" />*/
/*             {% else %}*/
/*             <div>*/
/*                 <label for="username">{{ privateconf.fields.username.label }}</label>*/
/*                 <input id="username" name="username" type="text" placeholder="{{ privateconf.fields.username.placeholder }}" />*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- Password input-->*/
/*             <div>*/
/*                 <label for="password">{{ privateconf.fields.password.label }}</label>*/
/*                 <input id="password" name="password" type="password" placeholder="{{ privateconf.fields.password.placeholder }}" />*/
/*             </div>*/
/* */
/*             <!-- Antispam input-->*/
/*             <div class="antispam-div">*/
/*                 <input id="antispam" name="antispam" type="text" placeholder="{{ privateconf.fields.antispam.placeholder }}" />*/
/*             </div>*/
/* */
/*             <!-- Form actions -->*/
/*             <div class="buttons">*/
/*                 <button class="button" type="submit"> {{ privateconf.fields.login.label }}</button>*/
/*             </div>*/
/* */
/*         </fieldset>*/
/* */
/*     </form>*/
/* </div>*/
/* */
/* {% endblock %}*/
