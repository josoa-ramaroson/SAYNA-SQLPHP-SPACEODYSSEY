<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ENTER THE INFORMATION FOR THE NEWBIES</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="POST" action="/astronauts/store">

                    <div class="row">

                        <div class="col-sm-6">
                        <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                             
                                <input type="text" name="name" value="<?= $old["name"]?? ''?>" required class="form-control" placeholder="Give it an indetifier that describes it the best">
                                <?php if (isset($errors['name'])):?>    
                                    <p class="text-danger"><?=$errors["name"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Health</label>
                                <select class="form-control select2" name="health" style="width: 100%;">
                                <?php foreach($health as $ht): ?>
                                        <option <?= ($old['health'] == $ste) ? 'selected="selected"' : ""?> ><?=$ht?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                        <!-- text input -->
                            <div class="form-group">
                                <label>Height (m)</label>
                             
                                <input type="text" name="height" value="<?= $old["height"]?? ''?>" required class="form-control" placeholder="Give it an indetifier that describes it the best">
                                <?php if (isset($errors['height'])):?>    
                                    <p class="text-danger"><?=$errors["height"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                            
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Weight (kg)</label>
                                <input type="text" class="form-control" value="<?= $old["weight"]?? ''?>" name="weight" placeholder="Enter ...">
                                <?php if (isset($errors['weight'])):?>    
                                    <p class="text-danger"><?=$errors["weight"] ?></p>
                                <?php endif?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Years of experiences </label>
                                <input type="text" class="form-control" value="<?= $old["year"]?? ''?>" name="year" placeholder="Enter ...">
                                <?php if (isset($errors['year'])):?>    
                                    <p class="text-danger"><?=$errors["year"] ?></p>
                                <?php endif?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Disponibility</label>
                                <select class="form-control select2" name="disponibility" style="width: 100%;">
                                    <?php foreach($disponibility as $dp): ?>
                                        <option <?= ($old['disponibility'] == $dp) ? 'selected="selected"' : ""?> ><?=$dp?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Spaceship</label>
                                <select class="form-control select2" name="spaceship" style="width: 100%;">
                                    <?php foreach($vaisseaux as $v): ?>
                                        <option><?=$v['identifiant']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/astronauts"  class="btn btn-block btn-secondary">cancel</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>  
                    </div>
                 </form>
              </div>
              <!-- /.card-body -->
            </div>
            
            </div>


<?php require base_path('views/partials/footer.php')?> 


