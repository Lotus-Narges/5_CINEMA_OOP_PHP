<?php

class Genre {

    private string $_genre;
    private array $_genreFilms;

    public function __construct($genre){
        $this->_genre = $genre;
        $this->_genreFilms = [];  // * store all the films 
    }

    public function setGenre ($genre):string {
        $listGenre = ["Action", "Comedy", "Drama", "Fantasy", "Horror", "Mystery", "Romance", "Thriller", "Western", "science fiction"];
            if (in_array($genre , $listGenre)){
                $this->_genre = $genre . "<br>";
            }else {
                return "Invalid genre <br>";
            }
    }

    public function getGenre ():string {
        return $this->_genre;
    }

    public function setGenreFilms (Film $film):void {
        $this->_genreFilms[] = $film;
    }

    public function getGenreFilms():array {
        return $this->_genreFilms;
    }

    // * function listGenreFilms --> show all the films with the same genre
    // * require argument: None
    // * return a string of $genre of FILM Object
    //! function returns each object 2 times (looping 2 times)
    public function listGenreFilms():string {
        $result = "<h3> List of ($this) films: </h3><ul>";
        foreach ($this->_genreFilms as $genre){
            $result .= "<li>$genre</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString():string {
        return $this->_genre;
    }  
}

?>