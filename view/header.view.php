    <header>
      <div class="">
        <img src="../view/img/logo.png" alt="Logo du site chez violette">
        <h1>Chez Violette</h1>
      </div>
      <a class = "panier" href="afficherPanier.ctrl.php"><img src="../view/img/panier.png" alt="image de panier">
        <?php if(!($vide)){?>
            <span class = "nbArt">
                  <?php $panier = new Panier();
                  $quant = 0;
                  foreach ($_SESSION['panier']['quantite'] as $value){
                    $quant = $quant + $value;
                  }
                  echo $quant;
                  ?>
            </span>
        <?php }?>
        </a>
    </header>
