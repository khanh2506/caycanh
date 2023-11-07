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

/* extension/chatandbot/admin/view/template/module/chatandbot.twig */
class __TwigTemplate_a4cb7514f0545380d2ccafcc9839f2cda6095c080f0ca0a7060357601ebb04da extends Template
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
 
      <!-- Кнопки управления -->
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
 
      <!-- Название модуля -->
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
 
      <!-- Хлебные крошки -->
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
 
    </div>
  </div>
 
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
 
         
          
          <div class=\"form-group mt-4\">
            
             <label class=\"col-sm-2 control-label fw-bold mb-1\" for=\"module_chatandbot_plugin_id\">";
        // line 37
        echo ($context["plugin_id"] ?? null);
        echo "</label>
            
            <div class=\"col-sm-10\">
              <input placeholder=\"";
        // line 40
        echo ($context["description_plugin_id"] ?? null);
        echo "\"  type=\"text\" name=\"module_chatandbot_plugin_id\" id=\"module_chatandbot_plugin_id\" class=\"form-control\"  value=\"";
        echo ($context["module_chatandbot_plugin_id"] ?? null);
        echo "\">
            </div>
            </div>
           <div  class=\"form-group mt-3\">
                <label class=\"col-sm-2 control-label fw-bold mb-1\" for=\"input-status\">";
        // line 44
        echo ($context["entry_status"] ?? null);
        echo "</label>
             
            <div class=\"col-sm-10\">
              
              <select name=\"module_chatandbot_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 49
        if (($context["module_chatandbot_status"] ?? null)) {
            // line 50
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 51
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 53
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 54
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 56
        echo "              </select>
 
            </div>
          </div>
 
         
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 67
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/chatandbot/admin/view/template/module/chatandbot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 67,  153 => 56,  148 => 54,  143 => 53,  138 => 51,  133 => 50,  131 => 49,  123 => 44,  114 => 40,  108 => 37,  99 => 31,  93 => 28,  83 => 20,  72 => 18,  68 => 17,  61 => 13,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/chatandbot/admin/view/template/module/chatandbot.twig", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/extension/chatandbot/admin/view/template/module/chatandbot.twig");
    }
}
