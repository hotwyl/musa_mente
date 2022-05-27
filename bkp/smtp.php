<?php
//if(mysql_stat() == ""){	abreConexao253();	}
abreConexao253();
$executa = mysql_query("select * from econetfin.ip_email_tb");
if($executa && mysql_num_rows($executa) > 0){
	$dados_smtp = mysql_fetch_array($executa);
	$host_email = $dados_smtp["host"];		$usuario_email = $dados_smtp["username"];	$senha_email = $dados_smtp["senha"];		
	if($dados_smtp["autentica"] == "true"){	$autentica_email = true;	}else{	$autentica_email = false;	}
}else{
	$host_email = "localhost";//192.168.0.250";		
	$usuario_email = "noby";//noreply@econeteditora.com.br";
	$senha_email = "113eeac34f";//113EEAC34F*2010";	
	$autentica_email = false;//true;
}
?>