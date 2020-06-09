<?php
    session_start();
?>
<!DOCTYPE html>
<<<<<<< HEAD
<html lang="fr">
=======
<html lang="en">
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Site officiel du festival Fest'In Motion" />
        <meta name="keywords" content="Fest'In Motion, Festival, Animation, Dessin animé, Événement, Extérieur, Art, Cinéma, Dessin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>FEST'IN MOTION - F.A.Q.</title>
        <link rel="shortcut icon" type="images/png" href="../images/favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="../styles/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../styles/style.css" />
        
        <link href="http://fr.allfont.net/allfont.css?fonts=dosis" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
        
        <script src="../scripts/script.js" type="text/javascript"></script>
    </head>
    
    <body>
        <header>
<<<<<<< HEAD
            <a id="logo" href="index.html"><img src="../images/logo_festinmotion.png" alt="Logo de Fest'In Motion" /></a>
=======
            <a id="logo" href="index.php"><img src="../images/logo_festinmotion.png" alt="Logo de Fest'In Motion" /></a>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
            
            <div id="menu_deroulant">
                <button id="icon_menu_ferme" onclick="cache_menu();"><img src="../images/icon_menu_ferme.png" alt="Icône menu déroulant" /></button>
                <nav id="menu">
<<<<<<< HEAD
                    <a href="evenement.html">Event</a>
                    <a href="inscription.html">Registration</a>
                    <a href="partenaires.html">Partners</a>
                    <a href="informations.html">Information</a>
                    <a href="galeries.html">Gallery</a>
                    <a href="faq.html">F.A.Q.</a>
                    <a href="contact.html">Contact</a>
=======
                    <a href="evenement.php">Event</a>
                    <a href="inscription.php">Registration</a>
                    <a href="partenaires.php">Partners</a>
                    <a href="informations.php">Informations</a>
                    <a href="galeries.php">Gallery</a>
                    <a href="faq.php">F.A.Q.</a>
                    <a href="contact.php">Contact</a>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                </nav>

                <div id="reseaux_sociaux">
                    <a href="https://www.facebook.com/FestIn-Motion-100813134998756/?modal=admin_todo_tour"><img src="../images/icon_facebook.png" alt="Lien Facebook"></a>
                    <a href="https://www.instagram.com/festinmotion/"><img src="../images/icon_instagram.png" alt="Lien Instagram"></a>
                    <a href="https://twitter.com/FestMotion"><img src="../images/icon_twitter.png" alt="Lien Twitter"></a>
                    <a href="https://www.youtube.com/channel/UCcgmiDp9LxrktaljhuOzh9Q"><img src="../images/icon_youtube.png" alt="Lien Youtube"></a>
<<<<<<< HEAD
                    <a href="panier.html"><img src="../images/icon_panier.png" alt="Lien Panier"></a>
                </div>

                <div id="langues">
                    <button id="french" class="active" onclick="switchFR();">FR</button>
                    <button id="english" onclick="switchEN();">EN</button>
=======
                    <a href="panier.php"><img src="../images/icon_panier.png" alt="Lien Panier"></a>
                </div>

                <div id="langues">
                    <button id="french" onclick="switchFR();">FR</button>
                    <button id="english" class="active" onclick="switchEN();">EN</button>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                </div>
            </div>
            <button id="icon_menu_ouvert" onclick="deroule_menu();"><img src="../images/icon_menu_ouvert.png" alt="Icône menu déroulant" /></button>
        </header>
        
        <section id="banniere">
            <div id="photos_banniere">
                <img src="../images/banniere.jpg" alt="Image banniere"  class="photo_baniere" />
            </div>
<<<<<<< HEAD
            <span id="chemin" class="item_page"><a href="index.html"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // F.A.Q.</span>
=======
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // F.A.Q.</span>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
        </section>
        
        <div id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_faq">F.A.Q.</h2>
<<<<<<< HEAD
                <p id="texte_p_faq">Find below practical questions about us and our festival.</p>
=======
                <p id="texte_p_faq">Find practical questions about us and our festival below.</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_faq">
                <div class="faq_question">
                    <div id="question1" class="question">
<<<<<<< HEAD
                        <p>Is the exit final?</p>
                        <button id="bouton1" class="bouton" onclick="devoileReponse(1);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton1" /></button>
                    </div>
                    <div id="reponse1" class="reponse">
                       <p> Festival goers can enter and exit freely. Due to the Vigipirate plan, entry searches are mandatory.</p>
=======
                        <p>Is the exit final ?</p>
                        <button id="bouton1" class="bouton" onclick="devoileReponse(1);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton1" /></button>
                    </div>
                    <div id="reponse1" class="reponse">
                       <p>Festival goers can enter and exit freely. Due to the Vigipirate plan, entry searches are mandatory.</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                </div>
                <div class="faq_question">
                    <div id="question2" class="question">
<<<<<<< HEAD
                        <p>Are animals allowed on the site?</p>
                        <button id="bouton2" class="bouton" onclick="devoileReponse(2);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton2" /></button>
                    </div>
                    <div id="reponse2" class="reponse">
                      <p>  Our animal friends are not allowed on the whole site and at the campsite, for reasons of hygiene, safety and for their own well-being.</p>
=======
                        <p>Are animals allowed on the site ?</p>
                        <button id="bouton2" class="bouton" onclick="devoileReponse(2);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton2" /></button>
                    </div>
                    <div id="reponse2" class="reponse">
                      <p>Our animal friends are not allowed on the whole site and at the campsite, for reasons of hygiene, safety and for their own well-being.</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                </div>
                <div class="faq_question">
                    <div id="question3" class="question">
<<<<<<< HEAD
                        <p>What objects are refused at the entrance to the festival?</p>
                        <button id="bouton3" class="bouton" onclick="devoileReponse(3);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton3" /></button>
                    </div>
                    <div id="reponse3" class="reponse">
                    <p>   It is strictly forbidden to introduce: Bottles of alcohol and glass, weapons and other explosive, flammable or volatile substances, all dangerous objects, any pyrotechnic article, signs and banners of any size of a political, ideological, religious nature or advertising.</p>
=======
                        <p>What objects are refused at the entrance to the festival ?</p>
                        <button id="bouton3" class="bouton" onclick="devoileReponse(3);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton3" /></button>
                    </div>
                    <div id="reponse3" class="reponse">
                        <p>It is strictly forbidden to introduce: Bottles of alcohol and glass, weapons and other explosive, flammable or volatile substances, all dangerous objects, any pyrotechnic article, signs and banners of any size of a political, ideological, religious nature or advertising.</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                </div>
                <div class="faq_question">
                    <div id="question4" class="question">
                        <p>Objects found/lost ?</p>
                        <button id="bouton4" class="bouton" onclick="devoileReponse(4);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton4" /></button>
                    </div>
                    <div id="reponse4" class="reponse">
<<<<<<< HEAD
                       <p> For your comfort, a left-luggage office is available at the entrance to the festival 24 hours a day, as well as a lost and found space. Objects not recovered will be handed over to the town hall after the festival. Important: bulky objects such as motorcycle helmets will not be able to pass the control.</p>
=======
                       <p>For your comfort, a left-luggage office is available at the entrance to the festival 24 hours a day, as well as a lost and found space. Objects not recovered will be handed over to the town hall after the festival. Important: bulky objects such as motorcycle helmets will not be able to pass the control.</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                </div>
                <div class="faq_question">
                    <div id="question5" class="question">
                        <p>What to do in case of trouble ?</p>
                        <button id="bouton5" class="bouton" onclick="devoileReponse(5);"><img src="../images/arrow_left.png" alt="Flêche vers la gauche" id="img_bouton5" /></button>
                    </div>
                    <div id="reponse5" class="reponse">
<<<<<<< HEAD
                       <p> If there is a problem, notify the nearest security officer or the Red Cross for medical concerns.
</p>
=======
                       <p>If there is a problem, notify the nearest security officer or the Red Cross for medical concerns.</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                </div>
            </section>
        </div>
        
        <footer>
            <div id="top_footer">
                <div id="liens">
                    <div id="bloc_liens1">
<<<<<<< HEAD
                        <a href="evenement.html">Event</a>
                        <a href="inscription.html">Registration</a>
                        <a href="partenaires.html">Partners</a>
                    </div>
                    <div id="bloc_liens2">
                        <a href="informations.html">Information</a>
                        <a href="galeries.html">Gallery</a>
                        <a href="faq.html">F.A.Q.</a>
                    </div>
                    <div id="bloc_liens3">
                        <a href="contact.html">Contact</a>
=======
                        <a href="evenement.php">Event</a>
                        <a href="inscription.php">Registration</a>
                        <a href="partenaires.php">Partners</a>
                    </div>
                    <div id="bloc_liens2">
                        <a href="informations.php">Informations</a>
                        <a href="galeries.php">Gallery</a>
                        <a href="faq.php">F.A.Q.</a>
                    </div>
                    <div id="bloc_liens3">
                        <a href="contact.php">Contact</a>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                </div>
                <div id="localisation">
                    <div id="texte_carte">
                        <h3 id="titre_carte">FEST'IN MOTION</h3>
                        <p id="adresse_carte">
                            La Citadelle<br/>
                            Avenue Pierre de Coubertin<br/>
                            62100 Calais
                        </p>
                    </div>
                    
                    <div id="carte" style="width: 240px; height: 180px;"></div>

                </div>
            </div>
            
            <div id="trait"><hr></div>          

<<<<<<< HEAD
             <div id="bottom_footer">
                <div id="droits">© 2020 Fest'In Motion - All rights reserved</div>
                
                <div id="realisation"><p>website realized by </p><a href="https://www.agence-horizon.fr/"><img src="../images/logo_horizon.png" alt="Logo agence Horizon" /></a></div>
                
                <div id="reglements"><p><a href="mentions_legales.html">Legal notices</a> | <a href="confidentialite.html">privacy policy</a> | <a href="cookies.html">cookies policy</a><br/>| <a href="ventes.html">terms of sale</a> | <a href="contact.html">contact us</a></p></div>
=======
            <div id="bottom_footer">
                <div id="droits">© 2020 Fest'In Motion - All rights reserved</div>
                
                <div id="realisation"><p>Website created by </p><a href="https://www.agence-horizon.fr/"><img src="../images/logo_horizon.png" alt="Logo agence Horizon" /></a></div>
                
                <div id="reglements"><p><a href="mentions_legales.php">Legal notices</a> | <a href="confidentialite.php">Privacy policy</a> | <a href="cookies.php">Cookies policy</a><br/>| <a href="ventes.php">Terms of sale</a> | <a href="contact.php">Contact us</a></p></div>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
            </div>
        </footer>
        
        <script>
            var mymap = L.map('carte').setView([50.956413, 1.842957], 14);
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                minZoom: 2,
                id: 'mapbox.streets'
            }).addTo(mymap);
            
            L.marker([50.956413, 1.842957]).addTo(mymap)
            /*.bindPopup("<strong>FEST'IN MOTION</strong><p>La Citadelle<br/>Avenue Pierre de Coubertin<br/>62100 Calais</p>").openPopup()*/;
        </script>
    </body>
</html>