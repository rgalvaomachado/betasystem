<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Betasystem - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link href="css/steps.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-11">
            <form id="regForm" action="step2.php" method="post">
                <h1 id="register">Solicitação</h1>
                <div class="all-steps">
                    <span class="step"><i class="fa fa-user" style="opacity: 0.2"></i></span>
                    <span class="step"><i class="fa fa-list-alt" style="opacity: 1"></i></span>
                    <span class="step"><i class="fa fa-check" style="opacity: 0.2"></i></span>
                </div>
                <div class="tab">
                    <label>Text Input</label>
                    <input class="form-control" placeholder="Placeholder">
                    <label>Password</label>
                    <input type="password" class="form-control">
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
                    <label>Selects</label>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <label>Multiple Selects</label>
                    <select multiple class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <label>Text area</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit">Orçamento</button>
            </form>
        </div>
    </div>
</div>
</body>

<?php require_once('./footerBar.php') ?>