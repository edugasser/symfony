<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_16184a2ef22c55dc69908455b4e03a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  20 => 1,  346 => 321,  343 => 320,  299 => 278,  63 => 21,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  300 => 105,  297 => 277,  291 => 102,  274 => 97,  263 => 95,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  170 => 84,  58 => 15,  178 => 66,  175 => 65,  161 => 63,  118 => 49,  385 => 160,  382 => 159,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  190 => 76,  180 => 63,  174 => 65,  159 => 53,  148 => 46,  97 => 23,  76 => 28,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  348 => 322,  334 => 145,  327 => 114,  293 => 118,  288 => 101,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  221 => 85,  219 => 84,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 74,  172 => 64,  153 => 77,  150 => 55,  134 => 54,  102 => 33,  90 => 37,  81 => 23,  113 => 48,  104 => 32,  100 => 39,  77 => 25,  65 => 17,  34 => 5,  59 => 22,  53 => 11,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 118,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 87,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 51,  140 => 58,  132 => 51,  128 => 49,  119 => 40,  107 => 37,  71 => 23,  38 => 5,  177 => 64,  165 => 83,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 27,  70 => 19,  67 => 18,  61 => 23,  94 => 22,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  196 => 92,  183 => 70,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 57,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 29,  62 => 16,  49 => 12,  28 => 3,  87 => 32,  25 => 5,  21 => 2,  31 => 4,  26 => 6,  24 => 3,  19 => 1,  93 => 38,  88 => 30,  78 => 24,  46 => 12,  44 => 8,  27 => 7,  79 => 29,  72 => 21,  69 => 26,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 40,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 30,  83 => 35,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 35,  106 => 51,  103 => 25,  99 => 31,  95 => 34,  92 => 31,  86 => 28,  82 => 25,  80 => 24,  73 => 24,  64 => 17,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 10,  45 => 11,  42 => 7,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
