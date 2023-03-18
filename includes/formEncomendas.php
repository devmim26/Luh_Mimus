<h1 style="text-align: center; color: black;">Encomenda - Passo à Passo</h1>

<form  method="POST" enctype="multipart/form-data" id="forms" action="../php/salvarEncomenda.php"  style="margin-bottom:  40px;">
  <br><br><br>
  <div id="paraLado">
          <div class="row px-3">
            <label for="qusOne" class="formbold-form-label" style="font-size: 20px; color: black;">
              1º Passo - Quantidade
            </label>

            <div class="formbold-radio-flex">
              <div class="formbold-radio-group">
                <label class="formbold-radio-label" style="font-size: 15px;">
                  <input class="formbold-input-radio" type="radio" name="peso" id="1" value="1">
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
          <div class="row px-3">
            <label for="qusTwo" class="formbold-form-label" style="font-size: 20px; color: black; margin-bottom: 0px;">
              2º Passo - Massa
            </label>
            <select name="massa" id="massa" style="margin: 10px;"> 
              <option value="baunilha">Baunilha (massa branca)</option>
              <option value="chocolate">Chocolate</option>
              <option value="morango">Morango</option>
            </select>
            
          
      
          <div class="row px-3">
            <label class="formbold-form-label-2" for="messageTema" style="font-size: 20px; color: black;">
              4º Passo - Tema
            </label>

            <div class="drag-area" ondrop="upload_file(event)" ondragover="return false" style="margin-bottom: 20px;">

              <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
              <header>Arrastar Arquivo</header>
              <span>ou</span>
              <br>
              <label for="file">Procurar Arquivo</label>
              <input type="file" name="img" id="file" hidden>

            </div>
            <br>
            <label class="formbold-form-label-2" for="messageTema" style="font-size: 15px; color: black;">
              Descreva o tema:
            </label>
            <textarea rows="6" name="tema" id="messageReche" class="formbold-form-input" placeholder="Ex: quero o bolo igual ao das meninas super poderosas"></textarea>
            <script src="../js/uloadoimg.js"></script>
          </div>
          <br><br>
        
          <div class="row mb-3 px-3">
            <button type="submit" class="formbold-btn add-cart" id="btn-form" style="margin-top: 10px;">Prosseguir</button>
          </div>
  </div>
          </form>
          


