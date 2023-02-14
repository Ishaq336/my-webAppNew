<!DOCTYPE html>
<html lang="en"> 
<head>

     <title><?php  
     
     if(empty($page_title)):
         echo 'NPS';
         else:
        echo $page_title;
     endif; 
     ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <base href="<?php echo base_url();?>">
    <meta name="description" content="Examination Management System">
		<meta name="keywords" content="Examination Management System">
		<meta name="author" content="Examination Management System">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery UI -->
		<link rel="stylesheet" href="css/jquery-ui.css"> 
		<!-- jQuery Gritter -->
		<link rel="stylesheet" href="css/jquery.gritter.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Widgets stylesheet -->
		<link href="css/widgets.css" rel="stylesheet">   

		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>   
 
<body class="home-page">
      <div class="wrapper">