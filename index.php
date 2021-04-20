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
            <form id="regForm" action="step1.php" method="post" >
                <h1 id="register">Solicitação</h1>
                <div class="all-steps">
                    <span class="step"><i class="fa fa-user" style="opacity: 1"></i></span>
                    <span class="step"><i class="fa fa-list-alt" style="opacity: 0.2"></i></span>
                    <span class="step"><i class="fa fa-check" style="opacity: 0.2"></i></span>
                </div>
                <div class="tab">
                    <h3>Qual é seu nome?</h3>
                    <p> <input placeholder="Name..." name="nome"></p>
                    <h3>Qual é seu email?</h3>
                    <p> <input placeholder="Email..." name="email"></p>
                </div>
                <button type="submit">Atendimento</button>
            </form>
        </div>
    </div>
</div>
</body>

<?php require_once('./footerBar.php') ?>