<?php ob_start(); ?>

<h1>Voir un ouvrage</h1>

<form action="<?= url('ouvrages/save') ?>" method="post">

    <input type="hidden" name="id" value="<?= $ouvrage->id() ?>">    

    <input class="form-control" type="text" name="titre" placeholder="Titre" value="<?= $ouvrage->titre() ?>">
    <input class="form-control" type="text" name="auteur" placeholder="Auteur" value="<?= $ouvrage->auteur() ?>">

    <button class="btn btn-warning" type="submit">Editer un ouvrage</button>

    <a href="<?= url('abonnes/delete/' . $ouvrage->id()) ?>" class="btn btn-danger delete" type="submit">Supprimer l'abonné</a>

</form>

<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>