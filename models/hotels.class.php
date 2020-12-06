<?php

class Hotel extends Scaffold
{
    private $id, $nom_hotel, $nbr_etoile, $categ_hotel, $adress_hotel, $num_tel_hotel, $reservation, $type_chambre, $nbr_lit_chambre, $photo, $table, $attrs;

    public function __construct($id, $nom_hotel, $nbr_etoile, $categ_hotel, $adress_hotel, $num_tel_hotel, $reservation, $type_chambre, $nbr_lit_chambre, $photo, $connexion, $table, $attrs)
    {
        $this->id = $id;
        $this->nom_hotel = $nom_hotel;
        $this->nbr_etoile = $nbr_etoile;
        $this->categ_hotel = $categ_hotel;
        $this->adress_hotel = $adress_hotel;
        $this->num_tel_hotel = $num_tel_hotel;
        $this->reservation = $reservation;
        $this->type_chambre = $type_chambre;
        $this->nbr_lit_chambre = $nbr_lit_chambre;
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
        $res = $this->connexion->query("select * from hotels")->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }


}

?>
