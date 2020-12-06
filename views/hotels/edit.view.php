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
                <form method="post" enctype="multipart/form-data"
                      action="index.php?controller=<?php echo $table; ?>&action=edit">

                    <label>Nom Hotel</label>
                    <input type="text" name="nom_hotel" value="<?php echo $objet->nom_hotel; ?>">
                    <br>

                    <label>Nbr Etoile</label>
                    <input type="number" max="5" min="1" name="nbr_etoile" value="<?php echo $objet->nbr_etoile; ?>">
                    <br>

                    <label>Categorie Hotel</label>
                    <input type="text" name="categ_hotel" value="<?php echo $objet->categ_hotel; ?>">
                    <br>

                    <label>Adresse Hotel</label>
                    <input type="text" name="adress_hotel" value="<?php echo $objet->adress_hotel; ?>">
                    <br>

                    <label>Num Tel</label>
                    <input type="number" name="num_tel_hotel" value="<?php echo $objet->num_tel_hotel; ?>">
                    <br>

                    <label>Type Chambre</label>
                    <input type="text" name="type_chambre" value="<?php echo $objet->type_chambre; ?>">
                    <br>

                    <label>Nbr Lit</label>
                    <input type="number" name="nbr_lit_chambre" value="<?php echo $objet->nbr_lit_chambre; ?>">
                    <br>

                    <div class="form-group">
                        <label class="form-label">Photo</label>
                        <?php if (!empty($objet->photo)) { ?>
                            <img src="images/hotels/<?php echo $objet->photo ?>" width='80'><br>
                        <?php } ?>
                        <input type="file" name="photo[]" multiple id="photo" class="with-gap">
                    </div>
                    <br>

                    <input type="hidden" name="id" value="<?php echo $objet->id; ?>">
                    <input type="hidden" name="oldphoto" value="<?php echo $objet->photo; ?>">
                    <input type="submit" value="modifier">
                </form>
            </div>
        </div>
    </div>
</div>