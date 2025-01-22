<?php
/* Smarty version 5.4.3, created on 2025-01-22 14:06:03
  from 'file:modify_patient.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6790ed3b33b851_27391945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681a53466988425a0c0abbe39a37e24a7d419df5' => 
    array (
      0 => 'modify_patient.tpl',
      1 => 1737550736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6790ed3b33b851_27391945 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5943316396790ed3b324da7_43816260', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_5943316396790ed3b324da7_43816260 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
?>

<section class="content">
    <div class="container-fluid">
        <div class="mb-3">
            <a href="index.php?action=list" class="btn btn-secondary">Retour à la liste des patients</a>
        </div>

        <div class="card mt-4 shadow-lg">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Modifier le patient</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="index.php?action=update&id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $_smarty_tpl->getValue('patient')['nom'];?>
" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $_smarty_tpl->getValue('patient')['prenom'];?>
" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->getValue('patient')['email'];?>
" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $_smarty_tpl->getValue('patient')['telephone'];?>
" required>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="<?php echo $_smarty_tpl->getValue('patient')['date_naissance'];?>
" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
}
}
/* {/block "content"} */
}
