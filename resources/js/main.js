"use strict";

//-----------------------
// Librairie : Lucide
//-----------------------
document.addEventListener("DOMContentLoaded", () => {
    if(window.lucide) {
        lucide.createIcons();
    }
});

// ----------------------------
// Sticky navbar
// ----------------------------
window.addEventListener('scroll', function() {
    let scroll = window.scrollY;
    const nav = document.querySelector('nav');

    if (scroll > 200) {
        nav.classList.add('sticky');
    } else {
        nav.classList.remove('sticky');
    }
});

// ----------------------------
// Zone de progression
// ----------------------------
window.addEventListener('scroll', () => {
  const circle = document.getElementById('scroll-indicator');
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercent = (scrollTop / docHeight) * 100;
  const color = '#bd8bca';
  const arrow = document.querySelector('.scroll-arrow');

  circle.style.background = `conic-gradient(${color} ${scrollPercent}%, transparent 0%)`;

  //Mise à jour de la direction de la flèche :
  if (scrollPercent >= 98) {
    arrow.innerHTML = '&#8593;'; // flèche vers le haut ↑
  } else {
    arrow.innerHTML = '&#x2193;'; // flèche vers le bas ↓
  }

});


// ----------------------------
// Kenko-Ho : Slider
// ----------------------------
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');

if (next && prev) {
    next.addEventListener('click', () => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    });

    prev.addEventListener('click', () => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
    });

    // Auto run slider
    setInterval(() => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    }, 8000);
}

// ----------------------------
// Kenko : Footer
// ----------------------------
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('mapid');

    // Vider le container pour éviter une map "fantôme"
    if (mapContainer) mapContainer.innerHTML = "";

    // Créer la map seulement si elle n'existe pas encore
    if (!window.map) {
        window.map = L.map('mapid').setView([50.71036, 4.36889], 16.4);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(window.map);
        L.marker([50.71036, 4.36889]).addTo(window.map);
    }
});
