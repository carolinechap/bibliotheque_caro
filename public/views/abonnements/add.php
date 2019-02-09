<?php ob_start(); ?>

<h1>Ajout d'un abonnement</h1>

<form action="<?= url('abonnements/save') ?>" method="post">

    <select class="form-control form-control-lg mt-5 mb-2" name="id_abonne" id="">
        <?php foreach($abonnes as $a) : ?>
            <option value="<?= $a->id() ?>"><?= $a->prenom() ?> <?= $a->nom() ?></option>
        <?php endforeach; ?>
    </select>

    <select class="form-control form-control-lg mb-5" name="id_ouvrage" id="">
        <?php foreach($ouvrages as $o) : ?>
            <option value="<?= $o->id() ?>"><?= $o->auteur() ?> - <?= $o->titre() ?></option>
        <?php endforeach; ?>
    </select>


    <button class="btn btn-primary" type="submit">Créer un abonnement</button>

</form>


<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>