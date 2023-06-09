// Get the modal
var modal = document.getElementById("updateModal");

// Get the button that opens the modal
var btn = document.getElementById("updateButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the profile
var prfl = document.getElementById("profile");

// Get the button that opens the profile
var btn = document.getElementById("show-profile");

// Get the <span> element that closes the profile
var span = document.getElementsByClassName("closed")[0];

// When the user clicks the button, open the profile
btn.onclick = function() {
    prfl.style.display = "block";
}

// When the user clicks on <span> (x), close the profile
span.onclick = function() {
    prfl.style.display = "none";
}

// When the user clicks anywhere outside of the profile, close it
window.onclick = function(event) {
  if (event.target == prfl) {
    prfl.style.display = "none";
  }
}
