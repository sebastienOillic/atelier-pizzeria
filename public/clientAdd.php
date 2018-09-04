<?php

require_once __DIR__.'/../bootstrap.php';

$fullInfo = true;
if (empty($_POST['age']) || empty($_POST['ville']) || empty($_POST['nom'])|| empty($_POST['prenom'])) {
    $fullInfo = false;
}
if ($fullInfo) {
    if (is_numeric($_POST['age']) && (int)$_POST['age'] > 0) {
        $client = new App\Entity\Client();
        $client->setAge((int)$_POST['age'])
            ->setVille($_POST['ville'])
            ->setNom($_POST['nom'])
            ->setPrenom($_POST['prenom']);

        $em->persist($client);
        $em->flush();
    }
}

header("Location:clients.php");