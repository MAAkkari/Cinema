<?php 
require_once 'Role.php';
require_once 'Jouer.php';
require_once 'RealisateurActeur.php';
require_once 'Film.php';
require_once 'Genre.php';

$genre1=new Genre("SF");
$genre2=new Genre("Drame");

$role1=new Role("Han Solo");
$role2=new Role("Luke Skywalker");

$realisateur1=new Realisateur ("jean","dupont","25-09-1985","homme");
$realisateur2=new Realisateur ("jeanne","dupont","25-09-1985","homme");
$film1=new Film ("Star Wars Episode IV","20-07-2020","120",$realisateur2,$genre1);
$film2=new Film ("blade runner","20-07-2020","120",$realisateur1,$genre2);;
$film3=new Film ("ghost in the shell","20-07-2020","120",$realisateur1,$genre1);;
$film4=new Film ("star trek","20-07-2020","120",$realisateur1,$genre1);;

$acteur1=new Acteur ("Hamill","Mark","25-09-1985","homme");
$acteur2=new Acteur ("Ford","Harrison","25-09-1985","homme");

$jouer1= new Jouer ($film1,$role1,$acteur1);
$jouer2= new Jouer ($film1,$role2,$acteur2);
$jouer3= new Jouer ($film2,$role2,$acteur1);
$jouer4= new Jouer ($film3,$role2,$acteur1);
$jouer5= new Jouer ($film4,$role2,$acteur1);

//$film1->casting(); affiche le casting du film

//$role1->incarne_par(); affiche tout les acteurs aillant jouer ce role par le passer

//$genre1->contient(); affiche le nombre de film dans un genre cinematographique et les enumère
 
//$realisateur1->filmographie(); affiche tout les films de ce realisateur

//$acteur1->filmographie(); affiche tout les films de cet acteur

$film1->casting()

?>