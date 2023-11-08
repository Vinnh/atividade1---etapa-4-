<?php

$conn = new PDO("sqlite:../musicas.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id = $_GET["id"];
$nome = $_GET["nome"];
$banda = $_GET["banda"];

$prepare = $conn->prepare("UPDATE musicas SET nome=:nome, banda=:banda WHERE id=:id;");

$prepare->bindParam(":nome", $nome);
$prepare->bindParam(":banda", $banda);
$prepare->bindParam(":id", $id);

$prepare->execute();

header("Location:../index.php");