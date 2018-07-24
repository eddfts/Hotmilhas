<?php
     class Saldo
	 {
		private $valorAprovado;
		private $valorNaoAprovado;
		private $situcacao;
		
		 
		function verificaValor($valor,$situacao)
		{
		  if($situacao =='N')
		  {
		    $this->valorNaoAprovado = $valor;
		  }
		   elseif($situacao =='S')
		   {
		    $this->valorAprovado = $valor;
		   }
	  
		
		 
	 }
	 function obtemValoAprovado()
	 {
	   return $this->valorAprovado;
	 }
      function obtemValoNaoAprovado()
	 {
	   return $this->valorNaoAprovado;
	 }
} 

/*$validaSaldo = new Saldo();
$totalAprovado = 0; $totalNaoAprovado = 0;
for ($i = 0;$i<10; $i++ ){
	
	$validaSaldo->verificaValor(1,'N');
	$validaSaldo->verificaValor(3,'S');
	
	$totalAprovado += $validaSaldo->obtemValoAprovado();
	//print 'Valor Não Aprovado'.$validaSaldo->obtemValoNaoAprovado();
	$totalNaoAprovado += $validaSaldo->obtemValoNaoAprovado();
}
print $totalAprovado.'<br>';
print $totalNaoAprovado;
*/
?>