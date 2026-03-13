/**
 * Import JS de Bootstrap
 */

import 'bootstrap';

/**
 * Alpine.js
 */

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/**
 * Scripts spécifiques
 */

import './main.js';
import './gtm.js';
import './klaro-gtm.js';

/**
 * Lucide
 */

import lucide from 'lucide';
document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();
});
