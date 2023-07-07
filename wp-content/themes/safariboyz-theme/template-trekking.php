<?php

/* Template Name: Trekking */
get_header();

?>


<!-- Elementor -->
<?php the_content(); ?>





    <script type="text/javascript">
      const input = document.getElementById("my_input");
      const datepicker = new TheDatepicker.Datepicker(input);
      const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      const d = new Date();
      const month = monthNames[d.getMonth()];
      const day = d.getDate();
      datepicker.render();
      input.setAttribute("placeholder", "Now - " + month + " " + day);
      input.addEventListener("focus", () => {
        const nextDate = (document.querySelector(
          ".the-datepicker__go-next .the-datepicker__button"
        ).innerHTML = `<i class="fa-solid fa-chevron-right"></i>`);
        const prevtDate = (document.querySelector(
          ".the-datepicker__go-previous .the-datepicker__button"
        ).innerHTML = `<i class="fa-solid fa-chevron-left"></i>`);
      });
    </script>
    <script src="js/main.js"></script>



<?php get_footer();?>
