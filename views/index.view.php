 <?php require('partials/head.php') ?>
<?php require('partials/sidebar.php') ?>

<?php require('partials/nav.php') ?>




<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sticky-note"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Mission</span>
                <span class="info-box-number">
                  <?= $total_missions ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Completed Missions</span>
                <span class="info-box-number"><?= $completed_mission?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-solid fa-rocket"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Spaceships</span>
                <span class="info-box-number"> <?= $total_vaisseau?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Astronauts</span>
                <span class="info-box-number"><?= $total_astronauts?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-6">
            <!-- MAP & BOX PANE -->
            
            <!-- /.card -->
            <div class="row">
              <div>
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">The beauty of space
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- image from the API -->
                   <img src="/img/pod.png" alt="The beauty of space">
                    <!-- /.direct-chat-pane -->
                  </div>
                 
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->

              <!-- /.col -->
            </div>
            <!-- /.row -->

            
          </div>
        </div>
        <div class="row">
          <!-- Left col -->
      
          <!-- /.col -->
            <div class="col-md-8">
                <!-- TABLE: LATEST MISSIONS -->
                <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Missions</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                        <tr>
                            <th style="width: 10%">
                            Name
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
                                    <ul class="list-inline">
                                        <?php foreach($mission["astronauts"] as $astronaut) :?>
                                          
                                            <li class="list-inline-item badge bg-<?= ($astronaut['h'] == "HEALTHY") ? "success" : (($astronaut['h'] == "SICK")? "warning" : "danger" )?>">
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
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="/missions/create" class="btn btn-sm btn-info float-left">Place New Mission</a>
                    <a href="/missions" class="btn btn-sm btn-secondary float-right">View All Missions</a>
                </div>
                <!-- /.card-footer -->
                </div>
            <!-- /.card -->
            </div>
          <div class="col-md-4">     

            <!-- Discovered planet  LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently discovered planets</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                 <?php foreach($planets as $planet) :?>
                        <li class="item">
                            <!-- <div class="product-img">
                            <img src="/img/default-150x150.png" alt="Planet Image" class="img-size-50">
                            </div> -->
                            <div class="product-info">
                            <a href="/planets/edit?id=<?=$planet['id']?>" class="product-title"> <?= $planet['nom'] ?>
                                <span class="badge badge-info float-right"><?= $planet['distance_terre'] ?></span>
                                </a>
                            <span class="product-description">
                                circumference: <?= $planet['circonference']?> years light
                            </span>
                            </div>
                        </li>
                  <?php endforeach?>      
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="/planets" class="uppercase">View All Planets</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

<?php require('partials/footer.php') ?> 





