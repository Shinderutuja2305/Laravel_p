<!DOCTYPE html>
<html>
<head>
	<title>laravel pgsql connection</title>
</head>
<body>
	<div>
		<?php
		if(DB::connection()->getPdo()){
			echo "successfully connected".DB::connection()->getDatabaseName();
		}
		?>
	</div>
</body>
</html>