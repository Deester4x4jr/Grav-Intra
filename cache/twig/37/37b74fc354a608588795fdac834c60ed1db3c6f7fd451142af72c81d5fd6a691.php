<?php

/* partials/login-form.html.twig */
class __TwigTemplate_f422b51cc8975163afe98676e50e66d47ca243f73165b7db0c55c0f64556811e extends Twig_Template
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
        $context["icons"] = array("Microsoft" => "windows");
        // line 2
        echo "
<section id=\"grav-login\">
    ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

    ";
        // line 6
        $this->loadTemplate("partials/messages.html.twig", "partials/login-form.html.twig", 6)->display($context);
        // line 7
        echo "
    <form method=\"post\" action=\"";
        // line 8
        echo ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "url", array()) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "form", array()), "action", array()));
        echo "\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["oauth"]) ? $context["oauth"] : null), "enabled", array())) {
            // line 10
            echo "            <div class=\"form-oauth button-group\">
                ";
            // line 12
            echo "                <input type=\"submit\" name=\"task\" value=\"login.login\" tabindex=\"-1\" />

                ";
            // line 15
            echo "                <p>";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OAUTH_CONNECT_MESSAGE");
            echo "
                ";
            // line 16
            if ((count($this->getAttribute((isset($context["oauth"]) ? $context["oauth"] : null), "providers", array())) > 4)) {
                // line 17
                echo "                    ";
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OR");
                echo " <label for=\"oauth-input\">";
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OAUTH_CONNECT_MESSAGE_EXTRA");
                echo "</label></p>
                    <input type=\"checkbox\" id=\"oauth-input\" />
                    <ul class=\"oauth-provider-extra\">
                        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["oauth"]) ? $context["oauth"] : null), "providers", array()), 4, null));
                foreach ($context['_seq'] as $context["provider"] => $context["credentials"]) {
                    // line 21
                    echo "                            ";
                    $context["icon"] = (($this->getAttribute((isset($context["icons"]) ? $context["icons"] : null), $context["provider"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["icons"]) ? $context["icons"] : null), $context["provider"], array(), "array"), twig_lower_filter($this->env, $context["provider"]))) : (twig_lower_filter($this->env, $context["provider"])));
                    // line 22
                    echo "                            <li><button name=\"oauth\" value=\"";
                    echo $context["provider"];
                    echo "\" type=\"submit\" class=\"button ";
                    echo twig_lower_filter($this->env, $context["provider"]);
                    echo "\" href=\"";
                    echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                    echo "/login/oauth";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $context["provider"];
                    echo "\" title=\"";
                    echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OAUTH_LOGIN", ucwords($context["provider"]));
                    echo "\"><i class=\"fa fa-";
                    echo (isset($context["icon"]) ? $context["icon"] : null);
                    echo "\"></i> ";
                    echo ucwords($context["provider"]);
                    echo "</button></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['provider'], $context['credentials'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                    </ul>
                ";
            } else {
                // line 26
                echo "                    </p>
                ";
            }
            // line 28
            echo "
                <ul class=\"oauth-provider\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["oauth"]) ? $context["oauth"] : null), "providers", array()), 0, 4));
            foreach ($context['_seq'] as $context["provider"] => $context["credentials"]) {
                // line 31
                echo "                        ";
                $context["icon"] = (($this->getAttribute((isset($context["icons"]) ? $context["icons"] : null), $context["provider"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["icons"]) ? $context["icons"] : null), $context["provider"], array(), "array"), twig_lower_filter($this->env, $context["provider"]))) : (twig_lower_filter($this->env, $context["provider"])));
                // line 32
                echo "                        <li><button name=\"oauth\" value=\"";
                echo $context["provider"];
                echo "\" type=\"submit\" class=\"button ";
                echo twig_lower_filter($this->env, $context["provider"]);
                echo "\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/login/oauth";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["provider"];
                echo "\" title=\"";
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OAUTH_LOGIN", ucwords($context["provider"]));
                echo "\"><i class=\"fa fa-";
                echo (isset($context["icon"]) ? $context["icon"] : null);
                echo "\"></i> ";
                echo ucwords($context["provider"]);
                echo "</button></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['provider'], $context['credentials'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </ul>
            </div>
            <span class=\"delimiter\">";
            // line 36
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OR");
            echo "</span>
            <p>";
            // line 37
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.OAUTH_SIGNIN");
            echo "</p>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "form", array()), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 41
            echo "            ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 42
                echo "                <div>
                    ";
                // line 43
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/login-form.html.twig", 43)->display($context);
                // line 44
                echo "                </div>
            ";
            }
            // line 46
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        <div class=\"form-actions secondary-accent\">
            ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "rememberme", array()), "enabled", array())) {
            // line 49
            echo "                <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                    <div class=\"form-input-wrapper\">
                        <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                        <label class=\"inline\" for=\"#rememberme\" title=\"";
            // line 52
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.REMEMBER_ME_HELP");
            echo "\">";
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.REMEMBER_ME");
            echo "</label>
                    </div>
                </div>
            ";
        }
        // line 56
        echo "
            <a class=\"button secondary\" href=\"";
        // line 57
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "route_forgot", array());
        echo "\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.BTN_FORGOT");
        echo "</a>

            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\"></i> ";
        // line 59
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGIN");
        echo "</button>
        </div>

        ";
        // line 62
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("login-form", "login-form-nonce");
        echo "
    </form>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 62,  223 => 59,  215 => 57,  212 => 56,  203 => 52,  198 => 49,  196 => 48,  193 => 47,  179 => 46,  175 => 44,  173 => 43,  170 => 42,  167 => 41,  150 => 40,  147 => 39,  142 => 37,  138 => 36,  134 => 34,  112 => 32,  109 => 31,  105 => 30,  101 => 28,  97 => 26,  93 => 24,  71 => 22,  68 => 21,  64 => 20,  55 => 17,  53 => 16,  48 => 15,  44 => 12,  41 => 10,  39 => 9,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set icons = {'Microsoft': 'windows'} %}*/
/* */
/* <section id="grav-login">*/
/*     {{ content }}*/
/* */
/*     {% include 'partials/messages.html.twig' %}*/
/* */
/*     <form method="post" action="{{ uri.url ~ page.header.form.action}}">*/
/*         {% if oauth.enabled %}*/
/*             <div class="form-oauth button-group">*/
/*                 {# Create hidden duplicate of submit button to designate it as default #}*/
/*                 <input type="submit" name="task" value="login.login" tabindex="-1" />*/
/* */
/*                 {# Show OAuth authentication providers #}*/
/*                 <p>{{ 'PLUGIN_LOGIN.OAUTH_CONNECT_MESSAGE'|t }}*/
/*                 {% if oauth.providers|count > 4 %}*/
/*                     {{ 'PLUGIN_LOGIN.OR'|t }} <label for="oauth-input">{{ 'PLUGIN_LOGIN.OAUTH_CONNECT_MESSAGE_EXTRA'|t }}</label></p>*/
/*                     <input type="checkbox" id="oauth-input" />*/
/*                     <ul class="oauth-provider-extra">*/
/*                         {% for provider,credentials in oauth.providers[4:] %}*/
/*                             {% set icon = icons[provider]|default(provider|lower) %}*/
/*                             <li><button name="oauth" value="{{ provider }}" type="submit" class="button {{ provider|lower }}" href="{{ base_url_relative }}/login/oauth{{ config.system.param_sep }}{{ provider }}" title="{{ 'PLUGIN_LOGIN.OAUTH_LOGIN'|t(provider|ucwords) }}"><i class="fa fa-{{ icon }}"></i> {{ provider|ucwords }}</button></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     </p>*/
/*                 {% endif %}*/
/* */
/*                 <ul class="oauth-provider">*/
/*                     {% for provider,credentials in oauth.providers[:4] %}*/
/*                         {% set icon = icons[provider]|default(provider|lower) %}*/
/*                         <li><button name="oauth" value="{{ provider }}" type="submit" class="button {{ provider|lower }}" href="{{ base_url_relative }}/login/oauth{{ config.system.param_sep }}{{ provider }}" title="{{ 'PLUGIN_LOGIN.OAUTH_LOGIN'|t(provider|ucwords) }}"><i class="fa fa-{{ icon }}"></i> {{ provider|ucwords }}</button></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             <span class="delimiter">{{ 'PLUGIN_LOGIN.OR'|t }}</span>*/
/*             <p>{{ 'PLUGIN_LOGIN.OAUTH_SIGNIN'|t }}</p>*/
/*         {% endif %}*/
/* */
/*         {% for field in page.header.form.fields %}*/
/*             {% if field.type %}*/
/*                 <div>*/
/*                     {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         <div class="form-actions secondary-accent">*/
/*             {% if config.plugins.login.rememberme.enabled %}*/
/*                 <div class="form-data rememberme" data-grav-default="null" data-grav-disabled="true" data-grav-field="checkbox">*/
/*                     <div class="form-input-wrapper">*/
/*                         <input type="checkbox" value="1" name="rememberme" id="#rememberme">*/
/*                         <label class="inline" for="#rememberme" title="{{ 'PLUGIN_LOGIN.REMEMBER_ME_HELP'|t }}">{{ 'PLUGIN_LOGIN.REMEMBER_ME'|t }}</label>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <a class="button secondary" href="{{ base_url_relative }}{{ config.plugins.login.route_forgot }}"><i class="fa fa-exclamation-circle"></i> {{ 'PLUGIN_LOGIN.BTN_FORGOT'|t }}</a>*/
/* */
/*             <button type="submit" class="button primary" name="task" value="login.login"><i class="fa fa-sign-in"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>*/
/*         </div>*/
/* */
/*         {{ nonce_field('login-form', 'login-form-nonce') }}*/
/*     </form>*/
/* </section>*/
/* */
