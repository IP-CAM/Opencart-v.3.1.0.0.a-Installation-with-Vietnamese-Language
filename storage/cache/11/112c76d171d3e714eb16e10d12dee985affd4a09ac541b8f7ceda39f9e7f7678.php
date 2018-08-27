<?php

/* marketing/marketing_list.twig */
class __TwigTemplate_2bf653fb5cd1541482e7a60b68777b052e59db0eafedd5ce869196c9fd69f912 extends Twig_Template
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
      <div class=\"float-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-marketing').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-marketing').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-marketing\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-name\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-code\">";
        // line 37
        echo ($context["entry_code"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_code\" value=\"";
        echo ($context["filter_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-date-added\">";
        // line 40
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 42
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 49
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 56
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 58
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-marketing\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 64
        if ((($context["sort"] ?? null) == "m.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "m.code")) {
            echo " <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 66
        echo ($context["column_clicks"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 67
        echo ($context["column_orders"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 68
        if ((($context["sort"] ?? null) == "m.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 69
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 73
        if (($context["marketings"] ?? null)) {
            // line 74
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marketings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["marketing"]) {
                // line 75
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 76
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["marketing"], "marketing_id", array()), ($context["selected"] ?? null))) {
                    // line 77
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["marketing"], "marketing_id", array());
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 79
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["marketing"], "marketing_id", array());
                    echo "\"/>
                            ";
                }
                // line 80
                echo "</td>
                          <td class=\"text-left\">";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["marketing"], "name", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["marketing"], "code", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["marketing"], "clicks", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["marketing"], "orders", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["marketing"], "date_added", array());
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["marketing"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marketing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    ";
        } else {
            // line 90
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 91
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 94
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 99
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 100
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=marketing/marketing&user_token=";
        // line 110
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_code = \$('input[name=\\'filter_code\\']').val();

\tif (filter_code) {
\t\turl += '&filter_code=' + encodeURIComponent(filter_code);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 136
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 140
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketing/marketing_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 140,  359 => 136,  330 => 110,  317 => 100,  313 => 99,  306 => 94,  300 => 91,  297 => 90,  294 => 89,  283 => 86,  279 => 85,  275 => 84,  271 => 83,  267 => 82,  263 => 81,  260 => 80,  254 => 79,  248 => 77,  246 => 76,  243 => 75,  238 => 74,  236 => 73,  229 => 69,  211 => 68,  207 => 67,  203 => 66,  185 => 65,  167 => 64,  158 => 58,  153 => 56,  143 => 49,  131 => 42,  126 => 40,  116 => 37,  106 => 34,  100 => 31,  95 => 28,  87 => 24,  84 => 23,  76 => 19,  74 => 18,  69 => 15,  58 => 13,  54 => 12,  49 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketing/marketing_list.twig", "/Users/trandong/Documents/Git/GitHub/opencart-master/upload/admin/view/template/marketing/marketing_list.twig");
    }
}
