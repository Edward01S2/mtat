// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min'

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import findUs from './routes/findus';
import programs from './routes/programs';



/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  findUs,
  programs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
