<a href="?p=disconnect" class="btn btn-primary" >Deconnection</a>

<h1>Touts les articles</h1>
<h3>La suppression d'un article entraine le supression <span style="background:#ED0E0E">DEFINITIVE</span> de ses commentaires en base de données</h3>
<p>
<a href="?p=add" class="btn btn-success">Ajouter un article</a>
<a href="index.php?p=index.commentaire" class="btn btn-primary">Moderation des commentaires</a>
</p>

<h1>Articles Normaux (visibles par tous)</h1>

<table class="table">
  <thread>
    <tr>
      <td>ID</td>
      <td>Titre</td>
      <td>Extrait</td>
      <td>Actions</td>
    </tr>
  </thread>

  <tbody>
    <?php foreach($posts as $post):  ?>
      <tr>
        <td> <?= $post->id;  ?> </td>
        <td> <?= $post->titre;  ?> </td>
        <td> <?= $post->extrait;  ?> </td>
        <td>
         <a class="btn btn-primary" href="?p=edit&id=<?= $post->id; ?>">Modifier</a>
         <form action="?p=delete" method="post" style="display: inline">
          <input type="hidden" name="id" value="<?= $post->id; ?>"></input>
           <button class="btn btn-danger" >Supprimer</button>
         </form>

        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>

<h1>Articles Brouillons (invisibles)</h1>

<table class="table">
  <thread>
    <tr>
      <td>ID</td>
      <td>Titre</td>
      <td>Extrait</td>
      <td>Actions</td>
    </tr>
  </thread>

  <tbody>
    <?php foreach($brouillons as $brouillon):  ?>
      <tr>
        <td> <?= $brouillon->id;  ?> </td>
        <td> <?= $brouillon->titre;  ?> </td>
        <td> <?= $brouillon->extrait;  ?> </td>
        <td>
         <a class="btn btn-primary" href="?p=edit&id=<?= $brouillon->id; ?>">Modifier</a>
         <form action="?p=delete" method="post" style="display: inline">
          <input type="hidden" name="id" value="<?= $brouillon->id; ?>"></input>
           <button class="btn btn-danger" >Supprimer</button>
         </form>

        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>
