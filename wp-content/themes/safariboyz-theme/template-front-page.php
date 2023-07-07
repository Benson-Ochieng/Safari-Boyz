<?php

/* Template Name: Home */
get_header();

?>





<script type="text/javascript">
      const popUp = document.querySelector(".pop-up-form");
      const popBtn = document.querySelector("#pop-up-btn");
      const closeBtn = document.querySelector(".close-btn");
      popBtn.addEventListener("click", () => {
        popUp.classList.add("active");
        document.body.style.overflow = "hidden";
      });
      closeBtn.addEventListener("click", () => {
        popUp.classList.remove("active");
        document.body.style.overflow = "auto";
      });
      // Comment Slider
      const commentNext = document.querySelector(".comment-right");
      const commentPrev = document.querySelector(".comment-left");
      const comments = [...document.querySelectorAll(".comment-text")];
      let currentComment = 0;

      commentNext.addEventListener("click", nextComment);
      commentPrev.addEventListener("click", prevComment);

      function nextComment() {
        if (currentComment === comments.length - 1) {
          currentComment = 0;
        } else {
          currentComment += 1;
        }
        comments[0].style.marginLeft = `-${currentComment * 100}%`;
      }
      function prevComment() {
        if (currentComment === 0) {
          currentComment = comments.length - 1;
        } else {
          currentComment -= 1;
        }
        comments[0].style.marginLeft = `-${currentComment * 100}%`;
      }
      setInterval(() => {
        if (currentComment === comments.length - 1) {
          currentComment = 0;
        } else {
          currentComment += 1;
        }
        comments[0].style.marginLeft = `-${currentComment * 100}%`;
      }, 5000);
      // Video Slider
      const videoNext = document.querySelector(".video-right");
      const videoPrev = document.querySelector(".video-left");
      const videos = [...document.querySelectorAll(".video")];
      const vids = [...document.querySelectorAll(".vid")];
      const videoWrapper = document.querySelector(".video-wrapper");
      let currentVideo = 0;

      videoNext.addEventListener("click", nextVideo);
      videoPrev.addEventListener("click", prevVideo);

      function nextVideo() {
        if (currentVideo === videos.length - 1) {
          currentVideo = 0;
        } else {
          currentVideo += 1;
        }
        videos[0].style.marginLeft = `-${currentVideo * 100}%`;
        removeActive(vids);
        vids[currentVideo].classList.add("active");
        if (window.innerWidth <= 767) {
          if (currentVideo === 2) {
            vids[0].style.marginLeft = "-30%";
          }
          if (currentVideo === 1 || currentVideo === 0) {
            vids[0].style.marginLeft = "0";
          }
        }
      }
      function prevVideo() {
        if (currentVideo === 0) {
          currentVideo = videos.length - 1;
        } else {
          currentVideo -= 1;
        }
        videos[0].style.marginLeft = `-${currentVideo * 100}%`;
        removeActive(vids);
        vids[currentVideo].classList.add("active");
        if (window.innerWidth <= 767) {
          if (currentVideo === 2 || currentVideo === videos.length - 1) {
            vids[0].style.marginLeft = "-30%";
          }
          if (currentVideo === 1) {
            vids[0].style.marginLeft = "0";
          }
        }
      }

      vids.forEach((vid) => {
        vid.addEventListener("click", () => {
          currentVideo = vids.indexOf(vid);
          videos[0].style.marginLeft = `-${currentVideo * 100}%`;
          removeActive(vids);
          vids[currentVideo].classList.add("active");
          if (window.innerWidth <= 767) {
            if (currentVideo === 2) {
              vids[0].style.marginLeft = "-30%";
            }
            if (currentVideo === 1) {
              vids[0].style.marginLeft = "0";
            }
          }
        });
      });

      // Blogs Slider
      const blogs = [...document.querySelectorAll(".blog-container")];
      let currrentBlog = 0;
      setInterval(() => {
        if (currrentBlog === blogs.length - 1) {
          currrentBlog = 0;
        } else {
          currrentBlog += 1;
        }
        blogs[0].style.marginLeft = `-${currrentBlog * 100}%`;
      }, 4000);

      // Remove Active Class From Elements
      function removeActive(el) {
        el.forEach((element) => {
          element.classList.remove("active");
        });
      }
    </script>
    <script src="js/main.js"></script>

<?php get_footer();?>
