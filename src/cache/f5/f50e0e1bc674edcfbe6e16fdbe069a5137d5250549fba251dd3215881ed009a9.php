<?php

/* base.html.twig */
class __TwigTemplate_f61137277a5322629edcc77485efa18578abafb3e57444bd4981fc30f0d28ad9 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "realName", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
            echo "</li>
            <li><a href='logout'>logout</a></li>

    ";
        } else {
            // line 8
            echo "            <li><a href='log'>login</a><br/></li>
            <li><a href='reg'>register</a><br/></li>
    ";
        }
        // line 11
        echo "        <li><a href='home'>home</a><br/></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  36 => 8,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/yevhen/PhpstormProjects/TestTask/src/templates/base.html.twig");
    }
}
