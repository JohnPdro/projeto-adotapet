<?php
include "../includes/conexao.php";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    // Consulta na tabela 'ongs'
    $sql_ongs = "SELECT * FROM ongs WHERE email = '$email'";
    $resultado_ongs = mysqli_query($conexao, $sql_ongs) or die("Falha na execução do código SQL: " . $conexao->error);

    // Consulta na tabela 'protetores'
    $sql_protetores = "SELECT * FROM protetores WHERE email = '$email'";
    $resultado_protetores = mysqli_query($conexao, $sql_protetores) or die("Falha na execução do código SQL: " . $conexao->error);

    if (mysqli_num_rows($resultado_ongs) > 0) {
        $ongs = $resultado_ongs->fetch_assoc();

        // Verificar se a senha fornecida corresponde ao hash armazenado no banco de dados
        if (password_verify($senha, $ongs['senha'])) {
            // Iniciar a sessão
            if (!isset($_SESSION)) {
                session_start();
            }

            // Redirecionar para a página de destino
            header('Location: ../../projeto/homePage/homePage.html');
            exit();
        }
    } else if (mysqli_num_rows($resultado_protetores) > 0) {
        $protetores = $resultado_protetores->fetch_assoc();

        // Verificar se a senha fornecida corresponde ao hash armazenado no banco de dados
        if (password_verify($senha, $protetores['senha'])) {
            // Iniciar a sessão
            if (!isset($_SESSION)) {
                session_start();
            }

            // Redirecionar para a página de destino
            header('Location: ../../projeto/homePage/homePage.html');
            exit();
        }
    }

    // Se chegou até aqui, significa que o login falhou
    echo "Falha ao logar! Email ou senha inválidos";
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

            <!-- Form Header -->
            <div id="form_header">
                <h1>Login</h1>
            </div>

            <!-- Inputs -->
            <div id="inputs">

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