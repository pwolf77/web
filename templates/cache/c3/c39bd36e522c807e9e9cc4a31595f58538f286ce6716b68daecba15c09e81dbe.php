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

/* index.html */
class __TwigTemplate_4b7f298fee1f901de990596ac9ff1c2eebfeb177a5c5f6d1a1ad0a6e9adebb4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
<title>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "BODY_TITLE", [], "any", false, false, false, 4), "html", null, true);
        yield "</title>
<base href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "BODY_BASEHREF", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
<meta name=\"viewport\" content=\"width=device-width, user-scalable=0, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

<script type=\"text/javascript\">var host='";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "BODY_BASEHREF", [], "any", false, false, false, 9), "html", null, true);
        yield "';</script>

<script src=\"js/jquery-3.5.1.min.js?v=";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "VERSION", [], "any", false, false, false, 11), "html", null, true);
        yield "\" type=\"text/javascript\"></script>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "BODY_JAVASCRIPT", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 14
            yield "\t<script src=\"js/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["script"], "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "VERSION", [], "any", false, false, false, 14), "html", null, true);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t

<script type=\"text/javascript\">

\$(document).ready(function() {

\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["body_elements"] ?? null), "BODY_JQUERY_DOCUMENT_READY", [], "any", false, false, false, 21), "html", null, true);
        yield "

});

</script>

</head>

<body>

<h1>Weboldal</h1>

<ul style=\"display:flex; list-style: none; flex-direction: row;\">
\t<li style=\"padding: 5px;\"><a href=\"nyito_oldal\">Nyitó oldal</a></li>
\t<li style=\"padding: 5px;\"><a href=\"kapcsolat\">Kapcsolat</a></li>
</ul>

";
        // line 38
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 39
        yield "\t
</body>
</html>";
        return; yield '';
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html";
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
        return array (  117 => 38,  110 => 39,  108 => 38,  88 => 21,  80 => 15,  69 => 14,  65 => 13,  60 => 11,  55 => 9,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "D:\\munka\\web\\templates\\index.html");
    }
}
