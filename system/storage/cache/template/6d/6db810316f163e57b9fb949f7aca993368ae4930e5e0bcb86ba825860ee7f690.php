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

/* extension/oc_payment_example/admin/view/template/payment/credit_card.twig */
class __TwigTemplate_cd238122aee89212b71e560711f911b06397a8f364eb5ad8b443ffaa73d5aa89 extends Template
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
        <button type=\"submit\" form=\"form-payment\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
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
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 17
        echo ($context["text_description"] ?? null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-payment\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_report"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">

              <fieldset>
                <legend>";
        // line 30
        echo ($context["text_developer"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-response\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_response"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_credit_card_response\" id=\"input-response\" class=\"form-select\">
                      <option value=\"1\"";
        // line 35
        if (($context["payment_credit_card_response"] ?? null)) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_approve"] ?? null);
        echo "</option>
                      <option value=\"0\"";
        // line 36
        if ( !($context["payment_credit_card_response"] ?? null)) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_deny"] ?? null);
        echo "</option>
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 42
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-approved-status\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_approved_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_credit_card_approved_status_id\" id=\"input-approved-status\" class=\"form-select\">
                      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 48
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 48);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 48) == ($context["payment_credit_card_approved_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 48);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 54
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_credit_card_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 58
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 58);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 58) == ($context["payment_credit_card_failed_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 58);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 64
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_credit_card_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 68
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 68);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 68) == ($context["payment_credit_card_order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 68);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">";
        // line 74
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_credit_card_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                      <option value=\"0\">";
        // line 77
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                      ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 79
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 79);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 79) == ($context["payment_credit_card_geo_zone_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 79);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 85
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"payment_credit_card_status\" value=\"0\"/> <input type=\"checkbox\" name=\"payment_credit_card_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 88
        if (($context["payment_credit_card_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_credit_card_sort_order\" value=\"";
        // line 95
        echo ($context["payment_credit_card_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 102
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 103
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 112
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/oc_payment_example/admin/view/template/payment/credit_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 112,  312 => 103,  308 => 102,  296 => 95,  291 => 93,  281 => 88,  275 => 85,  269 => 81,  254 => 79,  250 => 78,  246 => 77,  240 => 74,  234 => 70,  219 => 68,  215 => 67,  209 => 64,  203 => 60,  188 => 58,  184 => 57,  178 => 54,  172 => 50,  157 => 48,  153 => 47,  147 => 44,  142 => 42,  129 => 36,  121 => 35,  115 => 32,  110 => 30,  101 => 24,  97 => 23,  92 => 21,  87 => 19,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/oc_payment_example/admin/view/template/payment/credit_card.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/oc_payment_example/admin/view/template/payment/credit_card.twig");
    }
}
