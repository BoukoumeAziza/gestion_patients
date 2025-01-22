{extends file="layouts.tpl"}

{block name="content"}
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
                <form method="POST" action="index.php?action=update&id={$patient.id}">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{$patient.nom}" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{$patient.prenom}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{$patient.email}" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="{$patient.telephone}" required>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{$patient.date_naissance}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
</section>
{/block}
