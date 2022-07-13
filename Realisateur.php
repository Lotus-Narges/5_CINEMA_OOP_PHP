<?php

    class Realisateur extends Personne {

        private array $_releasedFilms;   

        public function __construct (string $nom, string $prenom, string $sexe, $dateDeNaissance){
            parent :: __construct ($nom, $prenom, $sexe, $dateDeNaissance);

            $this->_releasedFilms = [];
        }

        // * we stock all the films from Film class in the array
        public function setReleasedFilms (Film $films):void { 
            $this->_releasedFilms[] = $films;
        }

        public function getReleasedFilms():array {
            return $this->_releasedFilms;
        }

        // * function realisedFilmsList --> show all the films that a director has released
        // * require argument: None
        // * return a string of $film of FILM Object
        public function realisedFilmsList():string {
            $result = "<h3>Films directed by $this : </h3><ul>";  // * $This = __toString function, allows us to print the result
            foreach($this ->_releasedFilms as $film) {
                $result .= "<li>$film</li>";
            }
            $result .= "</ul>";

            return $result;
        }

        public function __toString():string {
            return $this->_prenom . " " . strtoupper($this->_nom);
        }
    }


?>