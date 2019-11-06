<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Chez violette</title>
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/panier.css">
</head>
<body>
    <?php include("../view/header.view.html"); ?>

    <div class="container">
        <?php include("../view/nav.view.php"); ?>

        <div>
            <?php $prixTot = 0; foreach ($_SESSION['panier']['article'] as $key => $value) { ?>
                <div class="article">
                  <?php $prixTot = $value->getPrix() * $_SESSION['panier']['quantite'][$key] + $prixTot ?>
                    <p><a class="objet" href="afficherArticle.ctrl.php?ref=<?= $value->getRef(); ?>"><img src="../data/img/<?= $value->getImage(); ?>", height="50", width="50"><?= $value->getLibelle()?></a> <?= $value->getPrix()?>€ x<?= $_SESSION['panier']['quantite'][$key]?> = <?=$value->getPrix() * $_SESSION['panier']['quantite'][$key] ?>€ <?php $panier->boutonSupprimer($value->getRef()); ?></p>
                </div>
            <?php  } ?>
            <p>Prix Total : <?= $prixTot?>€</p>
            <?= $panier->boutonVider(); ?>
            <INPUT class="payer" TYPE="BUTTON" value="PAYER " ONCLICK=window.location.href='../controler/afficherPanier.ctrl.php'>
        </div>
    </div>
</body>
</html>
