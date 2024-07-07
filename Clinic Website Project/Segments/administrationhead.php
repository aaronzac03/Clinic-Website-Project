<!DOCTYPE html>
<html>
   <head>
      <title>Clinic Website</title>
      <meta charset='utf-8'/>
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
      <script>
         $('#form1').validate();
      </script>
   </head>
   <body class="loginpage">
      <header>
         <?php 
            require_once("Segments/halfnav.php")
            ?>
      </header>