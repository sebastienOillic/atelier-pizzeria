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
        ?>
        <?= $client->generateTableRow() ?>
        <?php
    }
    ?>
</table>
    <h2>Ajout d'un client</h2>

<form action="clientAdd.php" method="get">
    <table>
        <tr><td><label for="nom">Nom :</label></td>
        <td><input type="text" name="nom" id="nom" required></td></tr>
        <tr><td><label for="prenom">Prenom : </label></td>
        <td><input type="text" name="prenom" id="prenom" required></td></tr>
        <tr><td><label for="ville">Ville : </label></td>
        <td><input type="text" name="ville" id="ville" required></td></tr>
        <tr><td><label for="age">Age : </label></td>
        <td><input type="number" name="age" id="age" required></td></tr>
        <tr><td><input type="submit"></td></tr>
    </table>
</form>
<?php
require_once __DIR__."/../src/template/footer.php";
?>