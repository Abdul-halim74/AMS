<?php session_start();?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    
    <link href="../css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css" integrity="sha384-QokYePQSOwpBDuhlHOsX0ymF6R/vLk/UQVz3WHa6wygxI5oGTmDTv8wahFOSspdm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/regular.css" integrity="sha384-FKw7x8fCxuvzBwOJmhTJJsKzBl8dnN9e2R4+pXRfYoHivikuHkzWyhKWDSMcGNK8" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/brands.css" integrity="sha384-n9+6/aSqa9lBidZMRCQHTHKJscPq6NW4pCQBiMmHdUCvPN8ZOg2zJJTkC7WIezWv" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">

    <!-- color CSS -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
   <style type="text/css">
	   #side-menu>li>a {
		padding: 10px 5px;
		display: block;
	}
	span{
		font-size:20px;
		margin-left:40px;
	}
   
   </style>
</head>

<body class="fix-header">
  
    <div id="wrapper">
 
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
        
		<h1 class="logo">AMS </h1>					
                </div>  
				<h2 style="color:#fff; margin-left:30%;">Attendance Management System</h2>
            </div>
        </nav>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
					
			   </div>
                <ul class="nav" id="side-menu">
				<li style="padding: 70px 0 0;">
                        <a href="?" class="waves-effect"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> &nbsp;Dashboard</a>
                    </li>
                   
					<li >
                        <a href="?page=indidual-view-attendance" class="waves-effect"><i class="fas fa-user-clock"></i> &nbsp;Individual View Attendance</a>
                    </li>
					<li >
                        <a href="?page=total-attendance-each-student" class="waves-effect"><i class="fas fa-user-clock"></i> &nbsp;View Attendance Each Student</a>
                    </li>
                </ul>

            </div>
            
        </div>