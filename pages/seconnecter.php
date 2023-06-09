<?php
session_start();
require_once "bd.php";
$login = $_POST['email'];
$mt = $_POST['motdepasse'];
echo $login = $_POST['email'], $_POST['motdepasse'];

$requete = "select *from employee where email='$login' and password='$mt'";
$resultat = $pdo->query($requete);

$requete2 = "select *from admin where Email='$login' and Password='$mt'";
$resultat2 = $pdo->query($requete2);

$requete3 = "select *from candidat where Email='$login' and password='$mt'";
$resultat3 = $pdo->query($requete3);

if ($user = $resultat->fetch()) {
    $_SESSION['user'] = $user;
    header('location:demandeConger.php');

} elseif ($user = $resultat2->fetch()) {
    $_SESSION['user'] = $user;
    header('location:index.php');


} elseif ($user = $resultat3->fetch()) {
    $_SESSION['user'] = $user;
    header('location:posteOffre.php');


} else {
    $_SESSION['erreurLogin'] = "Login ou mot de passe est incorrecte ! ";
    header('location:connexion.php');
}
