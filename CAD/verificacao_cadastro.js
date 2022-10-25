
$(document).ready(function(){
    $('#cpf').mask('999.999.999-99');
});

$(document).ready(function(){
    $('#telefone').mask('(99) 99999-9999');
});

var nome = document.getElementById("nome");
if (nome.length <=0){
    alert("Obrigatótio o preenchimento do campo")
}

var telefone = document.getElementById("telefone");
if (telefone.length <= 9) {
alert("O telefone precisa ter 9 digítos")
}
 
var cpf = document.getElementById("cpf");
if (cpf.length <= 11){
    alert("O cpf não esta correto")
}

var email = document.getElementById("email");
if (email.length <= 0){
    alert ("Obrigatótio o preenchimento do campo")
}