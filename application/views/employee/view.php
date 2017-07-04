<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<!-- CSS LINK -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
		
	<!-- Show Data -->
	<div class="container">
		<h2>View Employee</h2><br>
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading"><b><?php echo "{$employee->firstname}" ." ". "{$employee->lastname}" ?></b></div>
					<div class="panel-body">
						<?php echo "ID: {$employee->id}<br>
									CODE: {$employee->code}<br>
									FIRSTNAME: {$employee->firstname}<br>
									LASTNAME: {$employee->lastname}<br>
									POSITION: {$employee->position}<br>
									DEPARTMENT: {$employee->department}<br>" ?>
					</div>
				</div>
			</div>
	</div>

	<hr>

</body>
</html>