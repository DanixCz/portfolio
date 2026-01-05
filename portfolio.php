<?php
// Jednoduché onepage portfolio v PHP (stačí uložit jako index.php)
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio – Daniel Zeman</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #0f172a;
            color: #e5e7eb;
            line-height: 1.6;
        }

        header {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #2563eb, #1e40af);
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            max-width: 700px;
        }

        section {
            padding: 80px 20px;
            max-width: 1100px;
            margin: auto;
        }

        .avatar {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
            border: 4px solid rgba(255,255,255,0.6);
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .github {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 22px;
            border-radius: 25px;
            background: #020617;
            color: #e5e7eb;
            text-decoration: none;
            transition: 0.3s;
        }

        .github:hover {
            background: #000;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        }

        form {
            max-width: 600px;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, textarea {
            padding: 14px;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            padding: 14px;
            border-radius: 30px;
            border: none;
            background: #2563eb;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1d4ed8;
        }
            padding: 80px 20px;
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #93c5fd;
            text-align: center;
        }

        .about p {
            font-size: 1.1rem;
            text-align: center;
        }

        .advantages {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: #020617;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #bfdbfe;
        }

        .contact {
            text-align: center;
        }

        .contact p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .contact a {
            display: inline-block;
            margin: 8px;
            padding: 12px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            transition: background 0.3s;
        }

        .contact a:hover {
            background: #1d4ed8;
        }

        footer {
            text-align: center;
            padding: 30px 10px;
            background: #020617;
            color: #94a3b8;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<header>
    <div class="avatar">
        <!-- Sem vlož svou profilovou fotku -->
        <img src="profile.jpg" alt="Profilová fotka">
    </div>
    <h1>Daniel Zeman</h1>
    <p>Student SOU elektrotechnického v Plzni se zaměřením na úpravu fotografií a digitální tvorbu.</p>
    <a class="github" href="https://github.com/DanixCz" target="_blank">Můj GitHub</a>
</header>

<section class="about">
    <h2>O mně</h2>
    <p>
        Jmenuji se <strong>Daniel Zeman</strong> a studuji na <strong>Středním odborném učilišti elektrotechnickém v Plzni</strong>.
        Zajímám se o práci s grafikou a digitální úpravu fotografií. Rád se učím nové věci a neustále
        zlepšuji své dovednosti.
    </p>
</section>

<section>
    <h2>Moje výhody</h2>
    <div class="advantages">
        <div class="card">
            <h3>Úprava fotografií</h3>
            <p>Umím dobře upravovat fotky – barvy, kontrast, retuše a celkový vzhled fotografií.</p>
        </div>
        <div class="card">
            <h3>Kreativita</h3>
            <p>Mám cit pro detail a snažím se, aby výsledná práce vždy působila profesionálně.</p>
        </div>
        <div class="card">
            <h3>Spolehlivost</h3>
            <p>Plním zadané úkoly včas a dbám na kvalitu odvedené práce.</p>
        </div>
        <div class="card">
            <h3>Chuť se učit</h3>
            <p>Stále se vzdělávám a sleduji nové trendy v oblasti grafiky a digitálních technologií.</p>
        </div>
    </div>
</section>

<section>
    <h2>Moje upravené fotografie</h2>
    <div class="gallery">
        <!-- Nahraď obrázky svými fotkami -->
        <img src="photo1.jpg" alt="Ukázka úpravy 1">
        <img src="photo2.jpg" alt="Ukázka úpravy 2">
        <img src="photo3.jpg" alt="Ukázka úpravy 3">
        <img src="photo4.jpg" alt="Ukázka úpravy 4">
    </div>
</section>

<section class="contact">
    <h2>Kontaktuj mě</h2>
    <p>Máte zájem o spolupráci nebo dotaz? Napište mi zprávu.</p>

    <?php
    if (isset($_POST['send'])) {
        echo "<p style='color:#93c5fd'>Zpráva byla odeslána (ukázkový formulář).</p>";
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Vaše jméno" required>
        <input type="email" name="email" placeholder="Váš e-mail" required>
        <textarea name="message" placeholder="Vaše zpráva" required></textarea>
        <button type="submit" name="send">Odeslat zprávu</button>
    </form>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Daniel Zeman – Portfolio</p>
</footer>

</body>
</html>
