function quantiMais(){
    var valor = window.document.getElementById('valor')
    var quanti = window.document.getElementById('quantidad').value
    var valorTot = 85 * quanti
    valor.innerText = 'R$'+valorTot+',00'
    }

