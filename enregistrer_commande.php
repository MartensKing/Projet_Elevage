     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom      = trim($_POST['nom']);
    $produit  = trim($_POST['produit']);
    $quantite = (int) $_POST['quantite'];
    $adresse      = trim($_POST['adresse']);
    $ligne = "Nom: $nom | Produit: $produit | Quantité: $quantite | adresse: $adresse\n";
    file_put_contents("commandes.txt", $ligne, FILE_APPEND | LOCK_EX);
    ?>
  <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Commande confirmée</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="confirmation">
            <h2>Merci !</h2>
            <p><strong><?php echo htmlspecialchars($nom); ?></strong>, votre commande a bien été enregistrée.</p>
            <p class="details">
                Produit : <em><?php echo htmlspecialchars($produit); ?></em><br>
                Quantité : <em><?php echo htmlspecialchars($quantite); ?></em><br>
                Adresse : <em><?php echo htmlspecialchars($adresse); ?></em>
            </p>
<a href="index.php?page=boutique" class="btn-retour">← Appuyer pour retourner à la boutique</a>
        </section>
    </body>
    </html>
    <?php 
}