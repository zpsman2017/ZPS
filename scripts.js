function toggleMenu() {
    var links = document.getElementsByClassName("navLink");
    for(let l of links) {
        if(l.style.display == "initial")
            l.style.display = "none";
        else
            l.style.display = "initial"
    }
}