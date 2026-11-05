<?php
include("../menu.php");

$id = $_GET['id'];

$sql = "Select * from funcionario where id = $id";
require_once("../conexao.php");
$result = mysqli_query($conexao,$sql);
$funcionario = mysqli_fetch_assoc($result);
?>

<div class="container">
<h1>Editar o Funcionário</h1>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">

    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required value="<?php echo $funcionario['nome']; ?>">
    </p>

    <p>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required value="<?php echo $funcionario['email']; ?>">
    </p>

    <p>
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required value="<?php echo $funcionario['cargo']; ?>">
    </p>

    <p>
        <label for="salario">Salário base:</label>
        <input type="text" name="salario" step="0.01" required value="<?php echo $funcionario['salario']; ?>">
    </p>

    <p>
        <label for="data">Data de admissão:</label>
        <input type="date" name="admissao" required value="<?php echo $funcionario['data_admissao']; ?>">
    </p>

    <p>
        <label for="ativo">Ativo</label>
        <input type="checkbox" name="ativo" <?php if ($funcionario['ativo']==1) echo 'checked'; ?>>
    </p>

    <p>
        <input type="submit" value="Atualizar">
    </p>
</form>
</div>