<?php

/* themes/custom/droopler_subtheme/templates/paragraph--d_p_main_slider.html.twig */
class __TwigTemplate_38ab17e429e78012f93bed895c4023b2fdcbbd1d691a84422d393873b97f13b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 42, "block" => 49, "if" => 55);
        $filters = array("clean_class" => 45, "render" => 55);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'render'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => "paragraph-slider", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", array()))), 3 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 50
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "        <div class=\"slider-content\">
          <div class=\"slider-images\">";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_d_main_slider_images", array()), "html", null, true));
        echo "</div>
          <div class=\"slider-texts\">
              ";
        // line 55
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_d_main_slider_text", array()))) {
            // line 56
            echo "                  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_d_main_slider_text", array()), "html", null, true));
            echo "
              ";
        } else {
            // line 58
            echo "                  <h2>&nbsp</h2>
              ";
        }
        // line 60
        echo "              ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_d_main_slider_desc", array()))) {
            // line 61
            echo "                  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_d_main_slider_desc", array()), "html", null, true));
            echo "</h3>
              ";
        } else {
            // line 63
            echo "                  <h3>&nbsp</h3>
              ";
        }
        // line 65
        echo "            <div class=\"btn btn-primary\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_d_main_slider_link", array()), "html", null, true));
        echo "</div>
          </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/droopler_subtheme/templates/paragraph--d_p_main_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 65,  99 => 63,  93 => 61,  90 => 60,  86 => 58,  80 => 56,  78 => 55,  73 => 53,  70 => 52,  67 => 51,  62 => 69,  60 => 51,  55 => 50,  49 => 49,  47 => 46,  46 => 45,  45 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/droopler_subtheme/templates/paragraph--d_p_main_slider.html.twig", "/usr/home/katarzynamelcer/domains/katarzynamelcer.usermd.net/public_html/web/themes/custom/droopler_subtheme/templates/paragraph--d_p_main_slider.html.twig");
    }
}
