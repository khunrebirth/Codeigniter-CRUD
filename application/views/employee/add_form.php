<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<!-- CSS LINK -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>

	<div class="container">
		<h2>Add Employee</h2>

		<?php if(!empty($error)) { echo $error; } ?>
	  	
	  	<!-- FORM -->
	  	<?php echo form_open_multipart('employee/add_do', 'class="form-horizontal"') ?>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="">CODE:</label>
		    	<div class="col-sm-10">
		    		<input type="text" class="form-control" name="txt_code" placeholder="CODE" required="">
		    	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="">FIRSTNAME:</label>
		    	<div class="col-sm-10">
		    		<input type="text" class="form-control" name="txt_firstname" placeholder="FIRSTNAME" required="">
		    	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="">LASTNAME:</label>
		    	<div class="col-sm-10">
		    		<input type="text" class="form-control" name="txt_lastname" placeholder="LASTNAME" required="">
		    	</div>
		    </div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="sel1">POSITION:</label>
				<div class="col-sm-10">
		    		<select class="form-control" name="txt_position">
						<option value="Programmer">Programmer</option>
						<option value="System Analyst">System Analyst</option>
						<option value="Admin">Admin</option>
					</select>
		    	</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="sel1">DEPARTMENT:</label>
				<div class="col-sm-10">
		    		<select class="form-control" name="txt_department">
						<option value="Software Development">Software Development</option>
						<option value="IT Support">IT Support</option>
					</select>
		    	</div>
			</div>
	    	<div class="form-group">        
	      		<div class="col-sm-offset-2 col-sm-10">
	        		<button type="submit" class="btn btn-primary">SAVE</button>
	        		<?=anchor("employee/", 'Cancel', 'class="btn btn-primary"') ?>
	      		</div>
	    	</div>
	 	</form> <!-- /close form --> 	
	</div>

	<hr>

</body>
</html>