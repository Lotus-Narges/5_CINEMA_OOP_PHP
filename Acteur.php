<?php

class Acteur extends Personne {

    // * Store all the films that an actor has played
    private array $_addFilmToActor; 
    private array $_castingActeur;

    public function __construct (string $nom, string $prenom, string $sexe, string $dateDeNaissance){
        parent :: __construct ($nom, $prenom, $sexe, $dateDeNaissance);

        $this->_addFilmToActor = [];
        $this->_castingActeur = [];
    }

    // * Making link between Actor & Film class
    // * Associating an actor to a film & a film to an actor in the same time
    public function setAddFilmToActor (Film $films):void { 
        $this->_addFilmToActor[] = $films;          
    }

    public function getAddFilmToActor ():array {
        return $this->_addFilmToActor;
    }

    // * Making link between Actor & Casting class
    public function setCastingActeur (Casting $role):void {
        $this->_castingActeur[] = $role;
        //return $this;
    }

    public function getCastingActeur ():array {
        return $this->_castingActeur;
    }

    public function __toString():string {
        return $this->_prenom . " " . strtoupper($this->_nom);
    }

    
    // * function showPlayedFilms --> show all the roles that an actor has played
    // * require argument: None
    // * return a string of $film of FILM Object

    public function showPlayedFilms ():string {  
        $result = "<h3> The Films that $this->_prenom  $this->_nom has played: </h3><ul>";
        foreach($this->_castingActeur as $casting){
            $result .= "<li>".$casting->getFilm()."</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}

?>