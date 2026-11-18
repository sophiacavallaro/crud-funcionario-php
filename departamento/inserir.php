
<?php
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $responsavel = $_POST['responsavel'];
    $data_criacao = $_POST['data_criacao'];

    require_once("../conexao.php");

    $sql = "INSERT INTO departamento (nome, descricao, responsavel, data_criacao)
            VALUES ('$nome', '$descricao', '$responsavel', '$data_criacao')";

    $resposta = mysqli_query($conexao, $sql);

    if ($resposta == true) {
        header("location:listar.php");
        exit;
    }
?>
