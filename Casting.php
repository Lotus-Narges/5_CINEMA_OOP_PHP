<?php

    class Casting {  // we join 3 Film & Actor & Role class together

        private Film $_film;
        private Acteur $_acteur;
        private Role $_role;

        public function __construct(Film $film, Acteur $acteur, Role $role){

            $this->_film = $film;
            $this->_film->setCastingFilm($this);
            $this->_acteur = $acteur;
            $this->_acteur->setCastingActeur($this);
            $this->_role = $role;
            $this->_role->setCastingRole($this);
        }

        public function setFilm (Film $film):void {
            $this->_film = $film;
        }

        public function getFilm ():string {
            return $this->_film;
        }

        public function setActeur (Acteur $acteur):void {
            $this->_acteur = $acteur;
        }

        public function getActeur ():string {
            return $this->_acteur;
        }

        public function setRole (Role $role):void {
            $this->_role = $role;
        }

        public function getRole ():string {
            return $this->_role;
        }

        public function __toString ():string {
            return "In $this->_film, $this->_role was played by $this->_acteur<br>";
        }
    }


?>