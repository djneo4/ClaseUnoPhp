<!DOCTYPE html>
<html>	

<head>
		<meta charset="UTF-8">
		<title>Siga</title>
		
</head>

<body>
			<h1>Hola mundo</h1>

			<?php 
						$vueltas=100;
						$pares=0;
						$impares=0;

						$uno=0;
						$dos=0;
						$tres=0;
						$cuatro=0;
						$cinco=0;
						$seis =0;
						$siete=0;
						$ocho=0;
						$nueve=0;
						$diez=0;


						for ($i=0;$i<$vueltas;$i++) { 
							
							$numero = rand(1,10);
							if ($numero%2 == 0) {
								$pares +=1;
							}

							else
								$impares+=1;

							switch ($numero) {
								case 1:$uno +=1;
									# code...
									break;
								case 2:$dos +=1;
									# code...
									break;
								case 3:$tres +=1;
									# code...
									break;
								case 4:$cuatro +=1;
									# code...
									break;
								case 5:$cinco +=1;
									# code...
									break;
								case 6:$seis +=1;
									# code...
									break;
								case 7:
									$p=($siete/$vueltas)*100; 
										if($p >= 5)
											continue;
										else
											$siete +=1;
									# code...
									break;
								case 8:$ocho +=1;
									# code...
									break;
								case 9:$nueve +=1;
									# code...
									break;
								case 10:$diez +=1;
									# code...
									break;
								
								default:
									# code...
									break;


							}

						}

						$uno = ($uno/$vueltas)*100;
						$dos = ($dos/$vueltas)*100;
						$tres = ($tres/$vueltas)*100;
						$cuatro = ($cuatro/$vueltas)*100;
						$cinco = ($cinco/$vueltas)*100;
						$seis = ($seis/$vueltas)*100;
						$siete = ($siete/$vueltas)*100;
						$ocho = ($ocho/$vueltas)*100;
						$nueve = ($nueve/$vueltas)*100;
						$diez = ($diez/$vueltas)*100;

							echo "Hay $pares pares y $impares impares<br><br>";
							echo "Uno salio : $uno %<br> Dos salio $dos %<br> tres salio $tres %<br> Cuatro salio $cuatro %<br> Cinco salio $cinco %<br> Seis salio $seis %<br> siete salio $siete %<br> ocho salio $ocho %<br>nueve salio $nueve %<br>diez salio $diez %" ;
			?>


</body>


</html>


