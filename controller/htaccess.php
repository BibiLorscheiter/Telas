<?php
	class Url
	{
		private static $url = null;
		
		public static function retornaId($id){
			  if(!intval($id) && !empty($id)){
			  $seguranca = array( 
			  "a" => 0,
			  "b" => 1,
			  "c" => 2,
			  "d" => 3,
			  "e" => 4,
			  "f" => 5,
			  "g" => 6,
			  "h" => 7,
			  "i" => 8,
			  "j" => 9
			  );
			  $total = array();
			  $give  = array();
			  if(isset($id)){ 
				$i   = 0;
				$aux = 0;
				while(strlen($id) != $i){
					$total[$i] = substr($id,$i,$aux + 1).',';
					$i++;	
				}
			  }
			  $i      = 0;
			  while(count($total) != $i){
				  $give[$i] = $seguranca[substr($total[$i],0,1)];
				  $i++;
			  }
				  
			  $ide    = array();
			  $ide[0] = NULL;
			  $i      = 0;
			  
			  while(count($give) != $i){
				  
				  $ide[0] = $ide[0].$give[$i];
				  
				  $i++;
				  
			  }
			  
			  return $ide[0];
			  }else{
			  direciona(Url::getURL( 0 ));
			  }
			
		  }		
		public static function transformaId($id){
			  if(intval($id) && !empty($id)){
		 	  $seguranca = array( 
			  0 => "a",
			  1 => "b",
			  2 => "c",
			  3 => "d",
			  4 => "e",
			  5 => "f",
			  6 => "g",
			  7 => "h",
			  8 => "i",
			  9 => "j"
			  );
			  $total = array();
			  $give  = array();
			  if(isset($id)){ 
				$i   = 0;
				$aux = 0;
				while(strlen($id) != $i){
					$total[$i] = substr($id,$i,$aux + 1).',';
					$i++;	
				}
			  }
			  $i      = 0;
			  while(count($total) != $i){
				  $give[$i] = $seguranca[substr($total[$i],0,1)];
				  $i++;
			  }
				  
			  $ide    = array();
			  $ide[0] = NULL;
			  $i      = 0;
			  
			  while(count($give) != $i){
				  
				  $ide[0] = $ide[0].$give[$i];
				  
				  $i++;
				  
			  }
			  
			  return $ide[0];
			  
			  }else{
			  direciona(Url::getURL( 0 ));
			  }
			
		}
		public static function getBase()
		{
			global $_SERVER;
			$startUrl = strlen( $_SERVER["DOCUMENT_ROOT"] );
			$excludeUrl = substr( $_SERVER["SCRIPT_FILENAME"], $startUrl, -9 );
			if( $excludeUrl[0] == "/" )
				return $excludeUrl; 
			else
				return "/" . $excludeUrl;
		}
	
		public static function getURL( $id )
		{
			// Verifica se a lista de URL já foi preenchida
			if( self::$url == null )
				self::getURLList();
			
			// Valida se existe o ID informado e retorna.
			if( isset( self::$url[ $id ] ) )
				return self::$url[ $id ];
			
			// Caso não exista o ID, retorna nulo
			return null;
		}
		
		private static function getURLList()
		{
			global $_SERVER;
			
			// Primeiro traz todos as pastas abaixo do index.php
			$startUrl = strlen( $_SERVER["DOCUMENT_ROOT"] ) -1;
			$excludeUrl = substr( $_SERVER["SCRIPT_FILENAME"], $startUrl, -10 );
			
			// a variável$request possui toda a string da URL após o domínio.
			$request = $_SERVER['REQUEST_URI'];
			
			// Agora retira toda as pastas abaixo da pasta raiz
			$request = substr( $request, strlen( $excludeUrl ) );
			
			// Explode a URL para pegar retirar tudo após o ?
			$urlTmp = explode("?", $request);
			$request = $urlTmp[ 0 ];
			
			// Explo a URL para pegar cada uma das partes da URL
			$urlExplodida = explode("/", $request);
			
			$retorna = array();
	
			for($a = 0; $a <= count($urlExplodida); $a ++)
			{
				if(isset($urlExplodida[$a]) AND $urlExplodida[$a] != "")
				{
					array_push($retorna, $urlExplodida[$a]);
				}
			}
			self::$url = $retorna;
		}
	}
?>