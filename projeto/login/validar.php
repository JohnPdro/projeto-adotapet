<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Verificar se o formulário foi enviado

//     // Obter os dados do formulário
//     $nome = $_POST['nome'];
//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

//     // Validar os campos (Você pode adicionar suas próprias regras de validação aqui)

//     // Conectar ao banco de dados

//     include "../includes/conexao.php";

//     if (!$conexao) {
//         die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
//     }

//     // Consultar o banco de dados para verificar se as credenciais são válidas
//     $sql_ongs = "SELECT * FROM ongs WHERE nome = '$nome' AND email = '$email' AND senha = '$senha'";
//     $resultado_ongs = mysqli_query($conexao, $sql_ongs);

//     if (!$resultado_ongs) {
//         die('Erro ao consultar o banco de dados: ' . mysqli_error($conexao));
//     }

//     $sql_protetores = "SELECT * FROM protetores WHERE nome = '$nome' AND email = '$email' AND senha = '$senha'";
//     $resultado_protetores = mysqli_query($conexao, $sql_protetores);

//     if (!$resultado_protetores) {
//         die('Erro ao consultar o banco de dados: ' . mysqli_error($conexao));
//     }

//     // Verificar se os dados estão corretos em alguma das tabelas
//     if (mysqli_num_rows($resultado_ongs) > 0) {
//         // Login bem-sucedido para a homePage, redirecionar para a homePage
//         header('Location: ../homePage/homePage.html');
//         exit;
//     } 
//     elseif (mysqli_num_rows($resultado_protetores) > 0) {
//         // Login bem-sucedido para a homePage, redirecionar para a homePage
//         header('Location: ../homePage/homePage.html');
//         exit;
//     } 
//     else {
//         // Login inválido, exibir mensagem de erro
//         $erro = 'Usuário inválido!. Por favor, verifique seus dados e tente novamente';
//     }

//     // Fechar a conexão com o banco de dados
//     mysqli_close($conexao);
// }
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se o formulário foi enviado

    // Obter os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validar os campos

    // Conectar ao banco de dados

    include "../includes/conexao.php";

    if (!$conexao) {
        die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
    }

    // Consultar o banco de dados para verificar se as credenciais são válidas
    $sql_ongs = "SELECT * FROM ongs WHERE email = '$email' AND senha = '$senha'";
    $resultado_ongs = mysqli_query($conexao, $sql_ongs);

    if (!$resultado_ongs) {
        die('Erro ao consultar o banco de dados: ' . mysqli_error($conexao));
    }

    $sql_protetores = "SELECT * FROM protetores WHERE email = '$email' AND senha = '$senha'";
    $resultado_protetores = mysqli_query($conexao, $sql_protetores);

    if (!$resultado_protetores) {
        die('Erro ao consultar o banco de dados: ' . mysqli_error($conexao));
    }

    if (mysqli_num_rows($resultado_ongs) > 0) {
        header('Location: ../homePage/homePage.html');
        exit;
    } elseif (mysqli_num_rows($resultado_protetores) > 0) {
        // Login bem-sucedido para a tabela 'funcionarios', redirecionar para a página de funcionários
        header('Location: ../homePage/homePage.html');
        exit;
    } else {
        // Credenciais inválidas, exibir mensagem de erro
        $erro = 'Credenciais inválidas. Por favor, verifique seu e-mail e senha.';
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>

