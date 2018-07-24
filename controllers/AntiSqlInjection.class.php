<?php

	class AntiSqlInjection
	{
		private $string;
		
		function AplicarSqlInjection($string)
		{
		 include('../models/conexao.php');
		 $this->string = stripslashes($string);
		 $this->string = strip_tags($string);
		 $this->string = mysqli_real_escape_string($con,$string);
		}
		
		function ObterString(){
			return $this->string; 
		}
		 
	}

/*teste classe
 $sqlInjection = new AntiSqlInjection;
 $sqlInjection->AplicarSqlInjection('Eduardo'); 
 print $sqlInjection->ObterString();
 */
 
?>