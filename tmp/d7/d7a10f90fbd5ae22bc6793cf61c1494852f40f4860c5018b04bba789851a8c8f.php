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
        echo "<div class=\"row text-center\">
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <a class=\"navbar-brand\" href=\"/\">Film</a>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"/\">Accueil</a></li>
            <li>
                <form class=\"navbar-form navbar-inverse bg-primary jumbotron\" role=\"search\" action=\"\" method=\"post\">

                    <div class=\"form-group\">
                        <label for=\"title\">Titre</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search a movie, series ...\" name=\"title\" id=\"exampleInput1\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"type\">Type de vidéo</label>
                        <select class=\"form-control\" id=\"exampleSelect1\" name=\"type\">
                            <option>Film</option>
                            <option>Série</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"title\">Année</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search an year ...\" name=\"year\" id=\"exampleInput2\">
                    </div>

                    <button class=\"btn btn-outline-success\" type=\"submit\">Recherche</button>
                </form>
            </li>
        </ul>
    </nav>
</div>
";
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
