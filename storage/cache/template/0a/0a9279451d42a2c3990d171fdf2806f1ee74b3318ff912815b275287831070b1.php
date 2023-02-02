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

/* dashboard/view/template/catalog/attribute_form.twig */
class __TwigTemplate_3d985e3c8c12a5ec8712b0ee689b9142b0feaa32c2048d8d7fe178a58eed16f1 extends Template
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
        <button type=\"submit\" form=\"form-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
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
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-attribute\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 23
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 26
            echo "                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 27);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 27);
            echo "\"/></div>
                  <input type=\"text\" name=\"attribute_description[";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["attribute_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["attribute_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28)] ?? null) : null), "name", [], "any", false, false, false, 28)) : (""));
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\"/>
                </div>
                <div id=\"error-name-";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 30);
            echo "\" class=\"invalid-feedback\"></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-attribute-group\" class=\"col-sm-2 col-form-label required\">";
        // line 35
        echo ($context["entry_attribute_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"attribute_group_id\" id=\"input-attribute-group\" class=\"form-select\">
                <option value=\"0\"></option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 40
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 40);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 40) == ($context["attribute_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 40);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </select>
              <div id=\"error-attribute-group\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 47
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 49
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
          <input type=\"hidden\" name=\"attribute_id\" value=\"";
        // line 52
        echo ($context["attribute_id"] ?? null);
        echo "\" id=\"input-attribute-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 58
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dashboard/view/template/catalog/attribute_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  182 => 52,  174 => 49,  169 => 47,  162 => 42,  147 => 40,  143 => 39,  136 => 35,  131 => 32,  123 => 30,  112 => 28,  106 => 27,  103 => 26,  99 => 25,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/view/template/catalog/attribute_form.twig", "/var/www/html/opencart/upload/dashboard/view/template/catalog/attribute_form.twig");
    }
}
