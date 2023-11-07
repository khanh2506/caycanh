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

/* extension/webocreationgooglesitemap/admin/view/template/feed/google_sitemap.twig */
class __TwigTemplate_4ab95858d3c0c4ecf87ebe5340884ff1d7c10d7f16dc82a6717492ca4ef26264 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-feed\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
         <form id=\"form-feed\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"form-group\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 23
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"feed_google_sitemap_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 26
        if (($context["feed_google_sitemap_status"] ?? null)) {
            // line 27
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 28
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 30
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 31
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 33
        echo "              </select>
            </div>
            </div>
          </div>
          <div class=\"form-group\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 control-label\" for=\"input-data-feed\">";
        // line 39
        echo ($context["entry_data_feed"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea rows=\"5\" readonly id=\"input-data-feed\" class=\"form-control\">";
        // line 41
        echo ($context["data_feed"] ?? null);
        echo "</textarea>
            </div>
            </div>
          </div>
        </form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 50
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/webocreationgooglesitemap/admin/view/template/feed/google_sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  135 => 41,  130 => 39,  122 => 33,  117 => 31,  112 => 30,  107 => 28,  102 => 27,  100 => 26,  94 => 23,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/webocreationgooglesitemap/admin/view/template/feed/google_sitemap.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/webocreationgooglesitemap/admin/view/template/feed/google_sitemap.twig");
    }
}
