/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

function yourFunction() {
    document.getElementById("myDropdown").classList.toggle("show");

}
function bedroomFunction(){
    document.getElementById("bedroomDropdown").classList.toggle("show");
}
function kitchenFunction(){
    document.getElementById("kitchenDropdown").classList.toggle("show");
}
function livingroomFunction(){
    document.getElementById("livingroomDropdown").classList.toggle("show");
}


// Close the dropdown menu if the user clicks outside of it
window.on
click = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
