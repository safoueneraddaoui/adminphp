<?php
//initialisation et recupération des attributs de l’objet marque
$table = "admins";
$attrs = array('id', 'nom_user', 'login', 'password');

foreach ($attrs as $attr) {
    isset($_REQUEST[$attr]) ? $$attr = $_REQUEST[$attr] : $$attr = "";
}

//Instanciation de l’objet marque
$obj = new Admin($id, $nom_user, $login, $password, $connexion, $table, $attrs);

//surcharge des actions
switch ($action) {

    case 'login1' :
        include "views/" . $controller . "/login.view.php";
        break;

    case 'login' :
        $res = $obj->login($connexion);
        if (!empty($res)) {

            $_SESSION['login'] = $res->login;
            $_SESSION['password'] = $res->password;

            echo "<script>window.location.href='index.php';</script>";
        } else
            echo "<script>window.location.href='login.php';</script>";


        break;

    case 'logout' :
        $obj->logout($connexion);
        break;
}
//actions
include "includes/actions.php";


?>