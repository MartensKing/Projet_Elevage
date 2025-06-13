<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<main>
<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'accueil';
$file = "pages/" . basename($page) . ".php";
if (file_exists($file)) {
    include($file);
} 
else {
    echo "<h2>Page non trouvée</h2>";
}
?>
</main>
<?php include('footer.php'); ?>