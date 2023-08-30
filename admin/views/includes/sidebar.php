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
                <p>Salut, <strong><?= ($_SESSION['admin']) ? $_SESSION['admin']['nom'] : 'Admin'?></strong></p>
            </div>
            <div class="profile-image">
                <img src="images/team-4.jpg" alt="" width="100%" />
            </div>
        </div>
    </header>

    <!-- Info recentes -->
    <!-- <div class="recent-updates">
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
    </div> -->

    <!-- Stat -->
    <!-- <div class="analytics">
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
            <div class="order-details"> <div class="recent-updates">
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
    </div> -->

    <!-- Stat -->
    <div class="analytics">
        <!-- <h2>Evolution des ventes</h2>
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
                <h3>619</h3>o
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
        </div> -->
        <button class="new-product addnew">
            <h3>Nouvel enregistrement</h3>
        </button>
    </div>
</aside>