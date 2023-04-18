<?php
 include_once ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editaraluno.css">
    <title>Alterar Dados</title>
</head>
<body>
    <div class="conteudo">
    <h1 style="color:rgb(97, 48, 48);">Alterar Dados:</h1><br>
    <div class="linha1">
        <div class="nome">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" value=<?php echo $_POST['nome']
        ?>>
        </div>
        <div class="cpf">
             <label for="cpf">CPF:</label><br>
             <input type="number" name="cpf" value=<?php echo $_POST['cpf']?>>
        </div>
        </div>
        <div class="linha2">
        <div class="endereco">
            <label for="endereco">Endereço:</label><br>
            <input type="text" name="endereco" value=<?php echo $_POST['endereco']?>>
        </div>
        </div>
        <div class="linha3">
        <div class="matricula">
            <label for="matricula">Matricula:</label><br>
            <input type="text" name="matricula" value=<?php echo $_POST['matricula']?>>
        </div>
        <div class="telefone">
            <label for="telefone">Telefone:</label><br>
            <input type="number" name="telefone" value=<?php echo $_POST['telefone']?>>
        </div>
        </div>
        <div class="linha4">
        <div class="curso">
              <label for="curso">Curso:</label><br>
              <input type="text" name="curso" value=<?php echo $_POST['curso']?>>
        </div>
        </div>
    <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
    <br><br>
    <button type="submit" class="btn"> 
    <b>Enviar</b>
    </button>
    </div>
</body>
</html>
<?php
 include_once ("footer.php");
?>