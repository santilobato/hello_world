<html>
	<head>
		<title>ChatTerra</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>

		<h1><center><font color="891E1E">Meeting</font></center></h1>
		<hr>
		<br>
		<center><font size=+1>
							<table cellpadding="10" bgcolor="B9D3EE">
								<form action="calcula.php" method="post">
								<tr>
									<td>Mensaje:<input type="text" name="numA" placeholder="..." value"<?php echo $a;?>/></td>
									
								</tr>

			
							</table>

	

		  <p> <input type="submit" value="+" name="mas"/>
				<input type="submit" value="-" name="menos"/>
				<input type="submit" value="*" name="multi"/>
				<input type="submit" value="/" name="divi"/>
				<input type="submit" value="%" name="porce"/></p>
		</form>

	</body>
</html>

<?php

	$a = $_POST['numA'];
	$b = $_POST['numB'];

	if($_POST['mas']) {
		$simb = "+";
		$resultado = $a + $b;
		echo  "$a"."$simb"."$b"."="."$resultado" ;
		if($resultado>0){
			for($i=0;$i<$resultado;$i++){
					echo " *";
			}
		}
		else if($resultado<0){
			for($i=0;$i>$resultado;$i--){
				echo "<font color='#E21010'> *</font>";
			}
		}

		
		}
