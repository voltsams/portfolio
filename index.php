<?php
// Création des variables de connexion
$user = 'root';
$pass ='';
// Test de connexion à la BDD
// try {
//     
//     foreach ($pdo->query('SELECT * FROM contact') as $row) {
//         print_r($row);
//     }
// } catch (PDOException $exc) {
//     print "Erreur :" . $exc->getMessage() . "<br/>";
//     die;
// }
$pdo = new PDO('mysql:host=localhost;dbname=portfolio;port=3306', $user, $pass);

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`name`,`mail`,`number`,`message`) VALUES (:name,:mail,:number,:message)";

    $res = $pdo->prepare($sql);
    $exec = $res->execute(array(":name"=>$name,":mail"=>$mail,":number"=>$number,":message"=>$message));
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Sami Drach</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!------------ HEADER NAVBAR START  ------------>
    <header class="header"> 
        <!-- Menu burger -->
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">
            <a href="https://www.linkedin.com/in/sami-drach/" class="fab fa-linkedin"></a>
            <a href="https://github.com/voltsams" class="fab fa-github"></a>
        </div>
    </header>
    <!------------ HEADER NAVBAR END  ------------>


    
    <!------------ HOME SECTION START ------------>
    <section class="home" id="home">
        <div class="image">
            <img src="images/portrait.jpg" alt="Portrait de Sami DRACH">
        </div>


        <div class="content">
            <h3>Moi, c'est Sami Drach</h3>
            <span>Web Developer Junior</span>
            <p>Je recherche une alternance de 1 an afin de réaliser ma licence Concepteur Développeur d'Applications </p>
            <a href="#about" class="btn">About me</a>
        </div>
    </section>
    <!------------  HOME SECTION END ------------>

    
    <!------------ ABOUT SECTION START ------------>
    <section class="about" id="about">
        <h1 class="heading">
            <span>biographie</span>
        </h1>

        <div class="biography">
            <p>
                Rapidement, qui suis-je ? Qu'est ce que je recherche ?
            </p>
                 
                <div class="info">

                    <h3> <span>nom :</span> Drach</h3>
                    <h3> <span>prénom :</span> Sami</h3>
                    <h3> <span>âge :</span> 26 ans</h3>
                    <h3> <span>email :</span> sami.drach@outlook.fr</h3>
                    <h3> <span>localisation :</span> ile-de-france</h3>
                    <h3> <span>contrat :</span> apprentissage</h3>
                    <h3> <span>rythme :</span> 3 semaines société / 1 semaine formation</h3>

                </div>
                <a href="/images/cvdevwebalternancelogos.pdf" class="btn" download="Sami_Drach_CV">télécharger mon CV</a>
        </div>

        <div class="skills">
            <h1 class="heading">
                <span>skills</span>
            </h1>
            <div class="progress">
                <div class="bar">
                    <h3>    
                        <span>HTML</span> 
                        <span>95%</span>
                    </h3>
                </div>
                <div class="bar">
                    <h3>
                        <span>CSS</span> 
                        <span>95%</span>
                    </h3>
                </div>
                <div class="bar">
                    <h3>
                        <span>JAVASCRIPT</span> 
                        <span>85%</span>
                    </h3>
                </div>
                <div class="bar">
                    <h3>
                        <span>PHP</span> 
                        <span>85%</span>
                    </h3>
                </div>
                <div class="bar">
                    <h3>
                        <span>MYSQL</span> 
                        <span>95%</span>
                    </h3>
                </div>
                <div class="bar">
                    <h3>
                        <span>SYMFONY</span> 
                        <span>85%</span>
                    </h3>
                </div>
            </div>
        </div>
        
        
        
        <!-- EXPERIENCE START -->
        <div class="edu-exp">
            <h1 class="heading">
                <span>
                    Experiences & Formations 
                </span>
            </h1>
            <div class="row">
                <div class="box-container"> 
                    <h3 class="title">Expériences</h3>
                    <div class="box">
                        <h3>DEVELOPPEUR WEB Fullstack - février 2022 à avril 2022 (stage)</h3>
                        <span>Home Plus - Garges-lès-Gonesse (95)</span>
                        <!-- <ul> Objectif : Création d'un site e-commerce via le framework de PHP, Symfony 6 : -->
                            <!-- <li>- Établissement d'un cahier des charges avec le directeur</li> 
                            <li>- Respect du modèle MVC</li>
                            <li>- Mise en place du back-office via EasyAdmin v3</li>
                            <li>- Système d'authentification pour les users et l'admin</li>
                            <li>- Importation de l'API de paiement Stripe</li>
                            <li>- Déploiement des e-mails via le bundle Mailer de Symfony</li>
                            <li>- Site Responsive</li>
                            <li>- Gestion du projet front et back en total autonomie</li>   
                             Environnement de développement :</li>   
                             VSCode, Symfony 6, HTML/CSS, Javascript, Bootstrap, Twig, EasyAdmin -->
                            <!-- </ul>                             -->
                            <!-- <div id="more-btn" class="fas fa-plus"></div> -->
                        </div>
                    <div class="box">
                        <h3>Assistant de gestion - mars 2020 à sept 2021 </h3>
                        <span>Star Invest - Asnières-Sur-Seine (92)</span>
                        <!-- <ul>
                            <li>- Élaboration de plans de trésorerie prévisionnel annuel</li> 
                            <li>- Responsable des flottes mobile et automobile du groupe (contrats, TVS....)</li>   
                            <li>- Mise en place de logiciels facilitant la gestion des ressources humaines</li>   
                            <li>- Soutien à l'équipe comptable (analyse des comptes tiers sur logiciel (CEGID)</li>   
                            <li>- Gestion administrative des comptes bancaires du groupe</li>   
                            <li>- Suivi et règlement des tâches fiscales (taxes foncières, mise en place d'échéanciers de paiement auprès du SIP)</li>   
                            <li>- Chargé du règlement des fournisseurs du groupe - Élaboration fichier SEPA/XML</li>   
                            
                        </ul> -->
                    </div>
                    <div class="box">
                        <h3>Assistant de direction - oct 2018 à oct 2019 </h3>
                        <span>Hotel B&B** / Goussainville (95)</span>
                        <!-- <ul>
                            <li>- Assure l’accueil physique et téléphonique des client</li> 
                            <li>- Gère le planning des réservations et des occupations</li>   
                            <li>- Édite les rapports de clôture journalier</li>   
                            <li>- Gestion des différents mails et doléances des clients</li>   
                            <li>- Attribution et contrôle des chambres à nettoyer au personnel d’entretien</li>   
                            <li>- Veille de l’e-reputation de l’hôtel via les OTA et le logiciel TrustYou</li>                               
                        </ul> -->
                    </div>
                    <div class="box-container">

                        <h3 class="title">Formations</h3>
                        <div class="box">
                            <h3>2iTECH Academy by M2i - 2022 à 2023</h3>
                            <span>Concepteur Développeur d'Applications</span> <br>
                            <!-- <div id="more-btn" class="fas fa-eye"></div> -->
                        </div>
                        <div class="box">
                            <h3>Doranco Ecole Supérieur des Technologies Créatives - 2021 à 2022</h3>
                            <span>Développeur Web & Web Mobile</span>

                        </div>
                        <div class="box">
                            <h3>ESGCI / UPEM - 2018 à 2019 <small>(obtenu)</small></h3>
                            <span>Licence Marketing du Tourisme et de l'Hôtellerie</span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- EXPERIENCE END -->
        </section>
        <!------------ ABOUT SECTION END ------------>
        
        
        <!------------ SERVICES SECTION START ------------>
        <section class="services" id="services">
            <h1 class="heading">
                <span>Services</span>
            </h1>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <h3>Web development</h3>
                    <p>
                        Développer un site web en fonction de vos besoins                        
                    </p>
                </div>
                <div class="box">
                    <i class="fab fa-bootstrap"></i>
                    <h3>Bootstrap</h3>
                    <p>
                        Utiliser la librairie bootstrap afin d'intégrer le contenu désiré
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-arrow-up-right-dots"></i>
                    <h3>SEO</h3>
                    <p>
                        Mettre en place les bonnes pratiques SEO pour séduire Google et son référencement
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-brain"></i>
                    <h3>Design Pattern</h3>
                    <p>
                        Représenter les processus par étape à l'aide du Patron de Conception
                    </p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-cog fa-spin"></i>
                    <h3>Adobe XD</h3>
                    <p>
                        Croquer un projet à l'aide du logiciel de la suite Adobe  
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-link"></i>
                    <h3>UML</h3>
                    <p>
                        Modéliser graphiquement à base de pictogramme les classes en conception orientée objet
                    </p>
                </div>
            </div>
        </section>
        <!------------ SERVICES SECTION END ------------>
        
        <!------------ PORTFOLIO SECTION START ------------>
        
        <section class="portfolio" id="portfolio">
            <h1 class="heading">
                <span>portfolio</span>
            </h1>
            <div class="box-container">
                <div class="box">
                    <a href="https://github.com/voltsams/projet_stage_symfony">
                        <img src="images/bedbox.jpg" alt="Capture d'écran d'un site e-commerce">
                    </a>
                    <h3>Projet Bedbox</h3>
                    <span>2022</span>
                </div>

                <div class="box">
                    <a href="https://github.com/voltsams/beat">
                        <img src="images/beat.jpg" alt="Capture d'écran de la page d'accueil d'un site pour un artiste">
                        <h3>Projet Beat</h3>
                        <span>2021</span>
                    </a>
                    </div>

                <div class="box">
                    <a href="https://github.com/voltsams/marvel">
                        <img src="images/marvel.jpg" alt="Capture d'écran de la page d'accueil de mon site Marvel">
                    </a>
                    <h3>Projet Marvel</h3>
                    <span>2021</span>
                </div>
            </div>
        </section>
    <!------------ PORTFOLIO SECTION END ------------>
    
    
    <!------------ CONTACT SECTION START ------------>
    <section class="contact" id="contact">
        <h1 class="heading">
            <span>Contact</span>
        </h1>

        <form action="" method="post">
            <div class="flex">
                <input type="text" name="name" placeholder="nom"class="box" required>
                <input type="text" name="mail" placeholder="e-mail"class="box" required>
            </div>
            <input type="text" name="number" placeholder="numéro de téléphone" class="box" required>
            <textarea name="message" id="" class="box" cols="30" rows="10" placeholder="votre message"required></textarea>
            <input type="submit" value="Envoyer" name="send" class="btn">
        </form>
    </section>

    <!-- FOOTER -->
    <div class="footer"> &copy; copyright <?php echo date('Y'); ?> - <span>Sami DRACH</span></div>
    
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>
</html>

<!-- This is a test -->