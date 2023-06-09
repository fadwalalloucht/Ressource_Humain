
<?php
include('../includes/header.php');
include('../includes/navbar.php');
include('../includes/header.php');
require_once("bd.php");
require_once("identifiant.php");
$requete="select p.idpostuler, p.niveau, p.deplome, p.cv, p.lettremotivation,p.id_off,c.idcand,c.nom,c.prenom,c.Email,c.Telephone
from postuler p
Join candidat c
ON p.idcand=c.idcand";
$resultat=$pdo->query($requete);
?>






    <link rel="stylesheet" href="../css/congesRH.css">
    <section class="main">
      <div class="main-top">
        <h1>LISTE DES DEMANDES D'EMPLOI</h1>
      </div>
     

      <section class="attendance">
        <div class="attendance-list">
          <h1>LISTE DES CANDIDATS</h1>
        
          <table class="table">
            <thead>
              <tr>
                <th>RÉFÉRENCE DEMANDE</th>
                <th>RÉFÉRENCE OFFRE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>Lettre</th>
                <th>CV</th>
                <th>ACTION</th>
            </tr>
            
            </thead>
            <tbody>
              <tr >
              <?php while($demander=$resultat->fetch()){ ?>
                <td><?php echo $demander['idpostuler'] ?></td>
                <td><?php echo $demander['id_off'] ?></td>
                <td><?php echo $demander['nom'] ?></td>
                <td><?php echo $demander['prenom'] ?></td>
                <td><?php echo $demander['Email'] ?></td>
                <td><?php echo $demander['Telephone'] ?></td>
                <td><?php echo $demander['lettremotivation'] ?></td>
                <td><?php echo $demander['cv'] ?></td>
                <td> <a href="../pages/suppdemande.php?idpostuler=<?php echo $demander['idpostuler']?>" ><button style="background-color: #FF0000;"><i class="fas fa-trash"></i></button>
                <a href="profileCandidat.php?idcand=<?php echo $demander['idcand']?>" ><button style="background-color: #0000CD;"><i class="fas fa-eye"></i></button></a></td>
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