<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Novo Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center">Cadastro Aluno</h1>
    <form action="insert.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome">
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6" N name = "sexo">
                <label for="gender">Sexo</label>
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="gender" id="masculino" value="Masculino">
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="feminino" value="Feminino">
                    <label class="form-check-label" for="feminino">Feminino</label>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>

            <div class="form-group col-md-6">
                <label for="uf">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" placeholder="EX : SP, MG...">
            </div>


            <div class="form-group col-md-6">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua Neymar">
            </div>

            <div class="form-group col-md-6">
                <label for="number">Número</label>
                <input type="number" class="form-control" id="number" name="number" placeholder="Seu Número (69)">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="comp">Complemento</label>
                <input type="text" class="form-control" id="comp" name="comp" placeholder="Complemento">
            </div>

        </div>

        <select id="estado" name="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
</select>
<div class="form-group col-md-6">
                <label for="atividade">modalidade</label>
                <select id="atividade" name="atividade" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Musculação">Musculação</option>
                    <option value="Yoga">Yoga</option>
                    <option value="Crossfit">Crossfit</option>
                    <option value="Dança">Dança</option>
                    <option value="Natação">Natação</option>
                    <option value="Corrida">Corrida</option>
                    <option value="Ciclismo">Ciclismo</option>
                    <option value="Spinning">Spinning</option>
                    <option value="Pilates">Pilates</option>
                </select>
            </div>

            <button type="button" class="btn btn-success" name = "Update">Atualizar</button>
            <button type="button" class="btn btn-danger" name = "see">Ver dados</button>
</body>
</html>
