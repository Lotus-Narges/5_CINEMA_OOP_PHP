
# POO Cinéma

## Different types of relationships in OOP-PHP

This application allows us to explore the DB of film & actors.

This application allow us to:
List of the actors who have played such a role.
List of the cast of a film (In Star Wars, Han Solo was played by Harison Ford, Luke Skywalker was played by Mark Hamill)
List of the films by genre (example: in the SF genre there are X films: Star Wars, Blade Runner, ...)
List of the filmography of an actor (in which films has this actor playd?)
List of the filmography of a director (which films has this director directed?)

## Implemented Functions:
INDEX.php:
- spl_autoload_register() --> Load all the files automatically

REALISATEUR class:
- realisedFilmsList() --> All the films that a director has released

FILM class:
- showAllActors() --> All the actors that played in a film
- filmDetails() --> All the details of a film

ACREUR class:
- showPlayedFilms() --> All the roles that an actor has played

GENRE class:
- listGenreFilms() --> All the films with the same genre


### When type of the relationship is AGGREGATION:
- Child class --> creating a property of a parent class
-
- Child class --> creating the setter & getter of the parent's property (To send all the object to the parent)- belongs to the owner
- Parent class --> we just create an array (to stock all the object that child class will send us to this array)

### When rype of the relationship is COMPOSITION:
- We create an array in 2 classes to stock all the objects of another class in the associated array
- construction
- Including (chaining) the 2 functions together in the setter method when we include the other's class object

### When type of the relationship is HERITAGE:
- The child EXTENDS the parents properties
- Including the parent's construct method in the child class


