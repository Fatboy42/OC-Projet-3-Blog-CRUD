<div class="form-group">
<form method="post">
<?= $form->input('titre', 'Titre');  ?>
<?= $form->input('contenu', 'Contenu', ['type' => 'textarea']);  ?>
<?= $form->select('etat', 'Etat de l\'article', [1 => 'Publier', 2 => 'Brouillon']);  ?>
<button class="btn btn-primary">Sauvegarder</button>
</div>
