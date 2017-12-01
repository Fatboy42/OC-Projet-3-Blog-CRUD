<?php foreach ($all as $post): ?>
  <div class= "col-lg-6">
  <h2><?= $post->titre; ?></a></h2>
  <em>Publié le : <?= $post->dateAjout; ?></em>
  <p> <?= $post->extrait; ?></p>
  <p><a class="btn btn-default" href="<?= $post->Url ?>" role="button">Lire la suite &raquo;</a></p>
  </div><!--/.col-xs-6.col-lg-4-->
<?php endforeach; ?>
