
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPRESA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include("../menu.php");
    ?>

    <div class="container">
        <h1>Cadastro de Departamento</h1>

        <form action="inserir.php" method="post">
            <p>
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </p>

            <p>
                <label>Descrição:</label>
                <input type="text" name="descricao" required>
            </p>

            <p>
                <label>Responsável:</label>
                <input type="text" name="responsavel" required>
            </p>

            <p>
                <label>Data de criação:</label>
                <input type="date" name="data_criacao" required>
            </p>

            <p>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </p>
        </form>
    </div>
</body>
</html>
