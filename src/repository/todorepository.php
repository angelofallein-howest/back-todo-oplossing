<?php
require_once dirname(__FILE__) . "/../model/taak.php";
require_once dirname(__FILE__) . "/../database/database.php";

class ToDoRepository{
    public static function getAllTaken(){
        $arr = Database::getRows("SELECT id, titel, prioriteit, afgewerkt FROM taken", null, "Taak");
        return $arr;
    }
    
    public static function getTaakById($parID){
        $item = Database::getSingleRow("SELECT id, titel, prioriteit, afgewerkt FROM taken WHERE id=?", [$parID],"Taak");
        return $item;
    }
   
    public static function createTaak($parTitel, $parPrioriteit, $parAfgewerkt){
        $int = Database::execute("INSERT INTO taken (titel ,prioriteit,afgewerkt) VALUES(?,?,?)", [$parTitel, $parPrioriteit, $parAfgewerkt]);
        return $int; 
    }

    public static function updateTaak($parTitel, $parPrioriteit, $parAfgewerkt, $parID){
        $int = Database::execute("UPDATE taken SET titel =?, prioriteit=?,afgewerkt=? WHERE id=?", [$parTitel, $parPrioriteit, $parAfgewerkt, $parID]);
        return $int; 
    }

    public static function deleteTaak($parID){
         $int = Database::execute("DELETE FROM taken  WHERE id=?", [$parID]);
        return $int;  
    }

    public static function updateTaakStatus($parID, $parAfgewerkt){
        $int = Database::execute("UPDATE taken SET afgewerkt =? WHERE id=?",[$parAfgewerkt, $parID]);
        return $int;
    }
}

?>


