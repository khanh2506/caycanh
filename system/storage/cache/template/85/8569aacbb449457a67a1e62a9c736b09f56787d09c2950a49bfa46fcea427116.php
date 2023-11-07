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

/* extension/oc_payment_example/admin/view/template/payment/credit_card_report.twig */
class __TwigTemplate_636e4900dc387b7e1360e3f01f95398077285c1d0919997e1e69f8cfd40a2963 extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        echo ($context["column_order"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 6
        echo ($context["column_card"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_amount"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 8
        echo ($context["column_response"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 9
        echo ($context["column_status"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 10
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        if (($context["reports"] ?? null)) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 16
                echo "          <tr>
            <td class=\"text-start\"><a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["report"], "order", [], "any", false, false, false, 17);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "order_id", [], "any", false, false, false, 17);
                echo "</a></td>
            <td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["report"], "card", [], "any", false, false, false, 18);
                echo "</td>
            <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["report"], "amount", [], "any", false, false, false, 19);
                echo "</td>
            <td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["report"], "response", [], "any", false, false, false, 20);
                echo "</td>
            <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 21);
                echo "</td>
            <td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["report"], "date_added", [], "any", false, false, false, 22);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      ";
        } else {
            // line 26
            echo "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 27
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 30
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 34
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 35
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/oc_payment_example/admin/view/template/payment/credit_card_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  129 => 34,  123 => 30,  117 => 27,  114 => 26,  111 => 25,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  80 => 17,  77 => 16,  72 => 15,  70 => 14,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/oc_payment_example/admin/view/template/payment/credit_card_report.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/oc_payment_example/admin/view/template/payment/credit_card_report.twig");
    }
}
