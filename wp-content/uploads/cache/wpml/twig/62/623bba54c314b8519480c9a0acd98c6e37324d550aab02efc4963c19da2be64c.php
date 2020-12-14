<?php

/* layout-slot-edit-button.twig */
class __TwigTemplate_c02d031686ba1d71244c63a754c76ce2f3f1e681a7abf9fa375cb27352313adf extends Twig_Template
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
        // line 1
        ob_start();
        // line 2
        if ((($context["action"] ?? null) == "edit")) {
            // line 3
            echo "\t";
            $context["class"] = "otgs-ico-edit";
        } else {
            // line 5
            echo "\t";
            $context["class"] = "otgs-ico-add";
        }
        // line 7
        echo "
<p class=\"wpml-ls-slot-management-link-wrapper\">
\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"js-wpml-ls-slot-management-link button-secondary\">
\t\t<span class=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</a>
</p>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "layout-slot-edit-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{% if action == 'edit' %}
\t{% set class = 'otgs-ico-edit' %}
{% else %}
\t{% set class = 'otgs-ico-add' %}
{% endif %}

<p class=\"wpml-ls-slot-management-link-wrapper\">
\t<a href=\"{{ url }}\" class=\"js-wpml-ls-slot-management-link button-secondary\">
\t\t<span class=\"{{ class }}\"></span> {{ label -}}</a>
</p>
{% endspaceless %}", "layout-slot-edit-button.twig", "C:\\xampp\\htdocs\\wp_corona\\wp-content\\plugins\\WPML_v3.7.1\\templates\\language-switcher-admin-ui\\layout-slot-edit-button.twig");
    }
}
