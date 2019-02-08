<?php ob_start(); ?>

<h1>Liste des abonnés</h1>
<a class="btn btn-success my-5 btn-lg d-flex justify-content-center"  href="<?= url('abonnements/add') ?>">Ajouter</a>



<?php foreach($abonnements as $abo) : ?>

    <li>
        <?= $abo->ouvrage()->auteur() ?> (<?= $abo->ouvrage()->titre() ?>) - <?= $abo->abonne()->prenom() ?> <?= $abo->abonne()->nom() ?> (<a class="delete" href="<?=url('/abonnements/delete/' . $abo->id())?>">supprimer</a>)
    </li>

<?php endforeach; ?>

</ul>

<?php $content = ob_get_clean(); ?>
<?php view('template', compact('content')); ?>