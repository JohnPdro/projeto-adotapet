document.getElementById('login_form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obter os dados do formulário
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    // Realizar a validação dos campos (você pode adicionar suas próprias regras de validação aqui)

    // Exibir o pop-up de erro se os campos estiverem vazios
    if (email === '' || senha === '') {
        document.getElementById('error_message').textContent = 'Por favor, preencha todos os campos.';
        document.getElementById('error_popup').style.display = 'block';
        // alert ("Login inválido");
        // document.getElementById('error_message').textContent = 'Por favor, preencha todos os campos.';
        // document.getElementById('error_popup').style.display = 'block';
    } else {
        // Enviar o formulário
        this.submit();
    }
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('error_popup').style.display = 'none';
});
