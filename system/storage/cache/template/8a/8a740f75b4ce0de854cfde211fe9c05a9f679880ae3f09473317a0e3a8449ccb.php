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

/* extension/opencart/admin/view/template/module/bestseller.twig */
class __TwigTemplate_81d0790f4bcdec64191da9c470b4b4a3016072ce380fb66380658265ae662024 extends Template
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
        <button type=\"button\" id=\"button-sync\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_sync"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
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
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-axis\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_axis"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"axis\" id=\"input-axis\" class=\"form-select\">
                    <option value=\"horizontal\"";
        // line 39
        if ((($context["axis"] ?? null) == "horizontal")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_horizontal"] ?? null);
        echo "</option>
                    <option value=\"vertical\"";
        // line 40
        if ((($context["axis"] ?? null) == "vertical")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_vertical"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-limit\" class=\"col-sm-2 col-form-label\">";
        // line 45
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"limit\" value=\"";
        // line 47
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-width\" class=\"col-sm-2 col-form-label\">";
        // line 51
        echo ($context["entry_width"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"width\" value=\"";
        // line 53
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                  <div id=\"error-width\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-height\" class=\"col-sm-2 col-form-label\">";
        // line 58
        echo ($context["entry_height"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"height\" value=\"";
        // line 60
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                  <div id=\"error-height\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 68
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 75
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 76
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 80
        echo ($context["module_id"] ?? null);
        echo "\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});

\$('#button-sync').on('click', function () {
    var element = this;

    \$(element).button('loading');

    var next = 'index.php?route=extension/opencart/module/bestseller.sync&user_token=";
        // line 98
        echo ($context["user_token"] ?? null);
        echo "';

    var rating = function () {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function (json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');

                    \$('#report').load('index.php?route=extension/opencart/module/bestseller.report&user_token=";
        // line 114
        echo ($context["user_token"] ?? null);
        echo "');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');

                    \$('#report').load('index.php?route=extension/opencart/module/bestseller.report&user_token=";
        // line 126
        echo ($context["user_token"] ?? null);
        echo "');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(rating);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
                \$('#report').load('index.php?route=extension/opencart/module/bestseller.report&user_token=";
        // line 139
        echo ($context["user_token"] ?? null);
        echo "');
            }
        });
    };

    chain.attach(rating);
});
//--></script>
";
        // line 147
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 147,  294 => 139,  278 => 126,  263 => 114,  244 => 98,  223 => 80,  216 => 76,  212 => 75,  200 => 68,  194 => 65,  184 => 60,  179 => 58,  169 => 53,  164 => 51,  155 => 47,  150 => 45,  138 => 40,  130 => 39,  124 => 36,  114 => 31,  109 => 29,  101 => 24,  97 => 23,  92 => 21,  87 => 19,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/module/bestseller.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/opencart/admin/view/template/module/bestseller.twig");
    }
}
