<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CadastroProduto.css">
</head>

<body>
    <form action="CadastroProduto.php" class="cadastroProduto" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>        
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" required>
        </div>

        <div>
            <label for="valor">Valor:</label>
            <input type="number" id="valor" name="valor" required>
        </div>
        
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>
        </div>

        <div>
            <label for="foto">foto</label>
            <input type="file" id="foto" accept="image/*" name="imagem" required>
        </div>
        <button>Cadastrar</button>
        <a href="Listaproduto.php">Lista de produtos</a>
    </form>
</body>

</html>