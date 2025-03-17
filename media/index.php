<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title> Media Aluno </Title>
	</head>
	<body>
	<fieldset>
		<legend> Media Aluno </legend>
		<form method="post" action = "calcular.php">
		Digite as 4 notas para saber se está aprovado ou não:
		<br />
		<br />
		<input type = "text" name = "$n1" size = "25" /> <br />
		<br />
        <input type = "text" name = "$n2" size = "25" /> <br />
		<br />
        <input type = "text" name = "$n3" size = "25" /> <br />
		<br />
        <input type = "text" name = "$n4" size = "25" /> <br />
		<br />
		<br />
		<input type = "submit" name = "$media" value = "Verificar" />
		
		</form>
	</fieldset>
	</body>
	</html>