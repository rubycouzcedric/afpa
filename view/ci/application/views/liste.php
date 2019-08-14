

<!-- application/views/liste.php -->

<!DOCTYPE html>

<h1>Liste des produits</h1>
<div class="uk-container">
    <a href="<?= site_url('Produits/addProduct') ?>" class="uk-button uk-button-secondary" title="Lien vers ajout d'un produit" target="_blank">Ajouter un produit</a>
    <table class="uk-table uk-table-striped">
        <thead>
        <th>Photo</th>
        <th>Id</th>
        <th>Catégorie</th>
        <th>Référence</th>
        <th>Libellé</th>
        <th>Couleur</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Ajout</th>
        <th>Modif</th>
        <th>Bloqué</th>
        </thead>
        <tbody>
            <?php
            foreach ($productList as $row) {
                ?>
                <tr>
                    <td>
                        <img src="<?= base_url('assets/img/' . $row->pro_id . '.' . $row->pro_photo) ?>" alt="Photo d'illustration" title="Photo de <?= $row->pro_libelle ?>" />
                    </td>
                    <td><?= $row->pro_id ?></td>
                    <td><?= $row->pro_cat_id ?></td>
                    <td><?= $row->pro_ref ?></td>
                    <td><?= $row->pro_libelle ?></td>
                    <td><?= $row->pro_couleur ?></td>
                    <td><?= $row->pro_description ?></td>
                    <td><?= $row->pro_prix ?></td>
                    <td><?= $row->pro_stock ?></td>
                    <td><?= $row->pro_d_ajout ?></td>
                    <td><?= $row->pro_d_modif ?></td>
                    <td><?= $row->pro_bloque == 1 ? 'Oui' : 'Non' ?></td>
                    <td><a href="<?= site_url('Produits/update') . '/' . $row->pro_id ?>" title="Lien vers la fiche produit" class="uk-button uk-button-secondary uk-button-small">Fiche Produit</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>    
    <a href="<?= site_url('Produits/addProduct') ?>" class="uk-button uk-button-secondary" title="Lien vers ajout d'un produit" target="_blank">Ajouter un produit</a>
</div> 