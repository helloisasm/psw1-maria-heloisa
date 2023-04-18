<?php
 include_once ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostraraluno.css">
    <title>Mostrar Dados</title>
</head>
<body>
    <div class="conteudo">
    <h1 style="color:rgb(97, 48, 48);">Seus dados:</h1>
    <br>
    <br>
        <table>
            <tr>
                <td>Nome</td>
                <td><?php echo $_POST['nome']; ?></td>
            </tr>
            <tr>
                <td>CPF</td>
                <td><?php echo $_POST['cpf']; ?></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td> <?php echo $_POST['endereco']; ?></td>
            </tr>
            <tr>
                <td>Matrícula</td>
                <td><?php echo $_POST['matricula']; ?></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><?php echo $_POST['telefone'];  ?></td>
            </tr>
            <tr>
                <td>Curso</td>
                <td><?php echo $_POST['curso']; ?></td>
            </tr>
        </table>
<br>
<br>
<br>
    <form action="editaraluno.php" method="post">
        <input type="hidden" name="nome" value=<?php echo $_POST['nome']?>>
        <input type="hidden" name="cpf" value=<?php echo $_POST['cpf']?>>
        <input type="hidden" name="endereco" value=<?php echo $_POST['endereco']?>>
        <input type="hidden" name="matricula" value=<?php echo $_POST['matricula']?>>
        <input type="hidden" name="telefone" value=<?php echo $_POST['telefone']?>>
        <input type="hidden" name="curso" value=<?php echo $_POST['curso']?>>
        <button type="submit" class="btn"> 
        <b>Alterar Dados</b>
        </button>
    </form>
    </div>
</body>
</html>
<?php
 include_once ("footer.php");
?>