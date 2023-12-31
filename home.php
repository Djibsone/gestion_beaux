<?php 

	include './admin/controllers/add_liste_home.php';
    global $i; 
?>

<?php include './admin/views/includes/header.php' ?>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="main-sidebar">
            <header class="aside-header">
                <div class="brand">
                    <img src="images/cc1.png" alt="Logo" />
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
                    <li class="item" hidden>
                        <a href="#">
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
            <?php include 'admin/views/includes/card.php' ?>

            <!-- RECENT ORDERS -->
            <section class="recent-orders">
                <div class="ro-title">
                    <h2 class="recent-orders-title">Affichage complet</h2>
                    <a href="#" class="show-all">Tout afficher</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom donneurs</th>
                            <th>Nombre bœux par donneur</th>
                            <th>Sexe donneur</th>
                            <th>Nom receveurs</th>
                            <th>Nombre bœux reçu par receveur</th>
                            <th>Sexe receveur</th>
                            <th>Localité receveurs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($donnes_receves as $donne_receve): ?>
                            <tr>
                                <td><?= $i += 1 ?></td>
                                <td><?= $donne_receve['nomDon'] ?></td>
                                <td class="text-fuscha"><?= $donne_receve['nbrB'] ?></td>
                                <td><?= $donne_receve['sexe'] ?></td>
                                <td><?= $donne_receve['nomRe'] ?></td>
                                <td class="text-fuscha"><?= $donne_receve['nbreB'] ?></td>
                                <td><?= $donne_receve['sexeR'] ?></td>
                                <td><?= $donne_receve['localite'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>

        <!-- Sidebar droite -->
        <aside class="extrabar">
            <header class="header-right">
                <button class="toggle-menu-btn" id="openSidebar">
                    <span class="material-icons-sharp"> menu </span>
                </button>

                <div class="toggle-theme">
                    <span class="material-icons-sharp active">
                        tungsten
                    </span>
                    <span class="material-icons-sharp"> dark_mode </span>
                </div>
                <div class="profile">
                    <div class="profile-info">
                        <p>Salut, <strong><?= ($_SESSION['admin']) ? $_SESSION['admin']['nom'] : 'User'?></strong></p>
                    </div>
                    <div class="profile-image">
                        <img src="images/team-4.jpg" alt="" width="100%" />
                    </div>
                </div>
            </header>

            <!-- Info recentes -->
            <div class="recent-updates">
                <h2>Infos recentes</h2>
                <div class="updates-container">
                    <div class="update">
                        <div class="profile-image">
                            <img
                                src="images/team-1.jpg"
                                alt=""
                                width="100%"
                            />
                        </div>
                        <div class="message">
                            <p>
                                <strong>Arthur</strong> Lorem ipsum dolor
                                sit amet consectetur adipisicing elit.
                            </p>
                            <small>Il y a 8 minutes</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-image">
                            <img
                                src="images/team-2.jpg"
                                alt=""
                                width="100%"
                            />
                        </div>
                        <div class="message">
                            <p>
                                <strong>Alicia</strong> Lorem ipsum, dolor
                                sit amet consectetur adipisicing.
                            </p>
                            <small>Il y a 1 heures</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-image">
                            <img
                                src="images/team-3.jpg"
                                alt=""
                                width="100%"
                            />
                        </div>
                        <div class="message">
                            <p>
                                <strong>Thomas</strong> Lorem ipsum dolor
                                sit amet consectetur adipisicing elit.
                            </p>
                            <small>Il y a 3 heures</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stat -->
            <div class="analytics">
                <h2>Evolution des ventes</h2>
                <div class="order direct">
                    <div class="order-icon">
                        <span class="material-icons-sharp">
                            shopping_cart
                        </span>
                    </div>
                    <div class="order-details">
                        <div class="info">
                            <h3>COMMANDES DIRECTES</h3>
                            <small>48H precedentes</small>
                        </div>
                        <h4 class="percent-evo text-cyan">+18%</h4>
                        <h3>2417</h3>
                    </div>
                </div>
                <div class="order online">
                    <div class="order-icon">
                        <span class="material-icons-sharp"> wifi </span>
                    </div>
                    <div class="order-details">
                        <div class="info">
                            <h3>COMMANDES DIRECTES</h3>
                            <small>48H precedentes</small>
                        </div>
                        <h4 class="percent-evo text-fuscha">-5%</h4>
                        <h3>619</h3>
                    </div>
                </div>
                <div class="order customers">
                    <div class="order-icon">
                        <span class="material-icons-sharp">
                            group_add
                        </span>
                    </div>
                    <div class="order-details">
                        <div class="info">
                            <h3>COMMANDES DIRECTES</h3>
                            <small>48H precedentes</small>
                        </div>
                        <h4 class="percent-evo text-cyan">+22%</h4>
                        <h3>411</h3>
                    </div>
                </div>
                <button class="new-product addnew">
                    <span class="material-icons-sharp"> add </span>
                    <h3>Nouveau donneur-receveur</h3>
                </button>
            </div>
        </aside>
    </div>

<?php include './admin/views/includes/footer.php' ?>