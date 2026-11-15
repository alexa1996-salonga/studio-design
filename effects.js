document.addEventListener("DOMContentLoaded", () => {
  const quoteBanner = document.querySelector(".quote-banner");

  if (!quoteBanner) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        obs.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.25
  });

  observer.observe(quoteBanner);
});

document.addEventListener("DOMContentLoaded", () => {
    const mapImg = document.getElementById("skywalk-map");
    const lightbox = document.getElementById("map-lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const closeBtn = document.getElementById("close-lightbox");

    if (mapImg && lightbox && lightboxImg && closeBtn) {
        // Open full-screen view when map is clicked
        mapImg.addEventListener("click", () => {
            lightboxImg.src = mapImg.src;
            lightbox.classList.add("is-open");
            lightbox.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden"; // Stops background page scrolling
        });

        // Reusable function to close the full-screen view
        const closeLightbox = () => {
            lightbox.classList.remove("is-open");
            lightbox.setAttribute("aria-hidden", "true");
            document.body.style.overflow = ""; // Restores page scrolling
        };

        // Close when clicking the X button
        closeBtn.addEventListener("click", closeLightbox);

        // Close when clicking the dark backdrop outside the map image
        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Close when pressing the Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && lightbox.classList.contains("is-open")) {
                closeLightbox();
            }
        });
    }
});
document.addEventListener("DOMContentLoaded", () => {

    const factsSection = document.querySelector(".facts-container");

    if (!factsSection) return;

    const observer = new IntersectionObserver((entries, obs) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                obs.unobserve(entry.target);
            }

        });

    }, {
        threshold: 0.2
    });

    observer.observe(factsSection);

});