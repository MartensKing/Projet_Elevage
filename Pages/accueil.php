<section class="accueil">
    <div class="presentation">
        <h1>Bienvenue à la Ferme du Bon Élevage</h1>
        <p>
            Située en pleine nature dans la commune de Sapone, notre ferme élève des animaux avec amour : vaches, Boeufs, moutons, poules, pintades... 
            Nous proposons des produits fermiers  de qualité issus d'animaux élevés dans les meilleures conditions, disponibles dans notre boutique en ligne. En choisissant nos produits, vous participez à un circuit court, qui soutient l'économie locale.
        </p>
        <a href="index.php?page=boutique" class="btn">Voir la boutique</a>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade"><img src="images/vache.jpg"/></div>
        <div class="mySlides fade"><img src="images/Boeufs1.jpg"/></div>
        <div class="mySlides fade"><img src="images/mouton2.jpg"></div>
        <div class="mySlides fade"><img src="images/mouton3.jpg"/></div>
        <div class="mySlides fade"><img src="images/poules.jpg"/></div>
        <div class="mySlides fade"><img src="images/poules5.jpg"/></div>
        <div class="mySlides fade"><img src="images/pintade.jpg"/></div>
    </div>
    <div class="dots">
        <span class="dot"></span>
        <span class="dot"></span> 
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span> 
        <span class="dot"></span>
    </div>
</section>
<script>
let slideIndex = 0;
showSlides();
function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); 
}
</script>