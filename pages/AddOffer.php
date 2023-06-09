
<?php
    include('../includes/header.php');
	include('../includes/navbar.php')
	?>

<div class="body">
    <div class="title">Ajouter Une Offre</div>
    <div class="content">
    <form method="post"  enctype="multipart/form-data" action="offre.php">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Photo</span>
            <input type="file" name="photo" placeholder="" required style="cursor: pointer;">
          </div>
          <div class="input-box">
            <span class="details">Titre </span>
            <input type="text" name="titre" placeholder="Entrer Titre " required>
          </div>
          <div class="input-box">
            <span class="details">Poste</span>
            <input type="text"  name="poste" placeholder="Entrer  prénome" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" name="description" placeholder="Entrer description" required>
          </div>
          <div class="input-box">
            <span class="details">Nom De Déplome</span>
            <input type="text" name="deplome" placeholder="Entrer déplome" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="Date" name="date" placeholder="Entrer déplome" required>
          </div>
          <div class="input-box">
            <span class="details" for="">Niveau</span>
               <select name="niveau" required>
                        <option></option>
                        <option>Bac+1</option>
                        <option>Bac+2 </option>
                        <option>Bac+3 </option>
                        <option>Bac+4 </option>
                        <option>Bac+5 </option>
              </select>
          </div>
          <div class="input-box">
            <span class="details" for="">Expérience</span>
               <select name="expe" id="" required>
                        <option></option>
                        <option>1 ans</option>
                        <option>2 ans</option>
                        <option>3 ans</option>
                        <option>4 ans</option>
                        <option>5 ans</option>
              </select>
          </div>
        </div>
        <div class="button">
               <input type="submit" value="Annuler" style="width: 50%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);"  onclick="location.href='ListOffer.php'">
               <input type="submit" value="Ajouter" style="width:49%; background-color:rgb(60, 179, 113) ;">
               
            </div>
      </form>
    </div>
  </div>

  <?php
    include('../includes/scripts.php');
	?>
