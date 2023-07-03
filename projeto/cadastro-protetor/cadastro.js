let btn = document.querySelector('#verSenha');
let btnConfirm = document.querySelector('#verConfirmSenha');

let senha = document.querySelector('#senha');
let labelSenha = document.querySelector('#labelSenha');
let validSenha = false;

let ConfirmSenha = document.querySelector('#ConfirmSenha');
let labelConfirmSenha = document.querySelector('#labelConfirmSenha');
let validConfirmSenha = false;

senha.addEventListener('keyup', () => {
  if (senha.value.length <= 5) {
    labelSenha.setAttribute('style', 'color: red');
    labelSenha.innerHTML = '<strong>Senha *Insira no mínimo 6 caracteres</strong>';
    senha.setAttribute('style', 'border-color: red');
    validSenha = false;
  } else {
    labelSenha.setAttribute('style', 'color: ');
    labelSenha.innerHTML = 'Senha';
    senha.setAttribute('style', 'border-color: ');
    validSenha = true;
  }
});

ConfirmSenha.addEventListener('keyup', () => {
  if (senha.value != ConfirmSenha.value) {
    labelConfirmSenha.setAttribute('style', 'color: red');
    labelConfirmSenha.innerHTML = '<strong>Senha *As senhas precisam ser iguais</strong>';
    ConfirmSenha.setAttribute('style', 'border-color: red');
    validConfirmSenha = false;
  } else {
    labelConfirmSenha.setAttribute('style', 'color: ');
    labelConfirmSenha.innerHTML = 'Confirmar Senha';
    ConfirmSenha.setAttribute('style', 'border-color: ');
    validConfirmSenha = true;
  }
});

function cadastrar() {
  let nome = document.querySelector('#nome');
  let email = document.querySelector('#email');
  let telefone = document.querySelector('#telefone');
  let cpf = document.querySelector('#cpf');
  let data_nascimento = document.querySelector('#data_nascimento');
  let endereco = document.querySelector('#endereco');
  let bairro = document.querySelector('#bairro');
  let cidade = document.querySelector('#cidade');
  let estado = document.querySelector('#estado');
  

  let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]');

  listaUser.push({
    nomeCad: nome.value,
    emailCad: email.value,
    telefoneCad: telefone.value,
    cpfCad: cpf.value,
    data_nascimentoCad: data_nascimento.value,
    enderecoCad: endereco.value,
    bairroCad: bairro.value,
    cidadeCad: cidade.value,
    estadoCad: estado.value,
    senhaCad: senha.value
  });

  localStorage.setItem('listaUser', JSON.stringify(listaUser));

  let msgError = document.querySelector('#msgError');
  let msgSuccess = document.querySelector('#msgSuccess');

  if (validSenha && validConfirmSenha) {
    msgSuccess.setAttribute('style', 'display: block');
    msgSuccess.innerHTML = '<strong>Cadastrado!</strong>';
    msgError.setAttribute('style', 'display: none');
    msgError.innerHTML = '';

    // Redirecionar para a página inicial após o cadastro
    setTimeout(() => {
      window.location.href = '../homePage/homePage.html';
    }, 3000);
  } else {
    msgError.setAttribute('style', 'display: block');
    msgError.innerHTML = '<strong>Preencha Todos os Campos!</strong>';
    msgSuccess.setAttribute('style', 'display: none');
    msgSuccess.innerHTML = '';
  }
}

btn.addEventListener('click', () => {
  let inputSenha = document.querySelector('#senha');
  if (inputSenha.getAttribute('type') === 'password') {
    inputSenha.setAttribute('type', 'text');
  } else {
    inputSenha.setAttribute('type', 'password');
  }
});

btnConfirm.addEventListener('click', () => {
  let inputConfirmSenha = document.querySelector('#ConfirmSenha');
  if (inputConfirmSenha.getAttribute('type') === 'password') {
    inputConfirmSenha.setAttribute('type', 'text');
  } else {
    inputConfirmSenha.setAttribute('type', 'password');
  }
});