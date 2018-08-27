<?php

/* localisation/currency_list.twig */
class __TwigTemplate_b01dd6f433c01ccef01ffefaa56cdcdec273cfefb49b0ab6061bfe6e463152b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\"><a href=\"";
        // line 5
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_currency"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></a> <a href=\"";
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-currency').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
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
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
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
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 28
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 36
        if ((($context["sort"] ?? null) == "title")) {
            // line 37
            echo "                      <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 39
            echo "                      <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 40
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "code")) {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 44
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        }
        // line 45
        echo "</td>
                  <td class=\"text-right\">";
        // line 46
        if ((($context["sort"] ?? null) == "value")) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>
                    ";
        }
        // line 50
        echo "</td>
                  <td class=\"text-left\">";
        // line 51
        if ((($context["sort"] ?? null) == "date_modified")) {
            // line 52
            echo "                      <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 54
            echo "                      <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                    ";
        }
        // line 55
        echo "</td>
                  <td class=\"text-right\">";
        // line 56
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 60
        if (($context["currencies"] ?? null)) {
            // line 61
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 62
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 63
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", array()), ($context["selected"] ?? null))) {
                    // line 64
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", array());
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 66
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", array());
                    echo "\"/>
                        ";
                }
                // line 67
                echo "</td>
                      <td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "value", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "date_modified", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                ";
        } else {
            // line 76
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"6\">";
            // line 77
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 80
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 85
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 86
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 92
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "localisation/currency_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 92,  288 => 86,  284 => 85,  277 => 80,  271 => 77,  268 => 76,  265 => 75,  254 => 72,  250 => 71,  246 => 70,  242 => 69,  238 => 68,  235 => 67,  229 => 66,  223 => 64,  221 => 63,  218 => 62,  213 => 61,  211 => 60,  204 => 56,  201 => 55,  193 => 54,  183 => 52,  181 => 51,  178 => 50,  170 => 49,  160 => 47,  158 => 46,  155 => 45,  147 => 44,  137 => 42,  135 => 41,  132 => 40,  124 => 39,  114 => 37,  112 => 36,  103 => 30,  98 => 28,  95 => 27,  87 => 23,  84 => 22,  76 => 18,  74 => 17,  68 => 13,  57 => 11,  53 => 10,  48 => 8,  41 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/currency_list.twig", "/Users/trandong/Documents/Git/GitHub/opencart-master/upload/admin/view/template/localisation/currency_list.twig");
    }
}
