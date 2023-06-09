<?php
 require_once("identifiant.php");
 require_once("bd.php");
?>


<section id="sidebar">
		<a href="#" class="brand"><img src ="../images/rs.png" style="width: 21%; margin: 5%;"> RH</a>
		<ul class="side-menu">
			<li><a href="../pages/index.php" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li>
				<a href="#"><i class='bx bxs-group icon' ></i> Employées <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../pages/ListEmploi.php"><i class='bx bxs-user-account icon'></i>Liste Employées</a></li>
				</ul>
			</li>


			<li>
				<a href="#"><i class='bx bx-street-view icon'></i>Candidats <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../pages/ListCandidat.php"><i class='bx bxs-user-account icon'></i>Liste Candidats</a></li>
				</ul>
			</li>

			<li>
				<a href="#"><i class='bx bx-target-lock icon'></i>Offers <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
				   <li><a href="../pages/AddOffer.php"><i class='bx bxs-plus-circle icon'></i>Offer</a></li>
					<li><a href="../pages/ListOffer.php"><i class='bx bxs-folder-open icon' ></i>Liste Offer</a></li>
				</ul>
			</li>


            <li>
				<a href="#"><i class='bx bx-table icon' ></i> Congés <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../pages/congesRH.php">Liste des Congés</a></li>
					<li><a href="../pages/congesdemandes.php">Demandeurs Congés</a></li>
				</ul>
			</li>

			<li><a href="../pages/AddReunion.php"><i class='bx bxs-calendar icon' ></i> Réunion</a></li>

            <li>
				<a href="../pages/annonce.php"><i class='bx bxs-notepad icon' ></i> Annoncement</a>
			</li>

            <li>
				<a href="#"><i class='bx bxs-search icon' ></i> Récrutement <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../pages/Demandeoffre.php"><i class='bx bxs-folder-open icon'></i>Liste Candidat</a></li>
				</ul>
			</li>
		</ul>
		<div class="ads">
			
		</div>
	</section>

    <section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' style="color: #fff;" ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Rechercher...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
			</a>
			<a href="#" class="nav-link">
				
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="../images/<?php echo $_SESSION['user']['photo'];?>" alt="">
				<ul class="profile-link">
					<li><a href="../pages/profileRH.php"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="../pages/deconnecte.php"><i class='bx bxs-log-out-circle' ></i>Déconnecter</a></li>
				</ul>
			</div>
		</nav>