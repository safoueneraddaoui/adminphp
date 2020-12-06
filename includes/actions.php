<?php
switch ($action) {

    case 'add1' :
        include "views/" . $controller . "/add.view.php";
        break;

    case 'add' :
        $obj->add($obj);
        break;

    case 'index' :
        $liste = $obj->index($obj);
        include "views/" . $controller . "/index.view.php";
        break;

    case 'edit1' :
        $objet = $obj->edit1($obj);
        include "views/" . $controller . "/edit.view.php";
        break;

    case 'edit' :
        $obj->edit($obj);
        break;

    case 'delete' :
        $obj->delete($obj);
        break;

//web services liste des hotels
    case 'indexws' :
        $obj->indexws($obj);
        break;


}
?>