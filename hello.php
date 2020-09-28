<!DOCTYPE html>
<html>
<head>
	<title>class 4 </title>
	<style type="text/css">
		header{
			background-color: lightgrey;
			padding : 50px;
			text-align: center; 
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?=  "Hello " . htmlspecialchars($_GET['name']); ?> 		
		</h1>
	</header>
</body>
</html>