<?php

/* partial/header.html.twig */
class __TwigTemplate_d3f95fe98ae7ccf485dfd6729e2ba2f3e00e787ad1e472bec76c3f7234d38e08 extends Twig_Template
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
        echo "<div class=\"row\">
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <a class=\"navbar-brand\" href=\"/\">The Movie</a>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"/\">Accueil</a></li>
            <li>
                <form class=\"navbar-form\" role=\"search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search a film, series ...\" name=\"search\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "partial/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partial/header.html.twig", "/var/www/html/Lyon0317-php-ijp-hackathon-1/view/partial/header.html.twig");
    }
}
