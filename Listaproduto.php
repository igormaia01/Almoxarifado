<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Listaproduto.css">
</head>

<body>
    <ul class="listaDeProdutos">
            <?php
                include("conexao.php");
                $sql = $pdo->prepare("SELECT * FROM produto");
                $sql->execute();
                $html = "";
                while($produto=$sql->fetch(PDO::FETCH_ASSOC)){
                    $html .= "<li class='produto'>";
                    $html .= "<img src='".$produto["foto"]."'/>";
                    $html .= "<p>".$produto["nome"]."</p>";
                    $html .= "<p>".$produto["categoria"]."</p>";
                    $html .= "<p>".$produto["valor"]."</p>";
                    $html .= "<p>".$produto["descricao"]."</p>";
                    $html .= "</li>";
                }
                echo $html;
            ?>
    </ul>
    <a href="CadastrarProduto.php">Cadastrar</a>
</body>

</html>