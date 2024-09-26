<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/estagioAvanz/templates/layout/page.html.twig */
class __TwigTemplate_91cb46ad252ba30613a8eb6bd2384251 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'featured2' => [$this, 'block_featured2'],
            'content' => [$this, 'block_content'],
            'featured_content_3' => [$this, 'block_featured_content_3'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["sidebar_first_exists"] =  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 71), 71, $this->source)), "<img><video><audio><drupal-render-placeholder>")));
        // line 72
        echo "  ";
        $context["sidebar_second_exists"] =  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 72), 72, $this->source)), "<img><video><audio><drupal-render-placeholder>")));
        // line 73
        echo "  
  
  <div id=\"page-wrapper\">
    <div id=\"page\">
      <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
        ";
        // line 78
        $this->displayBlock('head', $context, $blocks);
        // line 131
        echo "      </header>
      ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            echo "        <div class=\"highlighted container-fluid px-0\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 135
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 135)) {
            // line 136
            echo "        ";
            $this->displayBlock('featured', $context, $blocks);
            // line 143
            echo "      ";
        }
        // line 144
        echo "  
   ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top_2", [], "any", false, false, true, 145)) {
            // line 146
            echo "        ";
            $this->displayBlock('featured2', $context, $blocks);
            // line 153
            echo "      ";
        }
        // line 154
        echo "  
      <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
        ";
        // line 156
        $this->displayBlock('content', $context, $blocks);
        // line 183
        echo "      </div>
  
  
  ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_content_3", [], "any", false, false, true, 186)) {
            // line 187
            echo "        ";
            $this->displayBlock('featured_content_3', $context, $blocks);
            // line 194
            echo "      ";
        }
        // line 195
        echo "  
  
      ";
        // line 197
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 197) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 197)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 197))) {
            // line 198
            echo "        <div class=\"featured-bottom\">
          <aside class=\"";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 199, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
            ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
            ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "
            ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 206
        echo "  
      <footer class=\"site-footer-custom pb-0\">
        ";
        // line 208
        $this->displayBlock('footer', $context, $blocks);
        // line 212
        echo "      </footer>
    </div>
  </div>
  ";
    }

    // line 78
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "          ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 79)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 79))) {
            // line 80
            echo "            <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 80, $this->source), "html", null, true);
            echo ">
            ";
            // line 81
            if (($context["container_navbar"] ?? null)) {
                // line 82
                echo "            <div class=\"container\">
            ";
            }
            // line 84
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
                ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
                ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 86)) {
                // line 87
                echo "                  <div class=\"form-inline navbar-form ms-auto\">
                    ";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 91
            echo "            ";
            if (($context["container_navbar"] ?? null)) {
                // line 92
                echo "            </div>
            ";
            }
            // line 94
            echo "            </nav>
          ";
        }
        // line 96
        echo "          ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "            <nav class=\"navbar navbar-expand-lg container d-block\" id=\"navbar-main\">
              ";
            // line 98
            if (($context["container_navbar"] ?? null)) {
                // line 99
                echo "              <div class=\"container\">
              ";
            }
            // line 101
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
                ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 102) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102))) {
                // line 103
                echo "                  <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 103, $this->source), "html", null, true);
                echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                  <div class=\"";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 104, $this->source), "html", null, true);
                echo "\" id=\"CollapsingNavbar\">
                    ";
                // line 105
                if (($context["navbar_offcanvas"] ?? null)) {
                    // line 106
                    echo "                      <div class=\"offcanvas-header\">
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                      </div>
                      <div class=\"offcanvas-body\">
                    ";
                }
                // line 111
                echo "                    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "
                    ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 112)) {
                    // line 113
                    echo "                      <div class=\"form-inline navbar-form justify-content-end\">
                        ";
                    // line 114
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo "
                      </div>
                    ";
                }
                // line 117
                echo "                    ";
                if (($context["navbar_offcanvas"] ?? null)) {
                    // line 118
                    echo "                      </div>
                    ";
                }
                // line 120
                echo "                  </div>
                ";
            }
            // line 122
            echo "                ";
            if (($context["sidebar_collapse"] ?? null)) {
                // line 123
                echo "                  <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
                ";
            }
            // line 125
            echo "              ";
            if (($context["container_navbar"] ?? null)) {
                // line 126
                echo "              </div>
              ";
            }
            // line 128
            echo "            </nav>
          ";
        }
        // line 130
        echo "        ";
    }

    // line 136
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "          <div class=\"featured-top\">
            <aside class=\"featured-top__inner section ";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 138, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
              ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
            </aside>
          </div>
        ";
    }

    // line 146
    public function block_featured2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "          <div class=\"featured-top-2\">
            <aside class=\"featured-top__inner section ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 148, $this->source), "html", null, true);
        echo "-fluid px-0 clearfix\" role=\"complementary\">
              ";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top_2", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
            </aside>
          </div>
        ";
    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "          <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 157, $this->source), "html", null, true);
        echo "\">
            ";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
        echo "
            <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <main";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 160, $this->source), "html", null, true);
        echo ">
                  <section class=\"section\">
                    <a href=\"#main-content\" id=\"main-content\" tabindex=\"-1\"></a>
                    ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
                  </section>
                </main>
              ";
        // line 166
        if (($context["sidebar_first_exists"] ?? null)) {
            // line 167
            echo "                <div class=\"sidebar_first sidebar col-md-3 order-first\" id=\"sidebar_first\">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 173
        echo "              ";
        if (($context["sidebar_second_exists"] ?? null)) {
            // line 174
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 174, $this->source), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 180
        echo "            </div>
          </div>
        ";
    }

    // line 187
    public function block_featured_content_3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "          <div class=\"featured-top-2\">
            <aside class=\"featured-top__inner section ";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 189, $this->source), "html", null, true);
        echo "-fluid px-0 clearfix\" role=\"complementary\">
              ";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_content_3", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
        echo "
            </aside>
          </div>
        ";
    }

    // line 208
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
        echo "
          </footer>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/estagioAvanz/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 209,  406 => 208,  398 => 190,  394 => 189,  391 => 188,  387 => 187,  381 => 180,  374 => 176,  368 => 174,  365 => 173,  358 => 169,  354 => 167,  352 => 166,  346 => 163,  340 => 160,  335 => 158,  330 => 157,  326 => 156,  318 => 149,  314 => 148,  311 => 147,  307 => 146,  299 => 139,  295 => 138,  292 => 137,  288 => 136,  284 => 130,  280 => 128,  276 => 126,  273 => 125,  269 => 123,  266 => 122,  262 => 120,  258 => 118,  255 => 117,  249 => 114,  246 => 113,  244 => 112,  239 => 111,  232 => 106,  230 => 105,  226 => 104,  221 => 103,  219 => 102,  214 => 101,  210 => 99,  208 => 98,  205 => 97,  202 => 96,  198 => 94,  194 => 92,  191 => 91,  185 => 88,  182 => 87,  180 => 86,  176 => 85,  171 => 84,  167 => 82,  165 => 81,  160 => 80,  157 => 79,  153 => 78,  146 => 212,  144 => 208,  140 => 206,  133 => 202,  129 => 201,  125 => 200,  121 => 199,  118 => 198,  116 => 197,  112 => 195,  109 => 194,  106 => 187,  104 => 186,  99 => 183,  97 => 156,  93 => 154,  90 => 153,  87 => 146,  85 => 145,  82 => 144,  79 => 143,  76 => 136,  73 => 135,  67 => 133,  65 => 132,  62 => 131,  60 => 78,  56 => 77,  50 => 73,  47 => 72,  45 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/estagioAvanz/templates/layout/page.html.twig", "/var/www/html/drupal-core/themes/custom/estagioAvanz/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 78, "if" => 132);
        static $filters = array("trim" => 71, "striptags" => 71, "render" => 71, "t" => 77, "escape" => 133);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['trim', 'striptags', 'render', 't', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
