<?php

/* furiesorbitBundle::bootstrap_3_layout.html.twig */
class __TwigTemplate_7391606d5c6c5d8632103dc983abbbc027b3173840db071dd0c35dcf8394b1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 4
        if (((!array_key_exists("type", $context)) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 5
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        }
        // line 7
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 9
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 10
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        // line 11
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 13
    public function block_button_widget($context, array $blocks = array())
    {
        // line 14
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " btn"))));
        // line 15
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"input-group\">
";
        // line 19
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 20
        if ((!(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")))) {
            // line 21
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
";
        }
        // line 23
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 24
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 25
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
";
        }
        // line 27
        echo "</div>";
    }

    // line 29
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"input-group\">";
        // line 31
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 32
        echo "<span class=\"input-group-addon\">%</span>
</div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 36
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("datetime" => true));
            echo "&nbsp;
";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("datetime" => true));
            echo "
</div>
";
        }
    }

    // line 48
    public function block_date_widget($context, array $blocks = array())
    {
        // line 49
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 50
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-inline"))));
            // line 53
            if (((!array_key_exists("datetime", $context)) || (!(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 54
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
";
            }
            // line 56
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 57
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget'), "{{ month }}" =>             // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget'), "{{ day }}" =>             // line 59
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget')));
            // line 60
            echo "
";
            // line 61
            if (((!array_key_exists("datetime", $context)) || (!(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 62
                echo "</div>
";
            }
        }
    }

    // line 66
    public function block_time_widget($context, array $blocks = array())
    {
        // line 67
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 68
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 70
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-inline"))));
            // line 71
            if (((!array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 72
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
";
            }
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget');
            }
            // line 75
            if (((!array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 76
                echo "</div>
";
            }
        }
    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 81
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        // line 82
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 84
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 85
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")))) {
            // line 86
            echo "<div class=\"control-group\">
";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("parent_label_class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
                // line 90
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "</div>
";
        } else {
            // line 94
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 96
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("parent_label_class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
                // line 98
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "</div>
";
        }
    }

    // line 103
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 104
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 105
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
";
        } else {
            // line 108
            echo "<div class=\"checkbox\">
";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
</div>
";
        }
    }

    // line 113
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 114
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 115
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
";
        } else {
            // line 118
            echo "<div class=\"radio\">
";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
</div>
";
        }
    }

    // line 124
    public function block_form_label($context, array $blocks = array())
    {
        // line 125
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label"))));
        // line 126
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 128
    public function block_choice_label($context, array $blocks = array())
    {
        // line 130
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(strtr((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 131
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 133
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 134
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 136
    public function block_radio_label($context, array $blocks = array())
    {
        // line 137
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 139
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 140
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 141
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
        }
        // line 143
        if (array_key_exists("parent_label_class", $context)) {
            // line 144
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
        }
        // line 146
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 147
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        }
        // line 149
        echo "<label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
";
        // line 150
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
</label>
";
    }

    // line 155
    public function block_form_row($context, array $blocks = array())
    {
        // line 156
        echo "<div class=\"form-group";
        if ((((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) && (!(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))))) {
            echo " has-error";
        }
        echo "\">
";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
</div>";
    }

    // line 162
    public function block_choice_row($context, array $blocks = array())
    {
        // line 163
        $context["force_error"] = true;
        // line 164
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 166
    public function block_date_row($context, array $blocks = array())
    {
        // line 167
        $context["force_error"] = true;
        // line 168
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 170
    public function block_time_row($context, array $blocks = array())
    {
        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 174
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 175
        $context["force_error"] = true;
        // line 176
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 178
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 179
        echo "<div class=\"form-group";
        if ((!(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
</div>";
    }

    // line 184
    public function block_radio_row($context, array $blocks = array())
    {
        // line 185
        echo "<div class=\"form-group";
        if ((!(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
</div>";
    }

    // line 191
    public function block_form_errors($context, array $blocks = array())
    {
        // line 192
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 193
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 194
            echo "<ul class=\"list-unstyled\">";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 196
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "</ul>
";
            // line 199
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle::bootstrap_3_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 199,  535 => 198,  527 => 196,  523 => 195,  521 => 194,  515 => 193,  513 => 192,  510 => 191,  504 => 187,  500 => 186,  493 => 185,  490 => 184,  484 => 181,  480 => 180,  473 => 179,  470 => 178,  466 => 176,  464 => 175,  461 => 174,  457 => 172,  455 => 171,  452 => 170,  448 => 168,  446 => 167,  443 => 166,  439 => 164,  437 => 163,  434 => 162,  428 => 159,  424 => 158,  420 => 157,  413 => 156,  410 => 155,  403 => 151,  399 => 150,  383 => 149,  380 => 147,  378 => 146,  375 => 144,  373 => 143,  370 => 141,  368 => 140,  365 => 139,  361 => 137,  358 => 136,  354 => 134,  351 => 133,  347 => 131,  345 => 130,  342 => 128,  338 => 126,  336 => 125,  333 => 124,  325 => 119,  322 => 118,  317 => 116,  315 => 115,  313 => 114,  310 => 113,  302 => 109,  299 => 108,  294 => 106,  292 => 105,  290 => 104,  287 => 103,  281 => 100,  274 => 98,  272 => 96,  268 => 95,  263 => 94,  259 => 92,  252 => 90,  250 => 88,  246 => 87,  243 => 86,  241 => 85,  238 => 84,  234 => 82,  232 => 81,  229 => 80,  222 => 76,  220 => 75,  212 => 74,  206 => 72,  204 => 71,  202 => 70,  199 => 68,  197 => 67,  194 => 66,  187 => 62,  185 => 61,  182 => 60,  180 => 59,  179 => 58,  178 => 57,  177 => 56,  171 => 54,  169 => 53,  167 => 52,  164 => 50,  162 => 49,  159 => 48,  151 => 44,  147 => 43,  143 => 42,  139 => 41,  134 => 40,  132 => 39,  129 => 37,  127 => 36,  124 => 35,  119 => 32,  117 => 31,  115 => 30,  112 => 29,  108 => 27,  102 => 25,  100 => 24,  98 => 23,  92 => 21,  90 => 20,  88 => 19,  85 => 18,  82 => 17,  78 => 15,  76 => 14,  73 => 13,  69 => 11,  67 => 10,  64 => 9,  60 => 7,  57 => 5,  55 => 4,  52 => 3,);
    }
}
