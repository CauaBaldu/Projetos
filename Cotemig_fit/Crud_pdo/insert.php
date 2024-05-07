<?php
echo "Inserindo dados abaixo... <br>";
require ('pdo_con.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $nome = $_POST["nome"] . '<br>';
    echo $email = $_POST["email"];
    echo $sexo = $_POST["sexo"];
    echo $endereco = $_POST["endereco"];
    echo $numero = $_POST["number"];
    echo $complemnto = $_POST["comp"];    
    echo $bairro = $_POST["bairro"];
    echo $cidade = $_POST["cidade"];
    echo $estado = $_POST["estado"];
    echo $uf = $_POST["uf"];
    echo $modalidade = $_POST["atividade"];
    
    echo "<hr>";

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $email, $sexo, $endereco, $numero, $complemnto, $bairro, $cidade, $estado, $uf, $modalidade) {
        $sql = "INSERT INTO alunos (nome, email, sexo, endereco, numero, complemnto, bairro, cidade, estado, uf, modalidade) VALUES (:nome, :email, :sexo, :endereco, :numero, :complemnto, :bairro, :cidade, :estado, :uf, :modalidade)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
        $stmt->bindParam(':nome', $endereco, PDO::PARAM_STR);
        $stmt->bindParam(':email', $numero, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $complemnto, PDO::PARAM_STR);
        $stmt->bindParam(':nome', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':email', $cidade, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $estado, PDO::PARAM_STR);
        $stmt->bindParam(':nome', $uf, PDO::PARAM_STR);
        $stmt->bindParam(':email', $modalidade, PDO::PARAM_STR);

        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $nome, $email,  $sexo, $endereco, $numero, $complemnto, $bairro, $cidade, $estado, $uf, $modalidade)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>



