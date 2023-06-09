<?php
 require_once("identifiant.php");
 require_once("bd.php");
?>


<section id="sidebar">
		<a href="#" class="brand"><img src ="../images/rs.png" style="width: 21%; margin: 5%;"> RH</a>
		<ul class="side-menu">
            <li>
				<a href="#"><i class='bx bx-table icon' ></i> Congés <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="../pages/demandeConger.php">Demander Congés</a></li>
               <li><a href="../pages/mesConges.php">Consulter Mes Congés</a></li>
				</ul>
			</li>



            <li>
				<a href="../pages/annonceemployer.php"><i class='bx bxs-notepad icon' ></i> Annoncement</a>
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
					<input type="text" placeholder="Search...">
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
					<li><a href="../pages/ProfileEmployé.php"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="../pages/deconnecte.php"><i class='bx bxs-log-out-circle' ></i>Déconnecter</a></li>
				</ul>
			</div>
		</nav>