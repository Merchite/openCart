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

/* catalog/view/template/checkout/payment_method.twig */
class __TwigTemplate_5634198211d36727f728a7bc66d99d9eafbd9eb2d191f1f5d3b34ccf97786de4 extends Template
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
        echo "<form id=\"form-payment-method\">
  <fieldset>
    <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"input-group\">
      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-select\"";
        // line 5
        if (( !($context["payment_methods"] ?? null) || ($context["shipping_required"] ?? null))) {
            echo " disabled";
        }
        echo ">
        <option value=\"\">";
        // line 6
        echo ($context["text_select"] ?? null);
        echo "</option>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 8
            echo "          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 8);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        ";
        if (($context["stores"] ?? null)) {
            // line 11
            echo "          <optgroup label=\"";
            echo ($context["text_stored"] ?? null);
            echo "\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 13
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "code", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 13);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "          </optgroup>
        ";
        }
        // line 17
        echo "      </select>
      <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
    </div>
  </fieldset>
</form>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>";
        // line 24
        echo ($context["text_comments"] ?? null);
        echo "</strong></label> <textarea name=\"comment\" rows=\"3\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
</div>
";
        // line 26
        if (($context["text_agree"] ?? null)) {
            // line 27
            echo "  <div class=\"mb-2\">
    <div class=\"text-end\">";
            // line 28
            echo ($context["text_agree"] ?? null);
            echo " <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"";
            if (($context["agree"] ?? null)) {
                echo " checked";
            }
            echo "/></div>
  </div>
";
        }
        // line 31
        echo "<script type=\"text/javascript\"><!--
// Payment Methods
\$('#button-payment-method').on('click', function () {
    var element = this;

    \$('#input-payment-method').html('<option value=\"\">";
        // line 36
        echo ($context["text_select"] ?? null);
        echo "</option>');
    \$('#input-payment-method').prop('disabled', true);

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.getMethods&language=";
        // line 41
        echo ($context["language"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-method').prop('disabled', true);
            },
            complete: function () {
                \$('#button-payment-method').prop('disabled', false);
            },
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                html = '<option value=\"\">";
        // line 60
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['payment_methods']) {
                    for (i in json['payment_methods']) {
                        html += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
                    }

                    \$('#input-payment-method').prop('disabled', false);
                }

                \$('#input-payment-method').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

";
        // line 79
        if ((( !($context["payment_methods"] ?? null) &&  !($context["payment_address_required"] ?? null)) &&  !($context["shipping_required"] ?? null))) {
            // line 80
            echo "\$('#button-payment-method').trigger('click');
";
        }
        // line 82
        echo "
// Payment Method
\$('#input-payment-method').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.save&language=";
        // line 89
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-payment-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
                \$('#button-payment-method').prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
                \$('#button-payment-method').prop('disabled', false);
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

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 116
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Comment
var timer = '';

\$('#input-comment').on('keydown', function () {
    var button = \$('#button-confirm').prop('disabled');

    // Request
    clearTimeout(timer);

    timer = setTimeout(function (object) {
        chain.attach(function () {
            return \$.ajax({
                url: 'index.php?route=checkout/payment_method.comment&language=";
        // line 138
        echo ($context["language"] ?? null);
        echo "',
                type: 'post',
                data: \$('#input-comment').serialize(),
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded',
                beforeSend: function () {
                    \$('#button-confirm').prop('disabled', true);
                },
                complete: function () {
                    \$('#button-confirm').prop('disabled', button);
                },
                success: function (json) {
                    \$('.alert-dismissible').remove();

                    if (json['redirect']) {
                        location = json['redirect'];
                    }

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    window.setTimeout(function () {
                        \$('.alert-dismissible').fadeTo(1000, 0, function () {
                            \$(this).remove();
                        });
                    }, 3000);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    }, 500, this);
});

/* Agree to Terms */
\$('#input-agree').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.agree&language=";
        // line 184
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#input-agree').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 196
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 196,  307 => 184,  258 => 138,  233 => 116,  203 => 89,  194 => 82,  190 => 80,  188 => 79,  166 => 60,  144 => 41,  136 => 36,  129 => 31,  119 => 28,  116 => 27,  114 => 26,  107 => 24,  98 => 17,  94 => 15,  83 => 13,  79 => 12,  74 => 11,  71 => 10,  60 => 8,  56 => 7,  52 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/payment_method.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/payment_method.twig");
    }
}
