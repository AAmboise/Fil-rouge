<?php


/*******
 On Load
********/

    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["date"])){
        newDate();
    }

require_once './views/landing_form.php';

/*******
 Fonctions
********/

function newDate(){
    var_dump($_POST);

}


?>