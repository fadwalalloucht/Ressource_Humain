<?php
 require_once("identifiant.php");
 require_once("bd.php");
?>


<section id="sidebar">
		<a href="#" class="brand"><img src ="../images/rs.png" style="width: 21%; margin: 5%;"> RH</a>
		<ul class="side-menu">
      <li>
				<a href="#"><i class='bx bx-target-lock icon'></i>Offers <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
				   <li><a href="../pages/posteOffre.php"><i class='bx bxs-plus-circle icon'></i>Postuler Offer</a></li>
					<li><a href="../pages/mesPostulaton.php"><i class='bx bxs-folder-open icon' ></i>liste Postulation</a></li>
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
			<img src="../images/<?php echo $_SESSION['user']['photo'];?>">
				<ul class="profile-link">
					<li><a href="../pages/deconnecte.php"><i class='bx bxs-log-out-circle' ></i>Déconnecter</a></li>
				</ul>
			</div>
		</nav>