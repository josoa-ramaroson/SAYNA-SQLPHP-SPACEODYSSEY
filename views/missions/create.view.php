

<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">A NEW ADVENTURE IS STARTING HERE</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="POST" action="/missions/store">

                    <div class="row">

                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                             
                                <input type="text" name="name" value="<?= $old["name"]?? ''?>" required class="form-control" placeholder="Give it a name ">
                                <?php if (isset($errors['name'])):?>    
                                    <p class="text-danger"><?=$errors["name"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Description</label>
                                    <textarea name="description" id="inputDescription" class="form-control" rows="4"></textarea>
                                <?php if (isset($errors['description'])):?>    
                                    <p class="text-danger"><?=$errors["description"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="begin">Begint at</label>
                             
                                <input type="date" required="required" id="begin" name="begin" class="form-control">
                                <?php if (isset($errors['begin'])):?>    
                                    <p class="text-danger"><?=$errors["begin"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="end">End at</label>
                             
                                <input type="date" required="required" id="end" name="end" class="form-control">
                                <?php if (isset($errors['end'])):?>    
                                    <p class="text-danger"><?=$errors["end"] ?></p>
                                <?php endif?>
                               
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <select class="form-control select2" name="state" style="width: 100%;">
                                <?php foreach($state as $st): ?>
                                        <option <?= ($old['state'] == $st) ? 'selected="selected"' : ""?> ><?=$st?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control select2" name="level" style="width: 100%;">
                                <?php foreach($level as $lv): ?>
                                        <option <?= ($old['level'] == $lv) ? 'selected="selected"' : ""?> ><?=$lv?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>

                    
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Spaceship</label>
                                <select class="form-control select2" name="spaceship" style="width: 100%;">
                                    <?php foreach($vaisseaux as $v): ?>
                                        <option <?= ($old['spaceship'] == $v['identifiant']) ? 'selected="selected"' : ""?> value="<?=$v['id']?>" ><?=$v['identifiant']?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Planets</label>
                                <select class="form-control select2" name="planets" style="width: 100%;">
                                    <?php foreach($planetes as $p): ?>
                                        <option <?= ($old['planets'] == $p['nom']) ? 'selected="selected"' : ""?> value="<?=$p['id']?>" ><?=$p['nom']?></option>"
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Astronauts</label>
                                <?php foreach($astronautes as $a): ?>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox"  name="astronauts[]" id="<?=$a['nom'].$a['id']?>" value="<?=$a['id']?>">
                                        <label for="<?=$a['nom'].$a['id']?>" class="custom-control-label"><?=$a['nom']?></label>
                                    </div>
                                    <?php endforeach?>
                                
                            </div>
                        </div>

                    </div>  

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/missions"  class="btn btn-block btn-secondary">cancel</a>
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


