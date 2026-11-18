<?php
    $nome =$_POST['nome']; //o $_POST[] obtem o dado do form
    $descricao =$_POST['descricao'];
    $responsavel =$_POST['responsavel'];
    $data_criacao=$_POST['data_criacao'];
    //CRIAR O COMANDO SQL
    $sql="insert into departamento (nome,descricao,responsavel,data_criacao)
        values('$nome','$descricao','$responsavel','$data_criacao')";
    require_once("../conexao.php");
    $resposta=mysqli_query($conexao,$sql);
    if($resposta==true)
    {
        header("location:listar.php");//redirecionamento
    }
?>