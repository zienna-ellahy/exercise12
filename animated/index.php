<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pinwheel Animation</title>
	<link rel="stylesheet" href="../css/bootstrap.css">

	<style type="text/css">
      .background:{fill:#e3f1ff;}

      /* Pinwheel */
      .pinwheel {
        animation: spin 1s linear infinite;
        transform-origin: 50% 50% 0;
      }
      @keyframes spin { 0% {transform:rotate(360deg); } }

      
    </style>

</head>
<body class="bg-faded">
	
	<main class="container py-4">
		<?php include('../images/svg-pinwheel.php'); ?>
	</main>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


</body>
</html>