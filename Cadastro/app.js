let btn = document.querySelector('#verSenha')
let btnConfirm = document.querySelector('#verConfirmSenha')

let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

// let email = document.querySelector('#email')
// let labelEmail = document.querySelector('#labelEmail')
// let validEmail = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let ConfirmSenha = document.querySelector('#ConfirmSenha')
let labelConfirmSenha = document.querySelector('#labelConfirmSenha')
let validConfirmSenha = false

nome.addEventListener('keyup', ()=>{
  if(nome.value.length <= 3){
    labelNome.setAttribute('style', 'color: red')
    labelNome.innerHTML = '<strong>Nome *Insira no minimo 3 caracteres</strong>'
    nome.setAttribute('style', 'border-color: red')
    validNome = false
  } else {
    labelNome.setAttribute('style', 'color: green')
    labelNome.innerHTML = 'Nome'
    nome.setAttribute('style', 'border-color: green')
    validNome = true
  }
})

// email.addEventListener('keyup', ()=>{
//   if(email.value.length != email){
//     labelEmail.setAttribute('style', 'color: red')
//     labelEmail.innerHTML = '<strong>Email *Insira um email valido </strong>'
//     email.setAttribute('style', 'border-color: red')
//     validEmail = false
//   } else {
//     labelEmail.setAttribute('style', 'color: green')
//     labelEmail.innerHTML = 'Email'
//     email.setAttribute('style', 'border-color: green')
//     validEmail = true
//   }
// })

senha.addEventListener('keyup', ()=>{
  if(senha.value.length <= 5){
    labelSenha.setAttribute('style', 'color: red')
    labelSenha.innerHTML = '<strong>Senha *Insira no minimo 6 caracteres</strong>'
    senha.setAttribute('style', 'border-color: red')
    validSenha = false
  } else {
    labelSenha.setAttribute('style', 'color: green')
    labelSenha.innerHTML = 'Senha'
    senha.setAttribute('style', 'border-color: green')
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
    labelConfirmSenha.setAttribute('style', 'color: green')
    labelConfirmSenha.innerHTML = 'Confirmar Senha'
    ConfirmSenha.setAttribute('style', 'border-color: green')
    validConfirmSenha = true
  }
})

function cadastrar(){
  let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]')
  
  listaUser.push(
  {
    nomeCad: nome.value,
    // emailCad: email.value,
    senhaCad: senha.value
  }
  )
  
  localStorage.setItem('listaUser', JSON.stringify(listaUser))
  
  if(validNome && validSenha && validConfirmSenha){
    msgSuccess.setAttribute('style', 'display: block')
    msgSuccess.innerHTML = '<strong>Cadastrado!</strong>'
    msgError.setAttribute('style', 'display: none')
    msgError.innerHTML = ''
    
    // setTimeout(()=>{
    //   window.location.href =
    // }, 3000)
  } else {
    msgError.setAttribute('style', 'display: block')
    msgError.innerHTML = '<strong>Preencha todos os campos acima!</strong>'
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

