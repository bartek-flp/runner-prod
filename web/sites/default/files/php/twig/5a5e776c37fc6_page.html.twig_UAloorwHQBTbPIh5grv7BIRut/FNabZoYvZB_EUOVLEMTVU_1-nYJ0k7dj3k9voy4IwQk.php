<?php

/* themes/custom/droopler_subtheme/templates/layout/page.html.twig */
class __TwigTemplate_bca752b3694531e066f8cf3eb79c724af3f16076eb3111c172dc5f5685dd627c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'featured' => array($this, 'block_featured'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 72, "if" => 100);
        $filters = array("t" => 71);
        $functions = array("attach_library" => 66);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array('attach_library')
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

        // line 65
        echo "
";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("droopler_subtheme/slick"), "html", null, true));
        echo "
";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("droopler_subtheme/colorbox"), "html", null, true));
        echo "
";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("droopler_subtheme/header-nav"), "html", null, true));
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <header id=\"header\" class=\"header\" role=\"banner\"
          aria-label=\"";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 98
        echo "  </header>

  ";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 101
            echo "    <div class=\"highlighted\">
      <aside class=\"";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " section clearfix\" role=\"complementary\">
        ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
      </aside>
    </div>
  ";
        }
        // line 107
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 108
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 116
            echo "  ";
        }
        // line 117
        echo "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    ";
        // line 118
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "  </div>
  ";
        // line 132
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 133
            echo "    <div class=\"featured-bottom\">
      <aside class=\"";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " clearfix\" role=\"complementary\">
        ";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
        ";
            // line 136
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
        ";
            // line 137
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
      </aside>
    </div>
  ";
        }
        // line 141
        echo "  <footer class=\"site-footer\">
    ";
        // line 142
        $this->displayBlock('footer', $context, $blocks);
        // line 160
        echo "  </footer>

</div>
";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        // line 73
        echo "      <nav";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo ">
        <div class=\"container-fluid no-padding-sm\">
          <div class=\"navbar-brand\">
            ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
          ";
        // line 78
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "lang_menu", array()))) {
            // line 79
            echo "            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarNav\" aria-controls=\"navbarNav\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <nav class=\"navbar navbar-expand-lg\">
              <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                ";
            // line 86
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
                // line 87
                echo "                  <div class=\"menu-region\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
                echo "</div>
                ";
            }
            // line 89
            echo "                ";
            if ($this->getAttribute(($context["page"] ?? null), "lang_menu", array())) {
                // line 90
                echo "                  <div class=\"lang-region\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "lang_menu", array()), "html", null, true));
                echo "</div>
                ";
            }
            // line 92
            echo "              </div>
            </nav>
          ";
        }
        // line 95
        echo "        </div>
      </nav>
    ";
    }

    // line 108
    public function block_featured($context, array $blocks = array())
    {
        // line 109
        echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section ";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " clearfix\"
               role=\"complementary\">
          ";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
        echo "
        </aside>
      </div>
    ";
    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
        // line 119
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_attributes"] ?? null), "html", null, true));
        echo ">
        <div class=\"row clearfix\">
          ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
          <main class=\"main-content\">
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </section>
          </main>
        </div>
      </div>
    ";
    }

    // line 142
    public function block_footer($context, array $blocks = array())
    {
        // line 143
        echo "      <div class=\"container\">
        ";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_main", array()), "html", null, true));
        echo "
        ";
        // line 145
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 146
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 153
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 154
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 155
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 158
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/droopler_subtheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 158,  281 => 155,  278 => 154,  275 => 153,  269 => 150,  265 => 149,  261 => 148,  257 => 147,  254 => 146,  252 => 145,  248 => 144,  245 => 143,  242 => 142,  232 => 125,  225 => 121,  219 => 119,  216 => 118,  208 => 112,  203 => 110,  200 => 109,  197 => 108,  191 => 95,  186 => 92,  180 => 90,  177 => 89,  171 => 87,  169 => 86,  160 => 79,  158 => 78,  153 => 76,  146 => 73,  143 => 72,  136 => 160,  134 => 142,  131 => 141,  124 => 137,  120 => 136,  116 => 135,  112 => 134,  109 => 133,  107 => 132,  104 => 131,  102 => 118,  99 => 117,  96 => 116,  93 => 108,  90 => 107,  83 => 103,  79 => 102,  76 => 101,  74 => 100,  70 => 98,  68 => 72,  64 => 71,  58 => 68,  54 => 67,  50 => 66,  47 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/droopler_subtheme/templates/layout/page.html.twig", "/usr/home/katarzynamelcer/domains/katarzynamelcer.usermd.net/public_html/web/themes/custom/droopler_subtheme/templates/layout/page.html.twig");
    }
}
