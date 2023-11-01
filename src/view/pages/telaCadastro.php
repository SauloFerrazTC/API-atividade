


<?php
session_start();
ob_start();

require_once ("../../controller/UserController.php");
use Controllers\UserController;

if ($_POST) {
    $objetivo=$_REQUEST["acao"];
    $conteudo = $_POST ["conteudo"];
    $data = [
        "conteudo" => $conteudo,
    ];
    $data = json_encode($data);  
    $post = new UserController ();
    $post -> createPost ($data, $objetivo);
    header("location:telaInicial.php");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Postagem</title>
    
    <link rel="stylesheet" href="../css/cadastro.css">

</head>
<body>

<div class="box">
    <form class = "card" method="post">
        <fieldset>
            <legend><b>Adicionar Postagem</b></legend>
            <br>

            <div class="InputBox">
                <textarea name="conteudo" id="conteudo" class="InputUser" required></textarea>
                <label for="conteudo" class="labelInput">Conteudo</label>
            </div>  
            <br><br>
            <input type="submit" name="SubmitPost" id="SubmitPost"><br><br>
            <a href="http://localhost:8000/src/view/pages/telaInicial.php" class="link" style="color: #7F40B0;">voltar</a>
        </fieldset>
    </form>
</div>

</body>
</html>

<?php 

?>