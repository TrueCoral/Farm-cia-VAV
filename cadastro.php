<?php require_once 'includes/Header.php'; ?>

<form method="post">
    <label>Nome do Produto</label>
    <input type="text" name="nome" required>
    <br><br>
    <label>Preço</label>
    <input type="text" name="preco" required>
    <br><br>
    <label>Fabricante</label>
    <input type="text" name="fabricante" required>
    <br><br>
    <label>estoque</label>
    <input type="text" name="estoque" required>
    <br><br>
    <label>dose do Produto</label>
    <input type="text" name="dose" required>
    <br><br>
    <button type="submit">enviar</button>

</form>

<?php
require ('<config/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$fabricante = $_POST['fabricante'];
$estoque = $_POST['estoque'];
$dose = $_POST['dose'];




$sql = "INSERT INTO produtos (nome, preco, fabricante, estoque, dose) VALUES (:nome, :preco, :fabricante, :estoque, :dose)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':nome' => $nome,
    ':preco' => $preco,
    ':fabricante' => $fabricante,
    ':estoque' => $estoque,
    ':dose' => $dose
]);

$id = $pdo->lastInsertId();


 echo $id . " ". $nome . " " . $preco . " " . $fabricante . " " . $estoque; 
}
?>
<br>

<?php require_once 'includes/Footer.php'; ?>