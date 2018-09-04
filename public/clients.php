<?php
require_once __DIR__."/../src/template/header.php";
$qb = $em->createQueryBuilder();
$qb->SELECT("c")
    ->FROM("App\Entity\Client", "c");
$res = $qb->getQuery()->getResult();
// var_dump($res);
?>
<h1>Gestion des clients</h1>
<h2>Liste des clients</h2>
<table>
    <thead>
        <th>Id.</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>Age</th>
    </thead>
    <?php
    foreach ($res as $client) {
        $string = '<tr>
            <td>'.$client->getId().'</td>
            <td>'.$client->getNom().'</td>
            <td>'.$client->getPrenom().'</td>
            <td>'.$client->getVille().'</td>
            <td>'.$client->getAge().'</td>
            <td><a href="#">Modifier</a></td>
            <td><a href="#">Supprimer</a></td>';
            echo $string;
    }
    ?>
</table>
<?php
require_once __DIR__."/../src/template/footer.php";
?>