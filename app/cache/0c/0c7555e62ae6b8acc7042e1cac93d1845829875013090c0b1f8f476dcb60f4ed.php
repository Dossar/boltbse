<?php

/* firstuser/firstuser.twig */
class __TwigTemplate_0665ed6be593e38478e372e086a1034512aad780c7d4b1d00dcc0497c3d8c18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-no_nav.twig", "firstuser/firstuser.twig", 3);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Create the first user");
    }

    // line 7
    public function block_page_main($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), array(0 => "form_bolt_layout.twig"));
        // line 10
        echo "
    <p class=\"first-user\">
        ";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("There are no users present in the system. Please create the first user, which will be granted root privileges.");
        echo "
    </p>

    <form method=\"post\" class=\"form-horizontal submitspinner\" role=\"form\" autocomplete=\"off\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "
        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"login\">
            <i class=\"fa fa-sign-in fa-fw\"></i> ";
        // line 18
        echo $this->env->getExtension('Bolt')->trans("Create the first user");
        echo "
        </button>
    </form>

    ";
        // line 22
        if ( !twig_test_empty($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "note", array()))) {
            // line 23
            echo "        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>";
            // line 24
            echo $this->env->getExtension('Bolt')->trans("Note:");
            echo "</strong> ";
            echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "note", array());
            echo "
        </p>
    ";
        }
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "firstuser/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  71 => 24,  68 => 23,  66 => 22,  59 => 18,  54 => 16,  47 => 12,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }
}
/* {# Page: Create the first User #}*/
/* */
/* {% extends '_base/_page-no_nav.twig' %}*/
/* */
/* {% block page_title __('Create the first user') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% form_theme context.form 'form_bolt_layout.twig' %}*/
/* */
/*     <p class="first-user">*/
/*         {{ __('There are no users present in the system. Please create the first user, which will be granted root privileges.') }}*/
/*     </p>*/
/* */
/*     <form method="post" class="form-horizontal submitspinner" role="form" autocomplete="off">*/
/*         {{ form_widget(context.form) }}*/
/*         <button type="submit" class="btn btn-primary" name="submit" value="login">*/
/*             <i class="fa fa-sign-in fa-fw"></i> {{ __('Create the first user') }}*/
/*         </button>*/
/*     </form>*/
/* */
/*     {% if context.note is not empty %}*/
/*         <p class="alert alert-info" style="max-width: 550px; margin-top:10px;">*/
/*             <strong>{{ __('Note:') }}</strong> {{ context.note|raw }}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/* {% endblock page_main %}*/
/* */
