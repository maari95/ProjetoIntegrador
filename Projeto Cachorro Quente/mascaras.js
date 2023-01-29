const input = document.querySelector('#cpf')

input.addEventListener('keypress', () =>{
    let inputlength = input.value.length

    if (inputlength === 3 || inputlength ===7){
        input.value += '.'
    }else if(inputlength === 11){
        input.value += '-'
    }
})
const inputnum = document.getElementById("#cpf");

input.addEventListener("keypress", somenteNumeros);

function somenteNumeros(e) {

var charCode = (e.which) ? e.which : e.keyCode

if (charCode > 31 && (charCode < 48 || charCode > 57))

e.preventDefault();
}
 const input1 = document.getElementById('#cep');

 input.addEventListener("keyup", "keypress", formatarCep);
 
 function formatarCep(e){ 
 
 var v= e.target.value.replace(/\D/g,"")                
 
 v=v.replace(/^(\d{5})(\d)/,"$1-$2") 
 
 e.target.value = v;
 
 }

 const inputel = document.getElementById('#tel');

input.addEventListener("keyup",  "keypress", formatarTelefone);

function formatarTelefone(e){

var v=e.target.value.replace(/\D/g,"");

v=v.replace(/^(\d\d)(\d)/g,"($1)$2"); 

v=v.replace(/(\d{5})(\d)/,"$1-$2");    

e.target.value = v;
}


