/* Site JS */

// Site Styles
import '../../scss/site/index.scss';

if (module.hot) {
  module.hot.accept();
}

function toggleMobileNav() {
  const menuToggle = document.getElementById('mobile-nav-toggle');
  const pageWrapper = document.getElementById('page');

  if ((menuToggle) && (pageWrapper)) {
    menuToggle.addEventListener('click', (e) => {
      pageWrapper.classList.toggle('toggle__mobile-nav--active');
      menuToggle.setAttribute(
        'aria-expanded',
        `${'true' !== menuToggle.getAttribute('aria-expanded')}`
      );
      e.preventDefault();
    });
  }
}

document.addEventListener('DOMContentLoaded', () => {
  toggleMobileNav();
});
