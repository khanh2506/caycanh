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

/* extension/ciaccountsidebar/admin/view/template/module/account_sidebar.twig */
class __TwigTemplate_0dd507faac4b411f284229335495467062e8a521cff2445b9da47f13cc556344 extends Template
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
        <button type=\"submit\" form=\"form-account-sidebar\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 28
        echo "
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-account-sidebar\" class=\"form-horizontal\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\"><i class=\"fa fa-cogs\"></i> ";
        // line 34
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-accountsidebar-titles\" data-bs-toggle=\"tab\" class=\"nav-link\"><i class=\"fa fa-columns\"></i> ";
        // line 35
        echo ($context["tab_customer_title"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 40
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <select name=\"module_account_sidebar_status\" id=\"input-status\" class=\"form-select\">
                  ";
        // line 43
        if (($context["module_account_sidebar_status"] ?? null)) {
            // line 44
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 45
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 47
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 48
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 50
        echo "                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-module_account_sidebar-titlebgcolor\">";
        // line 54
        echo ($context["entry_title_bgcolor"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"module_account_sidebar_titlebgcolor\" value=\"";
        // line 56
        echo ($context["module_account_sidebar_titlebgcolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title_bgcolor"] ?? null);
        echo "\" id=\"input-module_account_sidebar-titlebgcolor\" class=\"form-control color-picker\" />
                <div class=\"form-text\">";
        // line 57
        echo ($context["help_title_bgcolor"] ?? null);
        echo "</div>
              </div>
              <div class=\"col-sm-2\">
                <div class=\"preview\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-module_account_sidebar-titlecolor\">";
        // line 64
        echo ($context["entry_title_color"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"module_account_sidebar_titlecolor\" value=\"";
        // line 66
        echo ($context["module_account_sidebar_titlecolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title_color"] ?? null);
        echo "\" id=\"input-module_account_sidebar-titlecolor\" class=\"form-control color-picker\" />
                <div class=\"form-text\">";
        // line 67
        echo ($context["help_title_color"] ?? null);
        echo "</div>
              </div>
              <div class=\"col-sm-2\">
                <div class=\"preview\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-module_account_sidebar-linkbgcolor\">";
        // line 74
        echo ($context["entry_link_bgcolor"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"module_account_sidebar_linkbgcolor\" value=\"";
        // line 76
        echo ($context["module_account_sidebar_linkbgcolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_link_bgcolor"] ?? null);
        echo "\" id=\"input-module_account_sidebar-linkbgcolor\" class=\"form-control color-picker\" />
                <div class=\"form-text\">";
        // line 77
        echo ($context["help_link_bgcolor"] ?? null);
        echo "</div>
              </div>
              <div class=\"col-sm-2\">
                <div class=\"preview\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-module_account_sidebar-linkcolor\">";
        // line 84
        echo ($context["entry_link_color"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"module_account_sidebar_linkcolor\" value=\"";
        // line 86
        echo ($context["module_account_sidebar_linkcolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_link_color"] ?? null);
        echo "\" id=\"input-module_account_sidebar-linkcolor\" class=\"form-control color-picker\" />
                <div class=\"form-text\">";
        // line 87
        echo ($context["help_link_color"] ?? null);
        echo "</div>
              </div>
              <div class=\"col-sm-2\">
                <div class=\"preview\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-module_account_sidebar-hoverbgcolor\">";
        // line 94
        echo ($context["entry_hover_bgcolor"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"module_account_sidebar_hoverbgcolor\" value=\"";
        // line 96
        echo ($context["module_account_sidebar_hoverbgcolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_hover_bgcolor"] ?? null);
        echo "\" id=\"input-module_account_sidebar-hoverbgcolor\" class=\"form-control color-picker\" />
                <div class=\"form-text\">";
        // line 97
        echo ($context["help_hover_bgcolor"] ?? null);
        echo "</div>
              </div>
              <div class=\"col-sm-2\">
                <div class=\"preview\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-module_account_sidebar-hovercolor\">";
        // line 104
        echo ($context["entry_hover_color"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"module_account_sidebar_hovercolor\" value=\"";
        // line 106
        echo ($context["module_account_sidebar_hovercolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_hover_color"] ?? null);
        echo "\" id=\"input-module_account_sidebar-hovercolor\" class=\"form-control color-picker\" />
                <div class=\"form-text\">";
        // line 107
        echo ($context["help_hover_color"] ?? null);
        echo "</div>
              </div>
              <div class=\"col-sm-2\">
                <div class=\"preview\"></div>
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-accountsidebar-titles\">
            <div class=\"row align-items-start\">
              <div class=\"nav nav-pills col-sm-4 col-xs-12 col-md-3\" id=\"titles\" role=\"tablist\" aria-orientation=\"vertical\">
                ";
        // line 117
        $context["title_row"] = 0;
        // line 118
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 119
            echo "                  ";
            $context["counter"] = (($context["title_row"] ?? null) + 1);
            // line 120
            echo "                  <button type=\"button\" class=\"nav-link dy-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 120)) {
                echo "active";
            }
            echo "\" data-bs-toggle=\"pill\" id=\"tab-title";
            echo ($context["title_row"] ?? null);
            echo "-tab\" data-bs-target=\"#tab-title";
            echo ($context["title_row"] ?? null);
            echo "\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\" data-bs-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('button[data-bs-target=\\'#tab-title";
            echo ($context["title_row"] ?? null);
            echo "\\']').remove(); \$('#tab-title";
            echo ($context["title_row"] ?? null);
            echo "').remove(); \$('#titles .dy-link:first-child').trigger('click');\"></i> ";
            echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["title"], "description", [], "any", false, false, false, 120)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["config_language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 120)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["title"], "description", [], "any", false, false, false, 120)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["config_language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 120)) : (((($context["tab_title"] ?? null) . "-") . ($context["counter"] ?? null))));
            echo " <i class=\"fa fa-arrows pull-right\" aria-hidden=\"true\"></i></button>
                  ";
            // line 121
            $context["title_row"] = (($context["title_row"] ?? null) + 1);
            // line 122
            echo "                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                  <button type=\"button\" class=\"nav-link addcustomlink\" onclick=\"addTitle();\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo ($context["button_add_title"] ?? null);
        echo "</button>
              </div>
              <div class=\"tab-content col-sm-8 col-xs-12 col-md-9\" id=\"titlesContent\">
                ";
        // line 126
        $context["title_row"] = 0;
        // line 127
        echo "                ";
        $context["module_account_sidebar_link_title_row"] = 0;
        // line 128
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["title_key"] => $context["title"]) {
            // line 129
            echo "                <div class=\"tab-pane fade ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 129)) {
                echo "show active";
            }
            echo "\" role=\"tabpanel\" aria-labelledby=\"tab-title";
            echo ($context["title_row"] ?? null);
            echo "-tab\" id=\"tab-title";
            echo ($context["title_row"] ?? null);
            echo "\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
            // line 131
            echo ($context["entry_status"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"module_account_sidebar_title[";
            // line 133
            echo ($context["title_row"] ?? null);
            echo "][status]\" class=\"form-select title-status\" rel=\"";
            echo ($context["title_row"] ?? null);
            echo "\">
                        ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, $context["title"], "status", [], "any", false, false, false, 134)) {
                // line 135
                echo "                        <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 136
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                        ";
            } else {
                // line 138
                echo "                        <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 139
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                        ";
            }
            // line 141
            echo "                      </select>
                    </div>
                  </div>
                  <div class=\"row mb-3 hide\">
                    <label class=\"col-sm-2 col-form-label\">";
            // line 145
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_account_sidebar_title[";
            // line 147
            echo ($context["title_row"] ?? null);
            echo "][sort_order]\"  value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["title"], "sort_order", [], "any", false, false, false, 147);
            echo "\" class=\"form-control title-sortorder\" />
                      <div class=\"form-text\">";
            // line 148
            echo ($context["help_sort_order"] ?? null);
            echo "</div>
                    </div>
                  </div>
                  <div class=\"title-group\">
                    <ul class=\"nav nav-tabs\" id=\"title-language";
            // line 152
            echo ($context["title_row"] ?? null);
            echo "\">
                      ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 154
                echo "                      <li class=\"nav-item\"><a href=\"#title-language";
                echo ($context["title_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
                echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 154)) {
                    echo " active";
                }
                echo "\">
                      <img src=\"language/";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 155);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 155);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 155);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 155);
                echo "
                      </a></li>
                      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 161
                echo "                      <div class=\"tab-pane";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 161)) {
                    echo " active";
                }
                echo "\" id=\"title-language";
                echo ($context["title_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161);
                echo "\">
                        <div class=\"row mb-3 required\">
                          <label class=\"col-sm-2 col-form-label\">";
                // line 163
                echo ($context["entry_title"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_account_sidebar_title[";
                // line 165
                echo ($context["title_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
                echo "][title]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["title"], "description", [], "any", false, false, false, 165)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null), "title", [], "any", false, false, false, 165)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["title"], "description", [], "any", false, false, false, 165)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null), "title", [], "any", false, false, false, 165)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />
                            <div class=\"form-text\">";
                // line 166
                echo ($context["help_title"] ?? null);
                echo "</div>
                            ";
                // line 167
                if ((($__internal_compile_4 = (($__internal_compile_5 = ($context["error_title"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["title_key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    // line 168
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_compile_6 = (($__internal_compile_7 = ($context["error_title"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["title_key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 168)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 170
                echo "                          </div>
                        </div>
                      </div>
                      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                    </div>
                  </div>
                    <fieldset id=\"link-values";
            // line 176
            echo ($context["title_row"] ?? null);
            echo "\">
                      <legend>";
            // line 177
            echo ($context["text_value_setting"] ?? null);
            echo "</legend>
                      <table id=\"accountsidebarlink-title";
            // line 178
            echo ($context["title_row"] ?? null);
            echo "\" class=\"table table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left required\">";
            // line 181
            echo ($context["entry_link_title"] ?? null);
            echo "</td>
                            <td class=\"text-left\">";
            // line 182
            echo ($context["entry_link"] ?? null);
            echo "</td>
                            <td class=\"text-left\">";
            // line 183
            echo ($context["entry_iconclass"] ?? null);
            echo "</td>
                            <td class=\"text-left\">";
            // line 184
            echo ($context["entry_logged"] ?? null);
            echo "</td>
                            <td class=\"text-right hide\">";
            // line 185
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                            <td class=\"text-right\">";
            // line 186
            echo ($context["entry_action"] ?? null);
            echo "</td>
                          </tr>
                        </thead>
                        <tbody>
                          ";
            // line 190
            if (twig_get_attribute($this->env, $this->source, $context["title"], "link_title", [], "any", false, false, false, 190)) {
                // line 191
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["title"], "link_title", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["link_key"] => $context["module_account_sidebar_link_title"]) {
                    // line 192
                    echo "                          <tr id=\"accountsidebarlink-title-row";
                    echo ($context["title_row"] ?? null);
                    echo "-";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "\">
                            <td class=\"text-left\">
                              <input type=\"hidden\" name=\"module_account_sidebar_title[";
                    // line 194
                    echo ($context["title_row"] ?? null);
                    echo "][link_title][";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "][module_account_sidebar_link_title_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "module_account_sidebar_link_title_id", [], "any", false, false, false, 194);
                    echo "\" />
                              ";
                    // line 195
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 196
                        echo "                              <div class=\"input-group\"><span class=\"input-group-text\">
                                <img src=\"language/";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 197);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 197);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 197);
                        echo "\" /></span>
                                <input type=\"text\" name=\"module_account_sidebar_title[";
                        // line 198
                        echo ($context["title_row"] ?? null);
                        echo "][link_title][";
                        echo ($context["module_account_sidebar_link_title_row"] ?? null);
                        echo "][module_account_sidebar_link_title_description][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 198);
                        echo "][name]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "module_account_sidebar_link_title_description", [], "any", false, false, false, 198)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 198)] ?? null) : null), "name", [], "any", false, false, false, 198)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "module_account_sidebar_link_title_description", [], "any", false, false, false, 198)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 198)] ?? null) : null), "name", [], "any", false, false, false, 198)) : (""));
                        echo "\" placeholder=\"";
                        echo ($context["entry_link_title"] ?? null);
                        echo "\" class=\"form-control\" />
                                ";
                        // line 199
                        if ((($__internal_compile_10 = (($__internal_compile_11 = (($__internal_compile_12 = ($context["error_link_title"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["title_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["link_key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                            // line 200
                            echo "                                <div class=\"text-danger\">";
                            echo (($__internal_compile_13 = (($__internal_compile_14 = (($__internal_compile_15 = ($context["error_link_title"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["title_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["link_key"]] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 200)] ?? null) : null);
                            echo "</div>
                                ";
                        }
                        // line 202
                        echo "                              </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "</td>
                            <td class=\"text-left\"><input type=\"text\" name=\"module_account_sidebar_title[";
                    // line 204
                    echo ($context["title_row"] ?? null);
                    echo "][link_title][";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "link", [], "any", false, false, false, 204);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-left\"><input type=\"text\" name=\"module_account_sidebar_title[";
                    // line 205
                    echo ($context["title_row"] ?? null);
                    echo "][link_title][";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "][iconclass]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "iconclass", [], "any", false, false, false, 205);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-left\">
                              <select name=\"module_account_sidebar_title[";
                    // line 207
                    echo ($context["title_row"] ?? null);
                    echo "][link_title][";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "][logged]\" id=\"input-logged\" class=\"form-select\">
                                <option value=\"2\" ";
                    // line 208
                    if ((twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "logged", [], "any", false, false, false, 208) == "2")) {
                        echo " selected=\"selected\" ";
                    }
                    echo " >";
                    echo ($context["text_both"] ?? null);
                    echo "</option>
                                <option value=\"1\" ";
                    // line 209
                    if ((twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "logged", [], "any", false, false, false, 209) == "1")) {
                        echo "  selected=\"selected\" ";
                    }
                    echo " >";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
                                <option value=\"0\" ";
                    // line 210
                    if ((twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "logged", [], "any", false, false, false, 210) == "0")) {
                        echo " selected=\"selected\" ";
                    }
                    echo " >";
                    echo ($context["text_no"] ?? null);
                    echo "</option>
                                <option value=\"3\" ";
                    // line 211
                    if ((twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "logged", [], "any", false, false, false, 211) == "3")) {
                        echo " selected=\"selected\" ";
                    }
                    echo " >";
                    echo ($context["text_affiliate_register"] ?? null);
                    echo "</option>
                                <option value=\"4\" ";
                    // line 212
                    if ((twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "logged", [], "any", false, false, false, 212) == "4")) {
                        echo " selected=\"selected\" ";
                    }
                    echo " >";
                    echo ($context["text_affiliate_logged"] ?? null);
                    echo "</option>
                              </select>
                            </td>
                            <td class=\"text-right hide\"><input type=\"text\" name=\"module_account_sidebar_title[";
                    // line 215
                    echo ($context["title_row"] ?? null);
                    echo "][link_title][";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module_account_sidebar_link_title"], "sort_order", [], "any", false, false, false, 215);
                    echo "\" class=\"form-control link-sortorder\" /></td>
                            <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#accountsidebarlink-title-row";
                    // line 216
                    echo ($context["title_row"] ?? null);
                    echo "-";
                    echo ($context["module_account_sidebar_link_title_row"] ?? null);
                    echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                          </tr>
                          ";
                    // line 218
                    $context["module_account_sidebar_link_title_row"] = (($context["module_account_sidebar_link_title_row"] ?? null) + 1);
                    // line 219
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link_key'], $context['module_account_sidebar_link_title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                          ";
            }
            // line 221
            echo "                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan=\"5\"></td>
                            <td class=\"text-right\"><button type=\"button\" onclick=\"addLinkTitle('";
            // line 225
            echo ($context["title_row"] ?? null);
            echo "');\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_link_title_add"] ?? null);
            echo "\" class=\"btn  btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                          </tr>
                        </tfoot>
                      </table>
                    </fieldset>
                </div>
                ";
            // line 231
            $context["title_row"] = (($context["title_row"] ?? null) + 1);
            // line 232
            echo "              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['title_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  ";
        // line 242
        $context["j"] = 0;
        // line 243
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["title"]) {
            // line 244
            echo "  // \$('#title-language";
            echo ($context["j"] ?? null);
            echo " li:first-child a').tab('show');
  ";
            // line 245
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 246
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "//--></script>
<script type=\"text/javascript\"><!--
var title_row = ";
        // line 249
        echo ($context["title_row"] ?? null);
        echo ";
console.log(title_row);
function addTitle() {
  html = '<div class=\"tab-pane fade\" id=\"tab-title' + title_row + '\" role=\"tabpanel\" aria-labelledby=\"tab-title' + title_row + '-tab\" id=\"tab-title' + title_row + '\">';
      html += '<div class=\"row mb-3\">';
        html += '<label class=\"col-sm-2 col-form-label\">";
        // line 254
        echo ($context["entry_status"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-10\">';
          html += '<select name=\"module_account_sidebar_title[' + title_row + '][status]\" class=\"form-select title-status\" rel=\"' + title_row + '\">';
            html += '<option value=\"1\" selected=\"selected\">";
        // line 257
        echo ($context["text_enabled"] ?? null);
        echo "</option>';
            html += '<option value=\"0\">";
        // line 258
        echo ($context["text_disabled"] ?? null);
        echo "</option>';
          html += '</select>';
        html += '</div>';
      html += '</div>';
      html += '<div class=\"row mb-3 hide\">';
        html += '<label class=\"col-sm-2 col-form-label\">";
        // line 263
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>';
        html += '<div class=\"col-sm-10\">';
          html += '<input type=\"text\" name=\"module_account_sidebar_title[' + title_row + '][sort_order]\"  value=\"' + (title_row + 1) + '\" class=\"form-control title-sortorder\" /><div class=\"form-text\">";
        // line 265
        echo ($context["help_sort_order"] ?? null);
        echo "</div>';
        html += '</div>';
      html += '</div>';
      html += '<div class=\"title-group\">';
        html += '<ul class=\"nav nav-tabs\" id=\"title-language' + title_row + '\">';
          ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 271
            echo "          html += '<li class=\"nav-item\"><a href=\"#title-language' + title_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 271);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 271)) {
                echo " active";
            }
            echo "\">';
          html += '<img src=\"language/";
            // line 272
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 272);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 272);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 272);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 272);
            echo "' ;
         html += ' </a></li>';
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "        html += '</ul>';
        html += '<div class=\"tab-content\">';
          ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 278
            echo "          html += '<div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 278)) {
                echo " active";
            }
            echo "\" id=\"title-language' + title_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 278);
            echo "\">';
            html += '<div class=\"row mb-3 required\">';
              html += '<label class=\"col-sm-2 col-form-label\">";
            // line 280
            echo ($context["entry_title"] ?? null);
            echo "</label>';
              html += '<div class=\"col-sm-10\">';
                html += '<input type=\"text\" name=\"module_account_sidebar_title[' + title_row + '][description][";
            // line 282
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 282);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" /><div class=\"form-text\">";
            echo ($context["help_title"] ?? null);
            echo "</div>';
              html += '</div>';
            html += '</div>';
           html += '</div>';
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "        html += '</div>';
      html += '</div>';
    html += '<fieldset id=\"link-values' + title_row + '\">';
      html += '<legend>";
        // line 290
        echo ($context["text_value_setting"] ?? null);
        echo "</legend>';
        html += '<table id=\"accountsidebarlink-title' + title_row + '\" class=\"table table-striped table-bordered table-hover\">';
          html += '<thead>';
            html += '<tr>';
              html += '<td class=\"text-left required\">";
        // line 294
        echo ($context["entry_link_title"] ?? null);
        echo "</td>';
              html += '<td class=\"text-left\">";
        // line 295
        echo ($context["entry_link"] ?? null);
        echo "</td>';
              html += '<td class=\"text-left\">";
        // line 296
        echo ($context["entry_iconclass"] ?? null);
        echo "</td>';
              html += '<td class=\"text-left\">";
        // line 297
        echo ($context["entry_logged"] ?? null);
        echo "</td>';
              html += '<td class=\"text-right hide\">";
        // line 298
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>';
              html += '<td class=\"text-right\">";
        // line 299
        echo ($context["entry_action"] ?? null);
        echo "</td>';
            html += '</tr>';
          html += '</thead>';
          html += '<tbody>';
          html += '</tbody>';
          html += '<tfoot>';
            html += '<tr>';
              html += '<td colspan=\"5\"></td>';
              html += '<td class=\"text-right\"><button type=\"button\" onclick=\"addLinkTitle(' + title_row + ');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 307
        echo ($context["button_link_title_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
            html += '</tr>';
          html += '</tfoot>';
        html += '</table>';
    html += '</fieldset>';
  html += '</div>';

  \$('#tab-accountsidebar-titles #titlesContent').append(html);

  \$('.addcustomlink').before('<button type=\"button\" class=\"nav-link dy-link\" data-bs-toggle=\"pill\" id=\"tab-title' + title_row + '-tab\" data-bs-target=\"#tab-title' + title_row + '\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\" data-bs-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'button[data-bs-target=\\\\\\'#tab-title' + title_row + '\\\\\\']\\').remove(); \$(\\'#tab-title' + title_row + '\\').remove(); \$(\\'#titles .dy-link:first-child\\').trigger(\\'click\\');\"></i> ";
        // line 316
        echo ($context["tab_title"] ?? null);
        echo "-'+ parseInt((title_row + 1))  +' <i class=\"fa fa-arrows pull-right\" aria-hidden=\"true\"></i></button>');

  // \$('#titles a[href=\\'#tab-title' + title_row + '\\']').tab('show');

  // \$('#title-language'+ title_row +' a:first').tab('show');

  \$('#tab-title' + title_row + '-tab').trigger('click');

    var firstTabEl = document.querySelector('[data-bs-target=\"#tab-title' + title_row + '\"]');
    var firstTab = new bootstrap.Tab(firstTabEl);
    firstTab.show();

    addLinkTitle(title_row);

  title_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var module_account_sidebar_link_title_row = '";
        // line 334
        echo ((($context["module_account_sidebar_link_title_row"] ?? null)) ? (($context["module_account_sidebar_link_title_row"] ?? null)) : (0));
        echo "';

function addLinkTitle(title_row) {
  html  = '<tr id=\"accountsidebarlink-title-row' + title_row + '-' + module_account_sidebar_link_title_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"module_account_sidebar_title[' + title_row + '][link_title][' + module_account_sidebar_link_title_row + '][module_account_sidebar_link_title_id]\" value=\"\" />';
  ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 340
            echo "  html += '    <div class=\"input-group\">';
  html += '      <span class=\"input-group-text\">';
  html += '<img src=\"language/";
            // line 342
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 342);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 342);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 342);
            echo "\" />';
  html += '</span><input type=\"text\" name=\"module_account_sidebar_title[' + title_row + '][link_title][' + module_account_sidebar_link_title_row + '][module_account_sidebar_link_title_description][";
            // line 343
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 343);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_link_title"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "  html += '  </td>';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"module_account_sidebar_title[' + title_row + '][link_title][' + module_account_sidebar_link_title_row + '][link]\" value=\"\" placeholder=\"";
        // line 347
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"module_account_sidebar_title[' + title_row + '][link_title][' + module_account_sidebar_link_title_row + '][iconclass]\" value=\"\" placeholder=\"";
        // line 348
        echo ($context["entry_iconclass"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\">';
   html += '  <select name=\"module_account_sidebar_title[' + title_row + '][link_title][' + module_account_sidebar_link_title_row + '][logged]\" id=\"input-logged\" class=\"form-select\">';
     html += ' <option value=\"2\">";
        // line 351
        echo ($context["text_both"] ?? null);
        echo "</option>';
     html += '  <option value=\"1\">";
        // line 352
        echo ($context["text_yes"] ?? null);
        echo "</option>';
      html += '  <option value=\"0\">";
        // line 353
        echo ($context["text_no"] ?? null);
        echo "</option>';
      html += '  <option value=\"3\">";
        // line 354
        echo ($context["text_affiliate_register"] ?? null);
        echo "</option>';
      html += '  <option value=\"4\">";
        // line 355
        echo ($context["text_affiliate_logged"] ?? null);
        echo "</option>';
     html += '   </select>';
   html += '    </td>';
  html += '  <td class=\"text-right hide\"><input type=\"text\" name=\"module_account_sidebar_title[' + title_row + '][link_title][' + module_account_sidebar_link_title_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 358
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control link-sortorder\" /></td>';
  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#accountsidebarlink-title-row' + title_row + '-' + module_account_sidebar_link_title_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 359
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#accountsidebarlink-title' + title_row + ' tbody').append(html);

  module_account_sidebar_link_title_row++;
}
//--></script>
 <script type=\"text/javascript\">
  var element = null;
  \$('.color-picker').ColorPicker({
    curr : '',
    onShow: function (colpkr) {
      \$(colpkr).fadeIn(500);
      return false;
    },
    onHide: function (colpkr) {
      \$(colpkr).fadeOut(500);
    return false;
    },
    onSubmit: function(hsb, hex, rgb, el) {
      \$(el).val('#'+hex);
      \$(el).ColorPickerHide();
    },
    onBeforeShow: function () {
      \$(this).ColorPickerSetColor(this.value);
    },
    onChange: function (hsb, hex, rgb) {
      element.curr.parent().next().find('.preview').css('background', '#' + hex);
      element.curr.val('#'+hex);
    }
  }).bind('keyup', function(){
    \$(this).ColorPickerSetColor(this.value);
  }).click(function(){
    element = this;
    element.curr = \$(this);
  });

  \$.each(\$('.color-picker'),function(key,value) {
    \$(this).parent().next().find('.preview').css({'background': \$(this).val()});
  });
</script>
<style type=\"text/css\">
  .preview { width: 45px; height: 35px; border: 1px solid #ColorPickerSetColorc;  }
  .nav-pills button {
    width: 100%;
    text-align: left;
    padding: 1rem 1rem;
  }

</style>
</div>
";
        // line 411
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ciaccountsidebar/admin/view/template/module/account_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1207 => 411,  1152 => 359,  1148 => 358,  1142 => 355,  1138 => 354,  1134 => 353,  1130 => 352,  1126 => 351,  1120 => 348,  1116 => 347,  1113 => 346,  1102 => 343,  1094 => 342,  1090 => 340,  1086 => 339,  1078 => 334,  1057 => 316,  1045 => 307,  1034 => 299,  1030 => 298,  1026 => 297,  1022 => 296,  1018 => 295,  1014 => 294,  1007 => 290,  1002 => 287,  979 => 282,  974 => 280,  964 => 278,  947 => 277,  943 => 275,  920 => 272,  911 => 271,  894 => 270,  886 => 265,  881 => 263,  873 => 258,  869 => 257,  863 => 254,  855 => 249,  851 => 247,  845 => 246,  843 => 245,  838 => 244,  833 => 243,  831 => 242,  820 => 233,  806 => 232,  804 => 231,  793 => 225,  787 => 221,  784 => 220,  778 => 219,  776 => 218,  767 => 216,  759 => 215,  749 => 212,  741 => 211,  733 => 210,  725 => 209,  717 => 208,  711 => 207,  702 => 205,  694 => 204,  691 => 203,  684 => 202,  678 => 200,  676 => 199,  664 => 198,  656 => 197,  653 => 196,  649 => 195,  641 => 194,  633 => 192,  628 => 191,  626 => 190,  619 => 186,  615 => 185,  611 => 184,  607 => 183,  603 => 182,  599 => 181,  593 => 178,  589 => 177,  585 => 176,  581 => 174,  564 => 170,  558 => 168,  556 => 167,  552 => 166,  542 => 165,  537 => 163,  525 => 161,  508 => 160,  504 => 158,  481 => 155,  470 => 154,  453 => 153,  449 => 152,  442 => 148,  436 => 147,  431 => 145,  425 => 141,  420 => 139,  415 => 138,  410 => 136,  405 => 135,  403 => 134,  397 => 133,  392 => 131,  380 => 129,  362 => 128,  359 => 127,  357 => 126,  350 => 123,  336 => 122,  334 => 121,  317 => 120,  314 => 119,  296 => 118,  294 => 117,  281 => 107,  275 => 106,  270 => 104,  260 => 97,  254 => 96,  249 => 94,  239 => 87,  233 => 86,  228 => 84,  218 => 77,  212 => 76,  207 => 74,  197 => 67,  191 => 66,  186 => 64,  176 => 57,  170 => 56,  165 => 54,  159 => 50,  154 => 48,  149 => 47,  144 => 45,  139 => 44,  137 => 43,  131 => 40,  123 => 35,  119 => 34,  114 => 32,  109 => 30,  105 => 28,  97 => 24,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ciaccountsidebar/admin/view/template/module/account_sidebar.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/ciaccountsidebar/admin/view/template/module/account_sidebar.twig");
    }
}
