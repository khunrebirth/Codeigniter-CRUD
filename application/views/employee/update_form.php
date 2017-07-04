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
		<h2>Update Employee</h2>	  	
	  	<!-- FORM -->
	  	<?=form_open('employee/update_do', 'class="form-horizontal"') ?>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="">CODE:</label>
		    	<div class="col-sm-10">
		    		<input type="hidden" name="txt_id" placeholder="CODE" value="<?=$employee->id?>" required="">
		    		<input type="text" class="form-control" name="txt_code" placeholder="CODE" value="<?=$employee->code?>" required="">
		    	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="">FIRSTNAME:</label>
		    	<div class="col-sm-10">
		    		<input type="text" class="form-control" name="txt_firstname" placeholder="FIRSTNAME" value="<?=$employee->firstname?>" required="">
		    	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="">LASTNAME:</label>
		    	<div class="col-sm-10">
		    		<input type="text" class="form-control" name="txt_lastname" placeholder="LASTNAME" value="<?=$employee->lastname?>" required="">
		    	</div>
		    </div>

		    <?php
				
				// Set Selected For Position
				$programmer 	= '';
				$system_analyst = '';
				$admin			= '';

				switch($employee->position){

					// Case Programmer
					case 'Programmer':
						$programmer 	= 'selected';
						break;

					// Case System Analyst
					case 'System Analyst':
						$system_analyst = 'selected';
						break;

					// Case Admin
					case 'Admin':
						$admin 			= 'selected';
						break;
				}
			?>
			<div class="form-group">
				<label class="control-label col-sm-2" for="sel1">POSITION:</label>
				<div class="col-sm-10">
		    		<select class="form-control" name="txt_position">
						<option value="Programmer" <?=$programmer?> >Programmer</option>
						<option value="System Analyst" <?=$system_analyst?> >System Analyst</option>
						<option value="Admin" <?=$admin?> >Admin</option>
					</select>
		    	</div>
			</div>
			
			<?php

				// Set Selected For Department
				$software_development 	= '';
				$it_support 			= '';

				switch($employee->department){

					// Case Software Development
					case 'Software Development':
						$software_development 	= 'selected';
						break;

					// Case IT Support
					case 'IT Support':
						$it_support 			= 'selected';
						break;
				}

			?>
			<div class="form-group">
				<label class="control-label col-sm-2" for="sel1">DEPARTMENT:</label>
				<div class="col-sm-10">
		    		<select class="form-control" name="txt_department">
						<option value="Software Development" <?=$software_development?> >Software Development</option>
						<option value="IT Support" <?=$it_support?> >IT Support</option>
					</select>
		    	</div>
			</div>
	    	<div class="form-group">        
	      		<div class="col-sm-offset-2 col-sm-10">
	        		<button type="submit" class="btn btn-primary">SAVE</button>
	        		<?=anchor("employee/", 'Cancel', 'class="btn btn-primary"') ?>
	      		</div>
	    	</div>
	 	<?=form_close();?> <!-- /close form -->
	</div>

	<hr>

</body>
</html>