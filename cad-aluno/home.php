<?php
 include_once ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="conteudo">
        <h1 style="color:rgb(97, 48, 48);">O que deseja fazer?</h1>
        <form action="cadalunos.php" method="post">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
        <br><br>
        <button type="submit" class="btn"> 
        <b>Cadastrar Aluno</b>
        </button>
        </form>
        <form action="mostraaluno.php" method="post">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
        <br><br>
        <button type="submit" class="btn"> 
        <b>Mostrar Dados</b>
        </button>
        </form>
        <form action="alterardados.php" method="post">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
        <br><br>
        <button type="submit" class="btn"> 
        <b>Editar Dados</b>
        </button>
        </form>
    </div>
</body>
</html>
<?php
 include_once ("footer.php");
?>