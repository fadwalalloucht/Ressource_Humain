<?php
include '../includes/header.php';
include '../includes/navbarCandidat.php';
require_once("bd.php");
  require_once("identifiant.php");
$requete = "select * from offre";
  $resultatR=$pdo->query($requete);
?>

<div class="body">
   <div class="title">Postuler à l'Offre <span style="color:rgb(60, 179, 113 )">N°<?php echo $_GET['id_off'] ?></span>
   </div>
   <div class="content">
   <form method="post"  enctype="multipart/form-data" action="postulation.php">
         <div class="user-details">
            <div class="input-box">
               <span class="details" for="">Niveau</span>
               <select name="niveau"  required>
                  <option>Bac</option>
                  <option >Bac+1</option>
                  <option>Bac+2</option>
                  <option>Bac+3</option>
                  <option>Bac+4</option>
                  <option>Bac+5</option>
               </select>
            </div>
            <div class="input-box">
            <input type="hidden" name="offre" placeholder="Entrer le nom de Diplôme" required value="<?php echo $_GET['id_off'] ?>">
               <span class="details">Diplôme</span>
               <input type="text" name="deplome" placeholder="Entrer le nom de Diplôme" required>
            </div>
            <div class="input-box">
               <span class="details">CV</span>
               <input type="file"name="cv" placeholder="" required>
            </div>
            <div class="input-box">
               <span class="details">Lettre de motivation</span>
               <input type="file" name="motivation" placeholder="" required>
            </div>
         </div>
         <div class="button">
            <input type="submit" value="Annuler"
               style="width: 50%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);" onclick="location.href='posteOffre.php'">
            <input type="submit" value="Ajouter" style="width:49%; background-color:rgb(60, 179, 113 ) ;">
         </div>
      </form>
   </div>
</div>


<?php
include '../includes/scripts.php';
?>