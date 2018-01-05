<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8" />
      <title>Color Hints</title>
      <link rel="stylesheet" type="text/css" href="css/styles.css">
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
			<div class="container">
				<div class="row">

					<div class="col-md-6 left-row">
						<div class="form-group navigations">
							<h4> Enter fruit name:</h4>
							<input type="text" class="form-control" id="fruit" onKeyUp="getFruits()"/>
							<button class="btn btn-default" onclick="colorize()">Toggle color</button>
							<button class="btn btn-default" onclick="createFruit()">Add fruit</button>
						</div>
					</div>

					<div class="col-md-5 right-row">
						<ul class="list-group fruit-list">
							<h4 class="list-group-item-heading">Probably looking for this?</h4>
							<div class="frame" id="fruits-content">
								<!-- Content is generated dynamically -->
							</div>
						</ul>
					</div>

				</div>
			</div>
		</body>

		<script src="js/ajax.js"></script>
		<script src="js/utilities.js"></script>
</html>
