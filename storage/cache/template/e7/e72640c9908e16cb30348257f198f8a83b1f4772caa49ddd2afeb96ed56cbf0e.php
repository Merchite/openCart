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

/* catalog/view/template/checkout/payment_address.twig */
class __TwigTemplate_c0ecf1993fdc03ff32c91f438021cb5f290792fce60d82e1241cbb4fe6c245ff extends Template
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
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div id=\"payment-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"1\" id=\"input-payment-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/>
      <label for=\"input-payment-existing\" class=\"form-check-label\">";
        // line 6
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"0\" id=\"input-payment-new\" class=\"form-check-input\"";
        // line 9
        if ( !($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo ">
      <label for=\"input-payment-new\" class=\"form-check-label\">";
        // line 10
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>
  </div>
  <div id=\"payment-existing\" style=\"display: ";
        // line 13
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <select name=\"address_id\" id=\"input-payment-address\" class=\"form-select\">
      <option value=\"\">";
        // line 15
        echo ($context["text_select"] ?? null);
        echo "</option>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 17
            echo "        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 17);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 17);
            echo ",";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17);
                echo ",";
            }
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 17);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 17);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 17);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 17);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </select>
  </div>
  <br/>
  <div id=\"payment-new\" style=\"display: ";
        // line 22
        if ( !($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <form id=\"form-payment-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 26
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"firstname\" value=\"";
        // line 27
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
          <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 31
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"lastname\" value=\"";
        // line 32
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
          <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
        // line 36
        echo ($context["entry_company"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"company\" value=\"";
        // line 37
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 40
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"address_1\" value=\"";
        // line 41
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 45
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"address_2\" value=\"";
        // line 46
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
        // line 49
        echo ($context["entry_city"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"city\" value=\"";
        // line 50
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 54
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"postcode\" value=\"";
        // line 55
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
        // line 59
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
        // line 61
        echo ($context["text_select"] ?? null);
        echo "</option>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 63
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 63);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 63) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 63);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 69
        echo ($context["entry_zone"] ?? null);
        echo "</label>
          <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 74
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 74) == "select")) {
                // line 75
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 75)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\">
              <label for=\"input-payment-custom-field-";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 76);
                echo "</label>
              <select name=\"custom_field[";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 77);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                echo "]\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                echo "\" class=\"form-select\">
                <option value=\"\">";
                // line 78
                echo ($context["text_select"] ?? null);
                echo "</option>
                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 80
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 80);
                    echo "\"";
                    if (((($__internal_compile_0 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 80) == (($__internal_compile_1 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80)] ?? null) : null)))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 80);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "              </select>
              <div id=\"error-payment-custom-field-";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 86
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 86) == "radio")) {
                // line 87
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 87)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\">
              <label class=\"form-label\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 88);
                echo "</label>
              <div id=\"input-payment-custom-field-";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "\">
                ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 90));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 91
                    echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 92);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                    echo "\" id=\"input-payment-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_2 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92) == (($__internal_compile_3 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-payment-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 92);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "              </div>
              <div id=\"error-payment-custom-field-";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 99
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "checkbox")) {
                // line 100
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 100)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                echo "\">
              <label class=\"form-label\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                echo "</label>
              <div id=\"input-payment-custom-field-";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                echo "\">
                ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 104
                    echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 105);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105);
                    echo "\" id=\"input-payment-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_4 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105), (($__internal_compile_5 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/>
                    <label for=\"input-payment-custom-value-";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 106);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "              </div>
              <div id=\"error-payment-custom-field-";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 113
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113) == "text")) {
                // line 114
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 114)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                echo "\">
              <label for=\"input-payment-custom-field-";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                echo "</label>
              <input type=\"text\" name=\"custom_field[";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 116);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 116);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                echo "\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 120
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "textarea")) {
                // line 121
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 121)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                echo "\">
              <label for=\"input-payment-custom-field-";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                echo "</label>
              <textarea name=\"custom_field[";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_8 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) {
                    echo (($__internal_compile_9 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                }
                echo "</textarea>
              <div id=\"error-payment-custom-field-";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 127
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "file")) {
                // line 128
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                echo "\">
              <label class=\"form-label\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 131
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 132);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null);
                }
                echo "\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\"/>
              </div>
              <div id=\"error-payment-custom-field-";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 137
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "date")) {
                // line 138
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 138)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "\">
              <label for=\"input-payment-custom-field-";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                echo "\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-payment-custom-field-";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 147
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 147) == "time")) {
                // line 148
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 148)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                echo "\">
              <label for=\"input-payment-custom-field-";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 151);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 151);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                echo "\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-payment-custom-field-";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 157
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "datetime")) {
                // line 158
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 158)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\">
              <label for=\"input-payment-custom-field-";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 161);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                echo "\" id=\"input-payment-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-payment-custom-field-";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 167
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\">";
        // line 170
        echo ($context["button_continue"] ?? null);
        echo "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_existing\\']').on('change', function () {
    if (\$(this).val() == 1) {
        \$('#payment-existing').show();
        \$('#payment-new').hide();
    } else {
        \$('#payment-existing').hide();
        \$('#payment-new').show();
    }
});

// Existing Payment Address
\$('#input-payment-address').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.address&language=";
        // line 192
        echo ($context["language"] ?? null);
        echo "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-payment-method').trigger('click');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Payment Address
\$('#form-payment-address').on('submit', function (e) {
    e.preventDefault();

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language=";
        // line 230
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-payment-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$('#button-payment-address').prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$('#button-payment-address').prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                console.log(json);

                \$('#form-payment-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-payment-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    var addresses = [];

                    // Payment addresses
                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            addresses[i] = {
                                text: json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'],
                                value: json['addresses'][i]['address_id']
                            };
                        }
                    }

                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == json['address_id']) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-payment-address').html(html);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                  ";
        // line 295
        if (($context["shipping_required"] ?? null)) {
            // line 296
            echo "                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == \$('#input-shipping-address').val()) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-shipping-address').html(html);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');
                  ";
        }
        // line 312
        echo "
                    \$('#form-payment-address')[0].reset();

                    \$('#button-payment-method').trigger('click');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-payment-country').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 330
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-payment-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-payment-postcode').parent().addClass('required');
                } else {
                    \$('#input-payment-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 345
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 351
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 358
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-payment-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-payment-country').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 358,  917 => 351,  908 => 345,  890 => 330,  870 => 312,  852 => 296,  850 => 295,  782 => 230,  741 => 192,  716 => 170,  712 => 168,  706 => 167,  700 => 164,  682 => 161,  675 => 159,  666 => 158,  663 => 157,  657 => 154,  639 => 151,  632 => 149,  623 => 148,  620 => 147,  614 => 144,  596 => 141,  589 => 139,  580 => 138,  577 => 137,  571 => 134,  558 => 132,  546 => 131,  541 => 129,  532 => 128,  529 => 127,  523 => 124,  507 => 123,  501 => 122,  492 => 121,  489 => 120,  483 => 117,  467 => 116,  461 => 115,  452 => 114,  449 => 113,  443 => 110,  440 => 109,  429 => 106,  415 => 105,  412 => 104,  408 => 103,  404 => 102,  400 => 101,  391 => 100,  388 => 99,  382 => 96,  379 => 95,  356 => 92,  353 => 91,  349 => 90,  345 => 89,  341 => 88,  332 => 87,  329 => 86,  323 => 83,  320 => 82,  305 => 80,  301 => 79,  297 => 78,  289 => 77,  283 => 76,  274 => 75,  271 => 74,  267 => 73,  260 => 69,  254 => 65,  239 => 63,  235 => 62,  231 => 61,  226 => 59,  217 => 55,  213 => 54,  204 => 50,  200 => 49,  192 => 46,  188 => 45,  179 => 41,  175 => 40,  167 => 37,  163 => 36,  154 => 32,  150 => 31,  141 => 27,  137 => 26,  126 => 22,  121 => 19,  94 => 17,  90 => 16,  86 => 15,  77 => 13,  71 => 10,  65 => 9,  59 => 6,  53 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/payment_address.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/payment_address.twig");
    }
}
