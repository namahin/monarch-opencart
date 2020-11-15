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

/* OPC100240_5/template/information/contact.twig */
class __TwigTemplate_d853445ce487a0a1ae377d3d968b4d356fb808967008281ec02ce0af49a0a6ac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-contact\">

  \t";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    ";
        // line 18
        echo "      ";
        // line 19
        echo "      ";
        // line 20
        echo "      
      ";
        // line 21
        if (($context["locations"] ?? null)) {
            // line 22
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 25
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 27);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 27);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 29);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 33);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 33);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 35
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 35);
                echo "</strong><br />
                  <address>
                  ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 37);
                echo "
                  </address>
                  ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 40));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 42
                echo "                </div> 
                <div class=\"col-sm-3\"> <strong>";
                // line 43
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 44);
                echo "<br />
                  <br />
                  ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 48);
                    echo "
                  ";
                }
                // line 50
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 54);
                    echo "<br />
                  <br />
                  ";
                }
                // line 57
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 59);
                    echo "
                  ";
                }
                // line 61
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "      </div>
      ";
        }
        // line 69
        echo "      <div class=\"contact-form-design container\">
          <div class=\"left\">
           ";
        // line 71
        if (($context["image"] ?? null)) {
            echo " 
            <div class=\"address-detail\"><img src=\"";
            // line 72
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
       ";
        }
        // line 73
        echo " 
            <div class=\"address-detail1\"><div class=\"image\"></div><strong>";
        // line 74
        echo ($context["store"] ?? null);
        echo "</strong>
             <address>
              ";
        // line 76
        echo ($context["address"] ?? null);
        echo " 
              </address>
               ";
        // line 78
        if (($context["geocode"] ?? null)) {
            // line 79
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo " &hl=";
            echo ($context["geocode_hl"] ?? null);
            echo " &t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo " </a>
              ";
        }
        // line 81
        echo "            </div>
            <div class=\"telephone\"><div class=\"image\"></div>
               <strong>";
        // line 83
        echo ($context["text_telephone"] ?? null);
        echo " </strong>
               <address>";
        // line 84
        echo ($context["telephone"] ?? null);
        echo "  </address>
      </div>
      <div class=\"fax\"><div class=\"image\"></div>
              ";
        // line 87
        if (($context["fax"] ?? null)) {
            echo " 
              <strong>";
            // line 88
            echo ($context["text_fax"] ?? null);
            echo " </strong>
              <address>";
            // line 89
            echo ($context["fax"] ?? null);
            echo " </address>
              ";
        }
        // line 91
        echo "        
            </div>
            <div class=\"time\"><div class=\"image\"></div>
              ";
        // line 94
        if (($context["open"] ?? null)) {
            // line 95
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong>
               <address>";
            // line 96
            echo ($context["open"] ?? null);
            echo "</address>
        
              ";
        }
        // line 99
        echo "              </div>
              <div class=\"comment\"><div class=\"image\"></div>
              ";
        // line 101
        if (($context["comment"] ?? null)) {
            // line 102
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong>
              <address>";
            // line 103
            echo ($context["comment"] ?? null);
            echo "</address>
              ";
        }
        // line 105
        echo "            </div>
      </div>
        <div class=\"contact-form\">
      <form action=\"";
        // line 108
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 110
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 112
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 114
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 115
        if (($context["error_name"] ?? null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 121
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 123
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 124
        if (($context["error_email"] ?? null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 127
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 130
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 132
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 133
        if (($context["error_enquiry"] ?? null)) {
            // line 134
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 136
        echo "            </div>
          </div>
          ";
        // line 138
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary captcha-btn\" type=\"submit\" value=\"";
        // line 142
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
    </div>

    <div class=\"map_button\" title=\"See Map\"><i class=\"fa fa-map-marker\"></i></div>


    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row contact-info\">
    
      <div class=\"right\">
        <div class=\"map\">
            ";
        // line 169
        echo "        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgKBG0SbQowaKmm0GqdJPYsuuDlamDxM'></script>
          <div id='gmap_canvas' style='height:500px;'></div>
        <script type = 'text/javascript' >
        function init_map() {
          var t='";
        // line 173
        echo twig_urlencode_filter(($context["geocode"] ?? null));
        echo "'; 
          var urlString = t.split(\"%2C\");
            var x,y;
            x=urlString[0]; y=urlString[1];
            var myOptions = {
              zoom: 12,
              center: new google.maps.LatLng(x,y),
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
              map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
              marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(x,y)
    });
              infowindow = new google.maps.InfoWindow({
              content: '<strong>";
        // line 188
        echo ($context["store"] ?? null);
        echo "</strong>'
    });
              google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map, marker);
    });
              infowindow.open(map, marker);
}
            google.maps.event.addDomListener(window, 'load', init_map); </script>
        </div>
      </div>

            
          </div>
        </div>
      </div>
      ";
        // line 203
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 204
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 206
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 206,  469 => 204,  465 => 203,  447 => 188,  429 => 173,  423 => 169,  404 => 142,  397 => 138,  393 => 136,  387 => 134,  385 => 133,  381 => 132,  376 => 130,  371 => 127,  365 => 125,  363 => 124,  359 => 123,  354 => 121,  349 => 118,  343 => 116,  341 => 115,  337 => 114,  332 => 112,  327 => 110,  322 => 108,  317 => 105,  312 => 103,  307 => 102,  305 => 101,  301 => 99,  295 => 96,  290 => 95,  288 => 94,  283 => 91,  278 => 89,  274 => 88,  270 => 87,  264 => 84,  260 => 83,  256 => 81,  246 => 79,  244 => 78,  239 => 76,  234 => 74,  231 => 73,  222 => 72,  218 => 71,  214 => 69,  210 => 67,  199 => 61,  194 => 59,  189 => 58,  186 => 57,  180 => 54,  175 => 53,  173 => 52,  169 => 50,  164 => 48,  159 => 47,  157 => 46,  152 => 44,  148 => 43,  145 => 42,  135 => 40,  133 => 39,  128 => 37,  122 => 35,  112 => 33,  110 => 32,  104 => 29,  97 => 27,  93 => 25,  89 => 24,  83 => 22,  81 => 21,  78 => 20,  76 => 19,  74 => 18,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/information/contact.twig", "");
    }
}
