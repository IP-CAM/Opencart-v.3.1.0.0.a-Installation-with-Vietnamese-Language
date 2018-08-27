<?php

/* common/developer.twig */
class __TwigTemplate_0c07ecd92b9909e5c899ad3bf87ff33b9f85a0764cb15fc4647a5d869804c4ff extends Twig_Template
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
        echo "<div id=\"modal-developer\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fas fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td>";
        // line 12
        echo ($context["column_component"] ?? null);
        echo "</td>
              <td style=\"width: 150px;\">";
        // line 13
        echo ($context["entry_cache"] ?? null);
        echo "</td>
              <td class=\"text-right\" style=\"width: 1px;\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tr>
            <td>";
        // line 18
        echo ($context["entry_theme"] ?? null);
        echo "</td>
            <td>
              <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                ";
        // line 21
        if (($context["developer_theme"] ?? null)) {
            // line 22
            echo "                  <label class=\"btn btn-outline-secondary active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "><input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>";
            echo ($context["button_on"] ?? null);
            echo "</label>
                ";
        } else {
            // line 24
            echo "                  <label class=\"btn btn-outline-secondary\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "><input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>";
            echo ($context["button_on"] ?? null);
            echo "</label>
                ";
        }
        // line 26
        echo "                ";
        if ( !($context["developer_theme"] ?? null)) {
            // line 27
            echo "                  <label class=\"btn btn-outline-secondary active\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "><input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>";
            echo ($context["button_off"] ?? null);
            echo "</label>
                ";
        } else {
            // line 29
            echo "                  <label class=\"btn btn-outline-secondary\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "><input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            if ( !($context["eval"] ?? null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>";
            echo ($context["button_off"] ?? null);
            echo "</label>
                ";
        }
        // line 31
        echo "              </div>
            </td>
            <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 33
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></button></td>
          </tr>
          <tr>
            <td>";
        // line 36
        echo ($context["entry_sass"] ?? null);
        echo "</td>
            <td>
              <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                ";
        // line 39
        if (($context["developer_sass"] ?? null)) {
            // line 40
            echo "                  <label class=\"btn btn-outline-secondary active\"> <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\" checked>";
            echo ($context["button_on"] ?? null);
            echo "</label>
                ";
        } else {
            // line 42
            echo "                  <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\">";
            echo ($context["button_on"] ?? null);
            echo "</label>
                ";
        }
        // line 44
        echo "                ";
        if ( !($context["developer_sass"] ?? null)) {
            // line 45
            echo "                  <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\" checked>";
            echo ($context["button_off"] ?? null);
            echo "</label>
                ";
        } else {
            // line 47
            echo "                  <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\">";
            echo ($context["button_off"] ?? null);
            echo "</label>
                ";
        }
        // line 48
        echo "</div>
            </td>
            <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 50
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/edit&user_token=";
        // line 60
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#modal-developer table button').on('click', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 91
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 91,  183 => 60,  170 => 50,  166 => 48,  160 => 47,  154 => 45,  151 => 44,  145 => 42,  139 => 40,  137 => 39,  131 => 36,  125 => 33,  121 => 31,  107 => 29,  93 => 27,  90 => 26,  76 => 24,  62 => 22,  60 => 21,  54 => 18,  47 => 14,  43 => 13,  39 => 12,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/developer.twig", "/Users/trandong/Documents/Git/GitHub/opencart-master/upload/admin/view/template/common/developer.twig");
    }
}
