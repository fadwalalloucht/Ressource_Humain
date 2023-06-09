<?php
    include('../includes/header.php');
include('../includes/navbarEmployer.php');
require_once("bd.php");
require_once("identifiant.php");
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
          <table class="table">
            <thead>
              <tr>
              <th>TITRE</th>
                <th>CONTENU</th>

                
              </tr>
            </thead>
            <tbody>
            <?php while($annonce=$resultatR->fetch()){ ?>
              <tr>
               <td><?php echo $annonce['titre'] ?></td>
                <td><?php echo $annonce['contenu'] ?></td>
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
