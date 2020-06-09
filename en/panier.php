<?php
    session_start();
<<<<<<< HEAD
?>
<!DOCTYPE html>
<html lang="fr">
=======

    if(!empty($_POST) && count($_POST) >= 2){
        foreach($_POST as $key => $value){
            $_SESSION[$key] = $value;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Site officiel du festival Fest'In Motion" />
        <meta name="keywords" content="Fest'In Motion, Festival, Animation, Dessin animé, Événement, Extérieur, Art, Cinéma, Dessin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
<<<<<<< HEAD
        <title>FEST'IN MOTION - Your bag</title>
=======
        <title>FEST'IN MOTION - Your cart</title>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
        <link rel="shortcut icon" type="images/png" href="../images/favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="../styles/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../styles/style.css" />
        
        <link href="http://fr.allfont.net/allfont.css?fonts=dosis" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
        
        <script src="../scripts/script.js" type="text/javascript"></script>
<<<<<<< HEAD
=======
        <script src="../librairies/jspdf.js" type="text/javascript"></script>
        <script src="../librairies/jspdf.debug.js" type="text/javascript"></script>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
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
            <span id="chemin" class="item_page"><a href="index.html"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Bag</span>
=======
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Cart</span>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
        </section>
        
        <div id="corps_page">
            <section class="item_page titre_entete">
<<<<<<< HEAD
                <h2 id="titre_panier">Bag</h2>
=======
                <h2 id="titre_panier">Cart</h2>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                <p id="sous_titres_panier">Find below the summary of your order to attend the festival.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_panier">
                <div class="panier_detail">
<<<<<<< HEAD
                    <h3 class="titre_panier_vue">Your bag</h3>
=======
                    <h3 class="titre_panier_vue">Your cart</h3>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    
                    <div id="traitgris"><hr></div>
                    <!-- Ligne horizontale -->
                    
                    <div class="place_enfant">
                        <div class="entete_place">
                            <img class="preview_ticket" src="../images/ticket_festinmotion.png" alt="Ticket Fest'In Motion" />
                        
<<<<<<< HEAD
                            <p>Fest'In Motion - Child ticket (-10 ans)</p>
=======
                            <p>Fest'In Motion - Child Entrance (-10 years old)</p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                          </div>  
                        <div class="reglage_quantite">
                            
                            <p><button id="moins1" onclick="panier_moins1();"><img src="../images/icon_moins.png" alt="Icône moins" />
                            </button><button id="plus1" onclick="panier_plus1();"><img src="../images/icon_plus.png" alt="Icône plus" /></button></p>                         
                             <p class="quantite">
<<<<<<< HEAD
                            <strong>Quantity :</strong> <span id="quantite1">0</span></p>
=======
                            <strong>Quantity :</strong> <span id="quantite1">      <?php
                                    if(!empty($_SESSION) && count($_SESSION) >= 2){
                                        echo $_SESSION["quantite_enfant"];
                                    }else{
                                        echo "0";
                                    }
                                 ?></span></p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                            
                        
                            </div>   
                    </div>
                    
                    <div class="place_adulte">
                        <div class="entete_place">
                            <img class="preview_ticket" src="../images/ticket_festinmotion.png" alt="Ticket Fest'In Motion" />
<<<<<<< HEAD
                            <p>Fest'In Motion - Adult ticket</p>
                        </div>
                        <div class="reglage_quantite">
                            <p><button id="moins2" onclick="panier_moins2();"><img src="../images/icon_moins.png" alt="Icône moins" /></button><button id="plus2" onclick="panier_plus2();"><img src="../images/icon_plus.png" alt="Icône plus" /></button></p>
                            <p class="quantite"><strong>Quantity :</strong> <span id="quantite2">0</span></p>
=======
                            <p>Fest'In Motion - Adult Entrance</p>
                        </div>
                        <div class="reglage_quantite">
                            <p><button id="moins2" onclick="panier_moins2();"><img src="../images/icon_moins.png" alt="Icône moins" /></button><button id="plus2" onclick="panier_plus2();"><img src="../images/icon_plus.png" alt="Icône plus" /></button></p>
                            <p class="quantite"><strong>Quantity :</strong> <span id="quantite2">
                                <?php
                                    if(!empty($_SESSION) && count($_SESSION) >= 2){
                                        echo $_SESSION["quantite_adulte"];
                                    }else{
                                        echo "0";
                                    }
                                 ?></span></p>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                        </div>
                    </div>
                    
                </div>
                
                <!-- Ligne verticale -->
                
                <div class="panier_resume">
<<<<<<< HEAD
                    <h3 class="titre_panier_vue">Your bag</h3>
=======
                    <h3 class="titre_panier_vue">Your cart</h3>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    
                    <div id='traitgris'><hr></div>
                    <!-- Ligne horizontale -->
                    
<<<<<<< HEAD
                    <p>Child ticket ...................... <span id="quantite1_recap">0</span></p>
                    <p>Adult ticket ...................... <span id="quantite2_recap">0</span></p>
                    
                    <div class="total_paiement">
                        <h4>Total :</h4>
                        <span id="total">0</span>€00
=======
                    <p>Child Entrance ...................... <span id="quantite1_recap"><?php
                                    if(!empty($_SESSION) && count($_SESSION) >= 2){
                                        echo $_SESSION["quantite_enfant"];
                                    }else{
                                        echo "0";
                                    }
                                 ?></span></p>
                    <p>Adult Entrance ...................... <span id="quantite2_recap"><?php
                                    if(!empty($_SESSION) && count($_SESSION) >= 2){
                                        echo $_SESSION["quantite_adulte"];
                                    }else{
                                        echo "0";
                                    }
                                 ?></span></p>
                    
                    <div class="total_paiement">
                        <h4>Total :</h4>
                        <span id="total"><?php
                                    if(!empty($_SESSION) && count($_SESSION) >= 2){
                                        $montant = intval($_SESSION["montant_enfant"]) + intval($_SESSION["montant_adulte"]);
                                        echo $montant;
                                    }else{
                                        echo "0";
                                    }
                                 ?></span>€00
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    </div>
                    <!-- Ligne horizontale -->
                    <div id='traitgris'><hr></div>
                    
<<<<<<< HEAD
                    <a id="lien_paiement" href="https://www.google.fr/">Pay</a>
=======
                    <button id="lien_paiement" onclick="imprimTickets();">Pay</button>
>>>>>>> b4cb91d4cfeb231d9e4105bafcb6243f6cf3e098
                    
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