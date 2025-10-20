<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/components/ActionMenu/ActionList.html.twig */
class __TwigTemplate_2a1c9f3a7d123ff31ef727c4c31fc605 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/ActionMenu/ActionList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/ActionMenu/ActionList.html.twig"));

        // line 1
        $propsNames = [];        if (isset($context['__props']['hasSubmenus'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "hasSubmenus" in template "@EasyAdmin/components/ActionMenu/ActionList.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'hasSubmenus';        
        $context['attributes'] = $context['attributes']->remove('hasSubmenus');        
        if (!isset($context['hasSubmenus'])) {            $context['hasSubmenus'] = false;
        }        
        if (isset($context['__context']['hasSubmenus'])) {
            $context['hasSubmenus'] = false;
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 4
        yield "
";
        // line 5
        $context["css_class"] = Twig\Extra\Html\HtmlExtension::htmlClasses("dropdown-menu dropdown-menu-end", (((($tmp =         // line 7
(isset($context["hasSubmenus"]) || array_key_exists("hasSubmenus", $context) ? $context["hasSubmenus"] : (function () { throw new RuntimeError('Variable "hasSubmenus" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-has-submenus") : ("")));
        // line 9
        yield "
<ul ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 10, $this->source); })()), "defaults", [["class" => (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 10, $this->source); })())]], "method", false, false, false, 10), "html", null, true);
        yield ">
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 12
        yield "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/ActionMenu/ActionList.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  94 => 11,  82 => 12,  80 => 11,  76 => 10,  73 => 9,  71 => 7,  70 => 5,  67 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% props
    hasSubmenus = false,
%}

{% set css_class = html_classes(
    'dropdown-menu dropdown-menu-end',
    hasSubmenus ? 'dropdown-has-submenus',
) %}

<ul {{ attributes.defaults({class: css_class}) }}>
    {% block content %}{% endblock %}
</ul>
", "@EasyAdmin/components/ActionMenu/ActionList.html.twig", "C:\\Users\\luffy\\OneDrive\\Dev\\Formation\\DevellopeurWeb\\FormationDWWM\\MSPR 2\\Site\\Symfony\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\ActionMenu\\ActionList.html.twig");
    }
}
