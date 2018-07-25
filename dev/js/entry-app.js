/**
 *
 * webpack main entry for global styles, scripts and libs
 *
 */

// styles

import 'bootstrap/dist/css/bootstrap.min.css';
import '../scss/app.scss';


// libs

import 'jquery';
import 'bootstrap';


// modules imports

import './modules/top-navbar';
import './modules/footer';

// scripts

$(document).ready( function () {
    // document.write('elo');
});