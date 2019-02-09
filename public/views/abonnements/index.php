<?php ob_start(); ?>

<h1>Liste des abonnements</h1>
<a class="btn btn-success my-5 btn-lg d-flex justify-content-center"  href="<?= url('abonnements/add') ?>">Ajouter</a>


<table class="table table-hover justify-content-center">

<tr>
    <th scope="col">Abonné</th>
    <th scope="col">Ouvrage</th>
    <th scope="col">Action</th>

</tr>


<?php foreach($abonnements as $abo) : ?>

<tr>
    <td class="pr-5">
    <?= $abo->abonne()->nom() ?> <?= $abo->abonne()->prenom() ?>
    </td>
    <td class="pr-5">
    Titre de l'ouvrage : <?= $abo->ouvrage()->titre() ?> <br>
    écrit par <?= $abo->ouvrage()->auteur() ?><br>

    </td>
    <td class="pr-5">
    <a class="btn btn-info btn-block"  href="<?=url('/abonnements/delete/' . $abo->id())?>">Supprimer</a>
    </td>
</tr>
<?php endforeach; ?>

</table>







<?php $content = ob_get_clean(); ?>
<?php view('template', compact('content')); ?>