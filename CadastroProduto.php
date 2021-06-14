<?php 

include('conexao.php');


$nome = $_POST["nome"];
$categoria  = $_POST["categoria"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];
$imagem = $_FILES["imagem"];
$caminhoImagem = "imagem/" . $imagem["name"];
if (!move_uploaded_file($imagem["tmp_name"],$caminhoImagem)){
    echo "não foi possível cadastrar o produto, imagem invalida";
    return;
}


$sql = $pdo->prepare("INSERT INTO produto(nome,categoria,valor,descricao,foto) VALUES (:nome,:categoria,:valor,:descricao,:foto)");
$sql->bindParam(":nome",$nome);
$sql->bindParam(":categoria",$categoria);
$sql->bindParam(":valor",$valor);
$sql->bindParam(":descricao",$descricao);
$sql->bindParam(":foto",$caminhoImagem);
$sql->execute();

echo 'Produto cadastrado com sucesso';

header('Location:  Listaproduto.php');
?>