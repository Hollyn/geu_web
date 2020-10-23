<span id="array" contain="<?= json_encode([34,43,45,8,67,35,70])?>"></span>

<?= $this->Html->script('data_dashboard', ['block' => true]) ?>

<?= $this->Html->script('klorofil-main.js', ['block' => true]) ?>

<h1>Tableau de bord</h1>

    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Aperçu hebdomadaire</h3>
            <p class="panel-subtitle">Période: 18 Sep 2019 - 24 Sep 2019</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-calendar"></i></span>
                        <p>
                            <span class="number">32</span>
                            <span class="title">Événements</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <p>
                            <span class="number">115</span>
                            <span class="title">Utilisateurs</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-eye"></i></span>
                        <p>
                            <span class="number">23</span>
                            <span class="title">Visites</span>
                        </p>
                    </div>
                </div>
<!--                <div class="col-md-3">-->
<!--                    <div class="metric">-->
<!--                        <span class="icon"><i class="fa fa-bar-chart"></i></span>-->
<!--                        <p>-->
<!--                            <span class="number">35%</span>-->
<!--                            <span class="title">Conversions</span>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div style="width: 100%;" id="headline-chart" class="ct-chart"></div>
                </div>
                <div class="col-md-3">
                    <div class="weekly-summary text-right">
                        <span class="number">7</span>
                            <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%
                            </span>
                        <span class="info-label">Total événement</span>
                    </div>
                    <div class="weekly-summary text-right">
                        <span class="number">5</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
                        <span class="info-label">Toal utilisateur</span>
                    </div>
                    <div class="weekly-summary text-right">
                        <span class="number">45</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
                        <span class="info-label">Total visite</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OVERVIEW -->
    <div class="row">
<!--        <div class="col-md-7">-->
<!--            <div class="panel">-->
<!--                <div class="panel-heading">-->
<!--                    <h3 class="panel-title">Recent Purchases</h3>-->
<!--                    <div class="right">-->
<!--                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>-->
<!--                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="panel-body no-padding">-->
<!--                    <table class="table table-striped">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th>Order No.</th>-->
<!--                            <th>Name</th>-->
<!--                            <th>Amount</th>-->
<!--                            <th>Date &amp; Time</th>-->
<!--                            <th>Status</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            <td><a href="#">763648</a></td>-->
<!--                            <td>Steve</td>-->
<!--                            <td>$122</td>-->
<!--                            <td>Oct 21, 2016</td>-->
<!--                            <td><span class="label label-success">COMPLETED</span></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="#">763649</a></td>-->
<!--                            <td>Amber</td>-->
<!--                            <td>$62</td>-->
<!--                            <td>Oct 21, 2016</td>-->
<!--                            <td><span class="label label-warning">PENDING</span></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="#">763650</a></td>-->
<!--                            <td>Michael</td>-->
<!--                            <td>$34</td>-->
<!--                            <td>Oct 18, 2016</td>-->
<!--                            <td><span class="label label-danger">FAILED</span></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="#">763651</a></td>-->
<!--                            <td>Roger</td>-->
<!--                            <td>$186</td>-->
<!--                            <td>Oct 17, 2016</td>-->
<!--                            <td><span class="label label-success">SUCCESS</span></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="#">763652</a></td>-->
<!--                            <td>Smith</td>-->
<!--                            <td>$362</td>-->
<!--                            <td>Oct 16, 2016</td>-->
<!--                            <td><span class="label label-success">SUCCESS</span></td>-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--                <div class="panel-footer">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>-->
<!--                        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="col-md-5">
            <!-- TIMELINE -->
<!--            <div class="panel panel-scrolling">-->
<!--                <div class="panel-heading">-->
<!--                    <h3 class="panel-title">Activités récentes des utilisateurs</h3>-->
<!--                    <div class="right">-->
<!--                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>-->
<!--                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="panel-body">-->
<!--                    <ul class="list-unstyled activity-list">-->
<!--                        <li>-->
<!--                            <img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">-->
<!--                            <p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">-->
<!--                            <p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">-->
<!--                            <p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">-->
<!--                            <p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">-->
<!--                            <p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    <button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>-->
<!--                </div>-->
<!--            </div>-->
            <!-- END TIMELINE -->
        </div>
    </div>