<!DOCTYPE html>
<html>	

<head>
		<meta charset="UTF-8">
		<title>Siga</title>
		
</head>

<body>
			<h1>Hola mundo</h1>

			<?php 
						$vueltas = 10;
						$pares=0;
						$impares=0;

						for ($i=0;$i<$vueltas;$i++) { 
							
							$numero = rand(0,10);
							if ($numero%2 == 0) {
								$pares +=1;
							}

							else
								$impares+=1;
						}


							echo "Hay $pares pares y $impares impares";

			?>


</body>


</html>


