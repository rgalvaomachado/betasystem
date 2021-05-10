
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-11">
            <form action="step1.php" method="post" >
                <h1>Solicitação</h1>
                <div class="all-steps">
                    <span class="step"><i class="fa fa-user" style="opacity: 1"></i></span>
                    <span class="step"><i class="fa fa-list-alt" style="opacity: 0.2"></i></span>
                    <span class="step"><i class="fa fa-check" style="opacity: 0.2"></i></span>
                </div>
                <input class='entrada' placeholder="Qual é seu nome?" name="nome" required>
                <input class='entrada' type="email" placeholder="Qual é seu email?" name="email" required>
                <input class='entrada' type="text" placeholder="Qual é seu telefone?" name="telefone" id="telefone" required>
                <script type="text/javascript">
                    $("#telefone").mask("(00) 00000-0000");
                </script>
                </script>
                <button class='botao' type="submit">Atendimento</button>
            </form>
        </div>
    </div>
</div>
</body>

<?php require_once('./footerBar.php') ?>