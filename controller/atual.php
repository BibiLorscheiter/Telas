<?
  $modulo = Url::getURL( 0 );
  if(!isset($modulo)){ direciona("inicio"); }
  if(file_exists('controller/exec/'.Url::getURL( 0 ).'.php')){
  	 require 'controller/exec/'.Url::getURL( 0 ).'.php';
  }else{
	  $local = explode("_",Url::getURL( 0 ));
	  if(count($local) > 1){
		  if(file_exists('controller/exec/'.str_replace($local[0],"cadastrar",Url::getURL( 0 )).'.php')){
			 require 'controller/exec/cadastrar_'.$local[1].'.php';
		  }  
	  }else{
		  if(file_exists('controller/exec/'.str_replace($local[0],"cadastrar_".$local[0],Url::getURL( 0 )).'.php')){
			 require 'controller/exec/cadastrar_'.$local[0].'.php';
		  }
	  }
  }
?>