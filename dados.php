<!DOCTYPE html>
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
  <head>
    <!--the must have tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!--the must have assets-->
      <link rel="stylesheet" href="css/main.css">
       <script src="js/main.js" defer></script>
    <!--page title-->
      <link rel="icon" href="img/6001icone.ico" type="image/x-icon" />
	    <link rel="shortcut icon" type="img/x-icon" href="./icone.ico">
    <title>De.Bugger</title>
  </head>
  <body>
      <main>
      <?php echo "Olá, " . $_SESSION['usuarioNome']; ?>
      
      </main>
  </body>
  <div class="js-overlay js-close-navigation js-close-menu overlay"></div>
</html>