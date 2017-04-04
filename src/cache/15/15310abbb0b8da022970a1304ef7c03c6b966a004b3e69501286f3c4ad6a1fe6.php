<?php

/* registration.html.twig */
class __TwigTemplate_e17586d79e569ab958d87137a4325f004b3952353dc6f0f23c1c838064f2f849 extends Twig_Template
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
        $this->loadTemplate("base.html.twig", "registration.html.twig", 1)->display($context);
        // line 2
        echo "<div>
    <form action=\"/index.php/registration\" method=\"post\">
        <div>
            <label for=\"login\">login</label>
            <input type=\"text\" id=\"login\" name=\"_login\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "login", array()), "html", null, true);
        echo "\" required=\"required\"/>
        </div>
        <div>
            <label for=\"email\">email</label>
            <input type=\"email\" id=\"email\" name=\"_email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\"  required=\"required\"/>
        </div>
        <div>
            <label for=\"real_name\">real name</label>
            <input type=\"text\" id=\"real_name\" name=\"_real_name\"  value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "realName", array()), "html", null, true);
        echo "\" required=\"required\"/>
        </div>
        <div>
            <label for=\"birth_date\">birth day</label>
            <input type=\"date\" id=\"birth_date\" name=\"_birth_date\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "birthDate", array()), "html", null, true);
        echo "\" required=\"required\"/>
        </div>
        <div>
            <label for=\"country\">Country</label>
            <select id=\"country\" name=\"_country\" required=\"required\" >
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 24
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </select>
        </div>

        <div>
            <label for=\"password\">password</label>
            <input type=\"password\" id=\"password\" name=\"_password\"  required=\"required\"/>
        </div>
        <div>
            <input type=\"checkbox\" id=\"checked\" name=\"_checked\" value=\"1\" required=\"required\">
            <label for=\"checked\"> I`m agree</label>
        </div>
        <input type=\"submit\" value=\"submit\"/>
    </form>
    <div>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo " <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 43,  91 => 41,  87 => 40,  71 => 26,  60 => 24,  56 => 23,  48 => 18,  41 => 14,  34 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registration.html.twig", "/home/yevhen/PhpstormProjects/TestTask/src/templates/registration.html.twig");
    }
}
