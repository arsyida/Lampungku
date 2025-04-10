document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("search-button").addEventListener("click", searchFunction);
  });

  function searchFunction() {
    let query = document.getElementById("search").value.trim();
    if (query) {
      window.location.href = "/places?query=" + encodeURIComponent(query);
    }
  }