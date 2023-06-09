<?php
    include('../includes/header.php');
    include('../includes/navbarCandidat.php');
  require_once("bd.php");
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
                <td><a href="../pages/Postuler.php?id_off=<?php echo $offre['id_off']?>"> <button style="background-color:rgb(255, 165, 0)"><i class="fas fa-file-alt"></i></button></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
         
         </div>
        </div>
        </div>
      </section>
    </section>


    
	<?php
    include('../includes/scripts.php');
	?>
