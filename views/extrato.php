<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas | Extrato</title>
<link href="../assets/css/table.css" rel="stylesheet">
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />

</head>

<body>
 <div align="center">
         <table class="comBordaComplexa" >
          <thead>
           <th>Nome Conta</th>
           <th>Titular</th>
           <th>Milhas</th>
           <th>Progr. Fidelidade</th>
           <th>Data Prevista</th>
           <th>Data Realizada</th>
           <th>Situação</th>
           <th>Valor Transação</th>
          </thead>
          <tbody>
           
			  <?php 
			       include('menu.php');    
			       include_once '../models/extratoSql.php';
				   include_once '../controllers/Saldo.class.php';
				   $validaSaldo = new Saldo();
				   $totalAprovado = 0;
				   $totalNaoAprovado = 0;
                   
				   if($linhas == '')
                   {
               ?>
                      <div class="msg2 padding20">Não existe 'Nenhuma' transação fincaneira.</div>
               <?php
			        }
					 else
					{
					  while($dados=mysqli_fetch_assoc($query))
					{
				?>			
						  <tr> 
			                <?php $dados['id_transacao']; ?>                
				           <td><?php print $dados['nome_conta']; ?>             </td>
                           <td><?php print $dados['nome_usuario']; ?>           </td>
                           <td><?php print $dados['quant_milhas_quantidade']; ?></td>
                           <td><?php print $dados['nome_linha_aerea']; ?>       </td>
                           <td><?php print $dados['data_prevista_transacao']; ?></td>
                           <td><?php print $dados['data_realizada_transacao']; ?></td>
                               <?php 
							        if($dados['status_transacao']=='N')
									{
										$totalNaoAprovado += $dados['valor_transacao'];
									}
									 else
									 {
										 $totalAprovado += $dados['valor_transacao'];
									 }
									 /*$validaSaldo->verificaValor($dados['valor_transacao'],$dados['status_transacao']);
							      	   $totalAprovado += $validaSaldo->obtemValoAprovado();
								       $totalNaoAprovado += $validaSaldo->obtemValoNaoAprovado();
								  */
						       ?>
                           <td><?php print $dados['status_transacao']; ?>        </td>
  						   <td><?php print number_format($dados['valor_transacao'], 2, ',', '.'); ?>        </td>
                             
                           </tr>
                          
						   									
			  <?php                  
							}
					}
					
				?>
              <tr>  
            <td colspan="6"><font color="#FF0000">Total Valor Pendente</font><td>
            <td><font color="#FF0000"><?php print  number_format($totalNaoAprovado, 2, ',', '.'); ?></font></td>
            </tr>
             <tr>  
            <td colspan="6"><font color="#0000CC">Total Saldo</font><td>
            <td><font color="#0000CC"><?php print  number_format($totalAprovado, 2, ',', '.'); ?></font></td>
            </tr>
          </tbody>
        </table>
        
        
</body>
</html>