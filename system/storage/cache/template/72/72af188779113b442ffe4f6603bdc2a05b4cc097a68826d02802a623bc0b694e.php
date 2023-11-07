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

/* admin/view/template/marketplace/marketplace_info.twig */
class __TwigTemplate_c03bf624b7fc97d4c7de60357ff393f67617f6901a63533a7843714902dc4f5d extends Template
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
        ";
        // line 6
        if (($context["signature"] ?? null)) {
            // line 7
            echo "\t\t\t\t\t<button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_api"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t<button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_api"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i></button>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t<a href=\"";
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div id=\"marketplace-extension-info\" class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 25
        echo "\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 26
        echo ($context["name"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row extension-info\">
\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t";
        // line 30
        if (($context["banner"] ?? null)) {
            // line 31
            echo "\t\t\t\t\t\t\t<div id=\"banner\" class=\"text-center img-thumbnail mb-3\"><img src=\"";
            echo ($context["banner"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></div>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t<div class=\"row thumbnails\">
\t\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 35
            echo "\t\t\t\t\t\t\t\t<div class=\"col-4 col-md-3 col-lg-2 mb-3\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 35);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 35);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 35);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 35);
            echo "\" class=\"img-fluid img-thumbnail\"/></a></div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-description\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 39
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-documentation\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 40
        echo ($context["tab_documentation"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-download\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 41
        echo ($context["tab_download"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-comment\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 42
        echo ($context["tab_comment"] ?? null);
        echo " (";
        echo ($context["comment_total"] ?? null);
        echo ")</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"tab-description\" class=\"tab-pane fade show active\">";
        // line 45
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div id=\"tab-documentation\" class=\"tab-pane fade\">";
        // line 46
        echo ($context["documentation"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div id=\"tab-download\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 49
        echo ($context["text_available"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div id=\"download\"></div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tab-comment\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 55
        echo ($context["text_comment_add"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 57
        echo ($context["text_write"] ?? null);
        echo "\" id=\"input-history-comment\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 60
        echo ($context["button_comment"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 65
        echo ($context["text_comment"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div id=\"comment\"></div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-3\">
\t\t\t\t\t\t<div id=\"buy\" class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 74
        if (((($context["license"] ?? null) == "1") &&  !($context["purchased"] ?? null))) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo ($context["button_purchase"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t\t\t<div id=\"price\" class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\"><strong>";
        // line 78
        echo ($context["text_price"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7 text-end\">";
        // line 79
        if (($context["license"] ?? null)) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["price"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_free"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<ul class=\"list-check\">
\t\t\t\t\t\t\t\t\t<li>";
        // line 88
        echo ($context["text_partner"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t\t<li>";
        // line 89
        echo ($context["text_support"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t\t<li>";
        // line 90
        echo ($context["text_documentation"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 94
        echo ($context["text_rating"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rating"] ?? null) < $context["i"])) {
                // line 97
                echo "                        <i class=\"fa-regular fa-star\"></i>
                      ";
            } else {
                // line 99
                echo "                        <i class=\"fa-solid fa-star\"></i>
                      ";
            }
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo ($context["rating_total"] ?? null);
        echo ")
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 106
        echo ($context["text_compatibility"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 107
        echo ($context["compatibility"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 111
        echo ($context["text_date_modified"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 112
        echo ($context["date_modified"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 116
        echo ($context["text_date_added"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 117
        echo ($context["date_added"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"sales\" class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\"><i class=\"fa-solid fa-shopping-cart\"></i> <strong>";
        // line 122
        echo ($context["sales"] ?? null);
        echo "</strong> ";
        echo ($context["text_sales"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"sales\" class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\"><i class=\"fa-solid fa-download\"></i> <strong>";
        // line 125
        echo ($context["downloaded"] ?? null);
        echo "</strong> ";
        echo ($context["text_downloaded"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 130
        echo ($context["member_image"] ?? null);
        echo "\" alt=\"";
        echo ($context["member_username"] ?? null);
        echo "\" title=\"";
        echo ($context["member_username"] ?? null);
        echo "\" class=\"me-3 rounded-circle\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0\"><a href=\"";
        // line 132
        echo ($context["filter_member"] ?? null);
        echo "\">";
        echo ($context["member_username"] ?? null);
        echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t<small>";
        // line 133
        echo ($context["text_member_since"] ?? null);
        echo " ";
        echo ($context["member_date_added"] ?? null);
        echo "</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 137
        echo ($context["filter_member"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_view_all"] ?? null);
        echo "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary btn-lg btn-block\">";
        echo ($context["button_support"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-api').on('click', function (e) {
    \$('#modal-api').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token=";
        // line 151
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'html',
        beforeSend: function () {
            \$('#button-api').button('loading');
        },
        complete: function () {
            \$('#button-api').button('reset');
        },
        success: function (html) {
            \$('body').append(html);

            \$('#modal-api').modal('show');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-buy').on('click', function (e) {
    e.preventDefault();

    \$('#modal-purchase').remove();

    html = '<div id=\"modal-purchase\" class=\"modal\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\">";
        // line 180
        echo twig_escape_filter($this->env, ($context["text_purchase"] ?? null), "js");
        echo "</h5>';
    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <p>";
        // line 184
        echo twig_escape_filter($this->env, ($context["text_pin"] ?? null), "js");
        echo "</p>';
    html += '        <p>";
        // line 185
        echo twig_escape_filter($this->env, ($context["text_secure"] ?? null), "js");
        echo "</p>';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-pin\">";
        // line 187
        echo twig_escape_filter($this->env, ($context["entry_pin"] ?? null), "js");
        echo "</label>';
    html += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 188
        echo twig_escape_filter($this->env, ($context["entry_pin"] ?? null), "js");
        echo "\" id=\"input-pin\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3 text-end\">';
    html += '          <div class=\"text-end\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-light btn-lg\" target=\"_blank\">";
        // line 191
        echo twig_escape_filter($this->env, ($context["button_forgot_pin"] ?? null), "js");
        echo "</a></div>';
    html += '          <button type=\"button\" id=\"button-purchase\" class=\"btn btn-primary btn-lg\">";
        // line 192
        echo twig_escape_filter($this->env, ($context["button_purchase"] ?? null), "js");
        echo "</button>';
    html += '        </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketplace/marketplace.purchase&user_token=";
        // line 210
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
        type: 'post',
        data: \$('#input-pin'),
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-purchase').modal('hide');

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace.extension&user_token=";
        // line 232
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Download
\$('#download').load('index.php?route=marketplace/marketplace.extension&user_token=";
        // line 242
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

\$('#tab-download').on('click', '.btn-primary', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#tab-download').on('click', '.dropdown-item', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace.extension&user_token=";
        // line 299
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Comment
\$('#comment').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#comment').load(this.href);
});

\$('#comment').load('index.php?route=marketplace/marketplace.comment&user_token=";
        // line 315
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

// Add comment
\$('#button-comment').on('click', function () {
    \$.ajax({
        url: 'index.php?route=marketplace/marketplace.addComment&user_token=";
        // line 320
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$('#input-history-comment').val()),
        beforeSend: function () {
            \$('#button-comment').button('loading');
        },
        complete: function () {
            \$('#button-comment').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#tab-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#tab-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment').load('index.php?route=marketplace/marketplace.comment&user_token=";
        // line 340
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

                \$('#input-history-comment').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Next replies
\$('#comment').on('click', '.btn-block', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (html) {
            \$(element).parent().parent().parent().append(html);

            \$(element).parent().remove();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reply
\$('#comment').on('click', '.btn-link', function (e) {
    e.preventDefault();

    \$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

                \$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (html) {
            \$(element).parent().replaceWith(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 456
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/marketplace_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 456,  645 => 340,  620 => 320,  610 => 315,  589 => 299,  527 => 242,  512 => 232,  485 => 210,  464 => 192,  460 => 191,  454 => 188,  450 => 187,  445 => 185,  441 => 184,  434 => 180,  402 => 151,  379 => 137,  370 => 133,  364 => 132,  355 => 130,  345 => 125,  337 => 122,  329 => 117,  325 => 116,  318 => 112,  314 => 111,  307 => 107,  303 => 106,  289 => 101,  285 => 99,  281 => 97,  278 => 96,  274 => 95,  270 => 94,  263 => 90,  259 => 89,  255 => 88,  249 => 84,  243 => 82,  237 => 80,  235 => 79,  231 => 78,  228 => 77,  222 => 75,  220 => 74,  208 => 65,  200 => 60,  194 => 57,  189 => 55,  180 => 49,  174 => 46,  170 => 45,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  146 => 37,  131 => 35,  127 => 34,  124 => 33,  114 => 31,  112 => 30,  105 => 26,  102 => 25,  96 => 23,  94 => 22,  88 => 18,  77 => 16,  73 => 15,  68 => 13,  60 => 11,  54 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/marketplace_info.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/admin/view/template/marketplace/marketplace_info.twig");
    }
}
