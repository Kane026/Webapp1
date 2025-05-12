function logoutFunction(){
    alert("Uw bent nu uitgelogd")
    window.location.href = './dbcalls/logout.php';
}

function validateCreateForm() {
    let gerecht = document.forms["createForm"]["gerecht"].value;
    let prijs = document.forms["createForm"]["prijs"].value;

    if (gerecht == "") {
        alert("U moet een naam invoeren voor het gerecht");
        return false;
    } 
    else if (!/^[A-Za-z\s]+$/.test(gerecht)) {
        alert("U kunt alleen letters gebruiken voor de naam van het gerecht");
        return false;
    }
    
   
    if (prijs == ""){
        alert("U moet een prijs invoeren");
        return false;
    }
     else if (isNaN(prijs)) {
        alert("U kunt alleen cijfers gebruiken voor de prijs van het product");
        return false; 
    }

    return true;
}


