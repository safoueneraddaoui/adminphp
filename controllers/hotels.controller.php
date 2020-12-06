<?php
include "models/marques.class.php";
include "models/couleurs.class.php";

//initialisation et recupération des attributs de l’objet hotel
$table = "hotels";
$attrs = array('id', 'nom_hotel', 'nbr_etoile', 'categ_hotel', 'adress_hotel', 'num_tel_hotel', 'reservation', 'type_chambre', 'nbr_lit_chambre', 'photo');

foreach ($attrs as $attr) {
    isset($_REQUEST[$attr]) ? $$attr = $_REQUEST[$attr] : $$attr = "";
}


$photo = "";

if (isset($_FILES['photo'])) {
    if (is_uploaded_file($_FILES['photo']['tmp_name'][0])) {

//pour modifier une ou plusieurs photos
        if (isset($_REQUEST['oldphoto'])) {
            $taboldphoto = explode('/', $_REQUEST['oldphoto']);
            foreach ($taboldphoto as $ph) {
                unlink("images/hotels/" . $ph);
            }
        }

        foreach ($_FILES['photo']['name'] as $ind => $photo2) {

//changer le nom du fichier
//1- recuperer l'extention de l'image
            $tabphoto = explode('.', $photo2);
            $ex = $tabphoto[count($tabphoto) - 1];
//2- concatener la nouvelle chaine aaleatoire avec l'extension
            $nomphoto = random_1(8);
            $photo2 = $nomphoto . "." . $ex;
            $photo .= $photo2 . "/";

            $photofile = $_FILES['photo']['tmp_name'][$ind];
            copy($photofile, "images/hotels/" . $photo2);
        }
    }
}
$table2 = "marques";
$attrs2 = array('id', 'nom');

foreach ($attrs2 as $attr) {
    isset($_REQUEST[$attr]) ? $$attr = $_REQUEST[$attr] : $$attr = "";
}

$table3 = "couleurs";
$attrs3 = array('id', 'nom');

foreach ($attrs3 as $attr) {
    isset($_REQUEST[$attr]) ? $$attr = $_REQUEST[$attr] : $$attr = "";
}

//Instanciation de l’objet hotel
$obj = new Hotel($id, $nom_hotel, $nbr_etoile, $categ_hotel, $adress_hotel, $num_tel_hotel, $reservation, $type_chambre, $nbr_lit_chambre, $photo, $connexion, $table, $attrs);


//surcharge des actions
switch ($action) {
    case 'add1';
    case 'edit1' :

}

//actions
include "includes/actions.php";

?>