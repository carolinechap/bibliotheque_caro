<?php

class Ouvrage extends Db{

    //attributs
    protected $id;
    protected $titre;
    protected $auteur;

    // constantes
    const TABLE_NAME = "ouvrage";

    //constructor
public function __construct($titre, $auteur, $id = null){

    $this->setTitre($titre);
    $this->setAuteur($auteur);
    $this->setId($id);
}

    //getters
    public function id(){
        return $this->id;
    }
    public function titre(){
        return $this->titre;
    }
    public function auteur(){
        return $this->auteur;
    }


    //setters
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function setTitre($titre){
        $this->titre = $titre;
        return $this;
    }
    public function setAuteur($auteur){
        $this->auteur = $auteur;
        return $this;
    }


    // methodes
    public function save() {

        $data = [
            "titre"          => $this->titre(),
            "auteur"         => $this->auteur()
        ];

        if ($this->id > 0) return $this->update();

        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);

        $this->setId($nouvelId);

        return $this;
    }

    public function update() {

        if ($this->id > 0) {

            $data = [
                "titre"         => $this->titre(),
                "auteur"            => $this->auteur(),
                "id"             => $this->id()
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

        // On supprime aussi tous les abonnements
        Db::dbDelete('association_abonne_ouvrage', [
            'id_ouvrage' => $this->id()
        ]);

        return;
    }

    public static function findAll($objects = true) {

        $data = Db::dbFind(self::TABLE_NAME);
        
        if ($objects) {
            $objectsList = [];

            foreach ($data as $d) {

                $objectsList[] = new Ouvrage($d['titre'], $d['auteur'], intval($d['id']));
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
                $objectsList[] = new Ouvrage($d['titre'], $d['auteur'], intval($d['id']));

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
            $ouvrage = new Ouvrage($data['titre'], $data['auteur'], intval($data['id']));
            return $ouvrage;
        }

        return $data;
    }

}