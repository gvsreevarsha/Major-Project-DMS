<!DOCTYPE html>
<html>
<head>
    <title>DMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
body{  
  font-family: Calibri, Helvetica, sans-serif; 
	 
 
}  
.rstbtn{margin-left:200px;}

.changepwdbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer; 
margin-left:400px;  
    
}  
.changepwdbtn:hover {  
   
}  
 
        #mySidenav {
            position: absolute;
            left: -270px;
            transition: 0.3s; 
            padding: 15px; 
            width: 300px;
            text-decoration: none; 
            font-size: 20px; 
            border-radius: 0 5px 5px 0; 
        }

        #mySidenav:hover {
            left: 0;
            z-index: 100;
        }
        .content{
            margin-left: 5%;
        }
        .menu:hover{
            background-color: red;
        }
        .menu{
            background-color: #FF8C00;
        }
        .search{
            background-color: #FF4500;
            border: #FF4500;
        }
        .search:hover{
            background-color: red; 
            border: red;
        }
        .search:focus{
            background-color: red; 
            border: red;
        }

        .hovered:hover{
            color:red;
        }
        .search:focus{
            background-color: red; 
            border: red;
        }
        .hovered:focus{
            color:red;
        }
        .menuitem{
            text-decoration: none;
            color: black;
        }
        .menuitem:hover{
            text-decoration: none;
            color: black;
            background-color: #D3D3D3;
        }
        .menuiteml:hover{
            text-decoration: none;
            color: black;
            background-color: #D3D3D3;
        }
    </style>
</head>
<?php require 'top.php'?>
<body style="background-color: #fed8b1;">
    <div class="container-fluid">
        <div class="row">
            <div id="mySidenav"><?php require 'Sidebar.php'?></div>
            <div class="content container row">
                <div class="row p-2">&nbsp;&emsp;</div>