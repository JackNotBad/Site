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

/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b660815111d61144ad07b96ad3e1703e extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        // line 3
        $context["has_main_action"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 3, $this->source); })()), "hasMainAction", [], "any", false, false, false, 3);
        // line 4
        $context["main_action"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 4, $this->source); })()), "mainAction", [], "any", false, false, false, 4);
        // line 5
        yield "
<div class=\"btn-group action-group\" ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 6, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html");
            yield "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    ";
        // line 7
        if ((($tmp = (isset($context["has_main_action"]) || array_key_exists("has_main_action", $context) ? $context["has_main_action"] : (function () { throw new RuntimeError('Variable "has_main_action" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            // line 8
            yield "        ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 8, $this->source); })()), "variant", [], "any", false, false, false, 8), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "class" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "cssClass", [], "any", false, false, false, 8) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "addedCssClass", [], "any", false, false, false, 8)), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "linkUrl", [], "any", false, false, false, 8)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "linkUrl", [], "any", false, false, false, 8)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null)), "icon" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8), "htmlAttributes" => Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 8), ["data-action-group-name-main-action" => true, "onclick" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isButton", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("window.location='" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "linkUrl", [], "any", false, false, false, 8)) . "'")) : (null))]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 8, $this->source); })())); })]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 8, $this->source); })()), "variant", [], "any", false, false, false, 8), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "class" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "cssClass", [], "any", false, false, false, 8) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "addedCssClass", [], "any", false, false, false, 8)), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "linkUrl", [], "any", false, false, false, 8)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "linkUrl", [], "any", false, false, false, 8)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isForm", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null)), "icon" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8), "htmlAttributes" => Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 8), ["data-action-group-name-main-action" => true, "onclick" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "htmlElement", [], "any", false, false, false, 8), "isButton", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("window.location='" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 8, $this->source); })()), "linkUrl", [], "any", false, false, false, 8)) . "'")) : (null))]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 8, $this->source); })())); })]), $context, "@EasyAdmin/crud/action_group.html.twig", 7386223461);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 7386223461);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 8, "7386223461")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 11
            yield "
        ";
            // line 12
            $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v1->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 12, $this->source); })()), "variant", [], "any", false, false, false, 12), "htmlElement" => "button", "type" => "button", "class" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 12, $this->source); })()), "cssClass", [], "any", false, false, false, 12) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 12, $this->source); })()), "addedCssClass", [], "any", false, false, false, 12)) . " dropdown-toggle dropdown-toggle-split"), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"], "label:class" => "visually-hidden"]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v1->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 12, $this->source); })()), "variant", [], "any", false, false, false, 12), "htmlElement" => "button", "type" => "button", "class" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 12, $this->source); })()), "cssClass", [], "any", false, false, false, 12) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 12, $this->source); })()), "addedCssClass", [], "any", false, false, false, 12)) . " dropdown-toggle dropdown-toggle-split"), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"], "label:class" => "visually-hidden"]), $context, "@EasyAdmin/crud/action_group.html.twig", 33275517451);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 33275517451);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 12, "33275517451")->display($embeddedContext, $embeddedBlocks);
                $_v1->finishEmbedComponent();
            }
            // line 15
            yield "    ";
        } else {
            yield " ";
            // line 16
            yield "        ";
            $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v2->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "variant", [], "any", false, false, false, 16), "class" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "cssClass", [], "any", false, false, false, 16) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "addedCssClass", [], "any", false, false, false, 16)) . " dropdown-toggle"), "htmlElement" => "button", "type" => "button", "icon" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "icon", [], "any", false, false, false, 16), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"]]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v2->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "variant", [], "any", false, false, false, 16), "class" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "cssClass", [], "any", false, false, false, 16) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "addedCssClass", [], "any", false, false, false, 16)) . " dropdown-toggle"), "htmlElement" => "button", "type" => "button", "icon" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "icon", [], "any", false, false, false, 16), "htmlAttributes" => ["data-bs-toggle" => "dropdown", "aria-expanded" => "false"]]), $context, "@EasyAdmin/crud/action_group.html.twig", 32419136241);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32419136241);
                $this->load("@EasyAdmin/crud/action_group.html.twig", 16, "32419136241")->display($embeddedContext, $embeddedBlocks);
                $_v2->finishEmbedComponent();
            }
            // line 19
            yield "    ";
        }
        // line 20
        yield "
    ";
        // line 21
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-menu"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-menu"]), $context, "@EasyAdmin/crud/action_group.html.twig", 19536556721);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 19536556721);
            $this->load("@EasyAdmin/crud/action_group.html.twig", 21, "19536556721")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 35
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  143 => 35,  129 => 21,  126 => 20,  123 => 19,  108 => 16,  104 => 15,  90 => 12,  87 => 11,  72 => 8,  69 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var group \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionGroupDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set has_main_action = group.hasMainAction %}
{% set main_action = group.mainAction %}

<div class=\"btn-group action-group\" {% for name, value in group.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
    {% if has_main_action %} {# render as a split button (main button with action + dropdown toggle) #}
        {% component 'ea:Button' with { variant: (group.variant), htmlElement: (main_action.htmlElement), class: (main_action.cssClass)~' '~(main_action.addedCssClass), href: (main_action.htmlElement.isLink ? main_action.linkUrl : null), action: (main_action.htmlElement.isForm ? main_action.linkUrl : null), method: (main_action.htmlElement.isForm ? 'POST' : null), icon: (group.icon), htmlAttributes: (main_action.htmlAttributes|merge({'data-action-group-name-main-action': true, onclick: main_action.htmlElement.isButton ? 'window.location=\\'' ~ main_action.linkUrl ~ '\\'' : null})|filter((v) => v is not null)) } %}
            {% block content %}{%- if main_action.label is not same as(false) -%}{{ main_action.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}

        {% component 'ea:Button' with { variant: (group.variant), htmlElement: 'button', type: 'button', class: (main_action.cssClass)~' '~(main_action.addedCssClass)~' dropdown-toggle dropdown-toggle-split', htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}), 'label:class': 'visually-hidden' } %}
            {% block content %}{{ 'action.toggle_dropdown'|trans }}
        {% endblock %}{% endcomponent %}
    {% else %} {# render as a single button that toggles the dropdown (no main action) #}
        {% component 'ea:Button' with { variant: (group.variant), class: (group.cssClass)~' '~(group.addedCssClass)~' dropdown-toggle', htmlElement: 'button', type: 'button', icon: (group.icon), htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}) } %}
            {% block content %}{%- if group.label is not same as(false) -%}{{ group.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}
    {% endif %}

    {% component 'ea:ActionMenu:ActionList' with { class: 'dropdown-menu' } %}
        {% block content %}{% for item in group.items %}
            {% if item is iterable and item.type is defined %}
                {% if item.type == 'divider' %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                {% elseif item.type == 'header' %}
                    {{ component('ea:ActionMenu:ActionList:Header', { label: (item.content), renderLabelRaw: 'true' }) }}
                {% endif %}
            {% else %}
                {# item is an ActionDto #}
                {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label), icon: (item.icon), class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), url: (item.linkUrl), renderLabelRaw: 'true', showBlankIcons: (group.hasAnyActionWithIcon) }) }}
            {% endif %}
        {% endfor %}
    {% endblock %}{% endcomponent %}
</div>
", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\Mspr2\\Symfony\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b660815111d61144ad07b96ad3e1703e___7386223461 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 8, $this->source); })()), 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["main_action"]) || array_key_exists("main_action", $context) ? $context["main_action"] : (function () { throw new RuntimeError('Variable "main_action" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9));
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  287 => 9,  244 => 8,  143 => 35,  129 => 21,  126 => 20,  123 => 19,  108 => 16,  104 => 15,  90 => 12,  87 => 11,  72 => 8,  69 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var group \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionGroupDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set has_main_action = group.hasMainAction %}
{% set main_action = group.mainAction %}

<div class=\"btn-group action-group\" {% for name, value in group.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
    {% if has_main_action %} {# render as a split button (main button with action + dropdown toggle) #}
        {% component 'ea:Button' with { variant: (group.variant), htmlElement: (main_action.htmlElement), class: (main_action.cssClass)~' '~(main_action.addedCssClass), href: (main_action.htmlElement.isLink ? main_action.linkUrl : null), action: (main_action.htmlElement.isForm ? main_action.linkUrl : null), method: (main_action.htmlElement.isForm ? 'POST' : null), icon: (group.icon), htmlAttributes: (main_action.htmlAttributes|merge({'data-action-group-name-main-action': true, onclick: main_action.htmlElement.isButton ? 'window.location=\\'' ~ main_action.linkUrl ~ '\\'' : null})|filter((v) => v is not null)) } %}
            {% block content %}{%- if main_action.label is not same as(false) -%}{{ main_action.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}

        {% component 'ea:Button' with { variant: (group.variant), htmlElement: 'button', type: 'button', class: (main_action.cssClass)~' '~(main_action.addedCssClass)~' dropdown-toggle dropdown-toggle-split', htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}), 'label:class': 'visually-hidden' } %}
            {% block content %}{{ 'action.toggle_dropdown'|trans }}
        {% endblock %}{% endcomponent %}
    {% else %} {# render as a single button that toggles the dropdown (no main action) #}
        {% component 'ea:Button' with { variant: (group.variant), class: (group.cssClass)~' '~(group.addedCssClass)~' dropdown-toggle', htmlElement: 'button', type: 'button', icon: (group.icon), htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}) } %}
            {% block content %}{%- if group.label is not same as(false) -%}{{ group.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}
    {% endif %}

    {% component 'ea:ActionMenu:ActionList' with { class: 'dropdown-menu' } %}
        {% block content %}{% for item in group.items %}
            {% if item is iterable and item.type is defined %}
                {% if item.type == 'divider' %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                {% elseif item.type == 'header' %}
                    {{ component('ea:ActionMenu:ActionList:Header', { label: (item.content), renderLabelRaw: 'true' }) }}
                {% endif %}
            {% else %}
                {# item is an ActionDto #}
                {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label), icon: (item.icon), class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), url: (item.linkUrl), renderLabelRaw: 'true', showBlankIcons: (group.hasAnyActionWithIcon) }) }}
            {% endif %}
        {% endfor %}
    {% endblock %}{% endcomponent %}
</div>
", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\Mspr2\\Symfony\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b660815111d61144ad07b96ad3e1703e___33275517451 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 12
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 12, $this->source); })()), 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.toggle_dropdown"), "html", null, true);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  444 => 13,  401 => 12,  287 => 9,  244 => 8,  143 => 35,  129 => 21,  126 => 20,  123 => 19,  108 => 16,  104 => 15,  90 => 12,  87 => 11,  72 => 8,  69 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var group \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionGroupDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set has_main_action = group.hasMainAction %}
{% set main_action = group.mainAction %}

<div class=\"btn-group action-group\" {% for name, value in group.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
    {% if has_main_action %} {# render as a split button (main button with action + dropdown toggle) #}
        {% component 'ea:Button' with { variant: (group.variant), htmlElement: (main_action.htmlElement), class: (main_action.cssClass)~' '~(main_action.addedCssClass), href: (main_action.htmlElement.isLink ? main_action.linkUrl : null), action: (main_action.htmlElement.isForm ? main_action.linkUrl : null), method: (main_action.htmlElement.isForm ? 'POST' : null), icon: (group.icon), htmlAttributes: (main_action.htmlAttributes|merge({'data-action-group-name-main-action': true, onclick: main_action.htmlElement.isButton ? 'window.location=\\'' ~ main_action.linkUrl ~ '\\'' : null})|filter((v) => v is not null)) } %}
            {% block content %}{%- if main_action.label is not same as(false) -%}{{ main_action.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}

        {% component 'ea:Button' with { variant: (group.variant), htmlElement: 'button', type: 'button', class: (main_action.cssClass)~' '~(main_action.addedCssClass)~' dropdown-toggle dropdown-toggle-split', htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}), 'label:class': 'visually-hidden' } %}
            {% block content %}{{ 'action.toggle_dropdown'|trans }}
        {% endblock %}{% endcomponent %}
    {% else %} {# render as a single button that toggles the dropdown (no main action) #}
        {% component 'ea:Button' with { variant: (group.variant), class: (group.cssClass)~' '~(group.addedCssClass)~' dropdown-toggle', htmlElement: 'button', type: 'button', icon: (group.icon), htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}) } %}
            {% block content %}{%- if group.label is not same as(false) -%}{{ group.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}
    {% endif %}

    {% component 'ea:ActionMenu:ActionList' with { class: 'dropdown-menu' } %}
        {% block content %}{% for item in group.items %}
            {% if item is iterable and item.type is defined %}
                {% if item.type == 'divider' %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                {% elseif item.type == 'header' %}
                    {{ component('ea:ActionMenu:ActionList:Header', { label: (item.content), renderLabelRaw: 'true' }) }}
                {% endif %}
            {% else %}
                {# item is an ActionDto #}
                {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label), icon: (item.icon), class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), url: (item.linkUrl), renderLabelRaw: 'true', showBlankIcons: (group.hasAnyActionWithIcon) }) }}
            {% endif %}
        {% endfor %}
    {% endblock %}{% endcomponent %}
</div>
", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\Mspr2\\Symfony\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b660815111d61144ad07b96ad3e1703e___32419136241 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 16
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 16, $this->source); })()), 16);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 17, $this->source); })()), "label", [], "any", false, false, false, 17) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 17, $this->source); })()), "label", [], "any", false, false, false, 17));
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  601 => 17,  558 => 16,  444 => 13,  401 => 12,  287 => 9,  244 => 8,  143 => 35,  129 => 21,  126 => 20,  123 => 19,  108 => 16,  104 => 15,  90 => 12,  87 => 11,  72 => 8,  69 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var group \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionGroupDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set has_main_action = group.hasMainAction %}
{% set main_action = group.mainAction %}

<div class=\"btn-group action-group\" {% for name, value in group.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
    {% if has_main_action %} {# render as a split button (main button with action + dropdown toggle) #}
        {% component 'ea:Button' with { variant: (group.variant), htmlElement: (main_action.htmlElement), class: (main_action.cssClass)~' '~(main_action.addedCssClass), href: (main_action.htmlElement.isLink ? main_action.linkUrl : null), action: (main_action.htmlElement.isForm ? main_action.linkUrl : null), method: (main_action.htmlElement.isForm ? 'POST' : null), icon: (group.icon), htmlAttributes: (main_action.htmlAttributes|merge({'data-action-group-name-main-action': true, onclick: main_action.htmlElement.isButton ? 'window.location=\\'' ~ main_action.linkUrl ~ '\\'' : null})|filter((v) => v is not null)) } %}
            {% block content %}{%- if main_action.label is not same as(false) -%}{{ main_action.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}

        {% component 'ea:Button' with { variant: (group.variant), htmlElement: 'button', type: 'button', class: (main_action.cssClass)~' '~(main_action.addedCssClass)~' dropdown-toggle dropdown-toggle-split', htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}), 'label:class': 'visually-hidden' } %}
            {% block content %}{{ 'action.toggle_dropdown'|trans }}
        {% endblock %}{% endcomponent %}
    {% else %} {# render as a single button that toggles the dropdown (no main action) #}
        {% component 'ea:Button' with { variant: (group.variant), class: (group.cssClass)~' '~(group.addedCssClass)~' dropdown-toggle', htmlElement: 'button', type: 'button', icon: (group.icon), htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}) } %}
            {% block content %}{%- if group.label is not same as(false) -%}{{ group.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}
    {% endif %}

    {% component 'ea:ActionMenu:ActionList' with { class: 'dropdown-menu' } %}
        {% block content %}{% for item in group.items %}
            {% if item is iterable and item.type is defined %}
                {% if item.type == 'divider' %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                {% elseif item.type == 'header' %}
                    {{ component('ea:ActionMenu:ActionList:Header', { label: (item.content), renderLabelRaw: 'true' }) }}
                {% endif %}
            {% else %}
                {# item is an ActionDto #}
                {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label), icon: (item.icon), class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), url: (item.linkUrl), renderLabelRaw: 'true', showBlankIcons: (group.hasAnyActionWithIcon) }) }}
            {% endif %}
        {% endfor %}
    {% endblock %}{% endcomponent %}
</div>
", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\Mspr2\\Symfony\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}


/* @EasyAdmin/crud/action_group.html.twig */
class __TwigTemplate_b660815111d61144ad07b96ad3e1703e___19536556721 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 21
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 21, $this->source); })()), 21);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action_group.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 22, $this->source); })()), "items", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            yield "            ";
            if ((is_iterable($context["item"]) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", true, true, false, 23))) {
                // line 24
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 24) == "divider")) {
                    // line 25
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                    yield "
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 26
$context["item"], "type", [], "any", false, false, false, 26) == "header")) {
                    // line 27
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 27), "renderLabelRaw" => "true"]);
                    yield "
                ";
                }
                // line 29
                yield "            ";
            } else {
                // line 30
                yield "                ";
                // line 31
                yield "                ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 31), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 31), "class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 31) . " dropdown-item-variant-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 31), "renderAsForm" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRenderedAsForm", [], "any", false, false, false, 31), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 31), "renderLabelRaw" => "true", "showBlankIcons" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 31, $this->source); })()), "hasAnyActionWithIcon", [], "any", false, false, false, 31)]);
                yield "
            ";
            }
            // line 33
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action_group.html.twig";
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
        return array (  810 => 34,  804 => 33,  798 => 31,  796 => 30,  793 => 29,  787 => 27,  785 => 26,  780 => 25,  777 => 24,  774 => 23,  758 => 22,  715 => 21,  601 => 17,  558 => 16,  444 => 13,  401 => 12,  287 => 9,  244 => 8,  143 => 35,  129 => 21,  126 => 20,  123 => 19,  108 => 16,  104 => 15,  90 => 12,  87 => 11,  72 => 8,  69 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var group \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionGroupDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set has_main_action = group.hasMainAction %}
{% set main_action = group.mainAction %}

<div class=\"btn-group action-group\" {% for name, value in group.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html') }}\" {% endfor %}>
    {% if has_main_action %} {# render as a split button (main button with action + dropdown toggle) #}
        {% component 'ea:Button' with { variant: (group.variant), htmlElement: (main_action.htmlElement), class: (main_action.cssClass)~' '~(main_action.addedCssClass), href: (main_action.htmlElement.isLink ? main_action.linkUrl : null), action: (main_action.htmlElement.isForm ? main_action.linkUrl : null), method: (main_action.htmlElement.isForm ? 'POST' : null), icon: (group.icon), htmlAttributes: (main_action.htmlAttributes|merge({'data-action-group-name-main-action': true, onclick: main_action.htmlElement.isButton ? 'window.location=\\'' ~ main_action.linkUrl ~ '\\'' : null})|filter((v) => v is not null)) } %}
            {% block content %}{%- if main_action.label is not same as(false) -%}{{ main_action.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}

        {% component 'ea:Button' with { variant: (group.variant), htmlElement: 'button', type: 'button', class: (main_action.cssClass)~' '~(main_action.addedCssClass)~' dropdown-toggle dropdown-toggle-split', htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}), 'label:class': 'visually-hidden' } %}
            {% block content %}{{ 'action.toggle_dropdown'|trans }}
        {% endblock %}{% endcomponent %}
    {% else %} {# render as a single button that toggles the dropdown (no main action) #}
        {% component 'ea:Button' with { variant: (group.variant), class: (group.cssClass)~' '~(group.addedCssClass)~' dropdown-toggle', htmlElement: 'button', type: 'button', icon: (group.icon), htmlAttributes: ({'data-bs-toggle': 'dropdown', 'aria-expanded': 'false'}) } %}
            {% block content %}{%- if group.label is not same as(false) -%}{{ group.label|trans|raw }}{%- endif -%}
        {% endblock %}{% endcomponent %}
    {% endif %}

    {% component 'ea:ActionMenu:ActionList' with { class: 'dropdown-menu' } %}
        {% block content %}{% for item in group.items %}
            {% if item is iterable and item.type is defined %}
                {% if item.type == 'divider' %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                {% elseif item.type == 'header' %}
                    {{ component('ea:ActionMenu:ActionList:Header', { label: (item.content), renderLabelRaw: 'true' }) }}
                {% endif %}
            {% else %}
                {# item is an ActionDto #}
                {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label), icon: (item.icon), class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), url: (item.linkUrl), renderLabelRaw: 'true', showBlankIcons: (group.hasAnyActionWithIcon) }) }}
            {% endif %}
        {% endfor %}
    {% endblock %}{% endcomponent %}
</div>
", "@EasyAdmin/crud/action_group.html.twig", "C:\\wamp64\\www\\Mspr2\\Symfony\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action_group.html.twig");
    }
}
