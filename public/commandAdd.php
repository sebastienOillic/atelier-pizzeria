<?php

require_once __DIR__.'/../bootstrap.php';

$fullInfo = true;
if (empty($_POST['livrer']) || empty($_POST['client']) || empty($_POST['date'])|| empty($_POST['numero'])) {
    $fullInfo = false;
}
if ($fullInfo) {
    if (is_numeric($_POST['numero']) && (int)$_POST['numero'] > 0) {
        $command = new App\Entity\Commande();
        $command->setNumeroCommande((int)$_POST['numero'])
            ->setClientId($_POST['client'])
            ->setLivreurId($_POST['livrer'])
            ->setDateCommande(new DateTime($_POST['date']));
        // var_dump($command);
        // die();
        $em->persist($command);
        $em->flush();
    }
}
// die();
header("Location:commandes.php");