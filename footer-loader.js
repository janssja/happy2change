function loadFooter() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        const footerElement = document.getElementById("footer");
        if (footerElement) {
          footerElement.innerHTML = this.responseText;
        }
      }
    };
    xhttp.open("GET", "/footer.html", true);
    xhttp.send();
  }
  
  document.addEventListener("DOMContentLoaded", loadFooter);
  