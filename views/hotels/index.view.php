<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Liste des Hotel</h2>
                    <!--<ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="index.php?controller=hotels&action=add1" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="material-icons">Ajouter Hotel</i>
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
                                <th>Nom Hotel</th>
                                <th>nbr Etoile</th>
                                <th>Categorie</th>
                                <th>Adress</th>
                                <th>Tel</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($liste as $hotel) {
                                $tabph = explode('/', $hotel->photo);
                                $photo = $tabph[0];
                                echo "<tr>
				<td><img src='images/hotels/" . $photo . "' width='80'></td>
				<td>" . $hotel->nom_hotel . "</td>
				<td>" . $hotel->nbr_etoile . "</td>
				<td>" . $hotel->categ_hotel . "</td>
				<td>" . $hotel->adress_hotel . "</td>
				<td>" . $hotel->num_tel_hotel . "</td>
				<td>
				<input type='button' value='Modifier' onclick=\"window.location.href='index.php?controller=" . $table . "&action=edit1&id=" . $hotel->id . "'\">
				<input type='button' value='supprimer' onclick=\"window.location.href='index.php?controller=" . $table . "&action=delete&id=" . $hotel->id . "'\"> </td>
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