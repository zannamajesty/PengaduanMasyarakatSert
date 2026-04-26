(function () {
  "use strict";

  var heroCarouselIndicators = document.querySelector("#hero-carousel-indicators");
  var heroCarouselItems = document.querySelectorAll("#heroCarousel .carousel-item");

  if (heroCarouselIndicators && heroCarouselItems.length) {
    if (heroCarouselItems.length === 1) {
      heroCarouselIndicators.style.display = "none";
    }

    heroCarouselItems.forEach(function (_, index) {
      var li = document.createElement("li");
      li.setAttribute("data-bs-target", "#heroCarousel");
      li.setAttribute("data-bs-slide-to", String(index));
      if (index === 0) {
        li.classList.add("active");
      }
      heroCarouselIndicators.appendChild(li);
    });
  }

  var toggleButtons = document.querySelectorAll(".password-toggle");
  toggleButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var targetId = button.getAttribute("data-target");
      var input = document.getElementById(targetId);
      if (!input) return;

      var icon = button.querySelector("i");
      var isPassword = input.getAttribute("type") === "password";

      input.setAttribute("type", isPassword ? "text" : "password");
      if (icon) {
        icon.className = isPassword ? "bi bi-eye-slash" : "bi bi-eye";
      }
    });
  });
})();
