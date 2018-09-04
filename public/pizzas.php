<?php
require_once __DIR__."/../src/template/header.php";
$qb = $em->createQueryBuilder();
$qb->SELECT("p")
    ->FROM("App\Entity\Pizza", "p");
$res = $qb->getQuery()->getResult();
// var_dump($res);
?>
<h1>Gestion des pizzas</h1>
<h2>Liste des pizza</h2>
<table>
    <thead>
        <th>Id.</th>
        <th>Libellé</th>
        <th>Référence</th>
        <th>Prix</th>
        <th>Photo</th>
    </thead>
    <?php
    foreach ($res as $pizza) {
        ?>
        <?= $pizza->generateTableRow() ?>
        <?php
    }
    ?>
</table>

<?php
require_once __DIR__."/../src/template/footer.php";
?>