<?php
$id = $_GET["id"];
include "conexao.php";
$sql = "update tarefas set status=1 where id = $id";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: index.php");
echo $sql;
?>