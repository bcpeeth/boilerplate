import '../scss/style.scss';

import TypeIt from 'typeit';



new TypeIt('.type-it', {
	speed: 100,
	autoStart: false,
	cursor: false,
})
  
.type('Hi there!')
.pause(1500)
.delete(19)
.type('Welcome to my portfolio.')


let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});

