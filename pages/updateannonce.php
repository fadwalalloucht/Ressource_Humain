    
    <?php
    include('../includes/header.php');
include('../includes/navbar.php');
require_once("bd.php");
 $id=isset($_GET['id'])?$_GET['id']:0;
 $requete="select *from annocement where id=$id";
 $resultat=$pdo->query($requete);
 $annonce=$resultat->fetch();

 $titre=$annonce['titre'];
 $description=$annonce['contenu'];
?>

    
    <div class="container">
         <div class="title">Modifier un annonce</div>
         <div class="content">
         <form method="post"  enctype="multipart/form-data" action="modifierannonce.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Titre</span>
            <input type="hidden" name="id"  placeholder="id" value="<?php echo $id?>">
            <input type="text"  name="titre" placeholder="Entrer Titre" required value="<?php echo $titre?>">
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text"  name="description" placeholder="Entrer Description" required value="<?php echo $description?>">
          </div> 
        </div>
        <div class="button">
        <input type="submit" value="Annuler" style="width: 50%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);">
        <input type="submit" value="Modifier" style="width:49%; background-color:rgb(60, 179, 113) ;">
        </div>
      </form>
         </div>

       </div>
         </div>


         
         <?php
    include('../includes/scripts.php');
	?>
