$(document).ready(function() {
   
console.dir($("#ix-primary_navbar"));
$("#ix-primary-navbar").load("primary_navbar.html", function() {
    $.getScript("primary_navbar.js");
});

$("#ix-footer").load("footer.html");
    
});