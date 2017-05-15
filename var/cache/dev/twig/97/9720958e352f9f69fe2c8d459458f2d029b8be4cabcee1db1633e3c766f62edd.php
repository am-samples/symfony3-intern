<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e9e6f4ab84aa01ef8977e004d998f296950c7373c6ee69cba98e331518070481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e6f4ab84aa01ef8977e004d998f296950c7373c6ee69cba98e331518070481->enter($__internal_e9e6f4ab84aa01ef8977e004d998f296950c7373c6ee69cba98e331518070481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_06bc09b98d1f90a2ae40aafdc86440c91b7777b093f6b86ff2f43484a14de285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bc09b98d1f90a2ae40aafdc86440c91b7777b093f6b86ff2f43484a14de285->enter($__internal_06bc09b98d1f90a2ae40aafdc86440c91b7777b093f6b86ff2f43484a14de285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e6f4ab84aa01ef8977e004d998f296950c7373c6ee69cba98e331518070481->leave($__internal_e9e6f4ab84aa01ef8977e004d998f296950c7373c6ee69cba98e331518070481_prof);

        
        $__internal_06bc09b98d1f90a2ae40aafdc86440c91b7777b093f6b86ff2f43484a14de285->leave($__internal_06bc09b98d1f90a2ae40aafdc86440c91b7777b093f6b86ff2f43484a14de285_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bcaaebc7b8222fcab4a107a2d9fd7fe10398b12e477738fe7f0b85794ad10d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcaaebc7b8222fcab4a107a2d9fd7fe10398b12e477738fe7f0b85794ad10d8->enter($__internal_3bcaaebc7b8222fcab4a107a2d9fd7fe10398b12e477738fe7f0b85794ad10d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22b00f2319c616a1cb80008b36d9b707dbe7de199e0c061a5906ca5168a2d87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b00f2319c616a1cb80008b36d9b707dbe7de199e0c061a5906ca5168a2d87e->enter($__internal_22b00f2319c616a1cb80008b36d9b707dbe7de199e0c061a5906ca5168a2d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_22b00f2319c616a1cb80008b36d9b707dbe7de199e0c061a5906ca5168a2d87e->leave($__internal_22b00f2319c616a1cb80008b36d9b707dbe7de199e0c061a5906ca5168a2d87e_prof);

        
        $__internal_3bcaaebc7b8222fcab4a107a2d9fd7fe10398b12e477738fe7f0b85794ad10d8->leave($__internal_3bcaaebc7b8222fcab4a107a2d9fd7fe10398b12e477738fe7f0b85794ad10d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d105402e4585e07b2208ff5066fb146482a4e5b9fda9c1972971f607f87e5d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d105402e4585e07b2208ff5066fb146482a4e5b9fda9c1972971f607f87e5d82->enter($__internal_d105402e4585e07b2208ff5066fb146482a4e5b9fda9c1972971f607f87e5d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c48a15edea63585e9ba89fd0c505e26b3341f8971c8318e989b614ce4f7fabf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48a15edea63585e9ba89fd0c505e26b3341f8971c8318e989b614ce4f7fabf7->enter($__internal_c48a15edea63585e9ba89fd0c505e26b3341f8971c8318e989b614ce4f7fabf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c48a15edea63585e9ba89fd0c505e26b3341f8971c8318e989b614ce4f7fabf7->leave($__internal_c48a15edea63585e9ba89fd0c505e26b3341f8971c8318e989b614ce4f7fabf7_prof);

        
        $__internal_d105402e4585e07b2208ff5066fb146482a4e5b9fda9c1972971f607f87e5d82->leave($__internal_d105402e4585e07b2208ff5066fb146482a4e5b9fda9c1972971f607f87e5d82_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a722ce6fd99c2a259396b5aad1c1884d2e9c375ff5522b4f7fde584334d11ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a722ce6fd99c2a259396b5aad1c1884d2e9c375ff5522b4f7fde584334d11ca->enter($__internal_4a722ce6fd99c2a259396b5aad1c1884d2e9c375ff5522b4f7fde584334d11ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b96b17605f508289891f08577f6d624570cb542faef7b063a32744c76e3ba4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b96b17605f508289891f08577f6d624570cb542faef7b063a32744c76e3ba4b->enter($__internal_4b96b17605f508289891f08577f6d624570cb542faef7b063a32744c76e3ba4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4b96b17605f508289891f08577f6d624570cb542faef7b063a32744c76e3ba4b->leave($__internal_4b96b17605f508289891f08577f6d624570cb542faef7b063a32744c76e3ba4b_prof);

        
        $__internal_4a722ce6fd99c2a259396b5aad1c1884d2e9c375ff5522b4f7fde584334d11ca->leave($__internal_4a722ce6fd99c2a259396b5aad1c1884d2e9c375ff5522b4f7fde584334d11ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/amalozemov/projects/tr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
