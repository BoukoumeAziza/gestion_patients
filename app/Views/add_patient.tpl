{extends file="layouts.tpl"}

{block name="content"}
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
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrez le prénom du patient" required>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Entrez l'email du patient" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Entrez le téléphone du patient" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="?action=list" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</section>
{/block}
