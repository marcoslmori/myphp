<!mensagem de erro - a pagina de myphp nao está funcionando !>
<!posição 417-477 kindle !>

<?php

        function linha($semana)
	{
                echo "
                        <tr>
                        <td>{$semana[0]}</td>
                        <td>{$semana[1]}</td>
                        <td>{$semana[2]}</td>
                        <td>{$semana[3]}</td>
                        <td>{$semana[4]}</td>
                        <td>{$semana[5]}</td>
                        <td>{$semana[6]}</td>
                        </tr>
                ";
        
	}


	function calendario()
	{
		$dia = 1;
		$semana = array();
		while  ($dia <= 31) {
			array_push($semana, $dia);
			
				if (count($semana) == 7) {
					linha($semana);
					semana = array();
				}
				$dia++;
		}
	}	
 ?>


<table  border="1">
	<tr>
		<th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
	</tr>
	<?php calendario();  ?>
</table>
