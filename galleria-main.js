// insérez le code suivant à la place de l'ancien dans le fichier galleria-main.js
// emplacement Galleria-master/js/
// Load the classic theme
// Galleria.loadTheme('galleria.classic.min.js'); old
Galleria.loadTheme(WSF_PLUGALLERIA_URL . 'lib/galleria/theme/classic/galleria.classic.min.js'); // new

// Initialize Galleria
Galleria.run('#galleria');
