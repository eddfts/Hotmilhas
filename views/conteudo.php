<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas</title>
<link href="../assets/css/table.css" rel="stylesheet">
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />
<script type="text/javascript" src="../assets/js/valida_campos.js"></script>
</head>
<body>
		<?php 
		      include('menu.php');
			  
		if(isset($_SESSION['id_milhas_quantidade']))
		{	   
         	  include_once '../models/milhasSql.php';
         	  include_once '../controllers/Formatacao.calss.php';
		}
         	 
			  $formatarMilhas = new Formatacao;
              $formataMoeda =new Formatacao; 	
         ?> 
        
        
        <?PHP
        #session_start();
		$_SESSION['id_usuario'];
        if(isset($_SESSION['nome_usu_sessao']))
        {
         ?>
            <div class="borda2 padding20" align="center">
            <img src="imagens/tesouro.jpg" width="200">
            <br>
             <br>
                 Aqui é o conteúdo restrito. <a href="logout.php"><strong>Sair</strong></a>
             </div>
          <?PHP
            }
        else
            {
           ?>
            <div class="borda1 padding20">
             <img src="imagens/lock.png" width="200">
            <?PHP
            }
       ?>
        <div align="center">
         <table class="comBordaComplexa" >
          <thead>
           <th>Milhas</th>
           <th>Programa de Fidelidade</th>
           <th>Total a ser Pago</th>
          </thead>
          <tbody>
          
			  <?php        
                    if($linhas == '')
                    {
               ?>
                      <div class="msg2 padding20">Usuário não encontrado ou usuário e senha inválidos.</div>
               <?php
						}
						else
						{
						while($dados=mysqli_fetch_assoc($query))
							{
							
					?>	
                 <tr> 		
							   <?php $formatarMilhas->convertMilhas($dados['quant_milhas_quantidade']); ?>
			    <td>      	   <?php print $formatarMilhas->obterMilhas();?>                               </td>
				<td>      	   <?php print $dados['nome_linha_aerea']; ?>                                  </td>
						   	   <?php $_SESSION['total_pago'] = $dados['valor_total']; $formataMoeda->convertMoeda($dados['valor_total']); ?>
				<td>      	   <?php print 'R$'.$formataMoeda->obterMoeda(); ?>                            </td>
				</tr>				
			  <?php                  
							}
					}
				?>
            
          </tbody>
        </table>
         <?php
			 include_once '../models/contasSql.php';
		 	 if(mysqli_num_rows($query)!=0)
			 {
				
		 ?>
        <form  action="../controllers/cadastrar_transicao.inc.php" name="frmConta" id="frmConta" onsubmit="return valida_campo_conta()" method="post">
         <label for="conta">Conta:</label>
         	<select name="selConta" id="selConta">
	  			<option value=' ' selected='selected'>Selecione a conta...</option>
   			 	<?php
			     	while( $elemento = mysqli_fetch_array($query) )
	 			 	{
	       				$nomeConta= $elemento['conta'];
						$id_conta = $elemento['id_conta']
	 		     ?>
	      		 	<option value='<?php print $id_conta; ?>'><?php print $nomeConta; ?></option>
  				<?php  }
						 }
					?>
     			</select>
        		<input type="submit" name="btnvender" value="Vender"/>
       	</form>
   </div>
   <br>
   <br>
  <hr></hr>
 <small>Copyright &copy; HotMilhas2018</small>
</body>
</html>