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
             <form action="#"> <!-- o "#" somente está ai porque no momento eu ainda não defini uma ação no js -->
               <div class="form-header">
                
                 <div class="title">
                   <h1>Cadastre-se</h1>
               </div>

               <div id="msgError"></div>
            <div id="msgSuccess"></div>

                 <div class="login-button">
                   <button><a href="../../projeto/login/login.php">Login</a></button>
                 </div>
               </div>

               <div class="input-group">
                 <div class="input-box">
                   <label id="labelNome" for="nome">Nome</label>
                   <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
                 </div>
                 
                 <!-- <div class="input-box">
                   <label id="labelSobrenome" for="sobrenome">Sobrenome</label>
                   <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                 </div> -->
                 
                 <div class="input-box">
                   <label id="labelEmail" for="email">Email</label>
                   <input id="email" type="email" name="email" placeholder="Informe um Email válido" required>
                 </div>
                 
                 <div class="input-box">
                   <label id="labelTelefone" for="telefone">Telefone</label>
                   <input id="telefone" type="tel" name="telefone" placeholder="Digite seu telefone" required>
                 </div>
                 
                 <div class="input-box">
                   <label id="labelAniversario" for="aniversario">Aniversário</label>
                   <input id="aniversario" type="date" name="aniversario" placeholder="" required>
                 </div>
                 
                 <!-- <div class="input-box">
                   <label id="labelEndereco" for="endereco">Endereço</label>
                   <input id="endereco" type="text" name="endereco" placeholder="Digite seu endereço" required>
                 </div> -->
                 
                 <!-- <div class="input-box">
                   <label id="labelCep" for="cep">CEP</label>
                   <input id="cep" type="number" name="cep" placeholder="Digite o CEP da rua" required>
                 </div> -->
                 
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
                <button onclick="cadastrar()"><a href="../../projeto/homePage/homePage.html"></a>Cadastrar</button><!-- para linkar com a homepage basta substituir o "#" pelo link da homepage -->
               </div>
             </form>
          </div>
        </div>
        <script src="cadastro.js"></script>
    </body>
    </html>