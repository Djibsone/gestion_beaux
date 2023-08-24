<?php 

    include './admin/controllers/add_liste_home.php';
    include 'includes/session.php';
    global $i; 
?>



<?php include 'includes/header.php' ?>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="main-sidebar">
            <header class="aside-header">
                <div class="brand">
                    <img src="https://comps.canstockphoto.fr/f%C3%A2ch%C3%A9-t%C3%AAte-taureau-cliparts-vectoris%C3%A9s_csp43546163.jpg" alt="Logo" />
                    <h3>GESTION DES BOEUX</h3>
                </div>
                <div class="close" id="closeSidebar">
                    <span class="material-icons-sharp"> close </span>
                </div>
            </header>

            <div class="sidebar" id="sidebar">
                <ul class="list-items">
                    <li class="item">
                        <a href="./home">
                            <span class="material-icons-sharp">
                                Tableau de bord
                            </span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./donneurs">
                            <span class="material-icons-sharp">
                                Liste des donneurs
                            </span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./receveurs">
                            <span class="material-icons-sharp">
                                Liste des receveurs
                            </span>
                        </a>
                    </li>
                    <!-- <li class="item">
                        <a href="#" class="">
                            <span class="material-icons-sharp">
                                insights
                            </span>
                            <span>Statistiques</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="active">
                            <span class="material-icons-sharp">
                                textsms
                            </span>
                            <span>Messagerie</span>
                            <span class="message-count">17</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <span class="material-icons-sharp">
                                inventory
                            </span>
                            <span>Produits</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <span class="material-icons-sharp">
                                report
                            </span>
                            <span>Rapports</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <span class="material-icons-sharp">
                                settings
                            </span>
                            <span>Reglages</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <span class="material-icons-sharp"> add </span>
                            <span>Ajouter un produit</span>
                        </a>
                    </li> -->
                    <li class="item">
                        <a href="/logout">
                            <span class="material-icons-sharp">
                                Se Deconnecter
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main -->
        <main class="main-container">
            <h1 class="main-title">Admin</h1>

            <!-- CARD -->
            <?php include 'includes/card.php' ?>

           <!-- error_success -->
            <?php include 'includes/msg_error_success.php' ?>

            <!-- RECENT ORDERS -->
            <section class="recent-orders">
                <form class="form-inline col-md-12 mb-4">
                    <input class="form-control" type="text" placeholder="Recherche..." id="searchInput">
                </form>
                <div class="ro-title mt-2">
                    <h2 class="recent-orders-title">Affichage complet</h2>
                    <a href="#" class="show-all">Tout afficher</a>
                </div>
                <table id="searchResultsTable">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom donneurs</th>
                            <th>Nombre bœux restant par donneur</th>
                            <th>Sexe donneur</th>
                            <th>Nom receveurs</th>
                            <th>Nombre bœux reçu par receveur</th>
                            <th>Sexe receveur</th>
                            <th>Localité receveurs</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $table; ?>
                    </tbody>
                </table>
                <div class="error mt-2"></div>
            </section>
        </main>

        <!-- Sidebar droite -->
        <?php include 'includes/sidebar.php' ?>

    </div>
    <?php include 'includes/home_modal.php' ?>

<?php include 'includes/footer.php' ?>