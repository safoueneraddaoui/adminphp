<?php

class Client extends Scaffold
{
    private $id, $nom_client, $prenom_client, $age_client, $adress_client, $num_tel_client, $cin_client, $sex_client, $login, $civilisation_client, $password, $photo, $table, $attrs;

    public function __construct($id, $nom_client, $prenom_client, $age_client, $adress_client, $num_tel_client, $cin_client, $sex_client, $login, $civilisation_client, $password, $photo, $connexion, $table, $attrs)
    {
        $this->id = $id;
        $this->nom_client = $nom_client;
        $this->prenom_client = $prenom_client;
        $this->age_client = $age_client;
        $this->adress_client = $adress_client;
        $this->num_tel_client = $num_tel_client;
        $this->cin_client = $cin_client;
        $this->sex_client = $sex_client;
        $this->login = $login;
        $this->civilisation_client = $civilisation_client;
        $this->password = md5(sha1($password));
        $this->photo = $photo;
        $this->table = $table;
        $this->attrs = $attrs;
        parent::__construct($connexion);
    }

    public function get($param)
    {
        return $this->$param;
    }


//surcharges des methodes CRUD
    public function index($obj = null)
    {
        $res = $this->connexion->query("select * from clients")->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }


}

?>
