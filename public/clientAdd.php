<?php

require_once __DIR__.'/../bootstrap.php';

$fullInfo = true;
if (!isset($_GET['age']) || !isset($_GET['ville']) || !isset($_GET['nom'])|| !isset($_GET['prenom'])) {
    $fullInfo = false;
}
foreach ($_GET as $key => $value) {
    if (empty($value)) {
        $fullInfo = false;
        break;
    }
}
if ($fullInfo) {
    if (is_numeric($_GET['age']) && (int)$_GET['age'] > 0) {
        $client = new App\Entity\Client();
        $client->setAge((int)$_GET['age'])
            ->setVille($_GET['ville'])
            ->setNom($_GET['nom'])
            ->setPrenom($_GET['prenom']);

        $em->persist($client);
        $em->flush();
    }
}

header("Location:clients.php");