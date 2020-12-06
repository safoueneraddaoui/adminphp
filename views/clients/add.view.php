<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Ajouter Clients</h2>
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
                <form method="post" id="form_validation" enctype="multipart/form-data" action="index.php?controller=<?php echo $table; ?>&action=add">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="nom_client" class="form-control">
                            <label class="form-label">Nom Client</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="prenom_client" class="form-control">
                            <label class="form-label">Prenom Client</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" min="18" max="80" name="age_client" class="form-control">
                            <label class="form-label">Age Client</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="adress_client" class="form-control">
                            <label class="form-label">Adresse Client</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="tel" name="num_tel_client" class="form-control">
                            <label class="form-label">Num Tel</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="cin_client" class="form-control">
                            <label class="form-label">Cin Client</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="sex_client" class="form-control">
                            <label class="form-label">Sex Client</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="login" class="form-control">
                            <label class="form-label">login</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="civilisation_client" class="form-control">
                            <label class="form-label">civilisation_client</label>
                        </div>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" name="password" class="form-control">
                            <label class="form-label">password </label>
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