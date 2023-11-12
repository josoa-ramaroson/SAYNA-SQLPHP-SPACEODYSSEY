
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">All Astronauts </h3>
                <!-- /.card-body -->
                <a href="/astronauts/create" class="btn btn-sm btn-info float-right">New</a>
                   
                
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Health</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Years of experience</th>
                                <th>Disponibility</th>
                                <th>Spaceships</th>
                                
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($astronautes as $astronaute):?>
                            <tr>
                                <td>
                                    <?= $astronaute["nom"] ?>
                                </td>
                                <td>  <?= $astronaute["etat_sante"] ?></td>
                                <td>  <?= $astronaute["taille"] ?></td>
                                <td>  <?= $astronaute["poids"] ?></td>
                                <td>  <?= $astronaute["annee_experience"] ?></td>
                                <td>  <?= $astronaute["disponibilite"] ?></td>
                                <td>  <?= $astronaute["identifiant"] ?></td>

                                <td>
                                    <!-- <i class="fas fa-edit"></i> -->
                                    <a href="/astronauts/edit?id=<?=$astronaute['id']?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="/astronauts" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $astronaute['id']?>">
                                        <button type="submit" class="bg-danger colore-palette" style="border:none">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
               
                <!-- /.card-footer -->
                </div>
</div>

<?php require base_path('views/partials/footer.php')?> 