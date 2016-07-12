<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMC</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/imc.css" rel="stylesheet">
     <link href="css/responsivo.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
<?php
include 'includes/header.php';
?>
<div class="container conteudo">

<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 'about';
}
include 'pages/'.$page.'.php';
?>

</div>
<?php
include 'includes/footer.php';


?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     
  
  </body>

</html>







