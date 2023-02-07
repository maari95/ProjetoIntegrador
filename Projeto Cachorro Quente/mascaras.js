
//mascara cpf
const input = document.querySelector('#cpf')

input.addEventListener('keypress', () => {
    let inputlength = input.value.length

    if (inputlength === 3 || inputlength === 7) {
        input.value += '.'
    } else if (inputlength === 11) {
        input.value += '-'
    }
})

//apenas numeros
const inputnum = document.getElementById("#cpf", "#cep", "#tel", "#cnpj");

input.addEventListener("keypress", somenteNumeros);

function somenteNumeros(e) {

    var charCode = (e.which) ? e.which : e.keyCode

    if (charCode > 31 && (charCode < 48 || charCode > 57))

        e.preventDefault();
}

//mascara cep
const input1 = document.getElementById('#cep');

input.addEventListener("keyup", "keypress", formatarCep);

function formatarCep(e) {

    var v = e.target.value.replace(/\D/g, "")

    v = v.replace(/^(\d{5})(\d)/, "$1-$2")

    e.target.value = v;

}

//mascara telefone//
const inputtel = document.getElementById('#tel');

input.addEventListener("keyup", "keypress", formatarTelefone);

function formatarTelefone(e) {

    var v = e.target.value.replace(/\D/g, "");

    v = v.replace(/^(\d\d)(\d)/g, "($1)$2");

    v = v.replace(/(\d{5})(\d)/, "$1-$2");

    e.target.value = v;
}

//mascara cnpj//
const input3 = document.getElementById("#cnpj");
input.addEventListener("keyup", formatarCNPJ);
function formatarCNPJ(e){

var v= e.target.value.replace(/\D/g,"");

v=v.replace(/^(\d{2})(\d)/,"$1.$2");

v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3");

v=v.replace(/\.(\d{3})(\d)/,".$1/$2");

v=v.replace(/(\d{4})(\d)/,"$1-$2");  

e.target.value = v;


}

//moeda
const inputmoeda = document.getElementById("#preco");

input.addEventListener("keyup", formatarMoeda); 

function formatarMoeda(e) {

var v = e.target.value.replace(/\D/g,"");

v = (v/100).toFixed(2) + "";

v = v.replace(".", ",");

v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");

v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");

e.target.value = v;

}


