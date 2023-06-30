<?php 
class Jouer {
    private film $_film;
    private Role $_role;
    private Acteur $_acteur;

    public function __construct(Film $film,Role $role, Acteur $acteur){
        $this->_film=$film;
        $this->_role=$role;
        $this->_acteur=$acteur;
        $film->setjouers($this);
        $role->setjouers($this);
        $acteur->setjouers($this);
    }
    public function getFilm(){
        return $this->_film;
    }
    public function setFilm(Film $film){
        $this->_film=$film;
        $film->setjouers($this);
    }
    public function getRole(){
        return $this->_role;
    }
    public function setRole(Role $role){
        $this->_role=$role;
        $role->setjouers($this);
    }
    public function getActeur(){
        return $this->_acteur;
    }
    public function setActeur(Acteur $acteur){
        $this->_acteur=$acteur;
        $acteur->setjouers($this);;
    }
    public function __toString(){
        return "$this->_role a été incarné par $this->_acteur, ";
    }
}














?>