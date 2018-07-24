<?php
	class Formatacao
	{
	  private $milhas;
	  private $moeda;
	  
	  function convertMilhas($milhas)
	  {
		  $this->milhas = number_format($milhas,0,',','.'); 
	  }
	  
	  function convertMoeda($moeda)
	  {
	    $this->moeda = number_format($moeda,2,',','.');
	  }
	  	  
	  function obterMilhas()
	  {
		  return $this->milhas;
	  } 
	  function obterMoeda()
	  {
	     return $this->moeda;
	  }
	  
	
	}
	
//teste
/*	$formatarMilhas = new Formatacao;
 *	$formatarMilhas->convertMilhas(10000);
 *	print $formatarMilhas->obterMilhas();
 */
?>