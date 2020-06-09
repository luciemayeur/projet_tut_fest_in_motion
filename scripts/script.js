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
   if(parseInt(document.getElementById("quantite1_tableau").value) > 0){
     document.getElementById("quantite1_tableau").value = parseInt(document.getElementById("quantite1_tableau").value) - 1;
       
     document.getElementById("montant1_tableau").value = parseInt(document.getElementById("montant1_tableau").value) - 10;  
       
   }else{
       document.getElementById("quantite1_tableau").value = 0;
       
       document.getElementById("montant1_tableau").value = 0;
   } 
}

/*Fonction ajouter un billet enfant*/

function plus1(){
     document.getElementById("quantite1_tableau").value = parseInt(document.getElementById("quantite1_tableau").value) + 1;
       
     document.getElementById("montant1_tableau").value = parseInt(document.getElementById("montant1_tableau").value) + 10; 
}

/*Fonction supprimer un billet aldulte*/
function moins2(){
   if(parseInt(document.getElementById("quantite2_tableau").value) > 0){
     document.getElementById("quantite2_tableau").value = parseInt(document.getElementById("quantite2_tableau").value) - 1;
       
     document.getElementById("montant2_tableau").value = parseInt(document.getElementById("montant2_tableau").value) - 15;  
       
   }else{
       document.getElementById("quantite2_tableau").value = 0;
       
       document.getElementById("montant2_tableau").value = 0;
   } 
}

/*Fonction ajouter un billet adulte*/

function plus2(){
     document.getElementById("quantite2_tableau").value = parseInt(document.getElementById("quantite2_tableau").value) + 1;
       
     document.getElementById("montant2_tableau").value = parseInt(document.getElementById("montant2_tableau").value) + 15;
}


/* Fonction pour le déroulement des réponses dans F.A.Q. */

function devoileReponse(num_question){
    if(document.getElementById("reponse"+num_question).style.display == "block"){
       document.getElementById("reponse"+num_question).style.display = "none";
       document.getElementById("img_bouton"+num_question).src = "../images/arrow_left.png";       
    }else{
       document.getElementById("reponse"+num_question).style.display = "block";
       document.getElementById("img_bouton"+num_question).src = "../images/arrow_down.png";    }
}


/* FONCTIONS POUR REGLAGE PANIER */
function panier_moins1(){
   if(parseInt(document.getElementById("quantite1").innerHTML) > 0){
       document.getElementById("quantite1").innerHTML = parseInt(document.getElementById("quantite1").innerHTML) - 1;
       
       document.getElementById("quantite1_recap").innerHTML = parseInt(document.getElementById("quantite1_recap").innerHTML) - 1;
       
       document.getElementById("total").innerHTML = parseInt(document.getElementById("total").innerHTML) - 10;  
       
   }else{
       document.getElementById("quantite1").innerHTML = 0;       
   } 
}

function panier_plus1(){
    document.getElementById("quantite1").innerHTML = parseInt(document.getElementById("quantite1").innerHTML) + 1;
    
    document.getElementById("quantite1_recap").innerHTML = parseInt(document.getElementById("quantite1_recap").innerHTML) + 1;
       
    document.getElementById("total").innerHTML = parseInt(document.getElementById("total").innerHTML) + 10; 
}

function panier_moins2(){
    if(parseInt(document.getElementById("quantite2").innerHTML) > 0){
        document.getElementById("quantite2").innerHTML = parseInt(document.getElementById("quantite2").innerHTML) - 1;
        
        document.getElementById("quantite2_recap").innerHTML = parseInt(document.getElementById("quantite2_recap").innerHTML) - 1;
       
        document.getElementById("total").innerHTML = parseInt(document.getElementById("total").innerHTML) - 15;  
       
   }else{
       document.getElementById("quantite2").innerHTML = 0;       
   } 
}
function panier_plus2(){
    document.getElementById("quantite2").innerHTML = parseInt(document.getElementById("quantite2").innerHTML) + 1;
    
    document.getElementById("quantite2_recap").innerHTML = parseInt(document.getElementById("quantite2_recap").innerHTML) + 1;
       
     document.getElementById("total").innerHTML = parseInt(document.getElementById("total").innerHTML) + 15; 
}

/* FONCTION POUR IMPRIMER LES TICKETS */
function imprimTickets(){
    console.log("Impression");
    for(var i = 0; i < parseInt(document.getElementById('quantite1_recap').innerHTML); i++){
        var doc = new jsPDF();
        
        doc.save("ticket_enfant_"+(i+1)+".pdf");
    }
    
    for(var i = 0; i < parseInt(document.getElementById('quantite2_recap').innerHTML); i++){
        var doc = new jsPDF();
        
        doc.save("ticket_adulte_"+(i+1)+".pdf");
    }
}