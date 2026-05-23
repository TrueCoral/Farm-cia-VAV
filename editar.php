<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="sidebar">
    <h2>Menu</h2>
    <a href="index.php">Home</a>
    <a href="cadastro.php">Cadastro</a>
    <a href="excluir.php">Excluir</a>
    <a href="editar.php">Editar</a>
</div>

<div class="content">
    <h2>Editar Produto</h2>

<?php
require(__DIR__ . '/config/conexao.php');

if (isset($_POST['buscar'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($produto) {
?>

