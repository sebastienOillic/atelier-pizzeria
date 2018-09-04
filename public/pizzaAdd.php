<?php

require_once __DIR__.'/../bootstrap.php';

$fullInfo = true;
if (empty($_POST['libelle']) || empty($_POST['reference']) || empty($_POST['prix'])|| empty($_FILES['imgPizza'])) {
    $fullInfo = false;
}
// var_dump($_POST);
// var_dump($_FILES);
$targetDir = __DIR__."/img/";
$targetFile = $targetDir.basename($_FILES["imgPizza"]["name"]);
// vardump()
if ($fullInfo && $_FILES['imgPizza']['error'] == UPLOAD_ERR_OK) {

    if (is_numeric($_POST['prix']) && (int)$_POST['prix'] > 0 && $_FILES["imgPizza"]["type"] == 'image/jpeg') {
        if (move_uploaded_file($_FILES["imgPizza"]["tmp_name"], $targetFile)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $pizza = new App\Entity\Pizza();
            $pizza->setLibelle($_POST['libelle'])
                ->setReference($_POST['reference'])
                ->setPrix((int)$_POST['prix'])
                ->setUrlImage(basename($_FILES["imgPizza"]["name"]));
            // var_dump($pizza);
            // die();
            $em->persist($pizza);
            $em->flush();
        }
    }
}
// die();
header("Location:pizzas.php");