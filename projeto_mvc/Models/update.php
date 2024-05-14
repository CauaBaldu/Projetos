<?php
echo "Atualizando dados abaixo... <br>";
require ('pdo_con.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["number"];
    $complemnto = $_POST["comp"];    
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $uf = $_POST["uf"];
    $modalidade = $_POST["atividade"];



    
    echo "<hr>";
 
    // Função para Atualizar o registro no banco de dados
    function atualizarRegistro($pdo, $id, $nome, $email, $sexo, $endereco, $numero, $complemnto, $bairro, $cidade, $estado, $uf, $modalidade) {
        $sql = "UPDATE alunos SET nome = '$nome', email = '$email', sexo = '$sexo', endereco = '$endereco', numero = '$numero' complemnto = '$complemnto'
        bairro = '$bairro', cidade = '$cidade', estado = '$estado', $uf = '$uf', modalidade = '$modalidade' WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (atualizarRegistro($pdo, $id, $nome, $email, $sexo, $endereco, $numero, $complemnto, $bairro, $cidade, $estado, $uf, $modalidade)) {
    echo "Registro atualizado com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>