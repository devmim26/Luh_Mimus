document.getElementById('cpf').addEventListener('input', function(e) {

    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
    e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '/' : x[4]) + x[4] + (x[5] ? '-' + x[5] : '');
    
    

    if(e.target.value.length < 15) {
        x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
        e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '-' + x[4] : '');
    }

    console.log('Com formatação: ' + e.target.value);
    
    //Caso queira pegar apenas os números use essa função para remover todos os caracteres menos os números em Javascript
    let valor = e.target.value.replace(/[^0-9]/g, '');
    console.log('Sem formatação: ' + valor);
});

function CPF(){"user_strict";function r(r){for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);var i=t%11;return i=2>i?0:11-i}function t(r){for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);var i=t%11;return i=2>i?0:11-i}var n="CPF Inválido",i="CPF Válido"; this.gera=function(){for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";var o=r(n),a=n+"-"+o+t(n+""+o);return a},this.valida=function(o){for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)return n;var c=r(u),e=t(u+""+c);return f.toString()===c.toString()+e.toString()?i:n}}



   var CPF = new CPF();


$("#cpf").change(function(){
    $("#resposta").html(CPF.valida($(this).val()));
    if(CPF.valida($(this).val()) == "CPF Inválido"){
        $("#resposta").css("background-color", "rgb(250, 0, 0)")
        $("#resposta").css("color", "white")
        $("#resposta").css("text-align", "center")
        $("#resposta").css("padding", "15px")
        $("#resposta").css("border-radius", "10px")
        $("#resposta").css("font-weight", "700")
    }
    else{
        $("#resposta").css("background-color", "rgb(0, 255, 0)")
        $("#resposta").css("color", "white")
        $("#resposta").css("text-align", "center")
        $("#resposta").css("padding", "15px")
        $("#resposta").css("border-radius", "10px")
        $("#resposta").css("font-weight", "700")
    }
});

document.getElementById('cep').addEventListener('input', function(e) {

    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,4})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2];

console.log('Com formatação: ' + e.target.value);

//Caso queira pegar apenas os números use essa função para remover todos os caracteres menos os números em Javascript
let valor = e.target.value.replace(/[^0-9]/g, '');
console.log('Sem formatação: ' + valor);
});

document.getElementById('telefone').addEventListener('input', function(e) {

    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,0})(\d{0,2})(\d{0,5})(\d{0,5})/);
        e.target.value = !x[2] ? x[1] : x[1] + '(' + x[2] + (x[3] ? ')' : '') + x[3] + (x[4] ? '-' + x[4] : '');

    console.log('Com formatação: ' + e.target.value);
    
    //Caso queira pegar apenas os números use essa função para remover todos os caracteres menos os números em Javascript
    let valor = e.target.value.replace(/[^0-9]/g, '');
    console.log('Sem formatação: ' + valor);
});