<?php

require_once dirname(__FILE__) . "/../model/taak.php";
require_once dirname(__FILE__) . "/../database/database.php";

class ToDoRepository{
    public static function getAllTaken(){
        
    }
    
    public static function getTaakById($parID){
        
    }
   
    public static function createTaak($parTitel, $parPrioriteit, $parAfgewerkt){
        
    }

    public static function updateTaak($parTitel, $parPrioriteit, $parAfgewerkt, $parID){
        
    }

    public static function deleteTaak($parID){
         
    }

    public static function updateTaakStatus($parID, $parAfgewerkt){
        $int = Database::execute("UPDATE taken SET afgewerkt =? WHERE id=?",[$parAfgewerkt, $parID]);
        return $int;
    }
}

?>


