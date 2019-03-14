<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<h1>Welcome to CodeIgniter!</h1>
	<p><a href="?lang=th"> thai </a></p>
	<p><a href="?lang=en"> eng </a></p>

	<?php 

	// echo lang('nav_home');
	// echo '<hr>';
	// //echo $name['name_'.$language]; 
	// echo '<hr>';
	//echo $mails;

	foreach ($mails as $value) {
		 echo $value['content_'.$language];
		 echo "<hr>";
	}
	
	?>
	 

	

</body>
</html>