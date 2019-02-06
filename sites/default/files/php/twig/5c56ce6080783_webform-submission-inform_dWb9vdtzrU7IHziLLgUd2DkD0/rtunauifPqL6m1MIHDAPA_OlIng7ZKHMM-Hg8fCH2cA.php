<?php

/* modules/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_26860e0a4e1b63081f9f0aad7849e2fad37ca40e94225fe65ecb2ef5f8b626c6 extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 14
        if (($context["submissions_view"] ?? null)) {
            // line 15
            echo "  <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["serial"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission ID")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sid"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission UUID")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uuid"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 18
            if (($context["uri"] ?? null)) {
                // line 19
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission URI")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uri"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 21
            echo "  ";
            if (($context["token_update"] ?? null)) {
                // line 22
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Update")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token_update"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 24
            echo "  <br />
  <div><b>";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Completed")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["completed"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Changed")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["changed"] ?? null), "html", null, true));
            echo "</div>
  <br />
  <div><b>";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Remote IP address")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["remote_addr"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted by")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_by"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Language")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["language"] ?? null), "html", null, true));
            echo "</div>
  <br />
  <div><b>";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Is draft")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["is_draft"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 34
            if (($context["current_page"] ?? null)) {
                // line 35
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current page")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["current_page"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 37
            echo "  <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Webform")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["webform"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 38
            if (($context["submitted_to"] ?? null)) {
                // line 39
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted to")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_to"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 41
            echo "  ";
            if (((($context["sticky"] ?? null) || ($context["locked"] ?? null)) || ($context["notes"] ?? null))) {
                // line 42
                echo "    <br />
    ";
                // line 43
                if (($context["sticky"] ?? null)) {
                    // line 44
                    echo "      <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Flagged")));
                    echo ":</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sticky"] ?? null), "html", null, true));
                    echo "</div>
    ";
                }
                // line 46
                echo "    ";
                if (($context["locked"] ?? null)) {
                    // line 47
                    echo "      <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Locked")));
                    echo ":</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["locked"] ?? null), "html", null, true));
                    echo "</div>
    ";
                }
                // line 49
                echo "    ";
                if (($context["notes"] ?? null)) {
                    // line 50
                    echo "      <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Notes")));
                    echo ":</b><br/>
      <pre>";
                    // line 51
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["notes"] ?? null), "html", null, true));
                    echo "</pre>
      </div>
    ";
                }
                // line 54
                echo "  ";
            }
            // line 55
            echo "
";
        } else {
            // line 57
            echo "  <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["serial"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
            echo "</div>
";
        }
        // line 60
        echo "
";
        // line 61
        if (($context["delete"] ?? null)) {
            // line 62
            echo "  <br/>
  <div>";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["delete"] ?? null), "html", null, true));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-submission-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 63,  226 => 62,  224 => 61,  221 => 60,  214 => 58,  207 => 57,  203 => 55,  200 => 54,  194 => 51,  189 => 50,  186 => 49,  178 => 47,  175 => 46,  167 => 44,  165 => 43,  162 => 42,  159 => 41,  151 => 39,  149 => 38,  142 => 37,  134 => 35,  132 => 34,  126 => 33,  119 => 31,  113 => 30,  107 => 29,  100 => 27,  94 => 26,  88 => 25,  85 => 24,  77 => 22,  74 => 21,  66 => 19,  64 => 18,  58 => 17,  52 => 16,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/webform/templates/webform-submission-information.html.twig", "C:\\xampp\\htdocs\\drupal8.5.4\\modules\\webform\\templates\\webform-submission-information.html.twig");
    }
}
