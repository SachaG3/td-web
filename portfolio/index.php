<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Sacha Guignard">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="css/A_propos.css">
    <link rel="stylesheet" href="css/Accueil.css">
    <link rel="stylesheet" href="css/competence.css">
    <link rel="stylesheet" href="css/experience.css">
    <link href="minecraft.ttf">
    <title>Portfolio</title>
</head>
<body>
    <nav>
        <div>
            <p id='Portfolio'>Porfolio</p>
            <?php
            include("php/menu.php")
            ?>
            <script>
            function choisDePage(id) {
                
                
                const elements = document.querySelectorAll('.afficher');
                for (const element of elements) {
                    element.classList.replace('afficher', 'pasAfficher');
                }
                const element2 = document.getElementById(id);
                if (element2) {
                    element2.classList.replace('pasAfficher', 'afficher');
                }
            }
            </script>
        </div>
    </nav>
    <div>
        <button id="menuBtn">Mes réseaux</button>
        <ul id="menu">      
            <li><a href="https://www.linkedin.com/in/sacha-guignard-a5b741232"> <img src="img/link.png" alt=""></a></li>
            <li><a href="https://github.com/SachaG3"> <img src="img/git.png" alt=""></a></li>
            <li><a href="img/C.V.pdf" download><img src="img/cv.png" alt=""></a></li>
        </ul>
        <script>
        const menuBtn = document.getElementById('menuBtn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', function() {
        menu.classList.toggle('visible');
        });
        </script>

    </div>
    <section id="accueil" class="afficher">
        <h1><?php
            include("php/info.php");
            echo nomprenom();
        ?></h1>
        <a id="button" href="#popup1">Clique ici </a>
        <img alt="Sacha_Guignard" src="img/images.jpg" >
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Salut je suis un developpeur en devenir !!!</h2>
                <a class="close" href="#">&times;</a>
            </div>
        </div>
    </section>
    <section class="pasAfficher" id="apropos" >
        <h1>A propos de moi</h1>
        <p>Bonjour, je suis un jeune développeur qui ne cherche que l'amélioration.
            Je m'appelle <?php echo nomprenom();?> j'ai <?php echo aniversaire()?> ans.
            J'ai commancé à coder trés tot sur plusieur language de programation. Je pense que mon
            languagede coeur est python.
        </p>
    </section>

    <section id="competence" class="pasAfficher">
    <div id="grid">
        <?php
            include("php/competence.php")
        ?>
    </div>
    </section>

    <section id="formation" class="pasAfficher">

    </section>

    <section id="experience" class="pasAfficher">
        <?php include("php/experience.php")?>
    </section>

    <section id="contact" class="pasAfficher">

    </section>
    
</body>
</html>