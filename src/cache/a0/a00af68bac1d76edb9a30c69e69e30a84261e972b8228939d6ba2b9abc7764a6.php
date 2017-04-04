<?php

/* login.html.twig */
class __TwigTemplate_b2df9535c2c48121dae78142b220173b01382ba50d57a088b6f1fda6ffcf16d1 extends Twig_Template
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
        $this->loadTemplate("base.html.twig", "login.html.twig", 1)->display($context);
        // line 2
        echo "
<div>
    <form action=\"/index.php/login\" method=\"post\">
        <div>
            <label for=\"login\">login</label>
            <input type=\"text\" id=\"login\" name=\"_login\" required=\"required\"/>
        </div>

        <div>
            <label for=\"password\">password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
        </div>

        <input type=\"submit\" value=\"submit\"/>
    </form>
</div>
<div>
        ";
        // line 19
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo " <br>
</div>";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 19,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "/home/yevhen/PhpstormProjects/TestTask/src/templates/login.html.twig");
    }
}
