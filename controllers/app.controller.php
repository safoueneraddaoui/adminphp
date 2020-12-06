<?php

//initialisation et recupération des attributs de l’objet voiture
isset($_REQUEST['id']) ? $id = $_REQUEST['id'] : $id = "";
isset($_REQUEST['nom']) ? $nom = $_REQUEST['nom'] : $nom = "";

isset($_REQUEST['action']) ? $action = $_REQUEST['action'] : $action = "";

//Instanciation de l’objet marque
$marque = new Marque($id, $nom, $connexion);

switch ($action) {
    case 'add1' :
        include "views/marques/add.view.php";
        break;
    case 'add' :
        $marque->add();
        break;
    case 'index' :
        $liste = $marque->index();
        include "views/marques/index.view.php";
        break;
    case 'edit1' :
        $objet = $marque->edit1();
        include "views/marques/edit.view.php";
        break;
    case 'edit' :
        $marque->edit();
        break;
    case 'delete' :
        $marque->delete();
        break;


}
?>