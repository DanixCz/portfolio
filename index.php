<?php
// index.php - Prémiová animační verze
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Daniel Zeman</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>

</style>
</head>
<body>

<header>
    <div class="logo">Daniel Zeman</div>
    <nav>
        <ul>
            <li><a href="#about">O mně</a></li>
            <li><a href="#photos">Fotky</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMenu()"><div></div><div></div><div></div></div>
    </nav>
</header>

<section id="info" style="background: linear-gradient(120deg,#d0e7ff,#f0f8ff); padding:80px 20px;">
    <div data-animate style="max-width:1000px; display:grid; grid-template-columns:1fr 1fr; gap:50px; align-items:center;">
        <!-- Levá strana: text -->
        <div>
            <h1>O mně</h1>
            <p>
                Jmenuji se <strong>Daniel Zeman</strong> a jsem student 
                <strong>Středního odborného učiliště elektrotechnického Plzeň</strong>. 
                Zaměřuji se na IT, webovou tvorbu a grafiku.
            </p>
            <p>
                Mezi mé silné stránky patří <strong>úprava fotografií</strong>, tvorba webových stránek a práce s moderními grafickými nástroji. 
                Baví mě experimentovat s designem, vizuálními efekty a interaktivními prvky webu.
            </p>
            <p>
                Kromě studia se zajímám o programování, tvorbu mini projektů a zlepšování svých dovedností v oblasti webového designu a UX.
            </p>
            
            <!-- Action Buttons -->
            <div style="margin-top:25px; display:flex; flex-wrap:wrap; gap:15px; justify-content:center;">
                <a href="https://github.com/DanixCz" target="_blank" class="action-btn">GitHub</a>
                <a href="https://www.linkedin.com/in/danielzeman" target="_blank" class="action-btn">LinkedIn</a>
                <a href="cv.pdf" target="_blank" class="action-btn">Stáhnout CV</a>
                <a href="#contact" class="action-btn">Kontaktovat mě</a>
            </div>
        </div>

        <!-- Pravá strana: profilový obrázek -->
        <div style="display:flex; justify-content:center;">
            <div class="profile-pic" data-animate>
                <img src="profile.jpg" alt="Profilová fotka">
            </div>
        </div>
    </div>
</section>

<section id="photos">
    <h1 data-animate>Moje Fotky</h1>
    <div class="gallery" data-animate>
        <img src="photo1.jpg" alt="Foto 1">
        <img src="photo2.jpg" alt="Foto 2">
        <img src="photo3.jpg" alt="Foto 3">
        <img src="photo4.jpg" alt="Foto 4">
    </div>
</section>

<section id="contact">
    <h1 data-animate>Kontakt</h1>
    <form data-animate method="post" action="">
        <input type="text" name="name" placeholder="Vaše jméno" required>
        <input type="email" name="email" placeholder="Váš e-mail" required>
        <textarea name="message" placeholder="Zpráva" rows="5" required></textarea>
        <button type="submit">Odeslat</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name=htmlspecialchars($_POST['name']);
        $email=htmlspecialchars($_POST['email']);
        $message=htmlspecialchars($_POST['message']);
        echo "<p style='margin-top:15px;color:green;'>Děkuji, $name! Vaše zpráva byla odeslána.</p>";
    }
    ?>
</section>

<div class="lightbox" onclick="closeLightbox()">
    <img src="" alt="Zvětšená fotka">
</div>

<script>
function toggleMenu(){document.querySelector('nav ul').classList.toggle('show');}

const gallery=document.querySelectorAll('.gallery img');
const lightbox=document.querySelector('.lightbox');
const lightboxImg=document.querySelector('.lightbox img');
gallery.forEach(img=>img.addEventListener('click',()=>{lightboxImg.src=img.src;lightbox.classList.add('show');}));
function closeLightbox(){lightbox.classList.remove('show');}

// Scroll animace
const animateElements=document.querySelectorAll('[data-animate]');
const observer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('show');}});
},{threshold:0.25});
animateElements.forEach(el=>observer.observe(el));

// Header scroll
window.addEventListener('scroll',()=>{document.querySelector('header').classList.toggle('scrolled', window.scrollY>50);});
</script>

</body>
</html>
