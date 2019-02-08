<?php

class AbonnesOuvragesController {

    public function index() {

        $abonnements = AbonneOuvrage::findAll();

        view('abonnements.index', compact('abonnements'));

    }

    public function show($id) {

        $abonnement = AbonneOuvrage::findOne($id);
        view('abonnements.show', compact('abonnement'));

    }

    public function add() {

        $ouvrages = Ouvrage::findAll();
        $abonnes = Abonne::findAll();

        view('abonnements.add', compact('ouvrages', 'abonnes'));

    }

    public function save() {
        $abonnement = new AbonneOuvrage($_POST['id_abonne'], $_POST['id_ouvrage'], $_POST['id']);
        $abonnement->save();
 
        Header('Location: '. url('abonnements'));
    }

    public function delete($id) {

        $abonnement = AbonneOuvrage::findOne($id);
        $abonnement->delete();

         Header('Location: '. url('abonnements'));
        exit();

    }

/*      public function listeNomsAbonnes() {

        $data = AbonneOuvrage::listeNomsAbonnes();
        var_dump($data);
    }

    public function nombreOuvrageParAbo() {

        $data = AbonneOuvrage::nombreOuvrageParAbo();
        var_dump($data);

    }  */
}