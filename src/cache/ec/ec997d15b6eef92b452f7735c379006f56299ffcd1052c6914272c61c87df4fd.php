<?php

/* some.twig */
class __TwigTemplate_baa5eb7fe490997dedc13ef4af81b1aeb9c77f967d0a1f6933019a74502f8c13 extends Twig_Template
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
        echo "<html>
<head>
    <title>My Webpage</title>
</head>
<body>

<h1>My Webpage</h1>
The number is: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["variable"] ?? null), "html", null, true);
        echo "!
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "some.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "some.twig", "/home/yevhen/PhpstormProjects/TestTask/src/templates/some.twig");
    }
}
