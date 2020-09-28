<!DOCTYPE html>
<html>
<head>
	<title>class 4 </title>
	<style type="text/css">
		li{
			font-size: 30px;
		}
	</style>
</head>
<body>
	<ul>
		<?php  foreach($tasks as $task) : ?>
		  <li>
		  	<?php if($task->isComplete()) : ?>
    		   <strike>
	    		   <?= $task->description ?>    		   	
    		   </strike>
    		<?php else : ?>
			   <?= $task->description ?>
    		<?php endif ?>   				
		  </li>
		<?php  endforeach ?>
	</ul>
</body>
</html>