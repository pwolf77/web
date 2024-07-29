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

/* nyito_oldal.html */
class __TwigTemplate_7fd15626d07d1703c86e4f7fbc665e64e074bc8462e8d17ebf00f3c84fa42e8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html", "nyito_oldal.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<h2>Én vagyok a nyitó oldal</h2>

<h3>Legújabb hírek</h3>

<div style=\"display: flex; flex-wrap:wrap; flex-direction: row;\">

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hirek"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hir"]) {
            // line 12
            yield "
\t\t<div style=\"width:33.3333%; border: 1px solid #000000; padding: 10px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box;\tbox-sizing: border-box;\">
\t\t\t<h4><a href=\"hirek/";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hir"], "id", [], "any", false, false, false, 14), "html", null, true);
            yield "\" title=\"\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hir"], "cim", [], "any", false, false, false, 14), "html", null, true);
            yield "</a></h4>
\t\t\t<p>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hir"], "bevezeto", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
</div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nyito_oldal.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  84 => 19,  74 => 15,  68 => 14,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nyito_oldal.html", "D:\\munka\\web\\templates\\nyito_oldal.html");
    }
}
