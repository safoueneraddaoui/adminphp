<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Ajouter Hotel</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form method="post" enctype="multipart/form-data" action="index.php?controller=<?php echo $table;?>&action=edit">

                    <label>nom_client</label>
                    <input type="text" name="nom_client" value="<?php echo $objet->nom_client;?>">
                    <br>

                    <label>prenom_client</label>
                    <input type="text" name="prenom_client" value="<?php echo $objet->prenom_client;?>">
                    <br>

                    <label>age_client</label>
                    <input type="number" name="age_client" value="<?php echo $objet->age_client;?>">
                    <br>

                    <label>adress_client</label>
                    <input type="text" name="adress_client" value="<?php echo $objet->adress_client;?>">
                    <br>

                    <label>num_tel_client</label>
                    <input type="number" name="num_tel_client" value="<?php echo $objet->num_tel_client;?>">
                    <br>

                    <label>cin_client</label>
                    <input type="number" name="cin_client" value="<?php echo $objet->cin_client;?>">
                    <br>

                    <label>sex_client</label>
                    <input type="text" name="sex_client" value="<?php echo $objet->sex_client;?>">
                    <br>

                    <label>login</label>
                    <input type="text" name="login    " value="<?php echo $objet->login;?>">
                    <br>

                    <label>civilisation_client</label>
                    <input type="text" name="civilisation_client" value="<?php echo $objet->civilisation_client;?>">
                    <br>

                    <label>password</label>
                    <input type="password" name="password" value="<?php echo $objet->password;?>">
                    <br>

                    <div class="form-group">
                        <label class="form-label">Photo</label>
                        <?php if(!empty($objet->photo)){?>
                            <img src="images/hotels/<?php echo $objet->photo?>" width='80'><br>
                        <?php } ?>
                        <input type="file" name="photo[]" multiple id="photo" class="with-gap">
                    </div><br>


                    <br>
                    <input type="hidden" name="id" value="<?php echo $objet->id;?>">
                    <input type="hidden" name="oldphoto" value="<?php echo $objet->photo;?>">
                    <input type="submit" value="modifier">
                </form>
            </div>
        </div>
    </div>
</div>