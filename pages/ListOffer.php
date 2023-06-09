<?php
    include('../includes/header.php');
    include('../includes/navbar.php');
  require_once("bd.php");
  require_once("identifiant.php");
  $requete="select * from offre";
  $resultatR=$pdo->query($requete);
	?>

<section class="main">
      <div class="main-top">
        <h1>Offers</h1>
      </div>
      <div class="users">
      </div>
           

      <section class="attendance">
        <div class="attendance-list">
          <h1>Liste des offres</h1>
             <button class="btn"  id="updateButton"><i class='bx bxs-folder-plus icon' ></i>Ajouter une Offer</button>
          <!-- The modal -->
    <div id="updateModal" class="modal">
          <!-- Modal content -->
        <div class="modal-content" style="width: 57%;">

         <div class="container">
         <div class="title">Ajouter une Offer</div>
         <div class="content">
         <form method="post"  enctype="multipart/form-data" action="offre.php">
         <span class="close" style="margin-top: -8%;">&times;</span>
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
            <input type="text" name="poste" placeholder="Entrer poste" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" name="description" placeholder="Entrer description" required>
          </div>
          <div class="input-box">
            <span class="details">Nom De Déplome</span>
            <input type="text"  name="deplome" placeholder="Entrer déplome" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="Date" name="date" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details" for="nivau">Niveau</span>
               <select name="niveau" id="" required>
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
        <input type="submit" value="Annuler" style="width: 49%;float: right;margin-top:0%; background-color:rgb(255, 0, 0);">
          <input type="submit" value="Ajouter" style="width:50%; background-color:rgb(60, 179, 113);">
        </div>
      </form>
    </div>

       </div>
         </div>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th>RÉFÉRENCE</th>
                <th>PHOTO</th>
                <th>DATE</th>
                <th>TITRE</th>
                <th>POSTE</th>
                <th>DESCRIPTION</th>
                <th>DEPLOME</th>
                <th>NIVEAU</th>
                <th>EXPERIENCE</th>
                <th>ACTION</th>
                <th></th>
                
                
              </tr>
            </thead>
            <tbody>
            <?php while($offre=$resultatR->fetch()){ ?>
              <tr>
                <td><?php echo $offre['id_off'] ?></td>
                <td><img style="width:80px;height:80px;border-radius:500px;" src="../images/<?php echo $offre['photo']?>"/></td>
                <td><?php echo $offre['date'] ?></td>
                <td><?php echo $offre['titre'] ?></td>
                <td><?php echo $offre['poste'] ?></td>
                <td><?php echo $offre['description'] ?></td>
                <td><?php echo $offre['deplome'] ?></td>
                <td><?php echo $offre['niveau'] ?></td>
                <td><?php echo $offre['experience'] ?></td>
                <td> <a href="../pages/updateoffre.php?id_off=<?php echo $offre['id_off']?>"><button style="background-color:#32CD32;"><i class="fas fa-edit"></i></button></a></td>
                <td><a onclick="return confirm('Etes vous sûr de vouloir supprimer')" href="../pages/supprimerOffre.php?id_off=<?php echo $offre['id_off'] ?>"><button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button></a></td>
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
