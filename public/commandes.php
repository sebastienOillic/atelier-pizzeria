<?php
require_once __DIR__."/../src/template/header.php";
$qb = $em->createQueryBuilder();
$qb->SELECT("c")
    ->FROM("App\Entity\Commande", "c");
$res = $qb->getQuery()->getResult();
// var_dump($res);
?>
<h1>Gestion des clients</h1>
<h2>Liste des clients</h2>
<table>
    <thead>
        <th>Id.</th>
        <th>Numero</th>
        <th>Date</th>
        <th>Client</th>
        <th>Livreur</th>
    </thead>
    <?php
    foreach ($res as $commande) {
        ?>
        <?= $commande->generateTableRow($em) ?>
        <?php
    }
    ?>
</table>
    <h2>Ajout d'une commande</h2>

<form action="commandAdd.php" method="post">
    <table>
        <tr><td><label for="numero">numero :</label></td>
        <td><input type="number" name="numero" id="numero" required></td></tr>
        <tr><td><label for="date">Date : </label></td>
        <td><input type="date" name="date" id="date" required></td></tr>
        <tr><td><label for="livrer">Livreur : </label></td>
        <td>
            <select name="livrer" id="livrer" required>
                <?php
                $qblivrer = $em->createQueryBuilder();
                $qblivrer->SELECT('l')
                    ->FROM("App\Entity\Livreur", 'l');
                $livrers = $qblivrer->getQuery()->getResult();
                foreach ($livrers as $livrer) {
                    echo '<option value ="'.$livrer->getId().'">'.$livrer->getNom().' '.$livrer->getPrenom().'</option>';
                }
                ?>
            </select>
        </td></tr>
        <tr><td><label for="client">Client : </label></td>
        <td>
            <select name="client" id="client" required>
                <?php
                $qbclient = $em->createQueryBuilder();
                $qbclient->SELECT('c')
                    ->FROM("App\Entity\Client", 'c');
                $clients = $qbclient->getQuery()->getResult();
                foreach ($clients as $client) {
                    echo '<option value ="'.$client->getId().'">'.$client->getNom().' '.$client->getPrenom().'</option>';
                }
                ?>
            </select>
            </select>
        </td></tr>
        <tr><td><input type="submit"></td></tr>
    </table>
</form>
<?php
require_once __DIR__."/../src/template/footer.php";
?>