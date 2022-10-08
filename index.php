<?php

	if(isset($_POST['acao'])){
		$pais = $_POST['pais'];
		$pais = date_default_timezone_set('America/Los_Angeles');
				if ($_POST['pais'] == 'Los Angeles'){
					$pais = date('d/m/Y H:i:s');
					echo $pais;
				}
				if($_POST['pais'] == 'Brasil'){
					$pais = date_default_timezone_set('America/Sao_Paulo');
					$pais = date('d/m/Y H:i:s');
					echo $pais;
				}
				if ($_POST['pais'] == 'Japão'){
					$pais = date_default_timezone_set('Asia/Tokyo');
					$pais = date('d/m/Y H:i:s');
					echo $pais;
				}
				if ($_POST['pais'] == 'Russia'){
					$pais = date_default_timezone_set('Europe/Moscow');
					$pais = date('d/m/Y H:i:s');
					echo $pais;
				}
				if ($_POST['pais'] == 'Alemanha'){
					$pais = date_default_timezone_set('Europe/Berlin');
					$pais = date('d/m/Y H:i:s');
					echo $pais;
				}

	}else{
		echo 'Informe um pais válido!';
	}

?> 
<form method="post">
	<input type="text" name="pais">
	<input type="submit" name="acao" value="Enviar">
	
</form>