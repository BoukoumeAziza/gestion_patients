<?php
/* Smarty version 5.4.3, created on 2025-01-22 13:54:23
  from 'file:add_patient.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6790ea7fa5dbb5_05293562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83640a7a501a7114f0307af21000ff6d73eadae3' => 
    array (
      0 => 'add_patient.tpl',
      1 => 1737550460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6790ea7fa5dbb5_05293562 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11261172066790ea7fa58a10_02533441', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_11261172066790ea7fa58a10_02533441 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
?>

<section class="content">
    <div class="container-fluid">
        <!-- Card pour le formulaire d'ajout de patient -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Ajouter un nouveau patient</h3>
            </div>
            <!-- Formulaire -->
            <form method="POST" action="?action=store">
                <div class="card-body">
                    <!-- Nom -->
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez le nom du patient" required>
                    </div>
                    <!-- Prénom -->
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrez le prénom du patient" required>
                    </div>
                    <!-- Date de naissance -->
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" class="form-control" required>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Entrez l'email du patient" required>
                    </div>
                    <!-- Téléphone -->
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Entrez le téléphone du patient" required>
                    </div>
                </div>
                <!-- Footer du formulaire avec bouton de soumission -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="?action=list" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
}
}
/* {/block "content"} */
}
