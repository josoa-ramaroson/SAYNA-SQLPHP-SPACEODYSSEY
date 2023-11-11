<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">All planets </h3>
                <!-- /.card-body -->
                <a href="/planets/create" class="btn btn-sm btn-info float-right">New</a>
                   
                
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Circumference</th>
                                <th>Distance from earth</th>
                                <th>viability</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($planetes as $planete):?>
                            <tr>
                                <td>
                                    <?= $planete["nom"] ?>
                                </td>
                                <td>  <?= $planete["circonference"] ?></td>
                                <td>  <?= $planete["distance_terre"] ?></td>
                                <td>  <?= $planete["viabilite"] ?></td>

                                <td>
                                    <!-- <i class="fas fa-edit"></i> -->
                                    <a href="/planets/edit?id=<?=$planete['id']?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="/planets" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $planete['id']?>">
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