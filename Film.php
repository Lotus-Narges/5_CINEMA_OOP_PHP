<?php
// * Aggregetion relationship between Director & the Film (Director owns the film)
    class Film {

        private string $_titre;
        private int $_aneeDeSortie;
        private int $_duree;
        private Realisateur $_realisateur;  
        private Genre $_genre;
        private array $_addActeursToFilm;  // * Add all the actors that played in this film
        private array $_castingFilm;  // * stock casting in this array

        public function __construct(string $titre, int $aneeDeSortie, int $duree, Realisateur $realisateur, Genre $genre){
            $this->_titre = $titre;
            $this->_aneeDeSortie = $aneeDeSortie;
            $this->_duree = $duree;
            $this->_realisateur = $realisateur;
            $this->_realisateur->setReleasedFilms($this); // * Associating The film to it's own director
            $this->_genre = $genre;
            $this->_genre->setGenreFilms($this);  // * Associating the film to the special genre
            $this->_addActeursToFilm = [];
            $this->_castingFilm = [];
        }

        public function setTitre (string $titre):void {
            $this->_titre = $titre;
        }

        public function getTitre ():string {
            return $this->_titre;
        }

        public function setAneeDeSortie (int $aneeDeSortie):void {
            $this->_aneeDeSortie = $aneeDeSortie;
        }

        public function getAneeDeSortie ():int {
            return $this->_aneeDeSortie;
        }

        public function setDuree (int $duree):void {
            $this->_duree = $duree;
        }

        public function getDuree ():float {
            return $this->_duree;
        }

        // * Making link between Film & Director class
        // * Associating an Film to a Director & a Director to a Film in the same time
        // * Take the director from REALISATEUR class (Unique)
        public function setRealisateur (Realisateur $realisateur):void { 
            $this->_realisateur = $realisateur;
        }

        public function getRealisateur ():string {
            return $this->_realisateur;
        }

        // * Making link between Film & Genre class
        public function setGenre (Genre $genre):void { 
            $this->_genre = $genre;
        }

        public function getGenre ():string {
            return $this->_genre;
        }

        // * Making link between Film & Casting class
        public function setCastingFilm (Casting $film):void {
            $this->_castingFilm[] = $film;
        }

        public function getCastingFilm ():array {
            return $this->_castingFilm;
        }

        // * Adding the actors who played in this film from ACTEUR class
        // * We dont need to have all the information of the Acteur objet to be stocked here thats why we define the part thzt we need with specific method
        public function setAddActeursToFilm (Acteur $acteurs):void {  
            $this->_addActeursToFilm[] = $acteurs;
            $acteurs->setAddFilmToActor ($this);  
        }

        public function getAddActeursToFilm ():string {
            return $this->_acteurs;
        }

        // * function showAllActors --> show all the actors that played in a film
        // * require argument: None
        // * return a string of $actors of ACTEUR Object
        public function showAllActors ():string {
            $result = "<h3>All the actors who played in $this: </h3><ul>";
            foreach($this->_addActeursToFilm as $actors){
                $result .= "<li> $actors </li>";
            }
            $result .= "</ul>";
            return $result;
        }

        // * function sfilmDetails --> show all the details of the film
        // * require argument: None
        // * return a string of details of the film
        public function filmDetails():string {
            return "Film:  $this->_titre <br>
                    Release year: $this->_aneeDeSortie <br>
                    Runtime: $this->_duree <br>";
        }

        public function __toString():string {
            return "Film:  $this->_titre";
        }
    }

?>