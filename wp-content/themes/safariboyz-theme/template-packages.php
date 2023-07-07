<?php

/* Template Name: Packages */
get_header();

?>
<!-- Elementor -->
 <?php the_content(); ?>






    <!-- javascript -->

    <script type="text/javascript">
      const showMoreBtn = document.querySelector(".show-more");
      const packagescontainer = document.querySelector(".package-wrapper");
      const packages = [...document.querySelectorAll(".packages")];
      let showedP = false;
      showMoreBtn.addEventListener("click", () => {
        if (!showedP) {
          packagescontainer.style.height = `${packagescontainer.scrollHeight}px`;
          showMoreBtn.innerText = "Show Less...";
        } else {
          packagescontainer.style.height = `${packages[0].scrollHeight}px`;
          showMoreBtn.innerText = "Show More...";
        }
        showedP = !showedP;
      });
      window.addEventListener("load", () => {
        packagescontainer.style.height = `${packages[0].scrollHeight}px`;
      });
    </script>
    <script src="js/main.js"></script>

<?php get_footer();?>
