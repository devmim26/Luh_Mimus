<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Baixar Relatório</title>
	<script src="../resources/js/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../resources/css/dashboard.css">
    <link rel="stylesheet" href="../resources/css/financas.css">
	<link rel="stylesheet" href="../resources/css/financas2.css">
    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/iconly/bold.css">
    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <style>
      #invoice{
        margin-left: auto;
        margin-right: auto;
        background-color: #ffeaef;
		padding-top: 80px;
		padding-bottom: 80px;
      }
	  #bpdf{
		  background-color: #000; 
		  text-decoration: none; 
		  color: #fff; 
		  padding: 10px; 
		  border-radius: 20px;
		  position: absolute;
		  top: 4%;
		  left: 4%;
	  }
      
    </style>

</head>
<body>
	
	<a href="financas.php" style="color: #fff; background-color: #000; border-radius: 100%; padding: 7px 12px 7px 12px; top: 4.5%; left: 0.3%; position: absolute;">
		<
	</a>
	<a href="javascript:void(0)" id="bpdf" class="btn-download" onclick="desaparece()">Baixar Relatório</a>

<div id="invoice">
<div class="row" id="basic-table">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lucro bruto
                                </h4>
                                
                            </div>
                             <!-- Modal Body-->
                             <div class="modal fade" id="modalId1" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <form action="salvar_lucro.php" method="POST">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">Adicionar Lucro</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Tipo de Lucro</label>

                                                                <select class="form-select" name="nome_lucro" id="nome_lucro" aria-label="Default select example">
                                                                <option value="Pedido" selected>Pedido</option>
                                                                <option value="Encomenda">Encomenda</option>
                                                                </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Valor</label>
                                                            <input type="text" class="form-control" name="valor_lucro" id="valor_lucro"
                                                                aria-describedby="emailHelpId" placeholder="ex: 30,00">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-dark">Salvar</button>
                                                </div>
                                            </div>
</form>
                                        </div>
                                </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Tipo de Lucro</th>
                                                    <th style="width: 100px;">Valor</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include "../../config/conn_mySQLI.php";
                                                $todosLucros = $sql->query("SELECT * FROM lucro_bruto");
                                                $totalBruto = $sql->query("SELECT SUM(valor) AS 'total' FROM lucro_bruto");
                                                $totalLucro = mysqli_fetch_array($totalBruto);
                                                $total_bruto0 = $totalLucro['total'];
                                                $total_bruto = str_replace(".",",", $total_bruto0);
                                                
                                                
                                                while($despesas = mysqli_fetch_array($todosLucros)) {
                                                    $idDoLucro = $despesas['id'];
                                                    $nomeDoLucro = $despesas['tipo_lucro'];
                                                    $valorDoLucro0 = $despesas['valor'];
                                                    $valorDoLucro = str_replace(".",",", $valorDoLucro0);
                                                    

                                                echo "
                                                
                                                <tr>
                                                <td style='text-align: center;'>$nomeDoLucro</td>
                                                    
                                                <td style='text-align: center;'>R$&nbsp;$valorDoLucro</td>
                                                

                                                </tr>";}

                                                echo "
                                                <br>
                                                <tr>
                                                <td style='font-size: 20px'>Total</td>
                                                
                                                <td>R$ $total_bruto</td>

                                                </tr>"
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Saldo Final</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <th scope="row" class="table-name">Total</th>
                                                    <td>R$ <?php 
                                                        include "../../config/conn_mySQLI.php";
                                                        $todasDespesas = $sql->query("SELECT * FROM despesas");
                                                        $total = $sql->query("SELECT SUM(valor_despesas) AS 'total' FROM despesas");
                                                        $totalDespesas = mysqli_fetch_array($total);
                                                        $total_despesas0 = $totalDespesas['total'];
                                                        $total_despesas = str_replace(".",",", $total_despesas0);

                                                        $todosLucros = $sql->query("SELECT * FROM lucro_bruto");
                                                        $totalBruto = $sql->query("SELECT SUM(valor) AS 'total' FROM lucro_bruto");
                                                        $totalLucro = mysqli_fetch_array($totalBruto);
                                                        $total_bruto0 = $totalLucro['total'];
                                                        $total_bruto = str_replace(".",",", $total_bruto0);
                                                        
														$totalInves = $sql->query("SELECT * FROM investimento WHERE id_inves ORDER BY id_inves DESC limit 1");
														while($totInves = mysqli_fetch_array($totalInves)){
														$totInves2 = $totInves['investimento_valor'];
														$totInves3 = str_replace(".",",", $totInves2);
														
                                                        $saldo_final = (float)$total_bruto0 - ((float)$totInves2 + (float)$total_despesas0);
                                                        echo (float)$saldo_final;}
                                                    ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Despesas fixas
                                </h4>  
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Nome</th>
                                                    <th style="width: 100px;">Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                include "../../config/conn_mySQLI.php";
                                                $todasDespesas = $sql->query("SELECT * FROM despesas");
                                                $total = $sql->query("SELECT SUM(valor_despesas) AS 'total' FROM despesas");
                                                $totalDespesas = mysqli_fetch_array($total);
                                                $total_despesas0 = $totalDespesas['total'];
                                                $total_despesas = str_replace(".",",", $total_despesas0);
                                                
                                                
                                                while($despesas = mysqli_fetch_array($todasDespesas)) {
                                                    $idDaDespesa = $despesas['id_despesas'];
                                                    $nomeDaDespesa = $despesas['nome_despesas'];
                                                    $valorDaDespesa0 = $despesas['valor_despesas'];
                                                    $valorDaDespesa = str_replace(".",",", $valorDaDespesa0);
                                            

                                                echo "
                                                
                                                <tr>
                                                <td style='text-align: center;'>$nomeDaDespesa</td>
                                                    
                                                <td style='text-align: center;'>R$&nbsp;$valorDaDespesa</td>
                                                

                                                </tr>";}

                                                echo "<tr>
                                                <td style='font-size: 20px'>Total</td>
                                                        <td>R$ $total_despesas</td>

                                                </tr>"
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Investimento total </h4>
                            </div>
                        </div>
                    
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">  
                                <form action="salvar_investimento.php" method="POST">
                                <div class="mb-3">
                                  <?php 
											include "../../config/conn_mySQLI.php";
											$totalInves = $sql->query("SELECT * FROM investimento WHERE id_inves ORDER BY id_inves DESC limit 1");
											while($totInves = mysqli_fetch_array($totalInves)){
												$totInves2 = $totInves['investimento_valor'];
                                                $totInves3 = str_replace(".",",", $totInves2);
												echo"R$ $totInves3";
											};
											
											?> 
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
</div>




<script src="../resources/js/jspdf.debug.js"></script>
<script src="../resources/js/html2canvas.min.js"></script>
<script src="../resources/js/html2pdf.min.js"></script>


<script>
	function desaparece(){
		var bpdf = window.document.getElementById('bpdf')
		var pdf = window.document.getElementById('invoice')
		pdf.style.display = 'block'
		bpdf.style.display = 'none'
		alert('O preparo do Relatório pode levar algum tempo, então aguarde até o início do dawnload')
	}
    const options = {
      margin: [0, 0, 0, 0],
      filename: 'Relatório_<?php $hoje = new DateTime(); echo $hoje->format('d_m_Y);?>',
      image: { 
        type: 'png', 
        quality: 500
      },
      html2canvas: { 
        scale: 8
      },
      jsPDF: { 
        unit: 'in',
        format: 'a4', 
        orientation: 'portrait'
      }
    }
    
    $('.btn-download').click(function(e){
      e.preventDefault();
      const element = document.getElementById('invoice');
      html2pdf().from(element).set(options).save();
    });


    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>



</body>
</html>