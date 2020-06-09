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
        
<<<<<<< HEAD
        <title>FEST'IN MOTION - Partners</title>
=======
        <title>FEST'IN MOTION - Our partners</title>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
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
            <span id="chemin" class="item_pagep"><a href="index.html"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Partners</span>
=======
            <span id="chemin" class="item_pagep"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Partners</span>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
        </section>
        
        <div id="corps_page">
            <section class="item_page entete_partenaire">
                <h2 id="titre_partenairesp">Partners</h2>
                <p id="texte_p_partenaires">Find below the list of all the volunteers and partners who helped us in this huge project.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_pagep contenu_partenaires">
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_canon.png" alt="Partenaire Canon"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Canon</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            Canon, a huge partner for photo and video equipment but also our main partner.
=======
                            Canon, a huge partner for photo and video equipment but also, our main partner.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_calais.png" alt="Partenaire Ville de Calais"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">City of Calais</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                           Many thanks to the city of Calais for allowing us to carry out this project here. Without them, this project would not be possible.
=======
                            A big thank you to the city of Calais who allowed us to carry out this project here. Without them, this project would not take place.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_gaumont.png" alt="Partenaire Cinéma Pathé Gaumont"/>
                    <div class="explication_partenaire">                    
<<<<<<< HEAD
                        <span class="nom_partenaire">Gaumont Cinema</span>
                        <p class="infos_partenaire">
                            Thanks to the Gaumont cinema for the projection material and for the films to liven up our days.
=======
                        <span class="nom_partenaire">Pathé Gaumont Cinema</span>
                        <p class="infos_partenaire">
                            Thank you to the Pathé Gaumont cinema for the projection material and for the films to animate our days.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_cnc.png" alt="Partenaire CNC"/>
                    <div class="explication_partenaire">                    
                        <span class="nom_partenaire">CNC</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            Thanks to the CNC as well to animate our days and make the most of our festival.
=======
                            Thank you to the CNC also to liven up our days and make the most of our festival.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_disney_store.png" alt="Partenaire Disney Store"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Disney Store</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            Enjoy wonderful memories with our generous Disney Store partner.
=======
                            Enjoy wonderful memories with our generous partner Disney Store.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_pause_canap.png" alt="Partenaire Pause Canap'"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Pause Canap'</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            Want to take home a souvenir? Our friend Pause Canap' makes sure you can't leave empty-handed.
=======
                            Want to leave with a souvenir? Our friend Pause Canap 'allows us that you cannot leave with empty hands.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_geek_store.png" alt="Partenaire Geekstore"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Geekstore<sup>TM</sup></span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            Thanks to Geekstore<sup>TM</sup>,  we will be able to offer you a small souvenir of our festival.
=======
                            Thanks to Geekstore<sup>TM</sup>, we will have the opportunity to offer you a small souvenir of our festival.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_hovercraft.png" alt="Partenaire L'Hovercraft"/>
                    <div class="explication_partenaire">
<<<<<<< HEAD
                        <span class="nom_partenaire">L'Hovercraft</span>
                        <p class="infos_partenaire">
                            Our partner, L'Hovercraft, will provide on-site catering so that you can enjoy the show for as long as possible.
=======
                        <span class="nom_partenaire">The Hovercraft</span>
                        <p class="infos_partenaire">
                            Our partner, the Hovercraft, will provide catering on site so that you can enjoy the show as long as possible.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_lecamiongourmand.png" alt="Partenaire Le Camion gourmand"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">The Gourmet Truck</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                           Our friend, the Gourmet Truck, will also provide on-site catering for you to enjoy during the show.
=======
                            Our friend, the Gourmet Truck, will also provide on-site catering for you to enjoy during the show.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_laposte.png" alt="Partenaire La Poste"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">La Poste</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            A big thanks to La Poste to ensure the delivery of your souvenir orders during the festival.
=======
                            Many thanks to La Poste for ensuring the delivery of your souvenir orders during the festival.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_hautsdefrance.png" alt="Partenaire Région Hauts-de-France"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Hauts-de-France region</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                             We also thank the Hauts-de-France region for having placed their trust in us throughout this project.
=======
                            We also thank the Hauts-de-France region for having placed their trust in us throughout this project.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_horizon.png" alt="Partenaire Horizon"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Horizon</span>
                        <p class="infos_partenaire">
<<<<<<< HEAD
                            A huge thanks to the Horizon agency for communicating this event to us.
=======
                            A huge thank you to the Horizon agency for communicating this event to us.
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </p>
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

            <div id="bottom_footer">
                <div id="droits">© 2020 Fest'In Motion - All rights reserved</div>
                
<<<<<<< HEAD
                <div id="realisation"><p>website realized by </p><a href="https://www.agence-horizon.fr/"><img src="../images/logo_horizon.png" alt="Logo agence Horizon" /></a></div>
                
                <div id="reglements"><p><a href="mentions_legales.html">Legal notices</a> | <a href="confidentialite.html">privacy policy</a> | <a href="cookies.html">cookies policy</a><br/>| <a href="ventes.html">terms of sale</a> | <a href="contact.html">contact us</a></p></div>
=======
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