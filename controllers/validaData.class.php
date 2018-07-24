<?php
    
	class validaData{
		public $data;
		public $dataFinal;
		public $tipoDt;
	    
	   
	   
	   function __construct($data,$tipoDt){
		   $this->data = $data;
		   $this->tipoDt =	$tipoDt;   
		   
		   //chamada do método da classe
		   $this->DataValidacao($data,$tipoDt);
	   }
	
       function DataValidacao($data,$tipoDt){
		   		$dtFatiada = explode("/", $data);
				$d = $dtFatiada[0];
				$m = $dtFatiada[1];
				$y = $dtFatiada[2];
				
				$dt = checkdate($m, $d, $y);
				if($dt == 1 ){
					$data = explode("/", $data);
					list($dia,$mes,$ano) = $data;
					$this->dataFinal = "{$ano}-{$mes}-{$dia}";
				}else{// $dt == 0 corresponde uma data inválida
					if($tipoDt == "i"){
						$this->dataFinal ="0001-01-01";
					}else{// $tipoDt == "f" corresponde a data fim
						 $this->dataFinal ="9999-12-31";
						}
			   }
			   
	  }
	  
	  function ObterDataFinal(){
		  
		  return $this->dataFinal;
	  }
	}
	
	  /*$dataInicioObj = new validaData("15/02/2006", "i");
	  print $dataInicioObj->ObterDataFinal();
	  $dataInicioObj = new validaData("31/12/2010", "f");
	  print $dataInicioObj->ObterDataFinal();*/
	

?>