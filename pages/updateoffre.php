
<?php
include('../includes/header.php');
include('../includes/navbar.php');
require_once("bd.php");
 $idoff=isset($_GET['id_off'])?$_GET['id_off']:0;
 $requete="select *from offre where id_off=$idoff";
 $resultat=$pdo->query($requete);
 $offre=$resultat->fetch();
 $titre=$offre['titre'];
 $poste=$offre['poste'];
 $description=$offre['description'];
 $deplom=$offre['deplome'];
 $date=$offre['date'];
 $niveau = $offre['niveau'];
 $experience = $offre['experience'];
	?>
    

<div class="body">
    <div class="title">Modifier Une Offre</div>
    <div class="content">
    <form method="post"  enctype="multipart/form-data" action="modifieroffre.php">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Photo</span>
            <input type="hidden" name="id"  placeholder="id" value="<?php echo $idoff?>">
            <input type="file" name="photo" placeholder="" required style="cursor: pointer;">
            <img src="../images/<?php echo $offre['photo']?>" style='width:70px;height:70px;margin-top: 2%;' alt="">
            <input type="hidden" value='<?php echo $offre['photo']?>' name="old_image" id="old_image">
          </div>
          <div class="input-box">
            <span class="details">Titre </span>
            
            <input type="text" name="titre" placeholder="Entrer Titre " required value="<?php echo $titre?>">
          </div>
          <div class="input-box">
            <span class="details">Poste</span>
            <input type="text"  name="poste" placeholder="Entrer  prénome" required value="<?php echo $poste?>">
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" name="description" placeholder="Entrer description" required value="<?php echo $description?>">
          </div>
          <div class="input-box">
            <span class="details">Nom De Déplome</span>
            <input type="text" name="deplome" placeholder="Entrer déplome" required value="<?php echo $deplom?>">
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="Date" name="date" placeholder="Entrer déplome" required value="<?php echo $date?>">
          </div>
          <div class="input-box">
            <span class="details" for="">Niveau</span>
               <select name="niveau" value="" required>
                        <option value="<?php echo $offre['niveau']; ?>"<?php if($offre['niveau'] == $offre['niveau']) echo 'selected="selected"'; ?>><?php echo $offre['niveau']; ?></option>
                        <option>Bac+2 </option>
                        <option>Bac+3 </option>
                        <option>Bac+4 </option>
                        <option>Bac+5 </option>
              </select>
          </div>
          <div class="input-box">
            <span class="details" for="">Expérience</span>
               <select name="expe" id="" required>
               <option value="<?php echo $offre['experience']; ?>"<?php if($offre['experience'] == $offre['experience']) echo 'selected="selected"'; ?>><?php echo $offre['experience']; ?></option>
                        <option>1 ans</option>
                        <option>2 ans</option>
                        <option>3 ans</option>
                        <option>4 ans</option>
                        <option>5 ans</option>
              </select>
          </div>
        </div>
        <div class="button">
               <input type="submit" value="Modifier" style="width:49%; background-color:rgb(60, 179, 113) ;">
               <input type="submit" value="Annuler" style="width: 50%;float: right;margin-top:0%;background-color:rgb(255, 0, 0);" onclick="location.href='ListOffer.php'">
               
            </div>
      </form>
    </div>
  </div>

  <?php
    include('../includes/scripts.php');
	?>
