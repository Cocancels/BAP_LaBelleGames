let burger = document.getElementById("burger-icon")
let nav = document.getElementById("nav")
let opened = false;


burger.onclick = function(){
      if(opened == false){
        nav.style.display = "block"
        opened = true;
    }

    else if(opened == true){
        nav.style.display = "none"
        opened = false;

    }
}

if(window.innerWidth >=1024){
    console.log("oui")
}