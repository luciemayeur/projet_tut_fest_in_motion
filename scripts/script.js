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