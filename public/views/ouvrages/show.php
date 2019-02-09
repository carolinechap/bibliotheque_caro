<?php ob_start(); ?>

<h1><?= $ouvrage->titre() ?></h1>

<form action="<?= url('ouvrages/save') ?>" method="post">

    <input type="hidden" name="id" value="<?= $ouvrage->id() ?>">    
    <small class="form-text text-muted mt-5 mb-1 ">Modifie à souhait les informations concernant l'ouvrage</small>
    <input class="form-control form-control-lg mb-2" type="text" name="titre" placeholder="Titre" value="<?= $ouvrage->titre() ?>">
    <input class="form-control form-control-lg mb-5" type="text" name="auteur" placeholder="Auteur" value="<?= $ouvrage->auteur() ?>">

    <button class="btn btn-warning" type="submit">Editer un ouvrage</button>

    <button href="<?= url('ouvrages/delete/' . $ouvrage->id()) ?>" class="btn btn-danger delete" type="submit">Supprimer l'ouvrage</button>
    <button href="<?= url('ouvrages'); ?>" class="btn btn-primary">Retour vers la liste</button>

</form>

<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>