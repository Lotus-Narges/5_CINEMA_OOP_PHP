<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>
<body>

    <?php
/*POO Cinéma
Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). 
Un résumé du film (synopsis) pourra éventuellement être renseigné. 
Chaque film est caractérisé par un seul genre cinématographique (science-fiction, aventure, action, ...).
Votre application devra recenser également les acteurs de chacun des films. 
On désire connaître le nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. 
A vous de savoir où le mettre en place !
Attention !

Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs)

pouvoir :
Lister la liste des acteurs ayant incarné tel rôle
Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)
Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...) 
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)*/

        //?localhost:8888/OOP-PHP(Cinema)-Part5/index.php

        // * fonction pour load tout les fichiers présent dans le dossier, equivalent à ecrire tout les fichiers requis sans avoir le soucis de l'ordre de load des dépendances.

        spl_autoload_register(function ($class_name) {

            require $class_name . '.php';

        });


    //!Creating Realisateur
        $realisateur_TimeOut = new Realisateur("Niccol", "Andrew", "M", "1964-06-10");
        $realisateur_Inception = new Realisateur("Nolan", "Christopher", "M", "1970-07-30");


    //!Genre
        $genre1 = new Genre("Action");
        $genre2 = new Genre("Comedy");
        $genre3 = new Genre("Drama");
        $genre4 = new Genre("Fantasy");
        $genre5 = new Genre("Horror");
        $genre6 = new Genre("Mystery");
        $genre7 = new Genre("Romance");
        $genre8 = new Genre("Thriller");
        $genre9 = new Genre("Western");
        $genre10 = new Genre("science fiction");


    //!Creating Film
        $film_TimeOut = new Film ("Time Out", 2011, 109, $realisateur_TimeOut, $genre10);
        $film_Inception = new Film ("Inception", 2010, 147, $realisateur_Inception, $genre8);


    //!Creating Acteur
        $amandaSEYFRIED = new Acteur("SEYFRIED", "Amanda", "F", "1985-12-03");
        $justinTIMBERLAKE = new Acteur("Timberlake", "Justin", "M", "1981-01-31");
        $cillianMURPHY = new Acteur("Murphy", "Cillian", "M", "1976-05-25");
        $mattBOMER = new Acteur("Bomer", "Matt", "M", "1977-10-11");

        $elliotPAGE = new Acteur("Page", "Elliot", "F", "1987-02-21");
        $leonardoDICAPRIO = new Acteur("DiCaprio", "Leonardo", "M", "1974-11-11");
        $tomHARDY = new Acteur("Hardy", "Tom", "M", "1977-09-15");


    //!Role
        $role1_TimeOut = new Role("Sylvia Weis");
        $role2_TimeOut = new Role("Will Salas");
        $role3_TimeOut = new Role("Raymond Leon");
        $role4_TimeOut = new Role("Henri Hamilton");

        $role1_Inception = new Role("Ariane");
        $role2_Inception = new Role("Cobb");
        $role3_Inception = new Role("Eames");
        $role4_Inception = new Role("Robert Ficher");

    
    //!Casting
        $casting1_TimeOut = new Casting($film_TimeOut, $amandaSEYFRIED, $role1_TimeOut);
        $casting2_TimeOut = new Casting($film_TimeOut, $justinTIMBERLAKE, $role2_TimeOut);
        $casting3_TimeOut = new Casting($film_TimeOut, $cillianMURPHY, $role3_TimeOut);
        $casting4_TimeOut = new Casting($film_TimeOut, $mattBOMER, $role4_TimeOut);

        $casting1_Inception = new Casting($film_Inception, $elliotPAGE, $role1_Inception);
        $casting2_Inception = new Casting($film_Inception, $leonardoDICAPRIO, $role2_Inception);
        $casting3_Inception = new Casting($film_Inception, $tomHARDY, $role3_Inception);
        $casting4_Inception = new Casting($film_Inception, $cillianMURPHY, $role4_Inception);

        
        //?----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        //? INITIALIZING THE METHODS
        // * For each method in class (setter) we have an argument, we need to initialize the method
        
    //!List of all the films that a director has released
        echo $realisateur_TimeOut->realisedFilmsList();
        echo $realisateur_Inception->realisedFilmsList();
        
        
    //!Set all the actors that played in a film
        $film_TimeOut->setAddActeursToFilm($amandaSEYFRIED);
        $film_TimeOut->setAddActeursToFilm($justinTIMBERLAKE);
        $film_TimeOut->setAddActeursToFilm($cillianMURPHY );
        $film_TimeOut->setAddActeursToFilm($mattBOMER);
        
        $film_Inception->setAddActeursToFilm($elliotPAGE);
        $film_Inception->setAddActeursToFilm($leonardoDICAPRIO);
        $film_Inception->setAddActeursToFilm($tomHARDY);
        $film_Inception->setAddActeursToFilm($cillianMURPHY );
        
        
    //!Show all the actors that played in a film
        echo $film_TimeOut->showAllActors();
        echo $film_Inception->showAllActors();


    //!Set all the Films that an actor has played 
    //?Here we dont need to call this function becaude the function->setAddActeursToFilm() is the 2 way function, function below do the same thing 
        /*$amandaSEYFRIED->setAddFilmToActor($film_TimeOut);
        $justinTIMBERLAKE->setAddFilmToActor($film_TimeOut); 
        $cillianMURPHY ->setAddFilmToActor($film_TimeOut); 
        $mattBOMER->setAddFilmToActor($film_TimeOut); 
        
        $elliotPAGE->setAddFilmToActor($film_Inception); 
        $leonardoDICAPRIO->setAddFilmToActor($film_Inception);
        $tomHARDY->setAddFilmToActor($film_Inception); 
        $cillianMURPHY ->setAddFilmToActor($film_Inception); */
    

    //!Show all the Films that an actor has played
        echo $cillianMURPHY ->showPlayedFilms();
        echo $justinTIMBERLAKE->showPlayedFilms();


    //!Set the role to each Actor
        // $role1_TimeOut->setRoleToActeur($amandaSEYFRIED);
        // $role2_TimeOut->setRoleToActeur($justinTIMBERLAKE);
        // $role3_TimeOut->setRoleToActeur($cillianMURPHY);
        // $role4_TimeOut->setRoleToActeur($mattBOMER);

        // $role1_TimeOut->setRoleToActeur($elliotPAGE);
        // $role2_TimeOut->setRoleToActeur($leonardoDICAPRIO);
        // $role3_TimeOut->setRoleToActeur($tomHARDY);
        // $role4_TimeOut->setRoleToActeur($cillianMURPHY);

    //var_dump($role3_TimeOut);


    //!Set genre to each film
        // $genre10->setGenreFilms($film_TimeOut);
        // $genre8->setGenreFilms($film_Inception);


    //!Show all the Films listed by genre
        echo $genre10->listGenreFilms();
        echo $genre8->listGenreFilms();

    // var_dump($film_TimeOut);


    //!show the casting of each film
        echo $casting1_TimeOut;
        echo $casting2_TimeOut;
        echo $casting3_TimeOut;
        echo $casting4_TimeOut;

        echo $casting1_Inception;
        echo $casting2_Inception;
        echo $casting3_Inception;
        echo $casting4_Inception;
    ?>
    
</body>
</html>