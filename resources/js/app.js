import './bootstrap';
import 'bootstrap';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

// Initialize the thumbnail slider
const thumbnailSwiper = new Swiper('.thumbnail-slider', {
    spaceBetween: 20,
    slidesPerView: 1, 

    loop: true,
});

// Initialize the main slider with a fading effect and link it to the thumbnail slider
const mainSwiper = new Swiper('.main-slider', {
    spaceBetween: 10,
    effect: 'fade', // Apply fading effect
    fadeEffect: {
        crossFade: true, // Smooth transition
    },
    thumbs: {
        swiper: thumbnailSwiper,
    },
    loop: true, 
});