<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="POST" action="/planets">
                <input type="hidden" name="_method" value="PATCH">

                    <div class="row">

                        <div class="col-sm-6">
                        <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="hidden" name="id" value="<?= $old['id']?>">
                                <input type="text" name="name" value="<?= $old["name"]?? ''?>" required class="form-control" placeholder="Give it a name that describes it the best">
                                <?php if (isset($errors['name'])):?>    
                                    <p class="text-danger"><?=$errors["name"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Circumference</label>
                                <input type="text" class="form-control" value="<?= $old["circumference"]?? ''?>" name="circumference" placeholder="Enter its circumference.">
                                <?php if (isset($errors['circumference'])):?>    
                                    <p class="text-danger"><?=$errors["circumference"] ?></p>
                                <?php endif?>
                            </div>
                        </div> 


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Distance from earth</label>
                                <input type="text" class="form-control" value="<?= $old["distance"]?? ''?>" name="distance" placeholder="Enter how far it from earth.">
                                <?php if (isset($errors['circumference'])):?>    
                                    <p class="text-danger"><?=$errors["circumference"] ?></p>
                                <?php endif?>
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Viabilite</label>
                                <select class="form-control select2" name="viability" style="width: 100%;">
                                    <?php foreach($viabilite as $vb): ?>
                                        <option <?= ($old['viability'] == $vb) ? 'selected="selected"' : ""?> ><?=$vb?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                          
                    </div>  

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/planets"  class="btn btn-block btn-secondary">cancel</a>
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


