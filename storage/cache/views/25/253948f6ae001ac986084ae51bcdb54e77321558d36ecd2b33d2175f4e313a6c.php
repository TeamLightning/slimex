<?php

/* home.twig */
class __TwigTemplate_63d56111b406e0ac7b5aa5b1efbe72a6ef512a786c8e68fb5045db9abf423a24 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Slimex | The modern framework</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css\">
        <style type=\"text/css\">
            .text-black a{
                color: #000 !important;
            }

            .content {
                padding-top: 20%;
            }

            .card {
                background-color: #fafafa !important;
            }

            @font-face {
                font-family:\"Airways PERSONAL USE ONLY Regular\";
                src: url(\"fontt.ttf\") /* TTF file for CSS3 browsers */
            }

            body .title {
                text-align: center;
                font-family:'Airways PERSONAL USE ONLY', sans-serif !important;
            }

            @font-face {
                font-family: 'Burdeles Regular';
                src: url(\"burdeles.ttf\")
            }

            .card-content .text {
                font-family: 'Burdeles', sans-serif !important;
                font-size: 50px !important;
                text-align: center !important;
            }

            .card-action{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav>
            <div class=\"nav-wrapper white z-depth-2\">
                <div class=\"container text-black\">
                    <a href=\"#\" class=\"brand-logo title\" style=\"font-size: 40px !important;\">__Slimex{</a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                        <li><a href=\"https://smarthacks.github.io/slimex\">DOCUMENTATION</a></li>
                        <li><a href=\"https://forum.smarthacksinc.com\">COMMUNITY</a></li>
                        <li><a href=\"https://github.com/smarthack/slimex\">GITHUB</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"card\">
                    <div class=\"card-content\">
                        <span class=\"card-title title\" style=\"font-size: 70px !important;\">__Slimex{</span>
                        <hr style=\"margin-top:45px;\">
                        <p class=\"text\">You have successfully installed your own Slimex</p>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"https://smarthacks.github.io/slimex\">DOCUMENTATION</a>
                        <a href=\"https://forum.smarthacksinc.com\">COMMUNITY</a>
                        <a href=\"https://github.com/smarthack/slimex\">GITHUB</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/home/alphaman/Desktop/Projects/PHP/slimex/app/resources/views/home.twig");
    }
}
