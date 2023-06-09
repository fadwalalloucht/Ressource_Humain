<?php
  session_start();
  if (isset($_SESSION['user'])){
   require_once("bd.php");

   $id=$_GET['idpostuler'];
   $requete="select *from postuler where idpostuler=$id";
   $resultatR=$pdo->query($requete);
   $candidats=$resultatR->fetch();
    
    $fsize = filesize("../fichier/".$candidats['lettremotivation']);
    $path_parts = pathinfo("../fichier/".$candidats['lettremotivation']);
    $ext = strtolower($path_parts["extension"]);

    switch ($ext) 
    {
      case "pdf": $ctype="application/pdf"; break;
      default: $ctype="application/force-download";
    }

    header("Pragma: public"); 
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); 
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"".basename("../fichier/".$candidats['lettremotivation'])."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$fsize);
    ob_clean();
    flush();
    readfile( "../fichier/".$candidats['lettremotivation'] );

  } 



?>