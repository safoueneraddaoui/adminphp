<?php

class Admin extends Scaffold
{
    private $id, $nom_user, $login, $password, $table, $attrs;

    public function __construct($id, $nom_user, $login, $password, $connexion, $table, $attrs)
    {
        $this->id = $id;
        $this->nom_user = $nom_user;
        $this->login = $login;
        $this->password = md5(sha1($password));
        $this->table = $table;
        $this->attrs = $attrs;

        parent::__construct($connexion);
    }

    public function get($param)
    {
        return $this->$param;
    }

//surcharges des methodes CRUD
    public function login($connexion)
    {
        $res = $connexion->query("select * from admins where login='" . $this->login . "' and password='" . $this->password . "'")->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function logout($connexion)
    {
        session_destroy();
        echo "<script>window.location.href='login.php';</script>";

    }
}

?>