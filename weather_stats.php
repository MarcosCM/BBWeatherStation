<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Weather Meter</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <!-- Google Visualization API -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<!-- JQuery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript">
            // Load the Visualization API and the piechart package.
            google.load('visualization', '1', {'packages':['corechart']});
            $(document).on('ready', function(){
                var wcselected = null, ajax_timer = null;
                $("a[id^='wcselect']").click(function(){
                    var selected = $(this).attr('id').replace('wcselect', '');
                    wcselected = parseInt(selected);
                    trigger_real_time_upd(wcselected, ajax_timer);
                });
            });
            
            function trigger_real_time_upd(wcselected, ajax_timer){
                if (ajax_timer != null) clearTimeout(ajax_timer);
            }
            
            function draw_charts(charts_arr){
                
            }
        </script>
    </head>
    <body>
        <!-- Bootstrap JS is required to be loaded in the body -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <p class="lead">Please, select a Weather Cape</p>
                    <div class="dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Select a WC <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a id="wcselect1">Weather Cape #1</a></li>
                            <li><a id="wcselect2">Weather Cape #2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
