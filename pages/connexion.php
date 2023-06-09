
<?php
session_start();
if(isset($_SESSION['erreurLogin']))
    $erreurLogin=$_SESSION['erreurLogin'];
else{
    $erreurLogin="";
}
session_destroy();
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Rresources Humaines |RH </title>
    <link rel="shortcut icon" href="../images/rs.png" type="image/x-icon">
    <link rel="shortcut icon" href="../MiniProjt/images/rs.png" type="image/x-icon">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="../css/styleinscription.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Connexion</div>
    <div class="content">
      <form method="post" action="seconnecter.php">
      <?php if(!empty($erreurLogin)) {?> 
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        swal.fire({
         icon: 'error',
         title: 'Erreur!!...',
         text:  '<?php echo $erreurLogin; ?>',
         })
         </script>     
        <?php } ?> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Entrer votre email" required style="width: 213%;">
          </div>
          <div class="input-box">
          </div>
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="password" name="motdepasse" placeholder="Entrer votre Mot de passe" required style="width: 213%;">
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Connexion" style="background-color:rgba(86, 16, 157);">
        </div>
        <p style="margin-top: -3%; text-align: center;">vous n'avez pas un compte? <a href="../pages/inscriptionEmployee.php" style="color:rgb(86, 16, 157); cursor: pointer;">S'incrire</a>
      </form>
    </div>
  </div>

</body>
</html>
