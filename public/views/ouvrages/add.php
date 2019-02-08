<?php ob_start(); ?>

<h1>Ajout d'un ouvrage</h1>

<form action="<?= url('ouvrages/save') ?>" method="post">

    <input class="form-control" type="text" name="titre" placeholder="Titre">
    <input class="form-control" type="text" name="auteur" placeholder="Auteur">

    <button class="btn btn-primary" type="submit">Créer un ouvrage</button>

</form>


<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>