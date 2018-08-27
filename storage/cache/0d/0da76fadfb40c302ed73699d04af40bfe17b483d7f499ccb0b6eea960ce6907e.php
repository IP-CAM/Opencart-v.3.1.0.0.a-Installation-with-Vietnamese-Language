<?php

/* setting/setting.twig */
class __TwigTemplate_27c8688115a9e2a667daef94d42887403b88475af0ef84b817ee006569da2045 extends Twig_Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-meta-title\">";
        // line 42
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 44
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  ";
        // line 45
        if (($context["error_meta_title"] ?? null)) {
            // line 46
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 47
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-meta-description\">";
        // line 50
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-meta-keyword\">";
        // line 56
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-theme\">";
        // line 62
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 66
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", array()) == ($context["config_theme"] ?? null))) {
                // line 67
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 69
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", array());
                echo "</option>
                      ";
            }
            // line 71
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-layout\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", array()) == ($context["config_layout_id"] ?? null))) {
                // line 82
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 84
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", array());
                echo "</option>
                      ";
            }
            // line 86
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 93
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 95
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 96
        if (($context["error_name"] ?? null)) {
            // line 97
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 98
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-owner\">";
        // line 101
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 103
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  ";
        // line 104
        if (($context["error_owner"] ?? null)) {
            // line 105
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 106
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-address\">";
        // line 109
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 112
        if (($context["error_address"] ?? null)) {
            // line 113
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 114
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-geocode\">";
        // line 117
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 119
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 120
        echo ($context["help_geocode"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 124
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 126
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  ";
        // line 127
        if (($context["error_email"] ?? null)) {
            // line 128
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 132
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 134
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  ";
        // line 135
        if (($context["error_telephone"] ?? null)) {
            // line 136
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 137
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-fax\">";
        // line 140
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 142
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 146
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 149
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"input-image\" data-thumb=\"thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 151
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"input-image\" data-thumb=\"thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 152
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-open\">";
        // line 158
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 160
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 161
        echo ($context["help_open"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
        // line 165
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 167
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 168
        echo ($context["help_comment"] ?? null);
        echo "</small>
                </div>
              </div>
              ";
        // line 171
        if (($context["locations"] ?? null)) {
            // line 172
            echo "                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 173
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 177
                echo "                        <label class=\"form-check\">
                          ";
                // line 178
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", array()), ($context["config_location"] ?? null))) {
                    // line 179
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", array());
                    echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", array());
                    echo "
                          ";
                } else {
                    // line 182
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", array());
                    echo "\" class=\"form-check-input\"/>
                            ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", array());
                    echo "
                          ";
                }
                // line 185
                echo "                        </label>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                    </div>
                    <small class=\"form-text text-muted\">";
            // line 188
            echo ($context["help_location"] ?? null);
            echo "</small>
                  </div>
                </div>
              ";
        }
        // line 192
        echo "            </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-country\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array()) == ($context["config_country_id"] ?? null))) {
                // line 200
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 202
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", array());
                echo "</option>
                      ";
            }
            // line 204
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-zone\">";
        // line 209
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-timezone\">";
        // line 215
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 219
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", array()) == ($context["config_timezone"] ?? null))) {
                // line 220
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 222
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", array());
                echo "</option>
                      ";
            }
            // line 224
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-language\">";
        // line 229
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 233
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", array()) == ($context["config_language"] ?? null))) {
                // line 234
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 236
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", array());
                echo "</option>
                      ";
            }
            // line 238
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-admin-language\">";
        // line 243
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", array()) == ($context["config_admin_language"] ?? null))) {
                // line 248
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 250
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", array());
                echo "</option>
                      ";
            }
            // line 252
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-currency\">";
        // line 257
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 261
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", array()) == ($context["config_currency"] ?? null))) {
                // line 262
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 264
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", array());
                echo "</option>
                      ";
            }
            // line 266
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                  </select>
                  <small class=\"form-text text-muted\">";
        // line 268
        echo ($context["help_currency"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-currency-engine\">";
        // line 272
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 276
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", array()) == ($context["config_currency_engine"] ?? null))) {
                // line 277
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 279
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", array());
                echo "</option>
                      ";
            }
            // line 281
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 286
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                    ";
        // line 289
        if (($context["config_currency_auto"] ?? null)) {
            // line 290
            echo "                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/> ";
            // line 291
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 293
            echo "                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 294
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        }
        // line 296
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 297
        echo ($context["help_currency_auto"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-length-class\">";
        // line 301
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 305
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", array()) == ($context["config_length_class_id"] ?? null))) {
                // line 306
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 308
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", array());
                echo "</option>
                      ";
            }
            // line 310
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-weight-class\">";
        // line 315
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 319
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", array()) == ($context["config_weight_class_id"] ?? null))) {
                // line 320
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 322
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", array());
                echo "</option>
                      ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 331
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 333
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 336
        if (($context["config_product_count"] ?? null)) {
            // line 337
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"0\"/> ";
            // line 338
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 340
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/> ";
            // line 341
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 343
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 344
        echo ($context["help_product_count"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-admin-limit\">";
        // line 348
        echo ($context["entry_limit_admin"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 350
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 351
        echo ($context["help_limit_admin"] ?? null);
        echo "</small>
                    ";
        // line 352
        if (($context["error_limit_admin"] ?? null)) {
            // line 353
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 354
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 358
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 360
        echo ($context["entry_review"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 363
        if (($context["config_review_status"] ?? null)) {
            // line 364
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"0\"/> ";
            // line 365
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 367
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/> ";
            // line 368
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 370
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 371
        echo ($context["help_review"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 375
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 378
        if (($context["config_review_guest"] ?? null)) {
            // line 379
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\"/> ";
            // line 380
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 382
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 383
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 385
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 386
        echo ($context["help_review_guest"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 391
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-voucher-min\">";
        // line 393
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 395
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 396
        echo ($context["help_voucher_min"] ?? null);
        echo "</small>
                    ";
        // line 397
        if (($context["error_voucher_min"] ?? null)) {
            // line 398
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 399
        echo "</div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-voucher-max\">";
        // line 402
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 404
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 405
        echo ($context["help_voucher_max"] ?? null);
        echo "</small>
                    ";
        // line 406
        if (($context["error_voucher_max"] ?? null)) {
            // line 407
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 408
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 412
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 414
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 417
        if (($context["config_tax"] ?? null)) {
            // line 418
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"0\"/> ";
            // line 419
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 421
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/> ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 424
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-tax-default\">";
        // line 428
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 431
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 432
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 433
            echo "                        <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 435
            echo "                        <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        }
        // line 437
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 438
            echo "                        <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 440
            echo "                        <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        }
        // line 442
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 443
        echo ($context["help_tax_default"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-tax-customer\">";
        // line 447
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 450
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 451
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 452
            echo "                        <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 454
            echo "                        <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      ";
        }
        // line 456
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 457
            echo "                        <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 459
            echo "                        <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      ";
        }
        // line 461
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 462
        echo ($context["help_tax_customer"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 467
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 469
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 472
        if (($context["config_customer_online"] ?? null)) {
            // line 473
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\"/> ";
            // line 474
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 476
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/> ";
            // line 477
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 479
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 480
        echo ($context["help_customer_online"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 484
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 487
        if (($context["config_customer_activity"] ?? null)) {
            // line 488
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/> ";
            // line 489
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 491
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/> ";
            // line 492
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 494
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 495
        echo ($context["help_customer_activity"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 499
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 502
        if (($context["config_customer_search"] ?? null)) {
            // line 503
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\"/> ";
            // line 504
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 506
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/> ";
            // line 507
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 509
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">";
        // line 513
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      ";
        // line 516
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 517
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array()) == ($context["config_customer_group_id"] ?? null))) {
                // line 518
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 520
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</option>
                        ";
            }
            // line 522
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 524
        echo ($context["help_customer_group"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 528
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 532
            echo "                        <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array()), ($context["config_customer_group_display"] ?? null))) {
                // line 533
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 534
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "
                          ";
            } else {
                // line 536
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 537
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "
                          ";
            }
            // line 538
            echo "</label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 541
        echo ($context["help_customer_group_display"] ?? null);
        echo "</small>
                    ";
        // line 542
        if (($context["error_customer_group_display"] ?? null)) {
            // line 543
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 544
        echo "</div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 547
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 550
        if (($context["config_customer_price"] ?? null)) {
            // line 551
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\"/> ";
            // line 552
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 554
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/> ";
            // line 555
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 557
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 558
        echo ($context["help_customer_price"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-login-attempts\">";
        // line 562
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 564
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 565
        echo ($context["help_login_attempts"] ?? null);
        echo "</small>
                    ";
        // line 566
        if (($context["error_login_attempts"] ?? null)) {
            // line 567
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 568
        echo "</div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-account\">";
        // line 571
        echo ($context["entry_account"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 574
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 576
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array()) == ($context["config_account_id"] ?? null))) {
                // line 577
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 579
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 581
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 583
        echo ($context["help_account"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 588
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-invoice-prefix\">";
        // line 590
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 592
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 593
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 597
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 600
        if (($context["config_cart_weight"] ?? null)) {
            // line 601
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/> ";
            // line 602
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 604
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/> ";
            // line 605
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 607
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 608
        echo ($context["help_cart_weight"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 612
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 615
        if (($context["config_checkout_guest"] ?? null)) {
            // line 616
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/> ";
            // line 617
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 619
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 620
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 622
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 623
        echo ($context["help_checkout_guest"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-checkout\">";
        // line 627
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 630
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 632
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array()) == ($context["config_checkout_id"] ?? null))) {
                // line 633
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 635
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 637
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 639
        echo ($context["help_checkout"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-order-status\">";
        // line 643
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 646
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 647
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array()) == ($context["config_order_status_id"] ?? null))) {
                // line 648
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 650
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 652
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 653
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 654
        echo ($context["help_order_status"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-process-status\">";
        // line 658
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 661
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 662
            echo "                        <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array()), ($context["config_processing_status"] ?? null))) {
                // line 663
                echo "                            <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 664
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 666
                echo "                            <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 667
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 669
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 672
        echo ($context["help_processing_status"] ?? null);
        echo "</small>
                    ";
        // line 673
        if (($context["error_processing_status"] ?? null)) {
            // line 674
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 676
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-complete-status\">";
        // line 679
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 683
            echo "                        <label class=\"form-check\">
                          ";
            // line 684
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array()), ($context["config_complete_status"] ?? null))) {
                // line 685
                echo "                            <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 686
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 688
                echo "                            <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 689
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 691
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 694
        echo ($context["help_complete_status"] ?? null);
        echo "</small>
                    ";
        // line 695
        if (($context["error_complete_status"] ?? null)) {
            // line 696
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 697
        echo "</div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-fraud-status\">";
        // line 700
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 704
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array()) == ($context["config_fraud_status_id"] ?? null))) {
                // line 705
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 707
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 709
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 710
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 711
        echo ($context["help_fraud_status"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-api\">";
        // line 715
        echo ($context["entry_api"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 718
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 720
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", array()) == ($context["config_api_id"] ?? null))) {
                // line 721
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", array());
                echo "</option>
                        ";
            } else {
                // line 723
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", array());
                echo "</option>
                        ";
            }
            // line 725
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 726
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 727
        echo ($context["help_api"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 732
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 734
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 737
        if (($context["config_stock_display"] ?? null)) {
            // line 738
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\"/> ";
            // line 739
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 741
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/> ";
            // line 742
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 744
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 745
        echo ($context["help_stock_display"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 749
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 752
        if (($context["config_stock_warning"] ?? null)) {
            // line 753
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/> ";
            // line 754
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 756
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/> ";
            // line 757
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 759
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 760
        echo ($context["help_stock_warning"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 764
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 767
        if (($context["config_stock_checkout"] ?? null)) {
            // line 768
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/> ";
            // line 769
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 771
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/> ";
            // line 772
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 774
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 775
        echo ($context["help_stock_checkout"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 780
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate-group\">";
        // line 782
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      ";
        // line 785
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 786
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array()) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 787
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 789
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</option>
                        ";
            }
            // line 791
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 796
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 799
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 800
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/> ";
            // line 801
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 803
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/> ";
            // line 804
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 806
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 807
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 811
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 814
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 815
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/> ";
            // line 816
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 818
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 819
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 821
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 822
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate-commission\">";
        // line 826
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 828
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 829
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate\">";
        // line 833
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 836
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 837
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 838
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array()) == ($context["config_affiliate_id"] ?? null))) {
                // line 839
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 841
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 843
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 844
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 845
        echo ($context["help_affiliate"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 850
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-return\">";
        // line 852
        echo ($context["entry_return"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 855
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 857
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array()) == ($context["config_return_id"] ?? null))) {
                // line 858
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 860
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 862
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 863
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 864
        echo ($context["help_return"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-return-status\">";
        // line 868
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 872
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", array()) == ($context["config_return_status_id"] ?? null))) {
                // line 873
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 875
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 877
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 878
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 879
        echo ($context["help_return_status"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 884
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 886
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 889
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 890
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 891
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", array()) == ($context["config_captcha"] ?? null))) {
                // line 892
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", array());
                echo "</option>
                        ";
            } else {
                // line 894
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", array());
                echo "</option>
                        ";
            }
            // line 896
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 897
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 898
        echo ($context["help_captcha"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 902
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 905
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 906
            echo "                        <label class=\"form-check\">
                          ";
            // line 907
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", array()), ($context["config_captcha_page"] ?? null))) {
                // line 908
                echo "                            <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 909
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", array());
                echo "
                          ";
            } else {
                // line 911
                echo "                            <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 912
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", array());
                echo "
                          ";
            }
            // line 914
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 916
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-logo\">";
        // line 923
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 926
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"input-logo\" data-thumb=\"thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 928
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"input-logo\" data-thumb=\"thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 929
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-icon\">";
        // line 935
        echo ($context["entry_icon"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 938
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"input-icon\" data-thumb=\"thumb-icon\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 940
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"input-icon\" data-thumb=\"thumb-icon\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 941
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                  <small class=\"form-text text-muted\">";
        // line 944
        echo ($context["help_icon"] ?? null);
        echo "</small>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 950
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-engine\">";
        // line 952
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      ";
        // line 955
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 956
            echo "                        <option value=\"mail\" selected=\"selected\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 958
            echo "                        <option value=\"mail\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        }
        // line 960
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 961
            echo "                        <option value=\"smtp\" selected=\"selected\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 963
            echo "                        <option value=\"smtp\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        }
        // line 965
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 966
        echo ($context["help_mail_engine"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-parameter\">";
        // line 970
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 972
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 973
        echo ($context["help_mail_parameter"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-hostname\">";
        // line 977
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 979
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 980
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-username\">";
        // line 984
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 986
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-password\">";
        // line 990
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 992
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 993
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-port\">";
        // line 997
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 999
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-timeout\">";
        // line 1003
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1005
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1010
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1012
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1015
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1016
            echo "                        <label class=\"form-check\">
                          ";
            // line 1017
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", array()), ($context["config_mail_alert"] ?? null))) {
                // line 1018
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 1019
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", array());
                echo "
                          ";
            } else {
                // line 1021
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 1022
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", array());
                echo "
                          ";
            }
            // line 1024
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1026
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1027
        echo ($context["help_mail_alert"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-alert-email\">";
        // line 1031
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1033
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1034
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1041
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1043
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1046
        if (($context["config_maintenance"] ?? null)) {
            // line 1047
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\"/> ";
            // line 1048
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1050
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/> ";
            // line 1051
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1053
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1054
        echo ($context["help_maintenance"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1058
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1061
        if (($context["config_seo_url"] ?? null)) {
            // line 1062
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\"/> ";
            // line 1063
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1065
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/> ";
            // line 1066
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1068
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1069
        echo ($context["help_seo_url"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-robots\">";
        // line 1073
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1075
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1076
        echo ($context["help_robots"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-compression\">";
        // line 1080
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1082
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1083
        echo ($context["help_compression"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1088
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1090
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1093
        if (($context["config_password"] ?? null)) {
            // line 1094
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"0\"/> ";
            // line 1095
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1097
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/> ";
            // line 1098
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1100
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1101
        echo ($context["help_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1105
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1108
        if (($context["config_shared"] ?? null)) {
            // line 1109
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"0\"/> ";
            // line 1110
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1112
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/> ";
            // line 1113
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1115
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1116
        echo ($context["help_shared"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-encryption\">";
        // line 1120
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1122
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1123
        echo ($context["help_encryption"] ?? null);
        echo "</small>
                    ";
        // line 1124
        if (($context["error_encryption"] ?? null)) {
            // line 1125
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1126
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1130
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-file-max-size\">";
        // line 1132
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1134
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1135
        echo ($context["help_file_max_size"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-file-ext-allowed\">";
        // line 1139
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1141
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1142
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</small>
                    ";
        // line 1143
        if (($context["error_extension"] ?? null)) {
            // line 1144
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_extension"] ?? null);
            echo "</div>
                    ";
        }
        // line 1146
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-file-mime-allowed\">";
        // line 1149
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1151
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1152
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</small>
                    ";
        // line 1153
        if (($context["error_mime"] ?? null)) {
            // line 1154
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_mime"] ?? null);
            echo "</div>
                    ";
        }
        // line 1156
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1160
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1162
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1165
        if (($context["config_error_display"] ?? null)) {
            // line 1166
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"0\"/> ";
            // line 1167
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1169
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/> ";
            // line 1170
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1172
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1176
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1179
        if (($context["config_error_log"] ?? null)) {
            // line 1180
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"0\"/> ";
            // line 1181
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1183
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/> ";
            // line 1184
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1186
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-error-filename\">";
        // line 1190
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1192
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    ";
        // line 1193
        if (($context["error_log"] ?? null)) {
            // line 1194
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1195
        echo "</div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1208
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1230
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1239
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1245
        echo ($context["config_zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1252
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);

\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
";
        // line 1267
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3319 => 1267,  3301 => 1252,  3291 => 1245,  3282 => 1239,  3270 => 1230,  3245 => 1208,  3230 => 1195,  3224 => 1194,  3222 => 1193,  3216 => 1192,  3211 => 1190,  3205 => 1186,  3200 => 1184,  3195 => 1183,  3190 => 1181,  3185 => 1180,  3183 => 1179,  3177 => 1176,  3171 => 1172,  3166 => 1170,  3161 => 1169,  3156 => 1167,  3151 => 1166,  3149 => 1165,  3143 => 1162,  3138 => 1160,  3132 => 1156,  3126 => 1154,  3124 => 1153,  3120 => 1152,  3114 => 1151,  3109 => 1149,  3104 => 1146,  3098 => 1144,  3096 => 1143,  3092 => 1142,  3086 => 1141,  3081 => 1139,  3074 => 1135,  3068 => 1134,  3063 => 1132,  3058 => 1130,  3052 => 1126,  3046 => 1125,  3044 => 1124,  3040 => 1123,  3034 => 1122,  3029 => 1120,  3022 => 1116,  3019 => 1115,  3014 => 1113,  3009 => 1112,  3004 => 1110,  2999 => 1109,  2997 => 1108,  2991 => 1105,  2984 => 1101,  2981 => 1100,  2976 => 1098,  2971 => 1097,  2966 => 1095,  2961 => 1094,  2959 => 1093,  2953 => 1090,  2948 => 1088,  2940 => 1083,  2934 => 1082,  2929 => 1080,  2922 => 1076,  2916 => 1075,  2911 => 1073,  2904 => 1069,  2901 => 1068,  2896 => 1066,  2891 => 1065,  2886 => 1063,  2881 => 1062,  2879 => 1061,  2873 => 1058,  2866 => 1054,  2863 => 1053,  2858 => 1051,  2853 => 1050,  2848 => 1048,  2843 => 1047,  2841 => 1046,  2835 => 1043,  2830 => 1041,  2820 => 1034,  2814 => 1033,  2809 => 1031,  2802 => 1027,  2799 => 1026,  2792 => 1024,  2787 => 1022,  2782 => 1021,  2777 => 1019,  2772 => 1018,  2770 => 1017,  2767 => 1016,  2763 => 1015,  2757 => 1012,  2752 => 1010,  2742 => 1005,  2737 => 1003,  2728 => 999,  2723 => 997,  2716 => 993,  2710 => 992,  2705 => 990,  2696 => 986,  2691 => 984,  2684 => 980,  2678 => 979,  2673 => 977,  2666 => 973,  2660 => 972,  2655 => 970,  2648 => 966,  2645 => 965,  2639 => 963,  2633 => 961,  2630 => 960,  2624 => 958,  2618 => 956,  2616 => 955,  2610 => 952,  2605 => 950,  2596 => 944,  2590 => 941,  2586 => 940,  2577 => 938,  2571 => 935,  2562 => 929,  2558 => 928,  2549 => 926,  2543 => 923,  2534 => 916,  2527 => 914,  2522 => 912,  2517 => 911,  2512 => 909,  2507 => 908,  2505 => 907,  2502 => 906,  2498 => 905,  2492 => 902,  2485 => 898,  2482 => 897,  2476 => 896,  2468 => 894,  2460 => 892,  2457 => 891,  2453 => 890,  2449 => 889,  2443 => 886,  2438 => 884,  2430 => 879,  2427 => 878,  2421 => 877,  2413 => 875,  2405 => 873,  2402 => 872,  2398 => 871,  2392 => 868,  2385 => 864,  2382 => 863,  2376 => 862,  2368 => 860,  2360 => 858,  2357 => 857,  2353 => 856,  2349 => 855,  2343 => 852,  2338 => 850,  2330 => 845,  2327 => 844,  2321 => 843,  2313 => 841,  2305 => 839,  2302 => 838,  2298 => 837,  2294 => 836,  2288 => 833,  2281 => 829,  2275 => 828,  2270 => 826,  2263 => 822,  2260 => 821,  2255 => 819,  2250 => 818,  2245 => 816,  2240 => 815,  2238 => 814,  2232 => 811,  2225 => 807,  2222 => 806,  2217 => 804,  2212 => 803,  2207 => 801,  2202 => 800,  2200 => 799,  2194 => 796,  2188 => 792,  2182 => 791,  2174 => 789,  2166 => 787,  2163 => 786,  2159 => 785,  2153 => 782,  2148 => 780,  2140 => 775,  2137 => 774,  2132 => 772,  2127 => 771,  2122 => 769,  2117 => 768,  2115 => 767,  2109 => 764,  2102 => 760,  2099 => 759,  2094 => 757,  2089 => 756,  2084 => 754,  2079 => 753,  2077 => 752,  2071 => 749,  2064 => 745,  2061 => 744,  2056 => 742,  2051 => 741,  2046 => 739,  2041 => 738,  2039 => 737,  2033 => 734,  2028 => 732,  2020 => 727,  2017 => 726,  2011 => 725,  2003 => 723,  1995 => 721,  1992 => 720,  1988 => 719,  1984 => 718,  1978 => 715,  1971 => 711,  1968 => 710,  1962 => 709,  1954 => 707,  1946 => 705,  1943 => 704,  1939 => 703,  1933 => 700,  1928 => 697,  1922 => 696,  1920 => 695,  1916 => 694,  1913 => 693,  1906 => 691,  1901 => 689,  1896 => 688,  1891 => 686,  1886 => 685,  1884 => 684,  1881 => 683,  1877 => 682,  1871 => 679,  1866 => 676,  1860 => 674,  1858 => 673,  1854 => 672,  1851 => 671,  1844 => 669,  1839 => 667,  1834 => 666,  1829 => 664,  1824 => 663,  1821 => 662,  1817 => 661,  1811 => 658,  1804 => 654,  1801 => 653,  1795 => 652,  1787 => 650,  1779 => 648,  1776 => 647,  1772 => 646,  1766 => 643,  1759 => 639,  1756 => 638,  1750 => 637,  1742 => 635,  1734 => 633,  1731 => 632,  1727 => 631,  1723 => 630,  1717 => 627,  1710 => 623,  1707 => 622,  1702 => 620,  1697 => 619,  1692 => 617,  1687 => 616,  1685 => 615,  1679 => 612,  1672 => 608,  1669 => 607,  1664 => 605,  1659 => 604,  1654 => 602,  1649 => 601,  1647 => 600,  1641 => 597,  1634 => 593,  1628 => 592,  1623 => 590,  1618 => 588,  1610 => 583,  1607 => 582,  1601 => 581,  1593 => 579,  1585 => 577,  1582 => 576,  1578 => 575,  1574 => 574,  1568 => 571,  1563 => 568,  1557 => 567,  1555 => 566,  1551 => 565,  1545 => 564,  1540 => 562,  1533 => 558,  1530 => 557,  1525 => 555,  1520 => 554,  1515 => 552,  1510 => 551,  1508 => 550,  1502 => 547,  1497 => 544,  1491 => 543,  1489 => 542,  1485 => 541,  1482 => 540,  1475 => 538,  1470 => 537,  1465 => 536,  1460 => 534,  1455 => 533,  1452 => 532,  1448 => 531,  1442 => 528,  1435 => 524,  1432 => 523,  1426 => 522,  1418 => 520,  1410 => 518,  1407 => 517,  1403 => 516,  1397 => 513,  1391 => 509,  1386 => 507,  1381 => 506,  1376 => 504,  1371 => 503,  1369 => 502,  1363 => 499,  1356 => 495,  1353 => 494,  1348 => 492,  1343 => 491,  1338 => 489,  1333 => 488,  1331 => 487,  1325 => 484,  1318 => 480,  1315 => 479,  1310 => 477,  1305 => 476,  1300 => 474,  1295 => 473,  1293 => 472,  1287 => 469,  1282 => 467,  1274 => 462,  1271 => 461,  1265 => 459,  1259 => 457,  1256 => 456,  1250 => 454,  1244 => 452,  1242 => 451,  1238 => 450,  1232 => 447,  1225 => 443,  1222 => 442,  1216 => 440,  1210 => 438,  1207 => 437,  1201 => 435,  1195 => 433,  1193 => 432,  1189 => 431,  1183 => 428,  1177 => 424,  1172 => 422,  1167 => 421,  1162 => 419,  1157 => 418,  1155 => 417,  1149 => 414,  1144 => 412,  1138 => 408,  1132 => 407,  1130 => 406,  1126 => 405,  1120 => 404,  1115 => 402,  1110 => 399,  1104 => 398,  1102 => 397,  1098 => 396,  1092 => 395,  1087 => 393,  1082 => 391,  1074 => 386,  1071 => 385,  1066 => 383,  1061 => 382,  1056 => 380,  1051 => 379,  1049 => 378,  1043 => 375,  1036 => 371,  1033 => 370,  1028 => 368,  1023 => 367,  1018 => 365,  1013 => 364,  1011 => 363,  1005 => 360,  1000 => 358,  994 => 354,  988 => 353,  986 => 352,  982 => 351,  976 => 350,  971 => 348,  964 => 344,  961 => 343,  956 => 341,  951 => 340,  946 => 338,  941 => 337,  939 => 336,  933 => 333,  928 => 331,  920 => 325,  914 => 324,  906 => 322,  898 => 320,  895 => 319,  891 => 318,  885 => 315,  879 => 311,  873 => 310,  865 => 308,  857 => 306,  854 => 305,  850 => 304,  844 => 301,  837 => 297,  834 => 296,  829 => 294,  824 => 293,  819 => 291,  814 => 290,  812 => 289,  806 => 286,  800 => 282,  794 => 281,  786 => 279,  778 => 277,  775 => 276,  771 => 275,  765 => 272,  758 => 268,  755 => 267,  749 => 266,  741 => 264,  733 => 262,  730 => 261,  726 => 260,  720 => 257,  714 => 253,  708 => 252,  700 => 250,  692 => 248,  689 => 247,  685 => 246,  679 => 243,  673 => 239,  667 => 238,  659 => 236,  651 => 234,  648 => 233,  644 => 232,  638 => 229,  632 => 225,  626 => 224,  618 => 222,  610 => 220,  607 => 219,  603 => 218,  597 => 215,  588 => 209,  582 => 205,  576 => 204,  568 => 202,  560 => 200,  557 => 199,  553 => 198,  547 => 195,  542 => 192,  535 => 188,  532 => 187,  525 => 185,  520 => 183,  515 => 182,  510 => 180,  505 => 179,  503 => 178,  500 => 177,  496 => 176,  490 => 173,  487 => 172,  485 => 171,  479 => 168,  473 => 167,  468 => 165,  461 => 161,  455 => 160,  450 => 158,  441 => 152,  437 => 151,  428 => 149,  422 => 146,  413 => 142,  408 => 140,  403 => 137,  397 => 136,  395 => 135,  389 => 134,  384 => 132,  379 => 129,  373 => 128,  371 => 127,  365 => 126,  360 => 124,  353 => 120,  347 => 119,  342 => 117,  337 => 114,  331 => 113,  329 => 112,  323 => 111,  318 => 109,  313 => 106,  307 => 105,  305 => 104,  299 => 103,  294 => 101,  289 => 98,  283 => 97,  281 => 96,  275 => 95,  270 => 93,  262 => 87,  256 => 86,  248 => 84,  240 => 82,  237 => 81,  233 => 80,  227 => 77,  220 => 72,  214 => 71,  206 => 69,  198 => 67,  195 => 66,  191 => 65,  185 => 62,  176 => 58,  171 => 56,  162 => 52,  157 => 50,  152 => 47,  146 => 46,  144 => 45,  138 => 44,  133 => 42,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  96 => 29,  91 => 27,  88 => 26,  80 => 22,  77 => 21,  69 => 17,  67 => 16,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/setting.twig", "/Users/trandong/Documents/Git/GitHub/opencart-master/upload/admin/view/template/setting/setting.twig");
    }
}
