
	<?php
   include('../includes/header.php');
	include('../includes/navbar.php');
	require_once("bd.php");
   require_once("identifiant.php");
   $requete="select count(id_off) from offre";
   $resultatR=$pdo->query($requete);
	$offre=$resultatR->fetch();

	$requete2="select count(idemp) from employee";
   $resultat=$pdo->query($requete2);
	$employee=$resultat->fetch();

	$requete3="select count(idcand) from candidat";
   $resultat=$pdo->query($requete3);
	$candidat=$resultat->fetch();


	$requete4="select count(id_conge) from conges";
   $resultat=$pdo->query($requete4);
	$cange=$resultat->fetch();
    


	?>
		<main>
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Acceuil</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card1">
					<div class="head">
						<div>
						   
							<h2><?php echo $offre['0'] ?></h2>
							<p>Offres</p>
						</div>
						 <img src="../images/job-offer.png">
					</div>
				</div>
				<div class="card2">
					<div class="head">
						<div>
							<h2><?php echo $employee['0'] ?></h2>
							<p>Employés</p>
						</div>
						<img src="../images/employee.png">
					</div>
				</div>
				<div class="card3">
					<div class="head">
						<div>
							<h2><?php echo $candidat['0'] ?></h2>
							<p>Condidats</p>
						</div>
						<img src="../images/candidate.png">
					</div>
				</div>
				<div class="card4">
					<div class="head">
						<div>
							<h2><?php echo $cange['0'] ?></h2>
							<p>congés</p>
						</div>
						<img src="../images/stress-management.png">
					</div>
				</div>
			</div>			
	</main>
	

	<?php
    include('../includes/scripts.php');
	?>
