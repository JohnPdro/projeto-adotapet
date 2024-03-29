let btn = document.querySelector('#verSenha')
let btnConfirm = document.querySelector('#verConfirmSenha')

let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

// let sobrenome = document.querySelector('#sobrenome')
// let labelSobrenome = document.querySelector('#labelSobrenome')
// let validSobrenome = false

let aniversario = document.querySelector('#aniversario')
let labelAniversario = document.querySelector('#labelAniversario')
let validAniversario = false

let email = document.querySelector('#email')
let labelEmail = document.querySelector('#labelEmail')
let validEmail = false

let telefone = document.querySelector('#telefone')
let labelTelefone = document.querySelector('#labelTelefone')
let validTelefone = false

// let endereco = document.querySelector('#endereco')
// let labelEndereco = document.querySelector('#labelEndereco')
// let validEndereco = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let ConfirmSenha = document.querySelector('#ConfirmSenha')
let labelConfirmSenha = document.querySelector('#labelConfirmSenha')
let validConfirmSenha = false

let masculino = document.querySelector('#masculino')
let labelMasc = document.querySelector('#labelMasc')
let validMasc = false

let feminino = document.querySelector('#feminino')
let labelFemi = document.querySelector('#labelFemi')
let validFemi = false

let outros = document.querySelector('#outros')
let labelOutros = document.querySelector('#labelOutros')
let validOutros = false

let nenhum = document.querySelector('#nenhum')
let labelNenhum = document.querySelector('#labelNenhum')
let validNenhum = false

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

// sobrenome.addEventListener('keyup', ()=>{
//     if(sobrenome.value.length <= 3){
//       labelSobrenome.setAttribute('style', 'color: red')
//       labelSobrenome.innerHTML = '<strong>Sobrenome *Insira no minimo 3 caracteres</strong>'
//       sobrenome.setAttribute('style', 'border-color: red')
//       validSobrenome = false
//     } else {
//       labelSobrenome.setAttribute('style', 'color: ')
//       labelSobrenome.innerHTML = 'Sobrenome'
//       sobrenome.setAttribute('style', 'border-color: ')
//       validSobrenome = true
//     }
//   })

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
//     labelTelefone.innerHTML = '<strong>Telefone *Insira o DDD e tente novamente </strong>'
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
    aniversarioCad: aniversario.value,
    emailCad: email.value,
    telefoneCad: telefone.value,
    senhaCad: senha.value,
    feminino: feminino.value,
    masculino: masculino.value,
    outro: outros.value,
    nenhum: nenhum.value
  }
  )
  
  localStorage.setItem('listaUser', JSON.stringify(listaUser))
  
  if(validNome && validSobrenome && validSenha && validConfirmSenha){
    msgSuccess.setAttribute('style', 'display: block')
    msgSuccess.innerHTML = '<strong>Cadastrado!</strong>'
    msgError.setAttribute('style', 'display: none')
    msgError.innerHTML = ''
    
    // setTimeout(()=>{
    //   window.location.href = 
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