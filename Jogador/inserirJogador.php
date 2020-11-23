<?php require_once "../conexao/ConexaoPDO.php"; 

$nome = $_POST['iNome'];
$numero = $_POST['iNumero'];
$time = $_POST['iTime'];

//Realiazar a conexão
$conexao = ConexaoPDO::getInstance();

//PREPARAR UMA INSERT
$query = "INSERT INTO jogadores(nome,numero,time) VALUES(:x, :y,:z)";
$stmt = $conexao->prepare($query);

$stmt->bindvalue("x", $nome, PDO::PARAM_STR);
$stmt->bindvalue("y", $numero, PDO::PARAM_STR);
$stmt->bindvalue("z", $time, PDO::PARAM_STR);

//EXECUTAR O INSERT
$stmt->execute();


echo "<script>location.href='../index.php'</script>";


?>