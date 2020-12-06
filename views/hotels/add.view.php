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
                <form method="post" id="form_validation" enctype="multipart/form-data"
                      action="index.php?controller=<?php echo $table; ?>&action=add">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="nom_hotel" class="form-control">
                            <label class="form-label">Nom Hotel</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" max="5" min="1" name="nbr_etoile" class="form-control">
                            <label class="form-label">Nombre Etoile</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="categ_hotel" class="form-control">
                            <label class="form-label">Catégorie Hotel</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="adress_hotel" class="form-control">
                            <label class="form-label">Adresse Hotel</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="num_tel_hotel" class="form-control">
                            <label class="form-label">Num Tel</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="type_chambre" class="form-control">
                            <label class="form-label">Type Chambre</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="nbr_lit_chambre" class="form-control">
                            <label class="form-label">Nbr lit</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Photo</label>
                        <input type="file" name="photo[]" id="photo" multiple class="with-gap">
                    </div>
                    <br>
                    <input type="submit" value="ajouter hotel">
                </form>
            </div>
        </div>
    </div>
</div>