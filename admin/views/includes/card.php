<div class="insights">
    <div class="card">
        <div class="card-container">
            <div class="card-header">
                <span class="material-icons-sharp">
                Total de bœux
                </span>
            </div>
            <div class="card-body">
                <div class="card-info">
                    <h3>Boeux</h3>
                    <h1><?= $nbr_total_boeu ?></h1>
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
                    Total donneur
                </span>
            </div>
            <div class="card-body">
                <div class="card-info">
                    <h3>Donnuers</h3>
                    <h1><?= $total_donneur ?></h1>
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
                    Total receveur
                </span>
            </div>
            <div class="card-body">
                <div class="card-info">
                    <h3>Receveurs</h3>
                    <h1><?= $total_receveur ?></h1>
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