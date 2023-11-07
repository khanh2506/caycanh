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

/* admin/view/template/design/seo_url_form.twig */
class __TwigTemplate_60cf686bf07247a2a8d4f4c60010c03406ee0d1ddc876e61d985cb46a0f4443a extends Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-seo-url\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-seo-url\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 26
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 26);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 26) == ($context["store_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 26);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_language"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 36
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36) == ($context["language_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 36);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"key\" value=\"";
        // line 44
        echo ($context["key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_key"] ?? null);
        echo "\" id=\"input-key\" class=\"form-control\"/>
              <div id=\"error-key\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 49
        echo ($context["entry_value"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 51
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\"/>
              <div id=\"error-value\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_keyword"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"keyword\" value=\"";
        // line 58
        echo ($context["keyword"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_keyword"] ?? null);
        echo "\" id=\"input-keyword\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 59
        echo ($context["help_keyword"] ?? null);
        echo "</div>
              <div id=\"error-keyword\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 64
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 66
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 67
        echo ($context["help_sort_order"] ?? null);
        echo "</div>
            </div>
          </div>
          <input type=\"hidden\" name=\"seo_url_id\" value=\"";
        // line 70
        echo ($context["seo_url_id"] ?? null);
        echo "\" id=\"input-seo-url-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 76
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/design/seo_url_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 76,  221 => 70,  215 => 67,  209 => 66,  204 => 64,  196 => 59,  190 => 58,  185 => 56,  175 => 51,  170 => 49,  160 => 44,  155 => 42,  149 => 38,  134 => 36,  130 => 35,  124 => 32,  118 => 28,  103 => 26,  99 => 25,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/design/seo_url_form.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/admin/view/template/design/seo_url_form.twig");
    }
}
