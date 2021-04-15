<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BETASYSTEM</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
    <body>
		<div class="container panel panel-container col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<div class="panel panel-primary" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
						<div class="panel-heading">Primeira Seção
							<span class="pull-right"><em class="fa fa-toggle-down"></em></span>
						</div>
						<div class="collapse" id="collapse1">
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label>Text Input</label>
										<input class="form-control" placeholder="Placeholder">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control">
									</div>
									<div class="form-group">
										<label>Checkboxes</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 1
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 2
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Radio Buttons</label>
										<div class="radio">
											<label>
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio Button 1
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Button 2
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Selects</label>
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
										</select>
									</div>
									<div class="form-group">
										<label>Multiple Selects</label>
										<select multiple class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
										</select>
									</div>
									<div class="form-group">
										<label>Text area</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Submit Button</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-md-offset-0">
					<div class="panel panel-primary" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse1">
						<div class="panel-heading">Segunda Seção
							<span class="pull-right"><em class="fa fa-toggle-down"></em></span>
						</div>
						<div class="collapse" id="collapse2">
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label>Text Input</label>
										<input class="form-control" placeholder="Placeholder">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control">
									</div>
									<div class="form-group">
										<label>Checkboxes</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 1
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Checkbox 2
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Radio Buttons</label>
										<div class="radio">
											<label>
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio Button 1
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Button 2
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Selects</label>
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
										</select>
									</div>
									<div class="form-group">
										<label>Multiple Selects</label>
										<select multiple class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
										</select>
									</div>
									<div class="form-group">
										<label>Text area</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Submit Button</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
        <div class="text-center">
			<a href="login.php" class="btn btn-primary">Login</a></fieldset>
		</div>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom.js"></script>
    </body>
    <?php require_once('./footerBar.php') ?>
</html>