/**
 * Main entry for webpack,
 */

// importing js
import './js/scripts';

// importing css
import './css/fonts.css';

//importing images (png, jpg, svg)
 function importAll(r) {
    r.keys().forEach(r)
 };
 const getImages = require.context('./images', true, /\.(png|jpe?g|svg)$/);
 importAll(getImages);