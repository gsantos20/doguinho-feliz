//Navegação de telas
function login() {
  window.location.href = 'index.html'
}

function cadastrar() {
  window.location.href = 'cadastrar.html'
}

function VoltarLogin() {
  window.location.href = 'login.html'
}

//show/hidden password
document.getElementById('olho').addEventListener('mousedown', function () {
  document.getElementById('pass').type = 'text'
})
document.getElementById('olho').addEventListener('mouseup', function () {
  document.getElementById('pass').type = 'text'
})

document.getElementById('olho').addEventListener('mousemove', function () {
  document.getElementById('pass').type = 'password'
})

document.getElementById('olho1').addEventListener('mousedown', function () {
  document.getElementById('pass1').type = 'text'
})
document.getElementById('olho1').addEventListener('mouseup', function () {
  document.getElementById('pass1').type = 'text'
})

document.getElementById('olho1').addEventListener('mousemove', function () {
  document.getElementById('pass1').type = 'password'
})

//validation
var nome = document.getElementById('nome')
var email = document.getElementById('email')
var password = document.getElementById('pass')
var password1 = document.getElementById('pass1')
var nome_error = document.getElementById('User_Error')
var Email_Error = document.getElementById('Email_Error')
var password_error = document.getElementById('Pass_Error')
var password_error2 = document.getElementById('Pass_Error2')
var password_error3 = document.getElementById('Pass_Error3')
var password_error4 = document.getElementById('Pass_Error4')

nome.addEventListener('textInput', nome_Verify)
password.addEventListener('textInput', pass_Verify)
password.addEventListener('textInput', Quant_Digit)
password1.addEventListener('textInput', pass_Verify1)
password1.addEventListener('textInput', Quant_Digit1)
email.addEventListener('textInput', Email_Verify)

function validated() {
  if (nome.value === null || nome.value === '') {
    nome.style.border = '1px solid red'
    nome_error.style.display = 'block'
    nome.focus()
    return false
  }
  if (email.value === null || email.value === '') {
    email.style.border = '1px solid red'
    Email_Error.style.display = 'block'
    email.focus()
    return false
  }
  if (password.value === null || password.value === '') {
    password.style.border = '1px solid red'
    password_error.style.display = 'block'
    password.focus()
    return false
  }
  if (password.value.length <= 3) {
    password.style.border = '1px solid red'
    password_error2.style.display = 'block'
    password.focus()
    return false
  }
  if (password1.value === null || password1.value === '') {
    password1.style.border = '1px solid red'
    password_error3.style.display = 'block'
    password1.focus()
    return false
  }
  if (password1.value.length <= 3) {
    password1.style.border = '1px solid red'
    password_error4.style.display = 'block'
    password1.focus()
    return false
  }
}
//Usuário
function nome_Verify() {
  if (nome.value.length >= 2) {
    nome.style.border = '1px solid silver'
    nome_error.style.display = 'none'
    return true
  }
}
//Email
function Email_Verify() {
  if (email.value.length >= 10) {
    email.style.border = '1px solid silver'
    Email_Error.style.display = 'none'
    return true
  }
}
//senha
function pass_Verify() {
  if (password.value.length >= 0) {
    password.style.border = '1px solid silver'
    password_error.style.display = 'none'
    return true
  }
}

function Quant_Digit() {
  if (password.value.length > 2) {
    password.style.border = '1px solid silver'
    password_error2.style.display = 'none'
    return true
  }
}
//confirmar senha
function pass_Verify1() {
  if (password1.value.length >= 0) {
    password1.style.border = '1px solid silver'
    password_error3.style.display = 'none'
    return true
  }
}

function Quant_Digit1() {
  if (password1.value.length > 2) {
    password1.style.border = '1px solid silver'
    password_error4.style.display = 'none'
    return true
  }
}
