/*
let btn = document.querySelector('#verSenha')
let btnConfirm = document.querySelector('#verConfirmSenha')

let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

let email = document.querySelector('#email')
let labelEmail = document.querySelector('#labelEmail')
let validEmail = false

let telefone = document.querySelector('#telefone')
let labelTelefone = document.querySelector('#labelTelefone')
let validTelefone = false

let endereco = document.querySelector('#endereco')
let labelEndereco = document.querySelector('#labelEndereco')
let validEndereco = false

let bairro = document.querySelector('#bairro')
let labelBairro = document.querySelector('#labelBairro')
let validBairro = false

let cidade = document.querySelector('#cidade')
let labelCidade = document.querySelector('#labelCidade')
let validCidade = false

let estado = document.querySelector('#estado')
let labelEstado = document.querySelector('#labelEstado')
let validEstado = false

let cnpj_cpf = document.querySelector('#cnpj_cpf')
let labelCnpj_Cpf = document.querySelector('#labelCnpj_Cpf')
let validCnpj_Cpf = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let ConfirmSenha = document.querySelector('#ConfirmSenha')
let labelConfirmSenha = document.querySelector('#labelConfirmSenha')
let validConfirmSenha = false

// nome.addEventListener('keyup', ()=>{
//   if(nome.value.length <= 3){
//     labelNome.setAttribute('style', 'color: red')
//     labelNome.innerHTML = '<strong>Nome *Insira no minimo 3 caracteres</strong>'
//     nome.setAttribute('style', 'border-color: red')
//     validNome = false
//   } else {
//     labelNome.setAttribute('style', 'color: ')
//     labelNome.innerHTML = 'Nome'
//     nome.setAttribute('style', 'border-color: ')
//     validNome = true
//   }
// })

// email.addEventListener('keyup', ()=>{
//   if(email.value.length != email){
//     labelEmail.setAttribute('style', 'color: red')
//     labelEmail.innerHTML = '<strong>Email *Insira um email valido </strong>'
//     email.setAttribute('style', 'border-color: red')
//     validEmail = false
//   } else {
//     labelEmail.setAttribute('style', 'color: ')
//     labelEmail.innerHTML = 'Email'
//     email.setAttribute('style', 'border-color: ')
//     validEmail = true
//   }
// })

// telefone.addEventListener('keyup', ()=>{
//   if(telefone.value.length <= 10){
//     labelTelefone.setAttribute('style', 'color: red')
//     labelTelefone.innerHTML = '<strong>Telefone *Insira um número valido e tente novamente </strong>'
//     telefone.setAttribute('style', 'border-color: red')
//     validTelefone = false
//   } else {
//     labelTelefone.setAttribute('style', 'color: ')
//     labelTelefone.innerHTML = 'Telefone'
//     telefone.setAttribute('style', 'border-color: ')
//     validTelefone = true
//   }
// })

senha.addEventListener('keyup', ()=>{
  if(senha.value.length <= 5){
    labelSenha.setAttribute('style', 'color: red')
    labelSenha.innerHTML = '<strong>Senha *Insira no minimo 6 caracteres</strong>'
    senha.setAttribute('style', 'border-color: red')
    validSenha = false
  } else {
    labelSenha.setAttribute('style', 'color: ')
    labelSenha.innerHTML = 'Senha'
    senha.setAttribute('style', 'border-color: ')
    validSenha = true
  }
})

ConfirmSenha.addEventListener('keyup', ()=>{
  if(senha.value != ConfirmSenha.value){
    labelConfirmSenha.setAttribute('style', 'color: red')
    labelConfirmSenha.innerHTML = '<strong>Senha *As senhas precisam ser iguais </strong>'
    ConfirmSenha.setAttribute('style', 'border-color: red')
    validConfirmSenha = false
  } else {
    labelConfirmSenha.setAttribute('style', 'color: ')
    labelConfirmSenha.innerHTML = 'Confirmar Senha'
    ConfirmSenha.setAttribute('style', 'border-color: ')
    validConfirmSenha = true
  }
})

function cadastrar(){
  let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]')
  
  listaUser.push(
  {
    nomeCad: nome.value,
    emailCad: email.value,
    telefoneCad: telefone.value,
    enderecoCad: endereco.value,
    bairroCad: bairro.value,
    cidadeCad: cidade.value,
    estadoCad: estado.value,
    cnpj_cpfCad: cnpj_cpf.value,
    senhaCad: senha.value
  }
  )
  
  localStorage.setItem('listaUser', JSON.stringify(listaUser))
  
  if(validNome && validEmail && validTelefone && validEndereco && validBairro && validCidade && validEstado && validCnpj_Cpf && validSenha && validConfirmSenha){
    msgSuccess.setAttribute('style', 'display: block')
    msgSuccess.innerHTML = '<strong>Cadastrado!</strong>'
    msgError.setAttribute('style', 'display: none')
    msgError.innerHTML = ''
    
    // setTimeout(()=>{
    //    window.location.href = //<img href="../homePage/HomePage.php"></img>
    // }, 3000)

  } else {
    msgError.setAttribute('style', 'display: block')
    msgError.innerHTML = '<strong>Preencha Todos os Campos!</strong>'
    msgSuccess.setAttribute('style', 'display: none')
    msgSuccess.innerHTML = ''
  }
}

btn.addEventListener('click', ()=> {
  let inputSenha = document.querySelector('#senha')
  if(inputSenha.getAttribute('type') == 'password') {
    inputSenha.setAttribute ('type', 'text')
  } else {
    inputSenha.setAttribute ('type', 'password')
  }
})

btnConfirm.addEventListener('click', ()=> {
  let inputConfirmSenha = document.querySelector('#ConfirmSenha')
  if(inputConfirmSenha.getAttribute('type') == 'password') {
    inputConfirmSenha.setAttribute ('type', 'text')
  } else {
    inputConfirmSenha.setAttribute ('type', 'password')
  }
})
*/

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
  let endereco = document.querySelector('#endereco');
  let bairro = document.querySelector('#bairro');
  let cidade = document.querySelector('#cidade');
  let estado = document.querySelector('#estado');
  let cnpj_cpf = document.querySelector('#cnpj_cpf');

  let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]');

  listaUser.push({
    nomeCad: nome.value,
    emailCad: email.value,
    telefoneCad: telefone.value,
    enderecoCad: endereco.value,
    bairroCad: bairro.value,
    cidadeCad: cidade.value,
    estadoCad: estado.value,
    cnpj_cpfCad: cnpj_cpf.value,
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