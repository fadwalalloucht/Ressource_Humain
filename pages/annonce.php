<?php
    include('../includes/header.php');
include('../includes/navbar.php');
require_once("bd.php");
  $requete="select * from annocement";
  $resultatR=$pdo->query($requete);
	?>

<section class="main">
      <div class="main-top">
        <h1>Annonce</h1>
      </div>
      <div class="users">
      </div>
           

      <section class="attendance">
        <div class="attendance-list">
          <h1>Annonce</h1>
             <button class="btn"  id="updateButton"><i class="fas fa-edit" ></i>Ajouter un annonce</button>
          <!-- The modal -->
    <div id="updateModal" class="modal">
          <!-- Modal content -->
        <div class="modal-content" style="width: 57%;">

         <div class="container">
         <div class="title">Ajouter un annonce</div>
         <div class="content">
         <form method="post"  enctype="multipart/form-data" action="ajouterannonce.php">
         <span class="close" style="margin-top: -8%;">&times;</span>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Titre</span>
            <input type="text"  name="titre" placeholder="Entrer Titre" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text"  name="description" placeholder="Entrer Description" required>
          </div> 
        </div>
        <div class="button">
        <input type="submit" value="Annuler" style="width: 50%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);">
        <input type="submit" value="Ajouter" style="width:49%; background-color:rgb(60, 179, 113) ;">
        </div>
      </form>
         </div>

       </div>
         </div>
        </div>
          <table class="table">
            <thead>
              <tr>
              <th>TITRE</th>
                <th>CONTENU</th>
                <th>ACTION</th>
                <th></th>

                
              </tr>
            </thead>
            <tbody>
            <?php while($annonce=$resultatR->fetch()){ ?>
              <tr>
               <td><?php echo $annonce['titre'] ?></td>
                <td><?php echo $annonce['contenu'] ?></td>
                <td><a href="../pages/updateannonce.php?id=<?php echo $annonce['id']?>"><button style="background-color:#32CD32;"><i class="fas fa-edit"></i></button></a></td>
                <td><a onclick="return confirm('Etes vous sûr de vouloir supprimer lannonce')" href="supprimerannonce.php?id=<?php echo $annonce['id']?>"><button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>


    
	<?php
    include('../includes/scripts.php');
	?>
