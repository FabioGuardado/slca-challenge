var cards = document.querySelectorAll(".value-card__inner");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    card.classList.toggle("is-flipped");
  });
});
