<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Cadastro </title>
  <link rel="stylesheet" href="cadastro.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
  <div class="container">
    <div class="form-image">
      <img src="../../projeto/login/imagens-login-cadastro/undraw_everyday_life_re_1lfb.svg"> <!-- observação aparentemente é necessario que a imagem seja .svg para funcionar o código -->
    </div>
    <div class="form">
      <form action="#" method="post"> <!-- o "#" somente está ai porque no momento eu ainda não defini uma ação no js -->
        <div class="form-header">

          <div class="title">
            <h1>Cadastre-se</h1>
          </div>

          <div id="msgError"></div>
          <div id="msgSuccess"></div>

          <div class="login-button">
            <button type="submit"><a href="../../projeto/login/login.php">Login</a></button>
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label id="labelNome" for="nome">Nome</label>
            <input id="nome" type="text" name="nome" placeholder="Nome da Ong" required>
          </div>

          <div class="input-box">
            <label id="labelEmail" for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Informe um Email válido" required>
          </div>

          <div class="input-box">
            <label id="labelTelefone" for="telefone">Telefone</label>
            <input id="telefone" type="tel" name="telefone" placeholder="Digite seu Telefone" required>
          </div>

          <div class="input-box">
            <label id="labelEndereco" for="endereco">Endereço</label>
            <input id="endereco" type="text" name="endereco" placeholder="Digite seu Endereço" required>
          </div>

          <div class="input-box">
            <label id="labelBairro" for="bairro">Bairro</label>
            <input id="bairro" type="text" name="bairro" placeholder="Digite o Bairro" required>
          </div>

          <div class="input-box">
            <label id="labelCidade" for="cidade">Cidade</label>
            <input id="cidade" type="text" name="cidade" placeholder="Digite a Cidade" required>
          </div>

          <div class="input-box">
            <label id="labelEstado" for="estado">Estado</label>
            <input id="estado" type="text" name="estado" placeholder="Digite o Estado" required>
          </div>

          <div class="input-box">
            <label id="labelCnpj_Cpf" for="cnpj_cpf">CNPJ/CPF</label>
            <input id="cnpj_cpf" type="text" name="cnpj_cpf" placeholder="Digite seu CNPJ ou CPF" required>
          </div>

          <div class="input-box">
            <label id="labelSenha" for="senha">Senha</label>
            <input id="senha" type="password" name="senha" placeholder="Digite uma senha" required>
          </div>

          <div class="input-box">
            <label id="labelConfirmSenha" for="ConfirmSenha">Confirmar Senha</label>
            <input id="ConfirmSenha" type="password" name="ConfirmSenha" placeholder="Digite sua senha novamente" required>
          </div>
        </div>
        <div class="cadastrar-button">
          <button onclick="cadastrar()" type="submit"><a href="../homePage/homePage.php"></a>Cadastrar</button><!-- para linkar com a homepage basta substituir o "#" pelo link da homepage -->
        </div>
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cnpj_cpf = $_POST["cnpj_cpf"];
    $senha = $_POST["senha"];
} else {
    $nome = "";
    $email = "";
    $telefone = "";
    $endereco = "";
    $bairro = "";
    $cidade = "";
    $estado = "";
    $cnpj_cpf = "";
    $senha = "";
}

  include "../includes/conexao.php";

  $sql = "insert into ongs(nome, email, telefone, endereco, bairro, cidade, estado, cnpj_cpf, senha) values('$nome', '$email', '$telefone', '$endereco', '$bairro', '$cidade', '$estado', '$cnpj_cpf', '$senha')";

  if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($endereco) && !empty($bairro) && !empty($cidade) && !empty($estado) && !empty($cnpj_cpf) && !empty($senha)) {
    mysqli_query($conexao, $sql);
  }

  mysqli_close($conexao);
  ?>

  <script src="cadastro.js"></script>
</body>
</html>