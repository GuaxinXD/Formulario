<?php
include_once("conexao.php")
session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text">
        <input class="inputSubmit" type="submit" name="submit" value="Alterar">
    </form>
</body>
</html>