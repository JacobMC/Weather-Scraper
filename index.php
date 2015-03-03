<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<title>Weather Forecast</title>
	<style>
		html, body {
			height:100%;
		}

		.container {
			background-image:url('background.jpg');
			background-size:cover;
			background-position: center;
			width:100%;
			height:100%;
			padding-top:100px;
		}

		.center {
			text-align: center;
		}

		p {
			padding: 15px 0;
		}

		.button {
			margin-top: 20px;
		}

		.alert {
			margin-top:20px;
			display:none;
		}

	</style>	

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	<div class="container">

		<div class="row">

			<div class="col-md-6 col-md-offset-3 center">

				<h1>Weather Forecast</h1>

				<p class="lead">Enter a major city below to check the local weather!</p>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" />
					</div>


					<input type="submit" id="weather" class="btn btn-success btn-lg button" value="Find Weather" />

				</form>

				<div id="success" class="alert alert-success">Success!</div>

				<div id="fail" class="alert alert-danger">Could not find any data for that city. Please try again.</div>

				<div id="noCity" class="alert alert-danger">Please enter a city.</div>

			</div>



		</div>


	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>

    	$("#weather").click(function(event) {

    		event.preventDefault();

    		$(".alert").hide();

    		if ($("#city").val()!="") {

    			$.get("scraper.php?city="+$("#city").val(), function(data) {

    				if (data=="") {

    					$("#fail").fadeIn();

    				} else {

    					$("#success").html(data).fadeIn();

    				};

    			});

    		} else {

    			$("#noCity").fadeIn();

    		};

    	});


    </script>   

</body>
</html>
