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

        $id = $_GET['id'];

        $sql = "SELECT * FROM departamento WHERE id = $id";

        require_once("../conexao.php");

        $result = mysqli_query($conexao, $sql);

        $departamento = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <h1>Edição de departamento</h1>

        <form action="atualizar.php" method="post">

            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required
                    value="<?php echo $departamento['nome']; ?>">
            </p>

            <p>
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" required
                    value="<?php echo $departamento['descricao']; ?>">
            </p>

            <p>
                <label for="responsavel">Responsavel:</label>
                <input type="text" name="responsavel" required
                    value="<?php echo $departamento['responsavel']; ?>">
            </p>

            

            <p>
                <label for="data_criacao">Data de criação:</label>
                <input type="date" name="data_criacao" required
                    value="<?php echo $departamento['data_criacao']; ?>">
            </p>

            <p>
                <label for="ativo">Ativo:</label>
                <input type="checkbox" name="ativo"
                    <?php
                        if ($departamento['ativo'] == 1) {
                            echo "checked";
                        }
                    ?>>
            </p>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <p>
                <input type="submit" value="Atualizar">
            </p>

        </form>
    </div>

</body>
</html>
