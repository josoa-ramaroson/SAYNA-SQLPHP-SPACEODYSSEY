<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="POST" action="/spaceships/store">

                    <div class="row">

                        <div class="col-sm-6">
                        <!-- text input -->
                            <div class="form-group">
                                <label>Identifier</label>
                             
                                <input type="text" name="identifier" value="<?= $old["identifier"]?? ''?>" required class="form-control" placeholder="Give it an indetifier that describes it the best">
                                <?php if (isset($errors['identifier'])):?>    
                                    <p class="text-danger"><?=$errors["identifer"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <select class="form-control select2" name="state" style="width: 100%;">
                                <?php foreach($state as $ste): ?>
                                        <option <?= ($old['state'] == $ste) ? 'selected="selected"' : ""?> ><?=$ste?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <?php foreach($status as $st): ?>
                                        <option <?= ($old['status'] == $st) ? 'selected="selected"' : ""?> ><?=$st?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                          
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Maximum weight for the ship ( in t )</label>
                                <input type="text" class="form-control" value="<?= $old["weight"]?? ''?>" name="weight" placeholder="Enter ...">
                                <?php if (isset($errors['weight'])):?>    
                                    <p class="text-danger"><?=$errors["weight"] ?></p>
                                <?php endif?>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/spaceships"  class="btn btn-block btn-secondary">cancel</a>
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


