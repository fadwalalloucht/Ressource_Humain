<?php
include '../includes/header.php';
include '../includes/navbar.php';
require_once("bd.php");
 $idemp=isset($_GET['idemp'])?$_GET['idemp']:0;
 $requete="select *from employee where idemp=$idemp";
 $resultat=$pdo->query($requete);
 $employer=$resultat->fetch();
 $nom=$employer['nom'];
 $prenom=$employer['prenom'];
 $poste=$employer['poste'];
 $email=$employer['email'];
 $telephone=$employer['telephone'];
 $departement = $employer['deparetement'];
 
?>

<div class="body">
   <div class="title">Modifier Un Employée</div>
   <div class="content">
      <form method="POST" action="updEmployer.php">
         <div class="user-details">
            <div class="input-box">
               <span class="details">Nom </span>
               <input type="hidden" name="id"  placeholder="id" value="<?php echo $idemp?>">
               <input type="text" name="nom" placeholder="" required value="<?php echo $nom?>">
            </div>
            <div class="input-box">
               <span class="details">Prénom</span>
               <input type="text" name="prenom" placeholder="" required value="<?php echo $prenom?>">
            </div>
            <div class="input-box">
               <span class="details">Email</span>
               <input type="email" name="email" placeholder="" required value="<?php echo $email?>">
            </div>
            <div class="input-box">
               <span class="details">Téléphone</span>
               <input type="number" name="telephone" placeholder="" required value="<?php echo $telephone?>">
            </div>
            <div class="input-box">
               <span class="details">Poste</span>
               <input type="text" name="poste" placeholder="" required value="<?php echo $poste?>">
            </div>
            <div class="input-box">
               <span class="details">Departement </span>
               <input type="text" name="departement" placeholder="" required value="<?php echo $departement?>">
            </div>

         </div>   
            <div class="button">
               <input type="submit" value="Modifier" style="width:49%; background-color:rgb(60, 179, 113) ;">
               <input type="submit" value="Annuler" style="width: 50%;float: right;margin-top:0%;background-color:rgb(255, 0, 0);" onclick="location.href='ListEmploi.php'">
               
            </div>
      </form>
  </div> 
</div>


<?php
include '../includes/scripts.php';
?>