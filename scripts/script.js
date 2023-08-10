const footerYear = document.querySelectorAll(".year");
footerYear.forEach(copyright => {
  copyright.innerHTML = new Date().getFullYear();
});
