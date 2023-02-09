<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">last_name</th>
            <th scope="col">first_name</th>
            <th scope="col">job_title</th>
            <th scope="col">address</th>
            <th scope="col">city</th>
            <th scope="col">country_region</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //id`, `last_name`, `first_name`,`job_title`,`address`, `city`,`country_region`
        foreach ($resl as $produit) {
            echo '<tr>';
            echo '<td scope="row">' . $produit['id'] . '</td>';
            echo '<td>' . $produit['last_name'] . '</td>';
            echo '<td>' . $produit['first_name'] . '</td>';
            echo '<td>' . $produit['job_title'] . '</td>';
            echo '<td>' . $produit['address'] . '</td>';
            echo '<td>' . $produit['city'] . '</td>';
            echo '<td>' . $produit['country_region'] . '</td>';

            echo '</tr>';
        }

        ?>
    </tbody>
</table>
<?php
function calculPages($numbrePges)
{
    $c = 10 - ($numbrePges % 10);
    $numbrePges += $c;
    if ($numbrePges % 10 == 0) {
        $r = $numbrePges / 10;

        echo ' <nav aria-label="Page navigation example">';
        echo '  <ul class="pagination">';
        for ($i = 0; $i < $r; $i++) {

            echo '<li class="page-item"><a class="page-link" href="http://localhost/gestion_commande/produit?numberPro=10& page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
        }
        echo '  </ul>';
        echo ' </nav> ';
    } else {
        echo 'false   =' . (10 - ($numbrePges % 10));
    }
}
calculPages($numbrePges);
