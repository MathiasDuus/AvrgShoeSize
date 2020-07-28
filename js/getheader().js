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
    urlCheck();
    activeNavItem();
}

function activeNavItem() {
     setTimeout(function () {
    if (document.URL.includes("index")) {
        document.getElementById("forside").className += " active";}
    
    else if (document.URL.includes("opgaver")||document.URL.includes("fuldbeskrivelse")) {
        document.getElementById("opgaver").className += " active";}
    
    else if (document.URL.includes("kontakt")) {
        document.getElementById("kontakt").className += " active";}   
    }, 150);
}

function urlCheck(){
    if (document.URL.includes("send=true")) {
        alert("Tak for din mail :)");}
    else if (document.URL.includes("send=false")) {
        alert("Hov der gik noget galt");}
}
