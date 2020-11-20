
<!DOCTYPE html>
<html lang="es">
    <head>

        <title> SmartAdmin </title>
        <?php include_once './inc2/Estilos.php'; ?>
        <style>
            .tree li.parent_li>span:hover {
                background-color: #1f8c46;
                border: 1px solid #1f8c46;
                color: #fff;
            }
        </style>
    </head>

    <!--

    TABLE OF CONTENTS.
    
    Use search to find needed section.
    
    ===================================================================
    
    |  01. #CSS Links                |  all CSS links and file paths  |
    |  02. #FAVICONS                 |  Favicon links and file paths  |
    |  03. #GOOGLE FONT              |  Google font link              |
    |  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
    |  05. #BODY                     |  body tag                      |
    |  06. #HEADER                   |  header tag                    |
    |  07. #PROJECTS                 |  project lists                 |
    |  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
    |  09. #MOBILE                   |  mobile view dropdown          |
    |  10. #SEARCH                   |  search field                  |
    |  11. #NAVIGATION               |  left panel & navigation       |
    |  12. #RIGHT PANEL              |  right panel userlist          |
    |  13. #MAIN PANEL               |  main panel                    |
    |  14. #MAIN CONTENT             |  content holder                |
    |  15. #PAGE FOOTER              |  page footer                   |
    |  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
    |  17. #PLUGINS                  |  all scripts and plugins       |
    
    ===================================================================
    
    -->

    <!-- #BODY -->
    <!-- Possible Classes

            * 'smart-style-{SKIN#}'
            * 'smart-rtl'         - Switch theme mode to RTL
            * 'menu-on-top'       - Switch to top navigation (no DOM change required)
            * 'no-menu'			  - Hides the menu completely
            * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
            * 'fixed-header'      - Fixes the header
            * 'fixed-navigation'  - Fixes the main menu
            * 'fixed-ribbon'      - Fixes breadcrumb
            * 'fixed-page-footer' - Fixes footer
            * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
    -->
    <body class="bodiver" style="background: #007788;height: 97vh;">

        <!-- MAIN PANEL -->
        <div >

            <div id="content" style="    margin-bottom: 20px;">
                <!-- widget grid -->
                <section id="widget-grid" class="">

                    <div class="row">
                        <div class="row">
                            <!-- widget div-->
                            <article class="col-sm-12 col-md-12 col-lg-12" style="text-align: center">
                                <h1>Versiculos Favoritos</h1>
                            </article>

                            <article class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group col-lg-12">
                                    <div class="panel-group smart-accordion-default" id="accordion-2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Libro X Capitulo X Versiculo X</a></h4>
                                            </div>
                                            <div id="collapseOne-1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        <small id="Comen">Sin Comentario</small>
                                                        <textarea class="form-control" id="txtcomen" style="display: none;"></textarea>
                                                    </blockquote>
                                                    <button href="javascript:void(0);" class="btn btn-labeled btn-warning" style="align-items: center;justify-content: center;height: 20px;padding-top: 0px;"> Desmarcar</button>
                                                    <button onclick="$('#Comen').css('display', 'none');$('#txtcomen').css('display', 'block');" class="btn btn-labeled btn-primary" style="align-items: center;justify-content: center;height: 20px;padding-top: 0px;"> Comentario</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Libro X Capitulo X Versiculo X </a></h4>
                                            </div>
                                            <div id="collapseTwo-1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        <small>Libro X Capitulo X Versiculo X </small>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Libro X Capitulo X Versiculo X </a></h4>
                                            </div>
                                            <div id="collapseThree-1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        <small>Libro X Capitulo X Versiculo X</small>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseFor-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Libro X Capitulo X Versiculo X</a></h4>
                                            </div>
                                            <div id="collapseFor-1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        <small>Libro X Capitulo X Versiculo X</small>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>

                    </div>

                    <!-- END ROW -->

                </section>
                <!-- end widget grid -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <div id="shortcut">
            <ul>
                <li>
                    <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
                </li>
                <li>
                    <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
                </li>
                <li>
                    <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
                </li>
                <li>
                    <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
                </li>
                <li>
                    <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
                </li>
                <li>
                    <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
                </li>
            </ul>
        </div>
        <!-- END SHORTCUT AREA -->

        <!--================================================== -->

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
                                                        if (!window.jQuery) {
                                                            document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
                                                        }
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
                                                        if (!window.jQuery.ui) {
                                                            document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
                                                        }
        </script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="js/app.config.js"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

        <!-- BOOTSTRAP JS -->
        <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="js/notification/SmartNotification.min.js"></script>

        <!-- JARVIS WIDGETS -->
        <script src="js/smartwidgets/jarvis.widget.min.js"></script>

        <!-- EASY PIE CHARTS -->
        <script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

        <!-- SPARKLINES -->
        <script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

        <!-- JQUERY VALIDATE -->
        <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="js/plugin/select2/select2.min.js"></script>

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

        <!-- browser msie issue fix -->
        <script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

        <!-- FastClick: For mobile devices -->
        <script src="js/plugin/fastclick/fastclick.min.js"></script>

        <!--[if IE 8]>

        <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

        <![endif]-->

        <!-- Demo purpose only -->
        <script src="js/demo.min.js"></script>

        <!-- MAIN APP JS FILE -->
        <script src="js/app.min.js"></script>

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="js/speech/voicecommand.min.js"></script>

        <!-- SmartChat UI : plugin -->
        <script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
        <script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>

        <!-- PAGE RELATED PLUGIN(S) -->
        <script src="js/plugin/maxlength/bootstrap-maxlength.min.js"></script>
        <script src="js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="js/plugin/clockpicker/clockpicker.min.js"></script>
        <script src="js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js"></script>
        <script src="js/plugin/noUiSlider/jquery.nouislider.min.js"></script>
        <script src="js/plugin/ion-slider/ion.rangeSlider.min.js"></script>
        <script src="js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>		
        <script src="js/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="js/plugin/knob/jquery.knob.min.js"></script>
        <script src="js/plugin/x-editable/moment.min.js"></script>
        <script src="js/plugin/x-editable/jquery.mockjax.min.js"></script>
        <script src="js/plugin/x-editable/x-editable.min.js"></script>
        <script src="js/plugin/typeahead/typeahead.min.js"></script>
        <script src="js/plugin/typeahead/typeaheadjs.min.js"></script>
        <script type="text/javascript">

                                                        // DO NOT REMOVE : GLOBAL FUNCTIONS!

                                                        $(document).ready(function () {

                                                            pageSetUp();

                                                            // PAGE RELATED SCRIPTS

                                                            $('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
                                                            $('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function (e) {
                                                                var children = $(this).parent('li.parent_li').find(' > ul > li');
                                                                if (children.is(':visible')) {
                                                                    children.hide('fast');
                                                                    $(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
                                                                } else {
                                                                    children.show('fast');
                                                                    $(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
                                                                }
                                                                e.stopPropagation();
                                                            });

                                                        });

        </script>

        <!-- Your GOOGLE ANALYTICS CODE Below -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </body>

</html>