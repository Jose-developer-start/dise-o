<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style>
		input{
			height: 100px;
			width: 500px;
		}
	</style>

	<form action="data.php" method="POST" enctype="multipart/form-data">
		<input name="pdf" type="file">
		<input type="submit">
	</form>
	
</body>
</html>