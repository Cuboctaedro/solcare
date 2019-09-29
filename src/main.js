import 'lazysizes';
import 'simplebar';
import {hashFocus, parentFocus} from './components/skiplink/index.js';
import {toggleDropdown} from './components/dropdown/index.js';
import {initPhotoSwipeFromDOM} from './plugins/photoswipe/photoswipedom.js';

// lazysizes
window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.customMedia = {
    '--sm': '(max-width: 479px)',
    '--md': '(max-width: 599px)',
    '--lg': '(max-width: 887px)',
    '--xl': '(max-width: 1175px)',
    '--xxl': '(min-width: 1176px)',

};


// skiplink
hashFocus();

parentFocus();

// dropdown
toggleDropdown();

//PhotoSwipe
initPhotoSwipeFromDOM('.swipe_gallery');
