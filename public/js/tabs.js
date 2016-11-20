/**
 * Created by baptiste on 31/10/2016.
 */
/*
 Tabs
 (c) 2009 By Xul.fr
 Freeware
 */


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openparcours(event, parcours) {

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(parcours).style.display = "flex";
    event.currentTarget.className += " active";
}


