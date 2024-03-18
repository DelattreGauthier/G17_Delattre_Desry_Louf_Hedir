<!DOCTYPE html>
<html lang="fr">

<head>
<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Wiki Jeux Vidéo - Jeux d'énigme</title>
    <link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
    <link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
</head>

<body>
	<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
    <?php  include ('../../php/header.php'); ?>
    <main>
	<!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structuré -->
        <section class="grid-container">
		<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux d'enigme, ainsi qu'une image illustrative. -->
            <div class="grid-item eltA">
                <h2>Enquête et Découverte</h2>
                <p>Ces jeux mettent en scène des joueurs plongés dans des mystères captivants, les incitant à résoudre des énigmes complexes pour progresser dans l'histoire.</p>
                <ul>
                    <li><strong>Réflexion stratégique :</strong> Les joueurs doivent faire preuve de réflexion pour avancer, en analysant des indices et en résolvant des énigmes.</li>
                    <li><strong>Progression narrative :</strong> L'intrigue se dévoile progressivement, incitant les joueurs à poursuivre pour découvrir de nouveaux rebondissements.</li>
                    <li><strong>Collecte d'indices :</strong> Rassemblez des informations cruciales pour démêler les mystères qui jalonnent le jeu.</li>
                    <li><strong>Personnages intrigants :</strong> Rencontrez des personnages fascinants et découvrez leurs secrets au fil de l'aventure.</li>
                    <li><strong>Esthétique visuelle :</strong> Des environnements graphiquement riches, allant de paysages mystérieux à des scènes urbaines énigmatiques.</li>
                </ul>
                <p>Ces jeux encouragent l'exploration approfondie et la découverte progressive de l'intrigue, offrant aux joueurs une expérience immersive.</p>
            </div>
            <div class="grid-item image1">
                <img src="../../photo/Enigme/Présentation/photo-enigme-1.png" alt="Image 1">
            </div>
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Return of the Obra Dinn, ainsi qu'un carrousel contenant des images illustratives. -->
            <div class="grid-item eltB">
                <h2>Return of the Obra Dinn</h2>
                <h3>Explorez un mystère maritime dans ce jeu d'enquête unique!</h3>
                <p>Return of the Obra Dinn est un jeu d'enquête développé par Lucas Pope. Vous incarnez un assureur envoyé pour élucider le mystère du navire Obra Dinn, disparu en mer avec son équipage. Utilisez une montre temporelle spéciale pour découvrir la vérité derrière ces événements énigmatiques.</p>
                <h4>Caractéristiques du jeu :</h4>
                <ul>
                    <li><strong>Énigmes d'enquête :</strong> Identifiez les membres de l'équipage et reconstituez leurs destins à partir de scènes figées dans le temps.</li>
                    <li><strong>Montre temporelle :</strong> Explorez les souvenirs des défunts pour résoudre le mystère du navire.</li>
                    <li><strong>Esthétique unique :</strong> Style visuel monochrome rétro inspiré des graphiques 1-bit.</li>
                    <li><strong>Narration immersive :</strong> Découvrez l'histoire complexe du navire Obra Dinn à travers des indices visuels et sonores.</li>
                </ul>
                <p>Plongez dans un récit maritime captivant et relevez le défi de l'énigme à bord du navire Obra Dinn! Pour en savoir plus sur ce jeu, visitez le site officiel : <a class="website_link" href="https://obradinn.com">Return of the Obra Dinn</a></p>
                <iframe src="https://store.steampowered.com/widget/653530/?t=Perdu%20en%20mer%2C%201803%20LE%20FIER%20VAISSEAU%20%C2%AB%20OBRA%20DINN%20%C2%BB" width="646" height="190"></iframe>
            </div>
            <div class="grid-item image2">
			<!-- Cette partie du code crée un carrousel d'images -->
                <div class="carousel">
                    <div class="carousel-inner">
					<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item">
                            <img src="../../photo/Enigme/ReturnOfTheObraDinn/obradinn-1.png" alt="carrousel 1">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item">
                            <img src="../../photo/Enigme/ReturnOfTheObraDinn/obradinn-2.png" alt="carrousel 2">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item">
                            <img src="../../photo/Enigme/ReturnOfTheObraDinn/obradinn-3.png" alt="carrousel 3">
                        </div>
						<!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
                        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                        <label for="carousel-2" class="carousel-control next control-1">›</label>
                        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                        <label for="carousel-3" class="carousel-control next control-2">›</label>
                        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                        <label for="carousel-1" class="carousel-control next control-3">›</label>
						<!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
                        <ol class="carousel-indicators">
                            <li>
                                <label for="carousel-1" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-2" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-3" class="carousel-bullet">•</label>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="grid-item eltC">
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Outer Wilds, ainsi qu'un carrousel contenant des images illustratives. -->
                <h2>Outer Wilds</h2>
                <h3>Explorez un système solaire mystérieux dans une aventure temporelle unique!</h3>
                <p>Outer Wilds est un jeu d'aventure et d'exploration spatiale indépendant développé par Mobius Digital. Explorez un système solaire en constante évolution, résolvez des mystères cosmiques et découvrez les secrets de l'univers.</p>
                <h4>Caractéristiques du jeu :</h4>
                <ul>
                    <li><strong>Exploration spatiale :</strong> Voyagez librement dans un système solaire en proie à des boucles temporelles.</li>
                    <li><strong>Résolution de mystères :</strong> Découvrez les indices disséminés dans l'espace pour comprendre l'histoire de la galaxie.</li>
                    <li><strong>Dynamique temporelle :</strong> Un cycle de 22 minutes dévoile de nouvelles informations à chaque itération.</li>
                    <li><strong>Immersion narrative :</strong> Histoire captivante sans combat ni objectifs conventionnels.</li>
                </ul>
                <p>Préparez-vous à une exploration unique de l'espace et à une expérience narrative fascinante dans Outer Wilds! Pour en savoir plus sur ce jeu, visitez le site officiel : <a class="website_link" href="https://www.mobiusdigitalgames.com/outer-wilds" target="_blank">Outer Wilds</a></p>
                <iframe src="https://store.steampowered.com/widget/753640/" width="646" height="190"></iframe>
            </div>
            <div class="grid-item image3">
			<!-- Cette partie du code crée un carrousel d'images -->
                <div class="carousel">
                    <div class="carousel-inner">
					<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
                        <input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item">
                            <img src="../../photo/Enigme/OuterWild/outerwild-1.png" alt="carrousel 4">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
                        <div class="carousel-item">
                            <img src="../../photo/Enigme/OuterWild/outerwild-2.png" alt="carrousel 5">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
                        <div class="carousel-item">
                            <img src="../../photo/Enigme/OuterWild/outerwild-3.png" alt="carrousel 6">
                        </div>
						<!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
                        <label for="carousel-6" class="carousel-control prev control-4">‹</label>
                        <label for="carousel-5" class="carousel-control next control-4">›</label>
                        <label for="carousel-4" class="carousel-control prev control-5">‹</label>
                        <label for="carousel-6" class="carousel-control next control-5">›</label>
                        <label for="carousel-5" class="carousel-control prev control-6">‹</label>
                        <label for="carousel-4" class="carousel-control next control-6">›</label>
						<!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
                        <ol class="carousel-indicators">
                            <li>
                                <label for="carousel-4" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-5" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-6" class="carousel-bullet">•</label>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contacter">
          <h3>Nous contacter</h3>
          <h3>Tel: 07 69 09 42 32</h3>
          <h4><a class="contact" href="../Contact/contact.php">Formulaire</a></h4>
        </div>
        <div class="a_propos">
          <h3>A propos de nous</h3>
          <h3>Site Junia</h3>
          <h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Présentation</a></h4>
        </div>
        
      </footer>
</body>

</html>
