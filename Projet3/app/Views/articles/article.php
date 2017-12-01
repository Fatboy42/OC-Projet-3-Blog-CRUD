
<?php if(isset($_SESSION['flash']) ): ?>
<div class="alert alert-success"><?=$_SESSION['flash']?></div>
<?php endif; ?>

<h1><?= $article->titre; ?></h1>

<p><em>Publié le : <?= $article->dateAjout; ?></em></p>
<p><em>Auteur : <?= $article->pseudo; ?></em></p>

<?php if ($article->dateModif != 0000-00-00 && $article->dateModif != null):?>
<p><em>Modifié le : <?= $article->dateModif; ?></em></p>
<?php endif; ?>

<p><?= $article->contenu; ?></p>


<div class="form-group">


<form method="post">
<?= $form->input('pseudo', 'Pseudo');  ?>
<?= $form->input('mail', 'Adresse Mail');  ?>
<?= $form->input('contenu', 'Contenu', ['type' => 'textarea']);  ?>
<input type="hidden" name="id" value="<?= $article->id; ?>"></input>
<button class="btn btn-primary" >Publier le commentaire</button>
</form>
</br>

</div>

<h3>Commentaires :</h3>

</br>

<?php if ($commentaires != null): ?>

<?php foreach($commentaires as $commentaire):  ?>

<p> <strong> Pseudo : </strong><?= $commentaire->pseudo; ?><strong> Mail : </strong><?= $commentaire->mail; ?></p>
<p><strong>Date : </strong>Date : <?= $commentaire->date; ?></p>
<p><strong>Commentaire : </strong><?= $commentaire->contenu; ?></p>

<form action="/index.php?p=report" method="post">
<input type="hidden" name="idcomm" value="<?= $commentaire->id; ?>"></input>
<input type="hidden" name="idarticle" value="<?= $article->id; ?>"></input>
<button class="btn btn-secondary" >Signaler</button>
</form>

</br>

<?php endforeach; ?>

<?php else: ?>

<h3>Pas de commentaires, soyez le premier à en poster un !</h3>

</br>
<?php endif; ?>
