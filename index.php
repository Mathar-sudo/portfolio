<?php
if(isset($_POST['envoyer'])){
    $mail=$_POST['mail'];
    $objet=$_POST['objet'];
    $text=$_POST['text'];

    $envoi = mail('ma.arenam@gmail.com',$objet, $text, 'From : '.$mail);
    if($envoi){
       $message = "<p>Votre message a bien été envoyé. Merci, je vous réponds au plus vite ! </p>";
    }
    else{
        $message = "<p>Votre message n'a pas pu être envoyé. </p>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mathilde Arena | Portfolio | Web Développeuse Junior</title>
    
    
    <meta name="author" content="Mathilde Arena">
    <meta name="description" content="Mathilde Arena, Développeuse Web débutante sur Lyon, Rhône-Alpes. Mon objectif est de devenir Web Développeuse Front-End, puis dans quelques années, Full-Stack. Ceci est mon site web, cv, portfolio. ">
    
    
    <!-- Copyright 2021 - Mathilde Arena -->

    <!-- URL canonical -->
    <link rel="canonical" href="https://www.mathildearena.fr/" />
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    
    <!-- Font Awesome icons-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Javascript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <!-- CSS -->
    <link  rel="stylesheet" type="text/css" href="./css/reset.css">
    <link  rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <header>
         <nav class="navbar bg-menu fixed-top navbar-expand-md navperso" id="mainNav">
            <!-- Navbar Responsive -->
            <button class="navbar-toggler navbar-toggler-right" id="btnMenu" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars iconMenu"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#parcours">Formation & Expérience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#realisations">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="en-tete row">
        <div class="bloc-header col-lg-6 col-md-6 col-sm-8 col-xs-8">
            <h1>.Mathilde{</h1>
            <h2>Développeuse-Web : Junior;}</h2>
        </div>
    </div>
    </header>
    <main>
        <!-- Présentation -->
       
            <div class="row justify-content-center" id="intro">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-6 presentation">
                    <h3>Bonjour ! </h3>
                    <p>Je suis Mathilde Arena, Développeuse Web débutante. <br/>Avec mes anciennes études et expériences, j'ai une attirance pour le Front-End. <br/>Toutefois, ma soif d'apprendre et de découvrir ce métier m'aménera, je l'espère, à devenir Développeuse Full-Stack dans quelques années. <br/>Bienvenue donc sur mon site web, cv, portfolio ! </p>
                    <a href='./assets/CV.pdf' id="btn-cv">Téléchargez mon CV</a>
                </div>
            </div>
        

        <!-- DEBUT PARCOURS -->
       
        <section class="container-fluid" id="parcours">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 title background-title">
                        <h2 class="title">Mon parcours</h2>                    
                </div>
            </div>

                <div class="row justify-content-center title">
                    <div class="col-4">
                        <h4  class="title-form">Formation</h4>
                    </div>
                    <div class="col-4">
                        <h4 class="title-exp">Expérience</h4>
                    </div>   
                </div>
            
                <ul class="timeline ">
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 text-right">
                                <h5>Mars 2021 - Avril 2021</h5>
                            </div>
                            <div class="col-5 line-left text-left">
                                
                                <h3 class="vert">
                                    Stage Développeur Web Front-End
                                </h3>
                                <p class="long">(TooLink, LYON)<br/>
                                    Travail en équipe, création d’un site web pour présenter une nouvelle application mobile : développé en HTML5/CSS3/Javascript, conception de l’architecture et des blocs fonctionnels, implémentation des blocs techniques, mise en conformité avec la charte graphique établie, adaptation responsive. 
                                </p>
                                <p class="short">(TooLink, LYON)<br/>
                                    Travail en équipe, création d’un site web développé en HTML5/CSS3/Javascript</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right"> 
                                <h3 class="orange">
                                    Titre Professionnel Développeur Web et Web Mobile
                                </h3>
                                <p class="long">(Obtention en Septembre 2021)<br/>Certification professionnelle (équivalent du Bac +2) délivrée au nom de l’État par le ministère du Travail et de l’Emploi<br/>Instic à Lyon</p>
                                <p class="short">(Obtention en Septembre 2021)<br/>Equivalent d'un bac +2.<br/>Instic à Lyon</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>Septembre 2020 - Avril 2021</h5>
                            </div>
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 text-right">
                                <h5>Avril 2018 - Août 2020</h5>
                            </div>
                            <div class="col-5 line-left text-left">
                                
                                <h3 class="vert">
                                    Fleuriste
                                </h3>
                                <p class="long">(Carré Fleurs Gambetta, LYON)<br/>
                                 Travail en équipe, accueil du client, confection de bouquets et compositions, entretien et mise en valeur du magasin et de la vitrine, gestion des stocks, traiter les arrivages, livraison, communication sur les réseaux sociaux (Facebook et Instagram).
                                </p>
                                <p class="short">(Carré Fleurs Gambetta, LYON)<br/>Travail en équipe, communication sur les réseaux sociaux (Facebook et Instagram), etc.</p>
                            </div>
                            
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 text-right">
                                <h5>Septembre 2015 - Avril 2018</h5>
                            </div>
                            <div class="col-5 line-left text-left">
                                
                                <h3 class="vert">
                                    Différentes activités
                                </h3>
                                <p class="long">(Australie et Nouvelle Zélande)<br/>
                                    Serveuse dans des hôtels et club d’entrepreneurs : organisation d’événements (aménagement d’espace, décoration, aide en cuisine, accueil et service), mise en relation clients (entrepreneurs).<br/>
                                    Fleuriste, préparatrice de minéraux en laboratoire, travail en ferme (cueillette, tri, emballage de fruits).  
                                </p>
                                <p class="short">(Australie et Nouvelle Zélande)<br/>Serveuse, fleuriste, travail en ferme et laboratoire, etc. </p>
                            </div>
                            
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right">
                                
                                <h3 class="orange">
                                    BP Fleuriste
                                </h3>
                                <p>Grenoble et Lyon</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>2013 - 2015</h5>
                            </div>
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 text-right">
                                <h5>Juin 2012 - Août 2015</h5>
                            </div>
                            <div class="col-5 line-left text-left">
                                
                                <h3 class="vert">
                                    Fleuriste
                                </h3>
                                <p class="long">(Carré Fleurs, GRENOBLE et LYON)<br/>
                                    Travail en équipe, accueil du client, confection de bouquets et compositions, traiter les arrivages, entretien du magasin, livraison. 
                                </p>
                                <p class="short">(Carré Fleurs, GRENOBLE et LYON)<br/>
                                    Travail en équipe, accueil du client, etc.</p>
                            </div>
                            
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right">
                                
                                <h3 class="orange">
                                    CAP Fleuriste
                                </h3>
                                <p>Grenoble</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>2012 - 2013</h5>
                            </div>
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right">
                                
                                <h3 class="orange">
                                    Première année de BTS Design de Communication Espace et Volume 
                                </h3>
                                <p>Antibes</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>2011 - 2012</h5>
                            </div>
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right">
                                
                                <h3 class="orange">
                                    Mise à Niveau en Arts Appliqués  
                                </h3>
                                <p>Montpellier</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>2010 - 2011</h5>
                            </div>
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right">
                                
                                <h3 class="orange">
                                    Bac Professionnel Production Graphique 
                                </h3>
                                <p>Grenoble</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>2008 - 2010</h5>
                            </div>
                        
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 text-right">
                                <h5>2006 - 2010</h5>
                            </div>
                            <div class="col-5 line-left text-left">
                                
                                <h3 class="vert">
                                    Stages Production Graphique
                                </h3>
                                <p class="long">(GRENOBLE et TURIN - Italie)<br/>
                                    Création et reproduction de mise en page, retouche photo, création de logo, imposition, finition, installation de signalétique.
                                </p>
                                <p class="short">(Carré Fleurs, GRENOBLE et LYON)<br/>
                                    Création et reproduction de mise en page, retouche photo, création de logo, imposition, finition, installation de signalétique.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline">
                        <div class="row justify-content-center">
                            <div class="col-5 line-right text-right">
                                
                                <h3 class="orange">
                                    BEP Métiers de la Communication et des Industries Graphiques
                                </h3>
                                <p>Grenoble</p>
                            </div>
                            <div class="col-5 text-left">
                                <h5>2006 - 2008</h5>
                            </div>
                        
                        </div>
                    </li>
                </ul>
            
        </section>

        <!-- FIN PARCOURS -->

        <!-- DEBUT COMPETENCES -->

        <section class="container-fluid" id="competences">
            <div class="row justify-content-center space">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 title background-title">
                        <h2>Mes compétences</h2>                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-6 presentation">
                    <p>Comme vous avez dû le voir dans mon parcours professionnel et scolaire, j'ai eu l'occasion de me baigner dans différentes activités qui m'ont toutes beaucoup plu. <br/>Ce que le Web Développement m'apporte en plus, c'est justement cette diversité, ce renouvellement des technologies et des moyens pour coder, qui font de ce métier un apprentissage de tous les jours. <br/> Mes connaissances sont ici pour vous résumer ce que j'ai acquis en compétences professionnelles mais aussi personnelles. </p>
                </div>
            </div>
            
                <h4 class="title-form">Compétences techniques en développement</h4>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-10 col-sm-10">
                        <p class="subtitle">Langages</p>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"> HTML5</div>
                        </div>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> CSS3</div>
                        </div>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> Javascript</div>
                        </div>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> SQL</div>
                        </div>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> PHP7</div>
                        </div>
                        
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 col-sm-12 bloc-comp">
                    <p class="subtitle">Autres connaissances </p>
                        <ul class="container-flex justify-content-center back-orange">
                            <li>Bootstrap</li>
                            <li>Angular</li>
                            <li>JQuery</li>
                            <li>PhpMyAdmin</li>
                            <li>Ajax</li>
                            <li>Merise/UML</li>
                            <li>Wordpress</li>
                            <li>Responsive</li>
                            <li>UX Design</li>
                        </ul>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-10 col-sm-10">
                        <h4 class="title-form">Compétences en conception graphique</h4>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"> Indesign</div>
                        </div>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> Illustrator</div>
                        </div>
                        <div class="progress mb-3 bar">
                            <div class="progress-bar text-bardev" role="progressbar" style="width:40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> Photoshop</div>
                        </div>
                    </div>
                
                
                    <div class="col-xl-4 col-lg-6 col-md-10 col-sm-12 bloc-comp">
                        <h4 class="title-form vert">Soft Skills</h4>
                        <ul class="container-flex justify-content-center back-green">
                            <li>Anglais correct</li>
                            <li>Rigoureuse</li>
                            <li>Autonome</li>
                            <li>Persévérante</li>
                            <li>Impliquée</li>
                            <li>Organisée</li>
                            <li>Capacité d'adaptation</li>
                            <li>Esprit d'équipe</li>
                            <li>Sens de la communication</li>
                        </ul>
                    </div>
                </div>
                
            
        </section>

        <!-- DEBUT REALISATIONS -->

        <section class="container-fluid" id="realisations">
            <div class="row justify-content-center space">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 title background-title">
                        <h2>Mes réalisations</h2>                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-6 presentation">
                    <p>Voici quelques projets réalisés avec différents outils. D'autres sont à venir... Repassez régulièrement !</p>
                </div>
            </div>
            <div class="row justify-content-center ensemblecard">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-10">
                    <div class="mycard">
                        <img src="assets/winnerschool.JPG" alt="Projet Winnerschool">
                        <div class="mycard-body">
                            <h4>Winnerschool</h4>
                            <h5>Outils : HTML5, CSS3, Ajax, jQuery, Bootstrap, PHP7, MySQL avec PhpMyAdmin</h5>
                            <h5 class="mycard-subtitle">Projet réalisé en formation en groupe de 3 personnes, en 4 jours. </h5>
                            <p class="mycard-text">Le but était de réaliser une application web pour une école fictive de soutien scolaire, Winnerschool. Ainsi, nous avons créé des fonctions CRUD accessibles suivant le profil (administrateur, secrétaire, élève, etc.). C'est un projet réalisé complétement en MVC et en programmation orientée objet. </p>
                            <ul id="pass">Si vous voulez accédez au site : 
                                <li>Login : admin</li>
                                <li>Mot de passe : winnerschool</li>
                                <li>Connexion : administrateur</li>
                            </ul>
                            
                            <a href="projets/winnerschool/index.php" target="blank" class="btn btncard btncard-margin">Aperçu</a>
                            <a href="https://github.com/Mathar-sudo/winnerschool/commits/main" target="blank" rel="noopener" class="btn btncard">Code source</a>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-10">
                    <div class="mycard">
                        <img src="assets/dynamic-jet.JPG" alt="Projet Dynamic Jet">
                        <div class="mycard-body">
                          <h4>Dynamic Jet</h4>
                          <h5>Outils : HTML5, CSS3, Bootstrap, PHP7, MySQl avec PhpMyAdmin</h5>
                          <h5 class="mycard-subtitle">Projet réalisé en formation en groupe de 3 personnes en 3 jours.</h5>
                          <p class="mycard-text">Nous devions créer un site internet pour Dynamic-Jet, une entreprise fictive de location de scooter des mers et autres activités nautiques. Le but était donc de créer des fonctions CRUD accessible pour l'administrateur. C'est un projet réalisé en programmation procédurale. </p>
                          <a href="projets/dynamic-jet/reservation.php" target="blank" class="btn btncard btncard-margin">Aperçu</a>
                          <a href="https://github.com/Mathar-sudo/portfolio/tree/master/projets/dynamic-jet" target="_blank" rel="noopener" class="btn btncard">Code source</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-10">
                    <div class="mycard">
                        <img src="assets/brew-lab.JPG" alt="Projet Brew Lab">
                        <div class="mycard-body">
                          <h4>Brew Lab</h4>
                          <h5>Outils : Wordpress, Illustrator, Photoshop</h5>
                          <h5 class="mycard-subtitle">Projet personnel.</h5>
                          <p class="mycard-text">Création d'un site Wordpress pour la brasserie Brew Lab. <br/>Logo et favicon réalisé sur Illustrator. Retouches de certaines photos sur Photoshop. Fait sous Wordpress pour que le client puisse le modifier lui-même par la suite. (Site en construction, en attente de contenu) </p>
                          <a href="https://thebrewlab.fr" rel="noopener" target="_blank" class="btn btncard">Aperçu</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-10">
                    <div class="mycard">
                        <img src="assets/jquery-pages.JPG" alt="Projet JQuery">
                        <div class="mycard-body">
                          <h4>Let's play</h4>
                          <h5>Outils : HTML5/CSS3/JQuery</h5>
                          <h5 class="mycard-subtitle">Projet personnel.</h5>
                          <p class="mycard-text">Exercice personnel pour manier les class avec JQuery.</p>
                          <a href="projets/jquery-pages/index.html" class="btn btncard btncard-margin">Aperçu</a>
                          <a href="https://github.com/Mathar-sudo/portfolio/tree/master/projets/jquery-pages" rel="noopener" target="_blank" class="btn btncard">Code source</a>
                        </div>
                    </div>
                </div>
              
            </div>






        </section>



        <!-- DEBUT CONTACT -->
          <section class="container-fluid">
            <div class="row justify-content-center space" id="contact">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 title background-title">
                        <h2>Contact</h2>                    
                </div>
            </div>

            <div class="row justify-content-center" id="bloc-contact">
                <div class="col-12 justify-content-center" id="coordonnees">
                
                    <p>Mathilde Arena</p>
                    <p><i class="fa fa-compass"></i>  Lyon</p>
                    <a href='./assets/CV.pdf' class="cv">Téléchargez mon CV</a>
                    <p class="subtitle">Pour plus d'informations ou boire un café ensemble contactez-moi !</p>
                    <form action="#formcontact" method="post" id="formcontact" class="col-lg-6 col-sm-10">                        
                        <input type="email" class="form-control mb-3" name="mail" placeholder="Mail" required>
                        <input type="text" class="form-control mb-3" name="objet" placeholder="Objet" required>
                        <textarea class="form-control mb-3" name="text" placeholder="Laissez moi un petit mot ici. " id="" cols="30" rows="10" required></textarea>
                        <input type="submit" name="envoyer" class="btn envoyer-hover" value="Envoyer" >    
                        <?php echo $message ?>
                    </form>
                    
                 </div>
                 
            </div>
        </section>
    </main>
    <footer>
        <a href="mailto:ma.arenam@gmail.com" class="mail" alt="Lien pour envoyer un mail"><i class="fa fa-envelope"></i> </a>
        <a href="https://www.linkedin.com/in/mathilde-arena-93a726195/" rel="noopener" alt="Lien vers linkedin" ><i class="fab fa-linkedin"></i></a> 
        <a href="https://github.com/Mathar-sudo" rel="noopener" alt="Lien vers github"><i class="fab fa-github-square"></i></a> 

    </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>