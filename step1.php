<?php
    // require_once($_SERVER['DOCUMENT_ROOT'].'/config/db.php');

    // $email = $_POST['email'];
    // $nome = $_POST['nome'];

    // $queryUsers = $db->prepare("SELECT * FROM usuarios WHERE email='$email'");
    // $queryUsers->execute();
    // $resultUsers = $queryUsers->fetchAll(PDO::FETCH_ASSOC);

    // if(!$resultUsers){
    //     $data = [
    //         ':nome' => $email,
    //         ':email' => $nome,
    //         ':grupo' => 1,
    //     ];
    //     $insert = $db->prepare('INSERT INTO usuarios (nome,email,grupo) VALUES(:nome,:email,:grupo)');
    //     $insert->execute($data);
    // }

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
                <h1 id="register">Solicitação de Treinamento</h1>
                <div class="all-steps">
                    <span class="step"><i class="fa fa-user" style="opacity: 0.2"></i></span>
                    <span class="step"><i class="fa fa-list-alt" style="opacity: 1"></i></span>
                    <span class="step"><i class="fa fa-check" style="opacity: 0.2"></i></span>
                </div>
                <table> 
                    <?php for ($i=0;$i<2;$i++){?>    
                        <td>
                            <div class="itens"> 
                                <table style="width:100%">
                                    <tr>
                                        <th><h4>Selecionar</h4></th>
                                        <th><h4>Imagem</h4></th>
                                        <th><h4>Dados</h4></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class='check-produto' type="checkbox" value="">
                                        </td>
                                        <td>
                                            <div class='imagem-produto'>
                                                <!-- <img class="itens" src="imagem.jpg" alt="Minha Figura"> -->
                                            </div>
                                        </td>
                                        <td>
                                            <input class='entrada-produto' type="number" class="form-control" placeholder="Altura">
                                            <input class='entrada-produto' type="number" class="form-control" placeholder="Comprimento">
                                            <select class='entrada-produto' type="number" class="form-control">
                                                <option> Marrom </option>
                                                <option> Branco </option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>  
                            </div>   
                        </td> 
                    <?php } ?>
                </table>
                <button class='botao' type="submit">Orçamento</button class='botao'>
            </form>
        </div>
    </div>
</div>
</body>

<?php require_once('./footerBar.php') ?>