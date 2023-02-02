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

/* dashboard/view/template/catalog/product_form.twig */
class __TwigTemplate_01ee493ee34d0223bf66e531d88294fd9e4a4459c0c524949cc8aa9cc592f529 extends Template
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
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
        if (($context["master_id"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["text_variant"] ?? null);
            echo "</div>
    ";
        }
        // line 20
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">

          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 26
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["tab_subscription"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 38
        echo ($context["tab_report"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 43
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
            // line 44
            echo "                  <li class=\"nav-item\"><a href=\"#language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                echo " active";
            }
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 44);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "</a></li>
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
        // line 46
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 48
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
            // line 49
            echo "                  <div id=\"language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\" class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) {
                echo " active";
            }
            echo "\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "name", [], "any", false, false, false, 54)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"form-control\"/>
                          ";
            // line 55
            if (($context["master_id"] ?? null)) {
                // line 56
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "][name]\" value=\"1\" id=\"input-variant-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" class=\"form-check-input\"/> <label for=\"input-variant-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 62
            echo "                        </div>
                        <div id=\"error-name-";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"w-100 position-relative\">";
            echo (((($__internal_compile_2 = ($context["product_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["product_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null), "description", [], "any", false, false, false, 71)) : (""));
            echo "</textarea>
                          </div>
                          ";
            // line 73
            if (($context["master_id"] ?? null)) {
                // line 74
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                echo "][description]\" value=\"1\" id=\"input-variant-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 76)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null), "description", [], "any", false, false, false, 76)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 80
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null), "meta_title", [], "any", false, false, false, 87)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\" class=\"form-control\"/>
                          ";
            // line 88
            if (($context["master_id"] ?? null)) {
                // line 89
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 91)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null), "meta_title", [], "any", false, false, false, 91)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 95
            echo "                        </div>
                        <div id=\"error-meta-title-";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null), "meta_description", [], "any", false, false, false, 103)) : (""));
            echo "</textarea>
                          ";
            // line 104
            if (($context["master_id"] ?? null)) {
                // line 105
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 107)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107)] ?? null) : null), "meta_description", [], "any", false, false, false, 107)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 111
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 118)) : (""));
            echo "</textarea>
                          ";
            // line 119
            if (($context["master_id"] ?? null)) {
                // line 120
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 122)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 122)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 126
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_tag"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
            echo "][tag]\" value=\"";
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133)] ?? null) : null), "tag", [], "any", false, false, false, 133)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
            echo "\" class=\"form-control\"/>
                          ";
            // line 134
            if (($context["master_id"] ?? null)) {
                // line 135
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo "][tag]\" value=\"1\" id=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 137)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137)] ?? null) : null), "tag", [], "any", false, false, false, 137)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 141
            echo "                        </div>
                        <div class=\"form-text\">";
            // line 142
            echo ($context["help_tag"] ?? null);
            echo "</div>
                      </div>
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
        // line 147
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 150
        echo ($context["master_id"] ?? null);
        echo "\"/>
              <fieldset>
                <legend>";
        // line 152
        echo ($context["text_model"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 154
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 157
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 158
        if (($context["master_id"] ?? null)) {
            // line 159
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 161
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 161)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 165
        echo "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 170
        echo ($context["entry_sku"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 173
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 174
        if (($context["master_id"] ?? null)) {
            // line 175
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 177)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 181
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 182
        echo ($context["help_sku"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 186
        echo ($context["entry_upc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 189
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 190
        if (($context["master_id"] ?? null)) {
            // line 191
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"";
            // line 193
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 193)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 197
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 198
        echo ($context["help_upc"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 202
        echo ($context["entry_ean"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 205
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 206
        if (($context["master_id"] ?? null)) {
            // line 207
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"";
            // line 209
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 209)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 213
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 214
        echo ($context["help_ean"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 218
        echo ($context["entry_jan"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 221
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 222
        if (($context["master_id"] ?? null)) {
            // line 223
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"";
            // line 225
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 225)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 229
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 230
        echo ($context["help_jan"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 234
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 237
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 238
        if (($context["master_id"] ?? null)) {
            // line 239
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"";
            // line 241
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 241)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 245
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 246
        echo ($context["help_isbn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 250
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 253
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 254
        if (($context["master_id"] ?? null)) {
            // line 255
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"";
            // line 257
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 257)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 261
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 262
        echo ($context["help_mpn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 266
        echo ($context["entry_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 269
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 270
        if (($context["master_id"] ?? null)) {
            // line 271
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 273
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 273)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 277
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 282
        echo ($context["text_price"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 284
        echo ($context["entry_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 287
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 288
        if (($context["master_id"] ?? null)) {
            // line 289
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 291
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 291)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 295
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 299
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 303
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 305
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 305);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 305) == ($context["tax_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 305);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                      </select>
                      ";
        // line 308
        if (($context["master_id"] ?? null)) {
            // line 309
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 311
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 311)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 315
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 320
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 322
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 324
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 328
        echo ($context["entry_minimum"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 331
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 332
        if (($context["master_id"] ?? null)) {
            // line 333
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 335)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 339
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 340
        echo ($context["help_minimum"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 344
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">

                    <div class=\"input-group\">

                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 350
        if (($context["subtract"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>

                      ";
        // line 353
        if (($context["master_id"] ?? null)) {
            // line 354
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 356
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 356)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 360
        echo "
                    </div>

                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 366
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 371
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 371);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 371) == ($context["stock_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 371);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                      </select>
                      ";
        // line 374
        if (($context["master_id"] ?? null)) {
            // line 375
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 377
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 377)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 381
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 382
        echo ($context["help_stock_status"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 386
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"date_available\" value=\"";
        // line 389
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" id=\"input-date-available\" class=\"form-control date\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      ";
        // line 391
        if (($context["master_id"] ?? null)) {
            // line 392
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 394)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 398
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 403
        echo ($context["text_specification"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 405
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">

                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 410
        if (($context["shipping"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>

                      ";
        // line 413
        if (($context["master_id"] ?? null)) {
            // line 414
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 416
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 416)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 420
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 424
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 427
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 428
        if (($context["master_id"] ?? null)) {
            // line 429
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 431
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 431)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 435
        echo "                      <input type=\"text\" name=\"width\" value=\"";
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 436
        if (($context["master_id"] ?? null)) {
            // line 437
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 439
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 439)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 443
        echo "                      <input type=\"text\" name=\"height\" value=\"";
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 444
        if (($context["master_id"] ?? null)) {
            // line 445
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 447
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 447)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 451
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 455
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 460
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 460);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 460) == ($context["length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 460);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "                      </select>
                      ";
        // line 463
        if (($context["master_id"] ?? null)) {
            // line 464
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 466
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 466)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 470
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 474
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 477
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 478
        if (($context["master_id"] ?? null)) {
            // line 479
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 481
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 481)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 485
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 489
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 494
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 494);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 494) == ($context["weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 494);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
        echo "                      </select>
                      ";
        // line 497
        if (($context["master_id"] ?? null)) {
            // line 498
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 500
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 500)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 504
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 508
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 512
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 514
        if (($context["master_id"] ?? null)) {
            // line 515
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 517
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 517)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 521
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 525
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 528
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 529
        if (($context["master_id"] ?? null)) {
            // line 530
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 532
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 532)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 536
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 543
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 546
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 547
        if (($context["master_id"] ?? null)) {
            // line 548
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 550
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 550)) {
                echo " checked";
            }
            echo "/>
                          <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 555
        echo "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 556
        echo ($context["manufacturer_id"] ?? null);
        echo "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 558
        echo ($context["help_manufacturer"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 562
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 564
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 571
            echo "                            <tr id=\"product-category-";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 571);
            echo "\">
                              <td>";
            // line 572
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 572);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 572);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 576
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 579
        if (($context["master_id"] ?? null)) {
            // line 580
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 582
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 582)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 586
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 587
        echo ($context["help_category"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 591
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 593
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 600
            echo "                            <tr id=\"product-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 600);
            echo "\">
                              <td>";
            // line 601
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 601);
            echo "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 601);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 608
        if (($context["master_id"] ?? null)) {
            // line 609
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 611
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 611)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 615
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 616
        echo ($context["help_filter"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 620
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 624
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 625
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 626
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 626);
            echo "\" id=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 626);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 626), ($context["product_store"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 626);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 626);
            echo "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        echo "                    </div>
                    ";
        // line 630
        if (($context["master_id"] ?? null)) {
            // line 631
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 633
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 633)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 637
        echo "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 641
        echo ($context["entry_download"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 643
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 649
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 650
            echo "                            <tr id=\"product-download-";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 650);
            echo "\">
                              <td>";
            // line 651
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 651);
            echo "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 651);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 658
        if (($context["master_id"] ?? null)) {
            // line 659
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 661
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 661)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 665
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 666
        echo ($context["help_download"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 670
        echo ($context["entry_related"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 672
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 679
            echo "                            <tr id=\"product-related-";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 679);
            echo "\">
                              <td>";
            // line 680
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 680);
            echo "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 680);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 687
        if (($context["master_id"] ?? null)) {
            // line 688
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 690
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 690)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 694
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 695
        echo ($context["help_related"] ?? null);
        echo "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 704
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 705
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 707
        if (($context["master_id"] ?? null)) {
            // line 708
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 709
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 709)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 712
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 716
        $context["attribute_row"] = 0;
        // line 717
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 718
            echo "                      <tr id=\"attribute-row-";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-start\">
                          <input type=\"text\" name=\"product_attribute[";
            // line 720
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 720);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" id=\"input-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" data-oc-target=\"autocomplete-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 721
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 721);
            echo "\" id=\"input-attribute-id-";
            echo ($context["attribute_row"] ?? null);
            echo "\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 722
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"dropdown-menu\"></ul>
                        </td>
                        <td class=\"text-start\">
                          ";
            // line 725
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 726
                echo "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 727
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 727);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 727);
                echo "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 728
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 728);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" id=\"input-text-";
                echo ($context["attribute_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 728);
                echo "\" class=\"form-control\">";
                echo (((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 728)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 728)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 728)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 728)] ?? null) : null), "text", [], "any", false, false, false, 728)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 730
            echo "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 731
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 733
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 734
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 739
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 745
        if ( !($context["master_id"] ?? null)) {
            // line 746
            echo "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">
                  ";
            // line 749
            $context["option_row"] = 0;
            // line 750
            echo "                  ";
            $context["option_value_row"] = 0;
            // line 751
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 752
                echo "
                    <fieldset id=\"option-row-";
                // line 753
                echo ($context["option_row"] ?? null);
                echo "\">
                      <legend class=\"float-none\">";
                // line 754
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 754);
                echo " <button type=\"button\" class=\"btn btn-danger btn-sm float-end\" onclick=\"\$('#option-row-";
                echo ($context["option_row"] ?? null);
                echo "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 755
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 755);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 755);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 755);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 755);
                echo "\"/>

                      <div class=\"row mb-3\">
                        <label for=\"input-required-";
                // line 758
                echo ($context["option_row"] ?? null);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
                // line 760
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required-";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-select\">
                            <option value=\"1\"";
                // line 761
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 761)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                            <option value=\"0\"";
                // line 762
                if ( !twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 762)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                          </select>
                        </div>
                      </div>

                      ";
                // line 767
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 767) == "text")) {
                    // line 768
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 769
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_option[";
                    // line 771
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 771);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                      ";
                }
                // line 775
                echo "
                      ";
                // line 776
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 776) == "textarea")) {
                    // line 777
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 778
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_option[";
                    // line 780
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 780);
                    echo "</textarea>
                          </div>
                        </div>
                      ";
                }
                // line 784
                echo "
                      ";
                // line 785
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 785) == "file")) {
                    // line 786
                    echo "                        <div class=\"row mb-3 d-none\">
                          <label for=\"input-option-";
                    // line 787
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 788
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 788);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 791
                echo "
                      ";
                // line 792
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 792) == "date")) {
                    // line 793
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 794
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 797
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 797);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control date\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 803
                echo "
                      ";
                // line 804
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 804) == "time")) {
                    // line 805
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 806
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 809
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 809);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control time\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 815
                echo "
                      ";
                // line 816
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 816) == "datetime")) {
                    // line 817
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 818
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 821
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 821);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control datetime\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 827
                echo "
                      ";
                // line 828
                if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 828) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 828) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 828) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 828) == "image"))) {
                    // line 829
                    echo "                        <div class=\"table-responsive\">
                          <table class=\"table table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-start\">";
                    // line 833
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 834
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                                <td class=\"text-start\">";
                    // line 835
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 836
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 837
                    echo ($context["entry_points"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 838
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody id=\"option-value-";
                    // line 842
                    echo ($context["option_row"] ?? null);
                    echo "\">
                              ";
                    // line 843
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 843));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 844
                        echo "                                <tr id=\"option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
                                  <td class=\"text-start\">";
                        // line 845
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 845);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 846
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 846);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 846);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 847
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 847);
                        echo " <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 847);
                        echo "\"/></td>
                                  <td class=\"text-start\">";
                        // line 848
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 848)) {
                            // line 849
                            echo "                                      ";
                            echo ($context["text_yes"] ?? null);
                            echo "
                                    ";
                        } else {
                            // line 851
                            echo "                                      ";
                            echo ($context["text_no"] ?? null);
                            echo "
                                    ";
                        }
                        // line 853
                        echo "                                    <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 853);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 854
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 854);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 854);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 855
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 855);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 855);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 856
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 856);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 856);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 857
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 857);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 857);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 858
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 858);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 858);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 859
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 859);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 859);
                        echo "\"/></td>
                                  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 860
                        echo ($context["button_edit"] ?? null);
                        echo "\" data-option-row=\"";
                        echo ($context["option_row"] ?? null);
                        echo "\" data-option-value-row=\"";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                </tr>
                                ";
                        // line 862
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 863
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 864
                    echo "                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 868
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" data-option-row=\"";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                              </tr>
                            </tfoot>
                          </table>
                          <select id=\"product-option-values-";
                    // line 872
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"d-none\">
                            ";
                    // line 873
                    if ((($__internal_compile_19 = ($context["option_values"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 873)] ?? null) : null)) {
                        // line 874
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 874)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 875
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 875);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 875);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 877
                        echo "                            ";
                    }
                    // line 878
                    echo "                          </select>
                        </div>
                      ";
                }
                // line 881
                echo "                    </fieldset>

                    ";
                // line 883
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 884
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 885
            echo "                </div>

                <fieldset>
                  <legend class=\"float-none\">";
            // line 888
            echo ($context["text_option_add"] ?? null);
            echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 890
            echo ($context["entry_option"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 892
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 894
            echo ($context["help_option"] ?? null);
            echo "</div>
                    </div>
                  </div>
                </fieldset>
              </div>

            ";
        } else {
            // line 901
            echo "
              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 903
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 904
                echo "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 905
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 905);
                echo "</legend>

                    ";
                // line 907
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 907) == "select")) {
                    // line 908
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 908)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 909
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 909);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 912
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 912);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 912);
                    echo "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 913
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 914
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 914));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 915
                        echo "                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 915);
                        echo "\"";
                        if (((($__internal_compile_21 = ($context["variant"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 915)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 915) == (($__internal_compile_22 = ($context["variant"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 915)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 915);
                        echo "
                                  ";
                        // line 916
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 916)) {
                            // line 917
                            echo "                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 917);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 917);
                            echo ")
                                  ";
                        }
                        // line 918
                        echo "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 920
                    echo "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 923
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 923);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 923);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 923);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 923)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 923)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 923);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 927
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 927);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 931
                echo "
                    ";
                // line 932
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 932) == "radio")) {
                    // line 933
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 933)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 934
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 934);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 937
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 937);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 938
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 938));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 939
                        echo "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 940
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 940);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 940);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 940);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_24 = ($context["variant"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 940)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 940) == (($__internal_compile_25 = ($context["variant"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 940)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 940);
                        echo "\" class=\"form-check-label\">
                                    ";
                        // line 941
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 941)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 941);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 941);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 941)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 941);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 941);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 942
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 942);
                        echo "
                                    ";
                        // line 943
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 943)) {
                            // line 944
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 944);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 944);
                            echo ")
                                    ";
                        }
                        // line 946
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 949
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 952
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 952);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 952);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 952);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 952)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 952)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 952);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 956
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 956);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 960
                echo "
                    ";
                // line 961
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 961) == "checkbox")) {
                    // line 962
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 962)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 963
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 963);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 966
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 966);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 967
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 967));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 968
                        echo "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 969
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 969);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 969);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 969);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_27 = ($context["variant"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 969)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 969), (($__internal_compile_28 = ($context["variant"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 969)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 969);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 969)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 969);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 969);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 969)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 969);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 969);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 970
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 970);
                        echo "
                                    ";
                        // line 971
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 971)) {
                            // line 972
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 972);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 972);
                            echo ")
                                    ";
                        }
                        // line 974
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 977
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 980
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 980);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 980);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 980);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 980)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 980)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 980);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 984
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 984);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 988
                echo "
                    ";
                // line 989
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 989) == "text")) {
                    // line 990
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 990)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 991
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 991);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 991);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 994
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_30 = ($context["variant"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994)] ?? null) : null)) ? ((($__internal_compile_31 = ($context["variant"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 994)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 994);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 997
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 997)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 997);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1001
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1001);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1005
                echo "
                    ";
                // line 1006
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1006) == "textarea")) {
                    // line 1007
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1007)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1008
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1008);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1011
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1011);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_33 = ($context["variant"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011)] ?? null) : null)) ? ((($__internal_compile_34 = ($context["variant"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1011)));
                    echo "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1014
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1014)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1014);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1018
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1018);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1022
                echo "
                    ";
                // line 1023
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1023) == "file")) {
                    // line 1024
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1024)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1025
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1025);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1028
                    echo ($context["upload"] ?? null);
                    echo "\" id=\"button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1029
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1029);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["variant"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1029)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["variant"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1029)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1029)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1029);
                    echo "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1030
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030);
                    echo "\"";
                    if ( !(($__internal_compile_38 = ($context["variant"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1031
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031);
                    echo "\"";
                    if ( !(($__internal_compile_39 = ($context["variant"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1034
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1034);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1034);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1034);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1034)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1034)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1034);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1038
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1038);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1042
                echo "
                    ";
                // line 1043
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1043) == "date")) {
                    // line 1044
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1044)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1045
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1045);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1048
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1048);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_41 = ($context["variant"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1048)] ?? null) : null)) ? ((($__internal_compile_42 = ($context["variant"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1048)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1048)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1048);
                    echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1052
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1052);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1052);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1052);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1052)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1052)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1052);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1056
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1060
                echo "
                    ";
                // line 1061
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1061) == "time")) {
                    // line 1062
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1062)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1063
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1063);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1063);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1065
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1065);
                    echo "\" class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1066
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_44 = ($context["variant"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066)] ?? null) : null)) ? ((($__internal_compile_45 = ($context["variant"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1066)));
                    echo "\" class=\"form-control time\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1070
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_46 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1070)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1074
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1074);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1078
                echo "
                    ";
                // line 1079
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1079) == "datetime")) {
                    // line 1080
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1080)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1081
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1081);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1081);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1084
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_47 = ($context["variant"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084)] ?? null) : null)) ? ((($__internal_compile_48 = ($context["variant"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1084)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1088
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_49 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1088)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1092
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1092);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1096
                echo "
                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1099
            echo "              </div>
            ";
        }
        // line 1101
        echo "
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1107
        echo ($context["entry_subscription"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1108
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 1110
        if (($context["master_id"] ?? null)) {
            // line 1111
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1112
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1112)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1115
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1119
        $context["subscription_row"] = 0;
        // line 1120
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1121
            echo "                      <tr id=\"subscription-row-";
            echo ($context["subscription_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1122
            echo ($context["subscription_row"] ?? null);
            echo "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1124
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1124);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1124) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1124))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1124);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1126
            echo "                          </select></td>
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1127
            echo ($context["subscription_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1129
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1129);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1129) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1129))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1129);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1131
            echo "                          </select></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1132
            echo ($context["subscription_row"] ?? null);
            echo "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1134
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1135
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1136
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1140
        echo ($context["button_subscription_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1152
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1153
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1154
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1155
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1156
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1157
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1158
        if (($context["master_id"] ?? null)) {
            // line 1159
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1160
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1160)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1162
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1166
        $context["discount_row"] = 0;
        // line 1167
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1168
            echo "                      <tr id=\"discount-row-";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_discount[";
            // line 1169
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1171
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1171);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1171) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1171))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1171);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1173
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1174
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1174);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1175
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1175);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1176
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1176);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1179
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1179);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1185
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1185);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1189
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1191
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1192
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1193
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1197
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1209
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1210
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1211
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1212
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1213
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 1214
        if (($context["master_id"] ?? null)) {
            // line 1215
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-oc-toggle=\"switch\" data-oc-target=\"#product-special\" class=\"form-check-input\"";
            // line 1216
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [], "any", false, false, false, 1216)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-special\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1218
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1222
        $context["special_row"] = 0;
        // line 1223
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1224
            echo "                      <tr id=\"special-row-";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_special[";
            // line 1225
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1227
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1227);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1227) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1227))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1227);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1229
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1230
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1230);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1231
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1231);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1234
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1234);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1240
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1240);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#special-row-";
            // line 1244
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1246
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1247
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1248
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-special\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1252
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">

              <fieldset>
                <legend>";
        // line 1262
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row\">
                  <div class=\"col-sm-4 col-md-3 mb-3\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 1266
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1268
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1269
        echo ($context["button_clear"] ?? null);
        echo "</button>

                        ";
        // line 1271
        if (($context["master_id"] ?? null)) {
            // line 1272
            echo "                          <div class=\"mx-auto w-25\">
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1274
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1274)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                            </div>
                          </div>
                        ";
        }
        // line 1278
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 1286
        echo ($context["text_image_additional"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1291
        echo ($context["entry_image"] ?? null);
        echo "</td>
                        <td class=\"text-start\">";
        // line 1292
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                        <td class=\"text-end\">

                          ";
        // line 1295
        if (($context["master_id"] ?? null)) {
            // line 1296
            echo "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1297
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1297)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1300
        echo "
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1305
        $context["image_row"] = 0;
        // line 1306
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1307
            echo "                        <tr id=\"product-image-row-";
            echo ($context["image_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"card image\">
                              <img src=\"";
            // line 1310
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1310);
            echo "\" alt=\"\" title=\"\" id=\"product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1310);
            echo "\" id=\"input-product-image-";
            echo ($context["image_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1312
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1313
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-start\"><input type=\"text\" name=\"product_image[";
            // line 1317
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1317);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1318
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1320
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1321
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1322
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1326
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1336
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1338
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1341
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1342
        if (($context["master_id"] ?? null)) {
            // line 1343
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1345
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1345)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1349
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1350
        echo ($context["help_points"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1355
        echo ($context["text_points"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1360
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                        <td class=\"text-end\">";
        // line 1361
        echo ($context["entry_reward"] ?? null);
        echo "&nbsp;&nbsp;
                          ";
        // line 1362
        if (($context["master_id"] ?? null)) {
            // line 1363
            echo "                            <div class=\"form-check form-switch float-end\">
                              <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1364
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1364)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1367
        echo "                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1372
            echo "                        <tr>
                          <td class=\"text-start\">";
            // line 1373
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1373);
            echo "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1374
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1374);
            echo "][points]\" value=\"";
            echo (((($__internal_compile_50 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1374)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_51 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1374)] ?? null) : null), "points", [], "any", false, false, false, 1374)) : (""));
            echo "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1377
        echo "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1384
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1389
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1390
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1395
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1396
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1396);
            echo "</td>
                        <td class=\"text-start\">
                          ";
            // line 1398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1399
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1400
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1400);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1400);
                echo "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1401
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1401);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1401);
                echo "]\" value=\"";
                if ((($__internal_compile_52 = (($__internal_compile_53 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1401)] ?? null) : null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1401)] ?? null) : null)) {
                    echo (($__internal_compile_54 = (($__internal_compile_55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1401)] ?? null) : null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1401)] ?? null) : null);
                }
                echo "\" id=\"input-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1401);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1401);
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1403
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1403);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1403);
                echo "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1404
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1407
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1416
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1417
        echo ($context["entry_layout"] ?? null);
        echo "
                        ";
        // line 1418
        if (($context["master_id"] ?? null)) {
            // line 1419
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1420
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1420)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1423
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1428
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1429
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1429);
            echo "</td>
                        <td class=\"text-start\"><select name=\"product_layout[";
            // line 1430
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1430);
            echo "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1432
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1433
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1433);
                echo "\"";
                if (((($__internal_compile_56 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1433)] ?? null) : null) && ((($__internal_compile_57 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1433)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1433)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1433);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1435
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1438
        echo "                  </tbody>
                </table>

              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1445
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 1446
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1450
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1458
        echo ($context["ckeditor"] ?? null);
        echo "'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1465
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1470
        echo ($context["text_none"] ?? null);
        echo "'
                });

                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1492
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1526
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1560
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1594
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function (attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1628
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function (item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1648
        echo ($context["attribute_row"] ?? null);
        echo ";

\$('#product-attribute tr').each(function (index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function () {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td class=\"text-start\">';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1657
        echo ($context["entry_attribute"] ?? null);
        echo "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td class=\"text-start\">';
  ";
        // line 1662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1663
            echo "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1664
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1664);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1664);
            echo "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1665
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1665);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" id=\"input-text-' + attribute_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1665);
            echo "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1668
        echo "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1669
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1679
        if ( !($context["master_id"] ?? null)) {
            // line 1680
            echo "var option_row = ";
            echo ($context["option_row"] ?? null);
            echo ";

\$('#input-option').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1685
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + ' <button type=\"button\" class=\"btn btn-danger btn-sm float-end\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row mb-3\">';
        html += '    <label for=\"input-required-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1709
            echo ($context["entry_required"] ?? null);
            echo "</label>';
        html += '\t   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t     <option value=\"1\">";
            // line 1711
            echo ($context["text_yes"] ?? null);
            echo "</option>';
        html += '\t     <option value=\"0\">";
            // line 1712
            echo ($context["text_no"] ?? null);
            echo "</option>';
        html += '\t </select></div>';
        html += '  </div>';

        if (item['type'] == 'text') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1718
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1719
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'textarea') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1725
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1726
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'file') {
            html += '\t<div class=\"row mb-3 d-none\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1732
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 d-none\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1733
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'date') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1739
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1740
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'time') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1746
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1747
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1753
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1754
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table id=\"option-value-' + option_row + '\" class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td class=\"text-start\">";
            // line 1763
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1764
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
            html += '        <td class=\"text-start\">";
            // line 1765
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1766
            echo ($context["entry_price"] ?? null);
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1767
            echo ($context["entry_points"] ?? null);
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1768
            echo ($context["entry_weight"] ?? null);
            echo "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1776
            echo ($context["button_option_value_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '  <select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
            html += '</fieldset>';
        }

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1798
            echo ($context["option_value_row"] ?? null);
            echo ";

\$('#option').on('click', '.btn-primary', function () {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1815
            echo ($context["text_option_value"] ?? null);
            echo "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1819
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected=\"selected\">' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';

    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1839
            echo ($context["entry_quantity"] ?? null);
            echo "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1840
            echo ($context["entry_quantity"] ?? null);
            echo "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1844
            echo ($context["entry_subtract"] ?? null);
            echo "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected=\"selected\">";
            // line 1848
            echo ($context["text_yes"] ?? null);
            echo "</option>';
        html += '      \t <option value=\"0\">";
            // line 1849
            echo ($context["text_no"] ?? null);
            echo "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1851
            echo ($context["text_yes"] ?? null);
            echo "</option>';
        html += '      \t <option value=\"0\" selected=\"selected\">";
            // line 1852
            echo ($context["text_no"] ?? null);
            echo "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1859
            echo ($context["entry_price"] ?? null);
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected=\"selected\">+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected=\"selected\">-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1876
            echo ($context["entry_price"] ?? null);
            echo "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1881
            echo ($context["entry_points"] ?? null);
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1898
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1903
            echo ($context["entry_weight"] ?? null);
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1920
            echo ($context["entry_weight"] ?? null);
            echo "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '      </div>';

    html += '      <div class=\"modal-footer\">';
    html += '\t     <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1927
            echo ($context["button_save"] ?? null);
            echo "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            echo ($context["button_cancel"] ?? null);
            echo "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function () {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td class=\"text-start\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td class=\"text-start\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1941
            echo ($context["text_yes"] ?? null);
            echo "' : '";
            echo ($context["text_no"] ?? null);
            echo "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1945
            echo ($context["button_edit"] ?? null);
            echo "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 1960
        echo "
var discount_row = ";
        // line 1961
        echo ($context["discount_row"] ?? null);
        echo ";

\$('#button-discount').on('click', function () {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1967
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1967);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1967), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1969
        echo "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1970
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1971
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1972
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1973
        echo ($context["entry_date_start"] ?? null);
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1974
        echo ($context["entry_date_end"] ?? null);
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1975
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var special_row = ";
        // line 1983
        echo ($context["special_row"] ?? null);
        echo ";

\$('#button-special').on('click', function () {
    html = '<tr id=\"special-row-' + special_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1988
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1989
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1989);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1989), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1991
        echo "    html += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1992
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1993
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1994
        echo ($context["entry_date_start"] ?? null);
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1995
        echo ($context["entry_date_end"] ?? null);
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#special-row-' + special_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1996
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-special tbody').append(html);

    special_row++;
});

var image_row = ";
        // line 2004
        echo ($context["image_row"] ?? null);
        echo ";

\$('#button-image').on('click', function () {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"card image\">';
    html += '    <img src=\"";
        // line 2009
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"card-body\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 2011
        echo ($context["button_edit"] ?? null);
        echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 2012
        echo ($context["button_clear"] ?? null);
        echo "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2015
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2016
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 2024
        echo ($context["subscription_row"] ?? null);
        echo ";

\$('#button-subscription').on('click', function () {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 2029
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 2030
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 2030);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 2030), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2032
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2035
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2035);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2035), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2037
        echo "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2038
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2046
        if (($context["master_id"] ?? null)) {
            // line 2047
            echo "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function (e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function (i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function () {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function (e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2113
        echo "
\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 2120
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dashboard/view/template/catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5077 => 2120,  5068 => 2113,  5000 => 2047,  4998 => 2046,  4987 => 2038,  4984 => 2037,  4973 => 2035,  4969 => 2034,  4965 => 2032,  4954 => 2030,  4950 => 2029,  4942 => 2024,  4931 => 2016,  4927 => 2015,  4921 => 2012,  4917 => 2011,  4910 => 2009,  4902 => 2004,  4891 => 1996,  4887 => 1995,  4883 => 1994,  4879 => 1993,  4875 => 1992,  4872 => 1991,  4861 => 1989,  4857 => 1988,  4849 => 1983,  4838 => 1975,  4834 => 1974,  4830 => 1973,  4826 => 1972,  4822 => 1971,  4818 => 1970,  4815 => 1969,  4804 => 1967,  4800 => 1966,  4792 => 1961,  4789 => 1960,  4769 => 1945,  4760 => 1941,  4741 => 1927,  4731 => 1920,  4711 => 1903,  4703 => 1898,  4683 => 1881,  4675 => 1876,  4655 => 1859,  4645 => 1852,  4641 => 1851,  4636 => 1849,  4632 => 1848,  4625 => 1844,  4618 => 1840,  4614 => 1839,  4591 => 1819,  4584 => 1815,  4564 => 1798,  4539 => 1776,  4528 => 1768,  4524 => 1767,  4520 => 1766,  4516 => 1765,  4512 => 1764,  4508 => 1763,  4496 => 1754,  4492 => 1753,  4483 => 1747,  4479 => 1746,  4470 => 1740,  4466 => 1739,  4457 => 1733,  4453 => 1732,  4444 => 1726,  4440 => 1725,  4431 => 1719,  4427 => 1718,  4418 => 1712,  4414 => 1711,  4409 => 1709,  4382 => 1685,  4373 => 1680,  4371 => 1679,  4358 => 1669,  4355 => 1668,  4342 => 1665,  4336 => 1664,  4333 => 1663,  4329 => 1662,  4321 => 1657,  4309 => 1648,  4286 => 1628,  4249 => 1594,  4212 => 1560,  4175 => 1526,  4138 => 1492,  4113 => 1470,  4105 => 1465,  4095 => 1458,  4084 => 1450,  4077 => 1446,  4073 => 1445,  4064 => 1438,  4056 => 1435,  4041 => 1433,  4037 => 1432,  4032 => 1430,  4028 => 1429,  4025 => 1428,  4021 => 1427,  4015 => 1423,  4007 => 1420,  4004 => 1419,  4002 => 1418,  3998 => 1417,  3994 => 1416,  3983 => 1407,  3975 => 1404,  3965 => 1403,  3948 => 1401,  3942 => 1400,  3939 => 1399,  3935 => 1398,  3930 => 1396,  3927 => 1395,  3923 => 1394,  3916 => 1390,  3912 => 1389,  3904 => 1384,  3895 => 1377,  3884 => 1374,  3880 => 1373,  3877 => 1372,  3873 => 1371,  3867 => 1367,  3859 => 1364,  3856 => 1363,  3854 => 1362,  3850 => 1361,  3846 => 1360,  3838 => 1355,  3830 => 1350,  3827 => 1349,  3818 => 1345,  3814 => 1343,  3812 => 1342,  3806 => 1341,  3800 => 1338,  3795 => 1336,  3782 => 1326,  3776 => 1322,  3770 => 1321,  3768 => 1320,  3761 => 1318,  3753 => 1317,  3742 => 1313,  3734 => 1312,  3719 => 1310,  3712 => 1307,  3707 => 1306,  3705 => 1305,  3698 => 1300,  3690 => 1297,  3687 => 1296,  3685 => 1295,  3679 => 1292,  3675 => 1291,  3667 => 1286,  3657 => 1278,  3648 => 1274,  3644 => 1272,  3642 => 1271,  3637 => 1269,  3633 => 1268,  3624 => 1266,  3617 => 1262,  3604 => 1252,  3598 => 1248,  3592 => 1247,  3590 => 1246,  3583 => 1244,  3572 => 1240,  3559 => 1234,  3549 => 1231,  3541 => 1230,  3538 => 1229,  3523 => 1227,  3519 => 1226,  3515 => 1225,  3510 => 1224,  3505 => 1223,  3503 => 1222,  3497 => 1218,  3489 => 1216,  3486 => 1215,  3484 => 1214,  3480 => 1213,  3476 => 1212,  3472 => 1211,  3468 => 1210,  3464 => 1209,  3449 => 1197,  3443 => 1193,  3437 => 1192,  3435 => 1191,  3428 => 1189,  3417 => 1185,  3404 => 1179,  3394 => 1176,  3386 => 1175,  3378 => 1174,  3375 => 1173,  3360 => 1171,  3356 => 1170,  3352 => 1169,  3347 => 1168,  3342 => 1167,  3340 => 1166,  3334 => 1162,  3326 => 1160,  3323 => 1159,  3321 => 1158,  3317 => 1157,  3313 => 1156,  3309 => 1155,  3305 => 1154,  3301 => 1153,  3297 => 1152,  3282 => 1140,  3276 => 1136,  3270 => 1135,  3268 => 1134,  3261 => 1132,  3258 => 1131,  3243 => 1129,  3239 => 1128,  3235 => 1127,  3232 => 1126,  3217 => 1124,  3213 => 1123,  3209 => 1122,  3204 => 1121,  3199 => 1120,  3197 => 1119,  3191 => 1115,  3183 => 1112,  3180 => 1111,  3178 => 1110,  3173 => 1108,  3169 => 1107,  3161 => 1101,  3157 => 1099,  3149 => 1096,  3142 => 1092,  3125 => 1088,  3114 => 1084,  3106 => 1081,  3099 => 1080,  3097 => 1079,  3094 => 1078,  3087 => 1074,  3070 => 1070,  3061 => 1066,  3057 => 1065,  3050 => 1063,  3043 => 1062,  3041 => 1061,  3038 => 1060,  3031 => 1056,  3014 => 1052,  3003 => 1048,  2995 => 1045,  2988 => 1044,  2986 => 1043,  2983 => 1042,  2976 => 1038,  2959 => 1034,  2947 => 1031,  2937 => 1030,  2929 => 1029,  2915 => 1028,  2909 => 1025,  2902 => 1024,  2900 => 1023,  2897 => 1022,  2890 => 1018,  2873 => 1014,  2861 => 1011,  2853 => 1008,  2846 => 1007,  2844 => 1006,  2841 => 1005,  2834 => 1001,  2817 => 997,  2805 => 994,  2797 => 991,  2790 => 990,  2788 => 989,  2785 => 988,  2778 => 984,  2761 => 980,  2756 => 977,  2748 => 974,  2741 => 972,  2739 => 971,  2734 => 970,  2706 => 969,  2703 => 968,  2699 => 967,  2695 => 966,  2689 => 963,  2682 => 962,  2680 => 961,  2677 => 960,  2670 => 956,  2653 => 952,  2648 => 949,  2640 => 946,  2633 => 944,  2631 => 943,  2626 => 942,  2610 => 941,  2596 => 940,  2593 => 939,  2589 => 938,  2585 => 937,  2579 => 934,  2572 => 933,  2570 => 932,  2567 => 931,  2560 => 927,  2543 => 923,  2538 => 920,  2531 => 918,  2524 => 917,  2522 => 916,  2511 => 915,  2507 => 914,  2503 => 913,  2497 => 912,  2491 => 909,  2484 => 908,  2482 => 907,  2477 => 905,  2474 => 904,  2470 => 903,  2466 => 901,  2456 => 894,  2451 => 892,  2446 => 890,  2441 => 888,  2436 => 885,  2430 => 884,  2428 => 883,  2424 => 881,  2419 => 878,  2416 => 877,  2405 => 875,  2400 => 874,  2398 => 873,  2394 => 872,  2385 => 868,  2379 => 864,  2373 => 863,  2371 => 862,  2358 => 860,  2344 => 859,  2339 => 858,  2325 => 857,  2320 => 856,  2306 => 855,  2301 => 854,  2292 => 853,  2286 => 851,  2280 => 849,  2278 => 848,  2268 => 847,  2254 => 846,  2250 => 845,  2245 => 844,  2241 => 843,  2237 => 842,  2230 => 838,  2226 => 837,  2222 => 836,  2218 => 835,  2214 => 834,  2210 => 833,  2204 => 829,  2202 => 828,  2199 => 827,  2184 => 821,  2176 => 818,  2173 => 817,  2171 => 816,  2168 => 815,  2153 => 809,  2145 => 806,  2142 => 805,  2140 => 804,  2137 => 803,  2122 => 797,  2114 => 794,  2111 => 793,  2109 => 792,  2106 => 791,  2094 => 788,  2088 => 787,  2085 => 786,  2083 => 785,  2080 => 784,  2067 => 780,  2060 => 778,  2057 => 777,  2055 => 776,  2052 => 775,  2039 => 771,  2032 => 769,  2029 => 768,  2027 => 767,  2015 => 762,  2007 => 761,  2001 => 760,  1994 => 758,  1974 => 755,  1968 => 754,  1964 => 753,  1961 => 752,  1956 => 751,  1953 => 750,  1951 => 749,  1946 => 746,  1944 => 745,  1935 => 739,  1929 => 735,  1923 => 734,  1921 => 733,  1914 => 731,  1911 => 730,  1892 => 728,  1886 => 727,  1883 => 726,  1879 => 725,  1873 => 722,  1865 => 721,  1853 => 720,  1847 => 718,  1842 => 717,  1840 => 716,  1834 => 712,  1826 => 709,  1823 => 708,  1821 => 707,  1816 => 705,  1812 => 704,  1800 => 695,  1797 => 694,  1788 => 690,  1784 => 688,  1782 => 687,  1777 => 684,  1765 => 680,  1760 => 679,  1756 => 678,  1747 => 672,  1742 => 670,  1735 => 666,  1732 => 665,  1723 => 661,  1719 => 659,  1717 => 658,  1712 => 655,  1700 => 651,  1695 => 650,  1691 => 649,  1682 => 643,  1677 => 641,  1671 => 637,  1662 => 633,  1658 => 631,  1656 => 630,  1653 => 629,  1634 => 626,  1631 => 625,  1627 => 624,  1620 => 620,  1613 => 616,  1610 => 615,  1601 => 611,  1597 => 609,  1595 => 608,  1590 => 605,  1578 => 601,  1573 => 600,  1569 => 599,  1560 => 593,  1555 => 591,  1548 => 587,  1545 => 586,  1536 => 582,  1532 => 580,  1530 => 579,  1525 => 576,  1513 => 572,  1508 => 571,  1504 => 570,  1495 => 564,  1490 => 562,  1483 => 558,  1478 => 556,  1475 => 555,  1465 => 550,  1461 => 548,  1459 => 547,  1453 => 546,  1447 => 543,  1438 => 536,  1429 => 532,  1425 => 530,  1423 => 529,  1417 => 528,  1411 => 525,  1405 => 521,  1396 => 517,  1392 => 515,  1390 => 514,  1383 => 512,  1376 => 508,  1370 => 504,  1361 => 500,  1357 => 498,  1355 => 497,  1352 => 496,  1337 => 494,  1333 => 493,  1326 => 489,  1320 => 485,  1311 => 481,  1307 => 479,  1305 => 478,  1299 => 477,  1293 => 474,  1287 => 470,  1278 => 466,  1274 => 464,  1272 => 463,  1269 => 462,  1254 => 460,  1250 => 459,  1243 => 455,  1237 => 451,  1228 => 447,  1224 => 445,  1222 => 444,  1215 => 443,  1206 => 439,  1202 => 437,  1200 => 436,  1193 => 435,  1184 => 431,  1180 => 429,  1178 => 428,  1172 => 427,  1166 => 424,  1160 => 420,  1151 => 416,  1147 => 414,  1145 => 413,  1137 => 410,  1129 => 405,  1124 => 403,  1117 => 398,  1108 => 394,  1104 => 392,  1102 => 391,  1095 => 389,  1089 => 386,  1082 => 382,  1079 => 381,  1070 => 377,  1066 => 375,  1064 => 374,  1061 => 373,  1046 => 371,  1042 => 370,  1035 => 366,  1027 => 360,  1018 => 356,  1014 => 354,  1012 => 353,  1004 => 350,  995 => 344,  988 => 340,  985 => 339,  976 => 335,  972 => 333,  970 => 332,  964 => 331,  958 => 328,  949 => 324,  944 => 322,  939 => 320,  932 => 315,  923 => 311,  919 => 309,  917 => 308,  914 => 307,  899 => 305,  895 => 304,  891 => 303,  884 => 299,  878 => 295,  869 => 291,  865 => 289,  863 => 288,  857 => 287,  851 => 284,  846 => 282,  839 => 277,  830 => 273,  826 => 271,  824 => 270,  818 => 269,  812 => 266,  805 => 262,  802 => 261,  793 => 257,  789 => 255,  787 => 254,  781 => 253,  775 => 250,  768 => 246,  765 => 245,  756 => 241,  752 => 239,  750 => 238,  744 => 237,  738 => 234,  731 => 230,  728 => 229,  719 => 225,  715 => 223,  713 => 222,  707 => 221,  701 => 218,  694 => 214,  691 => 213,  682 => 209,  678 => 207,  676 => 206,  670 => 205,  664 => 202,  657 => 198,  654 => 197,  645 => 193,  641 => 191,  639 => 190,  633 => 189,  627 => 186,  620 => 182,  617 => 181,  608 => 177,  604 => 175,  602 => 174,  596 => 173,  590 => 170,  583 => 165,  574 => 161,  570 => 159,  568 => 158,  562 => 157,  556 => 154,  551 => 152,  546 => 150,  541 => 147,  522 => 142,  519 => 141,  502 => 137,  498 => 135,  496 => 134,  486 => 133,  478 => 130,  472 => 126,  455 => 122,  451 => 120,  449 => 119,  439 => 118,  431 => 115,  425 => 111,  408 => 107,  404 => 105,  402 => 104,  392 => 103,  384 => 100,  377 => 96,  374 => 95,  357 => 91,  353 => 89,  351 => 88,  341 => 87,  333 => 84,  327 => 80,  310 => 76,  306 => 74,  304 => 73,  291 => 71,  282 => 67,  275 => 63,  272 => 62,  259 => 58,  255 => 56,  253 => 55,  243 => 54,  235 => 51,  225 => 49,  208 => 48,  204 => 46,  177 => 44,  160 => 43,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/view/template/catalog/product_form.twig", "/var/www/html/opencart/upload/dashboard/view/template/catalog/product_form.twig");
    }
}
