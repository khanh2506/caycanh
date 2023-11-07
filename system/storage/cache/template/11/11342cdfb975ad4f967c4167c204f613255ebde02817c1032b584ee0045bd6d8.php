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

/* extension/opencart/admin/view/template/module/bestseller_report.twig */
class __TwigTemplate_9a350906bb897c6be622105fbb598971fa498c72a395ea302711edc30969497e extends Template
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
        echo ($context["column_product"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 6
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if (($context["reports"] ?? null)) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 12
                echo "          <tr>
            <td class=\"text-start\"><a href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["report"], "edit", [], "any", false, false, false, 13);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "product", [], "any", false, false, false, 13);
                echo "</a></td>
            <td class=\"text-end\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["report"], "total", [], "any", false, false, false, 14);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      ";
        } else {
            // line 18
            echo "        <tr>
          <td class=\"text-center\" colspan=\"2\">";
            // line 19
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 22
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 26
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 27
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/module/bestseller_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  97 => 26,  91 => 22,  85 => 19,  82 => 18,  79 => 17,  70 => 14,  64 => 13,  61 => 12,  56 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/module/bestseller_report.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/opencart/admin/view/template/module/bestseller_report.twig");
    }
}
