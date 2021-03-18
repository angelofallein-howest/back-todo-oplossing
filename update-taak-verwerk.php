<?php
require_once dirname(__FILE__) . "/src/helper/debug.php"; 
require_once dirname(__FILE__) . "/src/repository/todorepository.php"; 
require_once dirname(__FILE__) . "/src/model/taak.php"; 

if (isset($_POST["submit"])){

    $aantalRijen = ToDoRepository::updateTaak($_POST["titel"],$_POST["prio"], 1,$_POST["id"] );

    if ($aantalRijen > 0) {
        header("location:index.php");
    } else {
        echo "er zijn geen taken geupdate";
    }

} else {

    echo "updaten mislukt";

}

?>