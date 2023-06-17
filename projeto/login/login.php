<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="login.css">

    <title> Login </title>
</head>
<body>

<body>   
    <main id="container">
        <form id="login_form">
            <!-- Form Header -->
            <div id="form_header">

                <h1> Login </h1>


            </div>

            <!-- icones de midia social -->
            <div id="social_media">
                <!-- Facebook -->
                <a href="#">
                    <img src="../../projeto/login/imagens-login-cadastro/facebook.png" alt="">
                </a>

                <!-- Google -->
                <a href="#">
                    <img src="../../projeto/login/imagens-login-cadastro/google.png" alt="Google logo">
                </a>

                <!-- GitHub -->
                <a href="#">
                    <img src="../../projeto/login/imagens-login-cadastro/github.png" alt="">
                </a>
            </div>

            <!-- Inputs -->
            <div id="inputs">
                <!-- Nome -->
                <div class="input-box">
                    <label for="nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="nome" name="nome">
                        </div>
                    </label>
                </div>

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
                            <a href="../../projeto/cadastro/cadastro.php"> Cadastre-se </a>
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