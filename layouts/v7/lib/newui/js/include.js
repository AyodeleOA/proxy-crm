document.addEventListener("DOMContentLoaded", function () {
    fetch("dashboard-layout.html")
      .then(response => response.text())
      .then(html => {
        document.getElementById("dashboard-placeholder").innerHTML = html;
      })
      .catch(err => console.warn("Failed to load dashboard:", err));
  });
  