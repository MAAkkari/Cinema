<?php 
class Role { //creation de la classe role 
    private string $_personnage;
    private array $_jouers=[];
public function __construct(string $personnage) {
    $this->_personnage = $personnage;
}
public function getPersonnage(){
    return $this->_personnage;
}
public function setPersonnage(string $personnage){
    $this->_personnage=$personnage;
}
public function getJouers(){
    return $this->_jouers;
}
public function setJouers(Jouer $jouer){
    array_push($this->_jouers,$jouer);
}
public function incarne_par(){
    echo "les acteurs ayant joué le rôle de $this : "; 
    foreach ($this->_jouers as $jouer){
        echo $jouer->getActeur().", ";
    }
}
public function __toString(){
    return $this->_personnage;
}

}



?>