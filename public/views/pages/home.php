<?php ob_start(); ?>

<h1>Ma bibliothèque</h1>


<div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">Les abonnés</h5>
    <p class="card-text">Découvrir et ajouter un abonné</p>
    <a class="btn btn-success"  href="<?= url('abonnes/add') ?>">Ajouter un abonné</a>
    <a href="<?= url('abonnes'); ?>" class="btn btn-primary">Voir la liste des abonnés</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">Les ouvrages</h5>
    <p class="card-text">Découvrir et ajouter un ouvrage</p>
    <a class="btn btn-success"  href="<?= url('ouvrages/add') ?>">Ajouter un ouvrage</a>
    <a href="<?= url('ouvrages'); ?>" class="btn btn-primary">Voir la liste des ouvrages</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">Les abonnements</h5>
    <p class="card-text">Découvrir et ajouter un abonnement</p>
    <a class="btn btn-success"  href="<?= url('abonnements/add') ?>">Ajouter un abonnement</a>
    <a href="<?= url('abonnements'); ?>" class="btn btn-primary">Voir la liste des abonnements</a>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>