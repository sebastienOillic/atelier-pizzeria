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
    <h2>Ajout d'une pizza</h2>

<form action="pizzaAdd.php" method="post" enctype="multipart/form-data">
    <table>
        <tr><td><label for="libelle">Libellé :</label></td>
        <td><input type="text" name="libelle" id="libelle" required></td></tr>
        <tr><td><label for="reference">Référence : </label></td>
        <td><input type="text" name="reference" id="reference" required></td></tr>
        <tr><td><label for="prix">Prix : </label></td>
        <td><input type="number" name="prix" id="prix" required></td></tr>
        <tr><td><label for="imgPizza">Image (.jpg/.jpeg uiniquement) : </label></td>
        <td><input type="file" name="imgPizza" id="imgPizza" required></td></tr>
        <tr><td><input type="submit"></td></tr>
    </table>
</form>
<?php
require_once __DIR__."/../src/template/footer.php";
?>