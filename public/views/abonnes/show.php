<?php ob_start(); ?>

<h1>L'abonné : <?= $abonne->prenom() ?></h1>

<form action="<?= url('abonnes/save') ?>" method="post">

    <input type="hidden" name="id" value="<?= $abonne->id() ?>">    
    <small class="form-text text-muted mt-5 mb-1 ">Modifie à souhait les informations concernant l'abonné</small>
    <input class="form-control form-control-lg mb-2" type="text" name="prenom" placeholder="Prenom" value="<?= $abonne->prenom() ?>">
    <input class="form-control form-control-lg mb-5" type="text" name="nom" placeholder="Nom" value="<?= $abonne->nom() ?>">

    <button class="btn btn-warning" type="submit">Editer un abonné</button>

    <button href="<?= url('abonnes/delete/' . $abonne->id()) ?>" class="btn btn-danger delete" type="submit">Supprimer l'abonné</button>
    <button href="<?= url('abonnes'); ?>" class="btn btn-primary">Retour vers la liste</button>


</form>

<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>