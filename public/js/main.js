document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('toggleButton');
    const html = document.querySelector('html');
    
    button.addEventListener('click', function() {
      if (html.classList.contains('theme-light')) {
        html.classList.remove('theme-light');
        html.classList.add('theme-dark');
      } else {
        html.classList.remove('theme-dark');
        html.classList.add('theme-light');
      }
    });
  });