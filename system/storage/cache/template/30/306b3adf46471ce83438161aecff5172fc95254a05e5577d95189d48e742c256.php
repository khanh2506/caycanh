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

/* extension/oc_payment_example/catalog/view/template/payment/credit_card.twig */
class __TwigTemplate_c26bc59001c3a91e7240a5221511b29a0f4e77da48c14af99a4d708efa3b8c78 extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["text_title"] ?? null);
        echo "</legend>
  <div class=\"alert alert-danger\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 3
        echo ($context["text_description"] ?? null);
        echo "</div>
  <form id=\"form-credit-card\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"mb-3 required\">
          <label for=\"input-card-name\" class=\"col-form-label\">";
        // line 8
        echo ($context["entry_card_name"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"card_name\" value=\"\" placeholder=\"";
        // line 9
        echo ($context["entry_card_name"] ?? null);
        echo "\" id=\"input-card-name\" class=\"form-control\"/>
          <div id=\"error-card-name\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mb-3 required\">
          <label for=\"input-card-number\" class=\"col-form-label\">";
        // line 13
        echo ($context["entry_card_number"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"card_number\" value=\"\" placeholder=\"**** **** **** ****\" id=\"input-card-number\" maxlength=\"22\" class=\"form-control\"/>
          <div id=\"error-card-number\" class=\"invalid-feedback\"></div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"mb-3 required\">
          <label for=\"input-card-expire\" class=\"col-form-label\">";
        // line 20
        echo ($context["entry_card_expire"] ?? null);
        echo "</label>
          <div id=\"input-card-expire\" class=\"text-nowrap\" style=\"width: 100%;\">
            <select name=\"card_expire_month\" class=\"form-select\">
              <option value=\"\">";
        // line 23
        echo ($context["text_month"] ?? null);
        echo "</option>
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 25
            echo "                <option value=\"";
            echo $context["month"];
            echo "\">";
            echo $context["month"];
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </select>
            <select name=\"card_expire_year\" class=\"form-select\">
              <option value=\"\">";
        // line 29
        echo ($context["text_year"] ?? null);
        echo "</option>
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["years"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 31
            echo "                <option value=\"";
            echo $context["year"];
            echo "\">";
            echo $context["year"];
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </select>
          </div>
          <div id=\"error-card-expire\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mb-3 required\">
          <label for=\"input-card-cvv\" class=\"col-form-label\">";
        // line 38
        echo ($context["entry_card_cvv"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"card_cvv\" value=\"\" placeholder=\"***\" id=\"input-card-cvv\" size=\"3\" maxLength=\"3\" class=\"form-control\"/>
          <div id=\"error-card-cvv\" class=\"invalid-feedback\"></div>
        </div>
      </div>
    </div>
    ";
        // line 44
        if ((($context["logged"] ?? null) &&  !($context["subscription"] ?? null))) {
            // line 45
            echo "      <div class=\"form-check\">
        <input type=\"checkbox\" name=\"store\" value=\"1\" id=\"input-store\" class=\"form-check-input\"/>
        <label for=\"input-store\" class=\"form-check-label\"><strong>";
            // line 47
            echo ($context["text_store"] ?? null);
            echo "</strong></label>
      </div>
    ";
        }
        // line 50
        echo "    <div class=\"text-end\">
      <button type=\"submit\" id=\"button-confirm\" class=\"btn btn-primary\">";
        // line 51
        echo ($context["button_confirm"] ?? null);
        echo "</button>
    </div>
  </form>
</fieldset>
<script type=\"text/javascript\"><!--
\$('#form-credit-card').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=extension/oc_payment_example/payment/credit_card.confirm&language=";
        // line 62
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-credit-card').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-confirm').button('loading');
        },
        complete: function() {
            \$('#button-confirm').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('#form-credit-card').find('.is-invalid').removeClass('is-invalid');
            \$('#form-credit-card').find('.invalid-feedback').removeClass('d-block');

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/oc_payment_example/catalog/view/template/payment/credit_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  152 => 51,  149 => 50,  143 => 47,  139 => 45,  137 => 44,  128 => 38,  121 => 33,  110 => 31,  106 => 30,  102 => 29,  98 => 27,  87 => 25,  83 => 24,  79 => 23,  73 => 20,  63 => 13,  56 => 9,  52 => 8,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/oc_payment_example/catalog/view/template/payment/credit_card.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/oc_payment_example/catalog/view/template/payment/credit_card.twig");
    }
}
