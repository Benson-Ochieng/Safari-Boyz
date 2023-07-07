<?php

/* Template Name: Tanzania */
get_header();

?>


<!-- Elementor -->
<?php the_content(); ?>





     <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript">
      const pins = [...document.querySelectorAll(".pin")];
      const locations = [...document.querySelectorAll(".locations a")];
      console.log(locations);

      locations.forEach((location) => {
        location.addEventListener("mouseover", () => {
          for (i in pins) {
            if (location.id === pins[i].dataset.dest) {
              pins.forEach((pin) => {
                pin.classList.remove("active");
              });
              pins[i].classList.add("active");
              console.log(true);
            }
          }
        });
        location.addEventListener("mouseleave", () => {
          pins.forEach((pin) => {
            pin.classList.remove("active");
          });
        });
      });
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: window.innerWidth <= 767 ? 1 : 3,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script src="js/main.js"></script>



<?php get_footer();?>
