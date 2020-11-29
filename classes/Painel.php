<?php
class Painel
{
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }
    
    public static function alert($tipo,$mensagem){
		if($tipo == 'sucesso'){
			echo '<div class="box-alert sucesso"><i class="fa fa-check"></i> '.$mensagem.'</div>';
		}else if($tipo == 'erro'){
			echo '<div class="box-alert erro"><i class="fa fa-times"></i> '.$mensagem.'</div>';
		}
	}
}
?>