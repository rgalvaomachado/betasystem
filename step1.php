<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/db.php');

    $email = $_POST['email'];
    $nome = $_POST['nome'];

    $queryUsers = $db->prepare("SELECT * FROM usuarios WHERE email='$email'");
    $queryUsers->execute();
    $resultUsers = $queryUsers->fetchAll(PDO::FETCH_ASSOC);

    if(!$resultUsers){
        $data = [
            ':nome' => $email,
            ':email' => $nome,
            ':grupo' => 1,
        ];
        $insert = $db->prepare('INSERT INTO usuarios (nome,email,grupo) VALUES(:nome,:email,:grupo)');
        $insert->execute($data);
    }

?>
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
                    <h3>Text input class='entrada' </h3>
                    <input class='entrada'  class="form-control" placeholder="Placeholder">
                    <h3>Password</h3>
                    <input class='entrada'  type="password" class="form-control">
                    <h3>Checkboxes</h3>
                    <div class="checkbox">
                        <h3>
                            <input class='entrada'  type="checkbox" value="">Checkbox 1
                        </h3>
                    </div>
                    <div class="checkbox">
                        <h3>
                            <input class='entrada'  type="checkbox" value="">Checkbox 2
                        </h3>
                    </div>
                    <h3>Radio button class='botao's</h3>
                    <div class="radio">
                        <h3>
                            <input class='entrada'  type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio button class='botao' 1
                        </h3>
                    </div>
                    <div class="radio">
                        <h3>
                            <input class='entrada'  type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio button class='botao' 2
                        </h3>
                    </div>
                    <h3>Selects</h3>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <h3>Multiple Selects</h3>
                    <select multiple class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <h3>Text area</h3>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button class='botao' type="submit">Orçamento</button class='botao'>
            </form>
        </div>
    </div>
</div>
</body>

<?php require_once('./footerBar.php') ?>