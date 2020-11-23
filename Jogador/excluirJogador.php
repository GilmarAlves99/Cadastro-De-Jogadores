<?php require_once '../conexao/ConexaoPDO.php';
$id= $_GET['id'];
$conexao = ConexaoPDO::getInstance();
$query = "DELETE FROM jogadores WHERE id=:x";
$stmt = $conexao->prepare($query);
$stmt->bindvalue("x", $id, PDO::PARAM_INT);
$stmt->execute();


echo "<script>location.href='../index.php'</script>";
?>
