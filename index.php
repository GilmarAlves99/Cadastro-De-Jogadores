<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="conteudo.css">
    <title>Monte sua Seleção</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Cadastro De Jogadores</h1>
        <hr>
        <div class="row">
            <div class="col-sm">

                <form action="jogador/inserirJogador.php" method="POST">


                    <input class="form-control input" type="text" name="iNome" id="iNome" placeholder="Digite o nome do jogador" />
                    <input class="form-control input" type="text" name="iNumero" id="iNumero" placeholder="Digite o numero do jogador" />
                    <input class="form-control input" type="text" name="iTime" id="iTime" placeholder="Digite o time jogador" />
                    <br>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar Jogador</button>

                </form>
            </div>

            <div class="col-sm">
                <?php require_once "conexao/ConexaoPDO.php"; ?>
                <?php
                $conexao = ConexaoPDO::getInstance();
                $query = "SELECT * FROM jogadores";
                $stmt = $conexao->prepare($query);
                $stmt->execute();
                $jogadores = $stmt->fetchAll();

                ?>
                <table class="table">
                   
                        <tr>

                            <td>ID</td>
                            <td>NOME</td>
                            <td>CAMISA</td>
                            <td>TIME</td>
                            <td>AÇÕES</td>
                        </tr>

                        <?php
                        foreach ($jogadores as $registro => $jogador) {

                        ?>
                            <tr>
                                <td> <?php echo $jogador["id"]; ?> </td>
                                <td> <?php echo $jogador["nome"]; ?> </td>
                                <td> <?php echo $jogador["numero"]; ?> </td>
                                <td> <?php echo $jogador["time"]; ?> </td>
                                <td><a href="jogador/excluirJogador.php?id=<?php echo $jogador["id"]; ?>">Excluir</a></td><!-- (* cada linha da tabela vai possuir a opção de excluir o registro pelo id) -->
                                <!-- (* cada linha da tabela vai possuir a opção de excluir o registro pelo id) -->
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>