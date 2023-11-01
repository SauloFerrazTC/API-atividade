
<?php
session_start();
ob_start();

require_once("../../controller/UserController.php");
use Controllers\UserController;

$getposts = new UserController();
$objetivo= $_REQUEST["acao"];
$posts = $getposts-> getPosts($objetivo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Lista</title>

    <link rel="stylesheet" href="../css/lista.css">
</head>
<body>
    <div class="tela">
        <a href="http://localhost:8000/src/view/pages/telaInicial.php" class="link" style="color: #7F40B0;">TELA INICIAL</a>
        <center><h1>LISTA DE POSTS</h1></center>
        <?php
        foreach ($posts as $post) {
        ?>
            <div class="post_user">
                <p class="post_frase"><?php echo $post['conteudo']; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
