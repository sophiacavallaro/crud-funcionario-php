<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
include("../menu.php");
?>

<div class="container">

<h1>Listagem de Funcionários</h1>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Operação</th>
        </tr>
    </thead>

    <tbody>
        <?php
            require_once("../conexao.php");

            $sql = "SELECT * FROM funcionario";
            $result = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_assoc($result))
            {
        ?>
                <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['cargo']; ?></td>
                    <td><?php echo $linha['salario']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                        <button class="btn btn-danger">Remover</button>
                    </td>
                </tr>
        <?php 
            }
        ?>
    </tbody>
</table>
</div>
</body>
</html>