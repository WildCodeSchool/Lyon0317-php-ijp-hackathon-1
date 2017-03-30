<?php

/* home.html.twig */
class __TwigTemplate_9c29c2a671c03a9938c870e01e2eee13621e49341024fc5f67888b7a076a8e31 extends Twig_Template
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
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Rechercher tes films ou séries préférés</h3>
            </div>
            <div class=\"panel-body\">

                <table class=\"table\">
                    <tr>
                        <th class=\"text-center\">Titre</th>
                        <th class=\"text-center\">Année</th>
                        <th class=\"text-center\">Type</th>
                        <th class=\"text-center\">ID</th>
                        <th class=\"text-center\">Affiche</th>
                    </tr>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 18
            echo "                        <tr>
                            <td class=\"text-center\">";
            // line 19
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Title", array())), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Year", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Type", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "imdbID", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center\"><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Poster", array()), "html", null, true);
            echo "\"/> </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </table>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  60 => 23,  56 => 22,  52 => 21,  48 => 20,  44 => 19,  41 => 18,  37 => 17,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/var/www/html/Lyon0317-php-ijp-hackathon-1/view/home.html.twig");
    }
}
