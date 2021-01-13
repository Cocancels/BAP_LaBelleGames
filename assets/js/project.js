section = document.getElementById("projet-cards")
bouton = document.getElementById("seemore-button")
let isOpen = false;
console.log("oui")

bouton.onclick = function(){
    if(isOpen == false){
        document.getElementById("projet-cards").style.maxHeight = "none"
        isOpen = true;
        bouton.innerHTML = "Voir moins"
        console.log(isOpen)
    }

    else if(isOpen == true){
        document.getElementById("projet-cards").style.maxHeight = "600px"
        isOpen = false;
        bouton.innerHTML = "Voir plus"
        console.log(isOpen)
    }
}