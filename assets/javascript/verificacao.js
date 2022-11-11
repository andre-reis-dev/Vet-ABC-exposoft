
$(document).ready(function(){
    $('#cpf').mask('999.999.999-99');
    $('#telefone').mask('(99)99999-9999');
});
    
 $(document).ready(function(){
    $("#conf_senha").blur(function(e){ //aciona o evento blur ou anexa uma função para ser executada quando ocorre um evento blur.
        //quando o usuário sair da caixinha da confirmação de senha, automaticamente será verificado se as senhas estão em conjunto
        var senha = document.getElementById("senha").value;
        var conf_senha = document.getElementById("conf_senha").value;
        if (senha != conf_senha) { 
            alert("senhas não compativeis");
           return false;
        } 
    });
 });


 
    const form = document.getElementById('form') // variável que contém todo o formulário
const cpf = document.getElementById('cpf')  // variável do CPF
const telefone = document.getElementById('tel') // variável do telefone
const nome = document.getElementById('nome')// variável do nome
const email = document.getElementById('email')// variável do email
const senha = document.getElementById('senha')// variável da senha
const config = document.getElementById('configsenha')// variável da config senha
const small = document.querySelectorAll("small") // variável que recebe todos os elementos small da página

form.addEventListener("submit", (e) => { // cria um evento chamado "submit", cujo valor será recebido pela variável "e", de evento.
    e.preventDefault(); // impossibilita a ação do action no formulário. Ele cancela o comportamento natural do evento a que se refere. 

    checkInputs(); // chama a função "checkInputs"
})

function checkInputs() {
    const cpfValue = cpf.value; 
    const telefoneValue = telefone.value;
    const nomeValue = nome.value; 
    const emailValue = email.value;
    const senhaValue = senha.value; 
    const configValue = config.value;
    /*
        variáveis que recebem os valores digitados pelo usuário, uma para cada informação.
    */
    
    if (cpfValue == "") {
        small[0].innerText = 'O campo CPF é obrigatório' // se o campo de cpf não obtiver nenhum valor, o script adiciona ao primeiro elemento small uma mensagem de erro. Todo procedimento feito aqui será repetido abaixo, para o telefone.
    } else {
        if (cpfValue.length <= 10) {
            small[0].innerText = 'Por favor, digite um CPF válido' // se o campo de cpf receber um valor com menos de 11 caracteres, emite uma mensagem de erro, bem como feito acima.
            
        } else {
            small[0].innerText = '' // senão, o small não aparece.
                 }
             }

    if (telefoneValue == "") {
        small[1].innerText = 'O campo Telefone é obrigatório'
           
    } else {
        if (telefoneValue.length <= 10) {
            small[1].innerText = 'Por favor, digite um Telefone válido'
            
        } else {
            small[1].innerText = ''
                }
            } 

    if (nomeValue == ""){
        small[2].innerText = 'O campo do Nome é obrigatório'
        
    }else{
            small[2].innerText = ''
        }

    if (emailValue == ""){
        small[3].innerText = 'O campo do Email é obrigatório'
    }else{
            smail[3].innerText = ''
        }

    if (senhaValue == ""){
    small[4].innerText = 'O campo da Sennha é obrgatório'
    }else{
            small[4].innerText = ''
        }
    
    if (configValue == ""){
    small[5].innerText = 'O campo da Sennha é obrgatório'
    }else{
        small[5].innerText = ''
        }
};   







