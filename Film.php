<?php 
class Film { //creation classe film
    private string $_titre;
    private DateTime $_dateFr;
    private int $_duree;
    private Realisateur $_realisateur;
    private Genre $_genre;
    private string $_synopsis="il n'y a pas encore de synopsis pour ce film"; //non obligatoire
    private array $_jouers=[];

    public function __construct(string $titre,string $date_fr,int $duree,Realisateur $realisateur,Genre $genre){
        $this->_titre=$titre;
        $this->_dateFr=new DateTime($date_fr);
        $this->_duree=$duree;
        $this->_realisateur=$realisateur;
        $this->_genre=$genre;
        $genre->setFilms($this); //rejoint le tableau de films associer a ce genre
        $realisateur->setFilmographie($this);//rejoint le tableau de films associer a ce realisateur
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function setTitre(string $titre){
        $this->_titre=$titre;
    }
    public function getDate_fr(){
        return $this->_dateFr;
    }
    public function setDate_fr(string $date_fr){
        $this->_dateFr=new DateTime($date_fr);
    }
    public function getDuree(){
        return $this->_duree;
    }
    public function setDuree(int $duree){
        $this->_duree=$duree;
    }
    public function getRealisateur(){
        return $this->_realisateur;
    }
    public function setRealisateur(Realisateur $realisateur){
        $this->_realisateur=$realisateur;
        $realisateur->setFilmographie($this);
    }
    public function getGenre(){
        return $this->_genre;
    }
    public function setGenre(Genre $genre){
        $this->_genre=$genre;
        $genre->setFilms($this);
    }
    public function getSynopsis(){
        return $this->_synopsis;
    }
    public function setSynopsis(string $synopsis){
        $this->_synopsis=$synopsis;
    }
    public function getJouers(){
        return $this->_jouers;
    }
    public function setJouers(Jouer $jouer){
        array_push($this->_jouers,$jouer);
    }
    public function __toString(){ 
        return $this->_titre;
    }
    public function casting(){
        echo "dans le film $this, ";
        foreach($this->_jouers as $jouer){
           echo $jouer;
        }
    }
    }




?>