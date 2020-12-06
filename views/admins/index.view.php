<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Liste des utilisateurs</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="index.php?controller=<?php echo $table; ?>&action=add1">
                                <i class="material-icons">Ajouter Admin</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>nom</th>
                                <th>login</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($liste as $objet) {
                                echo "<tr>
				<td>" . $objet->nom_user . "</td>
				<td>" . $objet->login . "</td>
				<td>
				<input type='button' value='Modifier' onclick=\"window.location.href='index.php?controller=" . $table . "&action=edit1&id=" . $objet->id . "'\">
				<input type='button' value='supprimer' onclick=\"if(confirm('etes vous eure de supprimer?')) window.location.href='index.php?controller=" . $table . "&action=delete&id=" . $objet->id . "'\"> </td>
			</tr>
				";
                            }
                            ?>
                        </table>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>