<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->url->get('jqplot/css/jquery.jqplot.css'); ?>">
		<script type="text/javascript" src="<?php echo $this->url->get('jqplot/js/excanvas.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->url->get('jqplot/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->url->get('jqplot/js/jquery.jqplot.min.js'); ?>"></script>
	</head>
	<body>
		<div id="chartdiv" class="jqplot-target" style="height: 300px; width: 500px; position: relative;"></div>
		<script>
			$(document).ready(function(){
			    $.jqplot ('chartdiv', <?php echo $locationsModerators; ?>);
				
			});
		</script>
	</body>
</html>