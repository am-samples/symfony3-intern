<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_433920083883fc14b41791618c39b60dead803ff5768377ad4214565e26a4f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433920083883fc14b41791618c39b60dead803ff5768377ad4214565e26a4f5f->enter($__internal_433920083883fc14b41791618c39b60dead803ff5768377ad4214565e26a4f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_72083d274bcadb66296af417e0957eaa4416074d51c176ec45f9cc6178700468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72083d274bcadb66296af417e0957eaa4416074d51c176ec45f9cc6178700468->enter($__internal_72083d274bcadb66296af417e0957eaa4416074d51c176ec45f9cc6178700468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_433920083883fc14b41791618c39b60dead803ff5768377ad4214565e26a4f5f->leave($__internal_433920083883fc14b41791618c39b60dead803ff5768377ad4214565e26a4f5f_prof);

        
        $__internal_72083d274bcadb66296af417e0957eaa4416074d51c176ec45f9cc6178700468->leave($__internal_72083d274bcadb66296af417e0957eaa4416074d51c176ec45f9cc6178700468_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2f2058019eebb811bcb4008c6cf9ea1440cc8b8aac8afa5a51bdf4579f7159e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f2058019eebb811bcb4008c6cf9ea1440cc8b8aac8afa5a51bdf4579f7159e->enter($__internal_d2f2058019eebb811bcb4008c6cf9ea1440cc8b8aac8afa5a51bdf4579f7159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57676875a8097f4ab73c079b25a0238a45319a6bb6d483a03dc6a19ec000d1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57676875a8097f4ab73c079b25a0238a45319a6bb6d483a03dc6a19ec000d1f5->enter($__internal_57676875a8097f4ab73c079b25a0238a45319a6bb6d483a03dc6a19ec000d1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57676875a8097f4ab73c079b25a0238a45319a6bb6d483a03dc6a19ec000d1f5->leave($__internal_57676875a8097f4ab73c079b25a0238a45319a6bb6d483a03dc6a19ec000d1f5_prof);

        
        $__internal_d2f2058019eebb811bcb4008c6cf9ea1440cc8b8aac8afa5a51bdf4579f7159e->leave($__internal_d2f2058019eebb811bcb4008c6cf9ea1440cc8b8aac8afa5a51bdf4579f7159e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c171ab0fe97ccd5ec4901941883372a2cee700f07566e2a38533ed19bfeb4cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c171ab0fe97ccd5ec4901941883372a2cee700f07566e2a38533ed19bfeb4cab->enter($__internal_c171ab0fe97ccd5ec4901941883372a2cee700f07566e2a38533ed19bfeb4cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e34a557d5064f412428963f95b3533d42946808119c271c8f3e1a4f822450bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34a557d5064f412428963f95b3533d42946808119c271c8f3e1a4f822450bdb->enter($__internal_e34a557d5064f412428963f95b3533d42946808119c271c8f3e1a4f822450bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e34a557d5064f412428963f95b3533d42946808119c271c8f3e1a4f822450bdb->leave($__internal_e34a557d5064f412428963f95b3533d42946808119c271c8f3e1a4f822450bdb_prof);

        
        $__internal_c171ab0fe97ccd5ec4901941883372a2cee700f07566e2a38533ed19bfeb4cab->leave($__internal_c171ab0fe97ccd5ec4901941883372a2cee700f07566e2a38533ed19bfeb4cab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de6705d6f0c2b38c48bca5e8add685bea9d70cfe3f9a143a23600569b8b83971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6705d6f0c2b38c48bca5e8add685bea9d70cfe3f9a143a23600569b8b83971->enter($__internal_de6705d6f0c2b38c48bca5e8add685bea9d70cfe3f9a143a23600569b8b83971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8bd7b0cf9f6c7cd02ff4c61ab3d9eb4f0e9b45adef80d53919c775c89ce6768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bd7b0cf9f6c7cd02ff4c61ab3d9eb4f0e9b45adef80d53919c775c89ce6768->enter($__internal_a8bd7b0cf9f6c7cd02ff4c61ab3d9eb4f0e9b45adef80d53919c775c89ce6768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8bd7b0cf9f6c7cd02ff4c61ab3d9eb4f0e9b45adef80d53919c775c89ce6768->leave($__internal_a8bd7b0cf9f6c7cd02ff4c61ab3d9eb4f0e9b45adef80d53919c775c89ce6768_prof);

        
        $__internal_de6705d6f0c2b38c48bca5e8add685bea9d70cfe3f9a143a23600569b8b83971->leave($__internal_de6705d6f0c2b38c48bca5e8add685bea9d70cfe3f9a143a23600569b8b83971_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34bf9da8bfa9934eedbf11a2486ec1d32d9cf05a1084e13eca94d7093adc994e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bf9da8bfa9934eedbf11a2486ec1d32d9cf05a1084e13eca94d7093adc994e->enter($__internal_34bf9da8bfa9934eedbf11a2486ec1d32d9cf05a1084e13eca94d7093adc994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4088c00ceade19414d835a6dbcd692b267819d2b0e7d30c7cbcbf3d4a2e18f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4088c00ceade19414d835a6dbcd692b267819d2b0e7d30c7cbcbf3d4a2e18f2->enter($__internal_f4088c00ceade19414d835a6dbcd692b267819d2b0e7d30c7cbcbf3d4a2e18f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4088c00ceade19414d835a6dbcd692b267819d2b0e7d30c7cbcbf3d4a2e18f2->leave($__internal_f4088c00ceade19414d835a6dbcd692b267819d2b0e7d30c7cbcbf3d4a2e18f2_prof);

        
        $__internal_34bf9da8bfa9934eedbf11a2486ec1d32d9cf05a1084e13eca94d7093adc994e->leave($__internal_34bf9da8bfa9934eedbf11a2486ec1d32d9cf05a1084e13eca94d7093adc994e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/amalozemov/projects/hello-trade3/app/Resources/views/base.html.twig");
    }
}
