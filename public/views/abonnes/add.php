<?php ob_start(); ?>

<h1>Ajout d'un abonné</h1>

<form action="<?= url('abonnes/save') ?>" method="post">

    <input class="form-control form-control-lg mt-5 mb-2" type="text" name="prenom" placeholder="Prenom">
    <input class="form-control form-control-lg mb-5" type="text" name="nom" placeholder="Nom">

    <button class="btn btn-primary" type="submit">Créer un abonné</button>

</form>


<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>