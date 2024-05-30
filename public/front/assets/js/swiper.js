import Swiper, { Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

Swiper.use([Pagination]);

export const evolutionSwiper = () => {
  const swipers = document.querySelectorAll(
    '.swiper--evolution'
  );
  swipers.forEach((swiperElement) => {
    const swiper = new Swiper(swiperElement, {
      slidesPerView: 3,
      pagination: {
        el: '.swiper-pagination'
      },
      breakpoints: {
        0: {
          slidesPerView: 2
        },
        640: {
          slidesPerView: 3
        }
      }
    });
  });
};

export const videoGallery = () => {
  const swipers = document.querySelectorAll(
    '.video-gallery__slider'
  );
  swipers.forEach((swiperElement) => {
    const swiper = new Swiper(swiperElement, {
      slidesPerView: 1,
      // direction: 'vertical',
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    });
  });
};
