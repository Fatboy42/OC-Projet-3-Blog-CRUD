<?php if ($reported !=null):?>
<h1>Commentaires Signalés</h1>
 <table class="table">
   <thread>
     <tr>
       <td>ID</td>
       <td>Pseudo</td>
       <td>Commentaire</td>
       <td>Article (du commentaire)</td>
       <td>ID Article</td>
       <td>Actions</td>
     </tr>
   </thread>

   <tbody>
     <?php foreach($reported as $report):  ?>
       <tr>
         <td> <?= $report->id;  ?> </td>
         <td> <?= $report->pseudo;  ?> </td>
         <td> <?= $report->contenu;  ?> </td>
         <td> <?= $report->titre;  ?> </td>
         <td> <?= $report->idarticle;  ?> </td>
         <td>

          <form action="?p=rehab" method="post" style="display: inline">
           <input type="hidden" name="id" value="<?= $report->id; ?>"></input>
            <button class="btn btn-primary" >Conserver</button>
          </form>

          <form action="?p=delete.comm" method="post" >
           <input type="hidden" name="id" value="<?= $report->id; ?>"></input>
            <button class="btn btn-danger" >Supprimer</button>
          </form>

        </td>
       </tr>
     <?php endforeach; ?>
   </tbody>
 </table>
 <?php endif; ?>

<?php if ($fine !=null):?>
 <h1>Commentaires Normaux</h1>
  <table class="table">
    <thread>
      <tr>
        <td>ID</td>
        <td>Pseudo</td>
        <td>Commentaire</td>
        <td>Article (du commentaire)</td>
        <td>ID Article</td>
        <td>Actions</td>
      </tr>
    </thread>

    <tbody>
      <?php foreach($fine as $good):  ?>
        <tr>
          <td> <?= $good->id;  ?> </td>
          <td> <?= $good->pseudo;  ?> </td>
          <td> <?= $good->contenu;  ?> </td>
          <td> <?= $good->titre;  ?> </td>
          <td> <?= $good->idarticle;  ?> </td>
          <td>

           <form action="?p=delete.comm" method="post" style="display: inline">
            <input type="hidden" name="id" value="<?= $good->id; ?>"></input>
             <button class="btn btn-danger" >Supprimer</button>
           </form>

         </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<?php if ($deleted !=null):?>
 <h1>Commentaires Supprimés</h1>
 <h3>Les commentaires supprimés ne sont plus visibles sur le site mais ils sont toujours stockés en base de données</h3>
  <table class="table">
    <thread>
      <tr>
        <td>ID</td>
        <td>Pseudo</td>
        <td>Commentaire</td>
        <td>Article (du commentaire)</td>
        <td>ID Article</td>
      </tr>
    </thread>

    <tbody>
      <?php foreach($deleted as $delete):  ?>
        <tr>
          <td> <?= $delete->id;  ?> </td>
          <td> <?= $delete->pseudo;  ?> </td>
          <td> <?= $delete->contenu;  ?> </td>
          <td> <?= $delete->titre;  ?> </td>
          <td> <?= $delete->idarticle;  ?> </td>
          <td>

            <form action="?p=rehab" method="post" style="display: inline">
             <input type="hidden" name="id" value="<?= $delete->id; ?>"></input>
              <button class="btn btn-primary" >Conserver</button>
            </form>

          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<?php if ($reported == null && $deleted == null && $fine == null):  ?>

<h1>Pas de commentaires !</h1>

<?php endif; ?>
