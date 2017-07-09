<?php

/* themes/sales_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_f01f514fd3f9ca0ab4e577438fd0ca7221e214a8b26ec53c37f99dbc2d7f2719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 62, "for" => 133);
        $filters = array("raw" => 134, "date" => 449);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array()))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-6\">
          ";
            // line 69
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array())) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array()), "html", null, true));
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-6\">
          ";
            // line 77
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array())) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array()), "html", null, true));
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-2\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 101
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 102
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 104
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 109
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 110
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 112
        echo "        </div>
        <!-- End: Main menu -->

        <!-- Start: Search -->
        <div class=\"col-md-2\">
            ";
        // line 117
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 118
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
            ";
        }
        // line 119
        echo "        
        </div>
        <!-- End: Search -->

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 130
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (isset($context["show_slideshow"]) ? $context["show_slideshow"] : null))) {
            // line 131
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider_content"]) ? $context["slider_content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 134
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "      </ul>
    </div>
  ";
        }
        // line 139
        echo "<!-- End: Slider -->


<!-- Start: Testimonials -->
  ";
        // line 143
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "testimonials", array()))) {
            // line 144
            echo "    <div class=\"testimonials-wrap\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 148
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "testimonials", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "<!--End: Testimonials -->


<!-- Start: Home page message -->
  ";
        // line 158
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()))) {
            // line 159
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 162
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 167
        echo "<!--End: Home page message -->


<!-- Start: Highlight region -->
  ";
        // line 171
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 172
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 175
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 180
        echo "<!-- End: Highlight region -->


<!-- Start Top Widgets -->
";
        // line 184
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())))) {
            // line 185
            echo "  <div class=\"topwidget\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Top widget first -->          
        ";
            // line 190
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                // line 191
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 192
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 194
            echo "          
        <!-- End: Top widget first --> 

        <!-- Start: Top widget second -->          
        ";
            // line 198
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                // line 199
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 200
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 202
            echo "          
        <!-- End: Top widget second --> 
        
        <!-- Start: Top widget third -->         
        ";
            // line 206
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                // line 207
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 208
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 210
            echo "          
        <!-- End: Top widget third --> 

      </div>
    </div>
  </div>
";
        }
        // line 217
        echo "<!-- End: Top Widgets -->


<!-- Start: Page title -->
";
        // line 221
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 222
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 227
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 234
        echo "<!-- End: Page title -- >


<!-- Start: Content Layout -->
<div id=\"wrapper\">  
  <div class=\"container\">
    
    <!-- Start: Content top -->
      ";
        // line 242
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 243
            echo "        <div class=\"row\">
          ";
            // line 244
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 247
        echo "    <!-- End: Content top -->
    
    <!-- Start: Breadcrumb -->
    ";
        // line 250
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 251
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 252
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
      </div>
    ";
        }
        // line 255
        echo "    <!-- End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 260
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 261
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 262
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 263
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 267
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 270
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 271
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 272
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 273
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 277
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 280
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 281
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 282
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 283
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 287
        echo "      <!-- End: Right SideBar -->
      
    </div>
    <!--End: Content -->

  </div>
</div>
<!-- End: Content Layout -->


<!-- Start: Address -->
  ";
        // line 298
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array()))) {
            // line 299
            echo "    <div class=\"address-wrap\">
      ";
            // line 300
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 303
        echo "<!--End: Address -->


<!-- Start: Bottom Widgets-->
";
        // line 307
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())))) {
            // line 308
            echo "  <div class=\"bottom-widgets\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 313
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                // line 314
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 315
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 317
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 321
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                // line 322
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 323
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 325
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 329
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                // line 330
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 331
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 333
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 337
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                // line 338
                echo "        <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
          ";
                // line 339
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 342
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>
";
        }
        // line 348
        echo "<!-- End: Bottom Widgets-->


<!-- Start: Footer -->
";
        // line 352
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 353
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 358
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 359
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_first_class"]) ? $context["footer_first_class"] : null), "html", null, true));
                echo ">
            ";
                // line 360
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 363
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 366
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 367
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo ">
            ";
                // line 368
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 371
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 374
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 375
                echo "          <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo ">
            ";
                // line 376
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>
";
        }
        // line 385
        echo "<!--End: Footer -->


<!-- Start: Google map -->
";
        // line 389
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array())) {
            // line 390
            echo "  <div class=\"google_map\">
    ";
            // line 391
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 394
        echo "<!-- End: Google map -->


<!-- Start: Footer Menu -->
";
        // line 398
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 399
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Footer Menu -->
        <div class=\"col-sm-6\">
          ";
            // line 405
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Footer Menu -->

        <!-- Start: Social media links -->
        ";
            // line 410
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 411
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 413
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 414
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 416
                echo "              ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 417
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 419
                echo "              ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 420
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 422
                echo "              ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 423
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 425
                echo "              ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 426
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 428
                echo "              ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 429
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 431
                echo "            </div>
          </div>
        ";
            }
            // line 434
            echo "        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 440
        echo "<!-- End: Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 449
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 454
        if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
            // line 455
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 459
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/sales_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 459,  770 => 455,  768 => 454,  760 => 449,  749 => 440,  741 => 434,  736 => 431,  730 => 429,  727 => 428,  721 => 426,  718 => 425,  712 => 423,  709 => 422,  703 => 420,  700 => 419,  694 => 417,  691 => 416,  685 => 414,  683 => 413,  679 => 411,  677 => 410,  669 => 405,  661 => 399,  659 => 398,  653 => 394,  647 => 391,  644 => 390,  642 => 389,  636 => 385,  628 => 379,  622 => 376,  617 => 375,  615 => 374,  610 => 371,  604 => 368,  599 => 367,  597 => 366,  592 => 363,  586 => 360,  581 => 359,  579 => 358,  572 => 353,  570 => 352,  564 => 348,  556 => 342,  550 => 339,  545 => 338,  543 => 337,  537 => 333,  531 => 331,  526 => 330,  524 => 329,  518 => 325,  512 => 323,  507 => 322,  505 => 321,  499 => 317,  493 => 315,  488 => 314,  486 => 313,  479 => 308,  477 => 307,  471 => 303,  465 => 300,  462 => 299,  460 => 298,  447 => 287,  440 => 283,  436 => 282,  433 => 281,  431 => 280,  426 => 277,  419 => 273,  415 => 272,  412 => 271,  410 => 270,  405 => 267,  398 => 263,  394 => 262,  391 => 261,  389 => 260,  382 => 255,  376 => 252,  373 => 251,  371 => 250,  366 => 247,  360 => 244,  357 => 243,  355 => 242,  345 => 234,  335 => 227,  328 => 222,  326 => 221,  320 => 217,  311 => 210,  305 => 208,  300 => 207,  298 => 206,  292 => 202,  286 => 200,  281 => 199,  279 => 198,  273 => 194,  267 => 192,  262 => 191,  260 => 190,  253 => 185,  251 => 184,  245 => 180,  237 => 175,  232 => 172,  230 => 171,  224 => 167,  216 => 162,  211 => 159,  209 => 158,  203 => 154,  194 => 148,  188 => 144,  186 => 143,  180 => 139,  175 => 136,  166 => 134,  162 => 133,  158 => 131,  156 => 130,  143 => 119,  137 => 118,  135 => 117,  128 => 112,  122 => 110,  120 => 109,  113 => 104,  107 => 102,  105 => 101,  89 => 87,  80 => 80,  74 => 78,  72 => 77,  65 => 72,  59 => 70,  57 => 69,  49 => 63,  47 => 62,  43 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


{% if page.contact_email or page.top_menu %}
  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-6\">
          {% if page.contact_email %}
            {{ page.contact_email }}
          {% endif %}
        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-6\">
          {% if page.top_menu %}
            {{ page.top_menu }}
          {% endif %}
        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
{% endif %}

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-2\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          {% if page.header %}
            {{ page.header }}
          {% endif %}
        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          {% if page.primary_menu %}
            {{ page.primary_menu }}
          {% endif %}
        </div>
        <!-- End: Main menu -->

        <!-- Start: Search -->
        <div class=\"col-md-2\">
            {% if page.search %}
              {{ page.search }}
            {% endif %}        
        </div>
        <!-- End: Search -->

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  {% if is_front and show_slideshow%}
    <div class=\"flexslider\">
      <ul class=\"slides\">
        {% for slider_contents in slider_content %}
          {{ slider_contents | raw }}
        {% endfor %}
      </ul>
    </div>
  {% endif %}
<!-- End: Slider -->


<!-- Start: Testimonials -->
  {% if is_front and page.testimonials %}
    <div class=\"testimonials-wrap\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.testimonials }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End: Testimonials -->


<!-- Start: Home page message -->
  {% if is_front and page.homepagemessage %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.homepagemessage }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Highlight region -->
  {% if page.highlighted %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.highlighted }}
        </div>
      </div>
    </div>
  {% endif %}
<!-- End: Highlight region -->


<!-- Start Top Widgets -->
{% if (is_front) and (page.topwidget_first or page.topwidget_second or page.topwidget_third) %}
  <div class=\"topwidget\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Top widget first -->          
        {% if page.topwidget_first %}
          <div class = {{ topwidget_class }}>
            {{ page.topwidget_first }}
          </div>
        {% endif %}          
        <!-- End: Top widget first --> 

        <!-- Start: Top widget second -->          
        {% if page.topwidget_second %}
          <div class = {{ topwidget_class }}>
            {{ page.topwidget_second }}
          </div>
        {% endif %}          
        <!-- End: Top widget second --> 
        
        <!-- Start: Top widget third -->         
        {% if page.topwidget_third %}
          <div class = {{ topwidget_third_class }}>
            {{ page.topwidget_third }}
          </div>
        {% endif %}          
        <!-- End: Top widget third --> 

      </div>
    </div>
  </div>
{% endif %}
<!-- End: Top Widgets -->


<!-- Start: Page title -->
{%  if page.page_title and not is_front %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.page_title }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endif %}
<!-- End: Page title -- >


<!-- Start: Content Layout -->
<div id=\"wrapper\">  
  <div class=\"container\">
    
    <!-- Start: Content top -->
      {% if page.content_top %}
        <div class=\"row\">
          {{ page.content_top }}
        </div>
      {% endif %}
    <!-- End: Content top -->
    
    <!-- Start: Breadcrumb -->
    {% if not is_front %}
      <div class=\"row\">
        <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
      </div>
    {% endif %}
    <!-- End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      {% if page.sidebar_first %}
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
      {% endif %}
      <!-- End Left SideBar -->

      <!--- Start Content -->
      {% if page.content %}
        <div class=\"content_layout\">
          <div class={{contentlayout}}>
            {{ page.content }}
          </div>
        </div>
      {% endif %}
      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      {% if page.sidebar_second %}
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
      {% endif %}
      <!-- End: Right SideBar -->
      
    </div>
    <!--End: Content -->

  </div>
</div>
<!-- End: Content Layout -->


<!-- Start: Address -->
  {% if is_front and page.address %}
    <div class=\"address-wrap\">
      {{ page.address }}
    </div>
  {% endif %}
<!--End: Address -->


<!-- Start: Bottom Widgets-->
{% if is_front and (page.bottom_first or page.bottom_second or page.bottom_third) %}
  <div class=\"bottom-widgets\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        {% if page.bottom_first %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_first }}
          </div>
        {% endif %}          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        {% if page.bottom_second %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_second }}
          </div>
        {% endif %}          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        {% if page.bottom_third %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_third }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        {% if page.bottom_forth %}
        <div class = {{ bottom_class }}>
          {{ page.bottom_forth }}
        </div>
        {% endif %}
        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>
{% endif %}
<!-- End: Bottom Widgets-->


<!-- Start: Footer -->
{% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}
  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Footer First -->
        {% if page.footer_first %}
          <div class = {{ footer_first_class }}>
            {{ page.footer_first }}
          </div>
        {% endif %}
        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        {% if page.footer_second %}
          <div class = {{ footer_class }}>
            {{ page.footer_second }}
          </div>
        {% endif %}
        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        {% if page.footer_third %}
          <div class = {{ footer_class }}>
            {{ page.footer_third }}
          </div>
        {% endif %}
        <!-- End: Footer Third -->

      </div>
    </div>
  </div>
{% endif %}
<!--End: Footer -->


<!-- Start: Google map -->
{% if page.google_map %}
  <div class=\"google_map\">
    {{ page.google_map }}
  </div>
{% endif %}
<!-- End: Google map -->


<!-- Start: Footer Menu -->
{% if page.footer_menu %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Footer Menu -->
        <div class=\"col-sm-6\">
          {{ page.footer_menu }}
        </div>
        <!-- End: Footer Menu -->

        <!-- Start: Social media links -->
        {% if show_social_icon %}
          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              {% if facebook_url %}
                <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              {% endif %}
              {% if google_plus_url %}
                <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              {% endif %}
              {% if twitter_url %}
                <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              {% endif %}
              {% if linkedin_url %}
                <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              {% endif %}
              {% if pinterest_url %}
                <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              {% endif %}
              {% if rss_url %}
                <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              {% endif %}
            </div>
          </div>
        {% endif %}
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
{% endif %}
<!-- End: Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      {% endif %}
      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }
}
