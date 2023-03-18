<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../css/styleencomendar.css" rel="stylesheet">
    <title>Formulário de compra</title>
</head>
<body>

    <form action="../php/salvar1.php" method="POST">
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" name="nome" class="form-control" id="nome">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Número de telefone</label>
            <input type="text" name="numero" class="form-control" id="telefone">
        </div>

        <div class="mb-3">
            <label for="qusOne" class="form-label">
              Quantidade
            </label>

            <div class="formbold-radio-flex">
              <div class="formbold-radio-group">
                <label class="formbold-radio-label" style="font-size: 15px;">
                  <input class="formbold-input-radio" type="radio" name="peso" id="1" value="1" checked>
                  1KG
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>

              <div class="formbold-radio-group">
                <label class="formbold-radio-label" style="font-size: 15px;">
                  <input class="formbold-input-radio" type="radio" name="peso" id="2" value="2">
                  2KG
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>

              <div class="formbold-radio-group">
                <label class="formbold-radio-label" style="font-size: 15px;">
                  <input class="formbold-input-radio" type="radio" name="peso" id="3" value="3">
                  3KG
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>

              <div class="formbold-radio-group">
                <label class="formbold-radio-label" style="font-size: 15px;">
                  <input class="formbold-input-radio" type="radio" name="peso" id="4" value="4">
                  4Kg
                  <span class="formbold-radio-checkmark"></span>
                </label>
              </div>
            </div>
        </div>
            <div class="mb-3">
                <label class="form-label">
                    Massa
                </label>
                <br>
                <select class="form-control"  name="massa">
                    <option>Baunilha(massa Branca)</option>
                    <option>Chocolate</option>
                    <option>Morango</option>
                  </select>
            </div>


        <label class="formbold-form-label-2" for="messageTema" style="font-size: 15px; color: black;">
              Descreva o tema:
            </label>
            <textarea name="tema" id="messageReche" class="formbold-form-input" placeholder="Ex: Quero o bolo igual ao das meninas super poderosas" rows="6"></textarea>
        </div>
        <button class="btn btn-success">Enviar</button>
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
        document.getElementById('telefone').addEventListener('input', function(e) {

            let x = e.target.value.replace(/\D/g, '').match(/(\d{0,0})(\d{0,2})(\d{0,5})(\d{0,5})/);
                e.target.value = !x[2] ? x[1] : x[1] + '(' + x[2] + (x[3] ? ')' : '') + x[3] + (x[4] ? '-' + x[4] : '');

            console.log('Com formatação: ' + e.target.value);

            //Caso queira pegar apenas os números use essa função para remover todos os caracteres menos os números em Javascript
            let valor = e.target.value.replace(/[^0-9]/g, '');
            console.log('Sem formatação: ' + valor);
});
    </script>
</html>