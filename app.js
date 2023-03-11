/* app.js */
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link');

navToggle.addEventListener('click', () => {
  document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    document.body.classList.remove('nav-open');
  });
});
const aboutLink = document.querySelector('.about-link');
const aboutSection = document.getElementById('about');

aboutLink.addEventListener('click', (event) => {
  event.preventDefault();
  aboutSection.scrollIntoView({ behavior: "smooth" });
});
