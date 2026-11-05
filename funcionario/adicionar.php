<html>

</html>

<body>

    <?php
    include("../menu.php");
    ?>

    <div class="container">
    <h1>Cadastro de Funcionário</h1>

    <form action="inserir.php" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </p>

        <p>
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" required>
        </p>

        <p>
            <label for="salario">Salário base:</label>
            <input type="text" name="salario" step="0.01" required>
        </p>

        <p>
            <label for="data">Data de admissão:</label>
            <input type="date" name="admissao" required>
        </p>

        <p>
            <input type="submit" value ="Cadastrar">
            <input type="reset"  value ="Limpar">
        </p>

</body>