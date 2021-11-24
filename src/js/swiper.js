import Swiper, { Navigation, Pagination } from 'swiper';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Swiper.use([Navigation, Pagination]);

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    grabCursor: true,
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3
        },
    }
});


var swiperContents = new Swiper('.swiper-contents', {
    slidesPerView: 1,
    slidesPerGroup: 1,
    grabCursor: true,
    controller: {
        control: swiperImages
    }
});
var swiperImages = new Swiper('.swiper-images', {
    slidesPerView: 1,
    grabCursor: true,
});
var swiperAdvantages = new Swiper('.swiper-advantages', {
    slidesPerView: 1,
    grabCursor: true,
    controller: {
        control: swiperImages
    }
});
