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


/* Fonction pour envoyer un mail depuis la page Contact */

function sendMailJS(){
    if(document.getElementById("civilite").value != "" && document.getElementById("mail").value != "" && document.getElementById("nom").value != "" && document.getElementById("prenom").value != "" && document.getElementById("message").value != ""){        
        var civilite = document.getElementById("civilite").value;
        var mail = document.getElementById("mail").value;
        var nom = document.getElementById("nom").value;
        var prenom = document.getElementById("prenom").value;
        var sujet = document.getElementById("sujet").value;
        var message = document.getElementById("message").value;
        var envoieMessage = civilite.toUpperCase()+" "+nom+" "+prenom+" ("+mail+") \n "+message;
        
        envoieMessage = 'mailto:festinmotion@gmail.com?subject='+sujet+'&body='+envoieMessage;

        window.open(envoieMessage);
    }
}

/*Fonction supprimer un billet enfant*/
/*INSCRIPTION*/
function moins1(){
   if(document.getElementById("quantite1_tableau").value > 0){
     document.getElementById("quantite1_tableau").value= document.getElementById("quantite1_tableau").value -1;
       
     document.getElementById("montant1_tableau").value= document.getElementById("montant1_tableau").value -10;  
       
   }else{
       document.getElementById("quantite1_tableau").value= 0;
       
       document.getElementById("montant1_tableau").value= 0;
   } 
}

/*Fonction ajouter un billet enfant*/

function plus1(){
     document.getElementById("quantite1_tableau").value= document.getElementById("quantite1_tableau").value + parseInt(1);
       
     document.getElementById("montant1_tableau").value= document.getElementById("montant1_tableau").value + parseInt(10);  
       
   
}

/*Fonction supprimer un billet aldulte*/
function moins2(){
   if(document.getElementById("quantite2_tableau").value > 0){
     document.getElementById("quantite2_tableau").value= document.getElementById("quantite2_tableau").value -1;
       
     document.getElementById("montant2_tableau").value= document.getElementById("montant2_tableau").value -15;  
       
   }else{
       document.getElementById("quantite2_tableau").value= 0;
       
       document.getElementById("montant1_tableau2").value= 0;
   } 
}

/*Fonction ajouter un billet adulte*/

function plus2(){
     document.getElementById("quantite2_tableau").value= document.getElementById("quantite2_tableau").value + parseInt(1);
       
     document.getElementById("montant2_tableau").value= document.getElementById("montant2_tableau").value + parseInt(15);  
       
   
}




