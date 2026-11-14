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
