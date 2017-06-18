
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('./libs/typewritter');

import Nav from './nav';
import SliderWritter from './slider-writter';

$(document).ready(function () {
    Nav.init();
    SliderWritter.init();
});


