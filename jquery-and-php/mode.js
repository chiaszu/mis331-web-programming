// window.onload = theme_button;
// function change() {
//   var elem = document.getElementById("theme_button");
//   elem.innerText = elem.innerText === "Dark Mode" ? "Light Mode" : "Dark Mode";
// }

// function changeTheme() {
//   var elem = document.getElementsByTagName("body")[0];
//   elem.className = elem.className === "" ? "dark" : "";
//   change();
// }

// function theme_button() {
//   var button = document.getElementById("theme_button");
//   button.onclick = changeTheme;
// }

window.onload = theme_button;

function theme_button() {
  var button = document.getElementById("theme_button");
  button.onclick = change_Theme;
  $(function () {
    $("#tabs").tabs();
  });
}
function change_Theme() {
  var elem = document.getElementsByTagName("body")[0];
  elem.className = elem.className === "" ? "dark" : "";
  change();
}
function change() {
  var elem = document.getElementById("theme_button");
  elem.innerText = elem.innerText === "Dark Mode" ? "Light Mode" : "Dark Mode";
}
