<html>
	<head>
		<meta id="viewport" name="viewport" content="width=device-width">
		
		<title>AnySpace | Get AnySpace For Any Event</title>
		<link rel="shortcut icon" href="images/icon.png">
		
		<!-- STYLE SHEETS -->
		<link rel="stylesheet" href="css/style.css"/>
		
		<!-- FONTS -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
		
		<!-- JAVASCRIPT SCRIPTS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
		<script src="js/script.js"></script>
		
		<!-- PLUGINS -->
		<link rel="stylesheet" type="text/css" href="plugins/datetimepicker-master/jquery.datetimepicker.css"/ >
		<script src="plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
	</head>
	<body>
		<div id="header">
			<div id="top">
				
			</div>
			<div id="video" class="purple-background">
				
			</div>
		</div>
		<div id="main">
			<div id="inner">
				<div id="logo">
					<h1>AnySpace</h1>
				</div>
				<div id="search">
					<form method="get">
						<input type="text" placeholder="Where At?"/>
						<input type="text" id="datetimepicker" placeholder="Date/Time"/>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script>
		jQuery('#datetimepicker').datetimepicker({
			minDate:'0',
			format:'m/d/y h:00 a',		//can change to "h:m" later, but will need add script to handle making it default to on the hour
			formatTime: 'h:00 a'		//can change to "h:m" later, but will need add script to handle making it default to on the hour
		});
	</script>
</html>