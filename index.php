<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
<body>
	<div class="continer">
		<div class="row">
			<div class="offset-md-1 col col-md-8">
				<?php
				require_once 'vendor/autoload.php';

				$file='README.md';
				if(!is_file($file)) exit('README.md not found!'); 
				$contents = file_get_contents($file);
				$Parsedown = new Parsedown();
				echo $Parsedown->text($contents);
				?>
			</div>
		</div>
		<div class="row">
			<div class="offset-md-1 col col-md-8">
				<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
				 <div class="card-header">Card</div>
				    <ul class=" list-group list-group-flush">
							<li class="bg-primary list-group-item">run</li>
							<li class="bg-primary list-group-item">test</li>							
							<li class="bg-successlist-group-item">debug</li>
						  </ul>
					<div class="card-body">
						Version 2.2
					</div>
					
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> 

