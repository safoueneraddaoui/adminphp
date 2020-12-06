<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Liste des Clients</h2>
                    <!--<ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="index.php?controller=clients&action=add1" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="material-icons">Ajouter Client</i>
                            </a>
                        </li>
                    </ul>-->
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>photo</th>
                                <th>nom_client</th>
                                <th>prenom_client</th>
                                <th>age_client</th>
                                <th>adress_client</th>
                                <th>login</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($liste as $client) {
                                $tabph = explode('/', $client->photo);
                                $photo = $tabph[0];
                                echo "<tr>
				<td><img src='images/clients/" . $photo . "' width='80'></td>
				<td>" . $client->nom_client . "</td>
				<td>" . $client->prenom_client . "</td>
				<td>" . $client->age_client . "</td>
				<td>" . $client->adress_client . "</td>
				<td>" . $client->login . "</td>
				<td>
				<input type='button' value='Modifier' onclick=\"window.location.href='index.php?controller=" . $table . "&action=edit1&id=" . $client->id . "'\">
				<input type='button' value='supprimer' onclick=\"window.location.href='index.php?controller=" . $table . "&action=delete&id=" . $client->id . "'\"> </td>
			</tr>
				";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>