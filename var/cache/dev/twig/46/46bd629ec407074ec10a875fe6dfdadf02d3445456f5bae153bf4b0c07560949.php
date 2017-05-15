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
        $__internal_75970ece5b1463b9fd482e51a45561c4a787f9f571b8bac1001bccf15f939a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75970ece5b1463b9fd482e51a45561c4a787f9f571b8bac1001bccf15f939a3b->enter($__internal_75970ece5b1463b9fd482e51a45561c4a787f9f571b8bac1001bccf15f939a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6a6528b7c9392694eb87af850efe0638480f3437bb1f81116db9f914220efbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6528b7c9392694eb87af850efe0638480f3437bb1f81116db9f914220efbc2->enter($__internal_6a6528b7c9392694eb87af850efe0638480f3437bb1f81116db9f914220efbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_75970ece5b1463b9fd482e51a45561c4a787f9f571b8bac1001bccf15f939a3b->leave($__internal_75970ece5b1463b9fd482e51a45561c4a787f9f571b8bac1001bccf15f939a3b_prof);

        
        $__internal_6a6528b7c9392694eb87af850efe0638480f3437bb1f81116db9f914220efbc2->leave($__internal_6a6528b7c9392694eb87af850efe0638480f3437bb1f81116db9f914220efbc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_edafe09eb3ea6480727c9365d07227c6a16a2080d89127d71a10d1e549c04793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edafe09eb3ea6480727c9365d07227c6a16a2080d89127d71a10d1e549c04793->enter($__internal_edafe09eb3ea6480727c9365d07227c6a16a2080d89127d71a10d1e549c04793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e36f5307e3d39e122e4972065036fe95049943ebe2b069b75713fa5cf21af82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e36f5307e3d39e122e4972065036fe95049943ebe2b069b75713fa5cf21af82->enter($__internal_3e36f5307e3d39e122e4972065036fe95049943ebe2b069b75713fa5cf21af82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e36f5307e3d39e122e4972065036fe95049943ebe2b069b75713fa5cf21af82->leave($__internal_3e36f5307e3d39e122e4972065036fe95049943ebe2b069b75713fa5cf21af82_prof);

        
        $__internal_edafe09eb3ea6480727c9365d07227c6a16a2080d89127d71a10d1e549c04793->leave($__internal_edafe09eb3ea6480727c9365d07227c6a16a2080d89127d71a10d1e549c04793_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b4c91160cf2391fc5346223df6427e36fb9fb29c2c157f49ec7dabca83dcefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4c91160cf2391fc5346223df6427e36fb9fb29c2c157f49ec7dabca83dcefe->enter($__internal_3b4c91160cf2391fc5346223df6427e36fb9fb29c2c157f49ec7dabca83dcefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec377cf567f6a0754c8ac05c5d39e3675468366f3ce3cede58d92e8611c58e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec377cf567f6a0754c8ac05c5d39e3675468366f3ce3cede58d92e8611c58e53->enter($__internal_ec377cf567f6a0754c8ac05c5d39e3675468366f3ce3cede58d92e8611c58e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec377cf567f6a0754c8ac05c5d39e3675468366f3ce3cede58d92e8611c58e53->leave($__internal_ec377cf567f6a0754c8ac05c5d39e3675468366f3ce3cede58d92e8611c58e53_prof);

        
        $__internal_3b4c91160cf2391fc5346223df6427e36fb9fb29c2c157f49ec7dabca83dcefe->leave($__internal_3b4c91160cf2391fc5346223df6427e36fb9fb29c2c157f49ec7dabca83dcefe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d9c5ce47f32e12c52655af3758f714637473cc0eb636293b4673e11157c6900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9c5ce47f32e12c52655af3758f714637473cc0eb636293b4673e11157c6900->enter($__internal_6d9c5ce47f32e12c52655af3758f714637473cc0eb636293b4673e11157c6900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f73592de57e5a0db55dff300b57f56c19e71563ef84117af2dd4b8c7ef517c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73592de57e5a0db55dff300b57f56c19e71563ef84117af2dd4b8c7ef517c0b->enter($__internal_f73592de57e5a0db55dff300b57f56c19e71563ef84117af2dd4b8c7ef517c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f73592de57e5a0db55dff300b57f56c19e71563ef84117af2dd4b8c7ef517c0b->leave($__internal_f73592de57e5a0db55dff300b57f56c19e71563ef84117af2dd4b8c7ef517c0b_prof);

        
        $__internal_6d9c5ce47f32e12c52655af3758f714637473cc0eb636293b4673e11157c6900->leave($__internal_6d9c5ce47f32e12c52655af3758f714637473cc0eb636293b4673e11157c6900_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22d24cdd9493449429f44be7081afce24197a8832130ec5b9fb1cc6431c59b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d24cdd9493449429f44be7081afce24197a8832130ec5b9fb1cc6431c59b5d->enter($__internal_22d24cdd9493449429f44be7081afce24197a8832130ec5b9fb1cc6431c59b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b893ec5e2ed981a7183891f5d628a617e92e50e5f7e18f4ff30c047f8037473c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b893ec5e2ed981a7183891f5d628a617e92e50e5f7e18f4ff30c047f8037473c->enter($__internal_b893ec5e2ed981a7183891f5d628a617e92e50e5f7e18f4ff30c047f8037473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b893ec5e2ed981a7183891f5d628a617e92e50e5f7e18f4ff30c047f8037473c->leave($__internal_b893ec5e2ed981a7183891f5d628a617e92e50e5f7e18f4ff30c047f8037473c_prof);

        
        $__internal_22d24cdd9493449429f44be7081afce24197a8832130ec5b9fb1cc6431c59b5d->leave($__internal_22d24cdd9493449429f44be7081afce24197a8832130ec5b9fb1cc6431c59b5d_prof);

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
", "base.html.twig", "/home/amalozemov/projects/tr/app/Resources/views/base.html.twig");
    }
}
