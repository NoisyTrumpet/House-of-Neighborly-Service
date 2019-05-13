// import external dependencies
// import 'cocoen/dist/js/cocoen.min.js'
// import 'cocoen/dist/js/cocoen-jquery.min.js'
// import 'jquery';
// Load Events
jQuery(document).ready(() => routes.loadEvents());
// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import AOS from 'aos';
AOS.init();

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});



import { config, library, dom } from '@fortawesome/fontawesome-svg-core';
/* For free brands */
import { faFacebook } from '@fortawesome/free-brands-svg-icons';
/* For free solid */
import { faBars } from '@fortawesome/free-solid-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import { faPhone } from '@fortawesome/free-solid-svg-icons';
import { faFax } from '@fortawesome/free-solid-svg-icons';
import { faEnvelope } from '@fortawesome/free-regular-svg-icons';
import { faCircle, faArrowRight } from '@fortawesome/free-solid-svg-icons';
import { faGlobeAmericas } from '@fortawesome/free-solid-svg-icons';
/* For free regular */
// import { faAngleLeft } from '@fortawesome/free-regular-svg-icons';
/* For pro light */
/* For same icon with two different styles */
// import { faAngleRight as fasFaAngleRight } from '@fortawesome/free-solid-svg-icons';
// import { faAngleRight as falFaAngleRight } from '@fortawesome/pro-light-svg-icons';

library.add(faFacebook, faBars, far, faPhone, faFax, faEnvelope, faCircle, faGlobeAmericas, faArrowRight);
config.searchPseudoElements=true;

dom.watch();

// Home Hero:

// Progress Bar




// Animated SVGs
