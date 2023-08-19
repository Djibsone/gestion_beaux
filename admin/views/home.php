<?php 
	session_start();
	include './admin/controllers/add_liste_home.php';
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
            <div class="insights">
                <div class="card">
                    <div class="card-container">
                        <div class="card-header">
                            <span class="material-icons-sharp">
                                bar_chart
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <h3>Ventes totales</h3>
                                <h1>2.03M</h1>
                            </div>

                            <div class="card-progress">
                                <svg width="96" height="96">
                                    <circle
                                        id="circle1"
                                        cx="38"
                                        cy="38"
                                        r="36"
                                        class="stroke-yellow"
                                    ></circle>
                                </svg>
                                <div class="percentage">
                                    <p>17%</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>Sur les 48H precedentes</small>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-container">
                        <div class="card-header">
                            <span class="material-icons-sharp">
                                add_shopping_cart
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <h3>Commandes</h3>
                                <h1>780</h1>
                            </div>

                            <div class="card-progress">
                                <svg width="96" height="96">
                                    <circle
                                        id="circle2"
                                        cx="38"
                                        cy="38"
                                        r="36"
                                        class="stroke-fuscha"
                                    ></circle>
                                </svg>
                                <div class="percentage">
                                    <p>72%</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>Sur les 48H precedentes</small>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-container">
                        <div class="card-header">
                            <span class="material-icons-sharp">
                                group_add
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <h3>Clients</h3>
                                <h1>21</h1>
                            </div>

                            <div class="card-progress">
                                <svg
                                    width="96"
                                    height="96"
                                    class="stroke-cyan"
                                >
                                    <circle
                                        id="circle3"
                                        cx="38"
                                        cy="38"
                                        r="36"
                                    ></circle>
                                </svg>
                                <div class="percentage">
                                    <p>43%</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>Sur les 48H precedentes</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/msg_error_success.php' ?>
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
                            <th>Nom des donneurs</th>
                            <th>Nombre de bœux pour un donneur</th>
                            <th>Sexe donneur</th>
                            <th>Nom des receveurs</th>
                            <th>Nombre de bœux reçu par receveur</th>
                            <th>Sexe receveur</th>
                            <th>Localité des receveurs</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($donneurs_receveurs as $donneur_receveur): ?>
                            <tr>
                                <td><?= $i += 1 ?></td>
                                <td><?= $donneur_receveur['nomDon'] ?></td>
                                <td><?= $donneur_receveur['nbrB'] ?></td>
                                <td><?= $donneur_receveur['sexe'] ?></td>
                                <td class="text-fuscha"><?= $donneur_receveur['nomRe'] ?></td>
                                <td><?= $donneur_receveur['nbreB'] ?></td>
                                <td><?= $donneur_receveur['sexeR'] ?></td>
                                <td><?= $donneur_receveur['localite'] ?></td>
                                <td>
                                    <button class='edit_btn edit' data-id="<?= $donneur_receveur['id'] ?>" title="Edit">Edit</button>
                                    <button class='del_btn delete' data-id="<?= $donneur_receveur['id'] ?>" title="Delete">Delete</button>
                                </td>
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
                        <p>Salut, <strong>Coding</strong></p>
                        <small>Admin</small>
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
    <?php include 'includes/home_modal.php' ?>

<?php include 'includes/footer.php' ?>