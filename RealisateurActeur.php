<?php 
class Personne {
    protected string $_nom;
    protected string $_prenom;
    protected DateTime $_naissance;
    protected string $_sexe;
    

public function __construct(string $nom,string $prenom,string $naissance,string $sexe) {
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_naissance = new DateTime($naissance);
    $this->_sexe = $sexe;
}
public function getNom(){
    return $this->_nom;
}
public function setNom(string $nom){
    $this->_nom=$nom;
}
public function getNaissance(){
    return $this->_naissance;
}
public function setNaissance(string $naissance){
    $this->_naissance=new DateTime($naissance);
}
public function getPrenom(){
    return $this->_prenom;
}
public function setPrenom(string $prenom){
    $this->_prenom=$prenom;
}
public function getSexe(){
    return $this->_sexe;
}
public function setSexe(string $sexe){
    $this->_sexe=$sexe;
}   
}
class Realisateur extends Personne{ 
    protected array $_filmographie=[];
    public function __construct(string $nom,string $prenom,string $naissance,string $sexe) {
        parent::__construct($nom,$prenom,$naissance,$sexe);
    }
    
public function getFilmographie(){ 
    return $this->_filmographie;
}
public function setFilmographie(Film $film){
    array_push($this->_filmographie,$film);
}
public function __toString(){
    return $this->_prenom . " " . $this->_nom;
}
public function filmographie(){
    echo "Le réalisateur $this a réaliser les films : "; //affiche les elements du tableau 
    foreach($this->_filmographie as $film){
        echo "$film, ";
    }
}
}
Class Acteur extends Personne{ 
    protected array $_jouers=[];
    public function __construct(string $nom,string $prenom,string $naissance,string $sexe) {
        parent::__construct($nom,$prenom,$naissance,$sexe);
    }
    public function getjouers(){
        return $this->_jouers;
    }
    public function setjouers(Jouer $jouer){
        array_push($this->_jouers,$jouer);
    }
    public function __toString(){
        return $this->_prenom ." ". $this->_nom ;
    }
    public function filmographie(){
        echo "l'acteur $this a jouer dans les films : ";
        foreach ($this->_jouers as $jouer){
            echo $jouer->getFilm().", ";
        }
    }
}



?>