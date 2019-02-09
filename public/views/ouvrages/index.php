<?php ob_start(); ?>

<h1>Liste des ouvrages</h1>
<a class="btn btn-success my-5 btn-lg d-flex justify-content-center"  href="<?= url('ouvrages/add') ?>">Ajouter</a>



<table class="table table-hover justify-content-center">

<tr>
    <th scope="col">Titres</th>
    <th scope="col">Auteurs</th>
    <th scope="col">Action</th>

</tr>


<?php foreach($ouvrages as $ouvrage) : ?>

<tr>
    <td class="pr-5">
    <?= $ouvrage->titre() ?>
    </td>
    <td class="pr-5">
    <?= $ouvrage->auteur() ?>
    </td>
    <td class="pr-5">
    <a class="btn btn-info btn-block"  href="<?= url('ouvrages/' . $ouvrage->id()); ?>">Voir</a>
    </td>
</tr>
<?php endforeach; ?>

</table>


<?php $content = ob_get_clean(); ?>
<?php view('template', compact('content')); ?>

