function getheader() {
    if (window.XMLHttpRequest)
        xmlhttp = new XMLHttpRequest();
    else
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200)
            document.getElementById("header").innerHTML = this.responseText;}
        
    xmlhttp.open("GET", "../php/bin/header.php", true);
    xmlhttp.send();
    activeNavItem();
}

function activeNavItem() {
     setTimeout(function () {
    if (document.URL.includes("index")) {
        document.getElementById("forside").className += " active";}
    
    if (document.URL.includes("Data")) {
        document.getElementById("data").className += " active";}
    
    if (document.URL.includes("Graf")) {
        document.getElementById("graf").className += " active";}
    }, 50);
}


