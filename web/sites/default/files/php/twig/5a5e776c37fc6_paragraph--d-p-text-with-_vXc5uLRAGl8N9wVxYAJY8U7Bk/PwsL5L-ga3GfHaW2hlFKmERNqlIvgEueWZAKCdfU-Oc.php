<?php

/* profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig */
class __TwigTemplate_3c9266c5c4d33e1265c0f166eb6632599fbc0144d0dfe631f0d6abfab03d2720 extends Twig_Template
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
        $tags = array("set" => 41, "block" => 46);
        $filters = array("clean_class" => 43);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class'),
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

        // line 41
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 43
($context["paragraph"] ?? null), "bundle", array()))), 2 => ((        // line 44
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 46
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 47
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"d-p-text-with-bckg background-image\" data-id=\"";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\">
      <div class=\"content-wrapper\">
        <div class=\"content container\">
          ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 52,  76 => 51,  68 => 54,  66 => 51,  60 => 48,  55 => 47,  49 => 46,  47 => 44,  46 => 43,  45 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig", "/usr/home/katarzynamelcer/domains/katarzynamelcer.usermd.net/public_html/web/profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig");
    }
}
