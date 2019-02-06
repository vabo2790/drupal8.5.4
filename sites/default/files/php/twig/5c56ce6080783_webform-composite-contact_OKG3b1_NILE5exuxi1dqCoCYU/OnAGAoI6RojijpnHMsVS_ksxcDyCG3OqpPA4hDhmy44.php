<?php

/* modules/webform/templates/webform-composite-contact.html.twig */
class __TwigTemplate_da6ae0bf1f221464c083044e78217c1b6ece1558b055dffe7042fc2fb62b2fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            echo "
  ";
            // line 18
            if (($this->getAttribute(($context["content"] ?? null), "name", array()) || $this->getAttribute(($context["content"] ?? null), "company", array()))) {
                // line 19
                echo "    <div class=\"webform-flexbox\">
      ";
                // line 20
                if ($this->getAttribute(($context["content"] ?? null), "name", array())) {
                    // line 21
                    echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "name", array()), "html", null, true));
                    echo "</div></div>
      ";
                }
                // line 23
                echo "      ";
                if ($this->getAttribute(($context["content"] ?? null), "company", array())) {
                    // line 24
                    echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "company", array()), "html", null, true));
                    echo "</div></div>
      ";
                }
                // line 26
                echo "    </div>
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            if (($this->getAttribute(($context["content"] ?? null), "email", array()) || $this->getAttribute(($context["content"] ?? null), "phone", array()))) {
                // line 30
                echo "    <div class=\"webform-flexbox\">
      ";
                // line 31
                if ($this->getAttribute(($context["content"] ?? null), "email", array())) {
                    // line 32
                    echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "email", array()), "html", null, true));
                    echo "</div></div>
      ";
                }
                // line 34
                echo "      ";
                if ($this->getAttribute(($context["content"] ?? null), "phone", array())) {
                    // line 35
                    echo "        <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "phone", array()), "html", null, true));
                    echo "</div></div>
      ";
                }
                // line 37
                echo "    </div>
  ";
            }
            // line 39
            echo "
  ";
            // line 40
            if ($this->getAttribute(($context["content"] ?? null), "address", array())) {
                // line 41
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "address", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 45
            echo "
  ";
            // line 46
            if ($this->getAttribute(($context["content"] ?? null), "address_2", array())) {
                // line 47
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "address_2", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 51
            echo "
  <div class=\"webform-flexbox\">
    ";
            // line 53
            if ($this->getAttribute(($context["content"] ?? null), "city", array())) {
                // line 54
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "city", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 56
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "state_province", array())) {
                // line 57
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "state_province", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 59
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "postal_code", array())) {
                // line 60
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "postal_code", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 62
            echo "  </div>

  ";
            // line 64
            if ($this->getAttribute(($context["content"] ?? null), "country", array())) {
                // line 65
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 66
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "country", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 69
            echo "
";
        } else {
            // line 71
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-composite-contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 71,  176 => 69,  170 => 66,  167 => 65,  165 => 64,  161 => 62,  155 => 60,  152 => 59,  146 => 57,  143 => 56,  137 => 54,  135 => 53,  131 => 51,  125 => 48,  122 => 47,  120 => 46,  117 => 45,  111 => 42,  108 => 41,  106 => 40,  103 => 39,  99 => 37,  93 => 35,  90 => 34,  84 => 32,  82 => 31,  79 => 30,  77 => 29,  74 => 28,  70 => 26,  64 => 24,  61 => 23,  55 => 21,  53 => 20,  50 => 19,  48 => 18,  45 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/webform/templates/webform-composite-contact.html.twig", "C:\\xampp\\htdocs\\drupal8.5.4\\modules\\webform\\templates\\webform-composite-contact.html.twig");
    }
}
