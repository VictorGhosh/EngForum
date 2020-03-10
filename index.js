
//INPUT: evt: event object, tabIndex: tab index
// DESCRIPTION: move in bewteen tabs
function openTabIndex(evt, tabIndex)
{
    // Declare all variables
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++)
    {
      tabcontent[i].style.display = "none";
    }
    
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabIndex).style.display = "block";
    evt.currentTarget.className += " active";
}

//Open dafault tab index
$("#defaultOpen").click()