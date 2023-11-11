<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Missions </h3>
                <!-- /.card-body -->
                <a href="/missions/create" class="btn btn-sm btn-info float-right">New Mission</a>
                   
                
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Begin at</th>
                                <th>End at</th>
                                <th>Status</th>
                                <th>Level</th>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($missions as $mission):?>
                            <tr>
                                <td>
                                    <?= $mission["nom"] ?>
                                </td>
                                <td>  <?= $mission["debut"] ?></td>
                                <td>  <?= $mission["fin"] ?></td>
                                <td>  <?= $mission["niveau"] ?></td>

                                <td><span class="badge badge-success"><?= $mission["etat"] ?></span></td>
                                <td>
                                    <!-- <i class="fas fa-edit"></i> -->
                                    <i class="fas fa-eye"></i>
                                </td>
                                <td>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>

                            
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
               

                <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of our missions</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width: 30%">
                          Team Members
                      </th>
                      <th>
                          Project Progress
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              AdminLTE v3
                          </a>
                          <br>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                 
             
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
                <!-- /.card-footer -->
                </div>
</div>

<?php require base_path('views/partials/footer.php')?> 