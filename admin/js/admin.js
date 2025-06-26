// admin.js

// Menu toggle
let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

if (menu) {
    menu.addEventListener('click', function() {
        let nav = document.querySelector('.navbar');
        if (nav) nav.classList.toggle('active');
    });
}

if (userBtn) {
    userBtn.addEventListener('click', function() {
        let userBox = document.querySelector('.user-box');
        if (userBox) userBox.classList.toggle('active');
    });
}