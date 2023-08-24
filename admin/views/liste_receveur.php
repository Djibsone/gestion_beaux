<?php 

	include './admin/controllers/add_liste_receveur.php';
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
            <h1 class="main-title">Receveurs</h1>

            <!-- CARD -->
            <?php include 'includes/card.php' ?>

             <!-- error_success -->
            <?php include 'includes/msg_error_success.php' ?>

            <!-- RECENT ORDERS -->
            <section class="recent-orders">
                <!-- <form class="form-inline col-md-12 mb-4">
                    <input class="form-control" type="text" placeholder="Recherche..." id="searchInput">
                </form> -->
                <div class="ro-title mt-2">
                    <h2 class="recent-orders-title">Liste des receveurs</h2>
                    <a href="#" class="show-all">Tout afficher</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom des receveurs</th>
                            <th>Sexe</th>
                            <th>Localité des receveurs</th>
                            <th>Total des boeux réçu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($receveurs as $receveur): ?>
                            <tr>
                                <td><?= $i += 1 ?></td>
                                <td><?= $receveur['nomRe'] ?></td>
                                <td><?= $receveur['sexeR'] ?></td>
                                <td><?= $receveur['localite'] ?></td>
                                <td class="text-fuscha"><?= $receveur['nbr_total_de_boeux'] ?></td>
                                <td>
                                    <button class='edit_btn edit' data-id="<?= $receveur['id'] ?>" title="Edit">Edit</button>
                                    <button class='del_btn delete' data-id="<?= $receveur['id'] ?>" title="Delete">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>

        <!-- Sidebar droite -->
        <?php include 'includes/sidebar.php' ?>

    </div>
    <?php include 'includes/receve_modal.php' ?>

<?php include 'includes/footer.php' ?>