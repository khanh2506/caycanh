<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/view/template/common/header.twig */
class __TwigTemplate_1f87a40d04ab4ff33a7a126aeb26228af817246bdd75e095e81f1dc173cc9354 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 15
        echo "  <script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 18
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 31
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 31);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 31);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 34
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "   <script async=\"true\" type=\"text/javascript\">(function () { var _id = \"377\"; var _aid = \"2f23dba9baaa3b8feaff9b04519d40533c177c18\";var d = document;var w = window;var cab_user_param = '';var title = encodeURIComponent(d.title); var url = w.location.origin+w.location.pathname; var _date = Date.now();var width=document.documentElement.clientWidth;var height=document.documentElement.clientHeight;function l(){var s = document.createElement(\"script\");s.type = \"text/javascript\"; s.async = true;s.src = \"https://chatandbot.com/erl/web333?width=\"+width+\"&height=\"+height+cab_user_param+\"&get_fr=1&title=\"+title+\"&sid=\"+_id+\"&aid=\"+_aid+\"&date=\"+_date+\"&url=\"+url;var ss = document.getElementsByTagName(\"script\")[0];ss.parentNode.insertBefore(s, ss);}if (d.readyState == \"complete\") {l();} else {if (w.attachEvent) {w.attachEvent(\"onload\", l);} else { w.addEventListener(\"load\", l, false);}}})()</script>
</head>
<body>
<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
<nav id=\"top\">
  <div class=\"container\">
    <div class=\"nav float-start\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\">";
        // line 44
        echo ($context["currency"] ?? null);
        echo "</li>
        <li class=\"list-inline-item\">";
        // line 45
        echo ($context["language"] ?? null);
        echo "</li>
      </ul>
    </div>
    <div class=\"nav float-end\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\"><a href=\"";
        // line 50
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa-solid fa-phone\"></i></a> <span class=\"d-none d-md-inline\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
        <li class=\"list-inline-item\">
          <div class=\"dropdown\">
            <a href=\"";
        // line 53
        echo ($context["account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              ";
        // line 55
        if ( !($context["logged"] ?? null)) {
            // line 56
            echo "                <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 57
            echo ($context["login"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
              ";
        } else {
            // line 59
            echo "                <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 60
            echo ($context["order"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 61
            echo ($context["transaction"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 62
            echo ($context["download"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 63
            echo ($context["logout"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
              ";
        }
        // line 65
        echo "            </ul>
          </div>
        </li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 68
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 69
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 70
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-4\">
        <div id=\"logo\">
          ";
        // line 80
        if (($context["logo"] ?? null)) {
            // line 81
            echo "            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></a>
          ";
        } else {
            // line 83
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 85
        echo "        </div>
      </div>
      <div class=\"col-md-5\">";
        // line 87
        echo ($context["search"] ?? null);
        echo "</div>
      <div id=\"header-cart\" class=\"col-md-4 col-lg-3 mb-2\">";
        // line 88
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
<main>
  ";
        // line 93
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 93,  311 => 88,  307 => 87,  303 => 85,  295 => 83,  283 => 81,  281 => 80,  264 => 70,  256 => 69,  248 => 68,  243 => 65,  236 => 63,  230 => 62,  224 => 61,  218 => 60,  211 => 59,  204 => 57,  197 => 56,  195 => 55,  188 => 53,  180 => 50,  172 => 45,  168 => 44,  158 => 36,  149 => 34,  144 => 33,  133 => 31,  128 => 30,  119 => 28,  114 => 27,  101 => 25,  97 => 24,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/catalog/view/template/common/header.twig");
    }
}
