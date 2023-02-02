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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_9efdd258aa6126da45dd6d5bcee7dedb1488abc14c5591b1919b3df6608b1576 extends Template
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
        echo "
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row mb-3\">
        <div class=\"col-sm\">
          ";
        // line 13
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 14
            echo "            <div class=\"image magnific-popup\">
              ";
            // line 15
            if (($context["thumb"] ?? null)) {
                // line 16
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 18
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 19
                echo "                <div>
                  ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                </div>
              ";
            }
            // line 25
            echo "            </div>
          ";
        }
        // line 27
        echo "        </div>
        <div class=\"col-sm\">
          <h1>";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 31
        if (($context["manufacturer"] ?? null)) {
            // line 32
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 34
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 35
        if (($context["reward"] ?? null)) {
            // line 36
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 38
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 40
        if (($context["price"] ?? null)) {
            // line 41
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 42
            if ( !($context["special"] ?? null)) {
                // line 43
                echo "                <li>
                  <h2><span class=\"price-new\">";
                // line 44
                echo ($context["price"] ?? null);
                echo "</span></h2>
                </li>
              ";
            } else {
                // line 47
                echo "                <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 48
                echo ($context["special"] ?? null);
                echo "</span></h2></li>
              ";
            }
            // line 50
            echo "              ";
            if (($context["tax"] ?? null)) {
                // line 51
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 53
            echo "              ";
            if (($context["points"] ?? null)) {
                // line 54
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 56
            echo "              ";
            if (($context["discounts"] ?? null)) {
                // line 57
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 61
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 61);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 61);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "              ";
            }
            // line 64
            echo "            </ul>
          ";
        }
        // line 66
        echo "          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 68
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 69
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 71
        echo ($context["product_id"] ?? null);
        echo "\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 76
        if (($context["options"] ?? null)) {
            // line 77
            echo "            <hr>
              <h3>";
            // line 78
            echo ($context["text_option"] ?? null);
            echo "</h3>
              <div>
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 81
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 81) == "select")) {
                    // line 82
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 82)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 83);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 83);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 83);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 83);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 84
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 85));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 86
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 86);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 86);
                        echo "
                            ";
                        // line 87
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 87)) {
                            // line 88
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 88);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 88);
                            echo ")
                            ";
                        }
                        // line 89
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 92);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 95
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 95) == "radio")) {
                    // line 96
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 96)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 97);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                    echo "\">
                        ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 99));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 100
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 101);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 101);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 101);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 101)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 101);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 101);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 101)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 101);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 101);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 102
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 102);
                        echo "
                              ";
                        // line 103
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 103)) {
                            // line 104
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 104);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104);
                            echo ")
                              ";
                        }
                        // line 106
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 113
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                    // line 114
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 114)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 115);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 116);
                    echo "\">

                        ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 118));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 119
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                        echo "\" class=\"form-check-input\"/>

                            <label for=\"input-option-value-";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 122);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 123
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 123)) {
                            // line 124
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 124);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 124);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 124);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 125
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 125);
                        echo "
                              ";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 127);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127);
                            echo ")
                              ";
                        }
                        // line 128
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 131
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 135
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 135) == "text")) {
                    // line 136
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 136)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 137);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 137);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 137);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 141
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 141) == "textarea")) {
                    // line 142
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 142)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 143);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 143);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 143);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 147
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "file")) {
                    // line 148
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 148)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 149);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 157
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "date")) {
                    // line 158
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 161);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 167
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 167) == "datetime")) {
                    // line 168
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 168)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 169);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 171);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 177
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "time")) {
                    // line 178
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 181);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 187
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                ";
        }
        // line 189
        echo "
                ";
        // line 190
        if (($context["subscription_plans"] ?? null)) {
            // line 191
            echo "                  <hr/>
                  <h3>";
            // line 192
            echo ($context["text_subscription"] ?? null);
            echo "</h3>
                  <div class=\"mb-3 required\">
                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 195
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 197
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 197);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 197);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                    </select>
                    ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 201
                echo "                      <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 201);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 201);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                  </div>
                ";
        }
        // line 206
        echo "                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 207
        echo ($context["entry_qty"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                  <br/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 210
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
                ";
        // line 212
        if ((($context["minimum"] ?? null) > 1)) {
            // line 213
            echo "                  <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 215
        echo "              </div>
              ";
        // line 216
        if (($context["review_status"] ?? null)) {
            // line 217
            echo "                <div class=\"rating\">
                  <p>";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 219
                echo "                      ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 220
                    echo "                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                } else {
                    // line 222
                    echo "                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                }
                // line 224
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                    <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["text_reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
                </div>
              ";
        }
        // line 228
        echo "            </form>
          </div>
        </div>
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 232
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
          ";
        // line 233
        if (($context["attribute_groups"] ?? null)) {
            // line 234
            echo "            <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
          ";
        }
        // line 236
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 237
            echo "            <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
          ";
        }
        // line 239
        echo "        </ul>
        <div class=\"tab-content\">

          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 242
        echo ($context["description"] ?? null);
        echo "</div>
          ";
        // line 243
        if (($context["attribute_groups"] ?? null)) {
            // line 244
            echo "            <div id=\"tab-specification\" class=\"tab-pane fade\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  ";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 248
                echo "                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 250);
                echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 254
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 254));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 255
                    echo "                        <tr>
                          <td>";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 256);
                    echo "</td>
                          <td>";
                    // line 257
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 257);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "                </table>
              </div>
            </div>
          ";
        }
        // line 266
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 267
            echo "            <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            echo ($context["review"] ?? null);
            echo "</div>
          ";
        }
        // line 269
        echo "        </div>
      </div>
      ";
        // line 271
        if (($context["products"] ?? null)) {
            // line 272
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
          ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 275
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "        </div>
      ";
        }
        // line 279
        echo "      ";
        if (($context["tags"] ?? null)) {
            // line 280
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 282
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 282);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 282);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "end", [], "any", false, false, false, 282)) {
                    echo ",";
                }
                // line 283
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "        </p>
      ";
        }
        // line 286
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 287
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function (e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 302
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function () {
            \$('#button-cart').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-cart').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart.info');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function () {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 350
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1101 => 350,  1050 => 302,  1032 => 287,  1027 => 286,  1023 => 284,  1009 => 283,  1000 => 282,  983 => 281,  978 => 280,  975 => 279,  971 => 277,  962 => 275,  958 => 274,  952 => 272,  950 => 271,  946 => 269,  940 => 267,  937 => 266,  931 => 262,  924 => 260,  915 => 257,  911 => 256,  908 => 255,  904 => 254,  897 => 250,  893 => 248,  889 => 247,  884 => 244,  882 => 243,  878 => 242,  873 => 239,  867 => 237,  864 => 236,  858 => 234,  856 => 233,  852 => 232,  846 => 228,  837 => 225,  831 => 224,  827 => 222,  823 => 220,  820 => 219,  816 => 218,  813 => 217,  811 => 216,  808 => 215,  802 => 213,  800 => 212,  795 => 210,  785 => 207,  782 => 206,  777 => 203,  766 => 201,  762 => 200,  759 => 199,  748 => 197,  744 => 196,  740 => 195,  734 => 192,  731 => 191,  729 => 190,  726 => 189,  723 => 188,  717 => 187,  711 => 184,  701 => 181,  694 => 179,  687 => 178,  684 => 177,  678 => 174,  668 => 171,  661 => 169,  654 => 168,  651 => 167,  645 => 164,  635 => 161,  628 => 159,  621 => 158,  618 => 157,  612 => 154,  605 => 152,  591 => 151,  584 => 149,  577 => 148,  574 => 147,  568 => 144,  554 => 143,  547 => 142,  544 => 141,  538 => 138,  524 => 137,  517 => 136,  514 => 135,  508 => 132,  505 => 131,  497 => 128,  490 => 127,  488 => 126,  483 => 125,  470 => 124,  468 => 123,  464 => 122,  455 => 120,  452 => 119,  448 => 118,  443 => 116,  439 => 115,  432 => 114,  429 => 113,  423 => 110,  420 => 109,  412 => 106,  405 => 104,  403 => 103,  398 => 102,  376 => 101,  373 => 100,  369 => 99,  365 => 98,  361 => 97,  354 => 96,  351 => 95,  345 => 92,  342 => 91,  335 => 89,  328 => 88,  326 => 87,  319 => 86,  315 => 85,  311 => 84,  301 => 83,  294 => 82,  291 => 81,  287 => 80,  282 => 78,  279 => 77,  277 => 76,  269 => 71,  262 => 69,  256 => 68,  252 => 66,  248 => 64,  245 => 63,  234 => 61,  230 => 60,  225 => 57,  222 => 56,  214 => 54,  211 => 53,  203 => 51,  200 => 50,  195 => 48,  190 => 47,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  174 => 40,  166 => 38,  158 => 36,  156 => 35,  149 => 34,  139 => 32,  137 => 31,  132 => 29,  128 => 27,  124 => 25,  120 => 23,  103 => 21,  99 => 20,  96 => 19,  93 => 18,  79 => 16,  77 => 15,  74 => 14,  72 => 13,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "/var/www/html/opencart/upload/catalog/view/template/product/product.twig");
    }
}
