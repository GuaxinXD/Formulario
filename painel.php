<?php
include_once("protect.php");
include_once("conexao.php");
#session_start()
$consulta = "SELECT * FROM usuarios";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Privada</title>
</head>
<body>
    <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
    <a href="exit.php">Sair</a>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Senha</td>
            <td>Ação</td>
        </tr>
        <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["id"]?></td>
            <td><?php echo $dado["nome"]?></td>
            <td><?php echo $dado["email"]?></td>
            <td><?php echo $dado["senha"]?></td>
            <td><a href="edit.php?codigo=<?php echo $dado["id"]; ?>">Editar</a> |
            <a href="del.php?codigo=<?php echo $dado["id"]; ?>">Excluir</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>