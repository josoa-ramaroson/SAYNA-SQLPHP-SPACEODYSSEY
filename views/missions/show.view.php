<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card">
               

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of our missions</h3>
          <a href="/missions/create" class="btn btn-sm btn-info float-right">New Mission</a>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped table-responsive projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                      Name
                      </th>
                      <th style="width: 5%">
                      Begin at
                      </th>
                      <th style="width: 5%">
                      End at
                      </th>
                      <th style="width: 30%">
                        Astronauts
                      </th>
                      <th style="width: 10%">
                        Spaceship
                      </th>
                      <th style="width: 10%">
                        Planet
                      </th>
                      <th>
                        Level
                      </th>
                      <th style="width: 8%" class="text-center">
                          State
                      </th>
                      <th style="width: 20%">
                    
                      </th>
                  </tr>
              </thead>
              <tbody>
                    <?php foreach($missions as $mission):?>
                        <tr>
                            <td>
                                <?= $mission["nom"] ?>
                            </td>
                            <td>
                                <?= $mission["debut"] ?>
                            </td>
                            <td>
                                <?= $mission["fin"] ?>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <?php foreach($mission["astronauts"] as $astronaut) :?>
                                        <li class="list-inline-item">
                                            <!-- <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png"> -->
                                            <?= $astronaut["nom"] ?>
                                            </li>
                                    <?php endforeach?>      
                                    </ul>
                                </td>
                                <td>
                                    <?= $mission["spaceship"] ?>
                                </td>
                                <td>
                                    <?= $mission["planet"] ?>
                                </td>
                            <td >
                                <?= $mission["niveau"] ?>                         
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">  <?= $mission["etat"] ?></span>
                            </td>
                            <td class="project-actions text-right">
                               
                                <a class="btn btn-info btn-sm" href="/missions/edit?id=<?=$mission['id']?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form action="/missions" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $mission['id']?>">
                                                <button type="submit" class="btn btn-danger btn-sm" style="border:none">
                                                    <i class="fas fa-trash"></i>
                                                        Delete
                                                </button>
                                            </form>
                                <a class="" href="#">
                                    
                                </a>
                            </td>
                        </tr>
                        
                    <?php endforeach;?>
             
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
                <!-- /.card-footer -->
                </div>
</div>

<?php require base_path('views/partials/footer.php')?> 