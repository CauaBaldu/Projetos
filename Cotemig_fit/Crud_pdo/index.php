<!DOCTYPE html>
<html>
<head>
    <title>CRUD de ALUNO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de ALUNO</h1>
    <a href="create.php">Adicionar Novo Aluno</a>
    <?php
        require ('pdo_con.php');

        // Função para listar todos os registros do banco de dados
        function listarRegistros($pdo) {
        $sql = "SELECT * FROM alunos";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo);
            // Exibindo os dados em uma tabela
            echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Endereco</th>
                    <th>Numero</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>UF</th>
                    <th>Modalidade</th>

                </tr>";
            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>" . $registro['id'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>" . $registro['sexo'] . "</td>";
                echo "<td>" . $registro['endereco'] . "</td>";
                echo "<td>" . $registro['numero'] . "</td>";
                echo "<td>" . $registro['complemento'] . "</td>";
                echo "<td>" . $registro['bairro'] . "</td>";
                echo "<td>" . $registro['cidade'] . "</td>";
                echo "<td>" . $registro['estado'] . "</td>";
                echo "<td>" . $registro['uf'] . "</td>";
                echo "<td>" . $registro['modalidaede'] . "</td>";
                
                echo "<td>
                    <a href='edit.php?id=" . $registro['id'] . "'>Editar</a>
                    <a href='delete.php?id=" . $registro['id'] . "'>Excluir</a>
                </td>";
                }
                echo "</tr>";
            echo "</table>";
    ?>
</body>
</html>
