function loadNavbar() {
  const xhttp = new XMLHttpRequest();
  let baseURL;
  if (window.location.hostname === 'localhost') {
    baseURL = 'http://localhost:8000';
  } else {
    baseURL = 'https://happy2change.be';
  }
  
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("navbar").innerHTML = this.responseText;
    }
  };
  console.log(`${baseURL}/navbar.html`);
  xhttp.open("GET", `${baseURL}/navbar.html`, true);
  xhttp.send();
}

document.addEventListener("DOMContentLoaded", loadNavbar);
