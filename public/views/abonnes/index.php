<?php ob_start(); ?>

<h1>Liste des abonnés</h1>
<a class="btn btn-success my-5 btn-lg d-flex justify-content-center"  href="<?= url('abonnes/add') ?>">Ajouter</a>



<table class="table table-hover justify-content-center">

<tr>
    <th scope="col">Nom</th>
    <th scope="col">Prénom</th>
    <th scope="col">Voir</th>

</tr>


<?php foreach($abonnes as $abonne) : ?>

<tr>
    <td class="pr-5">
    <?= $abonne->nom() ?>
    </td>
    <td class="pr-5">
    <?= $abonne->prenom() ?>
    </td>
    <td class="pr-5">
    <a class="btn btn-info btn-block"  href="<?= url('abonnes/' . $abonne->id()); ?>">Voir</a>
    </td>
</tr>
<?php endforeach; ?>

</table>


<?php $content = ob_get_clean(); ?>
<?php view('template', compact('content')); ?>

