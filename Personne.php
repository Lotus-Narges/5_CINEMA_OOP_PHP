<?php
    //parent class for Director & Actor
    class Personne {
        
        protected string $_nom;
        protected string $_prenom;
        protected string $_sexe;
        protected DateTime $dateDeNaissance;

        public function __construct(string $nom, string $prenom, string $sexe, $dateDeNaissance){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_sexe = $sexe;
            $this->_dateDeNaissance = new DateTime ($dateDeNaissance);
        }

        public function setNom (string $nom):void {
            $this->_nom = $nom;
        }

        public function getNom():string {
            return $this->_nom;
        }

        public function setPrenom (string $prenom):void {
            $this->_prenom = $prenom;
        }

        public function getPrenom ():string {
            return $this->_prenom;
        }

        public function setSexe (string $sexe):void {
            $this->_sexe = $sexe;
        }

        public function getSexe ():string {
            return $this->_sexe;
        }

        public function setDateDeNaissance ($dateDeNaissance):void {
            $this->_dateDeNaissance->format("d/m/Y");
            $this->_dateDeNaissance = $dateDeNaissance;
        }

        public function getDateDeNaissance ():string {
            return $this->_dateDeNaissance;
        }
    }

?>