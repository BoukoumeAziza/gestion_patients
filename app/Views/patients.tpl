{extends file="layouts.tpl"}

{block name="content"}
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
                        <input type="text" class="form-control form-control-lg" name="search" placeholder="Rechercher par nom ou prénom" value="{$searchQuery}">
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
                                    {foreach $patients as $patient}
                                    <tr>
                                        <td>{$patient.nom}</td>
                                        <td>{$patient.prenom}</td>
                                        <td>{$patient.email}</td>
                                        <td>{$patient.telephone}</td>
                                        <td>{$patient.date_naissance}</td>
                                        <td>
                                            <a href="../public/index.php?action=edit&id={$patient.id}" class="btn btn-warning btn-sm mb-2">Modifier</a>
                                            <a href="../public/index.php?action=delete&id={$patient.id}" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    {/foreach}
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
                            {foreach $doctors as $doctor}
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <img src="doctor-photo.jpg" class="card-img-top" alt="Docteur">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{$doctor.nom} {$doctor.prenom}</h5>
                                        <p class="card-text">Spécialité: {$doctor.specialty}</p>
                                        <a href="#" class="btn btn-primary btn-sm">Voir Profil</a>
                                    </div>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
{/block}
