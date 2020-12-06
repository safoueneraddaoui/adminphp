<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Ajouter utilisateur</h2>
                </div>
                <div class="body">

                    <form method="post" id="form_validation"
                          action="index.php?controller=<?php echo $table; ?>&action=add">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nom_user" required>
                                <label class="form-label">Nom utilisateur</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="login" required>
                                <label class="form-label">Login</label>
                            </div>
                        </div>
                        <br>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" required>
                                <label class="form-label">mot de passe</label>
                            </div>
                        </div>
                        <br>

                        <br>
                        <button class="btn btn-primary waves-effect" type="submit">Ajouter</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
