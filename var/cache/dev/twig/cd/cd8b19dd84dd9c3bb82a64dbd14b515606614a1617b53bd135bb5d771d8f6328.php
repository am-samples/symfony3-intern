<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d68afc89913b65302cadb1e843652712211e31d3108546b97b7eaf6903dd8dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68afc89913b65302cadb1e843652712211e31d3108546b97b7eaf6903dd8dfd->enter($__internal_d68afc89913b65302cadb1e843652712211e31d3108546b97b7eaf6903dd8dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb1a466fbdd3db2b987da7b57e1f4d8ff7ebd8d5eafbcee9043c1b1524ed8f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1a466fbdd3db2b987da7b57e1f4d8ff7ebd8d5eafbcee9043c1b1524ed8f41->enter($__internal_cb1a466fbdd3db2b987da7b57e1f4d8ff7ebd8d5eafbcee9043c1b1524ed8f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d68afc89913b65302cadb1e843652712211e31d3108546b97b7eaf6903dd8dfd->leave($__internal_d68afc89913b65302cadb1e843652712211e31d3108546b97b7eaf6903dd8dfd_prof);

        
        $__internal_cb1a466fbdd3db2b987da7b57e1f4d8ff7ebd8d5eafbcee9043c1b1524ed8f41->leave($__internal_cb1a466fbdd3db2b987da7b57e1f4d8ff7ebd8d5eafbcee9043c1b1524ed8f41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2de371c80ca2d615682925327f05be094ff222ac1ce8d62ea53f77b2e7e0f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2de371c80ca2d615682925327f05be094ff222ac1ce8d62ea53f77b2e7e0f1c->enter($__internal_d2de371c80ca2d615682925327f05be094ff222ac1ce8d62ea53f77b2e7e0f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af2825b3db7ba92441bfa603203958527930da5a9c98756c7dcf039a23e73926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2825b3db7ba92441bfa603203958527930da5a9c98756c7dcf039a23e73926->enter($__internal_af2825b3db7ba92441bfa603203958527930da5a9c98756c7dcf039a23e73926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af2825b3db7ba92441bfa603203958527930da5a9c98756c7dcf039a23e73926->leave($__internal_af2825b3db7ba92441bfa603203958527930da5a9c98756c7dcf039a23e73926_prof);

        
        $__internal_d2de371c80ca2d615682925327f05be094ff222ac1ce8d62ea53f77b2e7e0f1c->leave($__internal_d2de371c80ca2d615682925327f05be094ff222ac1ce8d62ea53f77b2e7e0f1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48571f0fa2a66e7665826521e568bbbbb30249ad876dd7fb88c56c46579edb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48571f0fa2a66e7665826521e568bbbbb30249ad876dd7fb88c56c46579edb3a->enter($__internal_48571f0fa2a66e7665826521e568bbbbb30249ad876dd7fb88c56c46579edb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91af60ef43f09ab4902d6d1f5fc18de2f00fac6d40a3fb758de66c221e63cb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91af60ef43f09ab4902d6d1f5fc18de2f00fac6d40a3fb758de66c221e63cb90->enter($__internal_91af60ef43f09ab4902d6d1f5fc18de2f00fac6d40a3fb758de66c221e63cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91af60ef43f09ab4902d6d1f5fc18de2f00fac6d40a3fb758de66c221e63cb90->leave($__internal_91af60ef43f09ab4902d6d1f5fc18de2f00fac6d40a3fb758de66c221e63cb90_prof);

        
        $__internal_48571f0fa2a66e7665826521e568bbbbb30249ad876dd7fb88c56c46579edb3a->leave($__internal_48571f0fa2a66e7665826521e568bbbbb30249ad876dd7fb88c56c46579edb3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a622c6adeb0b51884b6eada258ebfc12b5f3d5a2a56b9d8c11f391d096557d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a622c6adeb0b51884b6eada258ebfc12b5f3d5a2a56b9d8c11f391d096557d89->enter($__internal_a622c6adeb0b51884b6eada258ebfc12b5f3d5a2a56b9d8c11f391d096557d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1778cc10aad0b8ae7e12ad322b36bb084035f87125a28b7c9d2560df1526f03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1778cc10aad0b8ae7e12ad322b36bb084035f87125a28b7c9d2560df1526f03e->enter($__internal_1778cc10aad0b8ae7e12ad322b36bb084035f87125a28b7c9d2560df1526f03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1778cc10aad0b8ae7e12ad322b36bb084035f87125a28b7c9d2560df1526f03e->leave($__internal_1778cc10aad0b8ae7e12ad322b36bb084035f87125a28b7c9d2560df1526f03e_prof);

        
        $__internal_a622c6adeb0b51884b6eada258ebfc12b5f3d5a2a56b9d8c11f391d096557d89->leave($__internal_a622c6adeb0b51884b6eada258ebfc12b5f3d5a2a56b9d8c11f391d096557d89_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/amalozemov/projects/tr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
