<?php

/* UvmediaCoreBundle:Default:index.html.twig */
class __TwigTemplate_788bd7833990f245bf60bbfc52ce4a75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UvmediaCoreBundle::core.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UvmediaCoreBundle::core.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Prueba de Jquery UI en la plantilla";
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\">
    \$(function(){

        // Accordion
        \$(\"#accordion\").accordion({ header: \"h3\" });

        // Tabs
        \$('#tabs').tabs();

        // Dialog
        \$('#dialog').dialog({
            autoOpen: false,
            width: 600,
            buttons: {
                \"Ok\": function() {
                    \$(this).dialog(\"close\");
                },
                \"Cancel\": function() {
                    \$(this).dialog(\"close\");
                }
            }
        });

        // Dialog Link
        \$('#dialog_link').click(function(){
            \$('#dialog').dialog('open');
            return false;
        });

        // Datepicker
        \$('#datepicker').datepicker({
            inline: true
        });

        // Slider
        \$('#slider').slider({
            range: true,
            values: [17, 67]
        });

        // Progressbar
        \$(\"#progressbar\").progressbar({
            value: 20
        });

        //hover states on the static widgets
        \$('#dialog_link, ul#icons li').hover(
            function() { \$(this).addClass('ui-state-hover'); },
            function() { \$(this).removeClass('ui-state-hover'); }
        );

    });
</script>
";
    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 59
        echo "<style type=\"text/css\">
    /*demo page css*/
    body{ font: 62.5% \"Trebuchet MS\", sans-serif; margin: 50px;}
    .demoHeaders { margin-top: 2em; }
    #dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
    #dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
    ul#icons {margin: 0; padding: 0;}
    ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
    ul#icons span.ui-icon {float: left; margin: 0 4px;}
</style>
";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "<h1>Welcome to jQuery UI!</h1>
\t<p style=\"font-size: 1.3em; line-height: 1.5; margin: 1em 0; width: 50%;\">This page demonstrates the widgets you downloaded using the theme you selected in the download builder. We've included and linked to minified versions of <a href=\"js/jquery-1.8.0.min.js\">jQuery</a>, your personalized copy of <a href=\"js/jquery-ui-1.8.23.custom.min.js\">jQuery UI (js/jquery-ui-1.8.23.custom.min.js)</a>, and <a href=\"css/blitzer/jquery-ui-1.8.23.custom.css\">css/blitzer/jquery-ui-1.8.23.custom.css</a> which imports the entire jQuery UI CSS Framework. You can choose to link a subset of the CSS Framework depending on your needs. </p>
\t<p style=\"font-size: 1.2em; line-height: 1.5; margin: 1em 0; width: 50%;\">You've downloaded components and a theme that are compatible with jQuery 1.3+. Please make sure you are using jQuery 1.3+ in your production environment.</p>

\t<p style=\"font-weight: bold; margin: 2em 0 1em; font-size: 1.3em;\">YOUR COMPONENTS:</p>

\t\t<!-- Accordion -->
\t\t<h2 class=\"demoHeaders\">Accordion</h2>
\t\t<div id=\"accordion\">
\t\t\t<div>
\t\t\t\t<h3><a href=\"#\">First</a></h3>
\t\t\t\t<div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3><a href=\"#\">Second</a></h3>
\t\t\t\t<div>Phasellus mattis tincidunt nibh.</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3><a href=\"#\">Third</a></h3>
\t\t\t\t<div>Nam dui erat, auctor a, dignissim quis.</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Autocomplete -->
\t\t<h2 class=\"demoHeaders\">Autocomplete</h2>
\t\t<div>
\t\t\t<input id=\"autocomplete\" style=\"z-index: 100; position: relative\" title=\"type &quot;a&quot;\" />
\t\t</div>

\t\t<!-- Button -->
\t\t<h2 class=\"demoHeaders\">Button</h2>
\t\t<button id=\"button\">A button element</button>
\t\t<form style=\"margin-top: 1em;\">
\t\t\t<div id=\"radioset\">
\t\t\t\t<input type=\"radio\" id=\"radio1\" name=\"radio\" /><label for=\"radio1\">Choice 1</label>
\t\t\t\t<input type=\"radio\" id=\"radio2\" name=\"radio\" checked=\"checked\" /><label for=\"radio2\">Choice 2</label>
\t\t\t\t<input type=\"radio\" id=\"radio3\" name=\"radio\" /><label for=\"radio3\">Choice 3</label>
\t\t\t</div>
\t\t</form>


\t\t<!-- Tabs -->
\t\t<h2 class=\"demoHeaders\">Tabs</h2>
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#tabs-1\">First</a></li>
\t\t\t\t<li><a href=\"#tabs-2\">Second</a></li>
\t\t\t\t<li><a href=\"#tabs-3\">Third</a></li>
\t\t\t</ul>
\t\t\t<div id=\"tabs-1\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
\t\t\t<div id=\"tabs-2\">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
\t\t\t<div id=\"tabs-3\">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
\t\t</div>

\t\t<!-- Dialog NOTE: Dialog is not generated by UI in this demo so it can be visually styled in themeroller-->
\t\t<h2 class=\"demoHeaders\">Dialog</h2>
\t\t<p><a href=\"#\" id=\"dialog_link\" class=\"ui-state-default ui-corner-all\"><span class=\"ui-icon ui-icon-newwin\"></span>Open Dialog</a></p>


\t\t<h2 class=\"demoHeaders\">Overlay and Shadow Classes <em>(not currently used in UI widgets)</em></h2>
\t\t<div style=\"position: relative; width: 96%; height: 200px; padding:1% 4%; overflow:hidden;\" class=\"fakewindowcontain\">
\t\t\t<p>Lorem ipsum dolor sit amet,  Nulla nec tortor. Donec id elit quis purus consectetur consequat. </p><p>Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. Aliquam ante. Suspendisse scelerisque dui nec velit. Duis augue augue, gravida euismod, vulputate ac, facilisis id, sem. Morbi in orci. </p><p>Nulla purus lacus, pulvinar vel, malesuada ac, mattis nec, quam. Nam molestie scelerisque quam. Nullam feugiat cursus lacus.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero risus, commodo vitae, pharetra mollis, posuere eu, pede. Nulla nec tortor. Donec id elit quis purus consectetur consequat. </p><p>Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. Aliquam ante. Suspendisse scelerisque dui nec velit. Duis augue augue, gravida euismod, vulputate ac, facilisis id, sem. Morbi in orci. Nulla purus lacus, pulvinar vel, malesuada ac, mattis nec, quam. Nam molestie scelerisque quam. </p><p>Nullam feugiat cursus lacus.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero risus, commodo vitae, pharetra mollis, posuere eu, pede. Nulla nec tortor. Donec id elit quis purus consectetur consequat. Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. Aliquam ante. </p><p>Suspendisse scelerisque dui nec velit. Duis augue augue, gravida euismod, vulputate ac, facilisis id, sem. Morbi in orci. Nulla purus lacus, pulvinar vel, malesuada ac, mattis nec, quam. Nam molestie scelerisque quam. Nullam feugiat cursus lacus.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero risus, commodo vitae, pharetra mollis, posuere eu, pede. Nulla nec tortor. Donec id elit quis purus consectetur consequat. Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. </p>

\t\t\t<!-- ui-dialog -->
\t\t\t<div class=\"ui-overlay\"><div class=\"ui-widget-overlay\"></div><div class=\"ui-widget-shadow ui-corner-all\" style=\"width: 302px; height: 152px; position: absolute; left: 50px; top: 30px;\"></div></div>
\t\t\t<div style=\"position: absolute; width: 280px; height: 130px;left: 50px; top: 30px; padding: 10px;\" class=\"ui-widget ui-widget-content ui-corner-all\">
\t\t\t\t<div class=\"ui-dialog-content ui-widget-content\" style=\"background: none; border: 0;\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t\t<!-- ui-dialog -->
\t\t<div id=\"dialog\" title=\"Dialog Title\">
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t</div>


\t\t<h2 class=\"demoHeaders\">Framework Icons (content color preview)</h2>
\t\t<ul id=\"icons\" class=\"ui-widget ui-helper-clearfix\">

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-n\"><span class=\"ui-icon ui-icon-carat-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-ne\"><span class=\"ui-icon ui-icon-carat-1-ne\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-e\"><span class=\"ui-icon ui-icon-carat-1-e\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-se\"><span class=\"ui-icon ui-icon-carat-1-se\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-s\"><span class=\"ui-icon ui-icon-carat-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-sw\"><span class=\"ui-icon ui-icon-carat-1-sw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-w\"><span class=\"ui-icon ui-icon-carat-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-1-nw\"><span class=\"ui-icon ui-icon-carat-1-nw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-2-n-s\"><span class=\"ui-icon ui-icon-carat-2-n-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-carat-2-e-w\"><span class=\"ui-icon ui-icon-carat-2-e-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-n\"><span class=\"ui-icon ui-icon-triangle-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-ne\"><span class=\"ui-icon ui-icon-triangle-1-ne\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-e\"><span class=\"ui-icon ui-icon-triangle-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-se\"><span class=\"ui-icon ui-icon-triangle-1-se\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-s\"><span class=\"ui-icon ui-icon-triangle-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-sw\"><span class=\"ui-icon ui-icon-triangle-1-sw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-w\"><span class=\"ui-icon ui-icon-triangle-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-1-nw\"><span class=\"ui-icon ui-icon-triangle-1-nw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-2-n-s\"><span class=\"ui-icon ui-icon-triangle-2-n-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-triangle-2-e-w\"><span class=\"ui-icon ui-icon-triangle-2-e-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-n\"><span class=\"ui-icon ui-icon-arrow-1-n\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-ne\"><span class=\"ui-icon ui-icon-arrow-1-ne\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-e\"><span class=\"ui-icon ui-icon-arrow-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-se\"><span class=\"ui-icon ui-icon-arrow-1-se\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-s\"><span class=\"ui-icon ui-icon-arrow-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-sw\"><span class=\"ui-icon ui-icon-arrow-1-sw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-w\"><span class=\"ui-icon ui-icon-arrow-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-1-nw\"><span class=\"ui-icon ui-icon-arrow-1-nw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-2-n-s\"><span class=\"ui-icon ui-icon-arrow-2-n-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-2-ne-sw\"><span class=\"ui-icon ui-icon-arrow-2-ne-sw\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-2-e-w\"><span class=\"ui-icon ui-icon-arrow-2-e-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-2-se-nw\"><span class=\"ui-icon ui-icon-arrow-2-se-nw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowstop-1-n\"><span class=\"ui-icon ui-icon-arrowstop-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowstop-1-e\"><span class=\"ui-icon ui-icon-arrowstop-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowstop-1-s\"><span class=\"ui-icon ui-icon-arrowstop-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowstop-1-w\"><span class=\"ui-icon ui-icon-arrowstop-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-n\"><span class=\"ui-icon ui-icon-arrowthick-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-ne\"><span class=\"ui-icon ui-icon-arrowthick-1-ne\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-e\"><span class=\"ui-icon ui-icon-arrowthick-1-e\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-se\"><span class=\"ui-icon ui-icon-arrowthick-1-se\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-s\"><span class=\"ui-icon ui-icon-arrowthick-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-sw\"><span class=\"ui-icon ui-icon-arrowthick-1-sw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-w\"><span class=\"ui-icon ui-icon-arrowthick-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-1-nw\"><span class=\"ui-icon ui-icon-arrowthick-1-nw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-2-n-s\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-2-ne-sw\"><span class=\"ui-icon ui-icon-arrowthick-2-ne-sw\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-2-e-w\"><span class=\"ui-icon ui-icon-arrowthick-2-e-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthick-2-se-nw\"><span class=\"ui-icon ui-icon-arrowthick-2-se-nw\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthickstop-1-n\"><span class=\"ui-icon ui-icon-arrowthickstop-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthickstop-1-e\"><span class=\"ui-icon ui-icon-arrowthickstop-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthickstop-1-s\"><span class=\"ui-icon ui-icon-arrowthickstop-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowthickstop-1-w\"><span class=\"ui-icon ui-icon-arrowthickstop-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturnthick-1-w\"><span class=\"ui-icon ui-icon-arrowreturnthick-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturnthick-1-n\"><span class=\"ui-icon ui-icon-arrowreturnthick-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturnthick-1-e\"><span class=\"ui-icon ui-icon-arrowreturnthick-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturnthick-1-s\"><span class=\"ui-icon ui-icon-arrowreturnthick-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturn-1-w\"><span class=\"ui-icon ui-icon-arrowreturn-1-w\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturn-1-n\"><span class=\"ui-icon ui-icon-arrowreturn-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturn-1-e\"><span class=\"ui-icon ui-icon-arrowreturn-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowreturn-1-s\"><span class=\"ui-icon ui-icon-arrowreturn-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowrefresh-1-w\"><span class=\"ui-icon ui-icon-arrowrefresh-1-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowrefresh-1-n\"><span class=\"ui-icon ui-icon-arrowrefresh-1-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowrefresh-1-e\"><span class=\"ui-icon ui-icon-arrowrefresh-1-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrowrefresh-1-s\"><span class=\"ui-icon ui-icon-arrowrefresh-1-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-4\"><span class=\"ui-icon ui-icon-arrow-4\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-arrow-4-diag\"><span class=\"ui-icon ui-icon-arrow-4-diag\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-extlink\"><span class=\"ui-icon ui-icon-extlink\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-newwin\"><span class=\"ui-icon ui-icon-newwin\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-refresh\"><span class=\"ui-icon ui-icon-refresh\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-shuffle\"><span class=\"ui-icon ui-icon-shuffle\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-transfer-e-w\"><span class=\"ui-icon ui-icon-transfer-e-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-transferthick-e-w\"><span class=\"ui-icon ui-icon-transferthick-e-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-folder-collapsed\"><span class=\"ui-icon ui-icon-folder-collapsed\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-folder-open\"><span class=\"ui-icon ui-icon-folder-open\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-document\"><span class=\"ui-icon ui-icon-document\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-document-b\"><span class=\"ui-icon ui-icon-document-b\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-note\"><span class=\"ui-icon ui-icon-note\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-mail-closed\"><span class=\"ui-icon ui-icon-mail-closed\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-mail-open\"><span class=\"ui-icon ui-icon-mail-open\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-suitcase\"><span class=\"ui-icon ui-icon-suitcase\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-comment\"><span class=\"ui-icon ui-icon-comment\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-person\"><span class=\"ui-icon ui-icon-person\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-print\"><span class=\"ui-icon ui-icon-print\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-trash\"><span class=\"ui-icon ui-icon-trash\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-locked\"><span class=\"ui-icon ui-icon-locked\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-unlocked\"><span class=\"ui-icon ui-icon-unlocked\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-bookmark\"><span class=\"ui-icon ui-icon-bookmark\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-tag\"><span class=\"ui-icon ui-icon-tag\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-home\"><span class=\"ui-icon ui-icon-home\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-flag\"><span class=\"ui-icon ui-icon-flag\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-calculator\"><span class=\"ui-icon ui-icon-calculator\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-cart\"><span class=\"ui-icon ui-icon-cart\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-pencil\"><span class=\"ui-icon ui-icon-pencil\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-clock\"><span class=\"ui-icon ui-icon-clock\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-disk\"><span class=\"ui-icon ui-icon-disk\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-calendar\"><span class=\"ui-icon ui-icon-calendar\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-zoomin\"><span class=\"ui-icon ui-icon-zoomin\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-zoomout\"><span class=\"ui-icon ui-icon-zoomout\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-search\"><span class=\"ui-icon ui-icon-search\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-wrench\"><span class=\"ui-icon ui-icon-wrench\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-gear\"><span class=\"ui-icon ui-icon-gear\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-heart\"><span class=\"ui-icon ui-icon-heart\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-star\"><span class=\"ui-icon ui-icon-star\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-link\"><span class=\"ui-icon ui-icon-link\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-cancel\"><span class=\"ui-icon ui-icon-cancel\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-plus\"><span class=\"ui-icon ui-icon-plus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-plusthick\"><span class=\"ui-icon ui-icon-plusthick\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-minus\"><span class=\"ui-icon ui-icon-minus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-minusthick\"><span class=\"ui-icon ui-icon-minusthick\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-close\"><span class=\"ui-icon ui-icon-close\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-closethick\"><span class=\"ui-icon ui-icon-closethick\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-key\"><span class=\"ui-icon ui-icon-key\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-lightbulb\"><span class=\"ui-icon ui-icon-lightbulb\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-scissors\"><span class=\"ui-icon ui-icon-scissors\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-clipboard\"><span class=\"ui-icon ui-icon-clipboard\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-copy\"><span class=\"ui-icon ui-icon-copy\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-contact\"><span class=\"ui-icon ui-icon-contact\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-image\"><span class=\"ui-icon ui-icon-image\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-video\"><span class=\"ui-icon ui-icon-video\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-script\"><span class=\"ui-icon ui-icon-script\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-alert\"><span class=\"ui-icon ui-icon-alert\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-info\"><span class=\"ui-icon ui-icon-info\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-notice\"><span class=\"ui-icon ui-icon-notice\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-help\"><span class=\"ui-icon ui-icon-help\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-check\"><span class=\"ui-icon ui-icon-check\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-bullet\"><span class=\"ui-icon ui-icon-bullet\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-radio-off\"><span class=\"ui-icon ui-icon-radio-off\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-radio-on\"><span class=\"ui-icon ui-icon-radio-on\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-pin-w\"><span class=\"ui-icon ui-icon-pin-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-pin-s\"><span class=\"ui-icon ui-icon-pin-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-play\"><span class=\"ui-icon ui-icon-play\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-pause\"><span class=\"ui-icon ui-icon-pause\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-seek-next\"><span class=\"ui-icon ui-icon-seek-next\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-seek-prev\"><span class=\"ui-icon ui-icon-seek-prev\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-seek-end\"><span class=\"ui-icon ui-icon-seek-end\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-seek-first\"><span class=\"ui-icon ui-icon-seek-first\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-stop\"><span class=\"ui-icon ui-icon-stop\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-eject\"><span class=\"ui-icon ui-icon-eject\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-volume-off\"><span class=\"ui-icon ui-icon-volume-off\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-volume-on\"><span class=\"ui-icon ui-icon-volume-on\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-power\"><span class=\"ui-icon ui-icon-power\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-signal-diag\"><span class=\"ui-icon ui-icon-signal-diag\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-signal\"><span class=\"ui-icon ui-icon-signal\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-battery-0\"><span class=\"ui-icon ui-icon-battery-0\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-battery-1\"><span class=\"ui-icon ui-icon-battery-1\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-battery-2\"><span class=\"ui-icon ui-icon-battery-2\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-battery-3\"><span class=\"ui-icon ui-icon-battery-3\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-plus\"><span class=\"ui-icon ui-icon-circle-plus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-minus\"><span class=\"ui-icon ui-icon-circle-minus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-close\"><span class=\"ui-icon ui-icon-circle-close\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-triangle-e\"><span class=\"ui-icon ui-icon-circle-triangle-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-triangle-s\"><span class=\"ui-icon ui-icon-circle-triangle-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-triangle-w\"><span class=\"ui-icon ui-icon-circle-triangle-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-triangle-n\"><span class=\"ui-icon ui-icon-circle-triangle-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-arrow-e\"><span class=\"ui-icon ui-icon-circle-arrow-e\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-arrow-s\"><span class=\"ui-icon ui-icon-circle-arrow-s\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-arrow-w\"><span class=\"ui-icon ui-icon-circle-arrow-w\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-arrow-n\"><span class=\"ui-icon ui-icon-circle-arrow-n\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-zoomin\"><span class=\"ui-icon ui-icon-circle-zoomin\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-zoomout\"><span class=\"ui-icon ui-icon-circle-zoomout\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circle-check\"><span class=\"ui-icon ui-icon-circle-check\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circlesmall-plus\"><span class=\"ui-icon ui-icon-circlesmall-plus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circlesmall-minus\"><span class=\"ui-icon ui-icon-circlesmall-minus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-circlesmall-close\"><span class=\"ui-icon ui-icon-circlesmall-close\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-squaresmall-plus\"><span class=\"ui-icon ui-icon-squaresmall-plus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-squaresmall-minus\"><span class=\"ui-icon ui-icon-squaresmall-minus\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-squaresmall-close\"><span class=\"ui-icon ui-icon-squaresmall-close\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-grip-dotted-vertical\"><span class=\"ui-icon ui-icon-grip-dotted-vertical\"></span></li>

\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-grip-dotted-horizontal\"><span class=\"ui-icon ui-icon-grip-dotted-horizontal\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-grip-solid-vertical\"><span class=\"ui-icon ui-icon-grip-solid-vertical\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-grip-solid-horizontal\"><span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-gripsmall-diagonal-se\"><span class=\"ui-icon ui-icon-gripsmall-diagonal-se\"></span></li>
\t\t<li class=\"ui-state-default ui-corner-all\" title=\".ui-icon-grip-diagonal-se\"><span class=\"ui-icon ui-icon-grip-diagonal-se\"></span></li>
\t\t</ul>


\t\t<!-- Slider -->
\t\t<h2 class=\"demoHeaders\">Slider</h2>
\t\t<div id=\"slider\"></div>

\t\t<!-- Datepicker -->
\t\t<h2 class=\"demoHeaders\">Datepicker</h2>
\t\t<div id=\"datepicker\"></div>

\t\t<!-- Progressbar -->
\t\t<h2 class=\"demoHeaders\">Progressbar</h2>
\t\t<div id=\"progressbar\"></div>

\t\t<!-- Highlight / Error -->
\t\t<h2 class=\"demoHeaders\">Highlight / Error</h2>
\t\t<div class=\"ui-widget\">
\t\t\t<div class=\"ui-state-highlight ui-corner-all\" style=\"margin-top: 20px; padding: 0 .7em;\">
\t\t\t\t<p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
\t\t\t\t<strong>Hey!</strong> Sample ui-state-highlight style.</p>
\t\t\t</div>
\t\t</div>
\t\t<br/>
\t\t<div class=\"ui-widget\">
\t\t\t<div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\">
\t\t\t\t<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>
\t\t\t\t<strong>Alert:</strong> Sample ui-state-error style.</p>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "UvmediaCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 71,  113 => 70,  99 => 59,  96 => 58,  39 => 4,  36 => 3,  29 => 2,);
    }
}
