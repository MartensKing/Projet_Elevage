<h2>Passer une commande</h2>
<form action="enregistrer_commande.php" method="post">
    <label for="nom">Nom complet :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>
    <label for="produit">Produit :</label><br>
    <input type="text" id="produit" name="produit" required><br><br>
    <label for="quantite">Quantité :</label><br>
    <input type="number" id="quantite" name="quantite" required><br><br>
    <label for="adresse">adresse livraison :</label><br>
    <input type="text" id="adresse" name="adresse" required><br><br>
    <input type="submit" value="Commander">
</form>