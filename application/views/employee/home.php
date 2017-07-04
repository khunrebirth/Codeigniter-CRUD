<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- CSS Custom -->
<style>
	table {
	    border-collapse: collapse;
	    width: 100%;
	    margin-top: 6px;
	}

	th, td {
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
	    background-color: #4CAF50;
	    color: white;
	}
	.w3-dd {
		background: #eee;
	}
</style>
<body>

	<div class="jumbotron">
	  <div class="container">
	    <h1>Codeigniter 3 : CRUD Example</h1>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga hic voluptates temporibus deserunt minus distinctio, rem! Incidunt dolore alias animi minus assumenda voluptas, temporibus beatae repellat labore dolorem suscipit fugit.</p>
	  </div>
		
	</div>
	<?= anchor(
				'employee/add_form', 
				'<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> ADD', 
				'class="btn btn-info"'
				); ?>
	<table>
		<tr>
			<th>ID</th>
			<th>CODE</th>
			<th>FIRSTNAME</th>
			<th>LASTNAME</th>
			<th>POSITION</th>
			<th>DEPARTMENT</th>
			<th>MENU</th>
		</tr>
		
		<!-- Show Data -->
		<?php foreach ($employee as $e) {
				echo "<tr>
						<td>{$e->id}</td>
						<td>{$e->code}</td>
						<td>{$e->firstname}</td>
						<td>{$e->lastname}</td>
						<td>{$e->position}</td>
						<td>{$e->department}</td>
						<td>" . anchor("employee/view/{$e->id}", ' VIEW ', 'class="btn btn-info"') . " |
							" . anchor("employee/update_form/{$e->id}", 'EDIT', 'class="btn btn-warning"') . " |
							" . anchor("employee/delete_form/{$e->id}", 'DELETE', 'class="btn btn-danger"') . "
						</td>
					</tr>";
		} ?>

	</table>

</body>
</html>