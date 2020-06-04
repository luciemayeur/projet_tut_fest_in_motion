/* Fonctions de basculement entre français et anglais */

function switchEN(){
    var new_page = window.location.href;

    new_page = new_page.replace('/fr/','/en/');
    
    window.location.href = new_page;
}

function switchFR(){
    var new_page = window.location.href;
    
    new_page = new_page.replace('/en/','/fr/');
    
    window.location.href = new_page;
}

/* Fonctions pour dérouler le menu (responsive) */

function deroule_menu(){
    document.getElementById("icon_menu_ouvert").style.display = "none";
    document.getElementById("menu_deroulant").style.display = "flex";
}

function cache_menu(){
    document.getElementById("icon_menu_ouvert").style.display = "block";
    document.getElementById("menu_deroulant").style.display = "none";
}

function menu_auto(x){
    if(!x.matches){
        document.getElementById("icon_menu_ouvert").style.display = "none";
        document.getElementById("icon_menu_ferme").style.display = "block";
        document.getElementById("menu_deroulant").style.display = "flex";
    }
}

var longueur_fenetre = window.matchMedia("(max-width: 960px)");

menu_auto(longueur_fenetre);
longueur_fenetre.addListener(menu_auto);