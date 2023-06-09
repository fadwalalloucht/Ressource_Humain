<?php
include '../includes/header.php';
include '../includes/navbarCandidat.php';
require_once("bd.php");
require_once("identifiant.php");
$idpost=isset($_GET['idpostuler'])?$_GET['idpostuler']:0;
$requete="select *from postuler where idpostuler=$idpost";
$resultat=$pdo->query($requete);
$postuler=$resultat->fetch();
$niveau = $postuler['niveau'];
$deplome = $postuler['deplome'];
$cv = $postuler['cv'];
$lettre = $postuler['lettremotivation'];

?>

<div class="body">
   <div class="title">Modifier Ma Postulation
   </div>
   <div class="content">
   <form method="POST"  enctype="multipart/form-data" action="modifierPostulation.php">
         <div class="user-details">
            <div class="input-box">
            <input type="hidden" name="id"  placeholder="id" value="<?php echo $idpost?>">
               <span class="details" for="">Niveau</span>
               <select name="niveau"  required>
               <option value="<?php echo $postuler['niveau']; ?>"<?php if($postuler['niveau'] == $postuler['niveau']) echo 'selected="selected"'; ?>><?php echo $postuler['niveau']; ?></option>
                  <option >Bac+1</option>
                  <option>Bac+2</option>
                  <option>Bac+3</option>
                  <option>Bac+4</option>
                  <option>Bac+5</option>
               </select>
            </div>
            <div class="input-box">
               <span class="details">Diplôme</span>
               <input type="text" name="deplome" placeholder="Entrer le nom de Diplôme" required value="<?php echo $deplome?>">
            </div>
            <div class="input-box">
               <span class="details">CV</span>
               <input type="file"name="cv" placeholder="" required>
               <h4 ><?php echo $postuler['cv']?></h4>
            </div>
            <div class="input-box">
               <span class="details">Lettre de motivation</span>
               <input type="file" name="motivation"  required>
               <h4 ><?php echo $postuler['lettremotivation']?></h4>
            </div>
         </div>
         <div class="button">
            <input type="submit" value="Annuler"
               style="width: 50%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);" onclick="location.href='mesPostulaton.php'">
            <input type="submit" value="Ajouter" style="width:49%; background-color:rgb(60, 179, 113 ) ;">
         </div>
      </form>
   </div>
</div>


<?php
include '../includes/scripts.php';
?>