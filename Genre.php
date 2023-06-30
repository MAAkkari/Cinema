<?php 
class Genre {
    private string $_nom;
    private array $_films=[]; //cet array se remplis chaque fois qu'un film de ce genre est instancier
    
    public function __construct(string $nom){
        $this->_nom=$nom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom=$nom;
    }
    public function getFilms(){
        return $this->_films;
    }
    public function setFilms(Film $film){
        array_push($this->_films,$film);
    }
    public function __toString(){
        return $this->_nom;
    }
    public function contient(){        //affiche les films et le nombre de film dans ce genre cinematographique
        echo "le genre $this est associé a ".count($this->_films)." films : "; 
        foreach($this->_films as $film){
            echo "$film, ";
        }
    }
}




?>