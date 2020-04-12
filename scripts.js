function toggleMenu() {
    var links = document.getElementsByClassName("navLink");
    
    for(let l of links) {
        if(l.style.display == "initial")
            l.style.display = "none";
        else
            l.style.display = "initial";
    }
}

function changeView() {
    var links = document.getElementsByClassName("navLink");
    
    if(window.innerWidth >= 769) {
        for(let l of links) { l.style.display = "initial";}
    }
    else {
        for(let l of links) { l.style.display = "none";}
    }

}