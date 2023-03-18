var  formaPagamento =  window.document.getElementById('formaPagamento')

var fundoPreto = window.document.getElementById('fundoPreto')

var troco1 = window.document.getElementById('troco')

var valorTroco = window.document.getElementById('valorTroco')

function fecha(){
    formaPagamento.style.display = 'none'
    troco1.style.display = 'none'
    fundoPreto.style.display = 'none'
}

function pagamento(){
    formaPagamento.style.display = 'block'
    fundoPreto.style.display = 'block'
}

function dinheiro(){
    formaPagamento.style.display = 'none'
    troco1.style.display = 'block'
}

function troco(){
    var valorEmMao = window.document.getElementById('valorEmMao').value

    var trocoTotal = window.document.getElementById('trocoTotal')

    var escolher = window.document.getElementById('escolher')

    escolher.innerText = 'Dinheiro'
    trocoTotal.innerText = 'R$ '+valorEmMao
    valorTroco.style.display = 'block'
    troco1.style.display = 'none'
    fundoPreto.style.display = 'none'
}

function cartao(){
    var escolher = window.document.getElementById('escolher')

    escolher.innerText = 'Cartão'
    valorTroco.style.display = 'none'
    formaPagamento.style.display = 'none'
    fundoPreto.style.display = 'none'
}