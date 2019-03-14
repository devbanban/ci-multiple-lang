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
	<p><a href="<?php echo site_url('home/th');?>"> thai </a></p>
	<p><a href="<?php echo site_url('home/en');?>"> eng </a></p>
	<h1><?=$this->lang->line("content"); ?></h1>



	

</body>
</html>