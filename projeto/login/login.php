<?php
include "../includes/conexao.php";
if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (isset($_POST['email']) == 0) {
        echo "preencha seu email";
    } 
    else if (strlen($_POST['senha']) == 0) {
        echo "preencha sua senha";
    } 
    else {
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_ongs = "SELECT * FROM ongs WHERE email = '$email' AND senha = '$senha'";
        $resultado_ongs = mysqli_query($conexao, $sql_ongs) or die("Falaha na execução do código sql: " . $conexao->error);

        $sql_protetores = "SELECT * FROM protetores WHERE email = '$email' AND senha = '$senha'";
        $resultado_protetores = mysqli_query($conexao, $sql_protetores) or die("Falaha na execução do código sql: " . $conexao->error);

        if (mysqli_num_rows($resultado_ongs) > 0) {
            $ongs = $resultado_ongs->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            header('location: ../../projeto/homePage/homePage.html');

        } elseif (mysqli_num_rows($resultado_protetores) > 0) {
            
        } else {
            echo "Falha ao logar! Email ou Senha inválidos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
    <title> Login </title>

</head>
<body>
    <main id="container">
        <form id="login_form" method="post">
            <!-- <form action="validar.php" id="login_form" method="post"> -->
            <!-- Form Header -->
            <div id="form_header">
                <h1>Login</h1>
            </div>

            <!-- icones de midia social -->
            <!-- <div id="social_media"> -->
                <!-- Facebook -->
                <!-- <a href="#">
                    <img src="../../projeto/login/imagens-login-cadastro/facebook.png" alt="">
                </a> -->

                <!-- Google -->
                <!-- <a href="#">
                    <img src="../../projeto/login/imagens-login-cadastro/google.png" alt="Google logo">
                </a> -->

                <!-- GitHub -->
                <!-- <a href="#">
                    <img src="../../projeto/login/imagens-login-cadastro/github.png" alt="">
                </a>
            </div> -->

            <!-- Inputs -->
            <div id="inputs">
                <!-- Nome -->
                <!-- <div class="input-box">
                    <label for="nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="nome" name="nome">
                        </div>
                    </label>
                </div> -->

                <!-- Email -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>

                <!-- Senha -->
                <div class="input-box">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="senha" id="senha" name="senha">
                        </div>
                    </label>

                    <!-- cadastre-se -->
                    <div id="cadastre-se">
                        <p> Não tem uma conta?
                            <a href="../../projeto/cadastro-ong/cadastro.html"> Cadastre-se </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Login Button -->
            <button type="submit" id="login_button">Login</button>

        </form>
    </main>

</body>
</html>