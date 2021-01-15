let burger = document.getElementById("burger-icon")
let nav = document.getElementById("nav")
let opened = false;


burger.onclick = function(){
      if(opened == false){
        nav.style.display = "flex"
        opened = true;
    }

    else if(opened == true){
        nav.style.display = "none"
        opened = false;

    }
}



function reportWindowSize(){
    if(window.innerWidth >=1024){
        nav.style.display = "flex"
    }
}

window.onresize = reportWindowSize