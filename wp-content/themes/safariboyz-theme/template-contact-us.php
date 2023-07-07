<?php

/* Template Name: Contact Us*/
get_header();

?>


<!-- Elementor -->
<?php the_content(); ?>





    <script>
      const faqQuestions = document.querySelectorAll(".question");

      faqQuestions.forEach((question) => {
        question.addEventListener("click", (e) => {
          question.classList.toggle("active");
          const answer = question.nextElementSibling;
          if (question.classList.contains("active")) {
            answer.style.height = `${answer.scrollHeight}px`;
          } else {
            answer.style.height = 0;
          }
        });
      });
    </script>
    <script src="js/main.js"></script>



 <?php get_footer();?>
