<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">All Spaceships </h3>
                <!-- /.card-body -->
                <a href="/spaceships/create" class="btn btn-sm btn-info float-right">New</a>
                   
                
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Identifier</th>
                                <th>State</th>
                                <th>status</th>
                                <th>Max weight ( in t )</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($vaisseaux as $vaisseau):?>
                            <tr>
                                <td>
                                    <?= $vaisseau["identifiant"] ?>
                                </td>
                                <td>  <?= $vaisseau["etat"] ?></td>
                                <td>  <?= $vaisseau["status"] ?></td>
                                <td>  <?= $vaisseau["poids_max"] ?></td>

                                <td><span class="badge badge-success"><?= $mission["etat"] ?></span></td>
                                <td>
                                    <!-- <i class="fas fa-edit"></i> -->
                                    <a href="/spaceships/edit?id=<?=$vaisseau['id']?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="/spaceships" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $vaisseau['id']?>">
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