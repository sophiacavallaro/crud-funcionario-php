 <?php
    // Este arquivo CONECTA com o banco de dados MySQL

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "empresa";

    // Chamar o comando para CONECTAR
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

    // Se a conexão falhar, mostrar o erro e parar
    if ($conexao) {
        echo "Conexao realizada com sucesso";
    }
    else{
        echo mysqli_error($conexao);
    }

    
?>