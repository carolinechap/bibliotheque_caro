<?php

class AbonneOuvrage extends Db{

    //attributs
    protected $id;
    protected $idAbonne;
    protected $idOuvrage;


    //constantes
    const TABLE_NAME = "association_abonne_ouvrage";


    //constructor
    public function __construct($idAbonne, $idOuvrage, $id = null){
        $this->setIdAbonne($idAbonne);
        $this->setIdOuvrage($idOuvrage);
        $this->setId($id);
    }

    //getters

    public function id(){
        return $this->id;
    }
    public function idAbonne(){
        return $this->idAbonne;
    }
    public function idOuvrage(){
        return $this->idOuvrage;
    }

    //setters
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function setIdAbonne($idAbonne){
        $this->idAbonne = $idAbonne;
        return $this;
    }
    public function setIdOuvrage($idOuvrage){
        $this->idOuvrage = $idOuvrage;
        return $this;
    }


    // methodes
    public function save() {

        $data = [
            "id_abonne"        => $this->idAbonne(),
            "id_ouvrage"       => $this->idOuvrage()
        ];

        if ($this->id > 0) return $this->update();

        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);

        $this->setId($nouvelId);

        return $this;
    }
    
    public function update() {

        if ($this->id > 0) {

            $data = [
                "id_abonne"        => $this->idAbonne(),
                "id_ouvrage"       => $this->idOuvrage(),
                "id"               => $this->id()
            ];

            Db::dbUpdate(self::TABLE_NAME, $data);

            return $this;
        }

        return;
    }

    public function delete() {
        $data = [
            'id' => $this->id(),
        ];
        
        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }

    public static function findAll($objects = true) {

        $data = Db::dbFind(self::TABLE_NAME);
        
        if ($objects) {
            $objectsList = [];

            foreach ($data as $d) {

                $objectsList[] = new AbonneOuvrage($d['id_abonne'], $d['id_ouvrage'], intval($d['id']));
            }

            return $objectsList;
        }

        return $data;
    }

    public static function find(array $request, $objects = true) {

        $data = Db::dbFind(self::TABLE_NAME, $request);

        if ($objects) {
            $objectsList = [];

            foreach ($data as $d) {
                $objectsList[] = new AbonneOuvrage($d['id_abonne'], $d['id_ouvrage'], intval($d['id']));

            }
            return $objectsList;
        }

        return $data;
    }

    public static function findOne(int $id, $object = true) {

        $request = [
            ['id', '=', $id]
        ];

        $data = Db::dbFind(self::TABLE_NAME, $request);

        if (count($data) > 0) $data = $data[0];
        else return;

        if ($object) {
            $abonnements = new AbonneOuvrage($data['id_abonne'], $data['id_ouvrage'], intval($data['id']));
            return $abonnements;
        }

        return $data;
    }

    public function abonne() {
        return Abonne::findOne($this->idAbonne());
    }

    public function ouvrage() {
        return Ouvrage::findOne($this->idOuvrage());
    }








}