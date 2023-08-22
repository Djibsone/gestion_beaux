<?php 

	include './admin/controllers/add_liste_donneur.php';
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
            <h1 class="main-title">Donneurs</h1>
            
            <!-- CARD -->
            <?php include 'includes/card.php' ?>

            <!-- error_success -->
            <?php include 'includes/msg_error_success.php' ?>

            <!-- RECENT ORDERS -->
            <section class="recent-orders">
                <div class="ro-title">
                    <h2 class="recent-orders-title">Liste des donneurs</h2>
                    <a href="#" class="show-all">Tout afficher</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom des donneurs</th>
                            <th>Sexe</th>
                            <th>Total des boeux restant</th>
                            <th>Nombre total de boeux</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($donneurs as $donneur): ?>
                            <tr>
                                <td><?= $i += 1 ?></td>
                                <td><?= $donneur['nomDon'] ?></td>
                                <td><?= $donneur['sexe'] ?></td>
                                <td class="text-fuscha"><?= $donneur['nbrB'] ?></td>
                                <td><?= $donneur['nbr_total_de_boeux'] ?></td>
                                <td>
                                    <!-- <button class='add_btn addnew' data-id="<?= $donneur['id'] ?>" title="Add">Add</button> -->
                                    <button class='edit_btn edit' data-id="<?= $donneur['id'] ?>" title="Edit">Edit</button>
                                    <button class='del_btn delete' data-id="<?= $donneur['id'] ?>" title="Delete">Delete</button>
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
    <?php include 'includes/donne_modal.php' ?>

<?php include 'includes/footer.php' ?>