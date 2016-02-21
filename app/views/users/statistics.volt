<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{url('jqplot/css/jquery.jqplot.css')}}">
		<script type="text/javascript" src="{{url('jqplot/js/excanvas.js')}}"></script>
		<script type="text/javascript" src="{{url('jqplot/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{url('jqplot/js/jquery.jqplot.min.js')}}"></script>
	</head>
	<body>
		<div id="chartdiv" class="jqplot-target" style="height: 300px; width: 500px; position: relative;"></div>
		<script>
			$(document).ready(function(){
			    $.jqplot ('chartdiv', {{locationsModerators}});
			});
		</script>
	</body>
</html>