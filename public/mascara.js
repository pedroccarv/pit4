var input = document.querySelectorAll('.required');
var span = document.querySelectorAll('.span-alert');
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const senhaRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#+-])[A-Za-z\d@$!%*?&#+-]{8,}$/;
const cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/; // Regex corrigido para CPF
const telRegex = /^\(\d{2}\)\s?\d{4,5}-?\d{4}$/; // Regex para telefone

function setError(index){
    input[index].style.border = '2px solid red';
    span[index].style.display = 'block';
    input[index].style.outline = "0";
}

function removeError(index){
    input[index].style.border = '';
    span[index].style.display = 'none';
    input[index].style.outline = "1";
}

function NameValidate(){
    if(input[0].value.length < 2){
        setError(0);
    }
    else{
        removeError(0);
    }
}

function LastNameValidate(){
    if(input[1].value.length < 2){
        setError(1);
    }
    else{
        removeError(1);
    }
}

function EmailValidate(){
    if(input[2].value.match(emailRegex)){
        removeError(2);
    }
    else{
        setError(2);
    }
}

function PasswordValidate(){
    if(input[3].value.match(senhaRegex)){
        removeError(3);
    }
    else{
        setError(3);
    }
    if(input[4].value === input[3].value){
        removeError(4);
    }
    else{
        setError(4);
    }
}

function CpfValidate(){
    if(cpfRegex.test(input[6].value)){ 
        removeError(6);
    }
    else{
        setError(6);
    }
}

function PhoneValidate(){
    if(telRegex.test(input[7].value)){
        removeError(7);
    }
    else{
        setError(7);
    }
}

// Adicionar máscara de CPF
document.getElementById('CPF').addEventListener('input', function (e) {
    var cpf = e.target.value.replace(/\D/g, '');
    if (cpf.length === 11) {
        e.target.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    }
    else {
        e.target.value = cpf.replace(/(\d{3})(\d{3})(\d{0,3})/, '$1.$2.$3');
    }
});

// Adicionar máscara de telefone
document.getElementById('telefone').addEventListener('input', function (e) {
    var tel = e.target.value.replace(/\D/g, '');
    if (tel.length >= 2 && tel.length <= 6) {
        e.target.value = '(' + tel.substring(0, 2) + ') ' + tel.substring(2);
    } else if (tel.length >= 7 && tel.length <= 10) {
        e.target.value = '(' + tel.substring(0, 2) + ') ' + tel.substring(2, 6) + '-' + tel.substring(6);
    } else if (tel.length > 10) {
        e.target.value = '(' + tel.substring(0, 2) + ') ' + tel.substring(2, 7) + '-' + tel.substring(7, 11);
    }
});

// Remover a borda vermelha e a mensagem de erro quando o usuário começa a digitar novamente
input.forEach((el, index) => {
    el.addEventListener('input', function() {
        removeError(index);
    });
});
