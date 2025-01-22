<?php
/* Smarty version 5.4.3, created on 2025-01-22 19:37:57
  from 'file:patients.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67913b054c4b86_09438302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51be5e522c33c40bfacca67c12a4ffa943526d28' => 
    array (
      0 => 'patients.tpl',
      1 => 1737571074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67913b054c4b86_09438302 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_184207313167913b054af358_21838770', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_184207313167913b054af358_21838770 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
?>

<section class="content">
    <div class="container-fluid">

        <!-- Statistiques en haut, sur une ligne -->
        <div class="row justify-content-between mb-4">
            <div class="col-md-3">
                <div class="info-box bg-info text-center rounded shadow-sm">
                    <span class="info-box-icon"><i class="fas fa-procedures"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Docteurs Disponibles</span>
                        <span class="info-box-number">120</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-box bg-success text-center rounded shadow-sm">
                    <span class="info-box-icon"><i class="fas fa-user-md"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Docteurs Actifs Aujourd'hui</span>
                        <span class="info-box-number">45</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-box bg-warning text-center rounded shadow-sm">
                    <span class="info-box-icon"><i class="fas fa-calendar-day"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Rendez-vous Aujourd'hui</span>
                        <span class="info-box-number">320</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de recherche -->
        <form method="GET" action="index.php?page=patients">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" name="search" placeholder="Rechercher par nom ou prénom" value="<?php echo $_smarty_tpl->getValue('searchQuery');?>
">
                        <button type="submit" class="btn btn-info btn-lg">
                            <i class="fas fa-search"></i> Rechercher
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">

            <!-- Tableau des patients - Colonne gauche -->
            <div class="col-md-6">
                <div class="card shadow-lg rounded-lg">
                    <div class="card-header bg-info text-white text-center">
                        <h3 class="card-title">Détails des patients</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Date de naissance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['nom'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['prenom'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['email'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['telephone'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['date_naissance'];?>
</td>
                                        <td>
                                            <a href="../public/index.php?action=edit&id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-warning btn-sm mb-2">Modifier</a>
                                            <a href="../public/index.php?action=delete&id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Liste des Docteurs - Colonne droite -->
            <div class="col-md-6">
                <div class="card shadow-lg rounded-lg">
                    <div class="card-header bg-info text-white text-center">
                        <h3 class="card-title">Nos Docteurs</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach1DoElse = false;
?>
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <img src="doctor-photo.jpg" class="card-img-top" alt="Docteur">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php echo $_smarty_tpl->getValue('doctor')['nom'];?>
 <?php echo $_smarty_tpl->getValue('doctor')['prenom'];?>
</h5>
                                        <p class="card-text">Spécialité: <?php echo $_smarty_tpl->getValue('doctor')['specialty'];?>
</p>
                                        <a href="#" class="btn btn-primary btn-sm">Voir Profil</a>
                                    </div>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<?php
}
}
/* {/block "content"} */
}
